<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0 maximum-scale=1.0 user-scalable=yes">
   
    <title>Two Skinny Men Test</title>
    <link rel="stylesheet" type="text/css" href="./styles/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./styles/style.css">
    <link href="./styles/font1" rel="stylesheet" type="text/css">
	<link href="./styles/font2" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="./scripts/jquery-2.1.1.js"></script>

</head>
<body>
<div class="container">

<div class="wrapper-content">

<div class="small-separator-blue with-margin-bottom"> </div>

<div class="row">
	<h1>Our people</h1>
	<p class="large-font">What started as Two Skinny Men with a vision is in now a tight-knit, continously growing team.</p>
</div><div class="row no-padding-mobile">
<?php 

	$hostname = "70.32.77.140";
	$username = "db_ui_dev_test";
	$password = "&z7hZe48";
	$databaseName = "db_ui_dev_test";
	$table1 = "employees";
	$table2 = "role";

	$conn=mysql_connect($hostname, $username, $password) or die("unable to connect to database.");
    mysql_select_db($databaseName) or die ("Unable to select");
	$query = "SELECT employee_id, employee_firstname,employee_lastname, role_name FROM $table1 e, $table2 r where e.fk_role_id = r.role_id order by r.role_order"; 
	$result = mysql_query($query) or trigger_error(mysql_error()." ".$query);
  
while ($row = mysql_fetch_assoc($result)) {
   //echo $row["employee_id"];
?>

	<script type="text/javascript" src="./scripts/main.js"></script>

	<div class="col-sm-4 people">
		<img class="people-image" id="image_empid_<?php echo $row["employee_id"];?>" src="./images/loading_img.gif" alt="<?php echo $row["employee_firstname"];?>">
		<span>
			<div class="people-name"><?php echo str_pad($row["employee_firstname"],10); echo $row["employee_lastname"];?></div>
			<div class="people-title"><?php echo $row["role_name"];?></div>
			<a id="linkedinURL_empid_<?php echo $row["employee_id"];?>" href="http://www.linkedin.com/in/bblakslee" target="_blank">
			<div class="people-linkedin"></div>
			</a>
			<div id="txtHint"> </div>
		</span>
	</div>
<?php }?>
  </div></div>
</div>

<footer class="footer">
    <div class="container">
        <div class="col-sm-6">
            <h4>TALK TO US</h4>
            <p><a href="mailto:info@twoskinnymen.com">info@twoskinnymen.com</a></p>

          
        </div>
        </div>
</footer>

<script type="text/javascript" src="./scripts/bootstrap.min.js"  crossorigin="anonymous"></script>


</body>
</html>