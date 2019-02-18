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
            <h3 class="page-header">ABOUT US</h3>
            <!-- <h4>(TERMS AND CONDITION)</h4> -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h4>R.A. 3753 - Law on Registry of Civil Status</h4>
                        </div>
                        <div class="panel-body" style="line-height: 2; text-align: justify;">
                            <p>
                                <b>Section 1. Civil Register.</b> – A civil register is established for recording the civil status of persons, in which shall be entered:
                                <ul>
                                    <li>(a) births; </li>
                                    <li>(b) deaths; </li>
                                    <li>(c) marriages; </li>
                                    <li>(d) annulments of marriages; </li>
                                    <li>(e) divorces; </li>
                                    <li>(f) legitimations; </li>
                                    <li>(g) adoptions; </li>
                                    <li>(h) acknowledgment of natural children; </li>
                                    <li>(i) naturalization; and </li>
                                    <li>(j) changes of name.</li>
                                </ul>

                                <b>Section 3. Local Civil Registrars.</b> – Except in the City of Manila, where the duties of local civil registrar shall be performed by the officer of the Philippine Health Service designated by the Director of said service, the Treasurers of the regular municipalities, municipal districts and cities shall be local civil registrars of the respective municipalities, municipal districts or cities and shall perform the duties imposed upon them by this Act without extra compensation, in addition to their ordinary duties. In his capacity as local civil registrar, the officer designated by the Director of the Health Service as local civil registrar of Manila and the treasurers above mentioned shall be under the direction and supervision of the Civil Registrar-General.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-4 -->
<!-- 
                <div class="col-lg-12">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h4>R.A. 3753 - Law on Registry of Civil Status</h4>
                        </div>
                        <div class="panel-body" style="line-height: 2; text-align: justify;">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
                        </div>
                    </div>
                </div>
-->
                <!-- /.col-lg-4 -->


                
    </div>
</div>
    
@endsection

@section('footer')
    @parent

    
@endsection
