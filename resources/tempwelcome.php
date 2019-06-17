<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <<title>Leave that couch!</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="css\app.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://unpkg.com/ionicons@4.5.5/dist/css/ionicons.min.css">

        <!-- scripts -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <script src= 'js\getactivity.js'></script>


        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }


            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif



            <div class="content">
                <div class="title m-b-md">
                    <p>Bored?</p>
                    <p>Leave that couch!</p>
                </div>

                <p id="activityText">Press button to get a recommendation.</p>
                <p id="type"></p>
                <p id="participants"></p>


                <button href="#" class="button" type="button" name="button" onclick="newActivity();">Click me!</button>



               <p>
                       <i>Accesibility rating:</i>
                       <i id = "1Star">&#9734;</i>
                       <i id = "2Star">&#9734;</i>
                       <i id = "3Star">&#9734;</i>
                       <i id = "4Star">&#9734;</i>
                       <i id = "5Star">&#9734;</i>
                       <i id = "rating">Rating</i>

               </p>

               <p>
                       <i>Price rating:</i>
                       <i id = "1StarPrice">&#9734;</i>
                       <i id = "2StarPrice">&#9734;</i>
                       <i id = "3StarPrice">&#9734;</i>
                       <i id = "4StarPrice">&#9734;</i>
                       <i id = "5StarPrice">&#9734;</i>
                       <i id = "priceRating">Rating</i>

               </p>
            </div>
        </div>
    </body>
</html>
