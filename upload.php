<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["resume"])) {
    $targetDir = "upload.php";
    $targetFile = $targetDir . basename($_FILES["resume"]["name"]);
    
    if (move_uploaded_file($_FILES["resume"]["tmp_name"], $targetFile)) {
        echo "File uploaded successfully! <a href='$targetFile' target='_blank'>View Resume</a>";
    } else {
        echo "Error uploading file.";
    }
}
?>