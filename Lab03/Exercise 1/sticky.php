<!DOCTYPE html>
<!-- There are 11 questions: Q1 to Q11. -->

<html>
<head>
<link rel="stylesheet" type="text/css" href="sticky.css">
</head>

<body>
    <!-- 
	Q1. use PHP_SELF in attribute 'action' to execute the php codes in the current script.
	Q2. use GET method.
	 -->
	 
	<form action='sticky.php' method='GET'>
			
			<!-- Q3. create a textbox having name as title, id as title and siz as 30.   -->
		<b>Title</b>:  <input type = "text" name = "title" id = "title" size = "30">  <br><br>
		
			<!--  Q4. create a textarea having name as note, cols as 30 and rows as 5. -->
		<b>Note</b>:  <textarea name = "note" cols="30" rows = "5"></textarea>  <br><br>
			<!--  Q5. create a submit button having value as Get! and name as submit -->
		 <input type = "submit" value = "Get!" name = "submit"> 
	</form>
	
	
	
	<hr>
	
	<div class="get">
		<div class="title">
		<?php
		
		if (isset($_GET["submit"]))// only execute after submit
		{
		    //Q6. Print value of title passing by Get method. You can refer to line 56.
			echo $_GET["title"]; 
		    
		    
	   //Q7. Open file 'Sticky_note.txt' for write only but the input texts will be extended if the file has some texts. 
		  // Choose open method: 'w' or 'r' or 'a'.
		//Answer here
		$file = fopen("sticky_note.txt","w");

		fwrite($file, $_GET['title']."\n"); // write the title in the file
		}
		?>
		</div>
		
		
		<div class="note">
		<?php
		if (isset($_GET["submit"])) // only execute after submit
		{
		    echo $_GET["note"];	// Print value of  note
		    
		    //Q8. write the value of note in the text file having new line in the end. eg. $_GET['note']."\n"
		    //you can refer to line 46.
		    //Answer here
			fwrite($file,$_GET['note']."\n");

			
			//Q9. close the file.s
			//Answer here
			fclose($file);
		}
		?>
		</div>
		
		<div class="notefoot">
		<?php
		if (isset($_GET["submit"]))
		{
			$count = 0;
			
			//Q10. Open the file 'Sticky_note.txt' for read only.
			//Answer here
			$file = fopen("Sticky_note.txt","r");
		//Q11. loop until end of file.	
		//Answer here
		if($file)
		{ while(!feof($file)){
			$line = fgets($file);
			$count++; 
		} 
			fclose($file);
			echo ($count-1)/2, " notes have been made";
		}
		}
		?>
		</div>
	</div>
</body>

</html>