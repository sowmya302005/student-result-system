<?php
include 'db.php';
$sql = "SELECT * FROM students";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Results</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2 class="mb-4">Student Results</h2>
    <?php if ($result->num_rows > 0) { ?>
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Roll No</th>
                <th>Class</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            <?php while($row = $result->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['roll_no']; ?></td>
                    <td><?php echo $row['class']; ?></td>
                    <td>
                        <a href='update_student.php?id=<?php echo $row['id']; ?>' class="btn btn-sm btn-warning">Edit</a>
                        <a href='delete_student.php?id=<?php echo $row['id']; ?>' class="btn btn-sm btn-danger" 
                           onclick="return confirm('Are you sure?')">Delete</a>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    <?php } else { ?>
        <div class="alert alert-info">No students found!</div>
    <?php } ?>
    <a href="index.php" class="btn btn-secondary mt-3">Go Back</a>
</div>
</body>
</html>
