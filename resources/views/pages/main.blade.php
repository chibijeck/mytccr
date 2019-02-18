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
        <!--
        <div class="col-lg-12">
            <h3 class="page-header">CIVIL REGISTRY SERVICES</h3>
        </div>-->
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
</div>
    
@endsection

@section('footer')
    @parent

    
@endsection