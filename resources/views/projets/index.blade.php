
<?php
/*
 ../resources/views/projets/index.blade.php
 */
?>


<!-- Page Title -->
<div class="section section-breadcrumbs">
    <div class="container">
       <div class="row">
          <div class="col-md-12">
               <h1>Our Portfolio</h1>
          </div>
      </div>
    </div>
</div>


<div class="section">
  <div class="container">
   <div class="row">
     <div class="col-sm-12">
    <h2>{{ $pages->sous_titre}}</h2>
    <h3>{{ $pages->textlead}}</h3>
    <p>
      {{ $pages->texte}}
    </p>

    </div>
   </div>
  </div>
</div>

<div class="section">
  <div class="container">
      <div class="row">

         <div id="liste-projets">
             @include('projets.more')
         </div>

      </div>

      <ul class="pager">
        <li><a id="more" href="#">More works</a></li>
      </ul>

   </div>
</div>
