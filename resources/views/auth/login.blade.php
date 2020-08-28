<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,100' rel='stylesheet' type='text/css'>
  <!-- ==============================================
  Favicons
  =============================================== -->
  <link rel="shortcut icon" href="/assets/imgs/icon/codact.png">
  <link rel="apple-touch-icon" href="/assets/imgs/icon/codact.png">
  <link rel="apple-touch-icon" sizes="72x72" href="/assets/imgs/icon/codact.png">
  <link rel="apple-touch-icon" sizes="114x114" href="/assets/imgs/icon/codact.png">

  <style media="screen">
    body {
      background-color: #A8A8A8;
      font-family: 'Montserrat', sans-serif;
    }

    .container {
      /*border:1px solid white;*/
      width: 600px;
      height: 350px;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      display: inline-flex;
    }

    .backbox {
      background-color: #404040;
      width: 100%;
      height: 80%;
      position: absolute;
      transform: translate(0, -50%);
      top: 50%;
      display: inline-flex;
    }

    .frontbox {
      background-color: white;
      border-radius: 20px;
      height: 100%;
      width: 50%;
      z-index: 10;
      position: absolute;
      right: 0;
      margin-right: 3%;
      margin-left: 3%;
      transition: right .8s ease-in-out;
    }

    .moving {
      right: 45%;
    }

    .loginMsg,
    .signupMsg {
      width: 50%;
      height: 100%;
      font-size: 15px;
      box-sizing: border-box;
    }

    .loginMsg .title,
    .signupMsg .title {
      font-weight: 300;
      font-size: 23px;
    }

    .loginMsg p,
    .signupMsg p {
      font-weight: 100;
    }

    .textcontent {
      color: white;
      margin-top: 65px;
      margin-left: 12%;
    }

    .loginMsg button,
    .signupMsg button {
      background-color: #404040;
      border: 2px solid white;
      border-radius: 10px;
      color: white;
      font-size: 12px;
      box-sizing: content-box;
      font-weight: 300;
      padding: 10px;
      margin-top: 20px;
    }

    /* front box content*/
    .login,
    .signup {
      padding: 20px;
      text-align: center;
    }

    .login h2,
    .signup h2 {
      color: #35B729;
      font-size: 22px;
    }

    .inputbox {
      margin-top: 30px;
    }

    .login input,
    .signup input {
      display: block;
      width: 100%;
      height: 40px;
      background-color: #f2f2f2;
      border: none;
      margin-bottom: 20px;
      font-size: 12px;
    }

    .login button,
    .signup button {
      background-color: #35B729;
      border: none;
      color: white;
      font-size: 12px;
      font-weight: 300;
      box-sizing: content-box;
      padding: 10px;
      border-radius: 10px;
      width: 100px;
      position: absolute;
      right: 30px;
      bottom: 30px;
      cursor: pointer;
    }

    /* Fade In & Out*/
    .login p {
      cursor: pointer;
      color: #404040;
      font-size: 15px;
    }

    .loginMsg,
    .signupMsg {
      /*opacity: 1;*/
      transition: opacity .8s ease-in-out;
    }

    .visibility {
      opacity: 0;
    }

    .hide {
      display: none;
    }

    .frontbox .text01{
      display: none;
    }

    @media only screen and (max-width: 500px) {
      .frontbox {
        width: 85%;
        height: auto;
        margin: 0 auto!important;
        position: absolute;
        right: 0;
        left: 0;
        top: 90px;
      }

      .backbox {
          display: none;
      }

      .container {
        width: 100%;
        height: 100%;
        transform: none;
        position: inherit;
        top: 0;
        left: 0;
      }
      .login button, .signup button {
          position: inherit;
      }

      .frontbox .text01{
        display: block;
      }

      .login a,
      .signup a {
        text-decoration: none;
        text-transform: uppercase;
      }
    }
  </style>
</head>

<body>

  <div class="container">
    <div class="backbox">
      <div class="loginMsg">
        <div class="textcontent">
          <p class="title">Vous n’avez pas de compte ?</p>
          <p>Inscrivez-vous pour vous enregistrez.</p>
          <button id="switch1"><a href="{{route('register')}}" style="text-decoration: none; color:#fff">Inscrivez-vous</a> </button>
        </div>
      </div>
      <!--div class="signupMsg visibility">
        <div class="textcontent">
          <p class="title">Avez-vous un compte ?</p>
          <p>Connectez-vous pour voir toute votre collection.</p>
          <button id="switch2">CONNECTEZ-VOUS</button>
        </div>
      </div-->
    </div>
    <!-- backbox -->

    <div class="frontbox">
      <form class="" action="{{ route('login') }}" method="post">
        @csrf

      <div class="login">
        <h2>SE CONNECTER</h2>
        <div class="inputbox">
          <input type="text" name="email" placeholder="  EMAIL">
          @error('email')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
          <input type="password" name="password" placeholder="  MOT DE PASS">
          @error('password')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>
        <div class="form-check">

            <label class="form-check-label" for="remember">
              <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} style="width: 15px;display: inline-block;margin-bottom: 0;height: 12px;"> <span>Se souvenir de moi</span>
            </label>
        </div>
        <p>Mot de pass oublier?</p>
        <button type="submit">SE CONNECTER</button>
        <p class="text01">Vous n’avez pas de compte ? <a href="{{route('register')}}" id="switch4">S'inscrire</a> </p>
      </div>
    </form>
      <!--div class="signup hide">
        <h2>S'INSCRIRE</h2>
        <div class="inputbox">
          <input type="text" name="fullname" placeholder="  NOM & PRENOM">
          <input type="text" name="email" placeholder="  EMAIL">
          <input type="password" name="password" placeholder="  MOT DE PASS">
          <input type="password" name="password" placeholder="  MOT DE PASS">
        </div>
        <button>S'INSCRIRE</button>
        <p class="text01">Avez-vous un compte ? <a href="#" id="switch3">Se connecter</a></p>
      </div-->

    </div>
    <!-- frontbox -->
  </div>

  <!--script type="text/javascript">
    $(document).ready(function() {
      var $loginMsg = $('.loginMsg'),
        $login = $('.login'),
        $signupMsg = $('.signupMsg'),
        $signup = $('.signup'),
        $frontbox = $('.frontbox');

      $('#switch1').on('click', function() {
        $loginMsg.toggleClass("visibility");
        $frontbox.addClass("moving");
        $signupMsg.toggleClass("visibility");

        $signup.toggleClass('hide');
        $login.toggleClass('hide');
      })

      $('#switch2').on('click', function() {
        $loginMsg.toggleClass("visibility");
        $frontbox.removeClass("moving");
        $signupMsg.toggleClass("visibility");

        $signup.toggleClass('hide');
        $login.toggleClass('hide');
      })

      $('#switch3').on('click', function() {

        $signup.toggleClass('hide');
        $login.toggleClass('hide');
      })

      $('#switch4').on('click', function() {

        $signup.toggleClass('hide');
        $login.toggleClass('hide');
      })

      setTimeout(function() {
        $('#switch1').click()
      }, 1000)

      setTimeout(function() {
        $('#switch2').click()
      }, 3000)


    });
  </script-->
</body>

</html>
