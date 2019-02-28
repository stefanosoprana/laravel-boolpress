<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Show</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h1 style="margin-top:30px;">{{ $post->title }}</h1>
          <h3>Autore: {{ $post->author }}</h3>
          <div>
            {{ $post->content }}
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
