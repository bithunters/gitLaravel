@extends('main')
@section('title','| view Post')

@section('content')

	<div class="row">

		<div class="col-md-8">
			
			{!! Form::model($post,['route'=>['posts.update',$post->id],'method'=>'PUT' ]) !!}

			{{Form::label('title','Title:',['class'=>'form-sp-top'])}}
			{{Form::text('title',null,['class'=>'form-control form-lg'])}}

			{{Form::label('slug','Slug:',['class'=>'form-sp-top'])}}
			{{Form::text('slug',null,['class'=>'form-control'])}}

			{{Form::label('body','Body:',['class'=>'form-sp-top'])}}
			{{Form::textarea('body',null,['class'=>'form-control'])}}
		</div>
		<div class="col-md-4">
			<div class="well">

				<dl class="dl-horizontal">

					<dt>Created At:</dt>
					<dd>{{date('M j, Y H:ia',strtotime($post->created_at)) }}</dd>
					
				</dl>
				<dl class="dl-horizontal">

					<dt>Last Updated At:</dt>
					<dd>{{date('M j, Y H:ia',strtotime($post->updated_at)) }}</dd>
					 
				</dl>
				<div class="row">

					<div class="col-md-6">
						{{Html::linkRoute('posts.show','Cancel',array($post->id),array('class'=>'btn btn-danger btn-block'))}}
					</div>
					
					<div class="col-md-6">
						{{Form::submit('Save',array('class'=>'btn btn-success btn-block'))}}
					
						
					</div>
					{!!Form::close()!!}
				</div>
				
			</div>
		</div>		
	</div>

@endsection