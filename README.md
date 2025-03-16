# Faculty Advisor Information Management System
# A web-based system for students and faculty to manage academic progress, announcements, and feedback.
# Technologies Used
Frontend: HTML, CSS, JavaScript
Backend: PHP
Database: MySQL
Server: WAMP/XAMPP
Setup Guide

1. Install Requirements
Download & install WAMP or XAMPP.
Start Apache and MySQL.

2. Clone or Download Project
bash
Copy code
git clone https://github.com/your-username/faculty-advisor-management.git
or extract the ZIP into www (WAMP) / htdocs (XAMPP).

3. Configure Database
Open phpMyAdmin (http://localhost/phpmyadmin/).
Create a database faculty_management.
Import faculty_management.sql from the project folder.

4. Update Database Connection (if needed)
Modify config.php:
$servername = "localhost";
$username = "root";
$password = "";
$database = "faculty_management";

5. Run the Project
Open a browser and go to:
arduino
Copy code
http://localhost/faculty-advisor-management/
Register & log in as Student or Faculty.
Troubleshooting
Ensure Apache & MySQL are running.
Check config.php for correct database credentials.