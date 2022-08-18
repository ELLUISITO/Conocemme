<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link href="{{ asset('css/login_register_estilos.css') }}" rel="stylesheet">
    <script src="{{ asset('js/login_register_scripts.js') }}" defer></script>


    <title>Conoceme | Login</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <!--INCIO DE SEION-->
          <form action="{{ route('login') }}" class="sign-in-form" method="POST">
            @csrf
            <h2 class="title">Inicia Sesión</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" id="email" type="email" placeholder="Correo electronico"  name="email" value="{{ old('email') }}" required autocomplete="email" autofocus/>
              @error('email')
              <span>{{ $message }}</span>
              @enderror
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input id="password" type="password" placeholder="Contraseña" name="password" required autocomplete="current-password" />
              @error('password')
              <span>{{ $message }}</span>
              @enderror

            </div>
            <input type="submit" value="Continuar" class="btn solid"  {{ __('Login') }} />
            {{-- <p class="social-text">Ó inicia sesión con:</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-apple"></i>
              </a>
            </div> --}}
          </form>

          <!--REGISTRO-->
          <form action="{{ route('register') }}"  method="POST" class="sign-up-form" >
            @csrf

            <h2 class="title">Registro</h2>

            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" id="email" placeholder="Correo electronico" name="email" value="{{ old('email') }}" required autocomplete="email"/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" id="password" placeholder="Contraseña" name="password" required autocomplete="new-password"/>
            </div>

            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" id="password-confirm" placeholder="Contraseña" name="password_confirmation" required autocomplete="new-password" />
            </div>


            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" id="name" placeholder="Nombre" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus/>
            </div>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" id="second_name" placeholder="Segundo nombre" name="second_name" value="{{ old('second_name') }}" required autocomplete="segundo_nombre" autofocus/>
            </div>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text"  id="last_name" placeholder="Apellidos" name="last_name" value="{{ old('last_name') }}" required autocomplete="apellido" autofocus/>
            </div>
            <input type="submit" class="btn" value="Registrarme" {{ __('Register') }}/>

            {{-- <p class="social-text">Ó inicia sesión con:</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div> --}}
          </form>
        </div>
      </div>

      <!--CONTENEDORES-->
      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>¿eres nuevo?</h3>
            <p>
              Registrate gratis y conoce restaurantes nuevos de acuerdo a tus
              necesidades
            </p>
            <button class="btn transparent" id="sign-up-btn">
              REGISTRARME
            </button>
          </div>
          <img src="{{ asset('img/log.svg') }}"  class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>¿ya tienes cuenta?</h3>
            <p>
              ¡Vamos! Inicia sesión y conoce nuevos restaurantes de acuerdo a
              tus necesidades
            </p>
            <button class="btn transparent" id="sign-in-btn">
              INICIAR SESIÓN
            </button>
          </div>
          <img src="{{ asset('img/register.svg') }}" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="app.js"></script>
  </body>
</html>
