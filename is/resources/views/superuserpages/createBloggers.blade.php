@extends('diff_main')
@section('title', '| Create New Admin')
@section('content')
@section('stylesheets')
    {!! Html::style('css/parsley.css')!!}
@endsection
  <div class="row">
  	<div class="col-md-8 col-md-offset-2">
  		<h1>Create New Blogger</h1>
  	    </hr>
        <!--you can do the 'file'=>true in the form helpers if you want to be able to upload files in forms. This can be done in the normal form tags as follows <form action="..." method="POST" enctype="multipart/form-data">-->
  	    {!! Form::open(['route'=>'bloggers.store', 'method'=>'STORE', 'files' => true, 'role' => 'form', 'data-parsley-validate'=>'']) !!}
             {{ Form::label('name', 'Name:') }}
             {{ Form::text('name',null,array('class'=>'form-control','required'=>'','maxlength'=>'255'))}}
             {{ Form::label('email', 'E-mail Address:') }}
             {{ Form::text('email',null,array('class'=>'form-control','required'=>'','minlength'=>'5','maxlength'=>'255'))}}
           {{ Form::label('number', 'Mobile Number:') }}</br>
             {{Form::text('number',null,array('class'=>'form-control','required'=>''))}}
             {{ Form::label('role', 'Role:') }}
              {{ Form::text('role', 'blogger',array('class'=>'form-control')) }}
             {{ Form::label('password', 'Password:') }}</br>
             {{Form::Password('password',null,array('class'=>'form-control','required'=>''))}}
             {{Form::submit('Create Blogger',array('class'=>'btn btn-success btn-lg btn-block','style'=>'margin-top:20px;'))}}
        {!! Form::close() !!}


  	</div>
  </div>		

@endsection

@section('scripts')
    {!! Html::script('js/parsley.min.js')!!}
@endsection