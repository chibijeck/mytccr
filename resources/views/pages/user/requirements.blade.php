@extends('layout/page')

@section('header')
    @parent

    @include('widgets/logo')
    @include('widgets/menu')
    @include('widgets/sidebar')
@endsection

@section('content')
    
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header">CIVIL REGISTRY SERVICES</h3>
            <!-- <h4>(LIST OF REQUIREMENTS)</h4> -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->

    <div class="row" id="BirthCert">
        <div class="col-lg-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    LIST OF REQUIREMENTS FOR ( {{ $_COOKIE['service'] }} )
                </div>
                
                <div class="panel-footer">
                    <form role="form">
                        @foreach($requirements as $requirement)
                        <div class="form-group">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="">
                                    <p class="text-info">{{ $requirement->document_desc }}</p>
                                </label>
                            </div>
                        </div>
                        @endforeach

                    </form>
                </div>
            </div>
        </div>
        <!-- /.col-lg-4 -->
    </div>
</div>
    
@endsection

@section('footer')
    @parent

    
@endsection
