<!DOCTYPE html>
<html>
<head>
    <title>Registration Successful</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<h2 class="title">Application Submitted Successfully</h2>

<div class="output-box">

    <?php
        echo "<p><strong>Name:</strong> " . $_POST['name'] . "</p>";
        echo "<p><strong>Email:</strong> " . $_POST['email'] . "</p>";
        echo "<p><strong>Phone:</strong> " . $_POST['phone'] . "</p>";
        echo "<p><strong>Gender:</strong> " . $_POST['gender'] . "</p>";
        echo "<p><strong>Course:</strong> " . $_POST['course'] . "</p>";
    ?>

</div>

<a href="form.html" class="back-btn">Fill Again</a>

</body>
</html>