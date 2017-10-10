<html><body>
<h1>Lab 5</h1>
<!-- Display your form's new input. -->
<?php
    $first = $_GET["first"];
    $last = $_GET["last"];
    $game = $_GET["game"];

    echo "<p>Hello $first $last!  Do you really like $game?  That game sucks!</p>"; 
?>
</body>
</html>