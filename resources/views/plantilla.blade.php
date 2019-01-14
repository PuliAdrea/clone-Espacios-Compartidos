<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <!-- Iconos -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <title>@yield('pestaña')</title>
    <style>
    
    .menu{        display: grid;
        grid-template-columns: repeat(3, 1fr);
        grid-gap: 10px;
        grid-auto-rows: minmax(80px, auto); } 
    .logo{        grid-column: 1 / 3;
        grid-row: 1;    }
    .opciones{        grid-column: 3;
        grid-row: 1;
        font-size:150%;
        margin-top:4%}
    .opciones >a{        padding:2%;
        color:grey;
    }
    h1{color:grey;        text-align:center ;  margin-top:3%; }
    .foto{
        margin-top:3%;
    }
 
p{
    text-align:justify !important;
}
    
    </style>
  </head>
  <body>

    <div class="menu">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link active" href="{{route('ini')}}"> <img src="{{ asset('images\logo.png')}}" class="img-thumbnail"></a>
            </li>
        
        </ul>
            <!-- <a href="{{route('ini')}}">  <img src="{{ asset('images\logo.png')}}" ></a> -->
        
            <div class="opciones">
                <a  href="{{route('pre')}}" >Preguntas Frecuentes</a>        
                <a href="{{route('log')}}" >Iniciar Sesión</a>        

            </div>
    </div>
    <hr style="border: 0; border-top: 1px solid #999; border-bottom: 1px solid #333; height:0;">
 
    @yield('section')
  

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>