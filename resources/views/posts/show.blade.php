
<?php
/*
 ../resources/views/posts/show.blade.php
 */
?>
@extends('template.app')


@section('titre')
  {{ $post->nom }}
@endsection

@section('content1')

  <!-- Page Title -->
  <div class="section section-breadcrumbs">
  <div class="container">
  <div class="row">
    <div class="col-md-12">
      <h1>Our Blog</h1>
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
        <h2>{{ $post->nom}}</h2>
      </div>

      <div class="single-post-image">
        <img src="{{ asset('img/blog/'. $post->image)}}" alt="Post Title">
      </div>
      <div class="single-post-info">
        <i class="glyphicon glyphicon-time"></i>{{ $post->created_at}} <a href="#" title="Show Comments"><i class="glyphicon glyphicon-comment"></i>11</a>
      </div>
      <div class="single-post-content">
        <h3>{{ $post->titre_un }}</h3>
        <p>
          {{ $post->texte }}
        </p>
        <p>
          {{ $post->texte }}
        </p>

        <h3>{{ $post->titre_deux }}</h3>
        <p>
         {{ $post->texte_deux}}
        </p>
      </div>
    </div>
  </div>
  <!-- End Blog Post -->
  <!-- Sidebar -->
  <div class="col-sm-4 blog-sidebar">

    <h4>Recent Posts</h4>
    <ul class="recent-posts">
        @include('posts.listeTitre')
    </ul>
    <h4>Categories</h4>
    <ul class="blog-categories">

      @foreach ($post->categories as $categorie)
        <li><a href="{{ asset ('categories/' . $categorie->id) }}">{{ $categorie->nom }}</a></li>
      @endforeach
    </ul>

  </div>
  <!-- End Sidebar -->
</div>
</div>
</div>


@endsection
