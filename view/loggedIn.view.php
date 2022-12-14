<?php
if (!isset($_SESSION["loggedInUser"])) {
    header("location: login");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>

    <link href="../css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

</head>
<body>
<form action="/loggout" method="post">
    <input value="logout"
           name="logout"
           type="submit"
    >
</form>
<h1>Wochenkarte</h1>


</body>
</html>