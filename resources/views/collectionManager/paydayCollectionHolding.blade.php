@extends('../layouts.app')
@section('title')
Collection Holding
@endsection
@section('content')

<div class="col-md-12">
    <div class="white_shd full margin_bottom_30">
         <div class="card-header text-white d-flex justify-content-between align-items-center"
            style="background: linear-gradient(90deg, #4e73df, #1cc88a); border-radius: 10px 10px 0 0;">
            <h4 class="mb-0">
                <i class="fa fa-users me-2"></i> Collection Payment Holding
            </h4>

        </div>
    

        <div class="table_section padding_infor_info">
            <div class="table-responsive-md">
                <table id="managementTable" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Loan No.</th>
                            <th>Name</th>
                            <th>Mobile</th>
                            <th>Email</th>
                            <th>Loan Amount</th>
                            <th>Repayment Amount</th>
                            <th>Amount</th>
                           
                            <th>Payment Slip</th>
                            <th>Status</th>
                            <th>Payment Mode</th>
                            <th>Payment Date</th>
                            <th>Reference No</th>
                            <th>Remark</th>
                            <th>Collected By</th>
                            <th>Date</th>
                            <th>Hold By</th>
                            <th>Hold Date</th>
                          
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- Example Row --}}
                        {{-- You will replace this with @foreach($users as $user) --}}
                        <tr>
                            <td>1</td>
                            <td>MFLSL2025077596</td>
                            <td>GAJERA HARDIKKUMAR	</td>
                            <td>9081932011 </td>
                            <td>GHB191119@GMAIL.COM</td>
                            <td>14000</td>
                            <td>17500</td>
                            <td>17500</td>
                            <td>17500</td>
                            <td>No</td>
                            <td>Closed</td>
                            <td>UPI</td>
                            <td>12-08-2025</td>
                            <td>559057524216</td>
                            <td>full payment (pls close this loan cxtmr is jobless offer diya close tha tab arange krke pay kiya hai or blacklist krdo)</td>
                            <td>Sachin Rana</td>
                            <td>2025-08-12 14:13:19</td>
                            <td>Annu Patel</td>
                            <td>2025-08-12 12:25:02</td>
                          
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<script>
    $(document).ready(function() {
        $('#managementTable').DataTable({
            pageLength: 20,
            lengthMenu: [20, 40, 60, 80, 100],
            ordering: true,
            searching: true,
            scrollX: true
        });
    });
</script>

@endsection