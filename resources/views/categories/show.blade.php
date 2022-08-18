{{--
  ./resources/views/categories/show.blade.php
 --}}

@extends('template.app')

@section('titre')
  Liste des categories de posts
@stop

@section('content1')

<!-- Page Title -->
<div class="section section-breadcrumbs">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1>Categories</h1>
      </div>
    </div>
  </div>
</div>


<div class="section">
  <div class="container">
    <div class="row">
      <!-- Blog Post -->
      <div class="col-sm-8">
        <div class="blog-post blog-single-post">
          <div class="single-post-title">
            <h2>Détail(s) de  '{{ $categorie->nom }}'</h2>
          </div>
          <hr/>
          <div class="single-post-content">
            @foreach ($categorie->posts as $post)
            <h2><a href="{{ asset ('posts/' . $categorie->id) }}">{{ $post->nom }}</a></h3>
            @endforeach
            <h4><a href="index">All categories</h4>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
