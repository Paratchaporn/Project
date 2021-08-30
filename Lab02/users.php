<html>
<!-- Q8. link to the style sheet "default.css"-->
<link rel="stylesheet" href="default.css">

<body>

<!-- Q9. Set classname of div as pageframe !-->
<div class = "pageframe">



<!-- Q10. php file begin-->
<?php
	//<!--  create a variable username and assign value from textbox 'username' -->
	$username = $_POST["username"];
	
	//<!--  Q11. create a variable passwd and assign value from textbox 'passwd' -->
	$pass = $_POST["passwd"];

	//<!--  Q12. create a variable cpasswd and assign value from textbox 'cpasswd' -->
	$pass1 = $_POST["cpasswd"];

	//<!-- Q13. Check the conditions that username is Admin and passwd is 1234 and  cpasswd is 1234
	if($username == "Admin"  && $pass== "1234" && $pass1== "1234")
		{
			$_SESSION["username"] = $username;    
		}
	else
		{
			echo "<h1>", "You do not have access to this page!" ,"</h1>";
			
			//Q14. Use for loop to print error text 30 times 
			for ($x = 30; $x >= 0; $x--) {
				//---Q15. print an error text in new line saying that "You will be given the redirectecting button after" (30-loop_count) "seconds" ---
				echo "You will have $x seconds to get the redirect button <br>";
				}
			     
			
			
			$txt="history.go(-1);";
			
			//-- Q16. Create a button 'Back', in which assign value of txt to attribute onclick as txt using onclick='$txt'---
			echo "<input type='button' value='Back' onclick=$txt>";

			exit;
		} //-->
//Q17. php file end
?>

<!-- Q18. Set h1 having Inline CSS that changes the font as Arial, size of font as 200%, make the text appear in center !-->
<h1 style="font-size: 200% ; font-family: Arial; text-align: center;"> Welcome 
<?php echo $_POST["title"]," ",$_POST["firstname"], " ",$_POST["lastname"], "!!!" ; ?><br> </h1>

<table>

<tr>
<td>

<!-- Q19. add the image "avatar.png", height to 240 pixels, alternate text as "Avatar"-->
<img src="avatar.png" height="240" alt="Avatar"> <img/>


</td>

<td>
<!-- Q20. Set Inline CSS of h3 that changes the font to Arial,size of font to 170%--> 
<h3 style="font-size: 170% ; font-family: Arial;"> This is your profile </h3>

<!-- Q21. Set Inline CSS of p that changes the font to Arial-->
<p style="font-family: Arial;">


<?php 
	echo "Name:", " " ,$_POST["title"]," ",$_POST["firstname"], " ",$_POST["lastname"],"<br>";
	//-- Q22. Print usergroup of the person as the format "User Group: usergroup "-- 
	echo "User Group:", " " ,$_POST["usergroup"],"<br>";
	//-- Q23. Print email of the person as the format "Email address: Email"-- 
	echo "Email address:", " " ,$_POST["email"],"<br>";
	//-- Q24. Check the gender uing condition 
	        //Q24. 1 if title is Mr. then the gender is male
	       //Q24.2 if title is Ms.  or Mrs. then the gender is female
	       // Q24.3 Print gener of the person as the format "Gender: gender"-- 
	if ($_POST["title"] == "Mr."){
		$gender = "Male";
	}
	else{
		$gender = "Female";
	}
	echo "Gender: $gender <br>";
	
	
	
	
	
	//-- Q25. Assign the value of birth date (that is named as birth) into variable bday  --
	//-- set default time zone--
	date_default_timezone_set("Asia/Bangkok");
	
	$bday = $_POST["birthday"];
	//$today = new Datetime(date('y-m-d'));
	$diff = abs(strtotime("now") - strtotime($bday));
	
	//-- Q26. Print age of the person (in year) as "Age in years: age" using $diff->y --
	$years = floor($diff / (365*60*60*24));
	echo "Age in year: $years <br>";
	
	
	
	//-- Q27. Print the login time as " Login time (local): time on date"-- 
	   //-- for time, use date("h:i:sa") ---
	   //-- for date, use date("Y/ m/ d")
	echo " Login time (local): ".date("h:i:sa")." on ".date("Y/ m/ d");
	
	
?>
</p> 
</td>
</tr>

</table>

<!-- Q28. Set p to change font as Arial, bold and font size  150%-->
<p style="font-weight: bold; font-size:150% ; font-family:Arial;"> Welcome to the ITS 351/CSS 326 system <br></p>


<p style="font-family: Arial">
Whether you are an experienced programmer or not, this website is intended for everyone who wishes to learn Database programming. 
There is no need to download anything - just click on the link you wish to begin from, and follow the instructions.  <br> </p>

<!-- Remeber how you formatted the links in previous lab-->

<ul id="menu">
	<li><a href="https://www.w3schools.com/html/default.asp" target="_blank">HTML Tutorial from  W3School </a></li>
	<li><a href="https://www.w3schools.com/css/default.asp" target="_blank">CSS Tutorial from  W3School </a></li>
	<li><a href="https://www.w3schools.com/php/default.asp" target="_blank">PHP Tutorial from  W3School </a></li>
	<li><a href="https://www.w3schools.com/sql/default.asp" target="_blank"> SQL Tutorial from  W3School </a></li>
	<li><a href="https://www.learn-html.org" target="_blank"> Getting Start HTML & CSS from learn-php.org </a></li>
	<li><a href="https://www.learn-php.org" target="_blank"> PHP Introduction from learn-php.org</a></li>
	<li><a href="https://www.learnsqlonline.org" target="_blank"> SQL Tutorial from learn-php.org </a></li>
	
</ul>

<!-- Q29. Set p to change font as Arial, bold and font size 120% and align center -->
<p style="font-weight: bold; font-size:120% ; font-family:Arial; text-align: center;"> Good Luck!</p>

<div class="center">
<button onclick="history.go(-1);"> Back </button>
</div>

</div>

</body>
</html>