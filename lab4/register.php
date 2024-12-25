<?php
require_once "conect.php";

$name =  $phone = $email =  '';
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = htmlspecialchars(trim($_POST['name']));
    $phone = htmlspecialchars(trim($_POST['phone']));
    $email = htmlspecialchars(trim($_POST['email']));
    $query = "INSERT INTO USERS 
    (name,phone,email)
    values(:name,:phone,:email)";
     $add = $conn->prepare($query);   //this used to PDO
    // $add = $mysqli($query);
    $add->execute([
        'name' => $name,
        'phone' => $phone,
        'email' => $email
        
    ]);
    echo "<script>alert('success')</script>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
    <label for="name">Name:</label>
    <input type="text" id="name" name="name">
    <br>
    <label for="phonw">phone:</label>
    <input type="phone" id="phone" name="phone">
    <br>
    <label for="email">email:</label>
    <input type="email" id="email" name="email">
    <br>

    <input type="submit" value="Sign in">
</form>
    
</body>
</html>