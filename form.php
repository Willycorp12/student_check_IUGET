<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our form</title>
</head>
<body>
    <h1>Registration Form</h1>
    <form action="" method="post">
        <label for="name">Name</label>
        <input type="text" name="name" placeholder="Enter your name" required/><br/><br/>
        <label for="username">Username</label>
        <input type="text" name="username" placeholder="Enter your Username" required/><br/><br/>
        <label for="email">Email</label>
        <input type="email" name="email" placeholder="Enter your Email" required/><br/><br/>
        <label for="password">Password</label>
        <input type="password" name="pwd" placeholder="Enter your Password" required/><br/><br/>
        <label for="sel">Select an Option</label>
        <select name="sel">
            <option value="Red">Red</option>
            <option value="Black">Black</option>
            <option value="Blue">Blue</option>
        </select><br/><br/>
        <button type="submit" name="login" value="Login">Login</button>
    </form>
</body>
</html>