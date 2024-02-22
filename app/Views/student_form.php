<!-- app/Views/student_form.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Application Form</title>
    <style>
        /* Add your CSS styles here */
    </style>
</head>
<body>

<div class="container">
    <h2>Student Application Form</h2>
    <form action="/store" method="post" enctype="multipart/form-data">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        
        <label for="id_passport">ID/Passport Number:</label>
        <input type="text" id="id_passport" name="id_passport" required>

        <label for="passport_photo">Passport Photo:</label>
