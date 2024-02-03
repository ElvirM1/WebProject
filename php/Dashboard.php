<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Dashboard</title>
    <link rel="stylesheet" href="Dashboard.css">
   
</head>
<body>
<nav>
    
        <h1>VitalHospital Admin</h1>
    </div>
    <i id="bar" class="fa-solid fa-bars"></i>
    <ul>
        <li><a href="Hospital.php">Home</a></li>
        <li><a href="Hospital.php#doctor">Doctor's</a></li>
        <li><a href="Hospital.php#speciality">Speciality's</a></li>
        <li><a href="Hospital.php#patient">Patient Reviews</a></li>
        <li><a href="Hospital.php#appointment">Appointment</a></li>
        <li><a href="Register.php">Register</a></li>
    </ul>
</nav> <br>
<div class="forms-container">
<h2>Add User</h2>
<form action="add_user.php" method="POST">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name"><br>
    <label for="surname">Surname:</label>
    <input type="text" id="surname" name="surname"><br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email"><br>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password"><br>
    <input type="submit" value="Add User">
</form>

<h2>Edit User</h2>
<form action="edit_user.php" method="post">
        <label for="user_id_edit">User ID to Edit:</label>
        <input type="text" id="user_id_edit" name="user_id_edit" required>

        <label for="new_name">New Name:</label>
        <input type="text" id="new_name" name="new_name" required>

        <label for="new_surname">New Surname:</label>
        <input type="text" id="new_surname" name="new_surname" required>

        <label for="new_email">New Email:</label>
        <input type="email" id="new_email" name="new_email" required>

        <label for="new_password">New Password:</label>
        <input type="password" id="new_password" name="new_password" required>

        <input type="submit" value="Edit User">
    </form>
<h2>Delete User</h2>
<form action="delete_user.php" method="POST">
    <label for="delete_email">Email:</label>
    <input type="email" id="delete_email" name="delete_email"><br>
    <input type="submit" value="Delete User">
</form>

</div>

<footer>
    <p>&copy; <?php echo date("Y"); ?> Hospital Dashboard. All rights reserved.</p>
</footer>
</body>
</html>
