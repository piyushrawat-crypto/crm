@extends('../layouts.app')
@section('title')
CRM - Profile
@endsection
@section('content')
<div class="full_container">
    <div class="inner_container">
        <!-- Sidebar  -->

        <!-- end topbar -->
        <!-- dashboard inner -->

        <div class="container-fluid">

            <!-- row -->
            <div class="row">
                <!-- table section -->
                <div class="col-md-12">
                    <div class="white_shd full margin_bottom_30">
                        <div class="full graph_head">
                            <div class="heading1 margin_0">
                                <h2>Edit Profile</h2>
                            </div>
                        </div>
                        <div class="table_section padding_infor_info">
                            <div class="table-responsive-sm">

                                <form action="#" method="post">
                                    <div class="row">

                                        <div class="col-md-4">
                                            <label for="email">Name</label>
                                            <input type="text" class="form-control" name="name" value="" required />
                                        </div>

                                        <div class="col-md-4">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" name="email" value="" required />
                                        </div>


                                        <div class="col-md-4">
                                            <label for="email">Mobile</label>
                                            <input type="number" class="form-control" name="mobile" value="" required />
                                        </div>

                                        <div class="col-md-4">
                                            <label for="email">Login User ID</label>
                                            <input type="text" class="form-control" name="userName" value="" required />
                                        </div>

                                        <div class="col-md-4">
                                            <label for="email"> Password</label>
                                            <input type="password" class="form-control" name="password" />
                                        </div>

                                        <div class="col-md-12">
                                            <button type="submit" name="submit" class="btn cur-p btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- table section -->
@endsection