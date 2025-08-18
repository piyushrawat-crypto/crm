<div class="tab-content" id="nav-tabContent_2">
    <div class="row">
        <div class="col-lg-12" style="font-weight: bold;line-height: 27px; margin-left: 5px">Loan Apply Details
        </div>
    </div>
    <div class="row" style="margin-right:0px;margin-left:0px;">
        <div class="table-responsive">
            <table id="staffListing" class="table table-bordered">
                <tbody>
                    <tr>
                        <td scope="col">Loan purpose : -</td>
                        <td scope="col">Monthly Income : 25000.00</td>
                        <td scope="col">Loan Required : 20000.00</td>
                        <td scope="col">LeadID : 100064</td>
                    </tr>
                    <tr>
                        <td scope="col">City : Kanpur Nagar</td>
                        <td scope="col">State : Uttar Pradesh</td>
                        <td scope="col">Pincode : 209206</td>
                        <td scope="col">Loan Status : Interested - New Case
                        </td>
                    </tr>
                    <tr>
                        <td scope="col">Employee Type : Salaried</td>
                        <td scope="col">salary Mode : </td>
                        <td scope="col">Source : Personal Search</td>
                        <td scope="col">IP : 112.79.229.227</td>
                    </tr>
                    <tr>
                        <td scope="col">Product : </td>
                        <td scope="col">Created Date : 2024-05-20 15:20:33</td>
                        <td scope="col">Email Verification : <a href="panapi.php?lead_id=100064"><i class="fa fa-thumbs-down" style="color: red;font-size: 19px;"></i></a></td>
                        <td scope="col">Pan Verification :
                            <a href="emailapi.php?lead_id=100064"><i class="fa fa-thumbs-down" style="color: red;font-size: 19px;"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td scope="col">Cibil Score: 672 | <a target="_blank" href="https://dt0sanb7qakh9.cloudfront.net/cibil/71494-04082025163600-100064.html"><i class="fa fa-file" aria-hidden="true"></i></a> </td>
                        <td scope="col">Office Email Verification : <a href="alterEmailapi.php?lead_id=100064"><i class="fa fa-thumbs-down" style="color: red;font-size: 19px;"></i></a></td>
                        <td scope="col">Customer Duplicate : No</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="card card-primary card-outline" style="border-top: 3px solid #007bff;margin-bottom:20px;">
    <div class="row">
        <div class="col-lg-12" style="font-weight: bold;line-height: 27px; margin-left: 5px"><span>Address Details</span>
        </div>
    </div>
    <div class="row" style="margin-right:0px;margin-left:0px;">
        <div class="table-responsive" style="overflow: auto;
    max-height: 200px;">
            <table id="staffListing" class="table table-bordered ">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Address Type</th>
                        <th scope="col">Type</th>
                        <th scope="col">Address</th>
                        <th scope="col">City</th>
                        <th scope="col">State</th>
                        <th scope="col">Pincode</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td scope="col"> 1</td>
                        <td scope="col">- </td>
                        <td scope="col">Permanent Address </td>
                        <td scope="col">Dinesh Singh, , , Kanpur Nagar, Uttar Pradesh - 209206 </td>
                        <td scope="col">Kanpur Nagar</td>
                        <td scope="col">Uttar Pradesh</td>
                        <td scope="col">209206</td>
                        <td scope="col">
                            <a href="address.php?lead_id=100064&amp;addressID=365551"> <span class="text-danger">Ignore</span></a>
                        </td>
                    </tr>
                    <tr>
                        <td scope="col"> 2</td>
                        <td scope="col">- </td>
                        <td scope="col">Permanent Address </td>
                        <td scope="col">W/O: Mahesh Kumar, , dhani-daruwali, Sikar, Rajasthan - 332715 </td>
                        <td scope="col">Sikar</td>
                        <td scope="col">Rajasthan</td>
                        <td scope="col">332715</td>
                        <td scope="col">
                            <a href="address.php?lead_id=860272&amp;addressID=383877"> <span class="text-danger">Ignore</span></a>
                        </td>
                    </tr>
                </tbody>

            </table>



        </div>

    </div>




    <!-- The Modal -->
    <div class="modal fade" id="add-address">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Add Address</h4>
                    <button type="button" class="close" data-dismiss="modal">×</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <form action="#" method="post">
                        <input type="hidden" name="lead_id" value="100064">
                        <input type="hidden" name="customer_id" value="86153">
                        <input type="hidden" name="type_l" value="">
                        <div class="col-md-6">
                            <select id="inputType" class="form-control valid" name="add_type" required="">
                                <option value="">Choose Address Type</option>
                                <option value="Owned">Owned</option>
                                <option value="Rented">Rented</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <select id="inputType" class="form-control valid" name="type" required="">
                                <option value="">Choose Type</option>
                                <option value="Permanent Address">Permanent Address</option>
                                <option value="Current Address">Current Address</option>
                                <option value="Google address">Google address</option>
                            </select>
                        </div>
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="address" placeholder="Address" required="">
                        </div>
                        <div class="col-md-6">
                            <select id="inputState" class="form-control valid" name="state" required="">
                                <option value="">Choose State</option>
                                <option value="Andaman &amp; Nicobar Islands">Andaman &amp; Nicobar Islands</option>
                                <option value="Andhra Pradesh">Andhra Pradesh</option>
                                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                <option value="Assam">Assam</option>
                                <option value="Bihar">Bihar</option>
                                <option value="Chandigarh">Chandigarh</option>
                                <option value="Chhatisgarh">Chhatisgarh</option>
                                <option value="Dadra &amp; Nagar Haveli">Dadra &amp; Nagar Haveli</option>
                                <option value="Daman &amp; Diu">Daman &amp; Diu</option>
                                <option value="Delhi">Delhi</option>
                                <option value="Goa">Goa</option>
                                <option value="Gujarat">Gujarat</option>
                                <option value="Haryana">Haryana</option>
                                <option value="Himachal Pradesh">Himachal Pradesh</option>
                                <option value="Jammu &amp; Kashmir">Jammu &amp; Kashmir</option>
                                <option value="Jharkhand">Jharkhand</option>
                                <option value="Karnataka">Karnataka</option>
                                <option value="Kerala">Kerala</option>
                                <option value="Lakshadweep">Lakshadweep</option>
                                <option value="Madhya Pradesh">Madhya Pradesh</option>
                                <option value="Maharashtra">Maharashtra</option>
                                <option value="Manipur">Manipur</option>
                                <option value="Meghalaya">Meghalaya</option>
                                <option value="Mizoram">Mizoram</option>
                                <option value="Nagaland">Nagaland</option>
                                <option value="Orissa">Orissa</option>
                                <option value="Pondicherry">Pondicherry</option>
                                <option value="Punjab">Punjab</option>
                                <option value="Rajasthan">Rajasthan</option>
                                <option value="Sikkim">Sikkim</option>
                                <option value="Tamil Nadu">Tamil Nadu</option>
                                <option value="Telangana">Telangana</option>
                                <option value="Tripura">Tripura</option>
                                <option value="Uttar Pradesh">Uttar Pradesh</option>
                                <option value="Uttarakhand">Uttarakhand</option>
                                <option value="West Bengal">West Bengal</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="City" name="city" requried="">
                        </div>
                        <div class="col-md-6">
                            <input type="number" class="form-control" placeholder="Pin Code" name="pincode" requried="">
                        </div>
                        <div class="col-md-6">
                            <select id="inputStatus" class="form-control valid" name="status" requried="">
                                <option value="">Choose...</option>
                                <option value="Verified">Verified</option>
                                <option value="Not Verified">Not Verified</option>
                            </select>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" name="submit_add" class="btn cur-p btn-primary">Submit</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end model popup -->
