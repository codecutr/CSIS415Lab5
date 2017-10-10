<html><body>
<h1>Lab 5</h1>
<!-- Display your form's new input. -->
<?php
    $first = $_GET["first"];
    $last = $_GET["last"];
    $colour = $_GET["color"];

    echo "<p>Hello $first $last $colour!</p>"; 
?>
</body>
</html>