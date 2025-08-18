@extends('../layouts.app')
@section('title')
CRM - User List
@endsection

@section('content')
<div class="col-md-12">
    <div class="card shadow-sm border-0 rounded-3">
        <!-- Header -->
        <div class="card-header bg-gradient text-white d-flex justify-content-between align-items-center"
            style="background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);">
            <h5 class="mb-0 fw-bold">👥 Management Profile Details</h5>
            <a href="{{route('create-profile')}}" class="btn btn-light btn-sm rounded-pill shadow-sm">
                <i class="bi bi-plus-circle"></i> Add User
            </a>
        </div>

        <!-- Table -->
        <div class="card-body">
            <div class="table-responsive">
                <table id="managementTable"
                    class="table table-striped align-middle text-center table-bordered border-light shadow-sm">
                    <thead style="background: #f8f9fa;">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>User Name</th>
                            <th>Email</th>
                            <th>Mobile</th>
                            <th>Branch</th>
                            <th>Role</th>
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
<style>
    .compact-table th,
    .compact-table td {
        padding: 6px 8px !important;
        font-size: 12px;
        line-height: 1.2;
    }

    .compact-table .btn {
        font-size: 11px;
        padding: 3px 8px;
    }

    .compact-table .badge {
        font-size: 11px;
        padding: 4px 8px;
    }

    .dataTables_wrapper .dataTables_filter input {
        font-size: 12px;
        padding: 3px 6px;
    }

    .dataTables_wrapper .dataTables_length select {
        font-size: 12px;
        padding: 2px 5px;
    }
</style>
<script>
    $(document).ready(function() {
        $('#managementTable').DataTable({
            processing: true,
            scrollX: true,
            serverSide: false,
            ajax: {
                url: "{{ route('management-list') }}",
                type: "GET",
                dataSrc: function(json) {
                    return json.data;
                }
            },
            columns: [{
                    data: 'id',
                    name: 'id'
                },
                {
                    data: 'name',
                    name: 'name'
                },
                {
                    data: 'userName',
                    name: 'userName'
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
                    data: 'branch',
                    name: 'branch'
                },
                {
                    data: 'role',
                    name: 'role'
                },
                {
                    data: 'status',
                    render: function(data) {
                        let badgeClass = (data === 'Active') ? 'success' : 'secondary';
                        return `<span class="badge bg-${badgeClass} px-3 py-2 rounded-pill shadow-sm">${data}</span>`;
                    }
                },
                {
                    data: 'created_at',
                    name: 'created_at'
                },
                {
                    data: null,
                    render: function(data, type, row) {
                        return `
                            <a href="/management-detail/${row.id}" 
                               class="btn btn-outline-primary btn-sm rounded-pill me-1">
                                <i class="bi bi-pencil-square"></i> Edit
                            </a>
                           
                        `;
                    }
                }
            ],
            dom: '<"d-flex justify-content-between align-items-center mb-3"lfB>tip',
            buttons: [{
                    extend: 'excel',
                    className: 'btn btn-outline-success btn-sm rounded-pill'
                },
                {
                    extend: 'pdf',
                    className: 'btn btn-outline-danger btn-sm rounded-pill'
                },
                {
                    extend: 'print',
                    className: 'btn btn-outline-secondary btn-sm rounded-pill'
                }
            ]
        });
    });
</script>
@endsection