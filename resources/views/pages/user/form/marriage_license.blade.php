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
                                    <input type="hidden" name="category" value="marriage_license">
                                    <input type="hidden" name="purpose" value="MARRIAGE LICENSE">

                                    <div class="form-group">
                                        <label>NO. OF YEARS LIVING TOGETHER</label>
                                        <input class="form-control" name="years_living_together" placeholder="NO. OF YEARS LIVING TOGETHER">
                                    </div>
                                    <div class="form-group">
                                        <label>TARGET DATE OF MARRIAGE</label>
                                        <input class="form-control" name="target_date_marriage" placeholder="YYYY-MM-DD">
                                    </div>
                            </div>
                    </div>
                    <div class="row"> 
                        <div class="col-lg-6">
                                    <h3 class="text-info">MALE APPLICANT</h3>
                                    <div class="form-group">
                                        <label>NAME</label>
                                        <input class="form-control" name="male_name" placeholder="NAME">
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
                                        <label>IS MALE APPLICANT'S FATHER DECEASED?</label>
                                        <label class="radio-inline">
                                            <input type="radio" name="male_father_deceased" id="optionsRadiosInline1" value="YES">YES
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="male_father_deceased" id="optionsRadiosInline2" value="NO">NO
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label>IS MALE APPLICANT PREVIOUSLY MARRIED?</label>
                                        <label class="radio-inline">
                                            <input type="radio" name="male_previously_married" id="optionsRadiosInline1" value="YES">YES
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="male_previously_married" id="optionsRadiosInline2" value="NO">NO
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label>IS MALE APPLICANT'S SPOUSE DECEASED?</label>
                                        <label class="radio-inline">
                                            <input type="radio" name="male_spouse_deceased" id="optionsRadiosInline1" value="YES">YES
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="male_spouse_deceased" id="optionsRadiosInline2" value="NO">NO
                                        </label>
                                    </div>

                                    <!-- <div class="form-group">
                                        <label>Request for CTC?</label>
                                        <label class="radio-inline">
                                            <input type="radio" name="ctcrequest" id="optionsRadiosInline1" value="YES" onClick="RadioGroup1_toggle(this);">YES
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="ctcrequest" id="optionsRadiosInline2" value="NO" onClick="RadioGroup1_toggle(this);" checked>NO
                                        </label>
                                    </div>
                                    <div id="hideme" style="visibility:hidden;">
                                        <div class="form-group">
                                            <label>CTC Quantity</label>
                                            <select class="form-control" name="ctcqty">
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
                                    </div> -->
                                    
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <button type="reset" class="btn btn-danger" onClick="window.location.reload()">Reset</button>
                                
                            </div>
                            <!-- /.col-lg-6 (nested) -->
                            <div class="col-lg-6">

                                    <script>
                                    function RadioGroup1_toggle(c)
                                    {
                                        switch(c.value)
                                        {
                                            case "YES": 
                                                document.getElementById('hideme').style.visibility = 'visible';
                                            break;

                                            case "NO": 
                                                document.getElementById('hideme').style.visibility = 'hidden';
                                            break;

                                            default: 
                                                document.getElementById('hideme').style.visibility = 'hidden';
                                            break;
                                        }
                                       /*if (c.value == 'YES')
                                          document.getElementById('hideme').style.visibility='visible';
                                       else if (c.value == 'NO')
                                          document.getElementById('hideme').style.visibility='hidden';
                                       else if (c.value == '')
                                          document.getElementById('hideme').style.visibility='hidden';*/
                                    }
                                    </script>

                                    <!-- <div id="hideme" style="visibility:hidden;"> -->
                                        <!-- <div class="form-group">
                                            <label>CTC Quantity</label>
                                            <select class="form-control" name="ctcqty">
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
                                        </div> -->

                                        <h3 class="text-info">FEMALE APPLICANT</h3>
                                        <div class="form-group">
                                            <label>NAME</label>
                                            <input class="form-control" name="female_name" placeholder="NAME">
                                        </div>
                                        <div class="form-group">
                                            <label>AGE</label>
                                            <input class="form-control" name="female_age" placeholder="AGE">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>NATIONALITY</label>
                                            <input class="form-control" name="female_nationality" placeholder="NATIONALITY">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>IS FEMALE APPLICANT'S FATHER DECEASED?</label>
                                            <label class="radio-inline">
                                                <input type="radio" name="female_father_deceased" id="optionsRadiosInline1" value="YES">YES
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="female_father_deceased" id="optionsRadiosInline2" value="NO">NO
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label>IS FEMALE APPLICANT PREVIOUSLY MARRIED?</label>
                                            <label class="radio-inline">
                                                <input type="radio" name="female_previously_married" id="optionsRadiosInline1" value="YES">YES
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="female_previously_married" id="optionsRadiosInline2" value="NO">NO
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label>IS FEMALE APPLICANT'S SPOUSE DECEASED?</label>
                                            <label class="radio-inline">
                                                <input type="radio" name="female_spouse_deceased" id="optionsRadiosInline1" value="YES">YES
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="female_spouse_deceased" id="optionsRadiosInline2" value="NO">NO
                                            </label>
                                        </div>
                                    <!-- </div> -->
                            </div>
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
