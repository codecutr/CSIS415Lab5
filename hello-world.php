<html><body>
<h1>Lab 5</h1>
<!-- Display your form's new input. -->
<?php
    $first = $_GET["first"];
    $last = $_GET["last"];
    $fork = $_GET["fork"];

    echo "<p>Hello $first $last!</p>"; 
    echo "<p>Want to fork? $fork </p";
?>
</body>
</html>