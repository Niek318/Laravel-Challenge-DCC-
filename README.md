# Laravel-Challenge-DCC-
A coding challenge received from Dutch Coding Company


Setup steps:

<li>Have Laravel installed (Since I received a Laravel challenge I assume this is the case). </li>
<li>Clone this github repo either via git command prompt or download it.</li>
<li>Download xampp or an alternative</li>
<li>Extract the .zip file I added to the git in C:/xampp/htdocs and delete the other content in this folder.</li>
<li>Open the xampp control panel and start the Apache and MySQL modules.</li>
<li>Using cmd on windows, or terminal on linux/mac, cd to the cloned git folder.</li>
<li>Run the command: php artisan serve.</li>
<li>Now both the website and database are running locally, copy paste the link displayed in the terminal after executing the previous step.</li>
<li>You will now be able to login on the website using the credentials you provided me, or choose to register a new account.</li>

9/06/2019 - spent some time researching what Laravel exactly is, and installed it and started a project with help of laracasts.

10/06/2019 - Today I took on some lessons on laracast. These were about Controllers, Routing, Views and Models. Also, I created a mysql database.
As for the current state of the challenge. I have a working button, and changing values for activity, type and amount of participants on button press. I'm still working on getting the rating to work with the stars. Finished for today. I think I spent around 5 hours today, of which some where installing laravel and watching videos before actually starting the project.

12/06/2019 - Today I finished the first part of level, including the star rating which took me a bit to understand. I also managed to setup a mySQL database, and log the current activity and datetime to it. I am currently working on the login functionality of the website, having some trouble implementing login via username since the standard laravel function only allows logging in via email, but this will be fixed soon. (around 3-4 hours)

13/06/2019 - I think I may have corrupted my project in some way, my login functionality is not working anymore. Restarting a new project from scratch, and will try to stick with the laravel way of doing things. (routing, views etc)
I fixed the login part of the challenge. Users can now register for an account, and login using their username and password. I used the laravel auth function for my login functionality, since it was easy to implement and hashed the password for me automatically. Though I had to change some things like allowing the user to login with their username instead of email address. Also, I had to change password requirements since the minimum password length was 8 and the passwords in the challenge pdf ranged from 3 to 4 characters. (2 hours)

Things that I still need to add:

<li>Get username of current logged in user.</li>
<li>Add current user to activity + datetime log.</li>
<li>Create a backlog page with a query to select all activities from database where user = logged in user.</li>
<li>Inspire myself to think of something 'awesome' to add. :thinking:</li>

Also, having some trouble fully understanding where exactly my files should go in Laravel. Will do more research and watch videos on this when I'm spending less time on exams.

14/06/2019 - Today was mostly a study day. I did not get a whole lot done. Still thinking of a solution on how to bundle my current user with the current shown activity.

17/06/2019 - I decided to just save the current username as a cookie, and retrieve this cookie when I want to do a insertion in my database. Or when I want activities per user in my backlog. (2hours)
Also created a basic backlog. Will be updated later.

Things I need to add:

<li>"Secure the page with authentication" - The user does not need to be logged in to use the tool at the moment.</li>
<li>Not satisfied about the current backlog, since it only prints the requests data right now. This will be updated.</li>
<li>Make sure my current implementation is bug free.</li>
<li>Think of an awesome idea I can add.</li>

18/06/2019 - User now needs to be logged in before being able to access the main page. This means that only activities suggested to an actual logged in user will be logged in the database. Backlog page is now available, and can be found in the Dashboard after logging in.
The Backlog now looks better. I also implemented Laravel's "forgot password" functionality, which works fluently now.

19/06/2019 - started working on a random movie picker from a json list I deleted some attributes from (actor, genre). Then I tried to retrieve the first picture on google images with the movie title and year of release as search, but found out I need a dedicated domain to use the google photos API. I will now limit myself to a link to imdb.com. (1 hour)
As the random movie picker output will not be saved in a database, I decided to keep it open for guests.

sources:

[1] https://laravel-news.com/laravel-5-4-key-too-long-error

[2] https://laracasts.com

[3] https://www.youtube.com/watch?v=n7c5zMk8cx4&t=95s - how to setup a php mysql database

[4] https://laracasts.com/discuss/channels/laravel/custom-validation-for-password-reset?page=1

[5] https://github.com/prust/wikipedia-movie-data

[6] https://www.reddit.com/r/laravel/

[7] https://stackoverflow.com/questions/31378357/laravel-5-sending-email

[8] https://laravel.com/docs/5.8/authentication

[9] https://www.w3schools.com/php/php_mysql_select.asp

[10] https://stackoverflow.com/questions/15617512/get-json-object-from-url
