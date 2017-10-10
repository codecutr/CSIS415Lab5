<html><body>
<h1>Lab 5</h1>
<!-- Display your form's new input. -->
<?php
    $first = $_GET["first"];
    $last = $_GET["last"];
    $lit = $_GET["lit"]; 
    echo "<p>Hello $first $last!</p>";
    echo "<h7>YOU'VE ACHIEVED A LIT LEVEL OF $lit</h7>";
?>
</body>
</html>
