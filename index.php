<!DOCTYPE html>
<html>
  <head>
    <title>Mail App</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--  <link rel="shortcut icon" href="" > -->
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
          <!-- Master style -->
          <link href="style.css" rel="stylesheet" type="text/css"/>
  </head>
  <body>
    <div class="container">
      <div class="row mobile-center">
        <div class="col-md-4 mobile-inner-center">
          <img src="mail_app.jpg" alt="logo mail app">
          <p class="text">Welcome to 
            <br>
            <strong>Mail App</strong>
          </p>
          <br>
        </div>
        <div class="col-md-6">
          <div class="arrow-right mobile-arrow-top"></div>
          <div class="login-block">
            <form id="signin-form" action="" method="post">
              <div class="form-group">
                <div class="right-inner-addon">
                  <i class="fa fa-user" aria-hidden="true"></i>
                  <input type="text" class="form-control" placeholder="Enter your name" />
                </div>
              </div>   
              <div class="form-group">
                <div class="right-inner-addon">
                  <i class="fa fa-lock" aria-hidden="true"></i>
                  <input type="password" class="form-control" placeholder="Password" />
                </div>
              </div>   
              <button type="button" class="btn btn-color btn-lg btn-block" id="submit" data-loading-text="<i class='fa fa-spinner fa-spin '></i>">Login</button>
              <br>
              <a href="#">Lost your password?</a>              
            </form>

          </div>
        </div>
      </div>
    </div>


    <!-- Bootstrap jQuert -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- Master js -->
    <script src="script.js" type="text/javascript"></script>
  </body>
</html>