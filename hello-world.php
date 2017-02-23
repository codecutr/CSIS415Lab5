<html><body>
<h1>Lab 5</h1>
<!-- Display your form's new input. -->
<?php
    $first = $_GET["first"];
    $last = $_GET["last"];
    $dob = $_GET["dob"];

    echo "<p>Hello $first $last!</p>";
    echo "<p>Your birthday is $dob<p>";
?>
</body>
</html>