@extends('../layouts.app')
@section('title')
CRM - View Lead Data
@endsection
@section('content')

<div class="full_container">
    <div class="inner_container">
        <!-- Sidebar  -->

        <!-- end topbar -->
        <!-- dashboard inner -->
        <table class="table table-hover table-bordered align-middle" id="table" data-toggle="table" data-search="true">
            <thead>
                <tr>
                    <th># </th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>PAN No.</th>
                    <th>Loan Required</th>
                    <th>Monthly Income</th>
                    <th>city</th>
                    <th>State</th>
                    <th>Pin Code</th>
                    <th>Remark</th>
                    <th>Credited By</th>
                    <th>Type</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                @forelse($data as $lead)
                <tr>
                    <td>{{ $lead->customerID }}</td>
                    <td><a href="{{ url('lead-type?lead_id='.$lead->customerID.'&type='.$lead->status) }}" style="color:blue;font-weight:bold;">{{ $lead->name }}</a></td>
                    <td>{{ $lead->email }}</td>
                    <td>{{ $lead->mobile }}</td>
                    <td>{{ $lead->pancard }}</td>
                    <td>{{ $lead->loanAmount }}</td>
                    <td>{{ $lead->monthlyIncome }}</td>
                    <td>{{ $lead->city }}</td>
                    <td>{{ $lead->state }}</td>
                    <td>{{ $lead->pincode }}</td>
                    <td>{{ $lead->sanctionBy }}</td>
                    <td>{{ $lead->callingAssign }}</td>
                    <td>{{ $lead->type }}</td>
                    <td>{{ $lead->leadDate }}</td>
                    
                </tr>
                @empty
                <tr>
                    <td colspan="17" class="text-center">No Leads Found</td>
                </tr>
                @endforelse
            </tbody>

        </table>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('#table').DataTable({
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
            }
        });
    });
</script>

@endsection