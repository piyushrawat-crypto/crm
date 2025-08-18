@extends('../layouts.app')
@section('title')
CRM - Report List
@endsection
@section('content')

<!-- ✅ DataTables + Buttons CSS -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">

<div class="col-md-12">
    <div class="white_shd full margin_bottom_30">
        <div class="full graph_head">
            <div class="heading1 margin_0">
                <h2>Report List</h2>
            </div>
        </div>

        <div class="table_section padding_infor_info">
            <div class="table-responsive-md">
                <table id="managementTable" class="table table-bordered table-striped display nowrap" style="width:100%">
                    <thead>
                        <tr>
                            <th>LeadID</th>
                            <th>State Name</th>
                            <th>City Name</th>
                            <th>Branch Name</th>
                            <th>Customer ID</th>
                            <th>Pancard</th>
                            <th>Loan No.</th>
                            <th>Customer Name</th>
                            <th>Mobile Number</th>
                            <th>Gender</th>
                            <th>DOB</th>
                            <th>Alternative Number</th>
                            <th>Email</th>
                            <th>Offical Email</th>
                            <th>Loan Amount</th>
                            <th>Disbursed Amount</th>
                            <th>Admin Fee</th>
                            <th>Admin Fee GST</th>
                            <th>Total Admin Fee</th>
                            <th>IGST</th>
                            <th>CGST</th>
                            <th>SGST</th>
                            <th>Processing</th>
                            <th>Tenure</th>
                            <th>ROI(%)</th>
                            <th>Loan Repay Amount</th>
                            <th>Disbursement Date</th>
                            <th>Repayment Date</th>
                            <th>Mode Of Payment</th>
                            <th>Company Bank Account Number</th>
                            <th>Customer Bank Account Number</th>
                            <th>Customer Bank Name</th>
                            <th>Customer Bank IFSC</th>
                            <th>Refrence No Of Disbursement</th>
                            <th>Disbursement Status</th>
                            <th>Repeat Type</th>
                            <th>Lead Initiated Date</th>
                            <th>Sanctioned By</th>
                            <th>Approved By</th>
                            <th>Sanctioned Date</th>
                            <th>Loan Disbursed By</th>
                            <th>Loan Disbursed Date</th>
                            <th>House Type</th>
                            <th>Address</th>
                            <th>Pin Code</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>835461</td>
                            <td>Karnataka</td>
                            <td>Bangalore</td>
                            <td>Karnataka</td>
                            <td>758275</td>
                            <td>EDSPK7066P</td>
                            <td>MFLSL2025085926</td>
                            <td><a href="lead-type.php?lead_id=835461" style="color:blue;font-weight:bold;" target="_blank"> GURUJYOTH PRASANTH KODAVALURU </a></td>
                            <td>9885460935</td>
                            <td>Male</td>
                            <td>1990-11-23</td>
                            <td></td>
                            <td>GURUJOTH.243@GMAIL.COM</td>
                            <td>Gurujyoth.kodavaluru@centroid.com</td>
                            <td>30000</td>
                            <td>26460</td>
                            <td>3000.00</td>
                            <td>540.00</td>
                            <td>3540</td>
                            <td>540.00</td>
                            <td></td>
                            <td></td>
                            <td>3540</td>
                            <td>17</td>
                            <td>1.00</td>
                            <td>35100</td>
                            <td>2025-08-13</td>
                            <td>2025-08-30</td>
                            <td></td>
                            <td>ICICI BANK-0208</td>
                            <td>3351141354</td>
                            <td>KOTAK MAHINDRA BANK</td>
                            <td>KKBK0007466</td>
                            <td>522514208953</td>
                            <td>Disbursed</td>
                            <td>New</td>
                            <td>2025-08-12 17:09:44</td>
                            <td>Vishal</td>
                            <td>PARVEEN YADAV</td>
                            <td>2025-06-23 05:22:59</td>
                            <td>Prachi</td>
                            <td>2025-08-12 17:09:44</td>
                            <td>Rented</td>
                            <td>BSR Paradise, Bhoganahalli</td>
                            <td>560103</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- ✅ Load jQuery first -->
<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>

<!-- ✅ DataTables & Buttons scripts -->
<script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>

<!-- ✅ DataTables Initialization -->
<script>
$(document).ready(function() {
    $('#managementTable').DataTable({
        pageLength: 20,
        lengthMenu: [20, 40, 60, 80, 100],
        ordering: true,
        searching: true,
        scrollX: true,
        dom: 'Bfrtip',
        buttons: [
            {
                extend: 'excelHtml5',
                title: 'Report_List',
                text: '📊 Export to Excel',
                exportOptions: { columns: ':visible' }
            },
            {
                extend: 'print',
                text: '🖨 Print',
                exportOptions: { columns: ':visible' }
            }
        ]
    });
});
</script>
@endsection
