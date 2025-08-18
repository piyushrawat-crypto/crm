@extends('../layouts.app')
@section('title')
CRM - IVR Status
@endsection
@section('content')

<div class="col-md-12">
    <div class="white_shd full margin_bottom_30">
        <div class="full graph_head">
            <div class="heading1 margin_0">
                <h2>IVR StatusDetails</h2>
            </div>
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
                    <tbody>
                        {{-- Example Row --}}
                        {{-- You will replace this with @foreach($users as $user) --}}
                        <tr>
                            <td>1</td>
                            <td>John Doe</td>
                            <td>jdoe</td>
                            <td>john@example.com</td>
                            <td>9876543210</td>
                            <td>Main Branch</td>
                           
                            <td><a href="" class="btn btn-sm btn-primary" >Edit</a></td>
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
