@extends('diff_main')
@section('title','| Edit Blog Post')
@section('stylesheets')
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
@section('content')
<div class="row">
    {!! Form::model($post,array('route'=> array('posts.update',$post->id),'method'=>'PUT','files'=>true))!!}
	<div class="col-md-12">
   {{ Form::label('title','Title:')}}	
   {{ Form::text('title', null, array("class"=>'form-control input-lg'))}}
   {{ Form::label('slug','Slug:',array("class"=>'form-spacing-top'))}}	
   {{ Form::text('slug', null, array("class"=>'form-control '))}}
   {{ Form::label('featured_image','Update Featured Image:',array("class"=>'form-spacing-top')) }}
   {{ Form::file('featured_image') }}<br>
    {{ Form::label('body','Body:',array("class"=>'form-spacing-top'))}}
   {{ Form::textarea('body',null,array("class"=>'form-control'))}}
   </br>
    </div>
    </div>
    <!--end of .row (form)-->
    <div class="row">
    <div class="col-md-4">
    	<div class="card card-body bg-light">
             <dl class="dl-horizontal">
                 <dt>Created At:</dt>
                 <dd>{{date('F j, Y H:i', strtotime($post->created_at))}}</dd>
             </dl>
             <dl class="dl-horizontal">
                 <dt>Last Updated:</dt>
                 <dd>{{date('F j, Y H:i', strtotime($post->updated_at))}}</dd>
             </dl>
             </hr>
             <div class="row">
                 <div class="col-md-6">
                 	{!! Html::linkRoute('posts.show','Cancel',array($post->id),array('class'=>'btn btn-danger btn-block')) !!}
                 </div>
                 <div class="col-md-6">
                 	{{ Form::submit('Save Changes',array('class'=>'btn btn-success btn-block'))}}
                 </div>	
             </div>		
    	</div>	
    </div>	
    {!! Form::close() !!}
</div>
@endsection