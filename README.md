## About Del Creative

Del Creative is my campus group project with purpose to open forum and discussion between students to share any knowledge or course. There are  several features that we built in this project:

-   Register, Login & Logout.
-   CRUD Forum.
-   Make a comment,.
-   Upvote/Downvote a comment.
-   Report a comment.
-   Point Conversion
-   Leaderboard
-   Lab Code
-   etc


In this project, i have role as backend engineer. Another friends also have role as backend engineer and frontend engineer. 
Some features was  built by me, such as upvote/downvote a comment, point conversion, leaderboard and password reset. i also help another engineer to fix the validation in registration form.

## How To Run The Project

## 1. Install Composer, XAMPP/Laragon & PHP
This project will running if you have both of these application and languange to run the <b>apache server</b> and <b>sql server</b>. Then, to run the project and install the needs of project dependencies, you should install <b>composer</b>.

You can install them from this website: 
1. Composer - <https://getcomposer.org/>
2. XAMPP with PHP - <https://www.apachefriends.org/index.html>
3. or Laragon - <https://laragon.org/download/>


## 2. Clone the project
You can clone this project with command "git clone" using this github project link into your computer folder.
`git clone https://github.com/almabena3011/delcreative.git`

## 3. Run Composer Install to get all project dependencies
Run `composer install` command using cmd inside the project folder to get all dependecies that needed by the project.

## 4. Import the database
- Open phpmyadmin in your browser
- login the phpmyadmin with "root" as username without password if using Windows
- import the delcreative.sql to the phpmyadmin
- then create `.env` file inside the project, after that copy paste all the content inside `.env.example` file.

## 4. Run the project
Run `php artisan serve` command to run the project and put the local link to the browser. Finally, you can run this project.
You can login as the admin and mahasiswa from the available account that provided in the database.

1. Admin (username: admin; password: password)
2. Mahasiswa (username: mahasiswa1, password: password)

You can also make another account to explore this project. 
Note: _all the new acount must be checked by admin account to verify the account to use the app._

This Project Bulit by Team 2 IF 2019 Institut Teknologi Del.
Thanks to my team.



