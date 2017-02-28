<html><body>
<h1>Lab 5</h1>
<!-- Display your form's new input. -->
<?php
    $first = $_GET["first"];
    $last = $_GET["last"];
    $password = $_GET["password"];

    echo "<p>Hello $first $last $password!</p>"; 
?>
</body>
</html>