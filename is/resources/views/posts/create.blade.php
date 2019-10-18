@extends('diff_main')
@section('title', '| Create New Post')
@section('content')
@section('stylesheets')
    {!! Html::style('css/parsley.css')!!}
    <script src='https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js' referrerpolicy="origin"></script>
    <script>
      tinymce.init(
      {
          selector: 'textarea',
          plugins: 'link code',
          menubar: false,
      });
    </script>
@endsection
  <div class="row">
  	<div class="col-md-8 col-md-offset-2">
  		<h1>Create New Post</h1>
  	    </hr>
        <!--you can do the 'file'=>true in the form helpers if you want to be able to upload files in forms. This can be done in the normal form tags as follows <form action="..." method="POST" enctype="multipart/form-data">-->
  	    {!! Form::open(['route'=>'posts.store', 'method'=>'STORE', 'files' => true, 'role' => 'form', 'data-parsley-validate'=>'']) !!}
             {{ Form::label('title', 'Title:') }}
             {{ Form::text('title',null,array('class'=>'form-control','required'=>'','maxlength'=>'255'))}}
             {{ Form::label('slug', 'Slug:') }}
             {{ Form::text('slug',null,array('class'=>'form-control','required'=>'','placeholder'=>'Allows only underscore special character...','minlength'=>'5','maxlength'=>'255'))}}<br>
             {{ Form::label('featured_image','Upload featured image:') }}
             {{ Form::file('featured_image') }}<br>
             {{ Form::label('body', 'Post Body:') }}
             {{Form::textarea('body',null,array('class'=>'form-control'))}}
             {{Form::submit('Create Post',array('class'=>'btn btn-success btn-lg btn-block','style'=>'margin-top:20px;'))}}
        {!! Form::close() !!}


  	</div>
  </div>		

@endsection

@section('scripts')
    {!! Html::script('js/parsley.min.js')!!}
@endsection