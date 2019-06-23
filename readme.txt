
**************** Instruction to use api ***************

1. I used Php (Laravel) for this project.
2. Used Matawebsite laravel package to import data from csv file.
3. Used jwt-auth for api authentication to authentication api call via token.
4. wrote a unit test to fetch data from csv file.


**************** How to user api *********************

1. First of all register a new user using the end point as given in the route file.
2. Login using credentials you created when registered user.
3. In login response there will be a token in the return.
4. To fetch trasactions from csv file, you have to use that token otherwise your request will show message "{"status":"Authorization Token not found"}" which means you are not authorize to use this api.
5. you can test all end points using post man etc.
6. Save that token given the login api response so that could be used for api authentication.
7. No token required for Register and login apis.
8. I used database only for user register and login.



Project can be downloaded for the following github url.

https://github.com/khalilrehman36/transaction_api