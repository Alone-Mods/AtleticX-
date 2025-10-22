

---

# 🏅 AtleticX — College Sports Team Management Web App

AtleticX is a **college sports team management** web application built using the **LAMP stack** (Linux, Apache, MySQL, PHP).  
It supports **five sports** — ⚽ Football, 🏏 Cricket, 🏀 Basketball, 🏸 Badminton, and 🏐 Volleyball.

---

## 🚀 Features
- 🧑‍🎓 User registration for preferred sports  
- 🏆 Manage multiple sports teams  
- 📋 Player and match data management  
- 🔐 Secure login, registration, and password reset  
- 💻 Built on a simple and scalable **PHP + MySQL** architecture  

---

## ⚙️ Steps To Run This Project

### 1️⃣ Install Requirements
- [Visual Studio Code](https://code.visualstudio.com/) — for code editing  
- [XAMPP](https://www.apachefriends.org/download.html) — for Apache & MySQL servers  

---

### 2️⃣ Setup the Project
1. **Download or clone** the repository:  
   ```bash
   git clone https://github.com/yourusername/AtleticX.git

2. Extract the AtleticX project folder into your XAMPP htdocs directory:

C:\xampp\htdocs\AtleticX




---

3️⃣ Start the Server

1. Open XAMPP Control Panel


2. Start Apache and MySQL




---

4️⃣ Create the Database

1. Open the XAMPP terminal and :

mysql -u root -e "CREATE DATABASE IF NOT EXISTS atleticx CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;"<br>
mysql -u root atleticx < "C:\xampp\htdocs\AtleticX\database_schema.sql"<br>

---

5️⃣ Test the Database Connection

Visit:

http://localhost/AtleticX/test_connection.php

If the connection is successful ✅, proceed to the next step.


---

6️⃣ Run the Application

Open your browser and go to:

http://localhost/AtleticX/

🎉 AtleticX is now running successfully!


---

🧰 Tech Stack

Component	Technology

Frontend	HTML, CSS, JavaScript
Backend	PHP
Database	MySQL
Server	Apache (via XAMPP)



---

📁 Project Structure

atleticx/<br>
├── config/<br>
│   └── database.php                # Database connection setup<br>
│
├── includes/<br>
│   ├── auth.php                    # Authentication helper<br>
│   └── functions.php               # Common reusable functions<br>
│<br>
├── api/                            # API endpoints for app functionality<br>
│   ├── login.php                   # User login<br>
│   ├── register.php                # User registration<br>
│   ├── logout.php                  # Logout functionality<br>
│   ├── profile-update.php          # Profile update endpoint<br>
│   ├── enrollment.php              # Sport enrollment handler<br>
│   └── password-reset.php          # Password reset logic<br>
│
├── assets/<br>
│   ├── css/<br>
│   │   └── styles.css              # Stylesheet<br>
│   └── js/<br>
│       ├── main.js                 # General scripts<br>
│       └── sport-functions.js      # Sport-specific JS logic<br>
│
├── uploads/<br>
│   ├── profiles/                   # (create this) for profile images<br>
│   └── banners/                    # (create this) for sport banners<br>
│<br>
├── .htaccess                       # Rewrite and routing configuration<br>
├── setup.php                       # Initial setup and database import
│<br>
├── index.php                       # Homepage<br>
├── dashboard.php                   # User dashboard<br>
├── sports.php                      # Sports overview page<br>
│<br>
├── football.php                    # Football module<br>
├── cricket.php                     # Cricket module<br>
├── basketball.php                  # Basketball module<br>
├── volleyball.php                  # Volleyball module<br>
├── badminton.php                   # Badminton module<br>
│
├── profile.php                     # View profile<br>
├── edit-profile.php                # Edit profile page<br>
├── reset-password.php              # Password reset page<br>
└── credits.php                     # Credits / About page<br>

<br>
---

💬 Contributing

Pull requests are welcome!
If you'd like to contribute, please fork the repo and create a new branch before submitting changes.


---

🧑‍💻 Author

AtleticX Project Team
Built with ❤️ using PHP and MySQL


---

---
