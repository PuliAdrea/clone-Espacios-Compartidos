@extends('plantilla')


@section('pestaña')
    Preguntas Frecuentes
@endsection('pestaña')


@section('section')

<div class="container">
<h1>Estas son las preguntas más frecuentes:</h1>

@foreach($grupodep as $item)
    <div style="margin-top:5%;" >
        <a href="{{  route('pre', $item)  }}" class=" h4 list-group-item list-group-item-dark"> {{$item}}</a>
    <div>
@endforeach
    <div style="margin-top:2%;">
    @if(!empty($pregunta))

        @switch($pregunta)

            @case($pregunta == 'Pregunta 1')
            <h2 style="color:blue;">Respuesta a la {{ $pregunta }}:</h2>
            <p>  es Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque, animi eaque reprehenderit repellat aliquid officiis esse! Dolorum vitae hic, ipsum tenetur voluptatem, quisquam deserunt quidem, maiores expedita aliquid atque ex.</p>
            @break

            @case($pregunta == 'Pregunta 2')
            <h2 style="color:blue;">Respuesta a la {{ $pregunta }}:</h2>
            <p>  es Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque, animi eaque reprehenderit repellat aliquid officiis esse! Dolorum vitae hic, ipsum tenetur voluptatem, quisquam deserunt quidem, maiores expedita aliquid atque ex.</p>
            @break

            @case($pregunta == 'Pregunta 3')
            <h2 style="color:blue;">Respuesta a la {{ $pregunta }}:</h2>
            <p>  es Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque, animi eaque reprehenderit repellat aliquid officiis esse! Dolorum vitae hic, ipsum tenetur voluptatem, quisquam deserunt quidem, maiores expedita aliquid atque ex.</p>
            @break
            
        @endswitch
    @endif
    </div>
</div>
@endsection('section')