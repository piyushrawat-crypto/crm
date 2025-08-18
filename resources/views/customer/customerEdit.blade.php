@extends('../layouts.app')

@section('title')
CRM - Customer List
@endsection

@section('content')
<div class="col-md-12">
    <div class="card shadow-lg border-0 mb-4">
        <div class="card-header text-white d-flex justify-content-between align-items-center"
            style="background: linear-gradient(90deg, #4e73df, #1cc88a); border-radius: 10px 10px 0 0;">
            <h4 class="mb-0">
                <i class="fa fa-users me-2"></i> Customer Edit
            </h4>
        </div>

        <div class="table_section padding_infor_info">
            <div class="table-responsive-sm">

                <form action="#" method="post">

                    <input type="hidden" class="form-control" name="c_id" value="790303">

                    @csrf
                    @method('PUT')
                    <div class="row">


                        <div class="col-md-4">
                            <label for="email">First name</label>
                            <input type="text" class="form-control" name="name" value="PENUGONDA MOTHI" required="">
                        </div>




                        <div class="col-md-4">
                            <label for="email">Mobile</label>
                            <input type="number" class="form-control" name="mobile" value="9398425705" required="">
                        </div>


                        <div class="col-md-4">
                            <label for="email">Email ID</label>
                            <input type="email" class="form-control" name="email" value="PENUGONDATEJA1@GMAIL.COM" required="">
                        </div>


                        <div class="col-md-4">
                            <label for="email">Gender</label>
                            <select class="form-control" name="gender" required="">
                                <option value="">Choose Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>



                        <div class="col-md-4">
                            <label for="email">Date of Birth</label>
                            <input type="date" class="form-control" name="dob" value="0000-00-00" required="">
                        </div>

                        <div class="col-md-4" style="margin-bottom: 15px;">
                            <label for="email">Pancard</label>
                            <input type="text" class="form-control" name="pancard" value="">
                        </div>


                        <div class="col-md-4">
                            <label for="email">Aadhar No.</label>
                            <input type="text" class="form-control" name="aadharNo" value="">
                        </div>



                        <div class="col-md-12">
                            <button type="submit" name="cust_submit" class="btn cur-p btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection