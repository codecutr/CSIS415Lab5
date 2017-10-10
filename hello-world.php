<html><body>
<h1>Lab 5</h1>
<!-- Display your form's new input. -->
<?php
    $first = $_GET["first"];
    $last = $_GET["last"];
    $fidgetspinner = $_GET["fidgetspinner"];

    echo "<p>Hello $first $last! Your favorite type of Fidget Spinner is $fidgetspinner.</p>"; 
?>
</body>
</html>