</div>

<div class="card card-warning card-outline" style="border-top: 3px solid #ffc107;margin-bottom:20px;">
    <div class="row">
        <div class="col-lg-12" style="font-weight: bold;line-height: 27px; margin-left: 5px"><span>Employment Details</span>
        </div>
    </div>
    <div class="row" style="margin-right:0px;margin-left:0px;">
        <div class="table-responsive" style="overflow: auto;max-height: 200px;">
            <table id="staffListing" class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Company Name</th>
                        <th scope="col">Current Company Exp.</th>
                        <th scope="col">Total Exp.</th>
                        <th scope="col">Address</th>
                        <th scope="col">City</th>
                        <th scope="col">State</th>
                        <th scope="col">Pincode</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td scope="col">1</td>
                        <td scope="col">Meera Haritwal infra</td>
                        <td scope="col"></td>
                        <td scope="col"></td>
                        <td scope="col">sikar</td>
                        <td scope="col"></td>
                        <td scope="col"></td>
                        <td scope="col">0</td>
                        <td scope="col">Not Verified</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- The Modal -->
    <div class="modal fade" id="add-company">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Add Company</h4>
                    <button type="button" class="close" data-dismiss="modal">×</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <form action="#" method="post">
                        <input type="hidden" name="lead_id" value="860272">
                        <input type="hidden" name="customer_id" value="776810">
                        <input type="hidden" name="type_l" value="">
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="employerName" placeholder="Company Name" required="">
                        </div>
                        <div class="col-md-6">
                            <select id="inputTotalExperience" class="form-control" name="totalExperience" required="">
                                <option value="">Total Experience</option>
                                <option value="0-6 Months">0-6 Months</option>
                                <option value="7-12 Months">7-12 Months</option>
                                <option value="1-3 Years">1-3 Years</option>
                                <option value="4-6 Years">4-6 Years</option>
                                <option value="6-10 Years">6-10 Years</option>
                                <option value="Above 10 Years">Above 10 Years</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <select id="inputurrentCompany" class="form-control" name="currentCompany" required="">
                                <option value=""> Company Working</option>
                                <option value="0-6 Months">0-6 Months</option>
                                <option value="7-12 Months">7-12 Months</option>
                                <option value="1-3 Years">1-3 Years</option>
                                <option value="4-6 Years">4-6 Years</option>
                                <option value="6-10 Years">6-10 Years</option>
                                <option value="Above 10 Years">Above 10 Years</option>
                            </select>
                        </div>
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="address" placeholder="Company Address" required="">
                        </div>
                        <div class="col-md-6">
                            <select id="inputState" class="form-control valid" name="state" required="">
                                <option value="" data-value="">Choose State</option>
                                <option value="Andaman &amp; Nicobar Islands">Andaman &amp; Nicobar Islands</option>
                                <option value="Andhra Pradesh">Andhra Pradesh</option>
                                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                <option value="Assam">Assam</option>
                                <option value="Bihar">Bihar</option>
                                <option value="Chandigarh">Chandigarh</option>
                                <option value="Chhatisgarh">Chhatisgarh</option>
                                <option value="Dadra &amp; Nagar Haveli">Dadra &amp; Nagar Haveli</option>
                                <option value="Daman &amp; Diu">Daman &amp; Diu</option>
                                <option value="Delhi">Delhi</option>
                                <option value="Goa">Goa</option>
                                <option value="Gujarat">Gujarat</option>
                                <option value="Haryana">Haryana</option>
                                <option value="Himachal Pradesh">Himachal Pradesh</option>
                                <option value="Jammu &amp; Kashmir">Jammu &amp; Kashmir</option>
                                <option value="Jharkhand">Jharkhand</option>
                                <option value="Karnataka">Karnataka</option>
                                <option value="Kerala">Kerala</option>
                                <option value="Lakshadweep">Lakshadweep</option>
                                <option value="Madhya Pradesh">Madhya Pradesh</option>
                                <option value="Maharashtra">Maharashtra</option>
                                <option value="Manipur">Manipur</option>
                                <option value="Meghalaya">Meghalaya</option>
                                <option value="Mizoram">Mizoram</option>
                                <option value="Nagaland">Nagaland</option>
                                <option value="Orissa">Orissa</option>
                                <option value="Pondicherry">Pondicherry</option>
                                <option value="Punjab">Punjab</option>
                                <option value="Rajasthan">Rajasthan</option>
                                <option value="Sikkim">Sikkim</option>
                                <option value="Tamil Nadu">Tamil Nadu</option>
                                <option value="Telangana">Telangana</option>
                                <option value="Tripura">Tripura</option>
                                <option value="Uttar Pradesh">Uttar Pradesh</option>
                                <option value="Uttarakhand">Uttarakhand</option>
                                <option value="West Bengal">West Bengal</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="City" name="city" required="">
                        </div>
                        <div class="col-md-6">
                            <input type="number" class="form-control" placeholder="Pin Code" name="pincode" required="">
                        </div>
                        <div class="col-md-6">
                            <select id="inputStatus" class="form-control valid" name="status" required="">
                                <option value="">Choose...</option>
                                <option value="Verified">Verified</option>
                                <option value="Not Verified">Not Verified</option>
                            </select>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" name="submit_emp" class="btn cur-p btn-primary">Submit</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card card-primary card-outline" style="border-top: 3px solid #28a745;margin-bottom:20px;">
    <div class="row">
        <div class="col-lg-12" style="font-weight: bold;line-height: 27px; margin-left: 5px"><span>Reference Details</span>
        </div>
    </div>
    <div class="row" style="margin-right:0px;margin-left:0px;">
        <div class="table-responsive">
            <table id="staffListing" class="table table-bordered table-hover ">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Relation</th>
                        <th scope="col">Name</th>
                        <th scope="col">Mobile</th>
                        <th scope="col">Address</th>
                        <th scope="col">City</th>
                        <th scope="col">State</th>
                        <th scope="col">Pincode</th>
                        <!--<th scope="col">Status</th>-->
                        <!-- <th scope="col">Action</th> -->
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td scope="col">1</td>
                        <td scope="col">Spouse</td>
                        <td scope="col">MAHESH</td>
                        <td scope="col">
                            9928879796
                        </td>
                        <td scope="col"></td>
                        <td scope="col"></td>
                        <td scope="col"></td>
                        <td scope="col">0</td>
                    </tr>
                    <tr>
                        <td scope="col">2</td>
                        <td scope="col">Brother</td>
                        <td scope="col">MOHIT</td>
                        <td scope="col">
                            8890139796
                        </td>
                        <td scope="col"></td>
                        <td scope="col"></td>
                        <td scope="col"></td>
                        <td scope="col">0</t>
                    </tr>
                    <tr>
                        <td scope="col">3</td>
                        <td scope="col">Spouse</td>
                        <td scope="col">MAHESH</td>
                        <td scope="col">
                            9928879796
                        </td>
                        <td scope="col"></td>
                        <td scope="col"></td>
                        <td scope="col"></td>
                        <td scope="col">0</td>
                    </tr>
                    <tr>
                        <td scope="col">4</td>
                        <td scope="col">Friends</td>
                        <td scope="col">MOHIT</td>
                        <td scope="col">
                            8890139796
                        </td>
                        <td scope="col"></td>
                        <td scope="col"></td>
                        <td scope="col"></td>
                        <td scope="col">0</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>





    <!-- The Modal -->
    <div class="modal fade" id="add-reference">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Add Reference</h4>
                    <button type="button" class="close" data-dismiss="modal">×</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <form action="#" method="post">
                        <input type="hidden" name="lead_id" value="860272">
                        <input type="hidden" name="customer_id" value="776810">
                        <input type="hidden" name="type_l" value="">
                        <div class="col-md-6">
                            <select id="inputRelation" class="form-control valid" name="relation" required="">
                                <option value="">Choose Relation</option>
                                <option value="Father">Father</option>
                                <option value="Mother">Mother</option>
                                <option value="Brother">Brother</option>
                                <option value="Sister">Sister</option>
                                <option value="Relative">Relative</option>
                                <option value="Office colleague">Office colleague</option>
                                <option value="Friend">Friend</option>
                                <option value="Spouse">Spouse</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="name" placeholder="Full Name" required="">
                        </div>
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="address" placeholder="Address" required="">
                        </div>
                        <div class="col-md-6">
                            <select id="inputState" class="form-control valid" name="state" required="">
                                <option value="" data-value="">Choose State</option>
                                <option value="Andaman &amp; Nicobar Islands" data-value="1">Andaman &amp; Nicobar Islands</option>
                                <option value="Andhra Pradesh" data-value="2">Andhra Pradesh</option>
                                <option value="Arunachal Pradesh" data-value="3">Arunachal Pradesh</option>
                                <option value="Assam" data-value="4">Assam</option>
                                <option value="Bihar" data-value="5">Bihar</option>
                                <option value="Chandigarh" data-value="6">Chandigarh</option>
                                <option value="Chhatisgarh" data-value="7">Chhatisgarh</option>
                                <option value="Dadra &amp; Nagar Haveli" data-value="8">Dadra &amp; Nagar Haveli</option>
                                <option value="Daman &amp; Diu" data-value="9">Daman &amp; Diu</option>
                                <option value="Delhi" data-value="10">Delhi</option>
                                <option value="Goa" data-value="11">Goa</option>
                                <option value="Gujarat" data-value="12">Gujarat</option>
                                <option value="Haryana" data-value="13">Haryana</option>
                                <option value="Himachal Pradesh" data-value="14">Himachal Pradesh</option>
                                <option value="Jammu &amp; Kashmir" data-value="15">Jammu &amp; Kashmir</option>
                                <option value="Jharkhand" data-value="16">Jharkhand</option>
                                <option value="Karnataka" data-value="17">Karnataka</option>
                                <option value="Kerala" data-value="18">Kerala</option>
                                <option value="Lakshadweep" data-value="19">Lakshadweep</option>
                                <option value="Madhya Pradesh" data-value="20">Madhya Pradesh</option>
                                <option value="Maharashtra" data-value="21">Maharashtra</option>
                                <option value="Manipur" data-value="22">Manipur</option>
                                <option value="Meghalaya" data-value="23">Meghalaya</option>
                                <option value="Mizoram" data-value="24">Mizoram</option>
                                <option value="Nagaland" data-value="25">Nagaland</option>
                                <option value="Orissa" data-value="26">Orissa</option>
                                <option value="Pondicherry" data-value="27">Pondicherry</option>
                                <option value="Punjab" data-value="28">Punjab</option>
                                <option value="Rajasthan" data-value="29">Rajasthan</option>
                                <option value="Sikkim" data-value="30">Sikkim</option>
                                <option value="Tamil Nadu" data-value="31">Tamil Nadu</option>
                                <option value="Telangana" data-value="36">Telangana</option>
                                <option value="Tripura" data-value="32">Tripura</option>
                                <option value="Uttar Pradesh" data-value="34">Uttar Pradesh</option>
                                <option value="Uttaranchal" data-value="33">Uttaranchal</option>
                                <option value="West Bengal" data-value="35">West Bengal</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="City" name="city" required="">
                        </div>
                        <div class="col-md-6">
                            <input type="number" class="form-control" placeholder="Pin Code" name="pincode" required="">
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="Contact Number" name="contactNo" required="">
                        </div>
                        <div class="col-md-12">
                            <button type="submit" name="submit_ref" class="btn cur-p btn-primary">Submit</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
                <!-- Modal footer -->
            </div>
        </div>
    </div>
    <!-- end model popup -->
