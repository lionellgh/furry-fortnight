
<?php
/*
 ../resources/views/pages/show.blade.php
 */
?>
@extends('template.app')

@section('titre')
  {{$pages->onglet}}
@endsection

@section('content1')
<!-- Page Heading -->

@if ($pages->id === 1)
  <section id="main-slider" class="no-margin">
         @include('template.partials._slider')
  </section><!--/#main-slider-->

  <!-- Our Portfolio -->

      <div class="section section-white">
        <div class="container">
          <div class="row">

      <div class="section-title">
      <h1>Our Recent Works</h1>
      </div>
  @include('pages.index')

@elseif ($pages->id === 2)

  @include('projets.index')

@elseif ($pages->id === 3)

  @include('posts.index')

@elseif ($pages->id === 4)

  @include('contact.index')
@endif

@endsection
