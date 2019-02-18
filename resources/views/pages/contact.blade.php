@extends('layout/page')

@section('header')
    @parent

    @include('widgets/logo')
    @include('widgets/menu')
    @include('widgets/missionvision')
@endsection

@section('content')
    
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header"></h3>
            <h4>(FILL YOUR CONTACT INFORMATION)</h4>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
      
      <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Contact Details
                </div>
                <div class="panel-body">
                    <div class="row">
                            <form method="POST" role="form">
                            <div class="col-lg-6">
                                
                                    {{ csrf_field() }}
                                    <input type="hidden" name="category" value="birth">
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input class="form-control" name="first_name" placeholder="First Name">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input class="form-control" name="last_name" placeholder="Last Name">
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input class="form-control" name="email" placeholder="Enter you Email">
                                    </div>
                                    <div class="form-group">
                                        <label>Contact Number</label>
                                        <input class="form-control" name="contact_no" placeholder="Contact Number">
                                    </div>
                                
                                    
                                    
                            </div>

                            <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Message :</label>
                                    </div>

                                    <div class="form-group">
                                        <textarea name="comment" form="usrform" placeholder="Enter message here..." rows="4" cols="70" style="resize: vertical;"></textarea>
                                    </div>

                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    
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
