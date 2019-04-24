<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `exams` WHERE CONCAT(`ssn`,`course_id`, `marks`,`grades`,`dnumber`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `exams`";
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
        <title>EXAM DATA SEARCH</title>
        <style>
            table,tr,th,td
            {
                border: 1px solid black;
            }
        </style>
    </head>
    <body>
	<a href="main.html">Home</a> 

        
        <form action="search_exam.php" method="post">
            <input type="text" name="valueToSearch" placeholder="Value To Search"><br><br>
            <input type="submit" name="search" value="SEARCH"><br><br>
            
            <table>
                <tr>
                    <th>SSN</th>
                    <th>Course_id</th>
                    <th>Marks</th>
					<th>Grades</th>
					<th>Dnumber</th>
                </tr>

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['ssn'];?></td>
                    <td><?php echo $row['course_id'];?></td>
                    <td><?php echo $row['marks'];?></td>
					<td><?php echo $row['grades'];?></td>
					<td><?php echo $row['dnumber'];?></td>
                </tr>
                <?php endwhile;?>
            </table>
        </form>
        <br><br>
	<a href="Exam.html">back</a>
    </body>
</html>
