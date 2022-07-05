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
    <h3> Add Candidates For Elections</h3>
    <form method="POST"> 
<?php
  $conn=new mysqli("localhost","root","","saral_voting_db");
  $elections_name=$_GET['elections_name'];
  $total_candidates=$_GET['total_candidates'];
?>
<label>Election Name</label>
<input type="text"name="elections_name" value="<?php echo $elections_name;?>" class="form-control" readonly="readonly">
<?php
  //For Loop Use Gareko//
  for ($i=1; $i<=$total_candidates; $i++){
    ?>
    <div class="form-group">
<label>Candidates Name For Election <?php echo $i;?></label>
<input type="text" name="candidates_name<?php echo $i;?>" class="form-control">
    </div>
<?php
  }
?>
<input type="submit"name="add_details_candidates" class="btn btn-success" >
    </form>
</div>
</div>
</body>
</html>
<?php
if(isset($_POST['add_details_candidates'])){
    $total_candidates=$_GET['total_candidates'];
    $elections_name=$_POST['elections_name'];
    for ($i=1; $i<=$total_candidates; $i++){
        $candidates_name[]=$_POST['candidates_name'.$i]; 
    } 
    for ($i=0; $i<$total_candidates; $i++){
        $insert="INSERT into candidates_tbl (candidates_name,elections_name)values('$candidates_name[$i]','$elections_name')";
        $run=$conn->query($insert);

    }
    if($run){
        echo "Success";
    }
    else{
        echo"Sorry! Error";
    }
}
?>