<?php
include 'db.php';
?>

<h1>Welcome to Student Result System</h1>
<p><a href="add_student.php">Add Student</a></p>
<p><a href="view_results.php">View Results</a></p>
<?php
include 'db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Result System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1 class="mb-4 text-center">Student Result System</h1>
    <div class="d-flex justify-content-center gap-3">
        <a href="add_student.php" class="btn btn-success">Add Student</a>
        <a href="view_results.php" class="btn btn-primary">View Results</a>
    </div>
</div>
</body>
</html>
