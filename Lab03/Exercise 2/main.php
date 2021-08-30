<!-- 
There are two questions in main.php, in line 18 and line 38.

 -->

<!DOCTYPE html>
<html>

<head>
	<title>CSS326 Database Programming Laboratory</title>
	<link rel="stylesheet" href="default.css">
	
</head>

	<body style="background-color: rgb(114, 112, 116);">
	
        <div class="headframe">
        <!-- Q1. Include the code contained in header.php file within this file.-->
			<!--  using include "filename" or require "filename"-->
			<!--  Answer here!!!-->

			<?php include 'header.php'; ?>
		
		</div>
       
        
         <div class="mainframe">
         <ul>
			<li><a href="questionForm.html" target="showhere">Question Form </a>
			<li><a href="filehandle.php" target="showhere"> Access Answers</a>
         </ul>
          
         <iframe src="questionForm.html" name="showhere" class="frameresult" >
         
         </iframe>
        
        </div>
        
        <div class="footerframe" >
        
		<!-- Q2. Include the code contained in footer.php file within this file.-->
		<!--  using include "filename" or require "filename"-->
		<!--  Answer here!!!-->
		<?php include 'footer.php'; ?>
		
       </div>
		
	
	</body>

</html>