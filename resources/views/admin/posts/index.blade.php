@extends('layouts.admin_app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1>Tutti i post <a href="{{ route('admin.posts.create') }}" class="btn btn-primary">Aggiungi nuovo</a></h1>
        <table class="table">
          <thead>
            <tr>
              <th>ID</th>
              <th>Titolo</th>
              <th>Autore</th>
              <th>Contenuto</th>
              <th>Categoria</th>
              <th>Visualizza</th>
              <th>Aggiorna</th>
              <th>Elimina</th>
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
                  <a href="#" class="btn btn-primary">View</a>
                </td>
                <td>
                  <a href="#" class="btn btn-success">Edit</a>
                </td>
                <td>
                  <form action="#">
                    <input class="btn btn-danger" type="submit" value="Elimina">
                  </form>
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
@endsection
