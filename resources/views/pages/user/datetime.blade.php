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
            <h4>(PICK A DATE AND TIME)</h4>
        </div>

    </div>
    <!-- /.row -->
    <div class="row">
            <form method="POST">
            <div class='col-lg-3'>
                <div class="form-group">
                    <div class='input-group date' id='datetimepicker1'>
                        <input type='text' class="form-control" name='apptdate'/>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                                    
                {{ csrf_field() }}
                <!-- <input type="hidden" name="datetimepick" value="datetimepick"> -->
                
                <div class="form-group">
                    <label class="radio-inline">
                        <input type="radio" name="appttime" id="optionsRadiosInline1" value="08:00:00">08:00 - 09:00
                        <span class="text-success">AVAILABLE</span>
                    </label>
                </div>
                <div class="form-group">
                    <label class="radio-inline">
                        <input type="radio" name="appttime" id="optionsRadiosInline1" value="09:00 - 10:00">09:00 - 10:00
                        <span class="text-success">AVAILABLE</span>
                    </label>
                </div>
                <div class="form-group">
                    <label class="radio-inline">
                        <input type="radio" name="appttime" id="optionsRadiosInline1" value="10:00 - 11:00" disabled>10:00 - 11:00
                        <span class="text-danger">FULL</span>
                    </label>
                </div>
                <div class="form-group">
                    <label class="radio-inline">
                        <input type="radio" name="appttime" id="optionsRadiosInline1" value="11:00 - 12:00">11:00 - 12:00
                        <span class="text-success">AVAILABLE</span>
                    </label>
                </div>
                <div class="form-group">
                    <label class="radio-inline">
                        <input type="radio" name="appttime" id="optionsRadiosInline1" value="12:00 - 01:00" disabled>12:00 - 01:00
                        <span class="text-danger">FULL</span>
                    </label>
                </div>
                <div class="form-group">
                    <label class="radio-inline">
                        <input type="radio" name="appttime" id="optionsRadiosInline1" value="01:00 - 02:00" disabled>01:00 - 02:00
                        <span class="text-danger">FULL</span>
                    </label>
                </div>
                <div class="form-group">
                    <label class="radio-inline">
                        <input type="radio" name="appttime" id="optionsRadiosInline1" value="02:00 - 03:00">02:00 - 03:00
                        <span class="text-success">AVAILABLE</span>
                    </label>
                </div>
                <div class="form-group">
                    <label class="radio-inline">
                        <input type="radio" name="appttime" id="optionsRadiosInline1" value="03:00 - 04:00">03:00 - 04:00
                        <span class="text-success">AVAILABLE</span>
                    </label>
                </div>
                <div class="form-group">
                    <label class="radio-inline">
                        <input type="radio" name="appttime" id="optionsRadiosInline1" value="04:00 - 05:00" disabled>04:00 - 05:00
                        <span class="text-danger">FULL</span>
                    </label>
                </div>

                <button type="submit" class="btn btn-primary">NEXT</button>
                    
            </div>
            <!-- /.col-lg-12 -->
        </form>
    </div>

    
</div>
    
@endsection

@section('footer')
    @parent

    
@endsection
