<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Magamat Alía</title>
        <link rel="stylesheet" href="{{ mix('css/app.css')}}">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Monserrat:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="icon" type="image/ico" href="img/favicon.ico">   
    </head>
    <body>
       <div class="container-fluid">  
        <div class="row row1" style="background-color: #1c4c84"> 
          <div class="col-12 col-md-6">
          <img class="ml-lg-4 mt-5 ml-4 ml-sm-0 col-9 col-sm-5 col-md-7 col-lg-6" src="img/Logo-principal.jpg" alt="logo">
              <h1 class="mt-4 ml-lg-5 ti1" >TU CARRERA </h1>
              <h1 class="ml-lg-5 ti1" style="line-height:60%">UNIVERSITARIA</h1>
              <h1 class="ml-lg-5 ti1" style="color:#f7ca48;">EN ISRAEL</h1>
              <p class="mt-3 ml-lg-5 ba" style="font-size:1.3em;color:white;">Megamat Aliá es la oortunidad de acceder <br> a <strong>las mejores unirvesidades</strong> del Estado de Israel </p>
              <a href="#register">
              <button class="mt-3 mb-4 ml-lg-5 btn ba" style="color:#1c4c84;background-color:#f7ca48;border:none;font-weight: 900;">CONOCÉ MÁS <i class="fa fa-chevron-down"></i> </button>
              </a>
          </div>
          <div class="col-md-6" style="overflow: hidden;">
              <img class="im" src="img/imagen-principal.jpg" alt="img principal">
          </div>
      </div>
      <div class="row mt-3 mb-4 text-center">
          <h4 id="register" class="mt-3 mx-auto offset-xl-3 col-md-8 ba " style="color: #1c4c84;font-weight:900">ENVIANOS TUS DATOS PARA INSCRIBIRTE AL PROGRAMA</h4>
                <form class="mx-auto mt-4 mb-5 text-center" method="POST" action="/#">
                    @csrf
                    <div class="form-row mb-3 mw-100">
                      <div class="form-group col-md-4 mt-2" >
                        <input type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" value="{{ old('nombre') }}" required autocomplete="nombre"   placeholder="Nombre" >
                        @error('nombre')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                      </div>
                      <div class="form-group col-md-4 mt-2 ">
                        <input type="text" class="form-control @error('apellido') is-invalid @enderror" name="apellido" value="{{ old('apellido') }}" required autocomplete="apellido"  placeholder="Apellidos">
                        @error('apellido')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                      </div>
                      <div class="form-group col-md-4 mt-2 fechanac">
                        <input type="date" class="form-control @error('fechanac') is-invalid @enderror" name="fechanac"  required autocomplete="fechanac"  value="00/00/0000">
                        <label for="fechanac" style="font-size:0.9em;">Fecha de nacimiento</label>
                        @error('fechanac')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                      </div>
                    </div>
                    <div class="form-row mb-3 mw-100">
                        <div class="form-group col-md-4 mt-2">
                          <input type="number" class="form-control @error('dni') is-invalid @enderror" name="dni" value="{{ old('dni') }}" required autocomplete="dni"  placeholder="DNI">
                          @error('dni')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        </div>
                        <div class="form-group col-md-4 mt-2">
                          <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"  placeholder="E-mail">
                          @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        </div>
                        <div class="form-group col-md-4 mt-2">
                          <input type="number" class="form-control @error('telefono') is-invalid @enderror" name="telefono" value="{{ old('telefono') }}" required autocomplete="telefono"  placeholder="Teléfono">
                          @error('telefono')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        </div>
                      </div>
                      <div class="form-row mb-3 mw-100">
                        <div class="form-group col-md-4 mt-2">
                          <input type="text" class="form-control @error('direccion') is-invalid @enderror" name="direccion" value="{{ old('direccion') }}" required autocomplete="direccion"  placeholder="Dirección">
                          @error('direccion')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        </div>
                        <div class="form-group col-md-4 mt-2">
                          <input type="text" class="form-control @error('ciudad') is-invalid @enderror" name="ciudad" value="{{ old('ciudad') }}" required autocomplete="ciudad"  placeholder="Ciudad">
                          @error('ciudad')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        </div>
                        <div class="form-group col-md-4 mt-2">
                          <input type="text" class="form-control @error('provincia') is-invalid @enderror" name="provincia" value="{{ old('provincia') }}" required autocomplete="provincia"  placeholder="Provincia">
                          @error('provincia')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        </div>
                      </div>
                      @if(Session::has('mensaje'))
                        <div class="alert alert-success mt-1 mb-1" role="alert">
                          {{ Session::get('mensaje')}} 
                        </div>
                      @endif
                      <button type="submit" class="btn ba" style="background-color:#1c4c84;color:#f7ca48;border:none;font-weight: 800;">ENVIAR</button>
                  </form>
            </div>
            <div class="row mt-3 py-3 text-center colum flex-wrap" style="background-color: #1c4c84;">
                    <img id="logopie" class="mx-auto " src="img/logo-pie1.jpg" alt="cargando img" style="height:0.5%">
                    <img id="logopie" class="mx-auto" src="img/logo-pie2.jpg" alt="cargando img" style="height:0.5%">
                    <img id="logopie" class="mx-auto" src="img/logo-pie3.jpg" alt="cargando img" style="height:0.5%">
                    <img id="logopie" class="mx-auto" src="img/logo-pie4.jpg" alt="cargando img" style="height:0.5%">
            </div>
       </div>
    </body>
</html>
