@include("layouts.admin.header")

<body class="hold-transition register-page">
  <div class="register-box">
    <div class="register-logo">
      <a href="../../index2.html"><b>Admin</b>LTE</a>
    </div>

    <div class="register-box-body">
      <p class="login-box-msg">Register a new membership</p>

      @if (count($errors) > 0)
        <div class="alert alert-danger">
          <strong>Whoops! </strong> There were some problems with your input. <br> <br>
          <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }} </li>
            @endforeach
          </ul>
        </div>
      @endif

      {!! Form::open(["url" => "auth/register", "method" => "post"]) !!}

        <div class="form-group has-feedback">
          {!! Form::text("first_name", null, ["class" => "form-control", "placeholder" => "First Name"]) !!}
          <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div>

        <div class="form-group has-feedback">
          {!! Form::text("last_name", null, ["class" => "form-control", "placeholder" => "Last Name"]) !!}
          <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div>

        <div class="form-group has-feedback">
          {!! Form::email("email", null, ["class" => "form-control", "placeholder" => "Email"]) !!}
          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>

        <div class="form-group has-feedback">
          <input type="password" name="password" class="form-control" placeholder="Password">
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>

        <div class="form-group has-feedback">
          <input type="password" name="password_confirmation" class="form-control" placeholder="Retype password">
          <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
        </div>

        <div class="row">
          <div class="col-xs-8">
            <div class="checkbox icheck">
              <label class="">
                <div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"></ins></div> I agree to the <a href="#">terms</a>
              </label>
            </div>
          </div><!-- /.col -->

          <div class="col-xs-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
          </div><!-- /.col -->
        </div>

      {!! Form::close() !!}

      <div class="social-auth-links text-center">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign up using Facebook</a>
        <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign up using Google+</a>
      </div>

      <a href="{{ url('auth/login') }}" class="text-center">I already have a membership</a>
    </div><!-- /.form-box -->
  </div><!-- /.register-box -->

@include("layouts.admin.footer-bottom")