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
                    <div class="row">
                            <form method="POST" role="form">
                            <div class="col-lg-6">
                                
                                    {{ csrf_field() }}
                                    <input type="hidden" name="category" value="birth_certificate">
                                    <input type="hidden" name="purpose" value="BIRTH CERTIFICATE">
                                    
                                    <div class="form-group">
                                        <label>FIRST NAME</label>
                                        <input class="form-control" name="first_name" id="fname" placeholder="FIRST NAME" oninput="this.value = this.value.toUpperCase()" required="required">
                                    </div>
                                    <div class="form-group">
                                        <label>MIDDLE NAME</label>
                                        <input class="form-control" name="middle_name" placeholder="MIDDLE NAME" oninput="this.value = this.value.toUpperCase()" required="required">
                                    </div>
                                    <div class="form-group">
                                        <label>LAST NAME</label>
                                        <input class="form-control" name="last_name" placeholder="LAST NAME" oninput="this.value = this.value.toUpperCase()" required="required">
                                    </div>
                                    <!--=======================================================================
                                        <div class="form-group">
                                        <label>SUFFIX</label>
                                        <input class="form-control" name="suffix" placeholder="SUFFIX">
                                    </div>
                                        =======================================================================-->
                                    <div class="form-group">
                                        <label>SUFFIX</label>
                                        <select class="form-control" name="suffix">
                                            <option selected></option>
                                            <option value="JR.">JR.</option>
                                            <option value="SR.">SR.</option>
                                            <option value="II">II</option>
                                            <option value="III">III</option>
                                            <option value="IV">IV</option>
                                            <option value="V">V</option>
                                            <option value="VI">VI</option>
                                            <option value="VII">VII</option>
                                            <option value="VIII">VIII</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>GENDER</label>
                                        <select class="form-control" name="gender" required="required">
                                            <option></option>
                                            <option>MALE</option>
                                            <option>FEMALE</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>DATE OF BIRTH</label>
                                        <input class="form-control" id="birth_date" name="date_birth" placeholder="YYYY-MM-DD">
                                    </div>

                                    <div class="form-group">
                                        <label>PLACE OF BIRTH</label>
                                        <input class="form-control" name="place_birth" value="Taguig City">
                                    </div>
                                    <div class="form-group">
                                        <label>Is registrant married?</label>
                                        <label class="radio-inline">
                                            <input type="radio" name="married" id="optionsRadiosInline1" value="YES">YES
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="married" id="optionsRadiosInline2" value="NO">NO
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label>Is registrant a Muslim?</label>
                                        <label class="radio-inline">
                                            <input type="radio" name="muslim" id="optionsRadiosInline1" value="YES" required>YES
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="muslim" id="optionsRadiosInline2" value="NO">NO
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label>Are registrant's parents married?</label>
                                        <label class="radio-inline">
                                            <input type="radio" name="parentsmarried" id="optionsRadiosInline1" value="YES" required>YES
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="parentsmarried" id="optionsRadiosInline2" value="NO">NO
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label>Where was the child born?</label>
                                        <select class="form-control" name="child_born">
                                            <option></option>
                                            <option>Health Center</option>
                                            <option>Private Clinic</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Father's Location?</label>
                                        <select class="form-control" name="father_location">
                                            <option></option>
                                            <option>Local</option>
                                            <option>Abroad</option>
                                            <option>Deceased</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Request for CTC?</label>
                                        <label class="radio-inline">
                                            <input type="radio" name="ctcrequest" id="optionsRadiosInline1" value="YES" onClick="RadioGroup1_toggle(this); ">YES
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="ctcrequest" id="optionsRadiosInline2" value="NO" onClick="RadioGroup1_toggle(this);" checked>NO
                                        </label>
                                    </div>

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
                                                $('#ctcqtyselect').attr("required","required");
                                                $('#mother_first_name').attr("required","required");
                                                $('#mother_middle_name').attr("required","required");
                                                $('#mother_last_name').attr("required","required");

                                                $('#father_first_name').attr("required","required");
                                                $('#father_middle_name').attr("required","required");
                                                $('#father_last_name').attr("required","required");
                                            break;

                                            case "NO": 
                                                document.getElementById('hideme').style.visibility = 'hidden';
                                                $('#ctcqtyselect').removeAttr("required","required");
                                                $('#mother_first_name').removeAttr("required","required");
                                                $('#mother_middle_name').removeAttr("required","required");
                                                $('#mother_last_name').removeAttr("required","required");

                                                $('#father_first_name').removeAttr("required","required");
                                                $('#father_middle_name').removeAttr("required","required");
                                                $('#father_last_name').removeAttr("required","required");
                                            break;

                                            default: 
                                                document.getElementById('hideme').style.visibility = 'hidden';
                                                $('#ctcqtyselect').removeAttr("required","required");
                                                $('#mother_first_name').removeAttr("required","required");
                                                $('#mother_middle_name').removeAttr("required","required");
                                                $('#mother_last_name').removeAttr("required","required");

                                                $('#father_first_name').removeAttr("required","required");
                                                $('#father_middle_name').removeAttr("required","required");
                                                $('#father_last_name').removeAttr("required","required");
                                            break;
                                        }
                                    }
                                    </script>

                                    <div id="hideme" style="visibility:hidden;">
                                        <div class="form-group">
                                            <label>CTC Quantity</label>
                                            <!--=======================================================================
                                                <select class="form-control" name="ctc_qty">
                                                =======================================================================-->
                                            <select class="form-control" name="ctc_qty" id="ctcqtyselect">
                                                <option></option>
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

                                        <h4 class="text-info">FATHER'S NAME</h4>
                                        <h5><i>*If the father is unknown, input N/A</i></h5>
                                        <div class="form-group">
                                            <label>FIRST NAME</label>
                                            <input class="form-control" name="father_first_name" id="father_first_name" placeholder="FIRST NAME" oninput="this.value = this.value.toUpperCase()">
                                        </div>
                                        <div class="form-group">
                                            <label>MIDDLE NAME</label>
                                            <input class="form-control" name="father_middle_name" id="father_middle_name" placeholder="MIDDLE NAME" oninput="this.value = this.value.toUpperCase()">
                                        </div>
                                        <div class="form-group">
                                            <label>LAST NAME</label>
                                            <input class="form-control" name="father_last_name" id="father_last_name" placeholder="LAST NAME" oninput="this.value = this.value.toUpperCase()">
                                        </div>
                                        <!--=======================================================================
                                        <div class="form-group">
                                            <label>SUFFIX</label>
                                            <input class="form-control" name="father_suffix" placeholder="SUFFIX">
                                        </div>
                                            =======================================================================-->

                                        <div class="form-group">
                                        <label>SUFFIX</label>
                                        <select class="form-control" name="suffix">
                                            <option selected></option>
                                            <option value="JR.">JR.</option>
                                            <option value="SR.">SR.</option>
                                            <option value="II">II</option>
                                            <option value="III">III</option>
                                            <option value="IV">IV</option>
                                            <option value="V">V</option>
                                            <option value="VI">VI</option>
                                            <option value="VII">VII</option>
                                            <option value="VIII">VIII</option>
                                        </select>
                                        </div>

                                        <h4 class="text-info">MOTHER'S MAIDEN NAME</h4>
                                        <div class="form-group">
                                            <label>FIRST NAME</label>
                                            <input class="form-control" name="mother_first_name" id="mother_first_name" placeholder="FIRST NAME" oninput="this.value = this.value.toUpperCase()">
                                        </div>
                                        <div class="form-group">
                                            <label>MIDDLE NAME</label>
                                            <input class="form-control" name="mother_middle_name" id="mother_middle_name" placeholder="MIDDLE NAME" oninput="this.value = this.value.toUpperCase()">
                                        </div>
                                        <div class="form-group">
                                            <label>LAST NAME</label>
                                            <input class="form-control" name="mother_last_name" id="mother_last_name" placeholder="LAST NAME" oninput="this.value = this.value.toUpperCase()">
                                        </div>
                                    </div>
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