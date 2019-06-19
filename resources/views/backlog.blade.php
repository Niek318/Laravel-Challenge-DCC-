@extends('layouts.app')

@section('content')

<div class="container">
    @if(isset($details))
        <p> The Search results for your query <b> {{ $query }} </b> are :</p>
    <h2>Sample User details</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach($details as $user)
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
</div>

    <table>
      <tr>
        <th>Activity</th>
        <th>Created at</th>
      </tr>
    <?php
    if(isset($_COOKIE["CurrentUser"])){
        $user = $_COOKIE["CurrentUser"];
    } else{
        echo "Not logged in";
    }

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "tutorial";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT activity, created_at FROM activity WHERE name = '$user' ";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          echo "<tr><td>". $row["activity"] ."</td><td>". $row["created_at"] ."</td></tr>" ;

            }
            echo "</table>";
    } else {
        echo "0 results";
    }
    $conn->close();
    ?>
    </table>
@endsection
