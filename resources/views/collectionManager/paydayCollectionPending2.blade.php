@extends('../layouts.app')
@section('title')
Collection Approved
@endsection
@section('content')
<style>
    /* Force table cells to wrap text */
    #managementTable td {
        white-space: normal !important;
        word-wrap: break-word;
        vertical-align: middle;
    }

    /* Set max width for long columns */
    #managementTable td:nth-child(6) {
        /* Remark column index */
        max-width: 250px;
    }

    /* Optional: style status buttons */
    .status-btn {
        padding: 5px 10px;
        border-radius: 6px;
        color: #fff;
        font-size: 0.85rem;
        border: none;
    }

    .status-approved {
        background-color: #28a745;
    }

    .status-rejected {
        background-color: #ffc107;
        color: #000;
    }

    .status-hold {
        background-color: #007bff;
    }
</style>

<div class="col-md-12">
    <div class="white_shd full margin_bottom_30">

        <div class="card-header text-white d-flex justify-content-between align-items-center"
            style="background: linear-gradient(90deg, #4e73df, #1cc88a); border-radius: 10px 10px 0 0;">
            <h4 class="mb-0">
                <i class="fa fa-users me-2"></i> Collection Payment Pending
            </h4>

        </div>

        <div class="table_section padding_infor_info">
            <div class="table-responsive-md">
                <table id="managementTable" class="table table-hover table-bordered align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>#</th>
                            <th>Loan No.</th>
                            <th>Name</th>
                            <th>Mobile</th>
                            <th>Email</th>

                            <th>Loan Amount</th>
                            <th>Repayment Amount</th>
                            <th>Total Collection Rs</th>
                            <th>Payment Slip</th>
                            <th>Status</th>
                            <th>Payment Mode</th>
                            <th>Payment Date</th>
                            <th>Reference No</th>
                            <th>Remark</th>
                            <th>Collected By</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- Example Row --}}
                        {{-- You will replace this with @foreach($users as $user) --}}
                        <tr>
                            <td>1</td>
                            <td>MFLSL2025077596</td>
                            <td>MANISH KAMLAPRASAD PATHAK</td>
                            <td>8655110116 </td>
                            <td>PATHAKMANISH153@GMAIL.COM</td>
                            <td>13000</td>
                            <td>24830</td>
                            <td>15860</td>
                            <td>show</td>
                            <td>Closed</td>
                            <td>UPI</td>
                            <td>12-08-2025</td>
                            <td>559057524216</td>
                            <td>full payment (pls close this loan cxtmr is jobless offer diya close tha tab arange krke pay kiya hai or blacklist krdo)</td>
                            <td>Sachin Rana</td>
                            <td>2025-08-12 14:13:19</td>

                            <td>
                                <button class="btn btn-primary">Approved</button>
                                <button class="btn btn-warning">Rejected</button>
                                <button class="btn btn-primary">Hold</button>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        var table = $('#managementTable').DataTable({
            pageLength: 20,
            lengthMenu: [
                [20, 40, 60, 80, 100],
                [20, 40, 60, 80, 100]
            ],
            ordering: true,
            autoWidth: false,
            scrollCollapse: true,
            responsive: false, // keep false when using scrollX
            searching: true,
            paging: true,
            scrollX: true,
            language: {
                search: "_INPUT_",
                searchPlaceholder: "🔍 Search Data..."
            },
            columnDefs: [{
                    targets: [0, 1, 2, 3, 4, 6, 7, 8],
                    className: 'text-nowrap',
                    width: '100px'
                },
                {
                    targets: 5,
                    width: '300px',
                    render: function(data) {
                        return '<div style="white-space: normal;">' + data + '</div>';
                    }
                }
            ]
        });

        table.columns.adjust().draw();
    });
</script>


@endsection