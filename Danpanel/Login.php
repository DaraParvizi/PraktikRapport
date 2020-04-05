<!DOCTYPE html>
<html>
    <head>
        <meta charset="uft-8">
        <title>Login side</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    </head>

    <body>
        <div class="container">
            <div class="col-sm-10" style="width: 600px; margin-left: 250px; margin-top: 50px;">
                <div class="jumbotron" style="margin-top: -50px;">
 
                    <div class="form-group" >
                        <h1 style="margin-left: 140px;">
                            Login
                        </h1>

                    </div>
                    <hr>
                    <form class="form-horizontal" method="POST" action="loginKode.php" style="margin-left: 50px;">
                        <div class="form-group input-group">
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-user">

                                </span>
                            </span>
                            <input type="email" class="form-control" name="email" placeholder="Email" required>

                        </div>

                        <div class="form-group input-group">
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-lock">

                                </span>
                            </span>
                            <input type="password" class="form-control" name="password" placeholder="Adganskode" required >

                        </div>

                        <div class="form-group">
                            <label>

                                <input type="checkbox">
                                husk mig
                            </label>
                            
                        </div>

                        <div class="form-group">
                            <button class="btn btn-primary" style="width: 400px;">
                              Log ind  
                            </button>
                        </div>

                        <div class="form-group">
                            <a href="Oprettelse.php" style="margin-left: 280px;">Jeg har ikke en konto</a>
                        </div>
                    </form>
                </div>

            </div>
        </div>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </body>
    
</html>