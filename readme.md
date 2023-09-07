# Contact Us Form for Luxury Car Showroom

This is a simple PHP-based contact us form developed for a Luxury Car Showroom website. The form allows visitors to contact the showroom owner with their inquiries and messages while preventing spam submissions. The form data is stored in a MySQL database, and email notifications are sent to the site owner upon successful submissions.



## Prerequisites

Before using this contact form, make sure you have the following:

- PHP environment (Core PHP)
- MySQL database server
- SMTP email server (for sending email notifications)
- Web server (e.g., Apache, Nginx)

## Installation

1. Clone or download this repository to your web server directory.

2. Import the provided SQL file (`contact_form.sql`) into your MySQL database to create the required table structure.

3. Configure the database connection in the `process_form.php` file by updating the following lines with your database credentials:

    ```php
    $host = 'localhost'; // Replace with your database host
    $dbname = 'your_db_name'; // Replace with your database name
    $username = 'your_db_username'; // Replace with your database username
    $password = 'your_db_password'; // Replace with your database password
    ```

4. Configure the email settings in the `process_form.php` file for sending email notifications to the site owner. Replace the following variables with your email settings:

    ```php
    $to = 'owner@example.com'; // Replace with the actual email address of the site owner
    $subject = "New Contact Form Submission";
    $headers = "From: $email";
    ```

