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
            <h3 class="page-header">CIVIL REGISTRY SERVICES</h3>
        </div>
        <!-- /.col-lg-12 -->

        <div class="col-lg-13">

        <h3></h3>
        <ul style="line-height: 2;">
            <li>Registration of Birth Certificate</li>
            <li>Applying for Marriage License</li>
            <li>Registration of Marriage Certificate</li>
            <li>Registration of Death Certificate</li>
            <li>Registration of Court Orders / Decrees and Request of Annotated Record</li>
            <li>Out-of-Town Reporting of Delayed Registration of Civil Registry Records</li>
            <li>Securing Transcription / Certified True Copy / No Record of Civil Registry (Birth, Marriage, Death) Records</li>
            <li>Registration of Legal Instruments / Legitimation of Natural Child</li>
            <li>Filing Petition for Change of First Name (CFN) or Correction of Clerical Error(s) in the Civil Registry Documents</li>
            <li>Requesting Endorsement of Civil Registry Records to the Civil Registrar-General</li>
            <li>Delayed Registration of Civil Registry Records</li>
        </ul>
        </div>
    </div>
</div>
    
@endsection

@section('footer')
    @parent

    
@endsection
