{{--
  ./resources/views/categories/index.blade.php
 --}}

@extends('template.app')

@section('titre')
  List of post categories
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
            <h2>List of post categories</h2>
          </div>
          <hr/>
          <div class="single-post-content">
            @foreach ($categories as $categorie)
            <h3><a href="{{ asset ('categories/' . $categorie->id) }}">{{ $categorie->nom }}</a></h3>
            @endforeach
          </div>
        </div>
      </div>
      <!-- End Blog Post -->

    </div>
  </div>
</div>

@endsection
