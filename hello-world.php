<html><body>
<h1>Lab 5</h1>
<!-- Display your form's new input. -->
<?php
    $first = $_GET["first"];
    $last = $_GET["last"];
    $phone = $_GET["phone"];

    echo "<p>Hello $first $last! Your phone Number is $phone</p>"; 
?>
</body>
</html>