@extends('template.layout')

@section('menu')
<div class="section-container">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">

        @foreach($piratas as $pirata)
          <div class="section-container-spacer text-center">
            <h1 class="h2">{{$pirata->nombre}}</h1>
          </div>
          
          <div class="row">
            <div class="col-md-10 col-md-offset-1">
              <div class="row">
                <div class="col-xs-12 col-md-6">
                  <h3>Descripción:</h3>
                  <p>{{$pirata->descripcion}}</p>
                </div>
                <div class="col-xs-12 col-md-6">
                  <img src="{{$pirata->imagen}}" class="img-responsive" alt="">
                </div>
              </div>
            </div>
          </div>
        @endforeach

        <h2>Datos Extra:</h2>

        
       </div>
      </div>
    </div>
  </div>


@endsection