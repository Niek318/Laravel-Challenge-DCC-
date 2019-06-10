  function newActivity() {
      $(document).ready(function() {

          $.getJSON('http://www.boredapi.com/api/activity/', function(activityJson) {

              document.getElementById("activityText").innerHTML = 'Maybe you could: ' + activityJson.activity+'.';
              document.getElementById("type").innerHTML = 'This activity is of type: ' + activityJson.type + '.';
              document.getElementById("participants").innerHTML = 'This activity is done best with ' + activityJson.participants + ' participant/participants.';

          });
      });

  }

  function getRating(key) {
    $(document).ready(function() {

        $.getJSON('http://www.boredapi.com/api/activity?key=' + key, function(activityJson) {

            return activityJson.accessibility*10/2;

        });
    });

  }
