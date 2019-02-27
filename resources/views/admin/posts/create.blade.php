@extends('layouts.admin_app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1>Aggiungi un nuovo post</h1>
        <form class="form-group" action="{{ route('admin.posts.store') }}" method="post">
          @csrf
          @method('POST')
          <div class="form-group">
            <label for="title">Titolo</label>
            <input type="text" name="title" class="form-control" placeholder="Inserisci il titolo">
          </div>
          <div class="form-group">
            <label for="author">Autore</label>
            <input type="text" name="author" class="form-control" placeholder="Inserisci l'autore">
          </div>
          <div class="form-group">
            <label for="content">Contenuto</label>
            <textarea name="content" rows="8" cols="80" placeholder="Scrivi il Post" class="form-control"></textarea>
          </div>
          <div class="form-group">
            <label for="category_id">Categoria</label>
            <select class="form-control" name="category_id">
              @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->title }}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <input type="submit" value="Salva" class="form-control">
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
