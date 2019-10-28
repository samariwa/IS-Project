@extends('diff_main')
@section('title','| Edit Blogger')
@section('content')
<div class="row">
    {!! Form::model($blogger,array('route'=> array('bloggers.update',$blogger->id),'method'=>'PUT'))!!}
	     <div class="col-md-12">
           {{ Form::label('name','Name:')}} 
           {{ Form::text('name', null, array("class"=>'form-control input-lg'))}}
           {{ Form::label('email','E-mail:',array("class"=>'form-spacing-top'))}}   
           {{ Form::text('email', null, array("class"=>'form-control input-lg'))}}
            {{ Form::label('number','Number:',array("class"=>'form-spacing-top'))}}
            {{ Form::text('number', null, array("class"=>'form-control input-lg'))}}
           </br>
      </div>
</div>
    <!--end of .row (form)-->
    <div class="row">
    <div class="col-md-4">
    	<div class="card card-body bg-light">
             <dl class="dl-horizontal">
                 <dt>Created At:</dt>
                 <dd>{{date('F j, Y H:i', strtotime($blogger->created_at))}}</dd>
             </dl>
             <dl class="dl-horizontal">
                 <dt>Last Updated:</dt>
                 <dd>{{date('F j, Y H:i', strtotime($blogger->updated_at))}}</dd>
             </dl>
             </hr>
             <div class="row">
                 <div class="col-md-6">
                 	{!! Html::linkRoute('bloggers.show','Cancel',array($blogger->id),array('class'=>'btn btn-danger btn-block')) !!}
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