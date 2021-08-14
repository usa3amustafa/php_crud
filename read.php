<?php include('./header.php') ?>
<?php include('./db.php') ?>

<?php 

    $query = "SELECT * from students";
    $result = mysqli_query($conn , $query);

    if (!$result) {
       echo "Query Failed" ; 
    }
    else{
        $students = mysqli_fetch_all($result , MYSQLI_ASSOC);
?>

<div class="container">
    <table class="table">
    <thead>
        <tr>
        <th scope="col">ID</th>
        <th scope="col">Student Name</th>
        <th scope="col">Student Roll Number</th>
        <th scope="col">Student Class</th>
        <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($students as $student)
            { ?>
        <tr>
            <th scope="row"><?php echo $student ['id'] ?></th>
            <td><?php echo $student['s_name'] ?></td>
            <td><?php echo $student['s_rollnumber'] ?></td>
            <td><?php echo $student['s_class'] ?></td>
            <td>
                <a href="./update.php?sid=<?php echo $student['id'] ?>"><span class="badge bg-success">Edit</span></a>
                <a href="./delete.php?sid=<?php echo $student['id'] ?>"><span class="badge bg-danger">Delete</span></a>
            </td>
        </tr>
        <?php } ?>
    </tbody>
    </table>
    <?php 
            
        } 
    ?>
</div>


</body>
</html>