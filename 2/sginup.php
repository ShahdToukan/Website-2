<?php
session_start();
include "connect.php";
include "nav.php";

if($_SERVER['REQUEST_METHOD'] == 'POST'){//start if of is REQUEST_METHOD== post//////////////////////////////
    $username=$_POST['email'];
    $password=$_POST['password'];
    $hashedpass=sha1($password);
    //echo  $hashedpass; 
    ///////////////////////////////////database query select///////////////////////////////////////////////////
    $stmt=$con->prepare( "SELECT 
                               id, email ,name, password 
                           FROM
                                users 
                           WHERE
                           email =? 
                           AND
                           password=? 
                           
                           LIMIT 1");

    $stmt->execute(array($username, $hashedpass));
    $row=$stmt->fetch();
    $count=$stmt->rowCount();
    //echo $count;

    if($count >0){//start if of is user is exiset at database or not ///////////////////////////////////////////
       $_SESSION['name']=$row['name'];
       $_SESSION['ID']=$row['id'];
       header('location:index.php');
       exit();
       //echo 'welcom' .' '. $username . ' '. 'You are admin';
    }//end if of is user is exiset at database or not////////////////////////////////////////////////////////
}//end if of is REQUEST_METHOD== post 






if(isset($_GET['name'])) {
//start if of is REQUEST_METHOD== GET //////////////////////////////
    $name=$_GET['name'];
    $email=$_GET['email'];
    $password=$_GET['password'];
    $hashedpass=sha1($password);
    //echo  $hashedpass; 
    ///////////////////////////////////database query insert///////////////////////////////////////////////////
  
    
  $stmt=$con->prepare(" INSERT INTO 
  users (name,email,password) 
  VALUES(:zname , :zmail ,:zpassword)");

        $stmt->execute(array(
                          'zname'  =>$name,
                          'zmail'   =>$email,
                          'zpassword' =>$hashedpass

                           ));


                              $_SESSION['name']=$name;
                              header('location:index.php');
        

}

?>

<!DOCTYPE html>
<html>
<head>

<section class="sign-up">

    <div id="login-box">
        <div class="left">
            <h3>Sign up</h3>

        <form  action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">
            <input type="text" name="email" placeholder="E-mail"  required>
            <input type="text" name="name" placeholder="Name" required>

            <input type="password" name="password" placeholder="Password" required >
            <input type="password" name="repassword" placeholder="Retype password"  required>

            <input class="btn btn-full" type="submit" name="signup_submit" value="Sign me up"  />

        </form>
        </div>

        <div class="right">
            <h3>Log in</h3>

            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">

            <input type="text" name="email" placeholder="E-mail" required>
        <input type="password" name="password" placeholder="Password" required>
            <input class="btn btn-full" type="submit" name="signup_submit" value="Log In" />

        </form>
        </div>
        <div class="or">OR</div>
    </div>
</section>

</body>
</html>
