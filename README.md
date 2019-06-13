# Laravel-Challenge-DCC-
A coding challenge received from Dutch Coding Company for me to Finish.

before 10-06-2019, spent some time researching what Laravel exactly is, and installed it and started a project with help of laracasts.

10/06/2019 - Today I took on some lessons on laracast. These were about Controllers, Routing, Views and Models. Also, I created a mysql database. 
As for the current state of the challenge. I have a working button, and changing values for activity, type and amount of participants on button press. I'm still working on getting the rating to work with the stars. Finished for today. I think i spent around 5 hours today, of which some where installing laravel and watching videos before actually starting the project. 

12/06/2019 - Today I finished the first part of level, including the star rating which took me a bit to understand. I also managed to setup a mySQL database, and log the current activity and datetime to it. I am currently working on the login functionality of the website, having some trouble implementing login via username since the standard laravel function only allows logging in via email, but this will be fixed soon. 

13/06/2019 - I think I may have corrupted my project in some way, my login functionality is not working anymore. Restarting a new project from scratch, and will try to stick with the laravel way of doing things. (routing, views etc)
I fixed the login part of the challenge. Users can now register for an account, and login using their username and password. I used the laravel auth function for my login functionality. Though I had to change some things like allowing the user to login with their username instead of email address. Also, I had to change password requirements. 

Things that I still need to add

<li>Get username of current logged in user.</li>
<li>Add current user to activity + datetime log.</li>
<li>Create a backlog page with a query to select all activities from database where user = logged in user.</li>
<li>Inspire myself to think of something 'awesome' to add. :thinking:</li>






sources: 
[1] https://laravel-news.com/laravel-5-4-key-too-long-error
[2] https://laracasts.com
[3] https://www.youtube.com/watch?v=n7c5zMk8cx4&t=95s - how to setup a php mysql database