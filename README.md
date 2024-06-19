# Laragigs

Laragigs is a simple job listing application built with Laravel. This project demonstrates a CRUD operation for job listings and user authentication. It also includes a custom delete confirmation dialog styled with Tailwind CSS.

## Features

-   Create, Read, Update, and Delete (CRUD) operations for job listings.
-   User authentication with registration and login.
-   Custom delete confirmation dialog using Tailwind CSS and Alpine.js.
-   Pagination for job listings.
-   Simple, intuitive UI built with Blade components.

## Installation

### Prerequisites

-   PHP >= 8.3.3
-   Composer
-   Node.js & npm (for frontend dependencies)
-   MySQL

### Database Setup

This app uses MySQL. To use something different, open up `config/Database.php` and change the default driver.<br>

To use MySQL, make sure you install it, setup a database and then add your db credentials(database, username and password) to the .env.example file and rename it to .env

### Steps

1.  **Clone the repository:**

    ```bash
    git clone https://github.com/stekatag/laragigs.git
    cd laragigs
    ```

2.  **Install PHP dependencies:**

    ```bash
    composer install
    ```

3.  **Install JavaScript dependencies:**

    ```bash
    npm install
    ```

4.  **Create a `.env` file:**
    Copy the .env.example file to .env and update the database and other necessary configurations.

    ```bash
    cp .env.example .env
    ```

5.  **Migrations**
    To create all the nessesary tables and columns, run the following command:

    ```bash
    php artisan migrate
    ```

6.  **Seeding the database**
    To add the dummy listings with a single user, run the following:

    ```bash
    php artisan db:seed
    ```

7.  **File Uploading**
    When uploading listing files, they go to "storage/app/public". Create a symlink with the following command to make them publicly accessible:

    ```bash
    php artisan storage:link
    ```

8.  **Serve the application:**

    ```bash
    php artisan serve
    ```

## Usage

### Running the Application

After serving the application, you can access it in your browser at http://localhost:8000. Here you can:

-   View all job listings.
-   Create a new listing (requires authentication).
-   Edit or delete existing listings (requires authentication).
