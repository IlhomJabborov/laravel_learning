<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <!-- Site Meta -->
    <title>Ilhom Jabborov</title>

	<!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet"> 

	<!-- Custom & Default Styles -->
	<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/carousel.css')}}">
    <link rel="stylesheet" href="{{asset('assets/stylei.css')}}">

</head>
<body class="left-menu" style = "background-color: #F08080;">
        <div id="home" class="video-section js-height-full">
            <div class="overlay"></div>
            <div class="home-text-wrapper relative container">
                <div class="home-message">
                    <img src="assets\logo_ubtuit.png" alt="" width="150">
                    <p>Kirish va Ro'yxatdan O'tish</p>
                    <p style="all: unset; color: white;">Foydalanuvchilar uchun oddiy kirish va ro'yxatdan o'tish tizimi.</p><br>
                    <p style="all: unset; color: white;">Tayyor komponentalarsiz kirish ro’yxatdan o’tish amalga oshishi kerak.</p><br>
                    <p style="all: unset; color: white;">Blade dan ham API dan ham amalga oshirish talab qilinadi</p> <br><br>
                    <div class="btn-wrapper">
                        <div class="text-center">
                            <a href="{{ route('reglog') }}" class="btn btn-primary">Blade</a> &nbsp;<a href="{{ route('apidocs') }}" class="btn btn-default">API </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>