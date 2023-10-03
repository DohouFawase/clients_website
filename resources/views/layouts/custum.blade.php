<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="cart-update-url" content="{{ route('cart.cartUpdate') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">  
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
    <script amount="5000" 
        callback=""
        data=""
        url="<url-vers-votre-logo>"
        position="center" 
        theme="#0095ff"
        sandbox="true"
        key="8f59a0e0f8a911eca56ad905c440058f"
        src="https://cdn.kkiapay.me/k.js">
    </script>
    
</body>
</html>