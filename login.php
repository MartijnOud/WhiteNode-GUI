<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="/Assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="/Assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>WhiteNode</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- Bootstrap core CSS     -->
    <link href="/Assets/css/bootstrap.min.css" rel="stylesheet" />
    <!--  WhiteNode base CSS    -->
    <link href="/Assets/css/whitenode_base.css" rel="stylesheet"/>

    <link href="/Assets/css/style.css" rel="stylesheet" />
    <link href="/Assets/css/login.css" rel="stylesheet" />

</head>
<body>
<div class="wrapper">
    <div class="main-panel-login">
        <div class="content">
            <div class="container">

                <div class="row" id="pwd-container">
                    <div class="col-md-4"></div>

                    <div class="col-md-4">
                        <section class="login-form">
                            <form method="post" role="login">
                                <div class="logo">
                                    <h2>WhiteNode</h2>
                                </div>
                                <input type="text" name="app_name" placeholder="Username" required class="form-control input-lg" />

                                <input type="password" class="form-control input-lg" name="app_password" id="password" placeholder="Password" required="" />

                                <div class="pwstrength_viewport_progress"></div>

                                <button type="submit" name="login" class="btn btn-primary btn-block">Sign in</button>
                            </form>
                        </section>
                    </div>
                </div>
            </div>
        </div>
        <?php include_once("Snippets/Footer.php") ?>

    </div>
</div>
</body>
<!--   Core JS Files   -->
<script src="/Assets/js/jquery-1.10.2.js" type="text/javascript"></script>
<script src="/Assets/js/bootstrap.min.js" type="text/javascript"></script>
</html>
