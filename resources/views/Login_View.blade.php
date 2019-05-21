<!DOCTYPE html>
<html lang="en">
@include('site_header')

<body class="login" style="">
<div>
    <a class="hiddenanchor" id="signup"></a>
    <a class="hiddenanchor" id="signin"></a>

    <div class="login_wrapper">
        <div class="animate form login_form">
            <section class="login_content">
                <form>
                    <h1>Login Form</h1>
                    <div>
                        <input type="text" class="form-control" placeholder="Username" required="">
                    </div>
                    <div>
                        <input type="password" class="form-control" placeholder="Password" required="">
                    </div>
                    <div>
                        <a class="btn btn-default submit" href="index.html">Log in</a>
                        <a class="reset_pass" href="#">Lost your password?</a>
                    </div>

                    <div class="clearfix"></div>

                    <div class="separator">
                        <p class="change_link">New to site?
                            <a href="#signup" class="to_register"> Create Account </a>
                        </p>

                        <div class="clearfix"></div>
                        <br>

                        <div>
                            <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                            <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and
                                Terms</p>
                        </div>
                    </div>
                </form>
            </section>
        </div>

        <div id="register" class="animate form registration_form">
            <section class="login_content">
                {!! Form::open(['url'=>route('register'), 'class'=>'form-horizontal']) !!}
                <h1>Create Account</h1>
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <input type="text" class="form-control" placeholder="Username" required="">
                </div>
                <div>
                    <input type="email" class="form-control" placeholder="Email" required="">
                </div>
                <div>
                    <input type="password" class="form-control" placeholder="Password" required="">
                </div>
                <div>
                    <a class="btn btn-default submit" href="index.html">Submit</a>
                </div>

                <div class="clearfix"></div>

                <div class="separator">
                    <p class="change_link">Already a member ?
                        <a href="#signin" class="to_register"> Log in </a>
                    </p>

                    <div class="clearfix"></div>
                    <br>

                    <div>
                        <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                        <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                    </div>
                </div>
                </form>
            </section>
        </div>
    </div>
</div>


<iframe frameborder="0" scrolling="no" style="background-color: transparent; border: 0px; display: none;"></iframe>
<div id="GOOGLE_INPUT_CHEXT_FLAG" input=""
     input_stat="{&quot;tlang&quot;:true,&quot;tsbc&quot;:true,&quot;pun&quot;:true,&quot;mk&quot;:true,&quot;ss&quot;:true}"
     style="display: none;"></div>
</body>


{{-- Cut here --}}


<body class="login">
<div>
    <a class="hiddenanchor" id="signup"></a>
    <a class="hiddenanchor" id="signin"></a>

    <div class="login_wrapper">
        <div class="animate form login_form">
            <section class="login_content">
                {!! Form::open(['url'=> route('login'), 'class'=> 'form-horizontal']) !!}
                <h1> Activity Management System </h1>
                <h1> Isipathana College </h1>
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
