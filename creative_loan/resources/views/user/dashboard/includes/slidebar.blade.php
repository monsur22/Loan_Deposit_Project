 <nav class="page-sidebar" id="sidebar">
            <div id="sidebar-collapse">
                <div class="admin-block d-flex">
                  
                </div>
                <ul class="side-menu metismenu">
                    <li>
                        <a class="active" href="{{url('/user-dashboard')}}"><i class="sidebar-item-icon fa fa-th-large"></i>
                            <span class="nav-label">Dashboard</span>
                        </a>
                    </li>
                    <li class="heading">FEATURES</li>
                    {{-- <li>
                        <a href="javascript:;"><i class="sidebar-item-icon fa fa-bookmark"></i>
                            <span class="nav-label">Master Setup</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li><a class="" href="{{url('/company')}}">Company</a></li>                          
                            <li><a class="" href="{{url('/branch')}}">Branch</a></li>
                            <li><a class="" href="{{url('/user')}}">User</a></li>
                        </ul>
                    </li> --}}
                    <li>
                        <a href="javascript:;"><i class="sidebar-item-icon fa fa-id-badge"></i>
                            <span class="nav-label">Customer Setup</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li><a class="" href="{{url('/user/customerlist')}}">Customer List</a></li>
                           
                          
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;"><i class="sidebar-item-icon fa fa-user-circle"></i>
                            <span class="nav-label">Supplier Setup</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li><a class="" href="{{url('/user/supplierlist')}}">Supplier List</a></li>                          

                           
                          
                        </ul>
                    </li>
                    {{-- <li>
                        <a href="javascript:;"><i class="sidebar-item-icon fa fa-bookmark"></i>
                            <span class="nav-label">Account Setup</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li><a class="" href="{{url('/group')}}">Account Group</a></li>                          
                            <li><a class="" href="{{url('/category')}}">Account Category</a></li>                          
                            <li><a class="" href="{{url('/accounthead')}}">Account Head</a></li>
                          
                        </ul>
                    </li> --}}
                      
                     <li>
                        <a href="javascript:;"><i class="sidebar-item-icon fa fa-bookmark"></i>
                            <span class="nav-label">Voucher</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            {{-- <li><a class="" href="{{url('/transection-voucher')}}">Transection Voucher </a></li>                           --}}
                            <li><a class="" href="{{url('/user/payment-voucher')}}">Payment Voucher</a></li>                          
                            <li><a class="" href="{{url('/user/collection-voucher')}}">Collection Voucher</a></li>
                            <li><a class="" href="{{url('/user/expence-voucher')}}">Expence Voucher</a></li>
                            <li><a class="" href="{{url('/user/income-voucher')}}">Income Voucher</a></li>
                          
                        </ul>
                    </li>




                    <li>
                        <a href="javascript:;"><i class="sidebar-item-icon fa fa-bookmark"></i>
                            <span class="nav-label">Account Report</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li><a class="" href="{{url('/user/chart-of-account')}}">Chart of Accounts </a></li>                          
                            <li><a class="" href="{{url('/user/account-ledger')}}">Account Ledger</a></li>
                            <li><a class="" href="{{url('/user/expence-statement')}}">Expense Statement</a></li>                          
                            <li><a class="" href="{{url('/user/income-statement')}}">Income Statement</a></li>  
                            <li><a class="" href="{{url('/user/expense-income-report')}}">Income & Expense Report</a></li>    
                            
                        </ul>
                    </li>

                   
                   
                  
                    
                  
                </ul>
            </div>
        </nav>