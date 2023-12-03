<html>

<head> 
  <link rel="stylesheet" href="lms-login.css">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<meta content="width=device-width, initial-scale=1" name="viewport" />
<title>New Password</title>


</head>
  <body>
    <div class= "row main-container" id="card">
      <!-- Login -->
      <div class="col-xs-9 col-sm-7 col-md-5 col-lg-3 card" id="card-front"> 
        <image class="logo" src="./assets/image.png" alt="logo" />
        <form action="change-pass" method="post">
          <div class="mb-3 text-container">
            <label for="email" class="form-label">OTP</label>
            <input type="number" class="form-control" id="email" placeholder="Enter Otp">
          </div>
          <div class="mb-3 text-container">
            <label for="password" class="form-label">New Password</label>
            <input type="password" class="form-control" id="password" placeholder="Enter your new password">
          </div>
          <div class="mb-3 text-container">
            <label for="password" class="form-label">Confirm Password</label>
            <input type="password_confirmation" class="form-control" id="password" placeholder="Enter Confirmation password">
          </div>
          <br>
          <button class="btn btn-primary submit-btn" type="submit">Enter</button>
        </form>
      </div>

		
</body>
</html>