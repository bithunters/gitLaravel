<!DOCTYPE html>
    <html lang="en">
      <head>
    @include('partials._head')
      </head>
              <body>
            @include('partials._nav')
            @include('partials._messages')
            <div class="container">

              {{Auth::check()?"logged In":"loged Out"}}


                @yield ('content')

                @include('partials._footer')

            </div>

                @include('partials._scripts')
               
              </body>
    </html>
