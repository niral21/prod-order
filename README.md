# Laravel Product - Order Management With Default Auth

- Web application to product and order management.
- Secure login system
- Ability to place multiple orders
- Display of quick products & orders
- Can create, update and delete product
- Can create, update and delete order

# How to run?

1. **Clone or download this repo https://github.com/niral21/prod-order.git**
2. **Run the command**
   ```
   composer install
   ```
   if you get any problems while running above command then run the following command.
   ```
   composer install --ignore-platform-reqs
   ```

3. **Create `.env` file by copying the `.env.example`, or run the following command**
   ```
   cp .env.example .env
   ```

4. **Update the database name and credentials in `.env` file**  
   ```
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE="Your database name"
    DB_USERNAME="your database username"
    DB_PASSWORD="your database password"
   ```
5. **Run the following command**
   ```
   php artisan key:generate 
   php artisan migrate
   php artisan make:auth
   php artisan config:clear
   ```
6. **Finally run the application**
   ```
   php artisan serve
   ```

# Screenshots
![image](https://user-images.githubusercontent.com/119964141/209576854-ae692a35-b8c2-45ef-9d5e-597d9d3a9f17.png)
![image](https://user-images.githubusercontent.com/119964141/209576889-67ae97b2-aba9-46f0-a8f6-a7c5a34e208e.png)
![image](https://user-images.githubusercontent.com/119964141/209576948-c42d7447-9659-4fdd-80e6-6ef0bc5f4061.png)
![image](https://user-images.githubusercontent.com/119964141/209576996-a93f32e7-42dd-4f11-aa3b-43ef7c276f26.png)

