@extends('main')
@section('title','| Edit Comment')
@section('content')
  <div class="col-md-8 col-md-offset-2">
  	<h1>Edit Comment</h1>
      {{ Form::model($comment, array('route'=>array('comments.update',$comment->id),'method'=>'PUT'))}}
      {{ Form::label('name','Name:') }}
      {{ Form::text('name',null,array('class' => 'form-control', 'disabled' => ''))}}
      {{ Form::label('email','Email:') }}
      {{ Form::text('email',null,array('class' => 'form-control', 'disabled' => ''))}}
      {{ Form::label('comment','Comment:')}}
      {{ Form::textarea('comment',null,array('class' => 'form-control'))}}
      {{ Form::submit('Update Comment', array('class' => 'btn btn-block btn-success', 'style' => 'magin-top:15px'))}}
      {{ Form::close()}}
  </div>
@endsection      