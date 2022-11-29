<?php $pageTitle = "Sign In"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Meta -->
  <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
  <meta name="author" content="ThemePixels">

  <title><?= $pageTitle; ?></title>

  <!-- vendor css -->
  <link href="{{asset('backend')}}/lib/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="{{asset('backend')}}/lib/ionicons/css/ionicons.min.css" rel="stylesheet">

  <!-- Bracket CSS -->
  <link rel="stylesheet" href="{{asset('backend')}}/css/bracket.css">
</head>

<body>

  <div class="d-flex align-items-center justify-content-center bg-br-primary ht-100v">

    <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 bg-white rounded shadow-base">
      <div class="signin-logo tx-center tx-28 tx-bold tx-inverse"><span class="tx-normal"></span> Sign <span class="tx-info">In</span> <span class="tx-normal"></span></div>
      <div class="tx-center mg-b-60">Softness IT</div>

      <form action="{{ route('login') }}" method="POST">
        @csrf
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Enter your email" name="email">
        </div><!-- form-group -->
        <div class="form-group">
          <input type="password" class="form-control" placeholder="Enter your password" name="password">
        </div><!-- form-group -->
        <button type="submit" class="btn btn-info btn-block">Sign In</button>
      </form>
      <a href="{{ route('password.request') }}" class="tx-info tx-12 d-block mg-t-10">Forgot password?</a>
      <div class="mg-t-60 tx-center">Not yet a member? <a href="{{ route('register') }}" class="tx-info">Sign Up</a></div>
    </div><!-- login-wrapper -->
  </div><!-- d-flex -->

  <script src="{{asset('backend')}}/lib/jquery/jquery.min.js"></script>
  <script src="{{asset('backend')}}/lib/jquery-ui/ui/widgets/datepicker.js"></script>
  <script src="{{asset('backend')}}/lib/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>