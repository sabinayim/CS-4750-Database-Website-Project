<!--
Ketao Yin
CS 4750
login.php
-->

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap Core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="./css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="./font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <!-- Navbar -->
    <?php include("./navbar.html");?>

    <!-- Form -->
    <div class="container">
        <form class="form-horizontal" id="form_members" role="form" >

        <legend>Login Info</legend>
        <div class="form-group">
            <label for="userName" class="col-sm-2">User Name</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" name="userName" id="userName" placeholder="username">
            </div>
            <label for="password" class="col-sm-2">Password</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" name="password" id="password" placeholder="password">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-10">
                <button type="submit" class="btn btn-warning" name="submit" id="submit">Submit</button>
            </div>
        </div>
        </form>
    </div>
</body>

</html>
