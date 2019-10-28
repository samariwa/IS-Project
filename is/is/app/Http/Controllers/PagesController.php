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
    $categories = DB::table('categories')->get();
        return view ('pages.welcome')->withCategories($categories);   
	}
  public function postIndex(Request $request, $id)
  { 
    $result = $request->input('categories');
    $this->getCategoriesjson($id); 
    return redirect()->route('meals_category',$result,$id);
  }
  public function getCategoriesjson($id)
  { 
    
    $categories = DB::table('categories')->where('category_name',$result)->get(); 
    $option_full = "";
    $foreach ($categories as $key => $value) {
      $option_id = $value['id'];
      $option_name = $value['name'];

      $option = "<option value=".$option_id.">".$option_name."</option>";
      $option_full.=$option;
    }

    return json_encode($option_full);
  }
  public function postCategories(Request $request, $id)
  { 
     $meal = $request->input('meal');
     $this->getSelection($meal,$id); 
     return redirect()->route('/select',$meal,$id);
  }
  public function getSelection($meal,$id)
  { 
    $ingredients = DB::table('meals')->where('meal_name',$meal)->get();
    $commodities = $ingredients->order_name; 
    return view('pages.select')->withCommodities($commodities)->withMeal($meal); 
  }
  public function postSelection(Request $request, $id)
  { 
    $order =  $request->input('order');
    $this->getConfirmation($order,$id);
    if (Auth::check()) {
       return redirect()->route('/confirm',$order,$id);
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
    $posts = DB::table('posts')->get();
    $commentsCount = $posts->comments()->count();
    $post = DB::table('posts')
    ->orderBy($commentsCount,'desc')
    ->take(1)
    ->get(); 
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