@extends('layout/page')

@section('header')
    @parent

    @include('widgets/logo')
    @include('widgets/adminsidebar')
@endsection

@section('content')
    
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header">APPOINTMENT QUEUE</h3>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
<!-- <div class="row">
    <div class="col-lg-6">
        <h5>REFERENCE CODE</h5>
        <form role="form">
            <div class="form-group input-group">
                <input type="text" class="form-control">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="button"><i class="fa fa-search"></i>
                    </button>
                </span>
            </div>

            <div class="form-group">
                <label>REQUEST FOR</label>
                <input class="form-control">
            </div>

            <div class="form-group">
                <label>APPLICANT'S NAME</label>
                <input class="form-control">
            </div>

            <div class="form-group">
                <label>REQUIREMENTS</label>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="">VALID ID
                    </label>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="">AUTHORIZATION LETTER
                    </label>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="">DOCUMENT 1
                    </label>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="">REQUIREMENT 2
                    </label>
                </div>
            </div>

            <div class="form-group">
                <label>REMARK/S</label>
                <select class="form-control">
                    <option>--</option>
                    <option>COMPLETE</option>
                    <option>INCOMPLETE</option>
                    <option>OTHERS</option>
                </select>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">UPDATE</button>
            </div>
        </form>
    </div>
</div> -->

    <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            APPLICANTS LIST OF RECORDS
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>REFERENCE CODE</th>
                                        <th>FIRST NAME</th>
                                        <th>LAST NAME</th>
                                        <th>PURPOSE</th>
                                        <th>CTC</th>
                                        <th>STATUS</th>
                                        <th>APPOINTMENT SLOT</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if( isset($appointments) )
                                    @foreach($appointments as $appointment)
                                        <tr class="odd gradeX">
                                            <td>{{$appointment->ref_id}}</td>
                                            <td>{{$appointment->registrant_fname}}</td>
                                            <td>{{$appointment->registrant_lname}}</td>
                                            <td>{{$appointment->purpose}}</td>
                                            <td>{{$appointment->ctc_qty}}</td>
                                            <td>{{$appointment->status}}</td>
                                            <td>{{$appointment->appt_date}} {{$appointment->appt_time}}</td>
                                        </tr>
                                    @endforeach
                                    @endif
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>



</div>
    
@endsection

@section('footer')
    @parent

    
@endsection
