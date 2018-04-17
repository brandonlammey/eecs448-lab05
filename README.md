# Software Engineering (EECS 448) Lab 05

Lab Assignment: completed for graded work

(Addition to eecs448-lab03 & eecs448-lab04)

## Overview

PHP and other server-side languages have the ability to connect to and query MySQL databases. 
The information gained from the database can then be combined with HTML in order to create the dynamic web pages you interact with everyday.

Create webpages using PHP and MySQL topics: 
* Setup Database: We are going to create a very basic message board system. We will have two tables, Users and Posts. The users will house the list of users ids. Each user_id will be a unique identifier for a user and can be a series of characters. Posts will contains the posts the users create. Each post will have the content, a post_id, and an author_id. The author_id will reference the user_id of whoever wrote the post. A post_id should be a simple numeric identifier that is automatically chosen by the database. The content will be a series of text, potentially longer than 255 characters.
* Create User Interface: Using HTML forms again, create a simple frontend that allows the user to create a new user to store in the database. A simple text field and submit button will do. When the users submits, the backend should tell the user if the new user was successfully stored in the database.
* Create Posts Interface: Create a simple form for the user to give their user name and to write a post. When the user submits the post, the backend should tell the user if the post was saved or not.
* AdminHome: This should be a series of links to the various administrative pages you will create. You can link directly to ".php" files.
* ViewUsers: Display a table of all users.
* ViewUserPosts: When a user is chosen and clicks submit, the backend will display a table of all the posts that user has made.
* DeletePost: The front end will show a table that has a column of posts, authors, and a column of checkboxes in with the heading "Delete?". The admin should then be able to click the boxes of any posts he/she wants to delete. When the admin clicks submit, all the checked posts should be deleted and a confirmation displaying the post ids of all the deleted posts.

URL: https://people.eecs.ku.edu/~b827l697/Lab3/index.html

## Rubric

* [15pts] Setup Database
* [15pts] Create User Interface
* [15pts] Create Posts Interface
* [5pts] AdminHome
* [10pts] ViewUsers
* [20pts] ViewUserPosts
* [20pts] DeletePost
