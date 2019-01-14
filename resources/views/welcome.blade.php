@extends('plantilla')

@section('pestaña')
   Espacios Compartidos
@endsection('pestaña')


@section('section')
<div class="comtainer">
    <h1>Espacios perfectos para compartir gastos <br> y rentabilizar los lugares que no usas</h1>
</h1>
</div>

<div class="foto" style="background-image: url('../images/ogicina.png'); width: 100%;  min-height:400px;">

    <div style="display: grid; grid-template-columns: repeat(7, 1fr);grid-gap: 10px;grid-auto-rows: minmax(100px, auto); padding-top:2.8%">

        <div  style="grid-column: 2/3;">
            <div  style=" width: 200%;   " >
        
                <div  style="background-color:blue; width: 100%; min-height:30px;"></div>
                <div style=" background-color:white ; padding: 4% 13% 4% 13% ;">
                    <h2 style="text-align:justify">¿Tienes un espacio para compartir?<h2>
                    <p style="font-size:70%">Tendrás la oportunidad de ofrecer y compartir los espacios que no utilizas generando ingresos extra</p>
            
                </div> <br>
                <div  style="background-color:blue; width: 100%; min-height:30px ">
                    <a href="#" ><h2 style="color:white;text-align:center ;">Publicar</h2></a> 
                </div>
            </div>
        </div>
        <div  style="grid-column: 5/6;">
        <div  style=" width: 200%;   " >
        
                <div  style="background-color:green; width: 100%; min-height:30px;"></div>
                <div style=" background-color:white ; padding: 4% 13% 4% 13% ;">
                    <h2 style="text-align:justify">¿Buscas un espacio para compartir?<h2>
                    <p style="font-size:55%">Encuentra el lugar de oﬁcina, local comercial, bodega y consultorio que estas buscando.</p>
                </div> <br>
                <div  style="background-color:green; width: 100%; min-height:30px ">
                    <a href="{{route('bus')}}" ><h2 style="color:white;text-align:center ;">Buscar</h2></a> 
                </div>
            </div>
        </div>
    </div>
</div>

<div style="width:99%;  margin: 5% 0.5% 5% 0.5%; ">

     
     <div class="container">
        <div class="row">
            <div class="col" > </div>
            <div class="col-3" style=" text-align: center; "><br>
            <i class="fas fa-mouse-pointer fa-5x"></i>
            <p ><h1>1</h1>Escoge la opción más apropiada para tu necesidad (Oferta - demanda).</p>
            </div>
            <div class="col" ><br>
            </div>
            <div class="col-3" style="text-align: center;"><br>
            <i class="fas fa-clipboard-list fa-5x"></i>
            <p ><h1>2</h1>Haz el registro específico del espacio según sea el caso.</p>
            </div>
            <div class="col" ><br>
            </div>
            <div class="col-3" style=" text-align: center;"><br>
            <i class="fas fa-search fa-5x"></i>
            <p ><h1>3</h1>Una vez efectuado el registro podrás revisar los espacios disponibles (demanda) y ofrecer los espacios disponibles que tienes (Oferta).</p>
            </div>
            <div class="col" ><br>
            </div>
        </div>

        <div class="row">
            <div class="col" > </div>
            <div class="col-3" style=" text-align: center; "><br>
            <i class="fas fa-calendar-alt fa-5x"></i>
            <p ><h1>4</h1>Agenda tu cita.</p>

            </div>
            <div class="col" ><br>
            </div>
            <div class="col-3" style="text-align: center;"><br>
            <i class="fas fa-file-signature fa-5x"></i>
            <p ><h1>5</h1>Efectúa el contrato.</p>

            </div>
            <div class="col" ><br>
            </div>
            <div class="col-3" style=" text-align: center;"><br>
            <i class="fas fa-store fa-5x"></i>
            <p ><h1>6</h1>Comparte espacios.</p>

            </div>
            <div class="col" ><br>
            </div>
        </div>
</div>
</div>

  
<footer style="background-color:grey;">
    <br><br><br><br><br><br><br>
</footer>
@endsection('section')
