<?php
/*
 ../resources/views/pages/index.blade.php
 */
?>


<ul class="grid cs-style-3">
  @foreach($projets as $projet)
      <div class="col-md-4 col-sm-6">
    <figure>
      <img src="{{ asset('img/portfolio/'. $projet->image)}}" alt="img04">
      <figcaption>
        <h3>Settings</h3>
        <span>{{ $projet->auteurs->nom }}</span>
        <a href="{{ URL::route('projets.show', ['projet'=>$projet->id]) }}">Take a look</a>
      </figcaption>
    </figure>
      </div>
@endforeach
</ul>

     </div>
   </div>
 </div>

<hr>

<!-- Our Articles -->
<div class="section">
  <div class="container">
    <div class="row">
      <!-- Featured News -->
      <div class="col-sm-6 featured-news">
         @include('template.partials._lastBlog')
      </div>
      <!-- End Featured News -->


      <!-- Latest News FB -->
      <div class="col-sm-6 latest-news">
          @include('template.partials._lastPost')
      </div>
      <!-- End Featured News -->
    </div>
  </div>
</div>
