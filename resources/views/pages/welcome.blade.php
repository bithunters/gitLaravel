@extends ('main')
@section('title',"| Home")
@section ('content')


<div class="row">
        <div class="col-md-12">
            <div class="jumbotron">
              <h1>Welcome to my Blog</h1>
              <p>My Name is sandaruwan. Im a Tech blog Writer.I have 4 year expereence in blog post writing</p>
              <p><a class="btn btn-primary btn-lg" href="#" role="button">Populer Post</a></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">

                @foreach($posts as $post)
                    <div class="post">
                        
                        <h1>{{$post->title}}</h1>
                        <p>{{substr($post->body,0,300)}}{{strlen($post->body)>300?"...":""}}
                        </p>
                        <p><a class="btn btn-primary btn" href="{{url('blog/'.$post->slug)}}" role="button">Read More</a></p>
                    </div>
                    <hr>
                @endforeach
            </div>
            <div class="col-md-3 col-md-offset-1">
                <h1>Sidebar</h1>
                Typically, this string should be 32 characters long. The key can be set in the .env environment file. If you have not renamed the .env.example file to .env, you should do that now. If the application key is not set, your user sessions and other encrypted data will not be secure!


                Laravel needs almost no other configuration out of the box. You are free to get started developing! However, you may wish to review the config/app.php file and its documentation. It contains several options such as timezone and locale that you may wish to change according to your application.

                You may also want to configure a few additional components of Laravel, such as:Additional Configuration

            </div>
        </div>
    </div>
@stop