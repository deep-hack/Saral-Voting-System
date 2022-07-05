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
    <h3> Add New Elections</h3>
    <form method="POST"> 
        <div class="form-group"> 
            <label>Add Elections Name</label>
            <input type="text"name="elections_name"class="form-control">
        </div>
        <div class="form-group"> 
            <label>Election Start Date</label>
            <input type="date"name="elections_start_date"class="form-control">
        </div>
        <div class="form-group"> 
            <label>Election End Date</label>
            <input type="date"name="elections_end_date"class="form-control">
        </div>
<input type="submit"name="add_elections"class="btn btn-success">
    </form>
</div>
</div>
</body>
</html>
<?php
$conn=new mysqli("localhost","root","","saral_voting_db");
if(isset($_POST['add_elections'])){
    $elections_name=$_POST['elections_name'];
    $elections_start_date=$_POST['elections_start_date'];
    $elections_end_date=$_POST['elections_end_date'];
    $insert="INSERT INTO elections_tbl(elections_name,elections_start_date,elections_end_date)values('$elections_name','$elections_start_date','$elections_end_date')";
    $run=$conn->query($insert);
    if($run){
        echo "Success";
    }
    else{
        echo "Sorry! Error";
    }
}
?>