</div>

<div class="card card-info card-outline" style="border-top: 3px solid #007bff; margin-bottom: 20px;">
    <div class="row">
        <div class="col-lg-12" style="font-weight: bold;line-height: 27px; margin-left: 5px"><span>Credit Details</span> </div>
    </div>
    <div class="row" style="margin-right:0px;margin-left:0px;">
        <div class="table-responsive">
            <table id="staffListing" class="table table-bordered">
                <tbody>
                    <tr>
                        <td scope="col">Loan Type : Payday Loan</td>
                        <td scope="col">Branch : Haryana </td>
                        <td scope="col">Approval Amount : Rs.25000.00</td>
                        <td scope="col">Loan Tenure : 32 Days</td>
                    </tr>
                    <tr>
                        <td scope="col">ROI : 1.00 %</td>
                        <td scope="col">Repay Date : 2025-08-02</td>
                        <td scope="col">Admin Fee : Rs.2500.00</td>
                        <td scope="col">Monthly Income : Rs.104239.00</td>
                    </tr>
                    <tr>
                        <td scope="col">Mobile : 6397688311</td>
                        <td scope="col">Email : DINESH.NEGI654@GMAIL.COM</td>
                        <td scope="col">CIBIL : 659</td>
                        <td scope="col">Active Loans : 10</td>
                    </tr>
                    <tr>
                        <td scope="col">Obligation : Rs. 100000.00</td>
                        <td scope="col">Outstanding : Rs. 500000.00</td>
                        <td scope="col">Status : Initiate Esign</td>
                        <td scope="col">
                            Creditate By : Sumit Kumar
                        </td>
                    </tr>
                    <tr>
                        <td scope="col" colspan="2">Credit Date : 2025-07-01 14:28:08</td>
                        <td scope="col" colspan="2">Remark : </td>
                    </tr>
                    <tr>
                        <td scope="col" colspan="2">Approved Process By : Sweety Negi </td>
                        <td scope="col" colspan="2"> Approved Process Date : 2025-07-01 14:23:16</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>


    <!-- The Modal -->
    <div class="modal fade" id="add-credit">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Loan Approval</h4>
                    <button type="button" class="close" data-dismiss="modal">×</button>
                </div>

                <!-- Modal body -->

                <div class="modal-body">
                    <form action="#" method="post">
                        <input type="hidden" name="lead_id" value="723869">
                        <input type="hidden" name="customer_id" value="579840">
                        <input type="hidden" name="type_l" value="">
                        <div class="col-md-6">
                            <select class="form-control" id="loanType" name="loanType" onchange="changeemi()" required="">
                                <option value="Payday Loan">Payday Loan</option>
                                <option value="EMI">EMI</option>
                            </select>
                        </div>



                        <div class="col-md-6">
                            <input type="text" class="form-control" name="branch" value="Haryana" required="">
                        </div>


                        <div class="col-md-6">
                            <select class="form-control" id="inputEmiType" style="display:none" name="EmiType" required="">
                                <option value="17 weeks">17 weeks</option>
                                <option value="6 months">6 months</option>
                                <option value="1 year">1 year</option>
                            </select>
                        </div>


                        <div class="col-md-6">
                            <input type="number" class="form-control" name="loanAmtApproved" placeholder="Loan Amount Approved" id="la" required="">
                        </div>

                        <div class="col-md-6">
                            Return on Investment(ROI)
                            <select class="form-control" id="inputRoi" name="roi" required="">
                                <option value="1.0">1.0%</option>
                                <option value="0.1">0.1%</option>
                            </select>
                        </div>

                        <div class="col-md-6">
                            Loan Repayment Date
                            <input type="hidden" id="curdate" value="2025-08-14">
                            <input type="date" class="form-control" name="repayDate" placeholder="Loan Repayment Date" min="2025-08-14" id="rp" required="">
                            <div id="dre" style="color:red;"> </div>
                        </div>

                        <div class="col-md-6">
                            <select class="form-control" name="officialEmail" required="">
                                <option value=""> Official Email</option>
                                <option value="DINESH.NEGI654@GMAIL.COM">DINESH.NEGI654@GMAIL.COM</option>
                                <option value=" dinesh.negi@3dengg.com"> dinesh.negi@3dengg.com</option>
                            </select>
                        </div>

                        <div class="col-md-6">
                            <select class="form-control" name="alternateMobile" required="">
                                <option value=""> Alternate Mobile</option>
                                <option value="6397688311">6397688311</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <select class="form-control" name="pcv" id="mfrbtn" onchange="changemfr()">
                                <option value="10">10%</option>
                                <option value="5">5%</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <input type="number" class="form-control" name="adminFee" placeholder="Admin fee" id="adminFee" required="">
                        </div>


                        <div class="col-md-4">
                            <input type="number" class="form-control" name="monthlyIncome" placeholder="Monthly Income" required="">
                        </div>


                        <div class="col-md-4">
                            <input type="number" class="form-control" name="cibil" value="659" required="">
                        </div>

                        <div class="col-md-4">
                            <select class="form-control" id="inputActivePL" name="activeLoans" required="">
                                <option value="">Active Loans</option>
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <input type="number" class="form-control" name="monthlyObligation" placeholder="monthly Obligation Amount" required="">
                        </div>
                        <div class="col-md-6">
                            <input type="number" class="form-control" name="outstandingAmount" placeholder="Outstanding Amount" required="">
                        </div>
                        <div class="col-md-6">
                            <select class="form-control" name="status" id="country" required="">
                                <option value="">Choose...</option>
                                <option value="Approved Process">Approved Process</option>
                                <option value="Hold Process">Hold Process</option>
                                <option value="Initiate Esign">Initiate Esign</option>
                                <option value="Not Required Process">Not Required Process</option>
                                <option value="Rejected Process">Rejected Process</option>
                            </select>
                        </div>
                        <div id="city"> </div>
                        <div id="reson1"> </div>
                        <div class="col-md-12">
                            <textarea rows="4" cols="50" name="remark" class="form-control" placeholder="Final Remarks"></textarea>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" name="submit_crdd" class="btn cur-p btn-primary">Submit</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
                <!-- Modal footer -->
            </div>
        </div>
    </div>

    <!-- end model popup -->


    <!-- The Modal -->
    <div class="modal fade" id="edit-credit">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Payday/EMI Loan Approval</h4>
                    <button type="button" class="close" data-dismiss="modal">×</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form action="#" method="post">
                        <input type="hidden" name="lead_id" value="723869">
                        <input type="hidden" name="customer_id" value="579840">
                        <input type="hidden" name="type_l" value="">
                        <input type="hidden" name="app_id" value="41088">


                        <div class="col-md-6">
                            Branch
                            <input type="text" class="form-control" name="branch1" value="Haryana" required="">
                        </div>


                        <div class="col-md-6">
                            Loan Amount
                            <input type="number" class="form-control" name="loanAmtApproved1" placeholder="Loan Amount Approved" id="la1" value="25000.00" required="">
                        </div>


                        <div class="col-md-6">
                            ROI
                            <select class="form-control" id="inputRoi" name="roi1" required="">
                                <option value="">ROI</option>
                                <option value="0.1">0.1%</option>
                                <option value="0.3">0.3%</option>
                                <option value="1.0" selected="">1.0%</option>
                            </select>
                        </div>



                        <div class="col-md-6">
                            Loan Repayment Date
                            <input type="date" class="form-control" name="repayDate1" placeholder="Loan Repayment Date" value="2025-08-02" min="2025-08-14" required="">
                        </div>

                        <div class="col-md-6">
                            Official Email
                            <input type="email" class="form-control" name="officialEmail1" placeholder="Official Email" value="DINESH.NEGI654@GMAIL.COM" required="">
                        </div>

                        <div class="col-md-6">
                            Alternate Mobile
                            <input type="number" class="form-control" name="alternateMobile1" placeholder="Alternate Mobile" value="6397688311" required="">
                        </div>


                        <div class="col-md-4">
                            Processing Fee
                            <select class="form-control" name="pcv" id="mfrbtn1" onchange="changemfr1()">
                                <option value=""> Processing Fee</option>
                                <option value="10" selected="">10%</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            Admin fee
                            <input type="number" class="form-control" name="adminFee1" placeholder="Admin fee" value="2500.00" id="adminFee1" required="">
                        </div>
                        <div class="col-md-4">
                            Status
                            <select class="form-control" name="status1" id="country-edit" required="">
                                <option value="">Choose...</option>
                                <option value="Approved">Approved</option>
                                <option value="Rejected">Rejected</option>
                                <option value="Hold">Hold</option>
                                <option value="Not Required">Not Required</option>
                                <option value="Initiate Esign" selected="">Initiate Esign</option>
                                <option value="Send back">Send back </option>
                            </select>
                        </div>
                        <div id="city-edit"> </div>
                        <div id="reson2"> </div>
                        <div class="col-md-12">
                            Remark
                            <input type="ntextumber" class="form-control" id="inputRemark" name="remark1" value="" placeholder="Final Remarks">
                        </div>
                        <div class="col-md-12">
                            <button type="submit" name="submit_crdd_edit" class="btn cur-p btn-primary">Submit</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
                <!-- Modal footer -->
            </div>
        </div>
    </div>
    <!-- end model popup -->
