## Online Quiz Website in PHP using Laravel framework

This Online Quiz website is based on Laravel (PHP) which can help to understand how to create an online quiz system. Currently, it has the following features:

- Login/Signup as a user (Signup possible with an email address or numeric value(without decimal) and a password of a minimum 8 characters).
- View and choose from the quiz list (There are 2 existing quizzes).
- Attempt quiz.
- Show attempted quiz results by highlighting wrong answers with Red color and correct answers with Green color. The correct answer is also shown separately.
- Show the final score.

## How to Run this Project
To run this project, you can follow the below steps.

- Please make sure you have installed "Composer" on your system.
- Then, download this project from GitHub and open it with any editor of your choice.
- Now, type "composer update" in the terminal of your editor and hit enter. If your editor doesn't have a built-in terminal, you can use the default terminal of your OS.
- Rename the .env.example to .env and put your database details here.
- Then run this command "php artisan migrate" and then, "php artisan db:seed"
- Now, run the command "php artisan serve" to test this project.
- In your browser, you can see it running on localhost or 127.0.0.1

Screenshots of all the screens can be seen in "online-quiz-website-php/storage/screenshots"

