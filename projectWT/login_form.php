 <?php

  // $host="localhost";
  // $user="root";
  // $password="";
  // $db="register_db";
  // $connection = new mysqli('localhost','root','','register_db');
  // mysql_connect($host,$user,$password);
  // mysql_select_db($db);
  // if(isset($_POST['email']))
  // {
  //   $useremail=$_POST['email'];
  //   $password=$_POST['pass'];

  //   $fetch="select * form register_form where email='".$useremail."' AND pass='".$password."' limit 1";
  //   $result=mysql_query($connection,$fetch);
  //   if(mysql_num_rows($result == 1))
  //   {
  //     echo(" YOU LOGED IN!");
  //     exit();
  //   }else{
  //     echo("Log In Failed: Invalid UserName or Password !!!");
  //     exit();
  //   }

  // }

  

$email=$_POST['email'];
$pass=$_POST['pass'];

// Create connection
$conn = new mysqli('localhost','root','','register_db');
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}else{

  $stmt =$conn->prepare("select * from register_form where email=? and pass=?");
  $stmt->bind_param("ss",$email,$pass);
  $stmt->execute();
  $stmt_result = $stmt->get_result();
  if($stmt_result->num_rows > 0){
$data =$stmt_result->fetch_assoc();
if($data['pass'] ===$pass && $data['email'] === $email){
  echo"logged in";
}
  
  }else{
    echo" invalid email or password";
  }
}

// $sql = "SELECT * FROM register_form WHERE email='$email' AND pass='$pass'";

// $result = mysqli_query($conn, $sql);
// $row=mysqli_fetch_assoc($result);
// $count=mysqli_num_rows($result);

// if ($count == 1){
//     echo(" Logged IN thanks !!");
//   }else{
//     echo(" Invalid Password or E-mail");
//  }
// $conn->close();
?>



