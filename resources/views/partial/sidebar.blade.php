<nav id="sidebar">
    <div class="sidebar_blog_1">
        <div class="sidebar-header">
            <div class="logo_section"></div>
        </div>
        <div class="sidebar_user_info" style="text-align:center;border-bottom: 1px solid #dee2e6; background:#1C146C;">
            <a href="">
                <img class="img-responsive" src="{{ asset('assets/images/rsz_logo-wo-bg.png') }}" alt="#" style="width: 119px;" />
            </a>
        </div>
    </div>

    <div class="sidebar_blog_2">
        <ul class="list-unstyled components">
            <li class="active">
                <a href="{{route('dashboard')}}"><i class="fa fa-hashtag"></i> <span>Dashboard</span></a>
            </li>

            <li>
                <a href="#management" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-users"></i> <span>Management</span></a>
                <ul class="collapse list-unstyled" id="management">

                    <li><a href="{{route('management')}}">> <span>User List</span></a></li>
                    <li><a href="{{route('ivr-status')}}">> <span>IVR Status list</span></a></li>
                    <li><a href="{{route('blacklist-customer')}}">> <span>Blacklist Customer list</span></a></li>
                    <li><a href="{{route('login-log')}}">> <span>Login Logs</span></a></li>

                </ul>
            </li>

            <li>
                <a href="#customer" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-database"></i> <span>Customer Details</span></a>

                <ul class="collapse list-unstyled" id="customer">
                    <li><a href="{{route('customer-list')}}">> <span>Customer List</span></a></li>
                </ul>

            </li>


            <li>
                <a href="#colm" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-copyright purple_color"></i> <span>Collection Manager</span></a>
                <ul class="collapse list-unstyled" id="colm">

                    <li><a href="{{route('payday-collection-pending2')}}">> <span> Collection For Approval</span></a></li>
                    <li><a href="{{route('payday-collection-pending')}}"> ><span>Collection Approved</span></a></li>
                    <li><a href="{{route('customer-list')}}"> ><span>Collection Rejected</span></a></li>
                    <li><a href="{{route('payday-collection-hold')}}"> ><span>Collection Hold</span></a></li>

                </ul>
            </li>

            <li>
                <a href="#reports" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-file-code-o purple_color"></i> <span>Reports</span></a>
                <ul class="collapse list-unstyled" id="reports">
                    <li><a href="{{route('report-list')}}">&gt; <span>Disbursed Data</span></a></li>
                </ul>

            </li>

            <li>
                <a href="#cibils" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> <i
                        class='fa fa-copyright purple_color'></i> <span>Credit</span></a>
                <ul class="collapse list-unstyled" id="cibils">


                    <li><a href="{{route('lead-view', ['type' => 'approved'])}}">> <span>Approved</span></a></li>
                    <li><a href="{{route('lead-view', ['type' => 'rejected'])}}">> <span>Rejected</span></a></li>
                    <li><a href="{{route('lead-view', ['type' => 'hold'])}}">> <span>Hold</span></a></li>
                    <li><a href="{{route('lead-view', ['type' => 'not-required'])}}">> <span>Not Required</span></a></li>


                </ul>
            </li>

        </ul>
    </div>
</nav>