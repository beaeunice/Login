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
<title>Forgot Password</title>


</head>
  <body>
    <div class= "row main-container" id="card">
      <!-- Login -->
      <div class="col-xs-9 col-sm-7 col-md-5 col-lg-3 card" id="card-front"> 
        <image class="logo" src="./assets/image.png" alt="logo" />
        <form action='forgot-password' method="post">
          @if ($errors-> any())
          <div class= "alert alert-danger">
            @foreach($errors->all() as $err)
            <li> {{ $err }} </li>
            @endforeach
          </div>
        @endif
        @csrf
          <div class="mb-3 text-container">
            <h1 align ="center">Enter Email</h1>
            <input type="email" name="email" class="form-control" id="email" placeholder="Enter a valid email address">
          </div>
          <br>
          <button class="btn btn-primary submit-btn" type="submit">Send Otp</button>
        </form>
      </div>
		
</body>
</html>