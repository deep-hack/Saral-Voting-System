<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saral Voting System</title>
    <Link rel="stylesheet" href="css/bootstrap.css" />
    <Link rel="stylesheet" href="mystyle.css" />
    <Link rel="stylesheet" href="css/fonts.css" />
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>    
</head>
<body>
  <div class="container"> 
<div class="col-sm-6">
    <h2>All Requested Data</h2>
    <table class="table table-responsive table-hover">
        <tr>
            <th>#</th>
            <th>User Email</th>
            <th>User Province</th>
            <th>Action</th>
        </tr>
        <?php
$conn=new mysqli("localhost","root","","saral_voting_db");
$select="select * from id_request_tbl";
$run=$conn->query($select);
if($run->num_rows>0){
    $total=0;
    while($row=$run->fetch_array()){
        $total=$total+1;
        $id=$row['id'];
       ?>
       <tr>
        <td><?php echo $total;?></td>
        <td><?php echo $row['user_email'];?></td>
        <td><?php echo $row['user_province'];?></td>
        <td><a href="updateid.php?id=<?php echo $id;?>">Update</a></td>
       </tr>
       <?php
    }
}
else{
   
    ?>
<tr>
    <td colspan="4"> Sorrry! Record Not Found</td>
</tr>
    <?php
}
?>
    </table>
</div>
<div class="col-sm-6">
</div>
</div>

</body>
</html>