<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            :root {
                --font-sans: 'Figtree', sans-serif;
            }

            body {
                font-family: var(--font-sans);
                line-height: 1.5;
                margin: 0;
                background-color: #f8fafc;
                color: #0f172a;
                display: flex;
                align-items: center;
                justify-content: center;
                height: 100vh;
            }

            h1 {
                font-size: 3rem;
                font-weight: 600;
            }
        </style>
    </head>
    <body>
        <h1>Laravel</h1>
    </body>
</html>
