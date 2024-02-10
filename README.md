## Online Quiz Website in PHP using Laravel framework

This Online Quiz website is based on Laravel (PHP) that can help to understand how to create an online quiz system. Currently, it has the following features:

- Login/Signup as a user (Signup possible with email address or numberic value(without decimal) and a password of minimum 8 characters).
- View and choose from the quiz list (There are 2 existing quizes).
- Attempt quiz.
- Show attempted quiz result with highlighting wrong answers with Red color and correct answers with Green color. Correct answer also shown separately.
- Show final score.

## How to Run this Project
To run this project, you can follow below steps.

- Please make sure you have installed "Composer" on your system.
- Then, download this project from github and open it with any editor of your choice.
- Now, type "composer update" in the terminal of your editor and hit enter. If your editor doesn't have built in terminal, you can use default terminal of your OS.
- Rename the .env.example to .env and put your database details here.
- Then run this command "php artisan migrate" and then, "php artisan db:seed"
- Now, run command "php artisan serve" to test this project.
- In your browser you can see it running on localhost or 127.0.0.1

Screenshots of all the screens can be seen in "online-quiz-website-php/storage/screenshots"
