<?php
session_start();
include("includes/loginheader.php");
if(!$_SESSION['user_email']){
    header("location:login.php");
}
?>  
<br>
<div class="container">
    <div class="row">
        <div class=" col-sm-6">
<h4 class="text text-center text-info alert bg-primary">How To Cast Your Vote<b><i>?</i></h4>
<ul>
    <li>
        Firstly Select <b>"ID Generate"</b>From Navigation Bar
    </li>
    <li>
        Then You Should Request To <b>"Admin"</b>For Generate Your Unique ID
    </li>
    <li>
        Click On The <b> "Election"</b>From Navigation Bar
    </li>
    <li>
         Select Available Election To Caste Your Vote
</li>
<li>
    The Secrecy Of Your Ballot Is Maintained Under The High Security Standards Adhered To By Saral Voting System
</li>
<li>
    Your Casted Vote Remains Anonymous As Our System's Architecture Strictly Separates Your Personal Data From The Electronic Ballot
</li>
</ul>
</div>
<br>
<div class="col-sm-5">
<img src="images/vote1.jpg"class="img img-responsive img-thumbnail">
</div>
</div>
</div> 
<?php
include("includes/footer.php");
?> 
<script type="text/javascript"src="js/jquery.js"></script>
<script type="text/javascript"src="js/bootstrap.js"></script>
</body>
</html>