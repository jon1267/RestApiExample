Laravel REST API with Sanctum

This is a test job for Websmile. 
REST API using auth tokens with Laravel Sanctum


Public Routes

GET   /api/books <br>
GET   /api/books/:id <br>

POST   /api/login <br>
@body: email, password <br>

POST   /api/register <br>
@body: name, email, password, password_confirmation <br>


Protected Routes

POST   /api/books <br>
@body: title, description, publisher_id <br>

PUT   /api/books/:id <br>
@body: ?title, ?description, ?publisher_id <br>

DELETE  /api/books/:id <br>

POST    /api/logout <br>
