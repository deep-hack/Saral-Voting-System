<?php
session_start();
include("includes/loginheader.php");
if(!$_SESSION['user_email']){
    header("location:login.php");
}
?>  
<br>
<div class="container">
   <?php
   require("includes/db.php");
   $user_email=$_SESSION['user_email'];
   $select="select * from id_request_tbl where user_email='$user_email'";
    $run=$conn->query($select);
    if($run->num_rows>0){
        ?>
         <div class="col-sm-6 col-sm-offset-3 bg-success alert">
        <h4>...Your Request ID Is Already Submitted...</h4>
    </div>
        <?php
    }
    else{


        ?>
        <?php
           $select="select * from users_db where user_email='$user_email'";
   $run=$conn->query($select);
   if($run->num_rows>0){
    while ($row=$run->fetch_array()){
        $user_name=$row['user_name'];
        $user_email=$row['user_email'];
        $user_province=$row['user_province'];
        $user_id_generated=$row['user_id_generated'];
    }
   }
   if($user_id_generated!=""){
    ?>
     <div class="col-sm-6 col-sm-offset-3 bg-success alert">
        <h4>Dear Voter Your Unique ID Is "  <span class="text text-danger"><?php echo $user_id_generated; ?></span>  " </h4>
  <p><b>NOTE:</b> Please Use Above Unique ID To Caste Your Vote <b>THANK YOU</b> </p> 
    </div>
    <?php
   }
   else{
?>
   <div class="col-sm-6 col-sm-offset-3 bg-success alert">
   <form method="post">
<div class="form-group">
<label for="exampleInputEmail">User Name</label>
 <input type="email" class="form-control" name="user_name" id="exampleInputEmail" placeholder="Enter email" required value="<?php echo $user_name;?>" readonly>
</div>
<div class="form-group">
<label for="exampleInputEmail">Email Address</label>
 <input type="email" class="form-control" name="user_email" id="exampleInputEmail" placeholder="Enter email" required value="<?php echo $user_email;?>" readonly>
</div>
<div class="form-group">
<label for="exampleInputEmail">Province</label>
 <input type="email" class="form-control" name="user_province" id="exampleInputEmail" placeholder="Enter email" required value="<?php echo $user_province;?>" readonly>
</div>                        
<div class="form-group">
<button type="submit"class="btn btn-info btn-block"name="idrequest">Request For ID</button>
</div>
</form>
   </div>
</div>

<?php
    }
}

?>
<?php
if(isset($_POST['idrequest'])){
    $user_email=$_POST['user_email'];
    $user_province=$_POST['user_province'];
    require("includes/db.php");
    

    $insert="insert into id_request_tbl (user_email,user_province) values ('$user_email','$user_province')";
    $run=$conn->query($insert);
    if($run){
        echo "<script> alert('Wow Your Requested ID Is Submitted Successfully')</script>";
        header("location:idgenerate.php");
    }
    else{
        echo "Sorry Error!";
    }

}
    
?>
