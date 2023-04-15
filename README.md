
#Installation
*** clone the repository
    $ git clone https://github.com/Pradeep-Dhakal/blog.git

*** Install the dependencies:
    $ npm install
    $ npm start

*** Create a copy of the .env.example file and rename it to .env
    cp .env.example .env

*Generate a new application key:
    php artisan key:generate
*Configure the database settings in the .env file:
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=your_database_name
    DB_USERNAME=your_database_username
    DB_PASSWORD=your_database_password
**Run the database migrations:
    php artisan migrate

***serve the application 
    php artisan serve
    
    
  
