<?php
$email=$_POST['email'];
$password=$_POST['pass'];

// Create connection
$conn = new mysqli('localhost','root','','register_db');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

if (isset($_POST['email']) && isset($_POST['pass'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $email = validate($_POST['email']);

    $pass = validate($_POST['pass']);

    if (empty($email)) {

        header("Location: index.php?error=email is required");

        exit();

    }else if(empty($pass)){

        header("Location: index.php?error=Password is required");

        exit();

    }else{
  $sql = "SELECT * FROM register_form WHERE email='$email' AND pass='$pass'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) === 1) {

    $row = mysqli_fetch_assoc($result);

    if ($row['email'] === $uname && $row['pass'] === $pass) {

        echo "Logged in!";

        $_SESSION['email'] = $row['email'];

        $_SESSION['pass'] = $row['pass'];

        $_SESSION['id'] = $row['id'];

        header("Location: home.php");

        exit();

    }else{

        header("Location: index.php?error=Incorect email or password");

        exit();

    }

}else{

    header("Location: index.php?error=Incorect email or password");
    
    exit();

}

}

}else{

header("Location: index.php");
echo ("logged in");
exit();

}

?>