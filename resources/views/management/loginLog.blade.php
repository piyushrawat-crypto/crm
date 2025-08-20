@extends('../layouts.app')
@section('title')
CRM - Logins Log
@endsection
@section('content')

<div class="col-md-12">
    <div class="white_shd full margin_bottom_30">
        <div class="full graph_head">
            <div class="heading1 margin_0">
                <h2>Login Logs</h2>
            </div>
        </div>

        <div class="table_section padding_infor_info">
            <div class="table-responsive-md">
                <table id="managementTable" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>IP</th>
                            <th>User ID</th>
                            <th>Log in</th>
                            <th>Log Out</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- jQuery + DataTables -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

<script>
    $(document).ready(function() {
        $('#managementTable').DataTable({
            processing: true,
            serverSide: false, // ✅ disable server-side
            ajax: {
                url: "{{ route('loginslogs-data') }}",
                type: "GET",
                dataSrc: function(json) {
                    console.log("✅ Server Response:", json);
                    return json.data;
                }
            },
            columns: [
                { data: 'name', name: 'name' },
                { data: 'email', name: 'email' },
                { data: 'ip', name: 'ip' },
                { data: 'userID', name: 'userID' },
                { data: 'loginStart', name: 'loginStart' },
                { data: 'logoutEnd', name: 'logoutEnd' }
            ],
            pageLength: 20,
            lengthMenu: [[20, 40, 60, 80, 100], [20, 40, 60, 80, 100]],
            ordering: true,
            searching: true, // ✅ enable search
            paging: true,
            responsive: true,
            language: {
                search: "_INPUT_",
                searchPlaceholder: "🔍 Search logs..."
            }
        });
    });
</script>
@endsection
