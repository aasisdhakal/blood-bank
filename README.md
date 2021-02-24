# :two_men_holding_hands: Blood Bank Api :two_women_holding_hands:

# Project Brief

It's a short and sweet project where donors fill their details (name , age , location , gender , blood_group , phone ) and donate life :revolving_hearts:

## :exclamation: :exclamation: Installation of Project :exclamation: :exclamation:
### Steps:-


- Clone the repo :**git clone https://github.com/aasisdhakal/blood-bank.git**

- Make sure that the composer installed on your machine. After That:**composer install** To install packages

- Edit the .env file

- Generate Keys:**php artisan key:generate**

- :open_file_folder: Set Environment Variable:**.env example .env**,the change the environment variables to match your settings :open_file_folder:

- Run migration:**php artisan migrate**

- For Fake Data: **php artisan db:seed** 

- :dash: :dash: Jump with joy :dash: :dash: 


## Folder Structure

- :file_folder: /controllers is where application logic is

- :file_folder: /filters is to filter data

- :file_folder: /Requests for validating requests 

- :file_folder: /Resources is for Filtering data 

- :file_folder: /public contain all the assets

- :file_folder: /views contain all the front end code

- :file_folder: /model creating and storing the into database

## Uses

http://localhost => navigates to webpage

http://localhost/api/donors => Listing Donors

http://localhost/donor{ID} => Showing/Updating/Deleting donor




