@extends('main')
@section('title',"| $post->title ")
@section('content')
     <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <img src="{{ asset('images/' . $popular->image)}}" height="400" width="800"/>
            <h1>{{ $popular->title }}</h1>
            <p>{!! $popular->body !!}</p>
        </div>
     </div>
     <h5><strong>Comments</strong>&ensp;<i class="fa fa-comments"></i></h5>
     <div class="row">
        <div class="col-md-8 col-md-offset-2">
            @foreach($popular->comments as $comment)
            <div class="comment"> 
                <div class="author-info"> 
                    <img src="{{ "https://www.gravatar.com/avatar/" . md5(strtolower(trim($comment->email))) ."?s=50&d=wavatar" }}" class="author-image">
                    <div class="author-name"> 
                        <h4>{{ $comment->name }}</h4>
                    </div>
                </div>
                <div class="author-time">
                        <p>{{ date('F j, Y H:i', strtotime($comment->created_at)) }}</p>
                 </div>  
                <div class="comment-content">   
                    {{ $comment->comment }}
                </div>  
                  <br>
            </div>
            @endforeach         
        </div>
     </div>
            <div class="row">
                <div id="comment-form" class="col-md-8 col-md-offset-2" style="margin-top:50px">
                    {{ Form::open(array('route'=>array('comments.store', $popular->id), 'method'=>'POST')) }}
                    <h4><strong>Add a Comment</strong></h4>
                    <div class="row">
                    <div class="col-md-6">
                        {{ Form::label('name',"Name:")}}
                        {{ Form::text('name',null,array('class'=>'form-control'))}}
                    </div>
                    <div class="col-md-6">
                        {{ Form::label('email',"Email:")}}
                        {{ Form::text('email',null,array('class'=>'form-control')) }}
                    </div>
                    <div class="col-md-12">
                        {{ Form::label('comment',"Comment:") }}
                        {{ Form::textarea('comment',null,array('class'=>'form-control')) }}
                        {{ Form::submit('Add Comment',array('class'=>'btn btn-success btn-block','style'=>'margin-top:15px','rows'=>'5')) }}
                    </div>
                </div>  
                    {{ Form::close() }}
                </div>              
            </div>  
@endsection