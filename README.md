# E-Commerce Website

A simple e-commerce website project built with PHP.

## Project Structure

```
E-COMERCEWEBSITE/
├── admin/              # Admin panel pages
├── backend/            # Backend PHP files
├── css/                # Stylesheets
├── images/             # Image assets
├── includes/           # Shared PHP includes (header, footer, db)
├── js/                 # JavaScript files
└── README.md          # This file
```

## Requirements

- **PHP 7.0+** (or higher)
- **XAMPP** (or any local web server with PHP support)
- **MySQL/MariaDB** (for database operations)

## How to Run

### Option 1: Using XAMPP (Recommended)

1. **Start XAMPP Services:**
   - Open XAMPP Control Panel
   - Click "Start" for **Apache** and **MySQL** modules

2. **Access the Project:**
   - Open your browser and navigate to:
     ```
     http://localhost/web_project/E-COMERCEWEBSITE
     ```

3. **Test the Environment:**
   - Visit the hello world test page:
     ```
     http://localhost/web_project/E-COMERCEWEBSITE/backend/hello.php
     ```
   - Expected output: `Hello World`

### Option 2: Using PHP CLI (Command Line)

Run PHP files directly from the command line:

```bash
C:\xampp\php\php.exe backend\hello.php
```

Expected output:
```
Hello World
```

## Available Pages

- **Backend:**
  - `backend/index.php` - Main backend page
  - `backend/hello.php` - Hello World test
  - `backend/login.php` - Login functionality
  - `backend/register.php` - User registration
  - `backend/products.php` - Product management
  - `backend/cart.php` - Shopping cart
  - `backend/checkout.php` - Checkout process

- **Admin:**
  - `admin/dashboard.php` - Admin dashboard
  - `admin/add-product.php` - Add new products

## Database Configuration

Update the database connection in:
```
includes/db.php
```

## Notes

- Make sure the `E-COMERCEWEBSITE` folder is in the XAMPP htdocs directory
- Default path: `C:\xampp\htdocs\web_project\E-COMERCEWEBSITE`
- Restart Apache after any configuration changes

## Troubleshooting

- **PHP not found in CLI:** Use the full path: `C:\xampp\php\php.exe`
- **Page not loading:** Ensure Apache is running in XAMPP Control Panel
- **Database connection error:** Check `includes/db.php` configuration

---

Happy coding! 🚀
<!-- check -->
http://localhost/web_project/E-COMERCEWEBSITE/backend/index.php