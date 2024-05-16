<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) { // API Endpoint: GET http://127.0.0.1:8000/api/user
    return $request->user();
});


Route::namespace('App\Http\Controllers\API')->group(function() { // Route Groups: https://laravel.com/docs/9.x/routing#route-groups
    // Shiprocket API Integration
    // Shiprocket API Documentation: https://apidocs.shiprocket.in/
    // Push our 'Dressify' website orders from our `orders` database table to Shiprocket    
    Route::get('push-order/{id}', 'APIController@pushOrder'); // This route/URL/link is: GET http://127.0.0.1:8000/api/push-order/3    // Route Parameters: Required Parameters: https://laravel.com/docs/9.x/routing#required-parameters



    // Our Dressify Website API:

    // Get ALL users    Or    Get a SINGLE user (GET)    (depending on if the {id?} Optional Paramter specified or not in the API Endpoint route)    // API Endpoint:    GET http://127.0.0.1:8000/api/users Or GET http://127.0.0.1:8000/api/users/37    // User must send an "Authorization" HTTP Header with all their HTTP Requests with this value (Bearer Token (JWT)): "Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkFtaXQgR3VwdGEiLCJpYXQiOjE1MTYyMzkwMjJ9.cNrgi6Sso9wvs4GlJmFnA4IqJY4o2QEcKXgshJTjfNg"    
    Route::get('users/{id?}', 'APIController@getUsers'); 

    // Create a Single user (POST)    // API Endpoint:    POST http://127.0.0.1:8000/api/add-user    // 'name', 'email' and 'password' fields must be submitted by the user (from Postman). Note: Data can be posted/sent/submitted in Postman using a GET/POST/PUT/PATCH/DELETE request using TWO ways: First: "form-data" (resembles the HTML Form <input> fields (key/value pairs) and their "name" and "value" <input> HTML tag attributes, and you can retrieve those data in the backend using the Superglobals $_POST and $_FILES), Second: "raw" (through which you can decide the data type of the whole HTTP Request Body (e.g. JSON, HTML, ...etc), and you can retrieve those data in the backend using, for example if data were JSON, json_decode() function and then access the JSON key/value pairs as follows:    $jsonImageAttributes->filename    )     
    Route::post('add-user', 'APIController@addUser');

    // Create Multiple users (also works for Create a Single user) (POST)    // API Endpoint:    POST http://127.0.0.1:8000/api/add-multiple-users    // Note: In Postman, JSON data are submitted using Curly Braces {} and a "users" Wrapping Object and Square Brackets [])    // 'name', 'email' and 'password' fields must be submitted by the user (from Postman). Note: Data can be posted/sent/submitted in Postman using a GET/POST/PUT/PATCH/DELETE request using TWO ways: First: "form-data" (resembles the HTML Form <input> fields (key/value pairs) and their "name" and "value" <input> HTML tag attributes, and you can retrieve those data in the backend using the Superglobals $_POST and $_FILES), Second: "raw" (through which you can decide the data type of the whole HTTP Request Body (e.g. JSON, HTML, ...etc), and you can retrieve those data in the backend using, for example if data were JSON, json_decode() function and then access the JSON key/value pairs as follows:    $jsonImageAttributes->filename    )     
    Route::post('add-multiple-users', 'APIController@addMultipleUsers');

    // Update a Single user details (PUT)    // API Endpoint:    PUT http://127.0.0.1:8000/api/update-user-details Or PUT http://127.0.0.1:8000/api/update-user-details/23    // Note: In Postman, JSON data are submitted using Curly Braces {} and a "users" Wrapping Object and Square Brackets [])    // 'id', 'name', 'email' and 'password' fields must be submitted by the user (from Postman). Note: Data can be posted/sent/submitted in Postman using a GET/POST/PUT/PATCH/DELETE request using TWO ways: First: "form-data" (resembles the HTML Form <input> fields (key/value pairs) and their "name" and "value" <input> HTML tag attributes, and you can retrieve those data in the backend using the Superglobals $_POST and $_FILES), Second: "raw" (through which you can decide the data type of the whole HTTP Request Body (e.g. JSON, HTML, ...etc), and you can retrieve those data in the backend using, for example if data were JSON, json_decode() function and then access the JSON key/value pairs as follows:    $jsonImageAttributes->filename    )     
    Route::put('update-user-details/{id?}', 'APIController@updateUserDetails'); 

    // Update the 'name' ONLY of a Single user (just a portion of a resource) (PATCH)    // API Endpoint:    PATCH http://127.0.0.1:8000/api/update-user-name Or PATCH http://127.0.0.1:8000/api/update-user-name/21    // Note: In Postman, JSON data are submitted using Curly Braces {} and a "users" Wrapping Object and Square Brackets [])    // 'id', 'name' fields must be submitted by the user (from Postman). Note: Data can be posted/sent/submitted in Postman using a GET/POST/PUT/PATCH/DELETE request using TWO ways: First: "form-data" (resembles the HTML Form <input> fields (key/value pairs) and their "name" and "value" <input> HTML tag attributes, and you can retrieve those data in the backend using the Superglobals $_POST and $_FILES), Second: "raw" (through which you can decide the data type of the whole HTTP Request Body (e.g. JSON, HTML, ...etc), and you can retrieve those data in the backend using, for example if data were JSON, json_decode() function and then access the JSON key/value pairs as follows:    $jsonImageAttributes->filename    )     
    Route::patch('update-user-name/{id?}', 'APIController@updateUserName'); 

    // Delete a Single user (DELETE)    // API Endpoint:    DELETE http://127.0.0.1:8000/api/delete-user Or DELETE http://127.0.0.1:8000/api/delete-user/32    // Note: In Postman, JSON data are submitted using Curly Braces {} and a "users" Wrapping Object and Square Brackets [])    // 'id' field must be submitted by the user (from Postman). Note: Data can be posted/sent/submitted in Postman using a GET/POST/PUT/PATCH/DELETE request using TWO ways: First: "form-data" (resembles the HTML Form <input> fields (key/value pairs) and their "name" and "value" <input> HTML tag attributes, and you can retrieve those data in the backend using the Superglobals $_POST and $_FILES), Second: "raw" (through which you can decide the data type of the whole HTTP Request Body (e.g. JSON, HTML, ...etc), and you can retrieve those data in the backend using, for example if data were JSON, json_decode() function and then access the JSON key/value pairs as follows:    $jsonImageAttributes->filename    )     
    Route::delete('delete-user/{id?}', 'APIController@deleteUser'); 

    // Delete Multiple users (DELETE)    // API Endpoint:    DELETE http://127.0.0.1:8000/api/delete-multiple-users Or DELETE http://127.0.0.1:8000/api/delete-multiple-users/11,13,20    // Note: In Postman, JSON data are submitted using Curly Braces {} and an "ids" Wrapping Object and Square Brackets [])    // 'ids' field must be submitted by the user (from Postman). Note: Data can be posted/sent/submitted in Postman using a GET/POST/PUT/PATCH/DELETE request using TWO ways: First: "form-data" (resembles the HTML Form <input> fields (key/value pairs) and their "name" and "value" <input> HTML tag attributes, and you can retrieve those data in the backend using the Superglobals $_POST and $_FILES), Second: "raw" (through which you can decide the data type of the whole HTTP Request Body (e.g. JSON, HTML, ...etc), and you can retrieve those data in the backend using, for example if data were JSON, json_decode() function and then access the JSON key/value pairs as follows:    $jsonImageAttributes->filename    )     
    Route::delete('delete-multiple-users/{ids?}', 'APIController@deleteMultipleUsers'); 

    // Register a new user and Generate a new Access Token for them (POST)    // API Endpoint:    POST http://127.0.0.1:8000/api/register-user    // Whenever a new user registers a new account using our Registration API Endpoint, we'll generate an Access Token for them to use and send with all their subsequent HTTP Requests (and will store it in the `api_token` column in `users` table). Note: Whenever the user logs in, we'll generate a new Access Token (that acts the same as a browser Session (i.e. Both Session and Access Token are sent from the client to the server with EVERY HTTP Request), except the fact that there's no browser Session here!) that will replace the old one in the `api_token` column in `users` table. This token will be valid only till the user logs out and then expires (by deleting it from the `api_token` column in the `users` database table when the user logs out)    // User can use the new Access Token that gets generated wheny they register a new account with all their subsequent HTTP Requests    // Note: In Postman, JSON data are submitted using Curly Braces {} and an "ids" Wrapping Object and Square Brackets [])    // 'name', 'email' and 'password' fields must be submitted by the user (from Postman). Note: Data can be posted/sent/submitted in Postman using a GET/POST/PUT/PATCH/DELETE request using TWO ways: First: "form-data" (resembles the HTML Form <input> fields (key/value pairs) and their "name" and "value" <input> HTML tag attributes, and you can retrieve those data in the backend using the Superglobals $_POST and $_FILES), Second: "raw" (through which you can decide the data type of the whole HTTP Request Body (e.g. JSON, HTML, ...etc), and you can retrieve those data in the backend using, for example if data were JSON, json_decode() function and then access the JSON key/value pairs as follows:    $jsonImageAttributes->filename    )    
    Route::post('register-user', 'APIController@registerUser');

    // Log in a user and Generate a new Access Token for them (POST)    // API Endpoint:    POST http://127.0.0.1:8000/api/login-user    // Whenever a new user registers a new account using our Registration API Endpoint, we'll generate an Access Token for them to use and send with all their subsequent HTTP Requests (and will store it in the `api_token` column in `users` table). Note: Whenever the user logs in, we'll generate a new Access Token (that acts the same as a browser Session (i.e. Both Session and Access Token are sent from the client to the server with EVERY HTTP Request), except the fact that there's no browser Session here!) that will replace the old one in the `api_token` column in `users` table. This token will be valid only till the user logs out and then expires (by deleting it from the `api_token` column in the `users` database table when the user logs out)    // User must send an "Authorization" HTTP Header with all their subsequent HTTP Requests with the value of the "Bearer" Accesss Token that they received in the HTTP Response when they first logged in or when they first registered their brand-new account. The "Bearer" Access Token should be sent in the following form:    "Bearer xxxxxxxxxxxxxxxxxx"    where xxxxxxxxxxxxxxxxxx is the "Bearer" Access Token value.    // Note: In Postman, JSON data are submitted using Curly Braces {} and an "ids" Wrapping Object and Square Brackets [])    // 'email' and 'password' fields must be submitted by the user (from Postman). Note: Data can be posted/sent/submitted in Postman using a GET/POST/PUT/PATCH/DELETE request using TWO ways: First: "form-data" (resembles the HTML Form <input> fields (key/value pairs) and their "name" and "value" <input> HTML tag attributes, and you can retrieve those data in the backend using the Superglobals $_POST and $_FILES), Second: "raw" (through which you can decide the data type of the whole HTTP Request Body (e.g. JSON, HTML, ...etc), and you can retrieve those data in the backend using, for example if data were JSON, json_decode() function and then access the JSON key/value pairs as follows:    $jsonImageAttributes->filename    )    
    Route::post('login-user', 'APIController@loginUser');

    // Log out a user and Delete their current Access Token (POST)    // API Endpoint:    POST http://127.0.0.1:8000/api/logout-user    // Whenever a new user registers a new account using our Registration API Endpoint, we'll generate an Access Token for them to use and send with all their subsequent HTTP Requests (and will store it in the `api_token` column in `users` table). Note: Whenever the user logs in, we'll generate a new Access Token (that acts the same as a browser Session (i.e. Both Session and Access Token are sent from the client to the server with EVERY HTTP Request), except the fact that there's no browser Session here!) that will replace the old one in the `api_token` column in `users` table. This token will be valid only till the user logs out and then expires (by deleting it from the `api_token` column in the `users` database table when the user logs out)    // User must send an "Authorization" HTTP Header with all their subsequent HTTP Requests with the value of the "Bearer" Accesss Token that they received in the HTTP Response when they first logged in or when they first registered their brand-new account. The "Bearer" Access Token should be sent in the following form:    "Bearer xxxxxxxxxxxxxxxxxx"    where xxxxxxxxxxxxxxxxxx is the "Bearer" Access Token value.    // Note: In Postman, JSON data are submitted using Curly Braces {} and an "ids" Wrapping Object and Square Brackets [])    // No fields must be submitted by the user (from Postman) here! That's because the user will be identified through their Access Token sent (as 'Authorization' HTTP Header) with their HTTP Request to the server. Note: Data can be posted/sent/submitted in Postman using a GET/POST/PUT/PATCH/DELETE request using TWO ways: First: "form-data" (resembles the HTML Form <input> fields (key/value pairs) and their "name" and "value" <input> HTML tag attributes, and you can retrieve those data in the backend using the Superglobals $_POST and $_FILES), Second: "raw" (through which you can decide the data type of the whole HTTP Request Body (e.g. JSON, HTML, ...etc), and you can retrieve those data in the backend using, for example if data were JSON, json_decode() function and then access the JSON key/value pairs as follows:    $jsonImageAttributes->filename    )    
    Route::post('logout-user', 'APIController@logoutUser');




    // API Endpoints/Routes using "Laravel Passport" package Authentication:

    // Register a new user and Generate a new Access Token for them Using "Passport" (POST)    // API Endpoint:    POST http://127.0.0.1:8000/api/register-user-with-passport    // Whenever a new user registers a new account using our Registration API Endpoint, we'll generate an Access Token for them to use and send with all their subsequent HTTP Requests (and will store it in the `api_token` column in `users` table). Note: Whenever the user logs in, we'll generate a new Access Token (that acts the same as a browser Session (i.e. Both Session and Access Token are sent from the client to the server with EVERY HTTP Request), except the fact that there's no browser Session here!) that will replace the old one in the `api_token` column in `users` table. This token will be valid only till the user logs out and then expires (by deleting it from the `api_token` column in the `users` database table when the user logs out)    // User can use the new Access Token that gets generated wheny they register a new account with all their subsequent HTTP Requests    // Note: In Postman, JSON data are submitted using Curly Braces {} and an "ids" Wrapping Object and Square Brackets [])    // 'name', 'email' and 'password' fields must be submitted by the user (from Postman). Note: Data can be posted/sent/submitted in Postman using a GET/POST/PUT/PATCH/DELETE request using TWO ways: First: "form-data" (resembles the HTML Form <input> fields (key/value pairs) and their "name" and "value" <input> HTML tag attributes, and you can retrieve those data in the backend using the Superglobals $_POST and $_FILES), Second: "raw" (through which you can decide the data type of the whole HTTP Request Body (e.g. JSON, HTML, ...etc), and you can retrieve those data in the backend using, for example if data were JSON, json_decode() function and then access the JSON key/value pairs as follows:    $jsonImageAttributes->filename    )    
    Route::post('register-user-with-passport', 'APIController@registerUserWithPassport');

    // Log in a user and Generate a new Access Token for them Using "Passport" (POST)    // API Endpoint:    POST http://127.0.0.1:8000/api/login-user-with-passport    // Whenever a new user registers a new account using our Registration API Endpoint, we'll generate an Access Token for them to use and send with all their subsequent HTTP Requests (and will store it in the `api_token` column in `users` table). Note: Whenever the user logs in, we'll generate a new Access Token (that acts the same as a browser Session (i.e. Both Session and Access Token are sent from the client to the server with EVERY HTTP Request), except the fact that there's no browser Session here!) that will replace the old one in the `api_token` column in `users` table. This token will be valid only till the user logs out and then expires (by deleting it from the `api_token` column in the `users` database table when the user logs out)    // User must send an "Authorization" HTTP Header with all their subsequent HTTP Requests with the value of the "Bearer" Accesss Token that they received in the HTTP Response when they first logged in or when they first registered their brand-new account. The "Bearer" Access Token should be sent in the following form:    "Bearer xxxxxxxxxxxxxxxxxx"    where xxxxxxxxxxxxxxxxxx is the "Bearer" Access Token value.    // Note: In Postman, JSON data are submitted using Curly Braces {} and an "ids" Wrapping Object and Square Brackets [])    // 'email' and 'password' fields must be submitted by the user (from Postman). Note: Data can be posted/sent/submitted in Postman using a GET/POST/PUT/PATCH/DELETE request using TWO ways: First: "form-data" (resembles the HTML Form <input> fields (key/value pairs) and their "name" and "value" <input> HTML tag attributes, and you can retrieve those data in the backend using the Superglobals $_POST and $_FILES), Second: "raw" (through which you can decide the data type of the whole HTTP Request Body (e.g. JSON, HTML, ...etc), and you can retrieve those data in the backend using, for example if data were JSON, json_decode() function and then access the JSON key/value pairs as follows:    $jsonImageAttributes->filename    )    
    Route::post('login-user-with-passport', 'APIController@loginUserWithPassport');



    // Update the stock via a third-party API / 3rd-party API (an inventory/stock management system like Uniware Cloud Inventory Control, ...) (using cURL) (POST)    // Here, we're using a third party to handle our stock/inventory management i.e. we don't handle our stock/inventory management ourselves    // API Endpoint:    POST http://127.0.0.1:8000/api/update-stock    // The user must send this 'Authorization' HTTP Header value i.e. Bearer Access Token with their HTTP Request: 'Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkFtaXQgR3VwdGEiLCJpYXQiOjE1MTYyMzkwMjJ9.cNrgi6Sso9wvs4GlJmFnA4IqJY4o2QEcKXgshJTjfNg'    
    Route::post('update-stock', 'APIController@updateStock');

    // Webhook: Update the stock by giving this API endpoint to a third-party inventory/stock management system (like Uniware Cloud Inventory Control, ...) to access to update our stock (POST)    // Here, the third-party stock/inventory management system (Webhook) accesses our API endpoint only when there's a stock update on their end (the stock/inventory management system's end) to update our stock on our end in our database    // API Endpoint:    POST http://127.0.0.1:8000/api/update-stock-with-webhook    // The user must send this 'Authorization' HTTP Header value i.e. Bearer Access Token with their HTTP Request: 'Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkFtaXQgR3VwdGEiLCJpYXQiOjE1MTYyMzkwMjJ9.cNrgi6Sso9wvs4GlJmFnA4IqJY4o2QEcKXgshJTjfNg'    
    Route::post('update-stock-with-webhook', 'APIController@updateStockWithWebhook');
});