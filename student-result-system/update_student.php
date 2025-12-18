<?php
include 'db.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "SELECT * FROM students WHERE id=$id";
    $result = $conn->query($sql);
    $student = $result->fetch_assoc();
}

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $roll_no = $_POST['roll_no'];
    $class = $_POST['class'];

    $sql = "UPDATE students SET name='$name', roll_no='$roll_no', class='$class' WHERE id=$id";
    if($conn->query($sql) === TRUE){
        $msg = "Student updated successfully!";
    } else {
        $msg = "Error: ".$conn->error;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2 class="mb-4">Update Student</h2>

    <?php if(isset($msg)) { ?>
        <div class="alert alert-info"><?php echo $msg; ?></div>
    <?php } ?>

    <form method="post">
        <div class="mb-3">
            <label>Name:</label>
            <input type="text" name="name" value="<?php echo $student['name']; ?>" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Roll No:</label>
            <input type="text" name="roll_no" value="<?php echo $student['roll_no']; ?>" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Class:</label>
            <input type="text" name="class" value="<?php echo $student['class']; ?>" class="form-control" required>
        </div>
        <input type="submit" name="submit" value="Update Student" class="btn btn-warning">
        <a href="view_results.php" class="btn btn-secondary">Go Back</a>
    </form>
</div>
</body>
</html>
