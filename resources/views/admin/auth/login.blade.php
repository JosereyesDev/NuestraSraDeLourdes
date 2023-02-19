<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>{{ config('app.name') }} - Iniciar sesión</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/logo_parroquia.jpg') }}">
    <link href="{{ asset('assets/css/mdbootstrap.min.css') }}" rel="stylesheet">
</head>
<body>
  <style type="text/css">
    body {
    background-color: #eee; /*En el background le vamos a colocar una imagen de fondo*/
  }
  @media (min-width: 768px) {
    .gradient-form {
      height: 100vh !important;
    }
  }
  </style>
<style>
  
</style> 
<section class="h-100 gradient-form">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row">
            <div class="col-md-6 col-lg-5" style="background: #dddddd url({{ asset('assets/img/logo_arquideocesis.png') }}) center/70% no-repeat; border-radius: 1rem 0 0 1rem;">

            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">
                <form action="{{ route('login.post') }}" method="POST">
                  @csrf
                  <div class="align-items-center mb-3 pb-1 text-center">
                    <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                    <span class="h1 fw-bold mb-0">Iniciar sesión</span>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="text" id="username" class="form-control form-control-lg" name="username" required autofocus placeholder="Introduzca el nombre de usuario" autocomplete="off" />
                    <label class="form-label" for="username">Usuario</label>
                  </div>
                  <div class="form-outline mb-3">
                    <input type="password" id="password" class="form-control form-control-lg" name="password" required placeholder="Introducir la contraseña" />
                    <label class="form-label" for="password">Contraseña</label>
                  </div>
                  @if ($errors->has('username'))
                    <span class="text-danger">{{ $errors->first('username') }}</span>
                  @endif
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="form-check mb-2">
                      <input class="form-check-input me-2" type="checkbox" name="remember" value="" id="remember" />
                      <label class="form-check-label" for="remember">Recordarme</label>
                    </div>
                  </div>
                  <div class="pt-1 mb-4">
                    <button class="btn btn-dark btn-lg btn-block" type="submit" style="padding-left: 2.5rem; padding-right: 2.5rem;">Iniciar Sesión</button>
                  </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
</section>

</script>

<script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>

<script src="{{ asset('assets/js/mdbootstrap.min.js') }}"></script>

<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
     

<script type="text/javascript">
  $(function() {
    $('form').submit(function(event) {
      event.preventDefault();
      var formData = $(this).serialize();
      $.ajax({
        url: $(this).attr('action'),
        method: 'POST',
        data: formData,
        dataType: 'json',
        success: function(response) {
          if (response.status == 'success') {
            window.location.href = response.redirect_to;
          } else {
            alert(response.message);
          }
        },
        error: function(xhr, status, error) {
          console.log(xhr.responseText);
        }
      });
    });
  });
</script>     
</body>
</html>