<html>
    <head>
        <style media="screen">
            *,
      *:before,
      *:after{
          padding: 0;
          margin: 0;
          box-sizing: border-box;
      }
      body{
          background-color: #080710;
      }
      .background{
          width: 430px;
          height: 420px;
          position: absolute;
          transform: translate(-50%,-50%);
          left: 50%;
          top: 50%;
      }
      .background .shape{
          height: 200px;
          width: 200px;
          position: absolute;
          border-radius: 50%;
      }
      .shape:first-child{
          background: linear-gradient(
              #1845ad,
              #23a2f6
          );
          left: -80px;
          top: -250px;
      }
      .shape:last-child{
          background: linear-gradient(
              to right,
              #ff512f,
              #f09819
          );
          right: -80px;
          bottom: -250px;
      }
      form{
          height: 730px;
          width: 400px;
          background-color: rgba(255,255,255,0.13);
          position: absolute;
          transform: translate(-50%,-50%);
          top: 50%;
          left: 50%;
          border-radius: 10px;
          backdrop-filter: blur(10px);
          border: 2px solid rgba(255,255,255,0.1);
          box-shadow: 0 0 40px rgba(8,7,16,0.6);
          padding: 50px 35px;
      }
      form *{
          font-family: 'Poppins',sans-serif;
          color: #ffffff;
          letter-spacing: 0.5px;
          outline: none;
          border: none;
      }
      form h3{
          font-size: 32px;
          font-weight: 500;
          line-height: 42px;
          text-align: center;
      }
      
      label{
          display: block;
          margin-top: 30px;
          font-size: 16px;
          font-weight: 500;
      }
      input{
          display: block;
          height: 50px;
          width: 100%;
          background-color: rgba(255,255,255,0.07);
          border-radius: 3px;
          padding: 0 10px;
          margin-top: 8px;
          font-size: 14px;
          font-weight: 300;
      }
      ::placeholder{
          color: #e5e5e5;
      }
      button{
          margin-top: 30px;
          width: 100%;
          background-color: #ffffff;
          color: #080710;
          padding: 15px 0;
          font-size: 18px;
          font-weight: 600;
          border-radius: 5px;
          cursor: pointer;
      }
      
          </style>
    </head>
    <body>
        <div class="background">
            <div class="shape"></div>
            <div class="shape"></div>
        </div>
        <div>
        <form name="Signup" method="post" action="Signup.php">
            
              <h1>Sign Up HERE</h1>
              <label for="uname"><b>Username</b></label>
              <input type="text" placeholder="Enter Username" name="uname" id="uname" required>
              <label for="email"><b>Email</b></label>
              <input type="text" placeholder="Enter Email" name="email" id="email" required>
              <label for="phone"><b>Phone_NO</b></label>
              <input type="text" placeholder="Enter Phone Number" name="phone" id="phone" required>
              <label for="psw"><b>Password</b></label>
              <input type="password" placeholder="Enter Password" name="psw" id="psw" required>
              
              <label for="psw-repeat"><b>Repeat Password</b></label>
              <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>
              <a href="first.html">
                <button type="submit" id="submit">Signin</button> 
	      </a>
            </div>
            
          </form>
        </div>
       
    </body>
<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con =  mysqli_connect('localhost', 'root', '','minipro');

if($con->connect_errno)
{
    echo "Sorry";
}
else{
    echo "Database Connected";
}
// get the post records

$uname =$_POST['uname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$psw = $_POST['psw'];
$pswr = $_POST['psw-repeat'];

// database insert SQL code
$sql = "INSERT INTO `Signup` (`UserName`, `Email`, `Phone`, `Password`,`RePassword`) VALUES ('$uname', '$email', '$phone', '$psw','$pswr')";

// insert in database 
$res = mysqli_query($con, $sql);

if($res)
{
	echo "Contact Records Inserted";
}

?>
</html>