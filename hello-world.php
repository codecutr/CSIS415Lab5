<html><body>
<h1>Lab 5</h1>
<!-- Display your form's new input. -->
<?php
    $first = $_GET["first"];
    $last = $_GET["last"];
    $age =  $_GET["age"];
    echo "<p>Hello $first $last!</p>"; 
    echo "<p>my age is $age</p>"
?>
</body>
</html>