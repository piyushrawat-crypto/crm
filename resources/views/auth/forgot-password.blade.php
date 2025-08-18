@extends('../layouts.app')
@section('title')
CRM - Create Profile
@endsection

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
                <form method="POST" action="{{route('register')}}">
                    @csrf
                    <div class="row gap-x-6 mb-4">
                        <!-- Name -->
                        <div class="col-md-4">
                            <x-input-label for="name" :value="__('Name')" />
                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>
                        <!-- Email Address -->
                        <div class="col-md-4">
                            <x-input-label for="email" :value="__('Email')" />
                            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
                        <!-- Mobile -->
                        <div class="col-md-4">
                            <x-input-label for="mobile" :value="__('Mobile Number')" />
                            <x-text-input id="mobile" class="block mt-1 w-full" type="text" name="mobile" :value="old('mobile')" required autocomplete="tel" />
                            <x-input-error :messages="$errors->get('mobile')" class="mt-2" />
                        </div>
                    </div>
                    <div class="col-12">
                        <!-- Password -->
                        <div class="col-md-4">
                            <x-input-label for="password" :value="__('Password')" />
                            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>
                        <!-- Choose Branch -->
                        <div class="col-md-4">
                            <x-input-label for="branch" :value="__('Choose Branch')" />
                            <select class="form-control block mt-1 w-full" name="branch" required>
                                <option value="">Choose Branch</option>
                                <option value="Delhi">Delhi</option>
                                <option value="Noida">Noida</option>
                                <option value="Gurugram">Gurugram</option>
                                <option value="Bangalore">Bangalore</option>
                                <option value="Hyderabad">Hyderabad</option>
                                <option value="Mumbai">Mumbai</option>
                                <option value="Pune">Pune</option>
                                <option value="Chennai">Chennai</option>
                            </select>
                            <x-input-error :messages="$errors->get('branch')" class="mt-2" />
                        </div>
                        <div class="col-md-4">
                            <x-input-label for="role" :value="__('Choose Role')" />
                            <select class="form-control block mt-1 w-full" name="role" required>
                                <option value="">Choose Role</option>
                                <option value="Calling Team">Calling Team</option>
                                <option value="Credit Team">Credit Team</option>
                                <option value="Collection Team">Collection Team</option>
                                <option value="Admin">Admin</option>

                                <option value="TL Calling Team">TL Calling Team</option>

                                <option value="Disbursal Team">Disbursal Team</option>

                                <option value="PD Team">PD Team</option>
                                <option value="Accounts">Accounts</option>
                                <option value="MIS Team">MIS Team</option>
                                <option value="CA">CA</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="flex-1 min-w-[200px]">
                            <x-input-label for="role" :value="__('Choose Status')" />
                            <select class="form-control block mt-1 w-full" name="status" required>
                                <option value="">Choose Status</option>
                                <option value="Active">Active</option>
                                <option value="In Active">In Active</option>
                            </select>
                        </div>
                    </div>
                    <!-- Access Rights -->
                    <div class="col-12">
                        <x-input-label value="Sanction Menu" />
                        <div class="flex flex-wrap gap-x-6 gap-y-4  mb-4"> <!-- flex-wrap to allow wrapping and space-x-6 for spacing -->

                            <label class="inline-flex items-center" style="margin:0px 10px;">
                                <input type="checkbox" style="margin-right: 5px;" name="access[]" value="credit-menu" class="mr-2"> Credit Menu
                            </label>
                            <label class="inline-flex items-center" style="margin:0px 10px;">
                                <input type="checkbox" style="margin-right: 5px;" name="access[]" value="disbursal-menu" class="mr-2"> Disbursal Menu
                            </label>
                            <label class="inline-flex items-center" style="margin:0px 10px;">
                                <input type="checkbox" style="margin-right: 5px;" name="access[]" value="collection-menu" class="mr-2"> Collection Menu
                            </label>
                            <label class="inline-flex items-center text-center" style="margin:0px 10px;">
                                <input type="checkbox" style="margin-right: 5px;" name="access[]" value="lead-profile-details" class="mr-2"> Lead Profile Details
                            </label>
                        </div>
                        <x-input-error :messages="$errors->get('access')" class="mt-2" />
                    </div>
                    <div class="col-md-4">
                        <x-input-label value="Access Permission " />
                        <div class="flex flex-wrap gap-x-6 gap-y-4  mb-4"> <!-- flex-wrap to allow wrapping and space-x-6 for spacing -->
                            <label class="inline-flex items-center" style="margin:0px 10px;">
                                <input type="checkbox" style="margin-right: 5px;" name="access[]" value="checkAll" class="mr-2"> Check all
                            </label>
                        </div>
                        <x-input-error :messages="$errors->get('access')" class="mt-2" />
                    </div>
                    <div class="col-md-4">
                        <x-input-label value="Managemanent Menu " />
                        <div class="flex flex-wrap gap-x-6 gap-y-4  mb-4"> <!-- flex-wrap to allow wrapping and space-x-6 for spacing -->
                            <label class="inline-flex items-center" style="margin:0px 10px;">
                                <input type="checkbox" name="access[]" style="margin-right: 5px;" value="management-menu" class="mr-2"> Management Menu
                            </label>
                            <label class="inline-flex items-center" style="margin:0px 10px;">
                                <input type="checkbox" name="access[]" style="margin-right: 5px;" value="add-profile" class="mr-2"> Add Profile
                            </label>
                            <label class="inline-flex items-center" style="margin:0px 10px;">
                                <input type="checkbox" name="access[]" style="margin-right: 5px;" value="edit-profile" class="mr-2">Edit Profile
                            </label>
                        </div>
                        <x-input-error :messages="$errors->get('access')" class="mt-2" />
                    </div>
                    <div class="col-md-4">
                        <x-input-label value="Leads Menu " />

                        <div class="flex flex-wrap gap-x-6 gap-y-4  mb-4"> <!-- flex-wrap to allow wrapping and space-x-6 for spacing -->
                            <label class="inline-flex items-center" style="margin:0px 10px;">
                                <input type="checkbox" name="access[]" style="margin-right: 5px;" value="leads-menu" class="mr-2"> Leads Menu
                            </label>
                            <label class="inline-flex items-center" style="margin:0px 10px;">
                                <input type="checkbox" name="access[]" style="margin-right: 5px;" value="fresh-lead" class="mr-2"> Fresh Lead
                            </label>
                            <label class="inline-flex items-center" style="margin:0px 10px;">
                                <input type="checkbox" name="access[]" style="margin-right: 5px;" value="callback" class="mr-2">CallBack
                            </label>
                            <label class="inline-flex items-center" style="margin:0px 10px;">
                                <input type="checkbox" name="access[]" style="margin-right: 5px;" value="not-interested" class="mr-2">Not Interested
                            </label>
                            <label class="inline-flex items-center" style="margin:0px 10px;">
                                <input type="checkbox" name="access[]" style="margin-right: 5px;" value="no-answer" class="mr-2">No Answer
                            </label>
                            <label class="inline-flex items-center" style="margin:0px 10px;">
                                <input type="checkbox" name="access[]" style="margin-right: 5px;" value="duplicate" class="mr-2">Duplicate
                            </label>
                            <label class="inline-flex items-center" style="margin:0px 10px;">
                                <input type="checkbox" name="access[]" style="margin-right: 5px;" value="dnc" class="mr-2">DNC
                            </label>

                            <label class="inline-flex items-center" style="margin:0px 10px;">
                                <input type="checkbox" name="access[]" style="margin-right: 5px;" value="incomplete-documents" class="mr-2">Incomplete Documents
                            </label>
                            <label class="inline-flex items-center" style="margin:0px 10px;">
                                <input type="checkbox" name="access[]" style="margin-right: 5px;" value="Interested" class="mr-2">Interested
                            </label>
                            <label class="inline-flex items-center" style="margin:0px 10px;">
                                <input type="checkbox" name="access[]" style="margin-right: 5px;" value="document-received" class="mr-2"> Document Received
                            </label>
                        </div>
                        <div class="flex flex-wrap gap-x-6 gap-y-4  mb-4">

                            <label class="inline-flex items-center" style="margin:0px 10px;">
                                <input type="checkbox" name="access[]" style="margin-right: 5px;" value="blacklisted" class="mr-2"> Blacklisted
                            </label>
                            <label class="inline-flex items-center" style="margin:0px 10px;">
                                <input type="checkbox" name="access[]" style="margin-right: 5px;" value="send-back" class="mr-2"> Send back
                            </label>

                            <label class="inline-flex items-center" style="margin:0px 10px;">
                                <input type="checkbox" name="access[]" style="margin-right: 5px;" value="whatsapp" class="mr-2"> whatsapp
                            </label>
                            <label class="inline-flex items-center" style="margin:0px 10px;">
                                <input type="checkbox" name="access[]" style="margin-right: 5px;" value="no-credit-card" class="mr-2"> No credit card
                            </label>
                            <label class="inline-flex items-center" style="margin:0px 10px;">
                                <input type="checkbox" name="access[]" style="margin-right: 5px;" value="in-sufficient-banking" class="mr-2">In sufficient banking
                            </label>


                            <label class="inline-flex items-center" style="margin:0px 10px;">
                                <input type="checkbox" name="access[]" style="margin-right: 5px;" value="filter-data" class="mr-2">Filter data
                            </label>
                            <label class="inline-flex items-center" style="margin:0px 10px;">
                                <input type="checkbox" name="access[]" style="margin-right: 5px;" value="rejected-case" class="mr-2">Rejected Case
                            </label>

                            <label class="inline-flex items-center" style="margin:0px 10px;">
                                <input type="checkbox" name="access[]" style="margin-right: 5px;" value="jammu-data" class="mr-2">Jammu data
                            </label>
                            <label class="inline-flex items-center" style="margin:0px 10px;">
                                <input type="checkbox" name="access[]" style="margin-right: 5px;" value="ntc" class="mr-2"> NTC
                            </label>
                        </div>

                        <x-input-error :messages="$errors->get('access')" class="mt-2" />
                    </div>
                    <div class="col-md-4">
                        <x-input-label value="Sanction Menu" />
                        <div class="flex flex-wrap gap-x-6 gap-y-4  mb-4"> <!-- flex-wrap to allow wrapping and space-x-6 for spacing -->
                            <label class="inline-flex items-center" style="margin:0px 10px;">
                                <input type="checkbox" name="access[]" style="margin-right: 5px;" value="sanction-menu" class="mr-2"> Sanction Menu
                            </label>
                            <label class="inline-flex items-center" style="margin:0px 10px;">
                                <input type="checkbox" name="access[]" style="margin-right: 5px;" value="approved-process" class="mr-2"> Approved Process
                            </label>
                            <label class="inline-flex items-center" style="margin:0px 10px;">
                                <input type="checkbox" name="access[]" style="margin-right: 5px;" value="rejected-process" class="mr-2"> Rejected Process
                            </label>
                            <label class="inline-flex items-center" style="margin:0px 10px;">
                                <input type="checkbox" name="access[]" style="margin-right: 5px;" value="hold-process " class="mr-2"> Hold Process
                            </label>
                            <label class="inline-flex items-center" style="margin:0px 10px;">
                                <input type="checkbox" name="access[]" style="margin-right: 5px;" value="not-required-process" class="mr-2"> Not Required Process
                            </label>
                            <label class="inline-flex items-center" style="margin:0px 10px;">
                                <input type="checkbox" name="access[]" style="margin-right: 5px;" value="initiate-esign" class="mr-2">Initiate Esign
                            </label>

                        </div>

                    </div>
                    <div class="col-md-4">
                        <x-input-label value="Credit Menu" />
                        <div class="flex flex-wrap gap-x-6 gap-y-4  mb-4"> <!-- flex-wrap to allow wrapping and space-x-6 for spacing -->
                            <label class="inline-flex items-center" style="margin:0px 10px;">
                                <input type="checkbox" name="access[]" style="margin-right: 5px;" value="credit-menu" class="mr-2"> Credit Menu
                            </label>
                            <label class="inline-flex items-center" style="margin:0px 10px;">
                                <input type="checkbox" name="access[]" style="margin-right: 5px;" value="approved" class="mr-2">Approved
                            </label>
                            <label class="inline-flex items-center" style="margin:0px 10px;">
                                <input type="checkbox" name="access[]" style="margin-right: 5px;" value="rejected" class="mr-2"> Rejected
                            </label>
                            <label class="inline-flex items-center" style="margin:0px 10px;">
                                <input type="checkbox" name="access[]" style="margin-right: 5px;" value="hold" class="mr-2"> Hold
                            </label>
                            <label class="inline-flex items-center" style="margin:0px 10px;">
                                <input type="checkbox" name="access[]" style="margin-right: 5px;" value="not-required" class="mr-2"> Not Required
                            </label>
                            <label class="inline-flex items-center" style="margin:0px 10px;">
                                <input type="checkbox" name="access[]" style="margin-right: 5px;" value="initiate-esign " class="mr-2">Initiate Esign
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <x-input-label value="Credit Menu" />
                        <div class="flex flex-wrap gap-x-6 gap-y-4  mb-4"> <!-- flex-wrap to allow wrapping and space-x-6 for spacing -->
                            <label class="inline-flex items-center" style="margin:0px 10px;">
                                <input type="checkbox" name="access[]" style="margin-right: 5px;" value="credit-menu" class="mr-2"> Credit Menu
                            </label>
                            <label class="inline-flex items-center" style="margin:0px 10px;">
                                <input type="checkbox" name="access[]" style="margin-right: 5px;" value="approved" class="mr-2">Approved
                            </label>
                            <label class="inline-flex items-center" style="margin:0px 10px;">
                                <input type="checkbox" name="access[]" style="margin-right: 5px;" value="rejected" class="mr-2"> Rejected
                            </label>
                            <label class="inline-flex items-center" style="margin:0px 10px;">
                                <input type="checkbox" name="access[]" style="margin-right: 5px;" value="hold" class="mr-2"> Hold
                            </label>
                            <label class="inline-flex items-center" style="margin:0px 10px;">
                                <input type="checkbox" name="access[]" style="margin-right: 5px;" value="not-required" class="mr-2"> Not Required
                            </label>
                            <label class="inline-flex items-center" style="margin:0px 10px;">
                                <input type="checkbox" name="access[]" style="margin-right: 5px;" value="initiate-esign " class="mr-2">Initiate Esign
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <x-input-label value="Disbursal Menu" />
                        <div class="flex flex-wrap gap-x-6 gap-y-4  mb-4"> <!-- flex-wrap to allow wrapping and space-x-6 for spacing -->
                            <label class="inline-flex items-center" style="margin:0px 10px;">
                                <input type="checkbox" name="access[]" style="margin-right: 5px;" value="disbursal-menu" class="mr-2"> Disbursal Menu
                            </label>
                            <label class="inline-flex items-center" style="margin:0px 10px;">
                                <input type="checkbox" name="access[]" style="margin-right: 5px;" value="bank-update" class="mr-2">Bank Update
                            </label>
                            <label class="inline-flex items-center" style="margin:0px 10px;">
                                <input type="checkbox" name="access[]" style="margin-right: 5px;" value="disbursed" class="mr-2"> Disbursed
                            </label>
                            <label class="inline-flex items-center" style="margin:0px 10px;">
                                <input type="checkbox" name="access[]" style="margin-right: 5px;" value="Bank-update_rejected " class="mr-2">Bank Update Rejected
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <x-input-label value="Collection Menu " />
                        <div class="flex flex-wrap gap-x-6 gap-y-4  mb-4"> <!-- flex-wrap to allow wrapping and space-x-6 for spacing -->
                            <label class="inline-flex items-center" style="margin:0px 10px;">
                                <input type="checkbox" name="access[]" style="margin-right: 5px;" value="collection-menu" class="mr-2">Collection Menu
                            </label>
                            <label class="inline-flex items-center" style="margin:0px 10px;">
                                <input type="checkbox" name="access[]" style="margin-right: 5px;" value="payday-payment-pending " class="mr-2">Payday Payment Pending
                            </label>
                            <label class="inline-flex items-center" style="margin:0px 10px;">
                                <input type="checkbox" name="access[]" style="margin-right: 5px;" value="closed" class="mr-2">Closed
                            </label>
                            <label class="inline-flex items-center" style="margin:0px 10px;">
                                <input type="checkbox" name="access[]" style="margin-right: 5px;" value="part-payment" class="mr-2">Part Payment
                            </label>
                            <label class="inline-flex items-center" style="margin:0px 10px;">
                                <input type="checkbox" name="access[]" style="margin-right: 5px;" value="settlement" class="mr-2">Settlement
                            </label>
                        </div>

                    </div>
                    <div class="col-md-4">
                        <x-input-label value="Lead Profile Details" />
                        <div class="flex flex-wrap gap-x-6 gap-y-4  mb-4"> <!-- flex-wrap to allow wrapping and space-x-6 for spacing -->
                            <label class="inline-flex items-center" style="margin:0px 10px;">
                                <input type="checkbox" name="access[]" style="margin-right: 5px;" value="view-loan-apply-details" class="mr-2">View Loan Apply Details
                            </label>
                            <label class="inline-flex items-center" style="margin:0px 10px;">
                                <input type="checkbox" name="access[]" style="margin-right: 5px;" value="address-add-details" class="mr-2">Address add Details
                            </label>
                            <label class="inline-flex items-center" style="margin:0px 10px;">
                                <input type="checkbox" name="access[]" style="margin-right: 5px;" value="address-view-details" class="mr-2">Address View Details
                            </label>
                            <label class="inline-flex items-center" style="margin:0px 10px;">
                                <input type="checkbox" name="access[]" style="margin-right: 5px;" value="employment-add-details" class="mr-2">Employment add Details
                            </label>
                            <label class="inline-flex items-center" style="margin:0px 10px;">
                                <input type="checkbox" name="access[]" style="margin-right: 5px;" value="employment-view-details" class="mr-2">Employment View Details
                            </label>
                        </div>
                        <div class="flex flex-wrap gap-x-6 gap-y-4  mb-4">
                            <label class="inline-flex items-center" style="margin:0px 10px;">
                                <input type="checkbox" name="access[]" style="margin-right: 5px;" value="reference-add-details" class="mr-2">Reference add Details
                            </label>
                            <label class="inline-flex items-center" style="margin:0px 10px;">
                                <input type="checkbox" name="access[]" style="margin-right: 5px;" value="reference-view-details " class="mr-2">Reference View Details
                            </label>
                            <label class="inline-flex items-center" style="margin:0px 10px;">
                                <input type="checkbox" name="access[]" style="margin-right: 5px;" value="credit-add-details" class="mr-2">Credit add Details
                            </label>
                            <label class="inline-flex items-center" style="margin:0px 10px;">
                                <input type="checkbox" name="access[]" style="margin-right: 5px;" value="credit-edit-details" class="mr-2">Credit Edit Details
                            </label>
                            <label class="inline-flex items-center" style="margin:0px 10px;">
                                <input type="checkbox" name="access[]" style="margin-right: 5px;" value="credit-change-status" class="mr-2">Credit Change Status
                            </label>
                            <label class="inline-flex items-center" style="margin:0px 10px;">
                                <input type="checkbox" name="access[]" style="margin-right: 5px;" value="credit-view-details" class="mr-2">Credit View Details
                            </label>
                            <label class="inline-flex items-center" style="margin:0px 10px;">
                                <input type="checkbox" name="access[]" style="margin-right: 5px;" value="bank-add-details" class="mr-2">Bank add Details
                            </label>
                        </div>
                        <div class="flex flex-wrap gap-x-6 gap-y-4  mb-4">
                            <label class="inline-flex items-center" style="margin:0px 10px;">
                                <input type="checkbox" name="access[]" style="margin-right: 5px;" value="bank-update-reject" class="mr-2">Bank update Reject
                            </label>
                            <label class="inline-flex items-center" style="margin:0px 10px;">
                                <input type="checkbox" name="access[]" style="margin-right: 5px;" value="disbursal-view-details" class="mr-2">Disbursal View Details
                            </label>
                            <label class="inline-flex items-center" style="margin:0px 10px;">
                                <input type="checkbox" name="access[]" style="margin-right: 5px;" value="update-bank-account" class="mr-2">Update Bank Account
                            </label>
                            <label class="inline-flex items-center" style="margin:0px 10px;">
                                <input type="checkbox" name="access[]" style="margin-right: 5px;" value="update-bank-account" class="mr-2">Update Bank Account
                            </label>
                            <label class="inline-flex items-center" style="margin:0px 10px;">
                                <input type="checkbox" name="access[]" style="margin-right: 5px;" value="disbursed-amount-payouts-razorpay-failed-update " class="mr-2">Disbursed Amount Payouts Razorpay Failed update
                            </label>
                        </div>
                        <div class="flex flex-wrap gap-x-6 gap-y-4  mb-4">
                            <label class="inline-flex items-center" style="margin:0px 10px;">
                                <input type="checkbox" name="access[]" style="margin-right: 5px;" value="disbursed-amount-payouts-razorpay-failed-update " class="mr-2">Disbursed Amount Payouts Razorpay Failed update
                            </label>
                            <label class="inline-flex items-center" style="margin:0px 10px;">
                                <input type="checkbox" name="access[]" style="margin-right: 5px;" value="view-loan-details" class="mr-2">View Loan Detals
                            </label>
                            <label class="inline-flex items-center" style="margin:0px 10px;">
                                <input type="checkbox" name="access[]" style="margin-right: 5px;" value="remark-add-details" class="mr-2">Remark add Details
                            </label>
                            <label class="inline-flex items-center" style="margin:0px 10px;">
                                <input type="checkbox" name="access[]" style="margin-right: 5px;" value="remark-view-details" class="mr-2">Remark View Details
                            </label>
                            <label class="inline-flex items-center" style="margin:0px 10px;">
                                <input type="checkbox" name="access[]" style="margin-right: 5px;" value="collection-add-details" class="mr-2">Collection add Details
                            </label>
                        </div>
                        <div class="flex flex-wrap gap-x-6 gap-y-4  mb-4">
                            <label class="inline-flex items-center" style="margin:0px 10px;">
                                <input type="checkbox" name="access[]" style="margin-right: 5px;" value="collection-view-details " class="mr-2">Collection View Details
                            </label>
                            <label class="inline-flex items-center" style="margin:0px 10px;">
                                <input type="checkbox" name="access[]" style="margin-right: 5px;" value="document-add-details" class="mr-2">Document add Details
                            </label>
                            <label class="inline-flex items-center" style="margin:0px 10px;">
                                <input type="checkbox" name="access[]" style="margin-right: 5px;" value="document-view-details " class="mr-2">Document View Details
                            </label>
                            <label class="inline-flex items-center" style="margin:0px 10px;">
                                <input type="checkbox" name="access[]" style="margin-right: 5px;" value="E-mandate-view" class="mr-2">E-mandate View
                            </label>
                            <label class="inline-flex items-center" style="margin:0px 10px;">
                                <input type="checkbox" name="access[]" style="margin-right: 5px;" value="E-mandate-view" class="mr-2">E-mandate View
                            </label>
                            <label class="inline-flex items-center" style="margin:0px 10px;">
                                <input type="checkbox" name="access[]" style="margin-right: 5px;" value="E-mandate-charge" class="mr-2">E-mandate Charge
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <x-input-label value="Reports" />
                        <div class="flex flex-wrap gap-x-6 gap-y-4  mb-4"> <!-- flex-wrap to allow wrapping and space-x-6 for spacing -->
                            <label class="inline-flex items-center" style="margin:0px 10px;">
                                <input type="checkbox" name="access[]" style="margin-right: 5px;" value="reports-menu" class="mr-2">Reports Menu
                            </label>
                            <label class="inline-flex items-center" style="margin:0px 10px;">
                                <input type="checkbox" name="access[]" style="margin-right: 5px;" value="disbursed-data" class="mr-2">Disbursed Data
                            </label>
                            <label class="inline-flex items-center" style="margin:0px 10px;">
                                <input type="checkbox" name="access[]" style="margin-right: 5px;" value="collection-data" class="mr-2">Collection Data
                            </label>
                            <label class="inline-flex items-center" style="margin:0px 10px;">
                                <input type="checkbox" name="access[]" style="margin-right: 5px;" value="total-lead-data" class="mr-2">Total Lead Data
                            </label>
                            <label class="inline-flex items-center" style="margin:0px 10px;">
                                <input type="checkbox" name="access[]" style="margin-right: 5px;" value="employee-reports" class="mr-2">Employee Reports
                            </label>
                            <label class="inline-flex items-center" style="margin:0px 10px;">
                                <input type="checkbox" name="access[]" style="margin-right: 5px;" value="collection-reports" class="mr-2"> Collection Reports
                            </label>
                        </div>
                        <div class="flex flex-wrap gap-x-6 gap-y-4  mb-4"> <!-- flex-wrap to allow wrapping and space-x-6 for spacing -->
                            <label class="inline-flex items-center" style="margin:0px 10px;">
                                <input type="checkbox" name="access[]" style="margin-right: 5px;" value="collection-reports-display-disbursed" class="mr-2"> Collection Reports display disbursed
                            </label>
                            <label class="inline-flex items-center" style="margin:0px 10px;">
                                <input type="checkbox" name="access[]" style="margin-right: 5px;" value="all-lead-reports" class="mr-2">All Lead Reports
                                <label class="inline-flex items-center" style="margin:0px 10px;">
                                    <input type="checkbox" name="access[]" style="margin-right: 5px;" value="all-lead-report-download" class="mr-2">All Lead Reports Download
                                </label>
                                <label class="inline-flex items-center" style="margin:0px 10px;">
                                    <input type="checkbox" name="access[]" style="margin-right: 5px;" value="lead-type-reports-download" class="mr-2">Lead Type Reports Download
                                </label>
                                <label class="inline-flex items-center" style="margin:0px 10px;">
                                    <input type="checkbox" name="access[]" style="margin-right: 5px;" value="follow-up-menu" class="mr-2">Follow up Menu
                                </label>
                        </div>
                        <div class="flex flex-wrap gap-x-6 gap-y-4  mb-4">
                            <label class="inline-flex items-center" style="margin:0px 10px;">
                                <input type="checkbox" name="access[]" style="margin-right: 5px;" value="collection-bucket-menu" class="mr-2"> Collection Bucket Menu
                            </label>
                            <label class="inline-flex items-center" style="margin:0px 10px;">
                                <input type="checkbox" name="access[]" style="margin-right: 5px;" value="collection-manager" class="mr-2"> Collection Manager
                            </label>
                            <label class="inline-flex items-center" style="margin:0px 10px;">
                                <input type="checkbox" name="access[]" style="margin-right: 5px;" value="collection-refund" class="mr-2"> Collection Refund
                            </label>
                            <label class="inline-flex items-center" style="margin:0px 10px;">
                                <input type="checkbox" name="access[]" style="margin-right: 5px;" value="online-payment-details" class="mr-2">Online Payment Details
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <x-input-label value="Reports" />
                        <div class="flex flex-wrap gap-x-6 gap-y-4  mb-4"> <!-- flex-wrap to allow wrapping and space-x-6 for spacing -->
                            <label class="inline-flex items-center" style="margin:0px 10px;">
                                <input type="checkbox" name="access[]" style="margin-right: 5px;" value="reports-menu" class="mr-2">Today city Report
                            </label>
                            <label class="inline-flex items-center" style="margin:0px 10px;">
                                <input type="checkbox" name="access[]" style="margin-right: 5px;" value="Monthly Report" class="mr-2">Monthly Report
                            </label>
                            <label class="inline-flex items-center" style="margin:0px 10px;">
                                <input type="checkbox" name="access[]" style="margin-right: 5px;" value="lead-Report" class="mr-2"> lead Report
                            </label>
                            <label class="inline-flex items-center" style="margin:0px 10px;">
                                <input type="checkbox" name="access[]" style="margin-right: 5px;" value="call-report" class="mr-2">Call Report
                            </label>
                            <label class="inline-flex items-center" style="margin:0px 10px;">
                                <input type="checkbox" name="access[]" style="margin-right: 5px;" value="sanction-Report" class="mr-2">Sanction Report
                            </label>
                            <label class="inline-flex items-center" style="margin:0px 10px;">
                                <input type="checkbox" name="access[]" style="margin-right: 5px;" value="credit-report" class="mr-2">Credit Report
                            </label>
                            <label class="inline-flex items-center" style="margin:0px 10px;">
                                <input type="checkbox" name="access[]" style="margin-right: 5px;" value="collection-report" class="mr-2">Collection Report
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <x-input-label value="Other Report " />
                        <div class="flex flex-wrap gap-x-6 gap-y-4  mb-4"> <!-- flex-wrap to allow wrapping and space-x-6 for spacing -->
                            <label class="inline-flex items-center" style="margin:0px 10px;">
                                <input type="checkbox" name="access[]" style="margin-right: 5px;" value="penny-drop" class="mr-2">Penny Drop
                            </label>
                            <label class="inline-flex items-center" style="margin:0px 10px;">
                                <input type="checkbox" name="access[]" style="margin-right: 5px;" value="Bulk Lead Allocation" class="mr-2">Bulk Lead Allocation
                            </label>
                            <label class="inline-flex items-center" style="margin:0px 10px;">
                                <input type="checkbox" name="access[]" style="margin-right: 5px;" value="Dashboard employee reports" class="mr-2"> Dashboard employee reports
                            </label>
                            <label class="inline-flex items-center" style="margin:0px 10px;">
                                <input type="checkbox" name="access[]" style="margin-right: 5px;" value="app-logs" class="mr-2">APP Logs
                            </label>
                            <label class="inline-flex items-center" style="margin:0px 10px;">
                                <input type="checkbox" name="access[]" style="margin-right: 5px;" value="bulk-upload-lead" class="mr-2">Bulk Upload Lead
                            </label>
                            <label class="inline-flex items-center" style="margin:0px 10px;">
                                <input type="checkbox" name="access[]" style="margin-right: 5px;" value="blacklisted-customer" class="mr-2">blacklisted Customer
                            </label>
                        </div>
                    </div>
                    <!-- Buttons -->
                    <div class="flex justify-between items-center mt-4 w-full">
                        <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                        </a>
                        <x-primary-button>
                            {{ __('Register') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection