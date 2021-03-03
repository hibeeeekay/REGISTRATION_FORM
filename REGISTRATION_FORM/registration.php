<!DOCTYPE html>
<html>
<head>
   <title>Registration form</title>
   <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
   <div>
     <?php
     if(isset($_POST['create'])){
        $firstName   = $_POST['firstname'];
        $lastName    = $_POST['lastname'];
        $email       = $_POST['email'];
        $phoneNumber = $_POST['phonenumber'];
        $password    = $_POST['password'];
        echo "Your name is <b>$firstName $lastName</b>.<br>";
        echo "Your email is <b>$email"."</b>.<br>";
        echo "phone number is<b> $phoneNumber"."</b>.<br>";
        echo "Your password is <b> $password </b>.<br>";
     }
     ?>
   </div>
   <div>
      <form action="registration.php" method="post">
        <div class="container">

           <div class="row"> 
              <div class=>
                  <h1>REGISTRATION</h1>
                  <p>Fill up the form</P>
                  <label for="firstname"><b>FIRST NAME</b></label> 
                  <input type="text" name="firstname" required><br><br>

                  <label for="lastname"><b>LAST NAME</b></label> 
                  <input type="text" name="lastname" required><br><br>

                  <label for="email"><b>EMAIL ADD</b></label> 
                  <input type="email" name="email" required><br><br>

                  <label for="phonenumber"><b>PHONE NUM</b></label> 
                  <input type="text" name="phonenumber" required><br><br>

                  <label for="password"><b>PASSWORD</b></label> 
                  <input type="password" name="password" required><br><br>

                  <input type="submit" name="create" value="sign up">
          </div>
        </div>
      </form>
   </div>
</body>
</html>