<?php require 'header1.php';?>
	<div id="leftside" ></div>
	<div id ="content">  
		<div class="wrapper"><!--Wrapper-->
			<form class="form" method="get" id="form_data" action="comfirm.html" >
				<div class="header">
					<p>Fill your information</p>
				</div>
				<div class="description">
					<p>Please complete this form and send to us Please complete this form and send to us</p>
				</div>
				<div class="group-control">
					<label>Name</label>
					<input name="name" type="text" class="control"  id="name" required>
				</div>
				<div class="group-control">
					<label>Nick Name</label>
					<input name="nickname" type="text" class="control" id="nickname" required>
				</div>
				<div class="group-control">
					<label>VIP Membership No</label>
					<input name="vipno" type="text" class="control" id="vipno">
				</div>
				<div class="group-control">
					<label>E-Mail</label>
					<input type="email" class="control" id="email" required>
				</div>
				<div class="group-control">
					<label>E-Mail confirm</label>
					<input type="email" class="control" id="conemail" required>
				</div>
				<div class="group-control">
					<label>Age</label>
					<input type="text" class="control" id="age" required>
				</div>
				<div class="group-control">
					<label>Location</label>
					<select name="locat" class="control" id="locat" required>
						<option value="value1">Value1</option>
						<option value="value2">Value2</option>
						<option value="value3">Value3</option>
						<option value="value4">Value4</option>
						<option value="value5">Value5</option>
					</select>
				</div>
				<div class="group-control">
					<label>Golf History</label>
					<input name="golfhistory" type="text" class="control" id="golfhistory">
				</div>
				<div class="group-control">
					<label>SEX</label>
					<label> Male <input name="avgScore" type="radio" class="checkbox" id="avgScore"></label>
					<label>Female<input name="avgScore" type="radio" class="checkbox" id="avgScore"></label>
					
				</div>
				<div class="group-control">
					<label>Weight(kg)</label>
					<input name="Weight" type="text" class="control" id="Weight">
				</div>
				<div class="group-control">
					
					<label>Personality </label>
					<label>Single <input name="avgScore" type="checkbox" class="checkbox" id="avgScore"></label>
					<label>Married <input name="avgScore" type="checkbox" class="checkbox" id="avgScore"></label>
				</div>
				<div class="group-control">
					<label>Best Score</label>
					<input name="bestscore" type="text" class="control" id="bestscore" required>
				</div>
				<div class="group-control">
					<label>Club Name</label>
					<textarea name="Clubname" class="control" id="Clubname" required></textarea>
				</div>
				<div class="group-control">
					<label>Episode</label>
					<textarea name="Episode" class="control" id="Episode" required></textarea>
				</div>
				<div class="group-control">
					<label>Attachment</label>
					<input type="file" class="control" id="Attachment" required>
				</div>
				<center>
					<div class="btn">
					<input type="submit" value="Send" class="btn-button" id="submitform" >
					<input type="button" value="Cancel" class="btn-button">
				</div>
				</center>
				
			</form>
		</div>
		</div>
	</body>

</html>