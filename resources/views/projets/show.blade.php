
<?php
/*
 ../resources/views/projets/show.blade.php
 */
?>
@extends('template.app')

@section('titre')
  {{$projet->titre}}
@endsection

@section('content1')

  <!-- Page Title -->
<div class="section section-breadcrumbs">
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h1>Product Details</h1>
    </div>
  </div>
</div>
</div>

  <div class="section">
  <div class="container">
    <div class="row">
      <!-- Product Image & Available Colors -->
      <div class="col-sm-6">
        <div class="product-image-large">
          <img src="{{ asset('img/portfolio/'. $projet->image)}}" alt="Item Name">
        </div>
        <div class="colors">
        <span class="color-white"></span>
        <span class="color-black"></span>
        <span class="color-blue"></span>
        <span class="color-orange"></span>
        <span class="color-green"></span>
      </div>
      </div>
      <!-- End Product Image & Available Colors -->
      <!-- Product Summary & Options -->
      <div class="col-sm-6 product-details">
        <h2>{{ $projet->titre }}</h2>
      <h3>Quick Overview</h3>
        <p>
         {{ $projet->text }}
      </p>
        <p>
        {{ $projet->text }}
      </p>
      <h3>Project Details</h3>
      <p><strong>Client: </strong>

               {{ $projet->clients->nom}}

      </p>
      <p><strong>Date: </strong>{{ $projet->created_at }}</p>
      <p><strong>Tags: </strong>
        @foreach($projet->tags as $tag)
        {{ $tag->nom }}
      @endforeach
      </p>
      </div>
      <!-- End Product Summary & Options -->

    </div>
</div>
</div>

<hr>

  <div class="section">
  <div class="container">
  <div class="row">

  <div class="section-title">
  <h1>Similar Works</h1>
  </div>


<ul class="grid cs-style-2">
  @foreach($relateds as $related)
  <div class="col-md-3 col-sm-6">
    <figure>
      <img src="{{ asset('img/portfolio/'. $related->ProjetImage)}}" alt="img04">
      <figcaption>
        <h3>Settings</h3>
        <span>{{ $related->AuteurNom }}</span>
        <a href="{{ URL::route('projets.show', ['projet'=>$related->ProjetID]) }}">Take a look</a>
      </figcaption>
    </figure>
    </div>
  @endforeach
</ul>


  </div>
</div>
</div>
@endsection
