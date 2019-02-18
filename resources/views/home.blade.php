@extends('layout/page')

@section('header')
    @parent

    @include('widgets/logo')
    @include('widgets/menu')
    @include('widgets/missionvision')
@endsection

@section('content')

<div id="page-wrapper" style="margin: 0;">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header text-center">CIVIL REGISTRY SERVICES</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-3 col-md-6"></div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-file-o fa-5x"></i>
                        </div>
                        
                    </div>
                </div>
                <a href="/terms?service=birth_certificate">
                    <div class="panel-footer">
                        <span class="pull-left">CERTIFICATE OF LIVE BIRTH</span>
                        <!-- <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span> -->
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-file-o fa-5x"></i>
                        </div>
                        
                    </div>
                </div>
                <a href="/terms?service=marriage_certificate">
                    <div class="panel-footer">
                        <span class="pull-left">CERTIFICATE OF MARRIAGE</span>
                        <!-- <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span> -->
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6"></div>
    </div>
    <!-- /.row -->
    
    <div class="row">
        <div class="col-lg-3 col-md-6"></div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-file-o fa-5x"></i>
                        </div>
                        
                    </div>
                </div>
                <a href="/terms?service=marriage_license">
                    <div class="panel-footer">
                        <span class="pull-left">APPLICATION FOR MARRIAGE LICENSE</span>
                        <!-- <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span> -->
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-file-o fa-5x"></i>
                        </div>
                        
                    </div>
                </div>
                <a href="/terms?service=death_certificate">
                    <div class="panel-footer">
                        <span class="pull-left">CERTIFICATE OF DEATH</span>
                        <!-- <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span> -->
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6"></div>
    </div>
    <!-- /.row -->

    <!--======================================================================-
    <div class="row">
        <div class="col-lg-3 col-md-6"></div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-file-o fa-5x"></i>
                        </div>
                        
                    </div>
                </div>
                <a href="#">
                    <div class="panel-footer">
                        <span class="pull-left">OTHER SERVICES OF CIVIL REGISTRY</span>

        ======================================================================-->

                        <!-- <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span> -->
        <!--======================================================================
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-file-o fa-5x"></i>
                        </div>
                        
                    </div>
                </div>
                <a href="#">
                    <div class="panel-footer">
                        <span class="pull-left">OTHER SERVICES OF CIVIL REGISTRY</span>
            ======================================================================-->
                        <!-- <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span> -->

    <!--======================================================================
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        ======================================================================-->

        <div class="col-lg-3 col-md-6"></div>
    </div>
    <!-- /.row -->
</div>
<!-- /#page-wrapper -->

@endsection

@section('footer')
    @parent

    
@endsection


