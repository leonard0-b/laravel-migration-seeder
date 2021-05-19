<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <!-- CSS -->
        <link rel="stylesheet" href="/css/app.css">
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">

    </head>
    <body>
        <main class="flex">
            <div class="w-60">
                <img src="https://media.architecturaldigest.com/photos/58238acb355a259d55d5185d/master/pass/surreal-landscapes-us-01.jpg" alt="">
                <div class="overlay"></div>
                <div class="title">
                    <h2>Hei,</h2>
                    <h1>where you off to next?</h1>
                </div>
                <div class="label">
                    <h2>Booltrip</h2>
                </div>
            </div>
            <div class="w-40 flex">
                <div class="title-right">
                    <h2>What are you looking for?</h2>
                </div>
                <div class="icons flex">
                    <div class="icon">
                        <img src="./img/hotel.svg" alt="">
                        <p>Hotels</p>
                    </div>
                    <div class="icon active">
                        <img src="./img/flight.svg" alt="">
                        <p>Flights</p>
                    </div>
                    <div class="icon">
                        <img src="./img/trips.svg" alt="">
                        <p>Trips</p>
                    </div>
                    <div class="icon">
                        <img src="./img/car.svg" alt="">
                        <p>Car Rental</p>
                    </div>
                </div>
                @foreach ($travels as $travel)
                <div class="packs flex">
                    <div class="col33">
                        <p>{{$travel->destination_state}}</p>
                    </div>
                    <div class="col33">
                        <p>{{$travel->destination_city}}</p>
                    </div>
                    <div class="col33">
                        <p>{{$travel->price}}$</p>
                    </div>
                </div>
                @endforeach
            </div>
        </main>
    </body>
</html>

<!--         <div>
            @foreach ($travels as $travel)
                {{$travel->destination_state}}
                {{$travel->destination_city}}
            @endforeach
        </div>
 -->
