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
                    <div class='input-group date' id='datetimepicker1' onchange="mySchedules()">
                        <input type='text' class="form-control" name='apptdate' id="apptdate"/>
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
                        <input type="radio" name="appttime" id="timeId1" value="08:00:00" disabled>08:00 - 09:00
                        <span class="text-danger" id="msgTimeId1">FULL</span>
                    </label>
                </div>
                <div class="form-group">
                    <label class="radio-inline">
                        <input type="radio" name="appttime" id="timeId2" value="09:00:00" disabled>09:00 - 10:00
                        <span class="text-danger" id="msgTimeId2">FULL</span>
                    </label>
                </div>
                <div class="form-group">
                    <label class="radio-inline">
                        <input type="radio" name="appttime" id="timeId3" value="10:00:00" disabled>10:00 - 11:00
                        <span class="text-danger" id="msgTimeId3">FULL</span>
                    </label>
                </div>
                <div class="form-group">
                    <label class="radio-inline">
                        <input type="radio" name="appttime" id="timeId4" value="11:00:00" disabled>11:00 - 12:00
                        <span class="text-danger" id="msgTimeId4">FULL</span>
                    </label>
                </div>
                <div class="form-group">
                    <label class="radio-inline">
                        <input type="radio" name="appttime" id="timeId5" value="12:00:00" disabled>12:00 - 01:00
                        <span class="text-danger" id="msgTimeId5">FULL</span>
                    </label>
                </div>
                <div class="form-group">
                    <label class="radio-inline">
                        <input type="radio" name="appttime" id="timeId6" value="01:00:00" disabled>01:00 - 02:00
                        <span class="text-danger" id="msgTimeId6">FULL</span>
                    </label>
                </div>
                <div class="form-group">
                    <label class="radio-inline">
                        <input type="radio" name="appttime" id="timeId7" value="02:00:00" disabled>02:00 - 03:00
                        <span class="text-danger" id="msgTimeId7">FULL</span>
                    </label>
                </div>
                <div class="form-group">
                    <label class="radio-inline">
                        <input type="radio" name="appttime" id="timeId8" value="03:00:00" disabled>03:00 - 04:00
                        <span class="text-danger" id="msgTimeId8">FULL</span>
                    </label>
                </div>
                <div class="form-group">
                    <label class="radio-inline">
                        <input type="radio" name="appttime" id="timeId9" value="04:00:00" disabled>04:00 - 05:00
                        <span class="text-danger" id="msgTimeId9">FULL</span>
                    </label>
                </div>

                <button type="submit" class="btn btn-primary">NEXT</button>
                    
            </div>
            <!-- /.col-lg-12 -->
        </form>
    </div>

    <script type="text/javascript">
        function mySchedules() {
            var x = document.getElementById("apptdate").value;
            $.ajax({
                type: 'GET',
                url: '/ajax/schedules/'+x,
                success: function (data) {
                    console.log(data);
                    $.each(data[x], function (key, val) {
                        if(val['total_remaining'] > 0){
                            document.getElementById("msgTimeId"+val['id']).innerHTML = "AVAILABLE "+"("+val['total_remaining']+")";
                            document.getElementById("msgTimeId"+val['id']).className = "text-success";
                            document.getElementById("timeId"+val['id']).disabled = false;
                        } else {
                            document.getElementById("msgTimeId"+val['id']).innerHTML = "FULL";
                            document.getElementById("msgTimeId"+val['id']).className = "text-danger";
                            document.getElementById("timeId"+val['id']).disabled = true;
                        }
                        
                    });
                },
                error: function() { 
                     console.log(data);
                }
            });
            // console.log(x);
        }
    </script>
</div>
    
@endsection

@section('footer')
    @parent

    
@endsection
