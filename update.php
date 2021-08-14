<?php include('./header.php') ?>
<?php include('./db.php') ?>

<?php 

    // if (isset($_GET['sid'])) {
    //     echo "yes id";
    //     echo $_GET['sid'];
    // }else{
    //     echo "no id";
    // }

    $student_id = $_GET['sid'];
    $query = "SELECT * from students WHERE id = {$student_id}";
    $result = mysqli_query($conn , $query);

    if (!$result) {
        echo "query unsuccesful";
    } else{
        $students = mysqli_fetch_all($result , MYSQLI_ASSOC);
        
            // echo "<pre>";
            // print_r($students);
            // echo "<pre>";
?>

<div class="container">
    <form action="./update_data.php" method="POST">
    <?php 
        foreach($students as $student){
     ?>
        <div class="mb-3">
            <label for="student_name" class="form-label">Student Name</label>
            <input type="hidden" name="s_id" value="<?php echo $student['id'] ?>">
            <input type="text" class="form-control w-50" id="student_name" name="student_name" value="<?php echo $student['s_name'] ?>">
        </div>
        <div class="mb-3">
            <label for="student_rollno" class="form-label">Student Roll Number</label>
            <input type="text" class="form-control w-50" id="student_rollno" name="student_rollno" value="<?php echo $student['s_rollnumber'] ?>">
        </div><div class="mb-3">
            <label for="student_class" class="form-label">Student Class</label>
            <input type="text" class="form-control w-50" id="student_class" name="student_class" value="<?php echo $student['s_class'] ?>">
        </div>
    <button type="submit" class="btn btn-primary" name="submit">Update Student</button>
    <?php }
    }
    ?>
</form>
</div>



</body>
</html>