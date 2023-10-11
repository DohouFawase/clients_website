<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('web/imgs/png/1.png') }}" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">  
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+NKo+Unjoined:wght@500;700&family=Roboto:ital@1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="
    https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css
    ">
    <title>@yield('title') | McBonaSport</title>
    @include('components.web.heade')
    @vite(['resources/css/app.css', 'resources/js/app.js'])

   

</head>


<body>
    
        <div>
            @include("components.web.nav")

            @yield("content")

            @include("components.web.footer")

        </div>




        

    @include("components.web.scripts")

    <script src="https://cdn.kkiapay.me/k.js"></script>
   
   
</body>
</html>