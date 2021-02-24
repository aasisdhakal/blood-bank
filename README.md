# :two_men_holding_hands: Blood Bank Api

# Project Brief

It's a short and sweet project where donors fill their details (name , age , location , gender , blood_group , phone ) and donate life 

## Installation of Project
### Steps:-


- Clone the repo :**git clone github.com/oasis001/Vacker360_Task_1.git**

- Make sure that the composer installed on your machine. After That:**composer install** To install packages

- Edit the .env file

- Generate Keys:**php artisan key:generate**

- Set Environment Variable:**.env example .env**,the change the environment variables to match your settings

- Run migration:**php artisan migrate**

- For Fake Data: **php artisan db:seed** 

- Jump with joy


## Folder Structure

- /controllers is where application logic is

- /filters is to filter data

- /Requests for validating requests 

- /Resources is for Filtering data 

- /public contain all the assets

- /views contain all the front end code

- /model creating and storing the into database

## Uses

http://localhost => navigates to webpage

http://localhost/api/donors => Listing Donors

http://localhost/donor{ID} => Showing/Updating/Deleting donor




