<!DOCTYPE html>
<html lang="en">
@include('site_header')
<body class="login" background="{{url('images/backcover.jpg')}}" >
<div>
    <a class="hiddenanchor" id="signup"></a>
    <a class="hiddenanchor" id="signin"></a>

    <div class="login_wrapper">
        <div class="animate form login_form">
            <section class="login_content">
                {!! Form::open(['url'=> route('login'), 'class'=> 'form-horizontal']) !!}
                <h1> Activity Management System  </h1>
                <h1>Login </h1>
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <input type="email" class="form-control" placeholder="Email" name="email" value="{{old('email')}}"
                           required autofocus/>
                    @if ($errors->has('email'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <input type="password" name="password" class="form-control" placeholder="Password" required/>

                    @if ($errors->has('password'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                    @endif
                </div>
                <div>
                    <button type="submit" class="btn btn-default submit">Log in</button>
                </div>

                <div class="clearfix"></div>

                <div class="separator">
                    <div class="clearfix"></div>
                    <br/>

                    <div>
                        <h1>Isipathana College</h1>
                        {{--<h2>Activity Management System </h2>--}}
                        <p>©2017 All Rights Reserved</p>
                    </div>
                </div>
                </form>
            </section>
        </div>
    </div>
</div>

<!-- jQuery -->
<script src="{{ URL::asset('vendors/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ URL::asset('vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>

</body>
</html>
