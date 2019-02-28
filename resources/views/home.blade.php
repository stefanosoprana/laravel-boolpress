<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Post</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h1>Tutti i post</h1>
          <div class="row">
            <div class="col-12" style="margin-bottom:15px">
              <a href="{{ route('admin.home') }}" class="btn btn-primary">Login Admin</a>
            </div>
          </div>
          <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Titolo</th>
                <th>Autore</th>
                <th>Contenuto</th>
                <th>Categoria</th>
                <th>Visualizza</th>
              </tr>
            </thead>
            <tbody>
              @forelse ($posts as $post)
                <tr>
                  <td>{{ $post->id }}</td>
                  <td>{{ $post->title }}</td>
                  <td>{{ $post->author }}</td>
                  <td>{{ str_limit($post->content, 10, '(...)') }}</td>
                  <td>{{ $post->category->title }}</td>
                  <td>
                    <a href="{{ route('show', $post->id ) }}" class="btn btn-primary">View</a>
                  </td>
                </tr>
              @empty
                <h2>non ci sono post</h2>
              @endforelse
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </body>
</html>
