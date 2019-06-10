<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css\app.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/ionicons@4.5.5/dist/css/ionicons.min.css">
    <title>Leave that couch!</title>
</head>

<body>
    <h1>Projects</h1>

    @foreach ($projects as $project)
    <li>{{ $project->title }}</li>
    @endforeach

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>




  <script src= 'js\getactivity.js'></script>

    <p id="activityText">Press button to get a recommendation.</p>
    <p id="type"></p>
    <p id="participants"></p>

    <button type="button" name="button" onclick="newActivity();">Click me!</button>

@php $rating = 3.2; @endphp

   <p>
       <div class="placeholder" style="color: lightgray;">
           <i class="fa fa-star"></i>
           <i class="fa fa-star"></i>
           <i class="fa fa-star"></i>
           <i class="fa fa-star"></i>
           <i class="fa fa-star"></i>
           <span class="small">({{ $rating }})</span>
       </div>

       <div class="overlay" style="position: relative;top: -22px;">

           @while($rating>0)
               @if($rating >0.5)
                   <i class="fa fa-star checked"></i>
               @else
                   <i class="fa fa-star-half"></i>
               @endif
               @php $rating--; @endphp
           @endwhile

       </div>
   </p>



</body>

</html>
