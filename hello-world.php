<html><body>
<h1>Lab 5</h1>
<!-- Display your form's new input. -->
<?php
    $first = $_GET["first"];
    $last = $_GET["last"];
    $shoe = $_GET["shoe"];
    echo "<p>Hello $first $last!</p>"; 
    echo "<p>Nice Feet! your shoe size is $shoe!</p>"
?>
</body>
</html>