
<?php
/*
 ../resources/views/template/partials/_slider.blade.php
 */
?>

<div class="carousel slide">
  <ol class="carousel-indicators">
  <li data-target="#main-slider" data-slide-to="0" class="active"></li>
@for ($i=1; $i < count($prosliders)+1; $i++)
  <li data-target="#main-slider" data-slide-to="{{ $i }}"></li>
@endfor
</ol>
    <div class="carousel-inner">
        <div class="item active" style="background-image: url(' {{ asset ('img/slides/1.jpg') }}')">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="carousel-content centered">
                            <h2 class="animation animated-item-1">Welcome to BASICA! A Bootstrap3 Template</h2>
                            <p class="animation animated-item-2">Sed mattis enim in nulla blandit tincidunt. Phasellus vel sem convallis, mattis est id, interdum augue. Integer luctus massa in arcu euismod venenatis. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/.item-->

        @foreach($prosliders as $projet)
        <div class="item" style="background-image: url(' {{asset ('img/portfolio/'. $projet->image) }}')">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="carousel-content center centered">
                            <h2 class="animation animated-item-1">{{ $projet->titre}}</h2>
                            <p class="animation animated-item-2"> {{ $projet->auteurs->nom }} </p>
                            <br>
                            <a class="btn btn-md animation animated-item-3" href="{{ URL::route('projets.show', ['projet'=>$projet->id]) }}">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/.item-->
     @endforeach

    </div><!--/.carousel-inner-->
</div><!--/.carousel-->
<a class="prev hidden-xs" href="#main-slider" data-slide="prev">
    <i class="icon-angle-left"></i>
</a>
<a class="next hidden-xs" href="#main-slider" data-slide="next">
    <i class="icon-angle-right"></i>
</a>
