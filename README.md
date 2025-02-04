# Online Furniture Store Website

Welcome to the **Online Furniture Store** project! This is a PHP-based web application designed for buying and selling furniture online, featuring an intuitive UI, user authentication, and an easy-to-navigate shopping experience.

## 📸 UI Preview

### 🔑 Login Page
![Login Page](./ss/localhost_Online_books_login.php.png)

### 📝 Registration Page
![Registration Page](./ss/localhost_Online_books_register.php.png)

### 🏠 Home Page
![Home Page](./ss/Home.png)

### 🛋️ Product Page
![Product Page](./ss/product.png)

### ℹ️ About Us Page
![About Us](./ss/about%20us.png)

### 📞 Contact Us Page
![Contact Us](./ss/contact%20us.png)

### 🛒 Cart Page
![Cart Page](./ss/cart.png)

### 💳 Checkout Page
![Checkout Page](./ss/checkout.png)

### 🏷️ Place Order Page
![Place Order Page](./ss/place%20order.png)

### 📦 Order Page
![Order Page](./ss/after%20order.png)

### 🔍 Search Page
![Search Page](./ss/search.png)

### ⚙️ Admin Panel
#### 📊 Dashboard
![Dashboard](./ss/admin_dashboard.png)
#### ➕ Add Product
![Add Product](./ss/Admin%20add%20products.png)
#### 📦 Manage Orders
![Manage Orders](./ss/admin_orders.png)
#### ✉️ Messages
![Messages](./ss/admin_messeges.png)
#### 👥 Manage Users
![Manage Users](./ss/admin_accounts.png)

## 🌟 Features
- User authentication (Sign Up / Login / Logout)
- Browse and search for furniture products
- Add items to the cart and checkout
- Place and manage orders
- Admin panel to manage products, orders, and users
- Responsive design for a seamless experience on all devices

## 🛠️ Technologies Used
- **Frontend:** HTML, CSS, JavaScript, Bootstrap
- **Backend:** PHP, MySQL
- **Database:** MySQL

## 🚀 Installation

### Prerequisites
- Install **XAMPP** or **WAMP** for PHP and MySQL support

### Steps to Run the Project
1. Clone this repository:
   ```bash
   git clone https://github.com/yourusername/online-furniture-store.git
   ```
2. Move the project folder to `htdocs` (for XAMPP) or `www` (for WAMP)
3. Start **Apache** and **MySQL** in XAMPP/WAMP
4. Import the database:
   - Open `phpMyAdmin`
   - Create a new database (e.g., `furniture_store`)
   - Import the `database.sql` file from the project folder
5. Configure the database connection in `config.php`:
   ```php
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "furniture_store";
   ```
6. Open the browser and visit:
   ```
   http://localhost/online-furniture-store
   ```

## 📂 Project Structure
```
📁 online-furniture-store
 ┣ 📂 css
 ┣ 📂 js
 ┣ 📂 images
 ┣ 📂 uploaded_img
 ┣ 📜 index.php
 ┣ 📜 config.php
 ┣ 📜 shop_db.sql
```

## 📝 License
This project is open-source under the MIT License.

---

Enjoy building your online furniture store! 🏡💺

