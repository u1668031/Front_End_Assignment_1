# Front-End Web Development Assignment 1: Post a Workout
This application creates a format for a user to view other user's posted workouts. Once a user is registered/logged in, they can post, update or delete their own workouts. The purpose of the application is to present an MVC framework for CRUD and authentication functionality. A test framework has been included.

## Technologies & Features
The following is a list of the technologies and frameworks used to develop the application:
  1. An MVC framework through laravel Breeze:
	  1. Migrations to tell the database how to create tables and fields.
	  2. Models to access the data.
	  3. Seeders to insert dummy data into the database.
	  4. Factories tell the seeder how to create dummy data using faker.
	  5. Routes to map URLS to the controllers.
	  6. Resource routes to map several URLS to several controller's methods in one call.
	  7. Controllers to take inputted data from the front-end using a HTTP request.
	  8. Views which are blade files containing HTML files.
  2. A test framework has been used to test the application for bugs.
  3. Git bash to:
	  1. Manage files.
	  2. Commit to repo.
	  3. Use php artisan for MVC framework.
	  4. Installing dependancies for the application.
	  5. Running development.
  4. Git Hub for commits and a repo.
  4. Composer as a dependancy management tool.
  5. Guzzle from the composer tool, for PHP functionality.
  6. MySQL for database construction and management.
  7. Node for development tools.
  8. Tailwind from Node dependancies for a CSS base.

## Installation
You will need to follow these steps to install and run the application on your local machine.

### Clone Repo
Create a new directory in your webserver package directory, then open Git Bash in the new directory and enter the following commands:

  1. git clone git@github.com:u1668031/Front_End_Assignment_1.git 
  2. cd Front_End_Assignment_1
  3. git checkout master

This fetches all the application's files and commits.

### Configure Webserver
Configure your webserver so that the document root is:

C:\Example\Front_End_Assignment_1\public

This will direct the localhost webserver to our application once we have it up and running.

### Create DB in MySQL
You will need to create a database in MySQL. This is where the application will input and store any data.

### Installing PHP Dependancies
Open a terminal through your webserver package and run the following commands:

  1. php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
  2. php -r "if (hash_file('sha384', 'composer-setup.php') === '906a84df04cea2aa72f40b5f787e49f22d4c2f19492ac310e8cba5b96ac8b64115ac402c8cd292b8a03482574915d1a8') { echo       'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
  3. php composer-setup.php
  4. php -r "unlink('composer-setup.php');"

This will retrieve the installation file from the URL, verify the installer, then download and install the composer. You can use 'php composer.phar' to view the composer.

You will need to install the composer dependancies into the application's directory. in Git Bash from the application's directory run (example):

../../composer.phar install

You should now be able to run the application through your localhost webserver.

### Installing Node Dependancies & Building Front-End Assets
Go to https://nodejs.org/dist/latest-v16.x/ and select the 'node-v16.13.0' install for your specific system e.g. 'node-v16.13.0-win-x64.zip'.
insert the contents of the file to the same drive as the application directory e.g. 'C:\node\'.
Run the following command from the terminal of your webserver package:

set PATH=C:\node;%PATH%

This will install Node and set a path for your system. You can view the node and npm version by using 'node -v' or 'npm -v' in the Git Bash terminal.

In the Git Bash terminal from your application's directory run (example):

  1. ../../../node/npm install -D tailwindcss@latest postcss@latest autoprefixer@latest @tailwindcss/forms

  2. npm run dev

Doing this will install all the node dependancies required to run the application and develop all the front-end assets.

## Connecting a Database & Using Migration/Seed
Open up the application in a text editor and create a new file named '.env'.
Copy and paste all the content from '.env.example' into the new '.env' file.
Edit the following fields with your specific database details:

  1. DB_CONNECTION= ***
  2. DB_HOST= ***
  3. DB_PORT= ***
  4. DB_DATABASE= ***
  5. DB_USERNAME= ***
  6. DB_PASSWORD= ***

Then open up your Git Bash terminal from the application's directory and run the following commands:

  1. php artisan migrate
  2. php artisan db:seed

This will connect the application to your database, migrate the models/tables, and populate them with dummy data using the seeder.


## Using the Application
Follow these steps to use the application for it's intended purpose:

  1. Register as a user by clicking on 'Register'. This will redirect you to a registration page. You are required to fill in all the fields. Email addresses must include '@'.    When confirming your password, if they do not match, you will be prompted. Passwords must be atleast 8 characters long. You can click the eye icon to view your characters when  entering your chosen password. If you have previously registered, you can click the 'Already registered?' link which will redirect you to the login page. Once you register, you will automatically be signed in and redirected to the homepage. If you try to login with incorrect credentials, a prompt will appear, informing you that they are incorrect.
  2. If you click on the 'Workouts' link, this will redirect you to a new page that lists all the workouts that have been posted. You can view a workout by clicking on the name of the user that has posted the workout.
  3. Click on the 'Post a Workout' link and you will be redirected to a form page. Here you can enter the details of a workout and post it into the database to be stored.
  4. If you go to 'Workouts' again, you will see that your posted workout is shown. You will now be able to show, edit or delete your workout. By clicking 'Show', you are simply pulling the workout from the database and expanding the view. If you want to edit the workout you can, by clicking on 'Edit'. This redirects you to a new page that allows you to edit the workout and update the new content back into the database. You will be redirected to the 'Workouts' page and prompted that the workout has been updated successfully. If you wish to delete the workout from the database, click 'Delete' and this will the remove it from the database. You will be prompted if this is successful.
  5. You can click the 'Logout' link to log you out as a user and redirect to the hompage.

## Testing the Application
A test framework has been built to test the application for bugs. To run the tests, open up your Git Bash in the application's directory and enter the following command:

  1. php artisan test

This will run through all the tests created and should return 21 passed tests. This has tested all the authentication and CRUD actions.

## Known issues
There are afew issues that need to be fixed within the application. These are as follows:

1. Ticking remember me when logging in does not work as intended.
2. Using forgotten password within login does not send a password retrieval email to the user as intended.
3. A guest can access the workout/create page and attempt to input a workout. If the guest tries to submit the workout, the application fails to do so. This is because the user is not signed it. The guest should not be allowed access to this page unless they have signed in as a user.
