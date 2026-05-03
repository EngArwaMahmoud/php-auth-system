# Secure User Authentication System (PHP & MySQL)

A professional-grade Login and Registration system built with PHP, focusing on security and clean code structure. This project demonstrates core web development concepts including session management, secure password hashing, and PDO for database interactions.

## 🚀 Key Features

*   **Secure Registration:** Validates user input and stores passwords using `password_hash()`.
*   **Secure Login:** Authenticates users and manages sessions for protected areas.
*   **PDO Database Layer:** Uses PHP Data Objects (PDO) to prevent SQL Injection.
*   **Validation & Sanitization:** Server-side validation for all user inputs.
*   **Session & Cookie Management:** Maintains user state and supports "Remember Me" functionality.
*   **Clean Architecture:** Separated logic, database, and view files for better maintainability.

## 📂 Project Structure

As shown in the workspace, the project is organized into logical modules:
*   `/login`: Contains login logic, database queries, and the UI.
*   `/registration`: Contains sign-up logic and the registration form.
*   `db.php`: Centralized PDO connection for the entire application.
*   `index.php`: The main landing page.
*   `style.css`: Custom styling for a modern UI.

## 🛠️ Tech Stack

*   **Backend:** PHP 8.x
*   **Database:** MySQL
*   **Security:** BCRYPT (Password Hashing), PDO Prepared Statements.
*   **Frontend:** HTML5, CSS3.

## ⚙️ How to Run

1.  **Clone the project:** 
    `git clone https://github.com/YourUsername/your-repo-name.git`
2.  **Database Setup:** 
    *   Create a MySQL database named `login_db`.
    *   Import the provided SQL schema (if available) or create a `users` table with fields for `id`, `username`, and `password`.
3.  **Configuration:** 
    *   Open `db.php` and update your database credentials (`host`, `dbname`, `username`, `password`).
4.  **Launch:** 
    *   Move the project to your `htdocs` or `www` folder.
    *   Access it via `localhost/login_regestration`.

## 🛡️ Security Implementation
This project prioritizes security by:
1.  **Avoiding SQL Injection:** All queries use prepared statements via PDO.
2.  **Secure Passwords:** No plain-text passwords; everything is hashed using industry standards.
3.  **Input Handling:** Sanitizing and validating data before processing.

---
Developed by **Arwa Mahmoud** - Computer Engineering Student at Tanta University.