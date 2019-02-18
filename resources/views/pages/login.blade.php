@extends('layout/page')

@section('header')
    @parent

    @include('widgets/logo')
@endsection

@section('content')

<div id="page-wrapper" style="padding: 0; margin: 0">
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-12 col-md-8">
                    <img src="images/CITY HALL.jpg"  alt="CityHall" style="width: 100%">
                </div>
                
                <div class="col-6 col-md-4" style="/* margin-top: 3% */">
                    <div style="display: inline;">
                        <img src="images/CCRO_LOGO.png"  alt="City Civil Registry Office" style="display: block; margin-left: auto; margin-right: auto; width: 50%">
                    </div>
                    <div class="login-panel panel panel-default" style="margin-top: 5%; width: 100%;">
                        <div class="panel-heading">
                            <h3 class="panel-title">Sign In to myTCCR</h3>
                        </div>

                        <div class="panel-body">
                            <form role="form" method="POST">
                                <fieldset>
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                        </label>
                                    </div>
                                    <!-- Change this to a button or input when using this as a form -->
                                    <button type="submit" class="btn btn-lg btn-success btn-block">Login</button>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
</div>
<!-- /#page-wrapper -->

@endsection

@section('footer')
    @parent

    
@endsection


