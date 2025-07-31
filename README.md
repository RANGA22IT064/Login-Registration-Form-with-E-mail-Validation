# Login-Registration-Form-with-E-mail-Validation
A simple PHP &amp; MySQL Login and Registration system. Includes secure user registration, login with password hashing, session handling, and logout. Built with HTML, CSS, and PHP. Easy to set up and customize for basic authentication needs in web projects
🔐 PHP Login & Registration System with MySQL
This is a simple and secure Login & Registration system built using PHP, MySQL, HTML, and CSS. It allows users to create an account, log in with their credentials, and access protected content after authentication.

📌 Features
✅ User Registration with input validation

✅ Secure Login with session handling

✅ Password hashing using password_hash()

✅ Logout functionality

✅ MySQL database integration

✅ Error messages and success alerts

✅ Clean and responsive UI

🛠️ Technologies Used
PHP (Core Logic)

MySQL (Database)

HTML/CSS (Frontend)

Bootstrap (Optional for styling)

📂 Project Structure
bash
Copy
Edit
/login-registration-php/
│
├── db.php             # Database connection
├── register.php       # Registration logic
├── login.php          # Login logic
├── logout.php         # Logout script
├── welcome.php        # Protected dashboard
├── style.css          # Custom styles (optional)
├── index.html         # Home page or landing
└── README.md          # Project details
⚙️ Setup Instructions
Clone the repository

bash
Copy
Edit
git clone https://github.com/your-username/login-registration-php.git
Import database.sql into your MySQL database

Configure database credentials in db.php

Run on local server (XAMPP, WAMP, etc.)

Visit http://localhost/login-registration-php/

🛡️ Security Notes
Uses password_hash() and password_verify() for secure password handling

Protects pages using PHP sessions

You can extend it with CSRF tokens and input sanitization for added security

📃 License
This project is licensed under the MIT License.
