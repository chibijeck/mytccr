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
            <h4 class="text-success">(PETITIONER'S INFORMATION)</h4>
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
                                    <input type="hidden" name="category" value="ausf">
                                    <input type="hidden" name="purpose" value="AUSF">
                                    
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