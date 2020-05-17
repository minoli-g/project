<?php
require_once 'core/init.php';
    $user = new User();
    if (!$user->exists()) {
      Redirect::to('index.php');
    } else {
	  $data = $user->data();
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>LRH Home</title>
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<!-- <link rel="stylesheet" type="text/css" href="../CSS/society.css"> -->
	<script src="javascript/header.js"></script>
	<script src="javascript/society.js"></script>
	<script>
    var loadFile1 = function(event) {
        var output = document.getElementsByClassName("profilepic");
        output[0].src = URL.createObjectURL(event.target.files[0]);
    };
	
    </script>
</head>
<body onload="loadconnection();">
	<!-- Header section -->
	<div class="headerfixed">
		<!-- Header start -->
	<div class="header">
		<!-- Wrapper start of heading-->
		<div class="wrapper">

			<a href="home.html"><img src="images/name1.png" width=290 height=45 class="logoletter"/></a>

			<!-- icon bar to navigate to all pages -->
			<div class="icon-bar">
			 <ul>
			 <?php
			 
                if ($data->group==1) {
					echo "<li><a href='index1.php' onmouseover='headerchange(1);' onmouseout='headerorigin(1);'><img src='images/login/home.png' id='heade'><p id='p1'>Home</p></a></li>
						<li><a href='sendmsg.php' onmouseover='headerchange(2);' onmouseout='headerorigin(2);'><img src='images/login/message.png' id='heade'><p id='p2'>Message</p></a></li>
						<li><a href='change.php' onmouseover='headerchange(3);' onmouseout='headerorigin(3);'><img src='images/login/chagedate.png' id='heade'><p id='p3'>Change Date</p></a></li>
						<li><a href='report.php' onmouseover='headerchange(4);' onmouseout='headerorigin(4);'><img src='images/login/report.png' id='heade'><p id='p1'>Reports</p></a></li>";}
                else if ($data->group==2) {
					echo "<li><a href='index1.php' onmouseover='headerchange(1);' onmouseout='headerorigin(1);'><img src='images/login/home.png' id='heade'><p id='p1'>Home</p></a></li>
						<li><a href='register.php' onmouseover='headerchange(2);' onmouseout='headerorigin(2);'><img src='images/login/registration.png' id='heade'><p id='p2'>Register</p></a></li>
						<li><a href='list.php' onmouseover='headerchange(3);' onmouseout='headerorigin(3);'><img src='images/login/society.png' id='heade'><p id='p3'>View</p></a></li>
						<li><a href='viewmsg.php' onmouseover='headerchange(4);' onmouseout='headerorigin(4);'><img src='images/login/message.png' id='heade'><p id='p1'>Messages</p></a></li>";
						echo '<li><a href="#" onmouseover="headerchange(5);" onmouseout="headerorigin(5);"><img src="images/login/notification.png" id="homaj-notification"><p id="p5">Notifications</p></a>
						<div id="notify">
							<p>New Messages</p>
							<hr style="background-color:white;width: 90%;">';
							   $Date1 = date("Y-m-d");
							   $Date2 = date('Y-m-d', strtotime($Date1 . " - 7 day"));
								$arr=$user->search('adminmsg','date','>',$Date2,'date','<',$Date1);
								if(count($arr)>0){
								   foreach($arr as $ar){
									   $subject=$ar->subject;
									   $id=$ar->userid;
									   $name=((new User($id))->data()->firstname)." ".((new User($id))->data()->lastname);
									   echo "<p style='margin:0; padding:0'>You have received message from {$name} about {$subject}.</p> <br>";
								   }
								}
						   }
				else if ($data->group==3) {
					echo "<li><a href='index1.php' onmouseover='headerchange(1);' onmouseout='headerorigin(1);'><img src='images/login/home.png' id='heade'><p id='p1'>Add</p></a></li>
						<li><a href='register.php' onmouseover='headerchange(2);' onmouseout='headerorigin(2);'><img src='images/login/home.png' id='heade'><p id='p2'>Home</p></a></li>
						<li><a href='home.html' onmouseover='headerchange(3);' onmouseout='headerorigin(3);'><img src='images/login/home.png' id='heade'><p id='p3'>Home</p></a></li>
						<li><a href='home.html' onmouseover='headerchange(4);' onmouseout='headerorigin(4);'><img src='images/login/home.png' id='heade'><p id='p1'>Home</p></a></li>";}
				else if ($data->group==4) {
					echo "<li><a href='index1.php' onmouseover='headerchange(1);' onmouseout='headerorigin(1);'><img src='images/login/home.png' id='heade'><p id='p1'>Home</p></a></li>
						<li><a href='regpatient.php' onmouseover='headerchange(2);' onmouseout='headerorigin(2);'><img src='images/login/registration.png' id='heade'><p id='p2'>Add</p></a></li>
						<li><a href='change.php' onmouseover='headerchange(3);' onmouseout='headerorigin(3);'><img src='images/login/chagedate.png' id='heade'><p id='p3'>Change Date</p></a></li>
						<li><a href='patientlist.php' onmouseover='headerchange(4);' onmouseout='headerorigin(4);'><img src='images/login/society.png' id='heade'><p id='p1'>Home</p></a></li>";}
				?>
			 	</div>
			 	</li>
			 </ul>	 
			   
			</div>
			<!-- Ending of Icon bar -->

		</div>
		<!-- Wrapper End of heading -->

	</div>
	<!-- End of header -->
</div>
<!-- End of header section -->


	<!-- Content Section -->
	<div class="content">
		<!-- Start wrapper -->
		<div class="wrapper">

			<!-- Start Left section -->
			<div class="leftfixed">
				<!-- start sidebar left -->
				<div class="sidebarleft">
					<form class="" action="update.php" method="post" enctype="multipart/form-data">
                        <input type="file" name="propic" class="chooseslide1" onchange="loadFile1(event)"
                            title="change profile pic">

                        <p class="slideEdit1">&#9998;</p>
                        <!-- <button type=submit >upload</button> -->
                        <input type="Submit" name="imgsub" class="accept" value="Confirm">
                    </form>
					<img src="images/profile/upload.png"/>
					<p id="sidename"><?= $data->firstname." ".$data->lastname?></p>
					<p id="info1"><?=$data->email ?></p>
					<p id="info1"><?=$data->bday ?></p>
					<p id="info1"><?=$data->phone1 ?></p>
					<!-- <p id="country"><?=$data->address ?></p> -->
					<p id="info1"><?=$data->joined ?></p>
					<a href="updatestaff.php" id="edit">Edit Info</a>
					<hr>
					<!-- <p id="nosociety">31</p> -->
					<p id="pwd"><a href="changepassword.php">Change Password</a></p>
					<p id="logout"><a href="logout.php">Log Out</a></p>
				</div>
				<!-- End of sidebar left -->
			</div>