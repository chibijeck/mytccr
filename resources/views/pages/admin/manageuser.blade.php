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
            <h3 class="page-header">MANAGE USER</h3>
            @if( session('msg') )
            <h5 class="text-success">{{ session('msg') }}</h5>
            @endif
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->


    <div class="row">
                <div class="col-lg-6">
                    <form method="POST" role="form">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label>ACTION</label>
                            <select class="form-control" name="action" onChange="actionType(this);">
                                <option value="create">CREATE USER</option>
                                <option value="update">UPDATE USER</option>
                                <option value="delete">DELETE USER</option>
                            </select>
                            <script>
                                function actionType(c)
                                {
                                    switch(c.value)
                                    {
                                        case "create": 
                                            document.getElementById('hideme').style.visibility = 'hidden';
                                            document.getElementById('action').value = 'create';
                                        break;

                                        case "update": 
                                            document.getElementById('hideme').style.visibility = 'visible';
                                            document.getElementById('action').value = 'update';
                                        break;

                                        case "delete": 
                                            document.getElementById('hideme').style.visibility = 'visible';
                                            document.getElementById('action').value = 'delete';
                                        break;

                                        default: 
                                            document.getElementById('hideme').style.visibility = 'hidden';
                                        break;
                                    }
                                   
                                }
                            </script>
                        </div>
                        <div id="hideme" style="visibility:hidden;">
                            <div class="form-group input-group">
                                <input type="text" class="form-control" name="employee_id" placeholder="SEARCH EMPLOYEE ID">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button"><i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </div>
                    </form>
                    <form method="POST" role="form">
                        {{ csrf_field() }}
                        <input type="hidden" id="action" name="action" value="{{ $action }}">
                        <div class="form-group">
                            <label>EMPLOYEE ID</label>
                            <input class="form-control" name="employee_id"  value="@if(isset($employee)){{ $employee->employee_id }}@endif" placeholder="ENTER EMPLOYEE ID">
                        </div>
                        <div class="form-group">
                            <label>EMPLOYEE NAME</label>
                            <input class="form-control" name="employee_name" value="@if(isset($employee)){{ $employee->employee_name }}@endif" placeholder="ENTER EMPLOYEE NAME">
                        </div>
                        <div class="form-group">
                            <label>EMPLOYEE EMAIL</label>
                            <input class="form-control" name="employee_email" value="@if(isset($employee)){{ $employee->employee_email }}@endif" placeholder="ENTER EMPLOYEE EMAIL">
                        </div>
                        <div class="form-group">
                            <label>EMPLOYEE PASSWORD</label>
                            <input class="form-control" name="employee_password" value="@if(isset($employee)){{ $employee->employee_password }} @endif" placeholder="ENTER EMPLOYEE PASSWORD">
                        </div>
                        <div class="form-group">
                            <label>ACCOUNT TYPE</label>
                            <select class="form-control" name="account_type" value="@if(isset($employee)){{ $employee->account_type }}@endif">
                                <option>--</option>
                                <option>admin</option>
                                <option>employee</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">SUBMIT</button>
                    </form>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>



</div>
    
@endsection

@section('footer')
    @parent

    
@endsection
