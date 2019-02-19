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
            <h3 class="page-header">CIVIL REGISTRY SERVICES <span class="text-danger">({{ $_COOKIE['service'] }})</span> </h3>
            <h4 class="text-success">(FILL YOUR INFORMATION)</h4>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
      
      <div class="col-lg-12">
            <div class="panel panel-default">
                <!-- <div class="panel-heading">
                    Registrant's Information
                </div> -->
                
                <div class="panel-body">
                    <form method="POST" role="form">
                    <div class="row">
                            <div class="col-lg-6">
                                
                                    {{ csrf_field() }}
                                    <input type="hidden" name="category" value="ctc_of_marriage_certificate">
                                    <input type="hidden" name="purpose" value="CTC OF MARRIAGE CERTIFICATE">

                                    <div class="form-group">
                                        <label>DATE OF MARRIAGE</label>
                                        <input class="form-control" name="date_marriage" placeholder="YYYY-MM-DD">
                                    </div>
                                    <div class="form-group">
                                        <label>PLACE OF MARRIAGE</label>
                                        <input class="form-control" name="place_marriage" placeholder="PLACE OF MARRIAGE">
                                    </div>
                            </div>
                    </div>
                    <div class="row"> 
                        <div class="col-lg-6">
                                    <h3 class="text-info">MALE APPLICANT</h3>
                                    <div class="form-group">
                                        <label>FIRST NAME</label>
                                        <input class="form-control" name="male_first_name" placeholder="FIRST NAME">
                                    </div>
                                    <div class="form-group">
                                        <label>MIDDLE NAME</label>
                                        <input class="form-control" name="male_middle_name" placeholder="MIDDLE NAME">
                                    </div>
                                    <div class="form-group">
                                        <label>SURNAME</label>
                                        <input class="form-control" name="male_surname" placeholder="SURNAME">
                                    </div>
                                    <div class="form-group">
                                        <label>SUFFIX</label>
                                        <input class="form-control" name="male_suffix" placeholder="SUFFIX">
                                    </div>
                                    <div class="form-group">
                                        <label>AGE</label>
                                        <input class="form-control" name="male_age" placeholder="AGE">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>NATIONALITY</label>
                                        <input class="form-control" name="male_nationality" placeholder="NATIONALITY">
                                    </div>
                                    <div class="form-group">
                                        <label>CITY ADDRESS</label>
                                        <input class="form-control" name="male_city_address" placeholder="CITY ADDRESS">
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
                            <div class="col-lg-6">


                                        <h3 class="text-info">FEMALE APPLICANT</h3>
                                        <div class="form-group">
                                        <label>FIRST NAME</label>
                                            <input class="form-control" name="female_first_name" placeholder="FIRST NAME">
                                        </div>
                                        <div class="form-group">
                                            <label>MIDDLE NAME</label>
                                            <input class="form-control" name="female_middle_name" placeholder="MIDDLE NAME">
                                        </div>
                                        <div class="form-group">
                                            <label>SURNAME</label>
                                            <input class="form-control" name="female_surname" placeholder="SURNAME">
                                        </div>
                                        <!--
                                        <div class="form-group">
                                            <label>SUFFIX</label>
                                            <input class="form-control" name="female_suffix" placeholder="SUFFIX">
                                        </div>
                                        -->
                                        <div class="form-group">
                                            <label>AGE</label>
                                            <input class="form-control" name="female_age" placeholder="AGE">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>NATIONALITY</label>
                                            <input class="form-control" name="female_nationality" placeholder="NATIONALITY">
                                        </div>
                                        <div class="form-group">
                                            <label>CITY ADDRESS</label>
                                            <input class="form-control" name="female_city_address" placeholder="CITY ADDRESS">
                                        </div>
                                        
                                    <!-- </div> -->
                            </div>
                    </form>
                        <!-- /.col-lg-6 (nested) -->
                    </div>

            </div>
            <!-- /.panel -->
        </div>

    </div>
</div>
    
@endsection

@section('footer')
    @parent

    
@endsection
