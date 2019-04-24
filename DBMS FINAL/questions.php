<?php

if(isset($_POST['search']))
{
    
    // search in all table columns
    // using concat mysql function
    $query = "select ssn,date_of_birth,dnumber from register where name='monish';"
    $search_result = filterTable($query);
    
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "student");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>ATTENDENCE DATA SEARCH</title>
        <style>
            table,tr,th,td
            {
                border: 1px solid black;
            }
        </style>
    </head>
    <body>
	<a href="main.html">Home</a> 
        
        <form action="search_atten.php" method="post">
            <input type="text" name="valueToSearch" placeholder="Value To Search"><br><br>
            <input type="submit" name="search" value="SEARCH"><br><br>
            
            <table>
                <tr>
                    <th>Dnumber</th>
                    <th>SSN</th>
                    <th>date_of_birth</th>
                </tr>

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['dnumber'];?></td>
                    <td><?php echo $row['ssn'];?></td>
                    <td><?php echo $row['Date_of_birth'];?></td>			
                </tr>
                <?php endwhile;?>
            </table>
        </form>
		<br><br>
	<a href="student.html">back</a>
        
    </body>
</html>
