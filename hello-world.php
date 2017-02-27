<html><body>
<h1>Lab 5</h1>
<!-- Display your form's new input. -->
<?php
    $first = $_GET["first"];
    $last = $_GET["last"];
    $email = $_GET["email"];
    echo "<p>Hello $first $last!</p>";
    echo "<p>Email address: $email</p>";
?>
</body>
</html>