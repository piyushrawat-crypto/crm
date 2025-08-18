<nav id="sidebar">
    <div class="sidebar_blog_1">
        <div class="sidebar-header">
            <div class="logo_section"></div>
        </div>
        <div class="sidebar_user_info" style="text-align:center;border-bottom: 1px solid #dee2e6; background:#1C146C;">
            <a href="{{ url('dashboard') }}">
                <img class="img-responsive" src="{{ asset('assets/images/rsz_logo-wo-bg.png') }}" alt="#" style="width: 119px;" />
            </a>
        </div>
    </div>

    <div class="sidebar_blog_2">
        <ul class="list-unstyled components">
            <li class="active">
                <a href="{{ url('dashboard') }}"><i class="fa fa-hashtag"></i> <span>Dashboard</span></a>
            </li>

            @if(in_array('management', $per1 ?? []))
            <li>
                <a href="#management" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-users"></i> <span>Management</span></a>
                <ul class="collapse list-unstyled" id="management">
                    @if(in_array('management-add', $per1 ?? []) || in_array('management-edit', $per1 ?? []))
                        <li><a href="{{ url('management') }}">> <span>User List</span></a></li>
                    @endif

                    @if(in_array('management-add', $per1 ?? []) && in_array('management-edit', $per1 ?? []))
                        <li><a href="{{ url('ivr-status') }}">> <span>IVR Status list</span></a></li>
                        <li><a href="{{ url('blacklistCust') }}">> <span>Blacklist Customer list</span></a></li>
                        <li><a href="{{ url('lologs', ['today']) }}">> <span>Login Logs</span></a></li>
                    @endif
                </ul>
            </li>
            @endif

            @if(in_array('customer', $per1 ?? []))
            <li>
                <a href="#customer" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-database"></i> <span>Customer Details</span></a>
                @if(in_array('customer-list', $per1 ?? []))
                <ul class="collapse list-unstyled" id="customer">
                    <li><a href="{{ url('customer') }}">> <span>Customer List</span></a></li>
                </ul>
                @endif
            </li>
            @endif

            @if(in_array('collection-bucket', $per1 ?? []))
            <li>
                <a href="#bucket" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-file-sound-o purple_color"></i> <span>Collection Bucket</span></a>
                <ul class="collapse list-unstyled" id="bucket">
                    <li><a href="{{ url('colleection-followup', ['bucket' => 0]) }}"> ><span>Bucket 0 (Same Day)</span></a></li>
                    <li><a href="{{ url('colleection-followup', ['bucket' => 2]) }}"> > <span>Bucket 1 (1 to 30 Days)</span></a></li>
                    <li><a href="{{ url('colleection-followup', ['bucket' => 3]) }}"> > <span>Bucket 2 (31 to 60 Days)</span></a></li>
                    <li><a href="{{ url('colleection-followup', ['bucket' => 4]) }}"> ><span>Bucket 3 (61 to 90 Days)</span></a></li>
                    <li><a href="{{ url('colleection-followup', ['bucket' => 5]) }}"> > <span>Bucket 4 ( 90 to 120)</span></a></li>
                    <li><a href="{{ url('colleection-followup', ['bucket' => 6]) }}"> > <span>Bucket 5 ( 120 +)</span></a></li>
                </ul>
            </li>
            @endif

            @if(in_array('collection-manager', $per1 ?? []) || in_array('online-manager', $per1 ?? []))
            <li>
                <a href="#colm" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-copyright purple_color"></i> <span>Collection Manager</span></a>
                <ul class="collapse list-unstyled" id="colm">
                    @if(in_array('collection-manager', $per1 ?? []))
                        <li><a href="{{ url('payday-collection-pending2') }}">> <span> Collection For Approval</span></a></li>
                        <li><a href="{{ url('payday-collection-pending', ['type' => 'collection-approved']) }}"> ><span>Collection Approved</span></a></li>
                        <li><a href="{{ url('payday-collection-pending', ['type' => 'collection-rejected']) }}"> ><span>Collection Rejected</span></a></li>
                        <li><a href="{{ url('payday-collection-hold') }}"> ><span>Collection Hold</span></a></li>
                    @endif
                </ul>
            </li>
            @endif

            @if(in_array('report', $per1 ?? []))
            <li>
                <a href="#reports" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-file-code-o purple_color"></i> <span>Reports</span></a>
                <ul class="collapse list-unstyled" id="reports">
                    @if(in_array('disbursed-data', $per1 ?? []))
                        <li><a href="{{ url('reports1111', ['rtype' => 'disbursed-data']) }}">> <span>Disbursed Data</span></a></li>
                    @endif
                    @if(in_array('collection-data', $per1 ?? []))
                        <li><a href="{{ url('reports', ['rtype' => 'collection-data']) }}">> <span>Collection Data</span></a></li>
                    @endif
                    @if(in_array('total-lead-data', $per1 ?? []))
                        <li><a href="{{ url('lead-logs-report') }}">> <span>Lead Logs Report</span></a></li>
                        <li><a href="{{ url('reports', ['rtype' => 'total-lead-data']) }}">> <span>Total Lead Data</span></a></li>
                    @endif
                    @if(in_array('collection-comp-reports', $per1 ?? []))
                        <li><a href="{{ url('col-mon-reports') }}">> <span>Collection Reports</span></a></li>
                    @endif
                    @if(in_array('all-comp-reports', $per1 ?? []))
                        <li><a href="{{ url('All-lead-reports') }}">> <span>All Lead Reports</span></a></li>
                    @endif
                </ul>
            </li>
            @endif

            @if(in_array('reports', $per1 ?? []))
            <li>
                <a href="#cibils" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <i class="fa fa-copyright purple_color"></i> <span>Cibil Reports</span>
                </a>
                <ul class="collapse list-unstyled" id="cibils">
                    <li><a href="{{ url('cibil-data') }}">> <span>CIBIL Data</span></a></li>
                    <li><a href="{{ url('cibil1-data') }}">> <span>CIBIL 1 Data</span></a></li>
                </ul>
            </li>
            @endif
        </ul>
    </div>
</nav>
