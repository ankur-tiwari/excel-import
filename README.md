This repo shows you how to validate and import an excel sheet data into laravel 8 database.

**Instruction**

-   Create your database
-   Modify the .env file to add your database name, username and password

    ```
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=your_db_name
    DB_USERNAME=your_db_user
    DB_PASSWORD=your_password
    ```

-   Migrate the table using

    ```
    php artisan migrate
    ```

-   Run the server

    ```
    php artisan serve
    ```

-   Visit the address seen in terminal
