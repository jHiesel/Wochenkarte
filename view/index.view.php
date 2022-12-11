<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <styl>
        <link href="../css/bootstrap.min.css" rel="stylesheet"  crossorigin="anonymous">
    </styl>
</head>
<body>
<div class="container" >

    <div class="row">
        <h1 class="h1" >Login</h1>
    </div>

    <form action="/" method="post" class="form-control-lg">
        <div class="row-cols-auto">
        <label class="form-label">E-mail</label>

        <input type="email"
               name="E-mail"
               min="5"
               max="30"
               placeholder="Enter E-mail here"
               class="form-control"
        >
        </div>

        <div class="row-cols-3 ">
            <label class="form-label">Password</label>

            <input type="password"
                    name="password"
                    placeholder="Enter Password here"
                    class="form-control"
                    min="5"
                   max="20"
            >

        </div>
    </form>

</div>

</body>
</html>