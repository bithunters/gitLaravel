@extends('main')
@section('title','| view Post')

@section('content')

	<div class="row">

		<div class="col-md-8">
			
			<h1>{{$post->title}}</h1>
			<p class="lead">{{$post->body}}</p>

		</div>
		<div class="col-md-4">
			<div class="well">
				<dl class="dl-horizontal">

					<lable>URL:</lable>
					<p><a href="{{url('blog/'.$post->slug)}}">{{url('blog/'.$post->slug)}}</a></p>
					
				</dl>


				<dl class="dl-horizontal">

					<lable>Created At:</lable>
					<p>{{date('M j, Y H:ia',strtotime($post->created_at)) }}</p>
					
				</dl>
				<dl class="dl-horizontal">

					<lable>Last Updated At:</lable>
					<p>{{date('M j, Y H:ia',strtotime($post->updated_at)) }}</p>
					 
				</dl>
				<div class="row">

					<div class="col-md-6">
						{{Html::linkRoute('posts.edit','Edit',array($post->id),array('class'=>'btn btn-primary btn-block'))}}
					</div>
					
					<div class="col-md-6">
						{!!  Form::open(['route' => ['posts.destroy',$post->id],'method'=>'DELETE']) !!}

						{!! Form::submit('Detete',['class'=>'btn btn-block btn-danger']) !!}

						{!!  Form::close() !!}

					</div>
					
				</div>
				<div class="row">

					<div class="col-md-12">
						{{Html::linkRoute('posts.index','<< see all posts',[],['class'=>'btn btn-block btn-default btn-h1-space'])}}
					</div>
					
					
				</div>
			</div>
		</div>		
	</div>

@endsection