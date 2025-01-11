<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Ilhom Jabborov</title>
  <link rel="stylesheet" href="{{asset('assets/style.css')}}">

</head>
<body>
<!-- partial:index.partial.html -->
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="main.css"><link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;800&display=swap" rel="stylesheet">
  </head>
  <body>
    <div class="main">
      <div class="container a-container" id="a-container">

        <form class="form" id="a-form" method="POST" action="{{ route('register.submit') }}">
          @csrf
          <h2 class="form_title title">Hisob yaratish</h2>
          <input class="form__input" type="text" placeholder="Ism" name ="name" required>
          <input type="hidden" name="_token" value="{{ csrf_token() }}" />
          <input class="form__input" type="email" placeholder="Elektron pochta manzili" name = "email" required>
          <input class="form__input" type="password" placeholder="Parol" name = "password" required>
          <input class="form__input" type="password" name="password_confirmation" placeholder="Parolni tasdiqlash" required>
          <button type="submit" class="button">RO'YXATDAN O'TISH</button>
        </form>

      </div>
      <div class="container b-container" id="b-container">

        <form class="form" id="b-form" method="POST" action="{{ route('login.submit') }}">
          @csrf
          <h2 class="form_title title">Veb-saytga kiring</h2>
          <input type="hidden" name="_token" value="{{ csrf_token() }}" />
          <input class="form__input" type="email" placeholder="Elektron pochta manzili" name = "email" required>
          <input class="form__input" type="password" placeholder="Parol" name = "password" required>
          <button type="submit" class="button">TIZIMGA KIRISH</button>
        </form>
        
      </div>
      <div class="switch" id="switch-cnt">
        <div class="switch__circle"></div>
        <div class="switch__circle switch__circle--t"></div>
        <div class="switch__container" id="switch-c1">
          <h2 class="switch__title title">Xush kelibsiz !</h2>
          <p class="switch__description description">Biz bilan aloqada bo'lish uchun shaxsiy ma'lumotlaringiz bilan tizimga kiring</p>
          <button class="switch__button button switch-btn">TIZIMGA KIRISH</button>
        </div>
        <div class="switch__container is-hidden" id="switch-c2">
          <h2 class="switch__title title">Salom Do'stim !</h2>
          <p class="switch__description description">Shaxsiy ma'lumotlaringizni kiriting va biz bilan sayohatni boshlang</p>
          <button class="switch__button button switch-btn">RO'YXATDAN O'TISH</button>
        </div>
      </div>
    </div>
    <script src="main.js"></script>
  </body>
</html>
<!-- partial -->
  <script  src="{{asset('assets/script.js')}}"></script>

</body>
</html>
