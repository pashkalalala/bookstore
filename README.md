

# Bookstore


## Requirements
Before you begin, make sure you have the following software installed on your computer:

- PHP (recommended version 8.1 or higher)
- Composer
- Node.js and npm
- MySQL

## Installation Steps

1. **Install Dependencies**

Navigate to the project directory and execute the following command to install PHP dependencies using Composer:

```
composer install
```
2. **Configure Environment**

Create empty database. 

Copy the .env.example file in the same directory and rename it to .env. Open this file and configure the database connection parameters.

3. **Generate Application Key**

Execute the following command to generate a unique application key:

```
php artisan key:generate
```

4. **Run Migrations**

Apply migrations to create the necessary database tables:

```
php artisan migrate
```

5. **Run Database Seeders**

```
php artisan db:seed
```

6. **Compile Frontend Assets**

In a separate terminal window, navigate to the directory with frontend resources (usually resources/js) and run:

```
npm install
npm run dev
```

This will install and compile your application's frontend assets.

7. **Start the Server**

Launch the built-in server to test your application:

```
php artisan serve
```

Your Laravel project is now running at http://127.0.0.1:8000

8. **Admin Panel**

You can log in as Administrator.

```
http//:127.0.0.1:8000/admin
```
Credentials:

login - ```pasha@gmail.com```

password - ```1111```


