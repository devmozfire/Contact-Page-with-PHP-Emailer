Contact Page with PHP Emailer
=============================

Author
------

*   Name: Mozfire
*   GitHub: [devmozfire](https://github.com/devmozfire)
*   Instagram: [devmozfire](https://www.instagram.com/devmozfire/)

Features
--------

*   User-friendly contact form
*   Server-side validation for required fields
*   PHPMailer integration for sending emails
*   Basic CSS styling with animated icons

Usage
-----

1.  Clone the repository:  
    `git clone https://github.com/devmozfire/contact-page-php-emailer.git`
2.  Configure the SMTP server details in `send_email.php`. Update the following lines:  
    
        $mail->Host = 'smtp.example.com';  // Specify your SMTP server
        $mail->Username = 'your_email@example.com';  // Your SMTP username
        $mail->Password = 'your_password';  // Your SMTP password
    
3.  Ensure you have the PHPMailer library (`PHPMailerAutoload.php`) available. If not, download it from the [PHPMailer GitHub repository](https://github.com/PHPMailer/PHPMailer) and include it in your project.
4.  Open the `index.php` file in a web browser or deploy the project on a web server.
5.  Fill in the contact form fields and click the "Send Message" button.
6.  If the email is sent successfully, you will see the "Message sent successfully" confirmation. Otherwise, an error message will be displayed.

Contributing
------------

Contributions are welcome! Feel free to fork the repository, make improvements, and submit a pull request.

If you encounter any bugs or have suggestions for additional features, please create an issue in the repository.

License
-------

This project is licensed under the [MIT License](LICENSE).
