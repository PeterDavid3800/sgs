<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        body {
            background-color: white;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
        }

        nav {
            background-color: blue;
            padding: 10px 0;
            text-align: center;
            width: 100%;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
        }

        nav a:hover {
            text-decoration: underline;
        }

        .container {
            background-color: blue;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            width: 400px; /* Set your desired width */
            text-align: center;
            margin-top: 20px; /* Adjusted margin-top to create space between navbar and form */
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 8px;
        }

        input, select {
            padding: 8px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<nav>
    <a href="#">Apply</a>
    <a href="#">Courses</a>
    <a href="#">Schools</a>
    <a href="#">About</a>
    <a href="#">Chaplaincy</a>
    <a href="#">Student Life</a>
    <a href="#">Contact Us</a>
</nav>

<div class="container">
    <h2>Registration Form</h2>
    <form action="/store" method="post" enctype="multipart/form-data">
        <label for="first_name">First Name:</label>
        <input type="text" id="first_name" name="first_name" required>
        
        <label for="last_name">Last Name:</label>
        <input type="text" id="last_name" name="last_name" required>
        
        <label for="email">Email Address:</label>
        <input type="email" id="email" name="email" required>
        
        <label for="phone_number">Phone Number:</label>
        <input type="tel" id="phone_number" name="phone_number" required>

        <label for="course">Choose a Course:</label>
        <select id="course" name="course" required>
            <option value="">Select a Course</option>
            <option value="Bachelor of Business Science: Actuarial Science">Bachelor of Business Science: Actuarial Science</option>
            <!-- Add other course options here -->
        </select>

        <label for="hear_about">How did you hear about us?</label>
        <select id="hear_about" name="hear_about" required>
            <option value="">Select an Option</option>
            <option value="Website">Website</option>
            <!-- Add other options here -->
        </select>

        <label for="country">Country:</label>
        <select id="country" name="country" required>
            <option value="">Select your Country</option>
            <option value="Afghanistan">Afghanistan</option>
            <!-- Add other country options here -->
        </select>

        <button type="submit">Submit</button>
    </form>
</div>

</body>
</html>
