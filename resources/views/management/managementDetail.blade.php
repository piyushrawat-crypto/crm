@extends('../layouts.app')
@section('content')

<div class="col-md-12">
    <div class="white_shd full margin_bottom_30">
        <div class="full graph_head">
            <div class="heading1 margin_0">
                <h2>Update Customer</h2>
            </div>
        </div>



        <div class="table_section padding_infor_info">
            <div class="table-responsive-sm">
                <form action="{{route('updateProfile')}}" method="post" class="p-2">
                    @csrf
                    @method('PUT')
                    <div class="row">


                        <div class="col-md-4">
                            <label for="email">Name</label>
                            <input type="text" class="form-control" name="name" value="{{$user->name}}" required />
                        </div>
                        <div class="col-4">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" value="{{$user->email}}" required />
                        </div>
                        <div class="col-4">
                            <label for="email">Mobile</label>
                            <input type="number" class="form-control" name="mobile" value="{{$user->mobile}}" required />
                        </div>
                        <div class="col-4">
                            <label for="email">Login Name</label>
                            <input type="text" class="form-control" name="userName" value="{{$user->userName}}" required />
                        </div>
                        <div class="col-4">
                            <label for="email">Login Password</label>
                            <input type="password" class="form-control" name="password" />
                        </div>




                        <div class="col-md-4">
                            <label for="branch">Choose Branch</label>
                            <select class="form-control" name="branch" required>
                                <option value="">Choose Branch</option>
                                <option value="Delhi" {{ $user->branch == 'Delhi' ? 'selected' : '' }}>Delhi</option>
                                <option value="Noida" {{ $user->branch == 'Noida' ? 'selected' : '' }}>Noida</option>
                                <option value="Gurugram" {{ $user->branch == 'Gurugram' ? 'selected' : '' }}>Gurugram</option>
                                <option value="Bangalore" {{ $user->branch == 'Bangalore' ? 'selected' : '' }}>Bangalore</option>
                                <option value="Hyderabad" {{ $user->branch == 'Hyderabad' ? 'selected' : '' }}>Hyderabad</option>
                                <option value="Mumbai" {{ $user->branch == 'Mumbai' ? 'selected' : '' }}>Mumbai</option>
                                <option value="Pune" {{ $user->branch == 'Pune' ? 'selected' : '' }}>Pune</option>
                                <option value="Chennai" {{ $user->branch == 'Chennai' ? 'selected' : '' }}>Chennai</option>
                            </select>
                        </div>




                        <div class="col-md-4">
                            <label for="role">Choose Role</label>
                            <select class="form-control" name="role" required>
                                <option value="">Choose Role</option>
                                <option value="Calling Team" {{ $user->role == 'Calling Team' ? 'selected' : '' }}>Calling Team</option>
                                <option value="Credit Team" {{ $user->role == 'Credit Team' ? 'selected' : '' }}>Credit Team</option>
                                <option value="Collection Team" {{ $user->role == 'Collection Team' ? 'selected' : '' }}>Collection Team</option>
                                <option value="Admin" {{ $user->role == 'Admin' ? 'selected' : '' }}>Admin</option>
                                <option value="TL Calling Team" {{ $user->role == 'TL Calling Team' ? 'selected' : '' }}>TL Calling Team</option>
                                <option value="Disbursal Team" {{ $user->role == 'Disbursal Team' ? 'selected' : '' }}>Disbursal Team</option>
                                <option value="PD Team" {{ $user->role == 'PD Team' ? 'selected' : '' }}>PD Team</option>
                                <option value="Accounts" {{ $user->role == 'Accounts' ? 'selected' : '' }}>Accounts</option>
                                <option value="MIS Team" {{ $user->role == 'MIS Team' ? 'selected' : '' }}>MIS Team</option>
                                <option value="CA" {{ $user->role == 'CA' ? 'selected' : '' }}>CA</option>
                            </select>
                        </div>



                        <div class="col-md-4">
                            <label for="status">Choose Status</label>
                            <select class="form-control" name="status" required>
                                <option value="">Choose Status</option>
                                <option value="Active" {{ $user->status == 'Active' ? 'selected' : '' }}>Active</option>
                                <option value="In Active" {{ $user->status == 'In Active' ? 'selected' : '' }}>In Active</option>
                            </select>
                        </div>

                    </div>



                    <div class="col-md-12" style="margin-top:12px; margin-bottom:12px;">
                        <h4>Access Permission </h4>
                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="" value="" > Check All </span>
                    </div>
                    <div class="col-md-12" style="margin-top:12px; margin-bottom:12px;">
                        <h4> Managemanent Menu </h4>
                        @php
                        $access = json_decode($user->access ?? '[]', true);
                       
                        @endphp

                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="per[]" value="management"
                                {{ in_array('management', $access) ? 'checked' : '' }}> Management Menu
                        </span>

                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="per[]" value="management-add" {{ in_array('management', $access) ? 'checked' : '' }}> Add Profile </span>

                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="per[]" value="management-edit" {{ in_array('management', $access) ? 'checked' : '' }}> Edit Profile </span>
                    </div>



                    <div class="col-md-12" style="margin-top:12px; margin-bottom:12px;">
                        <h4> Customer Menu </h4>
                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="per[]" value="customer" {{ in_array('customer', $access) ? 'checked' : '' }}> Customer Menu </span>

                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="per[]" value="customer-list" {{ in_array('customer-lis', $access) ? 'checked' : '' }}> Customer List </span>

                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="per[]" value="customer-edit" {{ in_array('customer-edit', $access) ? 'checked' : '' }}> Customer Edit </span>

                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="per[]" value="contact" {{ in_array('contact', $access) ? 'checked' : '' }}> Conatct Display</span>

                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="per[]" value="customer-list-mobile" {{ in_array('customer-list-mobile', $access) ? 'checked' : '' }}> Customer Phone No. </span>


                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="per[]" value="customer-list-email" {{ in_array('customer-list-email', $access) ? 'checked' : '' }}> Customer Email ID </span>


                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="per[]" value="customer-list-pan" {{ in_array('customer-list-pan', $access) ? 'checked' : '' }}> Customer Pan No. </span>
                    </div>
                    <div class="col-md-12" style="margin-top:12px; margin-bottom:12px;">
                        <h4> Leads Menu </h4>


                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="per[]" value="leads" {{ in_array('leads', $access) ? 'checked' : '' }}> Leads Menu </span>


                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="per[]" value="fresh-lead" {{ in_array('fresh-lead', $access) ? 'checked' : '' }}> Fresh Lead </span>


                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="per[]" value="callback" {{ in_array('callback', $access) ? 'checked' : '' }}> Callback </span>


                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="per[]" value="not-interested" {{ in_array('not-interested', $access) ? 'checked' : '' }}> Not Interested </span>


                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="per[]" value="no-answer" {{ in_array('no-answer', $access) ? 'checked' : '' }}> No Answer </span>


                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="per[]" value="duplicate" {{ in_array('duplicate', $access) ? 'checked' : '' }}> Duplicate </span>


                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="per[]" value="dnc" {{ in_array('dnc', $access) ? 'checked' : '' }}> DNC </span>


                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="per[]" value="incomplete-documents" {{ in_array('incomplete-documents', $access) ? 'checked' : '' }}> Incomplete Documents </span>


                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="per[]" value="interested" {{ in_array('interested', $access) ? 'checked' : '' }}> Interested </span>


                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="per[]" value="document-received" {{ in_array('document-received', $access) ? 'checked' : '' }}> Document Received </span>


                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="per[]" value="blacklisted" {{ in_array('blacklisted', $access) ? 'checked' : '' }}> Blacklisted </span>


                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="per[]" value="send-back" {{ in_array('send-back', $access) ? 'checked' : '' }}> Send back </span>


                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="per[]" value="whatsapp-" {{ in_array('whatsapp-', $access) ? 'checked' : '' }}> whatsapp </span>


                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="per[]" value="no-credit-card" {{ in_array('no-credit-card', $access) ? 'checked' : '' }}> No credit card </span>


                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="per[]" value="in-sufficient-banking" {{ in_array('in-sufficient-banking', $access) ? 'checked' : '' }}> In sufficient banking </span>


                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="per[]" value="filter-data" {{ in_array('filter-data', $access) ? 'checked' : '' }}> Filter data </span>


                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="per[]" value="rejected-case" {{ in_array('rejected-case', $access) ? 'checked' : '' }}> Rejected Case </span>


                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="per[]" value="rejected-case" {{ in_array('rejected-case', $access) ? 'checked' : '' }}> Jammu data </span>


                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="per[]" value="rejected-case" {{ in_array('rejected-case', $access) ? 'checked' : '' }}> NTC </span>


                    </div>



                    <div class="col-md-12" style="margin-top:12px; margin-bottom:12px;">
                        <h4> Lead Profile Details </h4>

                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="per[]" value="loan-apply-view" {{ in_array('loan-apply-view', $access) ? 'checked' : '' }}> View Loan Apply Details </span>

                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="per[]" value="address-add" {{ in_array('address-add', $access) ? 'checked' : '' }}> Address add Details </span>

                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="per[]" value="address-view" {{ in_array('address-view', $access) ? 'checked' : '' }}> Address View Details </span>

                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="per[]" value="emp-add" {{ in_array('emp-add', $access) ? 'checked' : '' }}> Employment add Details </span>

                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="per[]" value="emp-view" {{ in_array('emp-view', $access) ? 'checked' : '' }}> Employment View Details </span>


                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="per[]" value="ref-add" {{ in_array('ref-add', $access) ? 'checked' : '' }}> Reference add Details </span>

                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="per[]" value="ref-view" {{ in_array('ref-view', $access) ? 'checked' : '' }}> Reference View Details </span>


                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="per[]" value="credit-add" {{ in_array('credit-add', $access) ? 'checked' : '' }}> Credit add Details </span>



                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="per[]" value="credit-edit" {{ in_array('credit-edit', $access) ? 'checked' : '' }}> Credit Edit Details </span>


                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="per[]" value="credit-change-status" {{ in_array('credit-change-status', $access) ? 'checked' : '' }}> Credit Change Status </span>

                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="per[]" value="credit-view" {{ in_array('credit-view', $access) ? 'checked' : '' }}> Credit View Details </span>


                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="per[]" value="disbursal-add" {{ in_array('disbursal-add', $access) ? 'checked' : '' }}> Bank add Details </span>


                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="per[]" value="bank-update-rejected" {{ in_array('bank-update-rejected', $access) ? 'checked' : '' }}> Bank update Reject </span>

                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="per[]" value="disbursal-view" {{ in_array('disbursal-view', $access) ? 'checked' : '' }}> Disbursal View Details </span>


                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="per[]" value="disbursal-update" {{ in_array('disbursal-update', $access) ? 'checked' : '' }}> Disbursal Update Details </span>


                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="per[]" value="disbursal-update-razorpay1" {{ in_array('disbursal-update-razorpay1', $access) ? 'checked' : '' }}>Update Bank Account </span>


                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="per[]" value="disbursal-update-pay-fail" {{ in_array('disbursal-update-pay-fail', $access) ? 'checked' : '' }}> Disbursed Amount Payouts Razorpay Failed update </span>


                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="per[]" value="loan-view" {{ in_array('loan-view', $access) ? 'checked' : '' }}> View Loan Details </span>


                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="per[]" value="remark-add" {{ in_array('remark-add', $access) ? 'checked' : '' }}> Remark add Details </span>

                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="per[]" value="remark-view" {{ in_array('remark-view', $access) ? 'checked' : '' }}> Remark View Details </span>


                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="per[]" value="collection-add" {{ in_array('collection-add', $access) ? 'checked' : '' }}> Collection add Details </span>

                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="per[]" value="collection-view" {{ in_array('collection-view', $access) ? 'checked' : '' }}> Collection View Details </span>




                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="per[]" value="document-add" {{ in_array('document-add', $access) ? 'checked' : '' }}> Document add Details </span>

                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="per[]" value="document-view" {{ in_array('document-view', $access) ? 'checked' : '' }}> Document View Details </span>




                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="per[]" value="em-view" {{ in_array('em-view', $access) ? 'checked' : '' }}> E-mandate View </span>

                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="per[]" value="em-ch" {{ in_array('em-ch', $access) ? 'checked' : '' }}> E-mandate Charge </span>



                    </div>



                    <div class="col-md-12" style="margin-top:12px; margin-bottom:12px;">
                        <h4> Reports </h4>
                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="per[]" value="reports" {{ in_array('reports', $access) ? 'checked' : '' }}> Reports Menu </span>

                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="per[]" value="disbursed-data" {{ in_array('disbursed-data', $access) ? 'checked' : '' }}> Disbursed Data</span>

                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="per[]" value="collection-data" {{ in_array('collection-data', $access) ? 'checked' : '' }}> Collection Data </span>

                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="per[]" value="total-lead-data" {{ in_array('total-lead-data', $access) ? 'checked' : '' }}> Total Lead Data</span>


                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="per[]" value="emp-reports" {{ in_array('emp-reports', $access) ? 'checked' : '' }}> Employee Reports</span>


                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="per[]" value="collection-comp-reports" {{ in_array('collection-comp-reports', $access) ? 'checked' : '' }}> Collection Reports</span>


                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="per[]" value="collection-reports-disp-disb" {{ in_array('collection-reports-disp-disb', $access) ? 'checked' : '' }}> Collection Reports display disbursed</span>

                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="per[]" value="all-comp-reports" {{ in_array('all-comp-reports', $access) ? 'checked' : '' }}> All Lead Reports</span>


                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="per[]" value="all-comp-reports-down" {{ in_array('all-comp-reports-down', $access) ? 'checked' : '' }}> All Lead Reports Download</span>


                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="per[]" value="lead-t-reports-down" {{ in_array('lead-t-reports-down', $access) ? 'checked' : '' }}> Lead Type Reports Download</span>


                    </div>



                    <div class="col-md-12" style="margin-top:12px; margin-bottom:12px;">

                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="per[]" value="follow-up" {{ in_array('follow-up', $access) ? 'checked' : '' }}> Follow up Menu </span>

                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="per[]" value="collection-bucket" {{ in_array('collection-bucket', $access) ? 'checked' : '' }}> Collection Bucket Menu </span>


                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="per[]" value="collection-manager" {{ in_array('collection-manager', $access) ? 'checked' : '' }}> Collection Manager</span>




                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="per[]" value="col_ref" {{ in_array('col_ref', $access) ? 'checked' : '' }}> Collection Refund </span>


                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="per[]" value="online-manager" {{ in_array('online-manager', $access) ? 'checked' : '' }}> Online Payment Details</span>







                        <h4> Dashboard Report </h4>

                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="per[]" value="tow_r" {{ in_array('tow_r', $access) ? 'checked' : '' }}> Today city Report </span>


                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="per[]" value="monw_r" {{ in_array('monw_r', $access) ? 'checked' : '' }}> Monthly Report </span>



                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="per[]" value="leadw_r" {{ in_array('leadw_r', $access) ? 'checked' : '' }}> lead Report </span>


                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="per[]" value="call_r" {{ in_array('call_r', $access) ? 'checked' : '' }}> Call Report </span>

                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="per[]" value="senction_r" {{ in_array('senction_r', $access) ? 'checked' : '' }}> Sanction Report
                        </span>

                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="per[]" value="credit_r" {{ in_array('credit_r', $access) ? 'checked' : '' }}> Credit Report </span>





                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="per[]" value="coll_r" {{ in_array('coll_r', $access) ? 'checked' : '' }}> Collection Report

                        </span>


                        <h4> Other Report </h4>





                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="per[]" value="penny_drop" {{ in_array('penny_drop', $access) ? 'checked' : '' }}> Penny Drop </span>


                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="per[]" value="bulk_alo1" {{ in_array('bulk_alo1', $access) ? 'checked' : '' }}> Bulk Lead Allocation </span>




                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="per[]" value="da_emp_re1" {{ in_array('da_emp_re1', $access) ? 'checked' : '' }}> Dashboard employee reports </span>


                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="per[]" value="app_m" {{ in_array('app_m', $access) ? 'checked' : '' }}> APP Logs </span>


                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="per[]" value="upload_lead" {{ in_array('upload_lead', $access) ? 'checked' : '' }}> Bulk Upload Lead </span>



                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="per[]" value="black_cust" {{ in_array('black_cust', $access) ? 'checked' : '' }}> blacklisted Customer </span>
                        <?php /*?> <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="per[]" value="asaca" <?php if(in_array('asaca',$per)){ echo "checked";}?>> After Settlement Add collection amount  </span><?php */ ?>


                    </div>


                    <div class="col-md-12">
                        <button type="submit" name="submit" class="btn cur-p btn-primary">Submit</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

@endsection