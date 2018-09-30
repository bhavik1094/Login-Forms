<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="Styles/jquery-3.3.1.min.js" type="text/javascript"></script>
        <script src="Styles/bootstrap-4.1.0.min.js" type="text/javascript"></script>
        <link href="Styles/bootstrap-4.1.0.min.css" rel="stylesheet" type="text/css"/>
        <link href="Styles/MainStyle.css" rel="stylesheet" type="text/css"/>
        <title></title>
    </head>
    <body>
        <?php
        session_start();
        $user1 = $_SESSION['login_user1'];
        ?>
        <form method="post">
            <div class="container register">
            <div class="row">
                <div class="col-md-12">
                    <div class="row register-form">
                        <div class="col-md-12">
                            <h1 class="register-heading">Welcome <?php echo $user1; ?></h1>
                            <input type="submit" name="user1" class="btn" value="Log Out" />
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        </form>
       
        <?php
        if (isset($_POST['user1'])) {
            session_destroy();
            unset($_SESSION['login_user1']);
            printf("<script>location.href='index.php'</script>");
        }
        ?>
    </body>
</html>
