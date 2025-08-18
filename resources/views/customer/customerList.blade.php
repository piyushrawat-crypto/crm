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

<!-- Include jQuery and DataTables scripts if not already included in your layout -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

<script>
    $(document).ready(function() {
        console.log('Initializing DataTable...');

        $('#managementTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: "{{ route('customer-data') }}",
                type: 'GET',
                dataType: 'json',
                dataSrc: function(json) {
                    console.log('AJAX response received:', json);
                    return json.data; // Required for DataTables to work correctly with Laravel
                },
                error: function(xhr, error, thrown) {
                    console.error('Error fetching data:', error, xhr.responseText);
                }
            },
            columns: [{
                    data: 'customerID',
                    name: 'customerID'
                },
                {
                    data: 'customerID',
                    name: 'action',
                    orderable: false,
                    searchable: false,
                    render: function(data) {
                        return `
                            <a href="/customer-edit/${data}/" class="btn btn-sm btn-primary">Edit</a>
                           
                        `;
                    }
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
                    data: 'aadharNo',
                    name: 'aadharNo'
                },
                {
                    data: 'status',
                    name: 'status',
                    render: function(data, type, row) {
                        console.log('Rendering status for row:', row);
                        return data == 1 ?
                            '<span class="badge bg-success">Active</span>' :
                            '<span class="badge bg-danger">Inactive</span>';
                    }
                },
            ],
            pageLength: 20,
            lengthMenu: [
                [20, 40, 60, 80, 100],
                [20, 40, 60, 80, 100]
            ],
            ordering: true,
            searching: true,
            paging: true,
            responsive: true,
            language: {
                search: "_INPUT_",
                searchPlaceholder: "🔍 Search customers..."
            },
            initComplete: function() {
                console.log('DataTable fully initialized.');
            }
        });
    });
</script>
@endsection