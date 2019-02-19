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
                        <span class="pull-left">BIRTH CERTIFICATE REGISTRATION</span>
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
                        <span class="pull-left">MARRIAGE CERTIFICATE REGISTRATION</span>
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
 <!-- /.start -->
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header text-center">SERVICES w/ CTC</h2>
        </div>
        <!-- /.col-lg-12 -->
    </div>

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
                        <a href="/terms?service=ctc_of_birth_certificate">
                            <div class="panel-footer">
                                <span class="pull-left">CTC of BIRTH CERTIFICATE</span>
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
                        <a href="/terms?service=ctc_of_marriage_certificate">
                            <div class="panel-footer">
                                <span class="pull-left">CTC of MARRIAGE CERTIFICATE</span>
                                <!-- <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span> -->
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6"></div>
            </div>

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
                    <a href="/terms?service=ctc_of_death_certificate">
                        <div class="panel-footer">
                            <span class="pull-left">CTC of DEATH CERTIFICATE</span>
                            <!-- <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span> -->
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6"></div>
        </div>
 <!-- /.end -->

 <!-- /.start -->
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header text-center">R.A NO. 9048</h2>
        </div>
        <!-- /.col-lg-12 -->
    </div>

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
                        <a href="/terms?service=CORRECTION_OF_CLERICAL_ERROR_IN_MARRIAGE_CERTIFICATE">
                            <div class="panel-footer">
                                <span class="pull-left">CORRECTION OF CLERICAL ERROR IN MARRIAGE CERTIFICATE</span>
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
                        <a href="/terms?service=CHANGE_OF_FIRST_NAME">
                            <div class="panel-footer">
                                <span class="pull-left">CHANGE OF FIRST NAME</span>
                                <!-- <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span> -->
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6"></div>
            </div>

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
                    <a href="/terms?service=CORRECTION_OF_CLERICAL_ERROR">
                        <div class="panel-footer">
                            <span class="pull-left">CORRECTION OF CLERICAL ERROR</span>
                            <!-- <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span> -->
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6"></div>
        </div>
 <!-- /.end -->

<!-- /.start -->
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header text-center">R.A NO. 10172</h2>
        </div>
        <!-- /.col-lg-12 -->
    </div>

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
                        <a href="/terms?service=CORRECTION_OF_GENDER">
                            <div class="panel-footer">
                                <span class="pull-left">CORRECTION OF GENDER</span>
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
                        <a href="/terms?service=CORRECTION_OF_ENTRY_IN_THE_DAY_AND/OR_MONTH_IN_THE_DATE_OF_BIRTH">
                            <div class="panel-footer">
                                <span class="pull-left">CORRECTION OF ENTRY IN THE DAY AND/OR MONTH IN THE DATE OF BIRTH</span>
                                <!-- <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span> -->
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6"></div>
            </div>

           
 <!-- /.end -->

<!-- /.start -->
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header text-center">R.A NO. 9858</h2>
        </div>
        <!-- /.col-lg-12 -->
    </div>

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
                        <a href="/terms?service=AUSF">
                            <div class="panel-footer">
                                <span class="pull-left">AUSF</span>
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
                        <a href="/terms?service=LEGITIMATION">
                            <div class="panel-footer">
                                <span class="pull-left">LEGITIMATION</span>
                                <!-- <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span> -->
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6"></div>
            </div>

            
 <!-- /.end -->

</div>
<!-- /#page-wrapper -->

@endsection

@section('footer')
    @parent

    
@endsection


