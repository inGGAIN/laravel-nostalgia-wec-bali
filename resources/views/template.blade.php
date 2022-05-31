<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', $title) | {{ config('app.name') }}</title>
</head>
<body>
    <nav class="navbar">
        <div class="container">
            <a href="#" class="navbar-brand">{{ config('app.name') }}</a>
            <button type="button" data-toggle="collapse"></button>
            
                <div class="">
                    <ul class="">
                        <li class="">
                            <a href="/" class="">home <span class="">(current)</span></a>
                        </li>
                        @guest
                        <li class="">
                            <a href="about" class="">about</a>
                        </li>
                        
                        <li class="">
                            <a href="contact" class="">contact</a>
                        </li>
                        
                        <li class="">
                            <a href="login" class="">login</a>
                        </li>
                        @endguest
                        @auth
                        
                        <li class="">
                            <a href="#" class="">post</a>
                        </li>
                        <li class="">
                            <a href="#" class="">users</a>
                        </li>
                        <li class="">
                            <a href="#" class="">category</a>
                        </li>
                        <li class="">
                            <a href="#" class="">password</a>
                        </li>
                        <li class="">
                            <a href="#" class="">logout</a>
                        </li>
                        @endauth
                    </ul>
                    <ul class="">
                        <li class="">
                            <a href="login" class="">sign up</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            <h1 class="">@yield('title', $title)</h1>
        </div>
    </body>
</html>