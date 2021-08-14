<?php include('./header.php') ?>
<?php include('./db.php') ?>
<?php 
    if (isset($_POST['submit'])) {
        $student_name = $_POST['student_name'];
        $student_rollno = $_POST['student_rollno'];
        $student_class = $_POST['student_class'];

        $query = "INSERT into students SET s_name = '$student_name' , s_rollnumber = '$student_rollno' , s_class = '$student_class'";
        $result = mysqli_query($conn , $query);

        if (!$result) {
            die('Query unsuccesful');
        }
    }
?>

<div class="container">
    <form action="./create.php" method="POST">
        <div class="mb-3">
            <label for="student_name" class="form-label">Student Name</label>
            <input type="text" class="form-control w-50" id="student_name" name="student_name" placeholder="Enter Student Name">
        </div>
        <div class="mb-3">
            <label for="student_rollno" class="form-label">Student Roll Number</label>
            <input type="text" class="form-control w-50" id="student_rollno" name="student_rollno" placeholder="Enter Student Roll Number">
        </div><div class="mb-3">
            <label for="student_class" class="form-label">Student Class</label>
            <input type="text" class="form-control w-50" id="student_class" name="student_class" placeholder="Enter Student Class">
        </div>
    <button type="submit" class="btn btn-primary" name="submit">Register Student</button>
</form>
</div>

</body>
</html>