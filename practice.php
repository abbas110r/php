<?php
    //msgvariables
    $msg = "";
    $msgClass="";
    if(filter_has_var(INPUT_POST,'email')){
        $email = htmlspecialchars($_POST["email"]);
        $firstname = htmlspecialchars($_POST['firstname']);  
        $lastname = htmlspecialchars($_POST['lastname']);
        $password1= $_POST['password1'];
        $password2= $_POST['password2'];
        $phone = $_POST['phone'];
    }
    else{
        echo "enter data";
      //no data entered
    }
    if(!empty($email) && !empty($firstname) && !empty($lastname) && !empty($password1) && !empty($password2) && !empty($phone)){
        if(filter_var($email,FILTER_VALIDATE_EMAIL)===false){
            $msg="Please enter a valid email";
            $msgClass='alert-danger';

        }
        else if(filter_var($phone,FILTER_VALIDATE_INT)===false or (strlen($phone)<10)){
            $msg="Please enter a valid phone number";
            $msgClass='alert-danger';

        }
        else{
            $msg = 'Form Submitted Successfully';
            $msgClass='alert-success';
        }
        if(strlen($password1)<8){
            $msg="Password is too short";
            $msgClass='alert-danger';
        }
        if($password1!=$password2){
            $msg="Passwords dont match";
            $msgClass='alert-danger';
        }
    }
    else{
        $msg="Please enter the details";
        $msgClass='alert-danger';
        // echo "failed";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link rel="stylesheet" href="bootstrap.min.css">
    <style>
        body{
            margin-top:2rem;
            
        }
        .cont{
            width:70vw;
            padding:3rem 2rem;
            margin:0 13rem;
            box-shadow:2px 3px 10px rgba(0,0,0,0.4);
            background-color:white;
        }
        #heading1{
            text-align:center;
            background: -webkit-linear-gradient(#00FFFF, #00308F);
            -webkit-background-clip: text;
             -webkit-text-fill-color: transparent;
        }
       
    </style>
            
</head>
<body>
<h1 id='heading1'>SIGN UP FORM<h1>
  <div class="row cont">
      
        
    <form class="col s12" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <div class="row">
        <?php if($msg!=''): ?>
                <div class="alert <?php echo $msgClass; ?>">
                <?php echo $msg;?>
                </div>
        <?php endif;?>
                  
        <div class="input-field col s3">
          <input placeholder="firstname" name="firstname" id="first_name" type="text" class="validate" value="<?php echo isset($_POST['firstname'])?$firstname:''; ?>">
          <label for="first_name">First Name</label>
        </div>
        <div class="input-field col s3 ">
          <input id="last_name" type="text" class="validate" name="lastname" value="<?php echo isset($_POST['lastname'])?$lastname:''; ?>">
          <label for="last_name">Last Name</label>
        </div>
      </div>
      
      <div class="row">
        <div class="input-field col s3">
          <input id="email" type="email" class="validate" name="email"  value="<?php echo isset($_POST['email'])?$email :'' ;?>">
          <label for="email">Email</label>
         
        </div>
        <div class="input-field col s3">
        <input id="phone" type="text" class="validate" name="phone" value="<?php echo isset($_POST['phone'])?$phone :'' ;?>">
          <label for="phone">Phone Number</label>
    </div>
      </div>
      
      <div class="row">
        <div class="input-field col s3">
          <input id="password" type="password" class="validate" name="password1" value="<?php echo isset($_POST['password1'])?$password1 :'' ;?>">
          <label for="password">Password</label>
        </div>
        <div class="input-field col s3">
          <input id="password" type="password" class="validate" name="password2" value="<?php echo isset($_POST['password2'])?$password2 :'' ;?>">
          <label for="password"> Retype Password</label>
        </div>
      </div>
      <button class="btn waves-effect waves-light" type="submit" name="action">Submit</button>
    </form>
  </div> 
</body>
</html>