<!-- 

There are 10 questions, Q3 to Q12.
 -->

<html>

<head>


</head>

<body>

<?php  
	   /*
	    * Take user inputs from html form: name, std, email, q1, q2, q3
	    */
	   //Q3. Take value of name from html form using post method.
	   //Answer here
	   $name = $_POST['name'];
	   //Q4. Take value of std from html form using post method.
	   //Answer here
	   $std = $_POST['std'];
	   //Q5. Take value of email from html form using post method.
	   //Answer here
       $email = $_POST['email'];
      
	   /*Q6. Check conditions whether radio button for 'q1' is checked or not.
	    * if the radio button is checked, take value of q1 from html form using post method.
	   */    
	   if(isset($_POST['q1']))
	       /* Answer here */
           $q1 = $_POST['q1'];
           
	   
	   /*Q7. Check conditions whether radio button for 'q2' is checked or not.
	      * if the radio button is checked, take value of q2 from html form using post method.
	    */   
	  if(isset($_POST['q2']))
	      /* Answer here */ 
          $q2 = $_POST['q2'];
	   
	   //Q8. Take value of q3 from html form using post method.
	   /* Answer here */ 
	   $q3 = $_POST['q3'];
	   
	   /*Q9. Check conditions whether all user inputs are empty or not.
	    * if all user inputs are empty, exit the page.
	    * otherwise, continue the page.
	    */ 
	  if(empty($name) && empty($std) && empty($email) && empty($q1) && empty($q2) && empty($q3))
           exit;
	   
           
       else{
           
           /*
            * Q10. open the file 'StudentAnswer.txt' for write only.
            * The existing data in file is preserved. File pointer starts at the end of the file. 
            * Choose one of the open file method : 'r', 'w' or 'a'. 
            */
            /* Answer here */ 
           $file = fopen("StudentAnswer.txt","a");
       
           /*Q11. Check conditions whether name is not empty or not.
            * if name is not empty, write the file with name + \t.
            * otherwise,  write the file with ??? + \t .
            * you can refer to the following codes.
            */
       
           if(!empty($name))
               fwrite($file, "$name \t"); 
           else
                fwrite($file, "--- \t");
           
           if(!empty($std))
               fwrite($file, "$std \t");
            else
                fwrite($file, "??? \t");
           
           if(!empty($email))
               fwrite($file, "$email \t");
          else
              fwrite($file, "??? \t");
               
           if(!empty($q1))
               fwrite($file, "$q1 \t");
           else 
               fwrite($file, "??? \t");
           
           if(!empty($q2))
               fwrite($file, "$q2 \t");
           else
               fwrite($file, "??? \t");
           
           if(!empty($q3))
               fwrite($file, "$q3\n");
           else
               fwrite($file, "???\n");

         
           //Q12. close the file   
           /* Answer here */ 
           fclose($file);
           
           include "filehandle.php";
           
       }
           
	?>

</body>

</html>