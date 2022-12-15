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
        <div class="col-1">
            <h1 class="h1">Login</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-1">
            <h2 class="toDanger"><?php
                if (isset($error)) {
                    echo $error;
                }
            ?></h2>
        </div>
    </div>

    <form action="/" method="post" class="form-control-lg">
        <div class="row">
            <div class="col-6">
                <label class="form-label">E-mail</label>

                <input type="email"
                    name="Email"
                    min="5"
                    max="30"
                    placeholder="Enter E-mail here"
                    class="form-control"
                >
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <label class="form-label">Password</label>

                <input type="password"
                    name="password"
                    placeholder="Enter Password here"
                     class="form-control"
                     min="5"
                     max="20"
                >
            </div>
        </div>

        <div class="row-cols-3">
            <input type="submit"
                   name="login"
                   class="btn btn-primary"
                   value="login"
            >
        </div>

        <div class="row-cols-3">
            <a class="btn btn-secondary" href="/"> Reset</a>
        </div>
    </form>
</div>
</body>
</html>