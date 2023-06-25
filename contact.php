<!DOCTYPE html>
<html>
<head>
    <title>Contact Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            text-align: center;
        }

        form {
            margin-top: 30px;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        textarea {
            height: 150px;
        }

        .submit-button {
            background-color: #1da1f2;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .submit-button:hover {
            background-color: #0c85d0;
        }

        .social-icons {
            margin-top: 20px;
            text-align: center;
        }

        .social-icons a {
            display: inline-block;
            margin: 0 5px;
            color: #1da1f2;
            font-size: 20px;
            transition: color 0.3s;
        }

        .social-icons a:hover {
            color: #0c85d0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Contact Us</h1>
        <form action="send_email.php" method="POST">
            <label for="name">Name</label>
            <input type="text" name="name" required>

            <label for="username">Username</label>
            <input type="text" name="username" required>

            <label for="email">Email</label>
            <input type="text" name="email" required>

            <label for="phone">Phone</label>
            <input type="text" name="phone" required>

            <label for="country">Country</label>
            <input type="text" name="country" required>

            <label for="message">Message</label>
            <textarea name="message" required></textarea>

            <button type="submit" class="submit-button">Send Message</button>
        </form>

        <div class="social-icons">
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
    </div>
</body>
</html>
