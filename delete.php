<?php include('./header.php') ?>
<?php include('./db.php') ?>

<?php 
    $student_id = $_GET['sid'];
    $query = "DELETE FROM students WHERE id = {$student_id}";
    $result = mysqli_query($conn , $query);

    if (!$result) {
        echo "Query Failed" . mysqli_error($conn);
    }else{
       header("Location: http://localhost/php_crud/read.php");
    }

?>


</body>
</html>