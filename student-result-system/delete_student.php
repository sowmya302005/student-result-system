<?php
include 'db.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "DELETE FROM students WHERE id=$id";
    if($conn->query($sql) === TRUE){
        echo "Student deleted successfully!";
    } else {
        echo "Error: ".$conn->error;
    }
}

echo "<p><a href='view_results.php'>Go Back</a></p>";
?>
<?php
include 'db.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "DELETE FROM students WHERE id=$id";
    $conn->query($sql);
}

header("Location: view_results.php");
exit;
?>
