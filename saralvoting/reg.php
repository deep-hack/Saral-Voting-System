<?php
include("includes/header.php");
?>
<?php
require("includes/db.php");
$emailError="";
$accountSuccess="";
if(isset($_POST['register'])){
     $user_name=$_POST['fullname'];
     $user_email=$_POST['email'];
     $user_gender=$_POST['gender'];
    $user_province=$_POST['province'];
    $user_password=$_POST['password'];
     $user_confirmpassword=$_POST['confirmpassword'];
     $select="select * from users_db where user_email='$user_email'";
     $exe=$conn->query($select);
     if($exe->num_rows>0){
        $emailError="<p class='text text-center text-danger'>Your Email Is Already Registered</p>";
     }
     else{
        $insert="insert into users_db (user_name,user_email,user_gender,user_province,user_password,user_confirmpassword) values('$user_name','$user_email','$user_gender','$user_province','$user_password','$user_confirmpassword')";
  
        $run=$conn->query($insert);
        if($run){
           $accountSuccess="<p class='text text-center text-success'>Account Created Successfully</p>";
        }
        else{
           echo "Error";
        }
   
        
     }

  
}
?>

<br>
<hr>
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2 bg-info"style="box-shadow:2px 2px 2px 2px gray;">
                    <h3 class="text text-center alert bg-primary">User Registration</h3>
                    <?php 
                    if($emailError!=""){
                        echo $emailError;
                    }
                    if($accountSuccess!=""){
                        echo $accountSuccess;
                    }
                    ?>
                    <form method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail">Full Name:</label>
                        <input type="text"class="form-control"id="exampleInputEmail" name="fullname"  placeholder="Enter Full Name"
                        required>
                    </div>
<div class="form-group">
<label for="exampleInputEmail">Email address</label>
                        <input type="email" class="form-control" name="email" id="exampleInputEmail" placeholder="Enter email"                        required>
</div>
<div class="form-group">
                        <label for="Gender">Gender</label>
                        <select name="gender"class="form-control">
                            <option value="">Select</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Others">Others</option>
                        </select>
</div>
<div class="form-group">
                        <label for="Province">Province</label>
                        <select name="province"class="form-control">
                            <option value="">Province</option>
                            <option value="Sudurpashchim">Sudurpashchim</option>
                            <option value="Madhesh">Madhesh</option>
                            <option value="Bagmati">Bagmati</option>
                            <option value="Gandaki">Gandaki</option>
                            <option value="Karnali">Karnali</option>
                            <option value="Lumbini">Lumbini</option>
                            <option value="Province1">Province1</option>
                        </select>
</div>
                        <div class="form-group">
<label for="password">Password</label>
                        <input type="password" class="form-control" name="password">
</div>    
<div class="form-group">
<label for="confirm password">Confirm Password</label>
                        <input type="password" class="form-control" name="confirmpassword">
</div>    
<div class="form-group">
<button type="submit"class="btn btn-success btn-block"name="register">Submit</button>
</div>

</form>
</br>
</div>
</div>
</div>
<script type="text/javascript" src="js/jquery.js">  </script>
<script type="text/javascript" src="js/bootstrap.js">  </script>
</body>
</html>