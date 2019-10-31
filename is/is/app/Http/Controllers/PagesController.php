<?php
#namespace dictates that this controller should remain in this location App\Http\Controllers and not move anywhere
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use App\Comment;
use App\Post;
use Session;
use App\Category;
use App\Meal;
use App\OrderDetail;
use App\Order;
use App\Recipe;
use Mail;
#extents to controllers.php which defines how all controllers should work
class PagesController extends Controller
{
	#process variable data or parameters
	#talk to model
	#receive data from the model
	#compile or process data from the model if needed
	#pass the data to the correct view
	public function getIndex()
	{	
        return view ('pages.welcome');   
	}
  function fetch(Request $request)
    {
     if($request->get('query'))
     {
      $query = $request->get('query');
      $data = DB::table('categories')
        ->where('category_name', 'LIKE', "%{$query}%")
        ->get();
      $output = '<ul class="dropdown-menu positioning" style="display:block; position:relative ; width:800px">';
      foreach($data as $row)
      {
       $output .= '
       <li class="dropdown-item anchor positioning">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<b>'.$row->category_name.'<b></li>
       ';
      }
      $output .= '</ul>';
      echo $output;
     }
    }
    public function postSearch(Request $request)
    {
      $result = $request->category_name;
      $categories = \App\Category::with('meals')->where('category_name','Cereals')->first(); 
      return view ('pages.meals_category',compact('categories'));  
   }
   ///////////////////////////////////////////////////////////////////////////////////////
  
  public function postCategories(Request $request)
  { 
     $meal = $request->meal;
     $recipes = \App\Meal::with('recipes')->where('meal_name','Beans')->first(); 
     $ingredients = \App\Meal::with('OrderDetails')->where('meal_name','Beans')->first();
     $id_type = $ingredients->type_id;
      $type = DB::table('food_types')->where('id',$id_type)->get(); 
      return view ('pages.select',compact('ingredients','meal','recipes','type'));  
  }
  public function postSelection(Request $request)
  { 
    $order =  $request->input('order');
    $this->getConfirmation($order);
    if (Auth::check()) {
       return redirect()->route('/confirm',$order);
      } else {
        return redirect()->route('login');
      }
        
  }
  public function getConfirmation()
  {  
   return view ('pages.confirm_details');  
  }
  public function postConfirmation(Request $request)
  {  
   $number = $request->input('number');
   $location = $request->input('location');
   $this->validate($request, array(
          'number'=>'required',
          'location'=>'required'
        ));
        //store in the database
        $details = new Order;
        $details->number = $request->number;
        $details->delivery_location = $request->location; 
        $details->save();
        return redirect()->route('pay');
  }
  public function getPayment()
  {  
    $user = Auth::user();
   return view ('pages.payment')->withUser($user);  
  }
  public function getComplete()
  {  
   return view ('pages.complete');  
  }
     public function getBlog()
   {
      $posts = Post::orderBy('created_at','desc')->limit(20)->get();
      return view('blog.index')->withPosts($posts);
   }
   public function getPopular()
   {
    $posts = Post::with('comments')->get()->sortBy(function($post) {
    return $post->comments->count();
})->reverse();
      return view('blog.popular')->withPost($post);
   }
   public function getSingle($slug)
   {
     //fetch from the database based on slug
     $post = Post::where('slug','=',$slug)->first();
     //return the vies and pass in the post object    
     return view('blog.single')->withPost($post);   
   }
    public function getAbout()
    {
        return view ('pages.about');
    }
    public function getContact()
    {
        return view ('pages.contact');
    }
    public function postContact(Request $request)
    {
        $this->validate($request,array('email'=>'required|email','subject'=>'min:3','message'=>'min:10'));
        $data = array('email' => $request->email,
                       'subject' => $request->message,
                       'bodyMessage' => $request->message
     );
        Mail::send('emails.contact',$data,function($message)use($data)
     {
         $message->from($data['email']);
         $message->to('samuelmariwa@gmail.com');
         $message->subject($data['subject']);
     }
    );
        Session::flash('success','Your Email was Sent!');
        return redirect('/');
    }
}
?>