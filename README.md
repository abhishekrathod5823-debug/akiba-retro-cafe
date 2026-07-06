# 🍜 Akiba Retro Cafe - Full Stack Bistro Web App

Akiba Retro Cafe is a premium, fully responsive, and animated Full-Stack web application designed with a **Showa-Era Retro Japanese aesthetic** (deep crimson reds, sleek charcoal dark mode, and warm cream highlights). 

This project was built to master **state persistence and secure database integration (CRUD, transactions, and prepared statements)** as part of the Full-Stack Developer Program (Project 3) at DecodeLabs.

---

## 📸 Screenshots & UI Aesthetic
*The application utilizes advanced CSS animations, custom transitions, and interactive components designed to deliver a modern, high-end user experience.*

* **Hero Banner Sections**: Consistent across all pages with blurred background layouts and bold typography overlays.
* **Interactive 3D Flipbook**: A digital, multi-page menu book that flips realistically on click.
* **3D Coverflow Order Carousel**: A curved perspective card slider representing chef specials.

---

## 🛠️ Tech Stack
* **Frontend**: HTML5, Vanilla CSS3 (Custom 3D Transitions, Keyframe Animations, Responsive Flexbox & CSS Grid)
* **Backend**: PHP (Object-Oriented sessions, modular templates)
* **Database**: MySQL (PDO Connection, secure parameterized queries, multi-table transactions)
* **Storage**: LocalStorage (Cart state persistence)

---

## 🌟 Key Features

### 1. Interactive 3D Flipbook Menu (`menu.php`)
* Features a custom digital book layout built with CSS 3D transforms (`rotateY` and perspective depths).
* Arrows flip the pages smoothly like a real book.
* **Responsive Fallback**: Automatically collapses into a clean, readable vertical menu list on tablet and mobile screens.

### 2. 3D Coverflow Ordering System (`order.php`)
* An interactive, 3D curved perspective carousel slider.
* Hovering on any card smoothly slides up details (ingredients, price, description) and reveals an **"Add to Order"** button.
* Includes a floating **Cart Drawer Toggle** showing item count, opening into a side-sliding cart panel where users can adjust quantities and checkout.

### 3. Secure User Authentication (`register.php` & Modals)
* **Global Login Modal**: Accessible from any page header. Triggering it blurs the background site elegantly (`backdrop-filter`) and pops up the login panel.
* **Detailed Registration Form**: Dedicated page collecting Full Name, Email, Password, Address, DOB, Gender, and Favorite Food.
* **Blowfish Password Hashing**: Passwords are encrypted using PHP's secure `password_hash()` algorithm before database insertion.

### 4. Database Integrity & Transaction Checkout (`process_order.php`)
* Relies on **PDO Prepared Statements** to eliminate SQL injection vulnerabilities.
* Uses **Database Transactions** (`beginTransaction`, `commit`, `rollBack`) to write orders. This ensures an order header is never inserted if the corresponding items fail to save.

---

## 📂 Project Structure
```text
retro_cafe_marketplace/
│
├── setup.sql              # MySQL database schema & tables setup
├── db.php                 # Safe PDO database connection handler
├── auth.php               # Login/Register backend authorization controller
│
├── header.php             # Global header template containing navigation & Login Modal
├── footer.php             # Global footer template with scripts & scroll reveals
├── style.css              # Main design tokens, layouts, and custom 3D animations
│
├── index.php              # Cafe Home Page
├── menu.php               # Interactive 3D Menu Page
├── about.php              # Showa Cafe timeline and Chef Profiles
├── order.php              # 3D Order Slider page with Shopping Cart Drawer
├── contact.php            # Contact page with database form entry
├── register.php           # User Registration page
│
├── process_order.php      # Processes checking out shopping carts (DB Transaction)
└── process_contact.php    # Processes and saves contact messages
```

---

## 🗄️ Database Schema Details
The database (`retro_cafe_db`) consists of 4 interrelated tables:
1. **`users`**: Stores registration profiles. Password string is securely hashed.
2. **`orders`**: Stores transaction headers (linking to `users.id`).
3. **`order_items`**: Stores itemized order lines (linking to `orders.id`).
4. **`contact_messages`**: Stores message logs from the contact page.

---

## 🚀 Installation & Running Locally

### Prerequisites
* Install [XAMPP](https://www.apachefriends.org/) (includes Apache server and MySQL).

### Setup Instructions
1. **Clone/Copy Project**:
   Copy the project directory to your XAMPP's public folder:
   `C:\xampp\htdocs\retro_cafe_marketplace\`

2. **Start Servers**:
   Open XAMPP Control Panel and start **Apache** and **MySQL**.

3. **Database Import**:
   * Open your browser and navigate to phpMyAdmin: `http://localhost/phpmyadmin/`
   * Click on the **SQL** tab.
   * Copy the queries inside `setup.sql` and paste them into the box.
   * Click **Go** to generate the database and tables.

4. **Port Configuration**:
   * If your local MySQL server runs on a custom port like `3307` (instead of `3306`), open `db.php` and verify the `$port` variable matches your configuration:
     ```php
     $port = '3307'; // Update as per your local mysql port
     ```

5. **Run the Application**:
   Open your browser and navigate to:
   👉 **`http://localhost/retro_cafe_marketplace/`**
