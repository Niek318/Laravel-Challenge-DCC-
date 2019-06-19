<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <<title>BoreGone</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="css/app.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://unpkg.com/ionicons@4.5.5/dist/css/ionicons.min.css">

        <!-- scripts -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <script src='js\getactivity.js'></script>



        <!-- Styles -->
        <style>

        </style>
</head>

<body>
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
        <div class="top-right links">
            @auth
            <a href="{{ url('/home') }}">Dashboard</a>
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

            @if (Auth::check())
            @php
            $user = Auth::user()->username;
            setcookie('CurrentUser', $user);
            @endphp

            @else
            @php
            $user = 'logged out';
            setcookie('CurrentUser', $user);
            @endphp
            @endif


            <p id="userText">Hello,
                @php
                echo($user);
                @endphp!</p>
                <p id="activityText">Press button to get a recommendation.</p>
                <p id="type"></p>
                <p id="participants"></p>




                <button href="#" class="button" type="button" name="button" onclick="newActivity();">Click me!</button>


                <p>
                    <i>Accesibility rating:</i>
                    <i id="1Star">&#9734;</i>
                    <i id="2Star">&#9734;</i>
                    <i id="3Star">&#9734;</i>
                    <i id="4Star">&#9734;</i>
                    <i id="5Star">&#9734;</i>
                    <i id="rating"></i>

                </p>

                <p>
                    <i>Cost:</i>
                    <i id="1StarPrice">&#9734;</i>
                    <i id="2StarPrice">&#9734;</i>
                    <i id="3StarPrice">&#9734;</i>
                    <i id="4StarPrice">&#9734;</i>
                    <i id="5StarPrice">&#9734;</i>
                    <i id="priceRating"></i>

                </p>
        </div>
    </div>
</body>

</html>
