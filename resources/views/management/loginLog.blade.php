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
                            <th>IP</th>
                            <th>Log in</th>
                            <th>Log Out</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- Example Row --}}
                        {{-- You will replace this with @foreach($users as $user) --}}
                        <tr>
                            <td>Bhumi</td>
                            <td>103.61.252.208</td>
                            <td>2025-08-12 12:32:14</td>
                            <td>0000-00-00 00:00:00</td>
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
            searching: true
        });
    });
</script>

@endsection