</div>
<div class="card card-info card-outline" style="border-top: 3px solid #007bff; margin-bottom: 20px;">
    <div class="row">
        <div class="col-lg-12" style="font-weight: bold;line-height: 27px; margin-left: 5px"><span>Credit Details</span>
        </div>
    </div>
    <div class="row" style="margin-right:0px;margin-left:0px;">
        <div class="table-responsive">
            <table id="staffListing" class="table table-bordered">
                <tbody>
                    <tr>
                        <td scope="col">Loan Type : Payday Loan</td>
                        <td scope="col">Branch : Haryana </td>
                        <td scope="col">Approval Amount : Rs.25000.00</td>
                        <td scope="col">Loan Tenure : 32 Days</td>
                    </tr>
                    <tr>
                        <td scope="col">ROI : 1.00 %</td>
                        <td scope="col">Repay Date : 2025-08-02</td>
                        <td scope="col">Admin Fee : Rs.2500.00</td>
                        <td scope="col">Monthly Income : Rs.104239.00</td>
                    </tr>
                    <tr>
                        <td scope="col">Mobile : 6397688311</td>
                        <td scope="col">Email : DINESH.NEGI654@GMAIL.COM</td>
                        <td scope="col">CIBIL : 659</td>
                        <td scope="col">Active Loans : 10</td>
                    </tr>
                    <tr>
                        <td scope="col">Obligation : Rs. 100000.00</td>
                        <td scope="col">Outstanding : Rs. 500000.00</td>
                        <td scope="col">Status : Initiate Esign</td>
                        <td scope="col">
                            Creditate By : Sumit Kumar
                        </td>
                    </tr>
                    <tr>
                        <td scope="col" colspan="2">Credit Date : 2025-07-01 14:28:08</td>
                        <td scope="col" colspan="2">Remark : </td>
                    </tr>
                    <tr>
                        <td scope="col" colspan="2">Approved Process By : Sweety Negi </td>
                        <td scope="col" colspan="2"> Approved Process Date : 2025-07-01 14:23:16</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>


    <!-- The Modal -->
    <div class="modal fade" id="add-credit">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Loan Approval</h4>
                    <button type="button" class="close" data-dismiss="modal">×</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <form action="#" method="post">
                        <input type="hidden" name="lead_id" value="723869">
                        <input type="hidden" name="customer_id" value="579840">
                        <input type="hidden" name="type_l" value="">
                        <div class="col-md-6">
                            <select class="form-control" id="loanType" name="loanType" onchange="changeemi()" required="">
                                <option value="Payday Loan">Payday Loan</option>
                                <option value="EMI">EMI</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="branch" value="Haryana" required="">
                        </div>
                        <div class="col-md-6">
                            <select class="form-control" id="inputEmiType" style="display:none" name="EmiType" required="">
                                <option value="17 weeks">17 weeks</option>
                                <option value="6 months">6 months</option>
                                <option value="1 year">1 year</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <input type="number" class="form-control" name="loanAmtApproved" placeholder="Loan Amount Approved" id="la" required="">
                        </div>
                        <div class="col-md-6">
                            Return on Investment(ROI)
                            <select class="form-control" id="inputRoi" name="roi" required="">
                                <option value="1.0">1.0%</option>
                                <option value="0.1">0.1%</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            Loan Repayment Date
                            <input type="hidden" id="curdate" value="2025-08-14">
                            <input type="date" class="form-control" name="repayDate" placeholder="Loan Repayment Date" min="2025-08-14" id="rp" required="">
                            <div id="dre" style="color:red;"> </div>
                        </div>
                        <div class="col-md-6">
                            <select class="form-control" name="officialEmail" required="">
                                <option value=""> Official Email</option>
                                <option value="DINESH.NEGI654@GMAIL.COM">DINESH.NEGI654@GMAIL.COM</option>
                                <option value=" dinesh.negi@3dengg.com"> dinesh.negi@3dengg.com</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <select class="form-control" name="alternateMobile" required="">
                                <option value=""> Alternate Mobile</option>
                                <option value="6397688311">6397688311</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <select class="form-control" name="pcv" id="mfrbtn" onchange="changemfr()">
                                <option value="10">10%</option>
                                <option value="5">5%</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <input type="number" class="form-control" name="adminFee" placeholder="Admin fee" id="adminFee" required="">
                        </div>
                        <div class="col-md-4">
                            <input type="number" class="form-control" name="monthlyIncome" placeholder="Monthly Income" required="">
                        </div>
                        <div class="col-md-4">
                            <input type="number" class="form-control" name="cibil" value="659" required="">
                        </div>
                        <div class="col-md-4">
                            <select class="form-control" id="inputActivePL" name="activeLoans" required="">
                                <option value="">Active Loans</option>
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <input type="number" class="form-control" name="monthlyObligation" placeholder="monthly Obligation Amount" required="">
                        </div>
                        <div class="col-md-6">
                            <input type="number" class="form-control" name="outstandingAmount" placeholder="Outstanding Amount" required="">
                        </div>
                        <div class="col-md-6">
                            <select class="form-control" name="status" id="country" required="">
                                <option value="">Choose...</option>
                                <option value="Approved Process">Approved Process</option>
                                <option value="Hold Process">Hold Process</option>
                                <option value="Initiate Esign">Initiate Esign</option>
                                <option value="Not Required Process">Not Required Process</option>
                                <option value="Rejected Process">Rejected Process</option>
                            </select>
                        </div>
                        <div id="city"> </div>
                        <div id="reson1"> </div>
                        <div class="col-md-12">
                            <textarea rows="4" cols="50" name="remark" class="form-control" placeholder="Final Remarks"></textarea>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" name="submit_crdd" class="btn cur-p btn-primary">Submit</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>

                <!-- Modal footer -->
            </div>
        </div>
    </div>
    <!-- end model popup -->

    <!-- The Modal -->
    <div class="modal fade" id="edit-credit">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Payday/EMI Loan Approval</h4>
                    <button type="button" class="close" data-dismiss="modal">×</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <form action="#" method="post">
                        <input type="hidden" name="lead_id" value="723869">
                        <input type="hidden" name="customer_id" value="579840">
                        <input type="hidden" name="type_l" value="">
                        <input type="hidden" name="app_id" value="41088">
                        <div class="col-md-6">
                            Branch
                            <input type="text" class="form-control" name="branch1" value="Haryana" required="">
                        </div>
                        <div class="col-md-6">
                            Loan Amount
                            <input type="number" class="form-control" name="loanAmtApproved1" placeholder="Loan Amount Approved" id="la1" value="25000.00" required="">
                        </div>
                        <div class="col-md-6">
                            ROI
                            <select class="form-control" id="inputRoi" name="roi1" required="">
                                <option value="">ROI</option>
                                <option value="0.1">0.1%</option>
                                <option value="0.3">0.3%</option>
                                <option value="1.0" selected="">1.0%</option>
                            </select>
                        </div>

                        <div class="col-md-6">
                            Loan Repayment Date
                            <input type="date" class="form-control" name="repayDate1" placeholder="Loan Repayment Date" value="2025-08-02" min="2025-08-14" required="">
                        </div>
                        <div class="col-md-6">
                            Official Email
                            <input type="email" class="form-control" name="officialEmail1" placeholder="Official Email" value="DINESH.NEGI654@GMAIL.COM" required="">
                        </div>
                        <div class="col-md-6">
                            Alternate Mobile
                            <input type="number" class="form-control" name="alternateMobile1" placeholder="Alternate Mobile" value="6397688311" required="">
                        </div>
                        <div class="col-md-4">
                            Processing Fee
                            <select class="form-control" name="pcv" id="mfrbtn1" onchange="changemfr1()">
                                <option value=""> Processing Fee</option>
                                <option value="10" selected="">10%</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            Admin fee
                            <input type="number" class="form-control" name="adminFee1" placeholder="Admin fee" value="2500.00" id="adminFee1" required="">
                        </div>
                        <div class="col-md-4">
                            Status
                            <select class="form-control" name="status1" id="country-edit" required="">
                                <option value="">Choose...</option>
                                <option value="Approved">Approved</option>
                                <option value="Rejected">Rejected</option>
                                <option value="Hold">Hold</option>
                                <option value="Not Required">Not Required</option>
                                <option value="Initiate Esign" selected="">Initiate Esign</option>
                                <option value="Send back">Send back </option>
                            </select>
                        </div>
                        <div id="city-edit"> </div>
                        <div id="reson2"> </div>
                        <div class="col-md-12">
                            Remark
                            <input type="ntextumber" class="form-control" id="inputRemark" name="remark1" value="" placeholder="Final Remarks">
                        </div>
                        <div class="col-md-12">
                            <button type="submit" name="submit_crdd_edit" class="btn cur-p btn-primary">Submit</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
                <!-- Modal footer -->
            </div>
        </div>
    </div>
    <!-- end model popup -->
