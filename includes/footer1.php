
<div class="rightfixed">
				<div class="suggesfixed"><p id="suggestion">Suggestion</p><div>
				<div class="sidebarright" style="height:calc(100% - 360px); overflow:scroll">
					<?php
					$user=new User();
					$data=$user->data();
					if ($data->group==3) {
						$arr=$user->search('appoinments','next','=',$date,'physio','=',$data->id);
						foreach($arr as $ar){
							$nm=(new User($ar->patient))->data()->firstname;
					}
					$arr=$user->search('users','email','=','dakshitha.sur@gmail.com','phone1','=','770167004');
        				foreach($arr as $ar){
							$name=$ar->firstname;
						echo "<div class='rightcontent'>";
						echo '<img src="../images/profile/other_profile.png"/>';
						echo "<p class='name'> {$name} </p>";
						echo'<a href="#" id="connect1" onclick="changelogo("connect1");">&#x271A; Connect</a>';
						echo'</div>';
						}
						?>
					<!-- suggested user -->
					<!-- <div class="rightcontent">
						<img src="../images/profile/other_profile.png"/>
						<p class="name">User Name</p>
						<a href="#" id="connect1" onclick="changelogo('connect1');">&#x271A; Connect</a>

					</div>

				</div>
				<!-- End of right fixed -->

			</div>
			<!-- End of right section suggestion user -->

			<!-- Start of about homaj -->
			<div class="rightfixed">
				
				<div class="sidebarright" style="width: 280px;padding: 4px;margin-bottom:0px;bottom:10px; height: 150px;">
					<hr style="top: -25px;">
				<div class="foot">

					<p><h9>TEAM DING SOLUTIONS</h9><br><br>
						Computer Science & Engineering<br>
						University Of Moratuwa<br>
						Sri Lanka
					</p>
				</div>
				
			</div>
			<!-- End of about homaj -->

			<!-- message bar at the bottom -->
			<!-- <div class="message" id="msg1">
				<button id="msg2" onclick="showhide()">Messaging</button>
				<p> No New Messages.</p>
			</div> -->
			<!-- End of message bar at the bottom -->

		</div>
		<!-- End of wrapper -->

	</div>


</body>
</html>