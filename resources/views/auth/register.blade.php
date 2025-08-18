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
                <form action="#" method="post" class="p-2">
                    @csrf
                    @method('PUT')
                    <div class="row">


                        <div class="col-md-4">
                            <label for="email">Name</label>
                            <input type="text" class="form-control" name="name" value="" required />
                        </div>
                        <div class="col-4">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" value="" required />
                        </div>
                        <div class="col-4">
                            <label for="email">Mobile</label>
                            <input type="number" class="form-control" name="mobile" value="" required />
                        </div>
                        <div class="col-4">
                            <label for="email">Login Name</label>
                            <input type="text" class="form-control" name="userName" value="" required />
                        </div>
                        <div class="col-4">
                            <label for="email">Login Password</label>
                            <input type="password" class="form-control" name="password" />
                        </div>




                        <div class="col-md-4">
                            <label for="branch">Choose Branch</label>
                            <select class="form-control" name="branch" required>
                                <option value="">Choose Branch</option>
                                <option value="Delhi" >Delhi</option>
                                <option value="Noida" >Noida</option>
                                <option value="Gurugram" >Gurugram</option>
                                <option value="Bangalore">Bangalore</option>
                                <option value="Hyderabad" >Hyderabad</option>
                                <option value="Mumbai" >Mumbai</option>
                                <option value="Pune" >Pune</option>
                                <option value="Chennai" >Chennai</option>
                            </select>
                        </div>




                        <div class="col-md-4">
                            <label for="role">Choose Role</label>
                            <select class="form-control" name="role" required>
                                <option value="">Choose Role</option>
                                <option value="Calling Team" >Calling Team</option>
                                <option value="Credit Team" >Credit Team</option>
                                <option value="Collection Team" >Collection Team</option>
                                <option value="Admin" >Admin</option>
                                <option value="TL Calling Team" >TL Calling Team</option>
                                <option value="Disbursal Team" >Disbursal Team</option>
                                <option value="PD Team" >PD Team</option>
                                <option value="Accounts">Accounts</option>
                                <option value="MIS Team" >MIS Team</option>
                                <option value="CA" >CA</option>
                            </select>
                        </div>



                        <div class="col-md-4">
                            <label for="status">Choose Status</label>
                            <select class="form-control" name="status" required>
                                <option value="">Choose Status</option>
                                <option value="Active">Active</option>
                                <option value="In Active">In Active</option>
                            </select>
                        </div>

                    </div>



                    <div class="col-md-12" style="margin-top:12px; margin-bottom:12px;">
                        <h4>Access accessmission </h4>
                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="" value="" > Check All </span>
                    </div>
                    <div class="col-md-12" style="margin-top:12px; margin-bottom:12px;">
                        <h4> Managemanent Menu </h4>
                       

                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="access[]" value="management"
                                > Management Menu
                        </span>

                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="access[]" value="management-add" > Add Profile </span>

                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="access[]" value="management-edit" > Edit Profile </span>
                    </div>



                    <div class="col-md-12" style="margin-top:12px; margin-bottom:12px;">
                        <h4> Customer Menu </h4>
                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="access[]" value="customer" > Customer Menu </span>

                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="access[]" value="customer-list" > Customer List </span>

                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="access[]" value="customer-edit" > Customer Edit </span>

                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="access[]" value="contact" > Conatct Display</span>

                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="access[]" value="customer-list-mobile" > Customer Phone No. </span>


                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="access[]" value="customer-list-email" > Customer Email ID </span>


                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="access[]" value="customer-list-pan" > Customer Pan No. </span>
                    </div>
                    <div class="col-md-12" style="margin-top:12px; margin-bottom:12px;">
                        <h4> Leads Menu </h4>


                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="access[]" value="leads" > Leads Menu </span>


                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="access[]" value="fresh-lead" > Fresh Lead </span>


                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="access[]" value="callback" > Callback </span>


                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="access[]" value="not-interested" > Not Interested </span>


                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="access[]" value="no-answer" > No Answer </span>


                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="access[]" value="duplicate" > Duplicate </span>


                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="access[]" value="dnc" > DNC </span>


                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="access[]" value="incomplete-documents" > Incomplete Documents </span>


                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="access[]" value="interested" > Interested </span>


                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="access[]" value="document-received" > Document Received </span>


                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="access[]" value="blacklisted" > Blacklisted </span>


                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="access[]" value="send-back" > Send back </span>


                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="access[]" value="whatsapp-" > whatsapp </span>


                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="access[]" value="no-credit-card" > No credit card </span>


                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="access[]" value="in-sufficient-banking" > In sufficient banking </span>


                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="access[]" value="filter-data" > Filter data </span>


                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="access[]" value="rejected-case" > Rejected Case </span>


                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="access[]" value="rejected-case" > Jammu data </span>


                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="access[]" value="rejected-case" > NTC </span>


                    </div>



                    <div class="col-md-12" style="margin-top:12px; margin-bottom:12px;">
                        <h4> Lead Profile Details </h4>

                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="access[]" value="loan-apply-view" > View Loan Apply Details </span>

                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="access[]" value="address-add" > Address add Details </span>

                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="access[]" value="address-view" > Address View Details </span>

                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="access[]" value="emp-add" > Employment add Details </span>

                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="access[]" value="emp-view" > Employment View Details </span>


                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="access[]" value="ref-add" > Reference add Details </span>

                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="access[]" value="ref-view" > Reference View Details </span>


                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="access[]" value="credit-add" > Credit add Details </span>



                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="access[]" value="credit-edit" > Credit Edit Details </span>


                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="access[]" value="credit-change-status" > Credit Change Status </span>

                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="access[]" value="credit-view" > Credit View Details </span>


                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="access[]" value="disbursal-add" > Bank add Details </span>


                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="access[]" value="bank-update-rejected" > Bank update Reject </span>

                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="access[]" value="disbursal-view" > Disbursal View Details </span>


                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="access[]" value="disbursal-update" > Disbursal Update Details </span>


                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="access[]" value="disbursal-update-razorpay1" >Update Bank Account </span>


                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="access[]" value="disbursal-update-pay-fail" > Disbursed Amount Payouts Razorpay Failed update </span>


                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="access[]" value="loan-view" > View Loan Details </span>


                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="access[]" value="remark-add" > Remark add Details </span>

                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="access[]" value="remark-view" > Remark View Details </span>


                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="access[]" value="collection-add" > Collection add Details </span>

                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="access[]" value="collection-view" > Collection View Details </span>




                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="access[]" value="document-add" > Document add Details </span>

                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="access[]" value="document-view" > Document View Details </span>




                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="access[]" value="em-view" > E-mandate View </span>

                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="access[]" value="em-ch" > E-mandate Charge </span>



                    </div>



                    <div class="col-md-12" style="margin-top:12px; margin-bottom:12px;">
                        <h4> Reports </h4>
                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="access[]" value="reports" > Reports Menu </span>

                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="access[]" value="disbursed-data" > Disbursed Data</span>

                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="access[]" value="collection-data" > Collection Data </span>

                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="access[]" value="total-lead-data" > Total Lead Data</span>


                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="access[]" value="emp-reports" > Employee Reports</span>


                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="access[]" value="collection-comp-reports" > Collection Reports</span>


                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="access[]" value="collection-reports-disp-disb" > Collection Reports display disbursed</span>

                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="access[]" value="all-comp-reports" > All Lead Reports</span>


                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="access[]" value="all-comp-reports-down" > All Lead Reports Download</span>


                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="access[]" value="lead-t-reports-down" > Lead Type Reports Download</span>


                    </div>



                    <div class="col-md-12" style="margin-top:12px; margin-bottom:12px;">

                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="access[]" value="follow-up" > Follow up Menu </span>

                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="access[]" value="collection-bucket" > Collection Bucket Menu </span>


                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="access[]" value="collection-manager" > Collection Manager</span>




                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="access[]" value="col_ref" > Collection Refund </span>


                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="access[]" value="online-manager" > Online Payment Details</span>







                        <h4> Dashboard Report </h4>

                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="access[]" value="tow_r" > Today city Report </span>


                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="access[]" value="monw_r" > Monthly Report </span>



                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="access[]" value="leadw_r" > lead Report </span>


                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="access[]" value="call_r" > Call Report </span>

                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="access[]" value="senction_r" > Sanction Report
                        </span>

                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="access[]" value="credit_r" > Credit Report </span>





                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="access[]" value="coll_r" > Collection Report

                        </span>


                        <h4> Other Report </h4>





                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="access[]" value="penny_drop" > Penny Drop </span>


                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="access[]" value="bulk_alo1" > Bulk Lead Allocation </span>




                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="access[]" value="da_emp_re1" > Dashboard employee reports </span>


                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="access[]" value="app_m" > APP Logs </span>


                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="access[]" value="upload_lead" > Bulk Upload Lead </span>



                        <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="access[]" value="black_cust" > blacklisted Customer </span>
                        <?php /*?> <span style="margin-right:20px;margin-bottom:20px;"> <input type="checkbox" name="access[]" value="asaca" <?php if(in_array('asaca',$access)){ echo "checked";}?>> After Settlement Add collection amount  </span><?php */ ?>


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