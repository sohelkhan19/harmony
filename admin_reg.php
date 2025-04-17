<?php
include 'database/dao.php';
$dao = new Dao();

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $hashed_new_password = password_hash($password, PASSWORD_BCRYPT);
    $name = $_POST['name'];
    $phone = $_POST['phone'];

    $data = [
        'admin_name'     => $name,
        'admin_email'    => $email,
        'admin_phone'    => $phone,
        'admin_password' => $hashed_new_password
    ];

    $result = $dao->insert('admin_master', $data);

    if ($result) {
        echo "Admin registered successfully";
    } else {
        echo "Error while registering admin.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="shortcut icon" href="img/logo-removebg-preview.png" type="image/x-icon">
</head>
<body>
    <form action="admin_reg.php" method="post">
        <input type="text" name="name" placeholder="Name">
        <input type="email" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Password">
        <input type="text" name="phone" placeholder="Phone">
        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>