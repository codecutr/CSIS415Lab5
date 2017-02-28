<html><body>
<h1>Lab 5</h1>
<!-- Display your form's new input. -->
<?php
    $first = $_GET["first"];
    $last = $_GET["last"];
    $animal = $_GET["animal"];
    echo "<p>Hello $first $last!</p>
        <p> Your favorite animal is: $animal </p>
    "; 
?>
</body>
</html>