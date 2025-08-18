@extends('../layouts.app')
@section('title')
CRM - Report List
@endsection
@section('content')
<div class="full_container">
    <div class="inner_container">
        <div class="midde_cont">
            <div class="container-fluid">
                <!-- row -->
                <div class="row">
                    <!-- table section -->
                    <style>
                        .table-bordered td,
                        .table-bordered th {

                            white-space: inherit !important;

                            line-height: 25px;

                        }
                    </style>
                    <div class="col-md-12">
                        <div class="white_shd full margin_bottom_30">
                            <div class="full graph_head">
                                <div class="heading1 margin_0">
                                    <h2>Profile</h2>
                                </div>
                            </div>
                            <div class="full inbox_inner_section">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="full padding_infor_info">
                                            <div class="mail-box">
                                                <aside class="sm-side">
                                                    <div class="user-head">
                                                        <p align="center">
                                                            <img width="65" src="{{asset('assets/images/layout_img/user_img.jpg')}}" alt="#" style="border: 3px solid #adb5bd;margin: 0 auto;padding: 3px;width: 100px;border-radius: 50%;" />
                                                        </p>
                                                        <div class="col-md-12" style="margin-left: 4px;margin-bottom: 0PX;"> <a href="javascript:void(0);" data-toggle="modal" data-target="#add-ref-mob" class="float-right btn btn-warning btn-sm" style="margin: 4px; width:100%;"><i class="fa fa-plus"></i> Add</a> </div>
                                                        <!-- The Modal -->
                                                        <div class="modal fade" id="add-ref-mob">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <!-- Modal Header -->
                                                                    <div class="modal-header">
                                                                        <h4 class="modal-title">Add Details</h4>
                                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                    </div>
                                                                    <!-- Modal body -->
                                                                    <div class="modal-body">
                                                                        <form action="#" method="post">
                                                                            <input type="hidden" name="lead_id" value="">
                                                                            <input type="hidden" name="customer_id" value="">
                                                                            <input type="hidden" name="type_l" value="">
                                                                            <div class="col-md-6">
                                                                                <select class="form-control" name="ctype" required>
                                                                                    <option value="">Type </option>
                                                                                    <option value="contact">Conatct Number </option>
                                                                                    <option value="email">Email ID </option>
                                                                                    <option value="pan">PAN Number </option>
                                                                                    <option value="aadhar">Aadhar Number </option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <input type="text" class="form-control" name="contactNo" Placeholder="Enter Number" required />
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <select class="form-control valid" name="status" requried>
                                                                                    <option value="">Choose...</option>
                                                                                    <option value="Not Verified">Not Verified</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="col-md-12">
                                                                                <button type="submit" name="submit_ref_mob" class="btn cur-p btn-primary">Submit</button>
                                                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                                            </div>
                                                                        </form>

                                                                    </div>
                                                                    <!-- Modal footer -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- end model popup -->
                                                        <div class="user-name">
                                                            <h5 style="color:#fff; margin-bottom:12px; border-top: 1px solid #fff;"> SURESH KATARA</h5>
                                                            <p style="color: #fff;float: left; width: 100%;padding: 10px 3px;border-top: 1px solid #fff;"> <i class="fa fa-user" style="float: left;font-size: 17px;"></i> <span class="">CUSTOMER ID - 776742 </span>
                                                            </p>
                                                            <p style="float: left; color: #fff;width: 100%; padding: 10px 3px;border-top: 1px solid #fff;margin-bottom: 0PX;"> <i class="fa fa-phone-square" style="float: left;font-size: 17px;"></i> <span class="">8875550054 </span></p>
                                                            <p style="float: left; color: #fff;width: 100%;padding: 10px 3px;border-top: 1px solid #fff; margin-bottom: 0px;"> <i class="fa fa-mail-forward" style="float: left;font-size: 17px;"></i> <span class="">SURESHKATARA367@GMAIL.COM </span></p>
                                                            <p style="float: left; color: #fff;width: 100%;padding: 10px 3px;border-top: 1px solid #fff;"> <i class="fa fa-user" style="float: left;font-size: 17px;"></i> <span class="">Male </span></p>
                                                            <p style="float: left; color: #fff;width: 100%;padding: 10px 3px;border-top: 1px solid #fff;"> <i class="fa fa-calendar" style="float: left;font-size: 17px;"></i> <span class="">24-05-1995 </span></p>
                                                            <p style="float: left; color: #fff;width: 100%; padding: 10px 3px;border-top: 1px solid #fff;"> <i class="fa fa-file-o" style="float: left;font-size: 17px;"></i> <span class="">ELFPK7839K </span></p>
                                                            <p style="float: left; color: #fff;width: 100%;padding: 10px 3px;border-top: 1px solid #fff;"> <i class="fa fa-file-o" style="float: left;font-size: 17px;"></i> <span class="">203 </span></p>
                                                            <div class="col-md-12" style="margin-left: -10px;border-top: 1px solid #fff;">
                                                                <a href="lead-type.php?lead_id=860079&amp;type=&amp;mail-type=no_cash" class="float-left btn btn-dark btn-sm" style="margin: 3px;width: 100%;">DO NOT MAKE CASH PAYMENT</a>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </aside>
                                                <aside class="lg-side">
                                                    <div class="white_shd full margin_bottom_30">
                                                        <div class="full inner_elements">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="tab_style2">
                                                                        <div class="tabbar padding_infor_info" style="padding: 1px 8px;">
                                                                            <nav>
                                                                                <div class="nav nav-tabs" id="nav-tab1" role="tablist">
                                                                                    <a href="{{route('lead-type', ['lead_id' => 723869, 'de' => 'profile'])}}" class="nav-item nav-link">Profile</a>
                                                                                    <a href="{{route('lead-type', ['lead_id' => 723869, 'de' => 'ivr'])}}" class="nav-item nav-link">IVR</a>
                                                                                    <a href="{{route('lead-type', ['lead_id' => 723869, 'de' => 'doc'])}}" class="nav-item nav-link">Upload Document</a>
                                                                                    <a href="{{route('lead-type', ['lead_id' => 723869, 'de' => 'email'])}}" class="nav-item nav-link ">Email`s</a>
                                                                                    <a href="{{route('lead-type', ['lead_id' => 723869, 'de' => 'loan'])}}" class="nav-item nav-link">Loan History</a>
                                                                                    <a href="{{route('lead-type', ['lead_id' => 723869, 'de' => 'lead'])}}" class="nav-item nav-link">Lead History</a>
                                                                                    <a href="{{route('lead-type',['lead_id' => 723869, 'de' => 'verify'])}}" class="nav-item nav-link">Verify Logs</a>
                                                                                    <a href="{{route('lead-type', ['lead_id' => 723869, 'de' => 'cibil'])}}" class="nav-item nav-link">Cibil </a>
                                                                                    <a href="{{route('lead-type', ['lead_id' => 723869, 'de' => 'logs'])}}" class="nav-item nav-link">History Logs </a>
                                                                                    <a href="{{route('lead-type', ['lead_id' => 723869, 'de' => 'coll'])}}" class="nav-item nav-link">Collection </a>

                                                                                </div>
                                                                            </nav>
                                                                            @if(request()->get('de') == 'profile' || request()->get('de') === null )
                                                                            @include('lead.leadProfile')
                                                                            @elseif(request()->get('de') == 'ivr')
                                                                            @include('lead.leadIvr')
                                                                            @elseif(request()->get('de') == 'doc')
                                                                            @include('lead.uploadDoc')
                                                                            @elseif(request()->get('de') == 'email')
                                                                            @include('lead.leadEmail')
                                                                            @elseif(request()->get('de') == 'loan')
                                                                            @include('lead.leadLoan')
                                                                            @elseif(request()->get('de') == 'lead')
                                                                            @include('lead.leadHistory')
                                                                            @elseif(request()->get('de') == 'verify')
                                                                            @include('lead.leadVerifyLog')
                                                                            @elseif(request()->get('de') == 'cibil')
                                                                            @include('lead.leadCibil')
                                                                            @elseif(request()->get('de') == 'cibil')
                                                                            @include('lead.leadCollection')
                                                                            @endif

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                </aside>
                                            </div>
                                        </div>
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