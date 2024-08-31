# 🍕 Pizza Ordering System

## Overview
The Pizza Ordering System is a web-based application built using Laravel and MySQL that allows customers to browse and order pizzas. The application provides a seamless user experience where customers can register, choose from a variety of pizzas, customize their orders, and place them directly through the website. The system is designed to be scalable, efficient, and easy to maintain.

## Features
- **User Registration and Authentication**: Secure user sign-up and login system.
- **Browse Pizzas**: Customers can browse through different pizza options available on the menu.
- **Customize Orders**: Select pizza size, toppings, and quantity.
- **Order Management**: View order history and track current orders.
- **Admin Dashboard**: Manage pizzas, orders, and user accounts (Admin functionality).
- **Responsive Design**: Fully responsive and mobile-friendly interface.

## Technology Stack
- **Backend**: Laravel (PHP Framework)
- **Database**: MySQL
- **Frontend**: Blade Templating Engine, Bootstrap, HTML5, CSS3, JavaScript
- **Version Control**: Git

## Installation

### Prerequisites
- PHP >= 7.3
- Composer
- MySQL
- Git

### Steps

1. **Clone the Repository**
    ```bash
    git clone https://github.com/yourusername/pizza-ordering-system.git
    cd pizza-ordering-system
    ```

2. **Install Dependencies**
    ```bash
    composer install
    npm install
    npm run dev
    ```

3. **Set Up Environment Variables**
    - Copy the `.env.example` file to `.env`
    ```bash
    cp .env.example .env
    ```
    - Update the `.env` file with your database credentials and other configuration settings:
    ```env
    DB_DATABASE=pizza_order_db
    DB_USERNAME=root
    DB_PASSWORD=yourpassword
    ```

4. **Generate Application Key**
    ```bash
    php artisan key:generate
    ```

5. **Run Database Migrations**
    ```bash
    php artisan migrate
    ```

6. **Seed the Database**
    - You can use database seeders to populate your database with sample data.
    ```bash
    php artisan db:seed
    ```

7. **Serve the Application**
    ```bash
    php artisan serve
    ```
    - The application will be available at `http://localhost:8000`.

## Usage

1. **Register as a User**: Create a new account or log in with an existing account.
2. **Browse Pizzas**: Explore the available pizzas on the menu.
3. **Customize Your Order**: Choose the pizza size, toppings, and quantity.
4. **Place Your Order**: Add your desired pizzas to the cart and proceed to checkout.
5. **Order Management**: Users can view their order history and track current orders.
6. **Admin Panel**: Access the admin dashboard to manage pizzas, orders, and users (admin users only).




## Acknowledgements
- Laravel Documentation
- Bootstrap for responsive UI components
- The open-source community for providing valuable resources and inspiration.
"""
