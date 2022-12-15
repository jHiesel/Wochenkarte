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
<div class="container">
<div class="row">
    <div class="col-2">
        <form action="/loggout" method="post">
            <input value="logout"
                name="logout"
                type="submit"
                class="btn btn-primary"
            >
    </div>
</form>
</div>
    <div class="row">
        <div class="clo-2">
            <h1>Wochenkarte</h1>
        </div>
    </div>
</div>


</body>
</html>