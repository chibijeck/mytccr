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
            <!-- <h4>(TERMS AND CONDITION)</h4> -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            TERMS AND CONDITION
                        </div>
                        <div class="panel-body" style="text-align: justify;">
                            <p>This appointment and scheduling system allocates slots on a first come, first served basis. Limited slots are available and there is no guarantee that a slot will always be available for a user's first choice for an appointment schedule. </p>

                            <p>Users accept the responsibility for supplying, checking, and verifying the accuracy and correctness of the information they provide on this system in connection with their application, and consent to the collection and use of their personal information to conduct checks and validation against existing records and previous applications.</p>

                            <p>Deliberate, multiple attempts to circumvent the system to secure a schedule for the purpose of blocking several dates in advance is detrimental to public service. Users who are found to have abused the system will be blocked from securing an appointment.</p>
                        </div>
                        <div class="panel-footer">
                            <form role="form">
                                <div class="form-group">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="">
                                            <p class="text-danger">I have read and understood the instructions and information on this page and agreed to the <b>TERMS AND CONDITION</b> on the use of this online appointment and scheduling system.</p>
                                        </label>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-4 -->
                
            </div>
</div>
    
@endsection

@section('footer')
    @parent

    
@endsection
