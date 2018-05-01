<div class="container-fluid" id="main">
    <div class="row row-offcanvas row-offcanvas-left">
      <div class="col-md-3 col-lg-2 sidebar-offcanvas" id="sidebar" role="navigation">
        <ul class="nav flex-column pl-1">
          <li class="nav-item"><a class="nav-link" href="/dashboard">Dashboard</a></li>
          <li class="nav-item">
            <a class="nav-link" href="#submenu1" data-toggle="collapse" data-target="#submenu1">Company ▾</a>
            <ul class="list-unstyled flex-column pl-3 collapse" id="submenu1" aria-expanded="false">
            @can('add_companies')
              <li class="nav-item"><a class="nav-link" href="{{ URL::route('companies.create') }}">Add Company</a></li>
            @endcan
            @can('view_companies') 
              <li class="nav-item"><a class="nav-link" href="{{ URL::route('companies.index') }}">All Company</a></li>
            @endcan  
            </ul>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="#submenu1" data-toggle="collapse" data-target="#submenu2">Complex ▾</a>
            <ul class="list-unstyled flex-column pl-3 collapse" id="submenu2" aria-expanded="false">
            @can('add_complexes')
              <li class="nav-item"><a class="nav-link" href="{{ URL::route('complexes.create') }}">Add Complex</a></li>
            @endcan
            @can('view_complexes')
              <li class="nav-item"><a class="nav-link" href="{{ URL::route('complexes.index') }}">All Complex</a></li>
            @endcan
            </ul>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="#submenu1" data-toggle="collapse" data-target="#submenu3">Shop ▾</a>
            <ul class="list-unstyled flex-column pl-3 collapse" id="submenu3" aria-expanded="false">
            @can('add_shops')
              <li class="nav-item"><a class="nav-link" href="{{ URL::route('shops.create') }}">Add Shop</a></li>
            @endcan
            @can('view_shops')
              <li class="nav-item"><a class="nav-link" href="{{ URL::route('shops.index') }}">All Shop</a></li>
            @endcan
            @can('add_shopbooks')
              <li class="nav-item"><a class="nav-link" href="{{ URL::route('shopbooks.create') }}">Shop Booking</a></li>
            @endcan
            @can('view_shopbooks')
              <li class="nav-item"><a class="nav-link" href="{{ URL::route('shopbooks.index') }}">All Shop Booking</a></li>
            @endcan
            </ul>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="#submenu1" data-toggle="collapse" data-target="#submenu4">Tenant ▾</a>
            <ul class="list-unstyled flex-column pl-3 collapse" id="submenu4" aria-expanded="false">
            @can('add_tenants')
              <li class="nav-item"><a class="nav-link" href="{{ URL::route('tenants.create') }}">Add Tenant</a></li>
            @endcan
            @can('view_tenants')
              <li class="nav-item"><a class="nav-link" href="{{ URL::route('tenants.index') }}">All Tenant</a></li>
            @endcan
            </ul>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="#submenu1" data-toggle="collapse" data-target="#submenu5">Rent Allowance ▾</a>
            <ul class="list-unstyled flex-column pl-3 collapse" id="submenu5" aria-expanded="false">
            @can('view_billgenerate')
              <li class="nav-item"><a class="nav-link" href="{{ url('billgenerate') }}">Monthly Bill Generate</a></li>
            @endcan
            </ul>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="" data-toggle="collapse" data-target="#submenu10">Rent Collections ▾</a>
              <ul class="list-unstyled flex-column pl-3 collapse" id="submenu10" aria-expanded="false">
              @can('add_rentcollects')
                <li class="nav-item"><a class="nav-link" href="{{ URL::route('rentcollects.create') }}">Add Rent Collections</a></li>
              @endcan
              <!--@can('view_rentcollects')-->
              <!--  <li class="nav-item"><a class="nav-link" href="{{ URL::route('rentcollects.index') }}">All Rent Collections</a></li>-->
              <!--@endcan-->
              </ul>
          </li>
          <li class="nav-item">
              <a href="{{ URL::route('acrents.create') }}">Ac Rent </a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="#submenu1" data-toggle="collapse" data-target="#submenu6">Bank ▾</a>
            <ul class="list-unstyled flex-column pl-3 collapse" id="submenu6" aria-expanded="false">
            @can('add_banks')
              <li class="nav-item"><a class="nav-link" href="{{ URL::route('banks.create') }}">Add Bank</a></li>
            @endcan
            @can('view_banks')
              <li class="nav-item"><a class="nav-link" href="{{ URL::route('banks.index') }}">All Bank</a></li>
            @endcan
            @can('view_transactions')
              <li class="nav-item"><a class="nav-link" href="{{ url('transactions') }}">Transaction</a></li>
            @endcan
            </ul>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="#submenu1" data-toggle="collapse" data-target="#submenu11">Employee ▾</a>
            <ul class="list-unstyled flex-column pl-3 collapse" id="submenu11" aria-expanded="false">
            {{-- @can('add_banks') --}}
              <li class="nav-item"><a class="nav-link" href="{{ URL::route('employees.create') }}">Add Employee</a></li>
            {{-- @endcan
            @can('view_banks') --}}
              <li class="nav-item"><a class="nav-link" href="{{ URL::route('employees.index') }}">All Employee</a></li>
           {{--  @endcan
            @can('view_transactions') --}}
              {{-- <li class="nav-item"><a class="nav-link" href="{{ url('transactions') }}">Transaction</a></li> --}}
            {{-- @endcan --}}
            </ul>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="#submenu1" data-toggle="collapse" data-target="#submenu7">Expense ▾</a>
            <ul class="list-unstyled flex-column pl-3 collapse" id="submenu7" aria-expanded="false">
            @can('add_categories')
              <li class="nav-item"><a class="nav-link" href="{{ URL::route('categories.create') }}">Category Add</a></li>
            @endcan
            @can('view_categories')
              <li class="nav-item"><a class="nav-link" href="{{ URL::route('categories.index') }}">All Category</a></li>
            @endcan
            @can('add_expenses')
              <li class="nav-item"><a class="nav-link" href="{{ URL::route('expenses.create') }}">Add Expense</a></li>
            @endcan
            @can('view_expenses')
              <li class="nav-item"><a class="nav-link" href="{{ URL::route('expenses.index') }}">All Expense</a></li>
            @endcan
            </ul>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="#submenu1" data-toggle="collapse" data-target="#submenu8">Reports ▾</a>
            <ul class="list-unstyled flex-column pl-3 collapse" id="submenu8" aria-expanded="false">
              <li class="nav-item"><a class="nav-link" href="{{ url('company-report') }}">Company</a></li>
              <li class="nav-item"><a class="nav-link" href="{{ url('complex-report') }}">Complex</a></li>
              <li class="nav-item"><a class="nav-link" href="{{ url('rentcollect-report') }}">Rent Collection</a></li>
              <li class="nav-item"><a class="nav-link" href="{{ url('utility-report') }}">Utilities Collection</a></li>
              <li class="nav-item"><a class="nav-link" href="{{ url('tenant-report') }}">Tenant</a></li>
              <li class="nav-item"><a class="nav-link" href="{{ url('tenant-due-report') }}">Tenant Due</a></li>
              <li class="nav-item"><a class="nav-link" href="{{ url('bank-report') }}">Bank</a></li>
              <li class="nav-item"><a class="nav-link" href="{{ url('expense-report') }}">Expense</a></li>
              <li class="nav-item"><a class="nav-link" href="{{ url('in-out-report') }}">Day to Day In/Out</a></li>
              <li class="nav-item"><a class="nav-link" href="{{ url('final-report') }}" target="blank">Final</a></li>
            </ul>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="#submenu1" data-toggle="collapse" data-target="#submenu9">Users ▾</a>
            <ul class="list-unstyled flex-column pl-3 collapse" id="submenu9" aria-expanded="false">
              <li class="nav-item"><a class="nav-link" href="{{ URL::route('users.create') }}">Add User</a></li>
              <li class="nav-item"><a class="nav-link" href="{{ URL::route('users.index') }}">All User</a></li>
              <li class="nav-item"><a class="nav-link" href="{{ URL::route('roles.index') }}">Role</a></li>
            </ul>
          </li>
        </ul>
      </div>

