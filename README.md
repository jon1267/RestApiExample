Laravel REST API with Sanctum

This is a test job for Websmile. 
REST API using auth tokens with Laravel Sanctum


Public Routes

GET   /api/books
GET   /api/books/:id

POST   /api/login
@body: email, password

POST   /api/register
@body: name, email, password, password_confirmation


Protected Routes

POST   /api/books
@body: title, description, publisher_id

PUT   /api/books/:id
@body: ?title, ?description, ?publisher_id

DELETE  /api/books/:id

POST    /api/logout
