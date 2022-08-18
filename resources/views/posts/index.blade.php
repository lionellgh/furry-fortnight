<?php
/*
 ../resources/views/posts/index.blade.php
 */
?>

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

 @foreach($posts as $post)
  <!-- Blog Post Excerpt -->
  <div class="col-sm-6">
    <div class="blog-post blog-single-post">
      <div class="single-post-title">
        <h2>{{ $post->nom }}</h2>
      </div>

      <div class="single-post-image">
        <img src="{{ asset ('img/blog/'. $post->image) }}" alt="Post Title">
      </div>

      <div class="single-post-info">
        <i class="glyphicon glyphicon-time"></i>{{ $post->created_at}} <a href="#" title="Show Comments"><i class="glyphicon glyphicon-comment"></i>11</a>
      </div>

      <div class="single-post-content">
        <p>
          {{ $post->texteLead }}
        </p>
      <a href="{{ URL::route('posts.show', ['post'=>$post->id]) }}" class="btn">Read more</a>
      </div>
    </div>
  </div>
@endforeach
  <!-- End Blog Post Excerpt -->

  <!-- Pagination -->
  <div class="pagination-wrapper ">
{{ $posts->links()}}
  </div>

     </div>
   </div>
</div>
