<?php
#namespace dictates that this controller should remain in this location App\Http\Controllers and not move anywhere
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Post;
use Session;
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
     public function getBlog()
   {
      $posts = Post::orderBy('created_at','desc')->limit(20)->get();
      return view('blog.index')->withPosts($posts);
   }
   public function getPopular()
   {
      $popular = Post::get()->sortByDesc('view_count');
      return view('blog.popular')->withPopular($popular);
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