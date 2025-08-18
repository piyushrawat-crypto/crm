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
                <i class="fa fa-users me-2"></i> Customer List
            </h4>
        </div>

        <div class="card-body p-4">
            <div class="table-responsive">
                <table id="managementTable" class="table table-hover table-bordered align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>ID</th>
                            <th>Action</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Mobile</th>
                            <th>Pancard</th>
                            <th>Aadhar No.</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#managementTable').DataTable({
            processing: true,
            scrollX: true,
            serverSide: false,
            ajax: {
                url: "{{ route('customer-list') }}",
                type: "GET",
                dataSrc: function(json) {
                    return json.data;
                }
            },
            columns: [{
                    data: 'customerID',
                    name: 'customerID'
                },
                {
                    data: 'name',
                    name: 'name'
                },
                {
                    data: 'email',
                    name: 'email'
                },
              
                {
                    data: 'mobile',
                    name: 'mobile'
                },
                {
                    data: 'pancard',
                    name: 'pancard'
                },
                {
                    data: 'aadhar_no',
                    name: 'aadhar_no'
                },
               
                {
                    data: 'isVerified',
                    name: 'isVerified'
                }
                
            ],
           
        });
    });
</script>
@endsection