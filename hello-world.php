<html><body>
<h1>Lab 5</h1>
<!-- Display your form's new input. -->
<?php
    $first = $_GET["first"];
    $last = $_GET["last"];
    $residence = $_GET["residence"];

    echo "<p>Hello $first $last from $residence!</p>"; 
?>
</body>
</html>