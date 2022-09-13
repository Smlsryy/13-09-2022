<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>

    <div class="row" style="margin-top:50px;">

        <div class="col-md"></div>

        <div class="col-md rounded bg-light" style="box-shadow: 4px 4px 5px -4px;padding:10px">

            <form action="proses_login.php" method="post">

                <h3 align="center">LOGIN Perpus Online</h3>

                Username:

                <input type="text" name="username" value="" class="form-control">

                password:

                <input type="password" name="password" class="form-control"><br>

                <center><input type="submit" name="login" class="btn btn-success" value="LOGIN"></center>

            </form>

        </div>

        <div class="col-md"></div>

    </div>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>