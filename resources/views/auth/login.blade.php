<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'BracketPlus') }} :: Login</title>

  <!-- vendor css -->
  <link href="/bracketplus/lib/font-awesome/css/font-awesome.css" rel="stylesheet">
  <link href="/bracketplus/lib/Ionicons/css/ionicons.css" rel="stylesheet">

  <!-- Bracket CSS -->
  <link rel="stylesheet" href="/bracketplus/css/bracket.css">
</head>

<body>

  <div class="d-flex align-items-center justify-content-center bg-br-primary ht-100v">

    <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 bg-white rounded shadow-base">
      <div class="signin-logo tx-center tx-28 tx-bold tx-inverse"><span class="tx-normal">[</span> bracket <span class="tx-info">plus</span> <span class="tx-normal">]</span></div>
      <div class="tx-center mg-b-60"></div>
      <form method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}
        <div class="form-group {{ $errors->has('email') ? ' is-invalid' : '' }}">
          <input id="email" type="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus placeholder="Enter your Email Address"/>
          @if ($errors->has('email'))
              <div id="emailHelpBlock" class="form-control-feedback text-danger">
                  <strong>{{ $errors->first('email') }}</strong>
              </div>
          @endif
        </div>

        <!-- form-group -->
        <div class="form-group {{ $errors->has('password') ? ' has-danger' : '' }}">
          <input type="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Enter your password">
          @if ($errors->has('password'))
          <div id="passwordHelpBlock" class="form-control-feedback text-danger">
              {{ $errors->first('password') }}
          </div>
          @endif
          <a href="#" class="tx-info tx-12 d-block mg-t-10">Forgot password?</a>
        </div>
        <!-- form-group -->
        <button type="submit" class="btn btn-info btn-block">Sign In</button>
      </form>
      <div class="mg-t-60 tx-center">Not yet a member? <a href="#" class="tx-info">Sign Up</a></div>
    </div>
    <!-- login-wrapper -->
  </div>
  <!-- d-flex -->

  <script src="/bracketplus/lib/jquery/jquery.js"></script>
  <script src="/bracketplus/lib/popper.js/popper.js"></script>
  <script src="/bracketplus/lib/bootstrap/bootstrap.js"></script>

</body>

<!-- Mirrored from themepixels.me/bracketplus/app/signin-simple.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Nov 2017 07:20:55 GMT -->

</html>
