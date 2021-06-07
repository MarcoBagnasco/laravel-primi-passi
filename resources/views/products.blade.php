<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            /* GENERAL */
            html, body {
                height: 100vh;
                margin: 0;
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                font-size: 18px;
                text-align: center;
            }
            li{
                display: inline-block;
                list-style: none;
                margin-right: 10px;
            }
            /* UTILITIES */
            .container {
                max-width: 1200px;
                margin: 10px auto;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <header>
                <nav>
                    <ul class="flex">
                        <li><a href="/">Home</a></li>
                        <li><a href="/products">Products</a></li>
                        <li><a href="{{ route('about') }}">About</a></li>
                        <li><a href="{{ route('contacts') }}">Contacts</a></li>
                    </ul>
                </nav>
            </header>
            
            <main>
                <h1>Our Products</h1>
            </main>
        </div>
    </body>
</html>
