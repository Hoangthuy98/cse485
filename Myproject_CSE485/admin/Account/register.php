<?php include('sever.php') ?>
<!DOCTYPE html>
<html>
<head>
    <title>Registration </title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="header">
    <h2>Register</h2>
</div>

<form method="post" action="register.php">

    <?php include('errors.php'); ?>

    <div class="input-group">
        <label>UserName</label>
        <input type="text" name="username" value="<?php echo $username; ?>">
    </div>
    <div class="input-group">
        <label>Password</label>
        <input type="password" name="password_1">
    </div>
    <div class="input-group">
        <label>Confirm password</label>
        <input type="password" name="password_2">
    </div>
    <div class="input-group">
        <label>Full Name</label>
        <input type="text" name="fullname">
    </div>
    <div class="input-group">
        <label>Email</label>
        <input type="email" name="email">
    </div>
    <div class="input-group">
        <label>Ảnh</label>
        <input type="file" name="img" value="">
    </div>
    <div class="input-group">
        <label>Role</label>
        <input type="text" name="role">
    </div>

    <div class="input-group">
        <button type="submit" class="btn" name="reg_user">Register</button>
    </div>
    <p>
        Already a member? <a href="sign_in.php">Sign in</a>
    </p>
</form>
</body>
</html>