@extends('main')
@section('title','| Blog')
@section('content')
<div class="row">
            <div class="col-md-12">
                <div class="jumbotron">
                      <img src="http://ideastank.guru/home/wp-content/uploads/2018/09/image001.jpg"  width="700px" height="400px">         
                      <hr class="my-4">
                      <p>Please read our popular post.</p>
                      <a class="btn btn-primary btn-lg" href="#" role="button">Popular Post</a>
                </div>
            </div>
        </div> 
  <div class="row">
  	<div class="col-md-8 col-md-offset-2">
  		<h2>Blog</h2>
  	</div>
  </div>
  @foreach($posts as $post)
  <div class="row">
  	<div class="col-md-8 col-md-offset-2">
  		<h2>{{ $post->title }}</h2>
  		<h5>Published:{{ date('M j, Y' ,strtotime($post->created_at))}}</h5>
  		<p>{{ substr($post->body, 0, 250) }}{{ strlen($post->body)>250 ? "..." : ""}}</p>
  		<a href="{{ url('blog/'.$post->slug) }}" class="btn btn-primary">Read More</a>
  	</div>
  </div>
  <hr>
  @endforeach
@endsection