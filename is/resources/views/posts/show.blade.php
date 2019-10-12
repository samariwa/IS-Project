@extends('diff_main')
@section('title', '| View Post')
@section('content')
<div class="row">
	<div class="col-md-8">
   <img src="{{ asset('images/' . $post->image)}}" height="400" width="800"/>     
   <h1>{{ $post->title }}</h1>
   <p class="lead">{!! $post->body !!}</p>
   <!--$post variable that was created in the PostController in the show section-->
   <div id="backend-comments" style="margin-top:50px">
        <h3>Comments <small>{{ $post->comments()->count() }} total</small></h3>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Comment</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($post->comments as $comment)
                <tr>
                    <td>{{ $comment->name }}</td>
                    <td>{{ $comment->email }}</td>
                    <td>{{ $comment->comment }}</td>
                    <td>
                        <a href="{{ route('comments.edit', $comment->id)}}" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i></a><br><br>
                       <a href="{{ route('comments.delete',$comment->id)}}" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </div>
    <div class="col-md-4">
    	<div class="card card-body bg-light">
             <dl class="dl-horizontal">
                 <dt>Url:</dt>
                 <!--in the href below you can also use route('blog.single',$post->slugs)-->
                 <dd><a href="{{ url('blog/'.$post->slug) }}">{{ url('blog/'.$post->slug) }}</a></dd>
             </dl>
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
                 	{!! Html::linkRoute('posts.edit','Edit',array($post->id),array('class'=>'btn btn-primary btn-block')) !!}
                 	<!--the code below is the blade way of doing th below-->
                   <!--<a href="#" class="btn btn-primary btn-block">Edit</a>-->
                 </div>
                 <div class="col-md-6">
                    {!! Form::open(array('route'=>array('posts.destroy',$post->id),'method'=>'DELETE')) !!}
                    {!! Form::submit('Delete',array('class'=>'btn btn-danger btn-block')) !!}
                        </div>
                    {!! Form::close() !!}
                   <!--<a href="#" class="btn btn-danger btn-block">Delete</a>-->
                 </div>	
                 <div class="row">
                        <div class="col-md-12">
                            {{ Html::linkRoute('posts.index','<< See All Posts',array(),array('class'=>'btn btn-light btn-block btn-h1-spacing'))}}
                    </div>
             </div>		
    	</div>	
    </div>	
</div>
@endsection