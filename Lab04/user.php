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
        <div id="div_content" class="usergroup">
            <!--%%%%% Main block %%%%-->

            <h2>User Profile</h2>
            <table>
                <col width="15%">
                <col width="30%">
                <col width="30%">
                <col width="20%">
                <col width="5%">

                <tr>
                    <th>Title</th> 
                    <th>Name</th>
                    <th>Email</th>
                    <th>User Group</th>
                    <th>Disabled</th>
                    <th>Edit</th>
                    <th>Del</th>
                </tr>

                <?php 
                // Q11. If the user doesn't click the submit button, 
                //the rest of the codes is unnecessary to be excuted and exit the page.
                //-----Answer Here------
                if(isset($_POST["submit"])){
                    if(empty($_POST["firstname"]&&["lastname"]&&["email"]&&["username"]&&["passwd"]&&["cpasswd"])){
                        exit;
                }
            }
            else {
                exit;
            }
                ?>


                <!--  Q12. If the user clicks the submit button, show the results in each column of the table. -->
                <?php 
                    if(isset($_POST["Submit"]))


                ?>
                <!--  Q12.1 show the user's title -->
                <td><?php echo $_POST["title"]?></td>
                <!--  Q12.2 show the user's first name  and last name-->
                <td><?php echo $_POST["firstname"]," ", $_POST["lastname"]?></td>
                <!--  Q12.3 show the user's email -->
                <td><?php echo $_POST["email"]?></td>
                <!--  Q12.4 show the user's usergroup -->
                <td><?php echo $_POST["usergroup"]?></td>
                <!--  Q12.5 If the user checked disable in the checkbox, then show the result as 'Yes'.
                            Otherwise, show the result as 'No'

                  -->
                 <td><?php echo $_POST["disabled"]?></td>
                <!--  Q12.6 show the image "Modify.png" from images folder having width : 24 and height : 24 -->
                <td><?php echo "<img src='images/Modify.png' height=24 width=24>";?></td>
                <!--  Q12.7 show the image "Delete.png" from images folder having width : 24 and height : 24 -->
                <td><?php echo "<img src='images/Delete.png' height=24 width=24>";?></td>

            </table>

        </div> <!-- end div_content -->

    </div> <!-- end div_main -->

    <div id="div_footer">

    </div>

</div>
</body>
</html>