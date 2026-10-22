
<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = trim($_POST["username"] ?? "");

    if ($name === "") {
        exit("Please enter a name.");
    }

    $safeName = htmlspecialchars(
        $name,
        ENT_QUOTES,
        "UTF-8"
    );
} else {
    header("Location: index.html");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Hello, <?= $safeName ?>!</h1>

    <p>Your form was submitted successfully.</p>

    <a href="index.html">Go back</a>

</body>
</html>
