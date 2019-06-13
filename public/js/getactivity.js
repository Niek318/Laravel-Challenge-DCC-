function newActivity() {
    $(document).ready(function() {

        $.getJSON('http://www.boredapi.com/api/activity/', function(activityJson) {

            document.getElementById("activityText").innerHTML = 'Maybe you could: ' + activityJson.activity + '.';
            document.getElementById("type").innerHTML = 'This activity is of type: ' + activityJson.type + '.';
            document.getElementById("participants").innerHTML = 'This activity is done best with ' + activityJson.participants + ' participant/participants.';
            document.getElementById("rating").innerHTML = activityJson.accessibility * 5;
            document.getElementById("priceRating").innerHTML = activityJson.price * 5;

            setAccessRating(activityJson.accessibility * 5);
            setPriceRating(activityJson.price * 5);

            var jsonString = JSON.stringify(activityJson.activity);
            const xhr = new XMLHttpRequest();
            xhr.open("POST", "/json.php");
            xhr.setRequestHeader("Content-Type", "application/json");
            xhr.send(jsonString);

        });
    });

}



function setAccessRating(accessrating) {
    var counter = 1;

    while (accessrating >= 1 || counter < 5) {
        if (accessrating >= 1) {
            document.getElementById(counter + "Star").innerHTML = "⭐";
        } else {
            document.getElementById(counter + "Star").innerHTML = "&#9734;";
        }

        counter++;
        accessrating--;
    }
}


function setPriceRating(pricerating) {
    var counter = 1;

    while (pricerating >= 1 || counter < 5) {
        if (pricerating >= 1) {
            document.getElementById(counter + "StarPrice").innerHTML = "⭐";
        } else {
            document.getElementById(counter + "StarPrice").innerHTML = "&#9734;";
        }

        counter++;
        pricerating--;
    }
}
