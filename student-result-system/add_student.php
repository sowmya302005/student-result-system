<?php
include 'db.php';

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $roll_no = $_POST['roll_no'];
    $class = $_POST['class'];

    $sql = "INSERT INTO students (name, roll_no, class) VALUES ('$name','$roll_no','$class')";
    if($conn->query($sql) === TRUE){
        $msg = "Student added successfully!";
    } else {
        $msg = "Error: ".$conn->error;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2 class="mb-4">Add Student</h2>

    <?php if(isset($msg)) { ?>
        <div class="alert alert-info"><?php echo $msg; ?></div>
    <?php } ?>

    <form method="post">
        <div class="mb-3">
            <label>Name:</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Roll No:</label>
            <input type="text" name="roll_no" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Class:</label>
            <input type="text" name="class" class="form-control" required>
        </div>
        <input type="submit" name="submit" value="Add Student" class="btn btn-success">
        <a href="index.php" class="btn btn-secondary">Go Back</a>
    </form>
</div>
</body>
</html>
