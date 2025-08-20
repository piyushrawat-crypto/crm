@extends('../layouts.app')
@section('title')
CRM - IVR Status
@endsection
@section('content')

<div class="col-md-12">
    <div class="white_shd full margin_bottom_30">
        <div class="card-header bg-gradient text-white d-flex justify-content-between align-items-center"
            style="background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);">
            <h5 class="mb-0 fw-bold">👥 IVR StatusDetails</h5>
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
                            <th>Type</th>
                            <th>IVR Status Name</th>
                            <th>Url</th>
                            <th>Status</th>
                            <th>Date</th>
                            <th>Action</th>
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
            ajax: "{{ route('ivrstatus-data') }}", // Laravel route for data
            columns: [{
                    data: 'id',
                    name: 'id'
                },
                {
                    data: 'type',
                    name: 'type'
                },
                {
                    data: 'ivr_status_name',
                    name: 'ivr_status_name'
                },
                {
                    data: 'url',
                    name: 'url'
                },
                {
                    data: 'status',
                    name: 'status'
                },
                {
                    data: 'created_at',
                    name: 'created_at'
                },
              
                {
                    data: 'id',
                    name: 'action',
                    orderable: false,
                    searchable: false,
                    render: function(data) {
                        return `
                            <a href="/edit-ivrstatus/${data}/" class="btn btn-sm btn-primary">Edit</a>
                           
                        `;
                    }
                },
            ]
        });
    });
</script>

@endsection