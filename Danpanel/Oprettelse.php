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
                        <h1 style="margin-left: 80px;">
                            Oprettelse
                        </h1>

                    </div>
                    <hr>
                    <div >
                        <form class="form-horizontal" action="oprettelseKode.php" method="POST">
                            <div class="form-group">
                            <label class="control-label col-sm-2" for="firstname">Fullnavn</label>
                            <div class="col-sm-6">
                              <input type="text" name="fullname" class="form-control" id="fullname" placeholder="Fullnavn">
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="control-label col-sm-2" for="email">Email:</label>
                            <div class="col-sm-6">
                              <input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="control-label col-sm-2" for="gender">Gender:</label>
                            <div class="col-sm-6">
                              <label class="radio-inline"><input type="radio" name="gender" value="Male">Male</label>
                              
                              <label class="radio-inline"><input type="radio" name="gender" value="Female">Female</label>
                            </div>
                          </div>
                          
                          <div class="form-group">

                             <label class="control-label col-sm-2" for="pwd">Password:</label>
                             <div class="col-sm-6"> 
                              <input type="password" name="password" class="form-control" id="pwd" placeholder="Enter password">
                            </div>
                          </div>
                          <div class="form-group"> 
                            <div class="col-sm-offset-2 col-sm-10">
                              <button type="submit" name="Opret" class="btn btn-primary">Opret</button>
                            </div>
                          </div>
                          <div class="form-group">
                            <a href="Login.php" style="margin-left: 140px;">Har allerede en konto</a>
                        </div>
                        </form>
                        </div>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </body>
    
</html>