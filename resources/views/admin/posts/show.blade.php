@extends('layouts.admin_app')
@section('content')
  <div class="container">
    <div class="row">
        <div class="col-12">
            <h1>{{ $post->title }}</h1>
            <h3>Autore: {{ $post->author }}</h3>
            <div>
              {{ $post->content }}
            </div>
        </div>
    </div>
</div>
@endsection
