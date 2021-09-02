<!DOCTYPE html>
<html>
<head>
<title>CSS326 Database Programming Laboratory</title>
<link rel="stylesheet" href="default.css">
</head>

<body>

<div id="wrapper"> 
	<div id="div_header">
		CSS326 Registration System 
	</div>
	<div id="div_subhead">
		<ul id="menu">
			<li><a href="user.php">User Profile</a></li>
			<li><a href="add_user.php">Add User</a></li>
			<li><a href="group.php">User Group</a></li>
			<li><a href="add_group.html">Add User Group</a></li>
		</ul>		
	</div>
	<div id="div_main">
		<div id="div_left">
				
		</div>
		<div id="div_content" class="form">
			<!--%%%%% Main block %%%%-->
			<!--Form -->
			

			<!--  Q1. Create a form that like to user.php after clicking the submit button using post method. -->
			<!-- Answer Here -->
			<form action="user.php" method="post"> 
					<h2>User Profile</h2>
					
					
					<label>Title</label>
					<!-- Q2. Create a combo box having three values: Mr. , Mrs. and  Ms.
					 Name the combo box as title and assign value for each option.-->
					 <!-- Answer Here -->
                     <select type="combobox" name="title">
                        <option value="Mr.">Mr.</option>
                        <option value="Mrs.">Mrs.</option>
                        <option value="Ms.">Ms.</option>
                    </select>

					<label>First name</label>
					<!-- Q3. Create a test box for getting first name.
					 Name it as firstname.-->
					 <!-- Answer Here -->
                     <input type="text" name="firstname">

					
					<label>Last name</label>
					<!-- Q4. Create a test box for getting last name.
					 Name it as lastname.-->
					 <!-- Answer Here -->
					<input type="text" name="lastname">


					<label>Gender</label>
					<!-- Q5. Create two radio buttons for Gender.
					 Name them as gender and assign value for each radio button-->
					 <!-- Answer Here -->
					<input type="radio" name="Gender" value="male" checked> Male
                    <input type="radio" name="Gender" value="female">
					Female
					<br>
					
					<label>Email</label>
					<input type="text" name="email">
				
					<h2> Account Profile</h2>
					<label>Username</label>
					<input type="text" name="username">
					
					<label>Password</label>
					<!-- Q6. Create a password text box.
					 Name them as passwd-->
					 <!-- Answer Here -->
                     <input type="password" name="passwd">
					
					
					<label>Confirmed password</label>
					<!-- Q7. Create a password text box.
					 Name them as cpasswd-->
					 <!-- Answer Here -->
                     <input type="password" name="cpasswd">
					
					
					<label>User group</label>
					<!-- Q8. Create a combo box having three values: Instructor , Student and  TA
					 Name the combo box as usergroup and assign value for each option.-->
					 <!-- Answer Here -->
					
                    <select type="combobox" name="usergroup">
                        <option value="Instructor"> Instructor</option>
                        <option value="Student"> Student</option>
                        <option value="TA"> TA</option>
                    </select>
					
					<label>Disabled</label>
					<!-- Q9. Create a check box.
					 Name it as disabled and assign value as Yes .-->
					 <!-- Answer Here -->
                     <input type="hidden" name="disabled" value="No">                     
                     <input type="checkbox" name="disabled" value="Yes">
					<br>

					
					
					<div class="center">
					<!-- Q10. Create a submit button.
					 Name it as submit and assign value as Submit .-->
					 <!-- Answer Here -->
                     <input type="submit" value="Submit" name="submit"><br><br>
							
					</div>
				</form>
		</div> <!-- end div_content -->
		
	</div> <!-- end div_main -->
	
	<div id="div_footer">  
		
	</div>

</div>
</body>
</html>