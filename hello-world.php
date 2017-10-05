<html><body>
<h1>Lab 5</h1>
<!-- Display your form's new input. -->
<?php
    $first = $_GET["first"];
    $last = $_GET["last"];
    $nick = $_GET["nick"];

    echo "<p>Hello $first $last! aka $nick</p>"; 
?>
</body>
</html>