</div>
<div class="card card-primary card-outline" style="border-top: 3px solid #007bff;margin-bottom:20px;">
    <div class="row">
        <div class="col-lg-12" style="font-weight: bold;line-height: 27px; margin-left: 5px"><span>Payouts Penny Drop</span>
        </div>
    </div>
    <div class="table-responsive" style="overflow: auto;max-height: 200px;">
        <table id="staffListing" class="table table-bordered ">
            <thead>
                <tr>
                    <th scope="col">registered_name</th>
                    <th scope="col">account_status</th>
                    <th scope="col">bank_name</th>
                    <th scope="col">account_number</th>
                    <th scope="col">ifsc</th>
                    <th scope="col">status</th>
                    <th scope="col">Date</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <!-- <td scope="col"> 
                  </td> -->
                    <td scope="col">DINESH NEGI</td>
                    <td scope="col">Verified</td>
                    <td scope="col">KOTAK MAHINDRA BANK</td>
                    <td scope="col">3645871585</td>
                    <td scope="col">KKBK0005475</td>
                    <td scope="col">1</td>
                    <td scope="col">2025-07-01 05:05:44</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<div class="card card-secondary card-outline" style="border-top: 3px solid #dc3545;margin-bottom:20px;">
    <div class="row">
        <div class="col-lg-12" style="font-weight: bold;line-height: 27px; margin-left: 5px;"><span>Disbursal Details</span>
        </div>
    </div>

    <div class="row" style="margin-right:0px;margin-left:0px;">
        <div class="table-responsive">
            <table id="staffListing" class="table table-bordered table-hover ">
                <tbody>
                    <tr>
                        <td scope="col">Loan No. : MFLSL2025071021</td>
                        <td scope="col">Disbursal Amount : Rs.22050</td>
                        <td scope="col">GST Amount : Rs.450</td>
                    </tr>
                    <tr>
                        <td scope="col">Admin Fee : Rs.2500.00</td>
                        <td scope="col">Repay Amount : Rs.33000</td>
                        <td scope="col">Disbursal date : 2025-07-01 </td>
                    </tr>
                    <tr>
                        <td scope="col">
                            Account No. : 3645871585
                        </td>
                        <td scope="col">IFSC : KKBK0005475</td>
                        <td scope="col">Bank Name : KOTAK MAHINDRA BANK</td>
                    </tr>
                    <tr>
                        <td scope="col">Branch : HALDWANI BRANCH</td>
                        <td scope="col">Payment Type : IMPS</td>
                        <td scope="col">FI Done By : Without FI</td>
                    </tr>
                    <tr>
                        <td scope="col">Admin Fee Mode : </td>
                        <td scope="col">Loan Reference No : 518217637976</td>
                        <td scope="col">Disbursed By : Hanu Goyal </td>
                    </tr>
                    <tr>
                        <td scope="col">Disbursal Status : Disbursed</td>
                        <td scope="col">Remarks : Disbursed</td>
                    </tr>
                    <tr>
                        <td scope="col" colspan="2"> Bank Account Name : DINESH NEGI
                        </td>
                        <td scope="col" colspan="1">
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="card card-success card-outline" style="border-top: 3px solid #28a745;">
    <div class="row">
        <div class="col-lg-12" style="font-weight: bold;line-height: 27px; margin-left: 5px;"><span>Collection Details</span>
        </div>
    </div>
    <div class="row" style="margin-right:0px;margin-left:0px;">
        <div class="table-responsive">
            <div class="modal fade" id="ref37973">
                <div class="modal-dialog" style=" max-width: 50%; margin: 1.75rem auto;">
                    <div class="modal-content">
                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Refunded Amount Details</h4>
                            <button type="button" class="close" data-dismiss="modal">×</button>
                        </div>
                        <!-- Modal body -->
                        <div class="modal-body">
                            <form action="#" method="post"></form>
                            <input type="hidden" name="coll_id" value="37973">
                            <input type="hidden" name="leadID" value="723869">
                            <input type="hidden" class="form-control" name="collectedAmount" value=" 31750.00" required="">
                            <div class="col-md-6">
                                Collected Amount -
                                31750
                            </div>
                            <div class="col-md-6">
                                Mode -
                                UPI
                            </div>
                            <div class="col-md-6">
                                Date-
                                2025-07-28
                            </div>
                            <div class="col-md-6">
                                Reference No -
                                520927334514
                            </div>
                            <div class="col-md-6">
                                Lead Status -
                                Closed
                            </div>
                            <div class="col-md-6">
                                Remark
                                full payment
                            </div>
                            <div class="col-md-12" style="padding: 0px;">
                                <hr>
                                <div class="col-md-4">
                                    UTR NO.
                                    <input type="text" class="form-control" name="utrno" placeholder="UTR No." required="">
                                </div>
                                <div class="col-md-4">Refund Date
                                    <input type="date" class="form-control" name="refunddate" placeholder="Refind Date" value="2025-08-14" required="">
                                </div>
                                <div class="col-md-4">
                                    Change Lead Status
                                    <select class="form-control" name="status" required="">
                                        <option value="">Change Current status</option>
                                        <option value="Disbursed">Disbursed</option>
                                        <option value="Part Payment">Part Payment</option>
                                        <option value="Closed">Closed</option>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="remark" placeholder="Remark" required="">
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" name="refundsubmit" class="btn cur-p btn-primary">Submit</button>
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                        <!-- Modal footer -->
                    </div>
                </div>
            </div>
            <table id="staffListing" class="table table-bordered table-hover ">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Loan No</th>
                        <th scope="col">Amount</th>
                        <th scope="col">Payment Mode</th>
                        <th scope="col">Payment Date</th>
                        <th scope="col">Reference No</th>
                        <th scope="col">Payment Slip</th>
                        <th scope="col">Status</th>
                        <th scope="col">Payment Status</th>
                        <th scope="col">Remark</th>
                        <th scope="col">Collected By</th>
                        <th scope="col">Date</th>
                        <th scope="col">Approved By</th>
                        <th scope="col">Date</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td scope="col">1</td>
                        <td scope="col">MFLSL2025071021</td>
                        <td scope="col">31750.00</td>
                        <td scope="col">UPI</td>
                        <td scope="col">2025-07-28</td>
                        <td scope="col">52092733451
                        </td>
                        <td scope="col">
                            <a href="https://dt0sanb7qakh9.cloudfront.net/uploads/ps-28-07-2025-16-08-37-723869.jpeg" target="_blank"><i class="fa fa-file" aria-hidden="true"></i></a>
                        </td>
                        <td scope="col">Closed</td>
                        <td scope="col">Approved</td>
                        <td scope="col">full payment</td>
                        <td scope="col">Shipranshu</td>
                        <td scope="col">2025-07-28 16:08:37</td>
                        <td scope="col">Ankit Kumar</td>
                        <td scope="col">2025-07-28 16:24:19</td>
                    </tr>
                    <!-- end model popup -->
                </tbody>
            </table>
        </div>
    </div>
    <!-- The Modal -->
    <div class="modal fade" id="add-collection">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Collection Update</h4>
                    <button type="button" class="close" data-dismiss="modal">×</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <form action="#" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="lead_id" value="723869">
                        <input type="hidden" name="customer_id" value="579840">
                        <input type="hidden" name="type_l" value="">
                        <input type="hidden" name="loan_id" value="MFLSL2025071021">
                        <div class="col-md-4">
                            <input type="number" name="collectedAmount" class="form-control input-staff-address" placeholder="Collected Amount" min="0" required="">
                        </div>
                        <div class="col-md-4">
                            <select class="form-control valid" name="collectedMode" required="">
                                <option value=""> Collection Mode</option>
                                <option value="Account">Account</option>
                                <option value="UPI">UPI</option>
                                <option value="PayTM">PayTM</option>
                                <option value="E-Mandate">E-Mandate</option>
                                <option value="RAZORPAY PAYMENT GATEWAY">RAZORPAY PAYMENT GATEWAY</option>
                                <option value="GOOGLE PAY">GOOGLE PAY</option>
                                <option value="CASH">CASH</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <input type="text" name="referenceNo" class="form-control input-staff-address" placeholder="Reference No" required="">
                        </div>
                        <div class="col-md-4">
                            Payment Slip
                            <input type="file" name="payment_slip" class="form-control input-staff-address valid">
                        </div>
                        <div class="col-md-4">
                            Collected Date
                            <input type="date" name="collectedDate" class="form-control input-staff-address valid" id="date-input" placeholder="Collected Date" required="">
                        </div>
                        <div class="col-md-4">
                            Collection Status
                            <select class="form-control valid" name="status" required="">
                                <option value="">Choose Status</option>
                                <option value="Closed">Closed</option>
                                <option value="Part Payment">Part Payment</option>
                                <option value="Settlement">Settlement</option>
                            </select>
                        </div>
                        <div class="col-md-12">
                            <input type="text" name="remark" class="form-control input-staff-address" placeholder="Remarks">
                        </div>
                        <div class="col-md-12">
                            <button type="submit" name="submit_coll_app" class="btn cur-p btn-primary">Submit</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
                <!-- Modal footer -->
            </div>
        </div>
    </div>
    <!-- end model popup -->
