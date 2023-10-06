<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<<<<<<< HEAD
    <meta name="cart-update-url" content="{{ route('cart.cartUpdate') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
=======
    <meta name="csrf-token" content="{{ csrf_token() }}">  
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+NKo+Unjoined&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="
    https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css
    ">
>>>>>>> 1aa2aa645c83601943fc54a1d1ef64b50117ae86
    <title>@yield('title') | McBonaSport</title>
    @include('components.web.heade')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

    <div>
        @include('components.web.nav')

        @yield('content')

        @include('components.web.footer')

    </div>

<<<<<<< HEAD
    @include('components.web.scripts')
    <script src="https://cdn.kkiapay.me/k.js"></script>
=======

        

    @include("components.web.scripts")

    <script src="https://cdn.kkiapay.me/k.js"></script>
    <script amount="1000" 
        callback="https://kkiapay-redirect.com"
        data=""
        url=""
        position="right" 
        theme="#0095ff"
        sandbox="true"
        key="8f59a0e0f8a911eca56ad905c440058f"
        src="https://cdn.kkiapay.me/k.js"></script>
   
>>>>>>> 1aa2aa645c83601943fc54a1d1ef64b50117ae86
</body>

</html>
