# Laravel Product - Order Management With Default Auth

- Web application to product and order management.
- Secure login system
- Ability to place multiple orders
- Display of quick products & orders
- Can create, update and delete product.
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
   ```
6. **Finally run the application**
   ```
   php artisan serve
   ```

# Screenshots

## Admin

