@extends('../layouts.app')
@section('title')
CRM - Profile
@endsection
@section('content')


@if(request()->get('type') == 'approved')
@include('lead.leadViewCredit')
@elseif(request()->get('type') == 'rejected')
@include('lead.leadIvr')
@elseif(request()->get('type') == 'hold')
@include('lead.uploadDoc')
@elseif(request()->get('type') == 'not-required')
@include('lead.leadEmail')
@endif
<div class="full_container">
    <div class="inner_container">
        <!-- Sidebar  -->

        <!-- end topbar -->
        <!-- dashboard inner -->
        <div class="midde_cont">
            <div class="container-fluid">
                <!-- row -->
                <div class="row">

                    <!-- table section -->
                    <div class="col-md-12">
                        <div class="white_shd full margin_bottom_30">
                            <div class="full graph_head">
                                <div class="heading1 margin_0">

                                </div>
                            </div>
                            <div class="table_section padding_infor_info">
                                <div class="table-responsive-sm">

                                    <div class="table-responsive-sm">
                                        <form action="#" method="get">
                                            <input type="hidden" name="type" value="">
                                            <div class="col-md-2">
                                                <label for="email">Date From</label>
                                                <input type="date" class="form-control" name="dateFrom" value="" required />
                                            </div>
                                            <div class="col-md-2">
                                                <label for="email">Date to</label>
                                                <input type="date" class="form-control" name="dateTo" value="" required />
                                            </div>
                                            <div class="col-md-3">
                                                <label for="email">CalledBy </label>
                                                <select class="form-control" name="calledBy" required>
                                                    <option value=""> Select CalledBy </option>

                                                    <option value="all"> All </option>

                                                    <option value=""></option>

                                                </select>
                                            </div>
                                            <div class="col-md-3">
                                                <label for="email"></label>
                                                <button type="submit" name="search" class="btn cur-p btn-primary" style="margin-top: 7px; width: 100%;">Submit</button>
                                            </div>

                                            <div class="col-md-2">

                                            </div>

                                        </form>
                                    </div>

                                    <table class="table" id="table" data-toggle="table" data-search="true" data-pagination="true" data-show-toggle="true" data-page-size="All" data-page-list="[20,40,60,80,All]" data-show-export="true"
                                        data-export-data-type="all" data-export-types="['csv', 'txt','excel']"
                                        data-height="650">

                                        <table class="table" id="table" data-toggle="table" data-search="true" data-pagination="true" data-page-size="20"
                                            data-page-list="[20,40,60,80,All]" data-sort-name="date" data-toggle-sort="true">

                                            <thead>
                                                <tr style="font-weight: bold;background: #0062cc;">
                                                    <th data-sortable="true"># </th>
                                                    <th data-sortable="true">Name</th>
                                                    <th data-sortable="true">Email</th>
                                                    <th data-sortable="true">Mobile</th>
                                                    <th data-sortable="true">PAN No.</th>
                                                    <th data-sortable="true">Loan Required</th>
                                                    <th data-sortable="true">Monthly Income</th>
                                                    <th data-sortable="true">city</th>
                                                    <th data-sortable="true">State</th>
                                                    <th data-sortable="true">Pin Code</th>
                                                    <th data-sortable="true">Source</th>
                                                    <th data-sortable="true">Status</th>

                                                    <th data-sortable="true">Credit Assign</th>

                                                    <th data-sortable="true">Sanction By</th>

                                                    <th data-sortable="true">Calling Assign</th>

                                                    <th data-sortable="true">Type</th>
                                                    <th data-sortable="true">Date</th>

                                                    <th data-sortable="true">Action</th>

                                                </tr>
                                            </thead>
                                            <tbody>

                                                <tr>
                                                    <td></td>
                                                    <td> <a href="lead-type.php?lead_id=]; ?>&type=" style="color:blue;font-weight:bold;"> </a></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td><a href="" class="btn cur-p btn-primary"> Rejected </a></td>

                                                </tr>

                                            </tbody>
                                        </table>

                                        <form action="#" method="get">
                                            <input type="hidden" name="type" value="">
                                            <div class="col-md-3">
                                                <label for="email">Date From</label>
                                                <input type="date" class="form-control" name="dateFrom" value="" required />

                                            </div>
                                            <div class="col-md-3">
                                                <label for="email">Date to</label>
                                                <input type="date" class="form-control" name="dateTo" value="" required />

                                            </div>

                                            <div class="col-md-3">
                                                <label for="email">Called By </label>
                                                <select class="form-control" name="calledBy">
                                                    <option value=""> Select Called By </option>

                                                    <option value=""></option>


                                                </select>
                                            </div>

                                            <div class="col-md-3">
                                                <label for="email"></label>
                                                <button type="submit" name="search" class="btn cur-p btn-primary" style="margin-top: 7px; width: 100%;">Submit</button>
                                            </div>
                                        </form>

                                        <table class="table" id="table" data-toggle="table" data-search="true" data-pagination="true" data-page-size="20"
                                            data-page-list="[20,40,60,80,All]" data-sort-name="date" data-toggle-sort="true">

                                            <thead>
                                                <tr style="font-weight: bold;background: #0062cc;">
                                                    <th data-sortable="true"># </th>
                                                    <th data-sortable="true">Name</th>

                                                    <th data-sortable="true">Email</th>

                                                    <th data-sortable="true">Mobile</th>
                                                    <th data-sortable="true">PAN No.</th>
                                                    <th data-sortable="true">Loan Required</th>
                                                    <th data-sortable="true">Monthly Income</th>
                                                    <th data-sortable="true">city</th>
                                                    <th data-sortable="true">State</th>

                                                    <th data-sortable="true">Credit Assign</th>

                                                    <th data-sortable="true">Sanction By</th>

                                                    <th data-sortable="true">Credited By</th>

                                                    <th data-sortable="true">Disbursed By</th>

                                                    <th data-sortable="true">Calling Assign</th>

                                                    <th data-sortable="true">Type</th>
                                                    <th data-sortable="true">Date</th>

                                                    <th data-sortable="true">Action</th>

                                                </tr>
                                            </thead>
                                            <tbody>

                                                <tr>
                                                    <td></td>
                                                    <td> <a href="lead-type.php?lead_id=&type=" style="color:blue;font-weight:bold;"> </a></td>

                                                    <td></td>

                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <!--  <td>\</td>
                                         <td></td>
                                          <td></td>-->
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>

                                                    <td>
                                                        <a href="javascript:void(0);" data-toggle="modal" data-target="#bkre" class="btn cur-p btn-primary">Rejected </a>
                                                        | <a href="javascript:void(0);" data-toggle="modal" data-target="#bkre1" class="btn cur-p btn-primary">Hold </a>

                                                    </td>
                                                    <div class="modal fade" id="bkre">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <!-- Modal Header -->
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title">Rejected Loan</h4>
                                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                </div>
                                                                <!-- Modal body -->
                                                                <div class="modal-body">
                                                                    <form action="#" method="post">
                                                                        <input type="hidden" name="lead_id" value="">
                                                                        <input type="hidden" name="customer_id" value="">
                                                                        <input type="hidden" name="type_l" value="">
                                                                        <div class="col-md-6">
                                                                            <select class="form-control" name="loanRej" required />
                                                                            <option value="">Select Reason</option>
                                                                            <option value="Not Required anymore">Not Required anymore</option>
                                                                            <option value="Required EMI Loans">Required EMI Loans</option>
                                                                            <option value="Low Tenure">Low Tenure</option>
                                                                            <option value="Low Amount">Low Amount</option>
                                                                            <option value="High ROI">High ROI</option>
                                                                            <option value="Other">Other</option>
                                                                            </select>
                                                                        </div>
                                                                        <div id="callStatus1"> </div>
                                                                        <div class="col-md-12">
                                                                            <input type="text" class="form-control" name="remark" placeholder="Remark" />
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <button type="submit" name="st132" class="btn cur-p btn-primary">Submit</button>
                                                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                                <!-- Modal footer -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end model popup -->
                                                    <div class="modal fade" id="bkre1">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <!-- Modal Header -->
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title">Hold Loan</h4>
                                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                </div>
                                                                <!-- Modal body -->
                                                                <div class="modal-body">
                                                                    <form action="#" method="post">
                                                                        <input type="hidden" name="lead_id" value="">
                                                                        <input type="hidden" name="customer_id" value="">
                                                                        <input type="hidden" name="type_l" value="">
                                                                        <div class="col-md-12">
                                                                            <input type="text" class="form-control" name="remark" placeholder="Remark" required />
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <button type="submit" name="buphold" class="btn cur-p btn-primary">Submit</button>
                                                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                                <!-- Modal footer -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end model popup -->

                                                    <td>
                                                        <a href="javascript:void(0);" data-toggle="modal" data-target="#modi" class="btn cur-p btn-primary">Move to Disbursal Sheet Send </a>
                                                    </td>
                                                    <div class="modal fade" id="modi">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <!-- Modal Header -->
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title">Move to Disbursal Sheet Send Loan</h4>
                                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                </div>
                                                                <!-- Modal body -->
                                                                <div class="modal-body">
                                                                    <form action="#" method="post">
                                                                        <input type="hidden" name="lead_id" value="">
                                                                        <input type="hidden" name="customer_id" value="">
                                                                        <input type="hidden" name="type_l" value="">
                                                                        <div class="col-md-12">
                                                                            <input type="text" class="form-control" name="remark" placeholder="Remark" />
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <button type="submit" name="modis" class="btn cur-p btn-primary">Submit</button>
                                                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </tr>

                                            </tbody>
                                        </table>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection