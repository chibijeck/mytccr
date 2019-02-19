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
            <h3 class="page-header">CIVIL REGISTRY SERVICES <span class="text-danger">({{ $_COOKIE['service'] }})</span></h3>
            <h4>(FILL YOUR INFORMATION)</h4>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
      
      <div class="col-lg-6">
            <div class="panel panel-default">
                <!-- <div class="panel-heading">
                    Registrant's Information
                </div> -->
                <div class="panel-body">
                    <div class="row">
                            <form method="POST" role="form">
                            <div class="col-lg-12">
                                
                                    {{ csrf_field() }}
                                    <input type="hidden" name="category" value="ctc_of_death_certificate">
                                    <input type="hidden" name="purpose" value="CTC OF DEATH CERTIFICATE">
                                    
                                    <div class="form-group">
                                        <label>FIRST NAME</label>
                                        <input class="form-control" name="first_name" placeholder="FIRST NAME">
                                    </div>
                                    <div class="form-group">
                                        <label>MIDDLE NAME</label>
                                        <input class="form-control" name="middle_name" placeholder="MIDDLE NAME">
                                    </div>
                                    <div class="form-group">
                                        <label>LAST NAME</label>
                                        <input class="form-control" name="last_name" placeholder="LAST NAME">
                                    </div>
                                    <div class="form-group">
                                        <label>SUFFIX</label>
                                        <input class="form-control" name="suffix" placeholder="SUFFIX">
                                    </div>
                                    <div class="form-group">
                                        <label>DATE OF DEATH</label>
                                        <input class="form-control" name="date_death" placeholder="YYYY-MM-DD">
                                    </div>
                                    <div class="form-group">
                                        <label>PLACE OF DEATH</label>
                                        <input class="form-control" name="place_death" placeholder="PLACE OF DEATH">
                                    </div>
                                    <div class="form-group">
                                        <label>Request for CTC?</label>
                                        <label class="radio-inline">
                                            <input type="radio" name="ctcrequest" id="optionsRadiosInline1" value="YES" onClick="RadioGroup1_toggle(this);">YES
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="ctcrequest" id="optionsRadiosInline2" value="NO" onClick="RadioGroup1_toggle(this);" checked>NO
                                        </label>
                                    </div>

                                    

                                    <!-- <div id="hideme" style="visibility:hidden;"> -->
                                        <div class="form-group">
                                            <label>CTC Quantity</label>
                                            <select class="form-control" name="ctc_qty">
                                                <option>--</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                                <option>6</option>
                                                <option>7</option>
                                                <option>8</option>
                                                <option>9</option>
                                                <option>10</option>
                                            </select>
                                        </div>
                                    <!-- </div> -->

                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <button type="reset" class="btn btn-danger" onClick="window.location.reload()">Reset</button>
                                
                            </div>
                            <!-- /.col-lg-6 (nested) -->
                            
                        </form>
                        <!-- /.col-lg-6 (nested) -->
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>

    </div>
</div>
    
@endsection

@section('footer')
    @parent

    
@endsection
