@extends('../layouts.app')
@section('title')
CRM - Black List
@endsection
@section('content')

<div class="col-md-12">
    <div class="white_shd full margin_bottom_30">
        <div class="card-header bg-gradient text-white d-flex justify-content-between align-items-center"
            style="background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);">
            <h5 class="mb-0 fw-bold">👥 Black List Customer</h5>
            <a href="{{route('add-blacklist')}}" class="btn btn-light btn-sm rounded-pill shadow-sm">
                <i class="bi bi-plus-circle"></i> Add User
            </a>
        </div>

        <div class="table_section padding_infor_info">
            <div class="table-responsive-md">
                <table id="managementTable" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>PAN</th>
                            <th>Email</th>
                            <th>Mobile</th>
                            <th>Reason</th>
                            <th>Date</th>
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
            serverSide: false,

            ajax: {
                url: "{{ route('blacklist-data') }}",
                type: "GET",
                dataSrc: function(json) {
                    return json.data;
                }
            },
            columns: [{
                    data: 'id'
                },
                {
                    data: 'pan'
                },
                {
                    data: 'email'
                },
                {
                    data: 'mobile'
                },
                {
                    data: 'remark'
                },
                {
                    data: 'created_date'
                }
            ],

            pageLength: 20,
            lengthMenu: [20, 40, 60, 80, 100],
            ordering: true,
            searching: true
        });
    });
</script>

@endsection