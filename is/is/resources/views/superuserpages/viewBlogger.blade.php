@extends('diff_main')
@section('title', '| View Blogger')
@section('content')
<div class="row">
    <div class="col-md-8">  
   <img src="{{ "https://www.gravatar.com/avatar/" . md5(strtolower(trim($bloggers->email))) ."?s=50&d=wavatar" }}" class="author-image"><h1>{{ $bloggers->name }}</h1>
          <p class="lead">E-mail Address: {{ $bloggers->email }}</p>
          <p class="lead">Phone Number: {{ $bloggers->number }}</p>
    </div>
    <div class="col-md-4">
        <div class="card card-body bg-light">
             <dl class="dl-horizontal">
                 <dt>Created At:</dt>
                 <dd>{{date('F j, Y H:i', strtotime($bloggers->created_at))}}</dd>
             </dl>
             <dl class="dl-horizontal">
                 <dt>Last Updated:</dt>
                 <dd>{{date('F j, Y H:i', strtotime($bloggers->updated_at))}}</dd>
             </dl>
             </hr>
             <div class="row">
                 <div class="col-md-6">
                    {!! Html::linkRoute('bloggers.edit','Edit',array($bloggers->id),array('class'=>'btn btn-primary btn-block')) !!}
                 </div>
                 <div class="col-md-6">
                    {!! Form::open(array('route'=>array('bloggers.destroy',$bloggers->id),'method'=>'DELETE')) !!}
                    {!! Form::submit('Delete',array('class'=>'btn btn-danger btn-block')) !!}
                        </div>
                    {!! Form::close() !!}
                   <!--<a href="#" class="btn btn-danger btn-block">Delete</a>-->
                 </div> 
                 <div class="row">
                        <div class="col-md-12 form-spacing-top">
                            {{ Html::linkRoute('bloggers.index','<< See All Bloggers',array(),array('class'=>'btn btn-light btn-block btn-h1-spacing'))}}
                    </div>
             </div>     
        </div>  
    </div>  
</div>
@endsection