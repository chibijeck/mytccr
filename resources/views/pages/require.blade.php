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
            <h3 class="page-header">LIST OF REQUIREMENTS</h3>
            <!-- <h4>(TERMS AND CONDITION)</h4> -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->

                <div class="col-lg-12">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h4>REGISTRATION OF BIRTH CERTIFICATE</h4>
                        </div>
                        <div class="panel-body" style="line-height: 2; text-align: justify;">
                            <p>
                                <b>Timely</b>
                                <ul>
                                    <li>
                                        <h5>Certificate of Live Birth (4 copies)</h5>
                                    </li>
                                </ul>

                                <b>Delayed</b>
                                <ul>
                                    <li>
                                        <h5>Certificate of Live Birth (4 copies)</h5>

                                        <ul>
                                            <li>(Duly signed by the proper parties, Typewritten - Strictly No Erasures)</li>
                                        </ul>
                                    </li>
                                    
                                    <li>
                                        <h5>Muslim Attachment</h5>
                                        <ul>
                                            <li>If applicant is a Muslim</li>
                                        </ul>
                                    </li>

                                    <li>
                                        <h5>Affidavit for Delayed Registration</h5>
                                    </li>

                                    <li>
                                        <h5>Latest original PSA Negative Result (No Record on File)</h5>

                                        <ul>
                                            <li>
                                                <h5>For 1 year old above applicant</h5>
                                            </li>
                                        </ul>
                                    </li>

                                    <li>
                                        <h5>Affidavit of two disinterested persons (2 copies)</h5>

                                        <ul>
                                            <li>(Peronsons who might have witnessed or have known about the birth of the child / registrant</li>
                                        </ul>
                                    </li>

                                    <li>
                                        <h5>If applicant is 0-6 years of age</h5>
                                        <ul>
                                            <li style="list-style-type:none"><i><b>*All events of birth shall be registered in the Civil Registry Office within thirty (30) days. Otherwise, it will be considered as delayed.</b></i></li>
                                            <li>Any two of the following supporting documents to prove the NAME, DATE and PLACE OF BIRTH, and PARENTS OF THE CHILD / REGISTRANT:</li>
                                            <ul style="list-style-type:disc;">                                                    
                                                <li>
                                                    <h5>Barangay Chairman Certification for Late Registration</h5>

                                                    <ul>
                                                        <li style="list-style-type:circle;">Residence of Mother at the time of birth - with Wet / Fresh signature of the Barangay Chairman with a dry seal</li>
                                                    </ul>
                                                </li>
                                                    
                                                <li>
                                                    <h5>Original Baptismal Certificate</h5>

                                                    <ul>
                                                        <li style="list-style-type:circle;">with Wet / Fresh signature of the Parish Priest with a dry seal</li>
                                                    </ul>
                                                </li>
                                                    
                                                <li>
                                                    <h5>Medical Records</h5>
                                                    <ul>
                                                        <li style="list-style-type:circle;"><b>Health Centers</b> - Immunization Card with CTC of Client’s List</li>
                                                        <li style="list-style-type:circle;"><b>Private Clinics</b> - CTC Baby book with Certification from the pediatrician (not accepted if the record is issued by the attendant at birth)</li>
                                                    </ul>
                                                </li>

                                            </ul>
                                        </ul>
                                    </li>

                                    <li>
                                        <h5>If applicant is 13-17 years of age</h5>
                                            <ul>
                                                <li style="list-style-type:none"><i><b>*COVERAGE: Born between January 1, 2000 to March 18, 2004 - Acknowledged by the father using mother’s surname w/o middle name</b></i></li>
                                                <li>Any two of the following supporting documents to prove the NAME, DATE and PLACE OF BIRTH, and PARENTS OF THE CHILD / REGISTRANT:</li>
                                                <ul style="list-style-type:disc;">
                                                    <li>
                                                        <h5>Certified True Copy of FORM 137 / SCHOOL RECORDS</h5>
                                                        
                                                        <ul>
                                                            <li style="list-style-type:circle;">(Elementary or High school) - with Wet / Fresh signature of the Principal with a dry seal</li>
                                                        </ul>
                                                    </li>
                                                    
                                                    <li>
                                                        <h5>Barangay Chairman Certification for Late Registration</h5>

                                                        <ul>
                                                            <li style="list-style-type:circle;">Residence of Mother at the time of birth - with Wet / Fresh signature of the Barangay Chairman with a dry seal</li>
                                                        </ul>
                                                    </li>
                                                    
                                                    <li>
                                                        <h5>Original Baptismal Certificate</h5>

                                                        <ul>
                                                            <li style="list-style-type:circle;">with Wet / Fresh signature of the Parish Priest with a dry seal</li>
                                                        </ul>
                                                    </li>
                                                    
                                                    <li>
                                                        <h5>Medical Records</h5>
                                                        <ul>
                                                            <li style="list-style-type:circle;"><b>Health Centers</b> - Immunization Card with CTC of Client’s List</li>
                                                            <li style="list-style-type:circle;"><b>Private Clinics</b> - CTC Baby book with Certification from the pediatrician (not accepted if the record is issued by the attendant at birth)</li>
                                                        </ul>
                                                    </li>

                                                </ul>
                                            </ul>
                                    </li>

                                    <li>
                                        <h5>If applicant is 18-28 years of age</h5>
                                        <ul>
                                                <li style="list-style-type:none"><i><b>*COVERAGE: Born between August 3, 1988 to December 31, 1988 - Acknowledged by the father using mother’s surname w/o middle name</b></i></li>
                                                <li>PSA COPY / CTC of Certificate of Marriage (For married applicant)</li>
                                                <li>Any two of the following supporting documents to prove the NAME, DATE and PLACE OF BIRTH, and PARENTS OF THE CHILD / REGISTRANT:</li>
                                                <ul style="list-style-type:disc;">
                                                    <li>
                                                        <h5>Certified True Copy of FORM 137 / SCHOOL RECORDS</h5>
                                                        
                                                        <ul>
                                                            <li style="list-style-type:circle;">(Elementary or High school) - with Wet / Fresh signature of the Principal with a dry seal</li>
                                                        </ul>
                                                    </li>
                                                    
                                                    <li>
                                                        <h5>Barangay Chairman Certification for Late Registration</h5>

                                                        <ul>
                                                            <li style="list-style-type:circle;">Residence of Mother at the time of birth - with Wet / Fresh signature of the Barangay Chairman with a dry seal</li>
                                                        </ul>
                                                    </li>
                                                    
                                                    <li>
                                                        <h5>Original Baptismal Certificate</h5>

                                                        <ul>
                                                            <li style="list-style-type:circle;">with Wet / Fresh signature of the Parish Priest with a dry seal</li>
                                                        </ul>
                                                    </li>
                                                    
                                                    <li>
                                                        <h5>Certified True Copy of Voter’s Certification / Voter’s Registration Record</h5>
                                                    </li>
                                                    
                                                    <li>
                                                        <h5>Certified True / Microfilmed Copy of SSS E1 / GSIS POLICY</h5>
                                                    </li>

                                                </ul>
                                            </ul>
                                    </li>

                                    <li>
                                        <h5>If applicant is 28 years and above</h5>
                                            <ul>
                                                <li style="list-style-type:none"><i><b>*COVERAGE: Born on or before August 2, 1998 - Acknowledged by the parents using father’s surname</b></i></li>
                                                <li>PSA COPY / CTC of Certificate of Marriage (For married applicant)</li>
                                                <li>Any two of the following supporting documents to prove the NAME, DATE and PLACE OF BIRTH, and PARENTS OF THE CHILD / REGISTRANT:</li>
                                                <ul style="list-style-type:disc;">
                                                    <li>
                                                        <h5>Certified True Copy of FORM 137 / SCHOOL RECORDS</h5>
                                                        
                                                        <ul>
                                                            <li style="list-style-type:circle;">(Elementary or High school) - with Wet / Fresh signature of the Principal with a dry seal</li>
                                                        </ul>
                                                    </li>
                                                    
                                                    <li>
                                                        <h5>Barangay Chairman Certification for Late Registration</h5>

                                                        <ul>
                                                            <li style="list-style-type:circle;">Residence of Mother at the time of birth - with Wet / Fresh signature of the Barangay Chairman with a dry seal</li>
                                                        </ul>
                                                    </li>
                                                    
                                                    <li>
                                                        <h5>Original Baptismal Certificate</h5>

                                                        <ul>
                                                            <li style="list-style-type:circle;">with Wet / Fresh signature of the Parish Priest with a dry seal</li>
                                                        </ul>
                                                    </li>
                                                    
                                                    <li>
                                                        <h5>Certified True Copy of Voter’s Certification / Voter’s Registration Record</h5>
                                                    </li>
                                                    
                                                    <li>
                                                        <h5>Certified True / Microfilmed Copy of SSS E1 / GSIS POLICY</h5>
                                                    </li>

                                                </ul>
                                            </ul>
                                    </li>

                                    <li>
                                        <h5>Affidavit of Acknowledgement / Admission of Paternity</h5>

                                        <ul>
                                            <li>Duly Accomplished, for unmarried parents</li>
                                            <li style="list-style-type:none"><h5>Conditions:</h5></li>

                                            <ul>
                                                <li>
                                                    <h5>Abroad</h5>
                                                </li>
                                                    
                                                    <ul style="line-height: 2;">
                                                        <li style="list-style-type:circle;">
                                                            Affidavit must be executed thru the nearest Philippine Consulate at its residence, <b>duly authenticated by the DFA</b> and must be <u><b>registered first at the Local Civil Registry Office of Manila</b></u>
                                                        </li>
                                                    </ul>

                                                <li>
                                                    <h5>Deceased</h5>
                                                </li>

                                                    <ul>
                                                        <li style="list-style-type:circle;"><b>Original Copy of Private Handwritten Instrument</b> supported by any two of the following documents showing clearly the paternity between the father and child:</li>

                                                        <ul>
                                                            <li>Employment Record</li>
                                                            <li>SSS E1 / GSIS Record</li>
                                                            <li>Insurance</li>
                                                            <li>Certification of membership of any organization</li>
                                                            <li>Statement of assets and liabilities</li>
                                                            <li>Income Tax Return</li>
                                                        </ul>
                                                    </ul>
                                            </ul>
                                        </ul>
                                    </li>

                                </ul>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-4 -->

                <div class="col-lg-12">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h4>APPLICATION OF MARRIAGE LICENSE</h4>
                        </div>
                        <div class="panel-body" style="line-height: 2; text-align: justify;">
                            <p>
                                <b><u>Both Applicants</u></b>
                                <ul>
                                    <li>
                                        <h5>Original Birth Certificate</h5>
                                        
                                        <ul>
                                            <li>(NSO or  CTC from the Local Civil Registry Office)</li>
                                        </ul>
                                    </li>

                                    <li>
                                        <h5>Latest Certificate of No Marriage (CENOMAR)</h5>

                                        <ul>
                                            <li>(CENOMAR must have 6 months validity)</li>
                                        </ul>
                                    </li>

                                    <li>
                                        <h5>Community Tax Certficate</h5>
                                    </li>

                                    <li>
                                        <h5>Barangay Certfication / ID</h5>

                                        <ul>
                                            <li>(Proof of Residency)</li>
                                        </ul>
                                    </li>

                                    <li>
                                        <h5>Consent of Father (For Applicants Ages 18-20)</h5>
                                        
                                        <ul>
                                            <li>
                                                If deceased, <b>PERSONAL APPEARANCE OF MOTHER</b> and <b>Death Certificate (NSO / CTC)</b> of the deceased parent
                                            </li>
                                        </ul>
                                    </li>

                                    <li>
                                        <h5>Marriage Counselling Certficate from DSWD (For Applicants Ages 18-24)</h5>
                                    </li>

                                    <li>
                                        <h5>Family Planning Certficate from Taguig City Health Centre (For Applicants 18 yo and above)</h5>
                                        <ul>
                                            <li>
                                                Schedule of Seminars: Every Tuesdays / Thursdays<br>9:30 AM - DSWD Office<br>1:30 PM - Taguig City Health Centre
                                            </li>
                                        </ul>
                                    </li>

                                    <li>
                                        <h5>Advice upon intended marriage (For Applicants Ages 21-24)</h5>
                                        <ul>
                                            <li>
                                                <b>PERSONAL APPEARANCE </b>of both applicant’s Mother and Father together with their Valid ID’s
                                            </li>
                                        </ul>
                                    </li>
                                </ul>

                                <b><u>For previously married applicant(s) (Additional Requirement)</u></b>
                                <ul>
                                    <li>
                                        <h5>Marriage Certficate (PSA / NSO Copy)</h5>
                                        
                                        <ul>
                                            <li>
                                                (Must have an annotation of declaration of nullity of your marriage)
                                            </li>
                                        </ul>
                                    </li>

                                    <li>
                                        <h5>Death Certficate of a deceased spouse (NSO / CTC)</h5>
                                    </li>
                                </ul>

                                <b><u>Foreign Applicant (Additional Requirements)</u></b>
                                <ul>
                                    <li>
                                        <h5>Certificate of Legal Capacity to contract marriage</h5>
                                        
                                        <ul>
                                            <li>
                                                (Must be issued by their respective Diplomatic or Consular Officials and duly authenticated by the DFA)
                                            </li>
                                        </ul>
                                    </li>
                                    
                                    <li>
                                        <h5>Photocopy of Passport (Front and Arrival)</h5>
                                    </li>
                                </ul>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-4 -->

                <div class="col-lg-12">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h4>REGISTRATION OF CERTIFICATE OF MARRIAGE</h4>
                        </div>
                        <div class="panel-body" style="line-height: 2; text-align: justify;">
                            <p>
                                <b>Timely</b>
                                <ul>
                                    <li><h5>Marriage Certificate (4 copies)</h5></li>
                                </ul>

                                <b>Delayed</b>
                                <ul>
                                    <li>
                                        <h5>Marriage Certificate (4 copies)</h5>
                                    </li>

                                    <li>
                                        <h5>Sworn Statement of the applicant</h5>
                                    </li>
                                </ul>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-4 -->

                <div class="col-lg-12">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h4>REGISTRATION OF CERTIFICATE OF DEATH</h4>
                        </div>
                        <div class="panel-body" style="line-height: 2; text-align: justify;">
                            <p>
                                <b>Timely</b>
                                <ul>
                                    <li><h5>Death Certificate</h5>(Issued by the local health authority)</li>
                                </ul>

                                <b>Delayed</b>
                                <ul>
                                    <li>
                                        <h5>Certificate of Death (4 copies)</h5>
                                    </li>
                                    
                                    <li>
                                        <h5>Affidavit for Delayed Registration</h5>

                                        <ul>
                                            <li>
                                                (Shall be executed by the hospital or clinic administrator if the person died in a hospital, clinic or similar institution, or by the attendant at death if the person died elsewhere)
                                            </li>
                                        </ul>
                                    </li>
                                    
                                    <li>
                                        <h5>Authenticated Certificate of Burial, Cremation, or other means of corpse disposal</h5>
                                    </li>
                                    
                                    <li>
                                        <h5>Approval for Registration by the health officer in the box provided in the Certificate of Death (50a)</h5>
                                    </li>
                                </ul>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-4 -->
</div>
<!-- End of page-wrapper -->
@endsection

@section('footer')
    @parent

    
@endsection
