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
    <form method="GET"action="add_details_candidates.php"> 
        <div class="form-group"> 
            <label>Select Elections Name</label>
            <select class="form-control" name="elections_name">
        <option value=""selected="selected">Please Select Elections</option>
    <?php
  $conn=new mysqli("localhost","root","","saral_voting_db");
    $select="SELECT * from elections_tbl";
    $run=$conn->query($select);
    if($run->num_rows>0){
        while($row=$run->fetch_array()){
            
    ?>
  <option value="<?php echo $row['elections_name'];?>"><?php echo $row['elections_name'];?></option>
    <?php
        }
    }
    ?>

    </select>
            
        </div>
        <div class="form-group">
            <label> Number Of Candidates</label>
            <input type="text"name="total_candidates"class="form-control">

        </div>
        <input type="submit"name="add_elections"class="btn btn-success">
    </form>
</div>
</div>
</body>
</html>
