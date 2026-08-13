<?php
include_once '../include/config.php';
// Check if ID is set
if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    
    // SQL statement to delete row
    $sql = "DELETE FROM calidonb_tb WHERE cbid = $id";
    
    // Execute the query
    if (mysqli_query($conn, $sql)) {
        // Redirect to success page
        header("Location: brandclist.php");
    } else {
        // Handle error
        echo "Error deleting record: " . mysqli_error($conn);
    }
} else {
    // Handle the case where id is not set
    echo "script>alert('No ID provided to delete.)</script>";
    echo '<script>window.location.href="brandclist.php"</script>';

}

// Close the database connection
mysqli_close($conn);