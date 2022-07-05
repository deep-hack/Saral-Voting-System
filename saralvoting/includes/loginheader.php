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
        <nav class="navbar navbar-default">
            <div class="navbar-header">
                <a href=""class="navbar-brand">Saral Voting System</a>
</div>
<ul class="nav navbar-nav">
    <li><a href="">Home</a></li>
    <li><a href="">Parties</a></li>
    <li><a href="idgenerate.php">ID Generate</a></li>
    <li><a href="elections.php">Election</a></li>
    <li><a href="results.php">Results</a></li>
    <li><a href="vote.php">Vote</a></li>
    <li><a href="aboutus.php">About Us</a></li>
    <li><a href="logout.php">Logout</a></li>
    <li><a href=""><?php echo $_SESSION['user_name'];?></a></li>
</ul>
</div>
</nav>
</div>
<div class="container">
        <div class="col-sm-5 col-sm-offset-3 img-thumbnail"style="background-color:gray">
        <img src="images/vote.jpg"class="img img-thumbnail img-responsive">
        </div>   
</div>
</body>
</html>