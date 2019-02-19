<!DOCTYPE html>
<html>
    <head>
        <title>User list - PDF</title>
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <a href="{{ route('generate-pdf',['download'=>'pdf']) }}">Download PDF</a>
            <div class="row">
                <div class="col-lg-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3>Registrant's Information</h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <input type="hidden" name="category" value="birth">
                                    <input type="hidden" name="purpose" value="BIRTH REGISTRATION">

                                    <div class="form-group">
                                        <label>REFERENCE ID</label>
                                        <input class="form-control" type="text" name="first_name" readonly value="{{ $details->ref_id }}">
                                    </div>
                                    <div class="form-group">
                                        <label>PURPOSE</label>
                                        <input class="form-control" type="text" name="first_name" readonly value="{{ $details->purpose }}">
                                    </div>
                                    <div class="form-group">
                                        <label>DATE</label>
                                        <input class="form-control" type="text" name="middle_name" readonly value="({{ date('l', strtotime($details->appt_date)) }}) {{ date('F j, Y', strtotime($details->appt_date)) }}">
                                    </div>
                                    <div class="form-group">
                                        <label>TIME</label>
                                        <input class="form-control" type="text" name="last_name" readonly value="{{ $details->appt_time}}">
                                    </div>
                                    
                                    
                                </div>  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                @if( $details->purpose == 'MARRIAGE CERTIFICATE' || $details->purpose == 'CTC OF MARRIAGE CERTIFICATE')
                        <div class="col-lg-8">
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <h5>REGISTRATION OF CERTIFICATE OF MARRIAGE</h5>
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
                @endif

                @if( $details->purpose == 'BIRTH CERTIFICATE' || $details->purpose == 'CTC OF BIRTH CERTIFICATE')
                    <div class="col-lg-12">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h5>REGISTRATION OF BIRTH CERTIFICATE</h5>
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

                                        @if( $age >= 0 && $age <= 6)
                                        <li>
                                            <!-- <h5>If applicant is 0-6 years of age</h5> -->
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
                                        @endif

                                        @if( $age >= 13 && $age <= 17)
                                        <li>
                                            <!-- <h5>If applicant is 13-17 years of age</h5> -->
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
                                        @endif

                                        @if( $age >= 18 && $age <= 28)
                                        <li>
                                            <!-- <h5>If applicant is 18-28 years of age</h5> -->
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
                                        @endif

                                        @if( $age >= 28 )
                                        <li>
                                            <!-- <h5>If applicant is 28 years and above</h5> -->
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
                                        @endif

                                        
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
            @endif


            @if( $details->purpose == 'DEATH CERTIFICATE' || $details->purpose == 'CTC OF DEATH CERTIFICATE')
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
        @endif

        @if( $details->purpose == 'CORRECTION OF CLERICAL ERROR IN MARRIAGE CERTIFICATE')
                <div class="col-lg-12">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h4>CORRECTION OF CLERICAL ERROR IN MARRIAGE CERTIFICATE</h4>
                        </div>
                        <div class="panel-body" style="line-height: 2; text-align: justify;">
                            <p>
                                <ul>
                                    <li>
                                        <h5>Marriage Certificate w/ error (1 PSA & Certified True Copy)</h5>
                                    </li>
                                    
                                    <li>
                                        <h5>Birth Certificate – Husband / Wife</h5>
                                    </li>
                                    
                                    <li>
                                        <h5>Baptismal Certificate – Husband / Wife</h5>
                                    </li>
                                    
                                    <li>
                                        <h5>School Records – Husband / Wife</h5>
                                    </li>

                                    <li>
                                        <h5>Voter’s Certification – Husband / Wife</h5>
                                    </li>

                                    <li>
                                        <h5>Death Certificate – Mother / Father / Siblings</h5>
                                    </li>

                                    <li>
                                        <h5>Bank Passbook</h5>
                                    </li>

                                    <li>
                                        <h5>Passport</h5>
                                    </li>

                                    <li>
                                        <h5>GSIS / SSS-E1 / E4 / PhilhealthMDR – Husband / Wife</h5>
                                    </li>

                                    <li>
                                        <h5>Marriage Contract - Parents</h5>
                                    </li>

                                    <li>
                                        <h5>Latest Community Tax Cert. / Cedula</h5>
                                    </li>

                                    <li>
                                        <h5>Valid ID – Petitioner (Passport, Driver’s License, SSS, Unified Multi-Purpose ID, BIR ID, etc,.)</h5>
                                    </li>

                                    <li>
                                        <h5>Special Power of Attorney</h5>
                                    </li>
                                </ul>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-4 -->
        @endif


        @if( $details->purpose == 'CHANGE OF FIRST NAME')
                <div class="col-lg-12">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h4>CHANGE OF FIRST NAME</h4>
                        </div>
                        <div class="panel-body" style="line-height: 2; text-align: justify;">
                            <p>
                                <ul>
                                    <li>
                                        <h5>Birth Certificate w/ error (1 PSA Copy & 3 Certified True Copies)</h5>
                                    </li>
                                    
                                    <li>
                                        <h5>Baptismal Certificate</h5>
                                    </li>
                                    
                                    <li>
                                        <h5>Medical Records</h5>
                                    </li>
                                    
                                    <li>
                                        <h5>School Records</h5>
                                    </li>

                                    <li>
                                        <h5>Voter’s Registration Record / Certification</h5>
                                    </li>

                                    <li>
                                        <h5>Police Clearance (purpose: change of name)</h5>
                                    </li>

                                    <li>
                                        <h5>NBI Clearance with A.K.A (purpose: change of name)</h5>
                                    </li>

                                    <li>
                                        <h5>Certificate of Employment</h5>
                                    </li>

                                    <li>
                                        <h5>if not employed: Affidavit of Non-Employment</h5>
                                    </li>

                                    <li>
                                        <h5>Marriage Contract</h5>
                                    </li>

                                    <li>
                                        <h5>GSIS / SSS-E1 / E4 / Philhealth MDR</h5>
                                    </li>

                                    <li>
                                        <h5>Bank Passbook</h5>
                                    </li>

                                    <li>
                                        <h5>Passbook</h5>
                                    </li>

                                    <li>
                                        <h5>Community Tax Cert. / Cedula</h5>
                                    </li>

                                    <li>
                                        <h5>Valid ID – Petitioner</h5>
                                    </li>

                                    <li>
                                        <h5>Special Power of Attorney with Valid ID</h5>
                                    </li>
                                </ul>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-4 -->
        @endif

        @if( $details->purpose == 'CORRECTION OF CLERICAL ERROR')
                <div class="col-lg-12">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h4>CORRECTION OF CLERICAL ERROR</h4>
                        </div>
                        <div class="panel-body" style="line-height: 2; text-align: justify;">
                            <p>
                                <ul>
                                    <li>
                                        <h5>Birth Certificate w/ error (1 PSA Copy & 3 Certified True Copies)</h5>
                                    </li>
                                    
                                    <li>
                                        <h5>Certificate of Baptismal</h5>
                                    </li>
                                    
                                    <li>
                                        <h5>Medical Records</h5>
                                    </li>
                                    
                                    <li>
                                        <h5>School Records</h5>
                                    </li>

                                    <li>
                                        <h5>Voter’s Registration / Certification</h5>
                                    </li>

                                    <li>
                                        <h5>Birth Certificate – Mother / Father</h5>
                                    </li>

                                    <li>
                                        <h5>Marriage Contract (Document owner / Parents)</h5>
                                    </li>

                                    <li>
                                        <h5>GSIS / SSS-E1 / E4 / Philhealth</h5>
                                    </li>

                                    <li>
                                        <h5>Bank Passbook</h5>
                                    </li>

                                    <li>
                                        <h5>Death Certificate – Mother / Father</h5>
                                    </li>

                                    <li>
                                        <h5>Passport</h5>
                                    </li>

                                    <li>
                                        <h5>Latest Community Tax Cert. / Cedula</h5>
                                    </li>

                                    <li>
                                        <h5>Valid ID – Petitioner(Passport, Driver’s License, SSS, Unified Multi-Purpose ID, BIR ID)</h5>
                                    </li>

                                    <li>
                                        <h5>Special Power of Attorney</h5>
                                    </li>
                                </ul>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-4 -->
        @endif

        @if( $details->purpose == 'CORRECTION OF GENDER')
                <div class="col-lg-12">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h4>CORRECTION OF GENDER</h4>
                        </div>
                        <div class="panel-body" style="line-height: 2; text-align: justify;">
                            <p>
                                <ul>
                                    <li>
                                        <h5>Child's Birth Certificate w/ error (1 PSA Copy & 3 Certified True Copies)</h5>
                                    </li>
                                    
                                    <li>
                                        <h5>Certificate of Baptismal</h5>
                                    </li>
                                    
                                    <li>
                                        <h5>Medical Records (Earliest)</h5>
                                    </li>
                                    
                                    <li>
                                        <h5>Earliest School Records (Elementary: Form 137-E)</h5>
                                    </li>

                                    <li>
                                        <h5>Voter’s Registration / Certification</h5>
                                    </li>

                                    <li>
                                        <h5>Police Clearance (purpose: correction of entry)</h5>
                                    </li>

                                    <li>
                                        <h5>NBI Clearance with A.K.A (purpose: other requirement)</h5>
                                    </li>

                                    <li>
                                        <h5>Certificate of Employment</h5>
                                    </li>

                                    <li>
                                        <h5>if not employed: Affidavit of Non-Employment</h5>
                                    </li>

                                    <li>
                                        <h5>MEDICAL CERTIFICATE – City Health Office</h5>
                                    </li>

                                    <li>
                                        <h5>GSIS Membership Data Record/ SSS-E1 Form</h5>
                                    </li>

                                    <li>
                                        <h5>Marriage Contract</h5>
                                    </li>

                                    <li>
                                        <h5>Valid ID – Petitioner (Passport, Driver’s License, SSS, Unified Multi-Purpose ID, BIR ID)</h5>
                                    </li>

                                    <li>
                                        <h5>Certificate of Appearance (If minor, mentally challenged) For LCRO issuance</h5>
                                    </li>

                                </ul>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-4 -->
        @endif


        @if( $details->purpose == 'CORRECTION OF ENTRY IN THE DAY AND/OR MONTH IN THE DATE OF BIRTH')
                <div class="col-lg-12">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h4>CORRECTION OF ENTRY IN THE DAY AND/OR MONTH IN THE DATE OF BIRTH</h4>
                        </div>
                        <div class="panel-body" style="line-height: 2; text-align: justify;">
                            <p>
                                <ul>
                                    <li>
                                        <h5>Birth Certificate w/ error (1 PSA Copy & 3 Certified True Copies)</h5>
                                    </li>
                                    
                                    <li>
                                        <h5>Baptismal Certificate</h5>
                                    </li>
                                    
                                    <li>
                                        <h5>Medical Records</h5>
                                    </li>
                                    
                                    <li>
                                        <h5>School Records</h5>
                                    </li>

                                    <li>
                                        <h5>Voter’s Registration Record / Certification</h5>
                                    </li>

                                    <li>
                                        <h5>Police Clearance (purpose: change of name)</h5>
                                    </li>

                                    <li>
                                        <h5>NBI Clearance with A.K.A (purpose: change of name)</h5>
                                    </li>

                                    <li>
                                        <h5>Certificate of Employment</h5>
                                    </li>

                                    <li>
                                        <h5>if not employed: Affidavit of Non-Employment</h5>
                                    </li>

                                    <li>
                                        <h5>Marriage Contract</h5>
                                    </li>

                                    <li>
                                        <h5>GSIS / SSS-E1 / E4 / Philhealth MDR</h5>
                                    </li>

                                    <li>
                                        <h5>Bank Passbook</h5>
                                    </li>

                                    <li>
                                        <h5>Passbook</h5>
                                    </li>

                                    <li>
                                        <h5>Community Tax Cert. / Cedula</h5>
                                    </li>

                                    <li>
                                        <h5>Valid ID – Petitioner</h5>
                                    </li>

                                    <li>
                                        <h5>Special Power of Attorney with Valid ID</h5>
                                    </li>
                                </ul>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-4 -->
        @endif

        @if( $details->purpose == 'AUSF')
                <div class="col-lg-12">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h4>AUSF</h4>
                        </div>
                        <div class="panel-body" style="line-height: 2; text-align: justify;">
                            <p>
                                <ul>
                                    <li>
                                        <h5>BIRTH CERTIFICATE OF CHILD (PSA-NSO COPY and CERTIFIED TRUE COPY)</h5>
                                    </li>
                                    
                                    <li>
                                        <h5>Duly Accomplished and Notarized (TYPEWRITTEN) AFFIDAVIT TO USE THE SURNAME OF THE FATHER</h5>
                                    </li>
                                    
                                    <li>
                                        <h5>Duly Accomplished and Notarized (TYPEWRITTEN) AFFIDAVIT OF ACKNOWLEDGEMENT if the father’s name does not appear at the birth certificate of the child</h5>
                                    </li>
                                    
                                    <li>
                                        <h5>Duly Accomplished and Notarized (TYPEWRITTEN) CONSENT OF THE CHILD TO USE THE SURNAME OF THE FATHER (if the child is 18 yrs. old and above).</h5>
                                    </li>

                                    
                                </ul>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-4 -->
        @endif

        @if( $details->purpose == 'LEGITIMATION')
                <div class="col-lg-12">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h4>LEGITIMATION</h4>
                        </div>
                        <div class="panel-body" style="line-height: 2; text-align: justify;">
                            <p>
                                <ul>
                                    <li>
                                        <h5>BIRTH CERTIFICATE OF CHILD (PSA-NSO COPY and CERTIFIED TRUE COPY)</h5>
                                    </li>
                                    
                                    <li>
                                        <h5>Duly Accomplished and Notarized (TYPEWRITTEN) AFFIDAVIT TO USE THE SURNAME OF THE FATHER</h5>
                                    </li>
                                    
                                    <li>
                                        <h5>Duly Accomplished and Notarized (TYPEWRITTEN) AFFIDAVIT OF ACKNOWLEDGEMENT if the father’s name does not appear at the birth certificate of the child</h5>
                                    </li>
                                    
                                    <li>
                                        <h5>Duly Accomplished and Notarized (TYPEWRITTEN) CONSENT OF THE CHILD TO USE THE SURNAME OF THE FATHER (if the child is 18 yrs. old and above).</h5>
                                    </li>

                                    
                                </ul>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-4 -->
        @endif

            </div>
        </div>
    </body>
</html>