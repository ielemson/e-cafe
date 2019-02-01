
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>


<link href="{{ asset('admin-style/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{asset('admin-style/font-awesome/css/font-awesome.min.css')}}" />
<link href="{{ asset('admin-style/css/local.css') }}" rel="stylesheet">


<script type="text/javascript" src="{{asset('admin-style/js/jquery-1.10.2.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin-style/bootstrap/js/bootstrap.min.js')}}"></script>   
</head>
<body>


            <div id="page-wrapper">

            <div class="row">

            <div class="col-lg-12 text-center v-center">

            <h1>Login</h1>
            <p class="lead">Enter your email to login</p>

            <br>
            <br>
            <br>

            <form class="col-lg-12">
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">


            <div class="col-md-12">
            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email" style="width: 340px; text-align: center; margin: 0 auto;" required autofocus>

            @if ($errors->has('email'))
            <span class="help-block">
            <strong>{{ $errors->first('email') }}</strong>
            </span>
            @endif
            </div>
            </div>
            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

            <div class="col-md-12">
        <input id="password" type="password" class="form-control" name="password"  placeholder="Password"  style="width: 340px; text-align: center; margin: 0 auto;"  required >

            @if ($errors->has('password'))
            <span class="help-block">
            <strong>{{ $errors->first('password') }}</strong>
            </span>
            @endif
            </div>
            </div>
                
            <div class="form-group">

            <div class="col-md-4 col-md-offset-4">
            <button class="btn btn-primary btn-block" type="submit">Login</button>

            </div>
            </div>
            </form>
            </div>
            </div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <div class="text-center">
                <h1>Follow us</h1>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center v-center" style="font-size: 39pt;">
                    <a href="#"><span class="avatar"><i class="fa fa-google-plus"></i></span></a>
                    <a href="#"><span class="avatar"><i class="fa fa-linkedin"></i></span></a>
                    <a href="#"><span class="avatar"><i class="fa fa-facebook"></i></span></a>
                    <a href="#"><span class="avatar"><i class="fa fa-github"></i></span></a>
                </div>

            </div>
            <!-- /.row -->

        </div>
        <!-- /#page-wrapper -->
   
</body>
</html>
