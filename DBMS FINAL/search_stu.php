<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `register` WHERE CONCAT(`name`, `ssn`, `gender`, `date_of_birth`,`email`,`phone`,`landline`,`dnumber`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `register`";
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
        <title>STUDENT DATA SEARCH</title>
        <style>
            table,tr,th,td
            {
                border: 1px solid black;
            }
        </style>
    </head>
    <body>
	<a href="main.html">Home</a> 
        
        <form action="search_stu.php" method="post">
            <input type="text" name="valueToSearch" placeholder="Value To Search"><br><br>
            <input type="submit" name="search" value="SEARCH"><br><br>
            
            <table>
                <tr>
                    <th>Name</th>
                    <th>SSN</th>
                    <th>Gender</th>
                    <th>Date_of_birth</th>
					<th>Email</th>
					<th>Phone</th>
					<th>Landline</th>
					<th>Dnumber</th>
                </tr>

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['ssn'];?></td>
                    <td><?php echo $row['gender'];?></td>
                    <td><?php echo $row['date_of_birth'];?></td>
					<td><?php echo $row['email'];?></td>
					<td><?php echo $row['phone'];?></td>
					<td><?php echo $row['landline'];?></td>
					<td><?php echo $row['dnumber'];?></td>
                </tr>
                <?php endwhile;?>
            </table>
        </form>
        <br><br>
	<a href="student.html">back</a>
    </body>
</html>
