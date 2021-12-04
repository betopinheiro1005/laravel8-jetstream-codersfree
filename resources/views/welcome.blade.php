<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->

        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>

    @php
        $color = "red";
        $alert = "alert2";
    @endphp

    <body>

        <div class="container mx-auto">
            <x-alert :color=$color class="mb-4">

                <x-slot name="title">
                    Título 1
                </x-slot>

                Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus consequuntur temporibus iusto unde nihil delectus ipsum asperiores esse accusantium, quo pariatur minima? Libero quibusdam tenetur non a quasi, reiciendis culpa?
            </x-alert>

            <x-alert2 color="blue" class="mb-4">
                <x-slot name="title">
                    Título de teste
                </x-slot>

                Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta libero ab iusto nisi tempore dolores porro harum, ex fuga at fugit illo. Assumenda ducimus iusto alias accusantium, itaque hic fuga!
            </x-alert2>

            <x-dynamic-component :component="$alert">
                <x-slot name="title">
                    Título de teste
                </x-slot>

                Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta libero ab iusto nisi tempore dolores porro harum, ex fuga at fugit illo. Assumenda ducimus iusto alias accusantium, itaque hic fuga!
            </x-dynamic-component>

        </div>

    </body>
</html>
