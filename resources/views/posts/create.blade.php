@extends('main')
@section('title','| create new post')

@section('stylesheet')
 	{!! Html::style('css/parsley.css') !!}
@endsection
@section('content')

	<div class="row">

		<div class="col-md-8 col-md-offset-2">
			<h1>Create new Post</h1>
			{!! Form::open(['route' => 'posts.store','data-parsley-validate'=>""]) !!}
    			{{Form::label('title','Title:')}}
    			{{Form::text('title', null, array('class'=>'form-control', 'placeholder'=>'Enter Title', 'required'=>'','maxlength'=>'50'))}}

    			{{Form::label('slug','Slug:')}}
    			{{Form::text('slug', null, array('class'=>'form-control', 'placeholder'=>'Enter Slug', 'required'=>'','minlegnth' => '5', 'maxlength'=>'255'))}}


    			{{Form::label('body','Body:')}}
    			{{Form::textarea('body', null, array('class'=>'form-control', 'placeholder'=>'Enter Body', 'required'=>''))}}
    			{{Form::submit('Submit',array('class'=>'btn btn-success btn-lg btn-block','style'=>'margin-top:10px;')) }}

			{!! Form::close() !!}


			<hr>
		</div>
		
	</div>

@stop

@section('script')
	{!! Html::script('js/parsley.min.js') !!}
@endsection