</div>
<div class="card card-success card-outline" style="border-top: 3px solid #28a745;">
    <div class="row">
        <div class="col-lg-12" style="font-weight: bold;line-height: 27px; margin-left: 5px;"><span>Collection Followup</span>
        </div>
    </div>
    <!-- The Modal -->
    <div class="modal fade" id="add-collection-follow">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Collection Follow Up</h4>
                    <button type="button" class="close" data-dismiss="modal">×</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <form action="#" method="post">
                        <input type="hidden" name="lead_id" value="723869">
                        <input type="hidden" name="customer_id" value="579840">
                        <input type="hidden" name="type_l" value="">
                        <input type="hidden" name="loan_id" value="MFLSL2025071021">
                        <div class="col-md-6">
                            <select class="form-control valid" name="followType" required="">
                                <option value="">Choose Follow Type</option>
                                <option value="Call">Call</option>
                                <option value="Mail">Mail</option>
                                <option value="Whatsapp">Whatsapp</option>
                                <option value="SMS">SMS</option>
                                <option value="No Conatct">No Conatct</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <select class="form-control valid" id="folo" name="StatusType" required="">
                                <option value="">Choose Status Type</option>
                                <option value="PTP">PTP</option>
                                <option value="Ringing">Ringing</option>
                                <option value="Busy">Busy</option>
                                <option value="Disconnected the Call"> Disconnected the Call</option>
                                <option value="Out Of Network">Out Of Network</option>
                                <option value="Switch Off">Switch Off</option>
                                <option value="Spoken">Spoken</option>
                                <option value="FI Home">FI Home</option>
                                <option value="FI Office">FI Office</option>
                            </select>
                        </div>
                        <div id="folos"> </div>
                        <div class="col-md-12">
                            <input type="text" name="remark" class="form-control input-staff-address" placeholder="Remark">
                        </div>
                        <div class="col-md-12">
                            <button type="submit" name="submit_coll-foll" class="btn cur-p btn-primary">Submit</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
                <!-- Modal footer -->
            </div>
        </div>
    </div>
    <!-- end model popup -->
</div>