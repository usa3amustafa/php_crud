<?php include('./db.php') ?>
<?php 
    if (isset($_POST['submit'])) {
            $student_id = $_POST['s_id'];
            $student_name = $_POST['student_name'];
            $student_rollno = $_POST['student_rollno'];
            $student_class = $_POST['student_class'];

            $query = "UPDATE students SET s_name = '{$student_name}' , s_rollnumber = '{$student_rollno}' , s_class = '{$student_class}' WHERE id = {$student_id}";
            $result = mysqli_query($conn , $query);

            if (!$result) {
                echo "Query Failed " . mysqli_error($conn);
            }else{
                header("Location: http://localhost/php_crud/read.php");
            }
        }
?>