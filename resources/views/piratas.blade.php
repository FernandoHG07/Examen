@extends('template.layout')

@section('menu')

<div class="section-container">
  <div class="container">
    <div class="row">
      
      <div class="col-sm-8 col-sm-offset-2 section-container-spacer">
        <div class="text-center">
          <h1 class="h2">02 : Piratas</h1>
          <p>Años de historia llevaron a una epoca en la que los piratas eran las personas mas temibles en los mares. En la actualidad los piratas
            son entretenimiento por medio de comic, juegos, caricaturas cuentos, entre muchos otros.</p>
            <p>A continuacion, algunos de ellos:</p>
        </div>
      </div>

      <div class="col-md-12">
     
      <div id="myCarousel" class="carousel slide projects-carousel">
        <!-- Carousel items -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="row">

                @foreach($piratas as $pirata)
                  <div class="col-sm-4">
                      <a href="{{route('pirata', $pirata->id)}}" title="" class="black-image-project-hover">
                        <img src="{{$pirata->imagen}}" alt="" class="img-responsive">
                      </a>

                      <div class="card-container card-container-lg">
                        <h3>{{$pirata->nombre}}</h3>
                        <p>{{$pirata->descripcion}}</p>
                        <a href="{{route('pirata',$pirata->id)}}" title="" class="btn btn-default">Ver mas...</a>
                      </div>
                    </div>
                @endforeach
                </div>
                <!--/row-->
            </div>
            <!--/item-->
            
     </div>

    <!--/myCarousel-->
    </div>
    </div>
  </div>

  
</div>





@endsection