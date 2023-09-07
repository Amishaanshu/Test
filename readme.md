# Contact Us Form for Luxury Car Showroom

This is a simple PHP-based contact us form developed for a Luxury Car Showroom website. The form allows visitors to contact the showroom owner with their inquiries and messages while preventing spam submissions. The form data is stored in a MySQL database, and email notifications are sent to the site owner upon successful submissions.

## Table of Contents

- [Features](#features)
- [Prerequisites](#prerequisites)
- [Installation](#installation)
- [Usage](#usage)
- [Additional Considerations](#additional-considerations)
- [License](#license)

## Features

- User-friendly contact form with fields for full name, phone number, email, subject, and message.
- Form validation to ensure correct and valid user input.
- Prevention of duplicate submissions when users refresh the page.
- Storage of form submissions, including user IP address and timestamp, in a MySQL database.
- Email notifications sent to the site owner with form submission details.

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
    $to = 'siteowner@example.com'; // Replace with the actual email address of the site owner
    $subject = "New Contact Form Submission";
    $headers = "From: $email";
    ```

## Usage

1. Access the contact form by visiting the appropriate URL on your web server.

2. Fill out the form fields with valid information.

3. Click the "Submit" button to submit the form.

4. Upon successful submission, the form data will be stored in the database, and an email notification will be sent to the site owner.

5. If there are errors in the form submission (e.g., invalid email format), error messages will be displayed, and the form data will be retained for correction.

## Additional Considerations

- You can implement additional anti-spam measures such as CAPTCHA or honeypots to further prevent spam submissions.
- Ensure that the database connection and queries are secure to prevent SQL injection attacks. Use prepared statements for database interactions.
- Test the form thoroughly to ensure it functions correctly and handles edge cases.
- Consider logging form submissions and errors for debugging and auditing purposes.
- Add CSS to style the form for a better user experience.
- Include terms and conditions or a privacy policy link on the form for legal compliance.

## License

This contact form is open-source and available under the [MIT License](LICENSE).
