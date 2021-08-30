<!-- 
There are five questions: Q13 to Q17.
 -->
<html>
<head>

<link rel="stylesheet" href="default.css">
</head>
<body>

<!--Q13. Set Inline CSS in table that table borders should collapse into a single border using border-collapse -->
<table align = center style = "border-collapse: collapse;">

<tr class='trStyle'>
<th class='thStyle'>No.</th>
<th class='thStyle'>Name</th>
<th class='thStyle'>Student ID</th>
<th class='thStyle'>Email</th>
<th class='thStyle'>Q1</th>
<th class='thStyle'>Q2</th>
<th class='thStyle'>Q3</th>
</tr>

<?php 

//Q14. Open the file 'StudentAnswer.txt' for read only
// Answer here.
$file = fopen("StudentAnswer.txt","r");
$i=1;

//Q15. loop until end of file
//Answer here

 while(!feof($file)){
   
    //Q16. Take each line of file and assign into the variable $ans.
    //Answer here
    $ans = fgets($file);

    $ans=explode("\t",$ans); // split  string '$ans' with '\t', then $ans becomes array
 
    if(count($ans) == 1) 
        exit;
    
    echo "<tr class='trStyle' ><td class='trStyle'> $i </td>";
    
    //Q17. loop array $ans
    //Answer here
    foreach($ans as $val)
    {
        echo "<td class='tdStyle'>",  $val, "</td>"; // print each value of array ans in a cell of table.
    }
    echo "</tr>";
    $i++;


 }

fclose($file);


?>
</table>
</body>
</html>