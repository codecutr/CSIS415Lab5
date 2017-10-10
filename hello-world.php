<html><body>
<h1>Lab 5</h1>
<!-- Display your form's new input. -->
<?php
    $first = $_GET["first"];
    $last = $_GET["last"];
    $nickname = $_GET["nickname"];
    echo "<p>Hello $first $nickname $last!</p>"; 
?>
</body>
</html>