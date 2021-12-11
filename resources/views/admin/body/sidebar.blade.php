

@php
$prefix = Request::route()->getprefix();
$route  = Route::current()->getName();

@endphp



  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">	
		
        <div class="user-profile">
			<div class="ulogo">
				 <a href="">
				  <!-- logo for regular state and mobile devices -->
					 <div class="d-flex align-items-center justify-content-center">					 	
						  <img src="{{ asset('backend/images/logo-dark.png') }}" alt="">
						  <h3><b>কেনাকাটা
              </b> Dokan</h3>
					 </div>
				</a>
			</div>
        </div>
      
      <!-- sidebar menu-->
      <ul class="sidebar-menu" data-widget="tree">  
		  
		     <li class="">
          <a href="">
            <i data-feather="pie-chart"></i>
			<span>Dashboard</span>
          </a>
        </li>  
		
  {{--  @if(Auth::user()->role == 'Admin')

      <li class="treeview {{ ($prefix == '/users')?'active' : '' }}">

        <a href="#">
          <i data-feather="message-circle"></i>
          <span>Manage User</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-right pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="{{ ($route == 'user.view')?'active':'' }}"><a href="{{ route('user.view') }}"><i class="ti-more"></i>View User</a></li>
          <li class="{{ ($route == 'user.add')?'active':'' }}"><a href="{{ route('user.add') }}"><i class="ti-more"></i>Add User</a></li>
        </ul>

      </li> 

    @endif  
		  
        <li class="treeview {{ ($prefix == '/profile')?'active' : '' }}">
          <a href="#">
            <i data-feather="mail"></i> <span>Manage Profile</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li  class="{{ ($route == 'profile.view')?'active':'' }}"><a href="{{ route('profile.view') }}"><i class="ti-more"></i>Your Profile</a></li>
            <li class="{{ ($route == 'password.view')?'active':'' }}"><a href="{{ route('password.view') }}"><i class="ti-more"></i>Change Password</a></li>
           
          </ul>
        </li> --}}
		
    		  
	 
    <li class="header nav-large-cap">দোকানের ইন্টারফেস</li>
        <li class="treeview {{ ($prefix == '/category')?'active' : '' }}">
          <a href="#">
            <i data-feather="grid"></i>
            <span>Setup Category</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
  <ul class="treeview-menu">
    <li class="{{ ($route == 'Category.view')?'active':'' }}"><a href="{{ route('Category.view') }}"><i class="ti-more"></i>View Category </a></li>
    <li class="{{ ($route == 'Category.add')?'active':'' }}"><a href="{{ route('Category.add') }}"><i class="ti-more"></i>Add Category </a></li>
  </ul>   
    </li>


{{-- <li class="treeview {{ ($prefix == '/user_group')?'active' : '' }}">
          <a href="#">
            <i data-feather="grid"></i>
            <span>Setup UserGroup</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
  <ul class="treeview-menu">
    <li class="{{ ($route == 'UserGroup.view')?'active':'' }}"><a href="{{ route('UserGroup.view') }}"><i class="ti-more"></i>View UserGroup </a></li>
    <li class="{{ ($route == 'UserGroup.add')?'active':'' }}"><a href="{{ route('UserGroup.add') }}"><i class="ti-more"></i>Add UserGroup </a></li>
  </ul>   
    </li> --}}

	
  <li class="treeview {{ ($prefix == '/employee_registration')?'active' : '' }}">
          <a href="#">
            <i data-feather="layers"></i>
            <span>Employee Management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          
    <ul class="treeview-menu">
          <li class="{{ ($route == 'Employee.view')?'active':'' }}">
            <a href="{{ route('Employee.view') }}"><i class="ti-more"></i>Employee Registration </a></li>
    <li class=""><a href=""><i class="ti-more"></i>Employee Salary </a></li>
    <li class=""><a href=""><i class="ti-more"></i>Employee Leave </a></li>
    <li class=""><a href=""><i class="ti-more"></i>Employee Attendance </a></li>
    <li class=""><a href=""><i class="ti-more"></i>Employee Monthly Salary </a></li>

      </ul>
    </li>  

    {{-- //End method --}}

		<li class="treeview {{ ($prefix == '/user_group')?'active' : '' }}">
          <a href="#">
            <i data-feather="credit-card"></i>
            <span>UserGroup Management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
    <ul class="treeview-menu">
    			<li class="{{ ($route == 'UserGroup.view')?'active':'' }}"><a href="{{ route('UserGroup.view') }}"><i class="ti-more"></i>View UserGroup </a></li>
    <li class="{{ ($route == 'UserGroup.add')?'active':'' }}"><a href="{{ route('UserGroup.add') }}"><i class="ti-more"></i>Add UserGroup </a></li>

		  </ul>
    </li>  
		  
  {{--  
    <li class="treeview {{ ($prefix == '/employees')?'active' : '' }}">

      <a href="#">
        <i data-feather="hard-drive"></i>
        <span>Employee Management</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-right pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li class="{{ ($route == 'employee.registration.view')?'active':'' }}"><a href="{{ route('employee.registration.view') }}"><i class="ti-more"></i>Employee Registration</a></li>

        <li class="{{ ($route == 'employee.salary.view')?'active':'' }}">
          <a href="{{ route('employee.salary.view') }}"><i class="ti-more"></i>Employee Salary</a></li>

        <li class="{{ ($route == 'employee.leave.view')?'active':'' }}">
          <a href="{{ route('employee.leave.view') }}"><i class="ti-more"></i>Employee Leave</a></li>

        <li class="{{ ($route == 'employee.attendance.view')?'active':'' }}">
          <a href="{{ route('employee.attendance.view') }}"><i class="ti-more"></i>Employee Attendance</a></li>

        <li class="{{ ($route == 'employee.monthly.salary')?'active':'' }}">
          <a href="{{ route('employee.monthly.salary') }}"><i class="ti-more"></i>Employee Monthly Salary</a></li>
      </ul>
      
    </li>
		  

        <li class="treeview {{ ($prefix == '/marks')?'active' : '' }}">
          <a href="#">
            <i data-feather="package"></i>
            <span>Marks Management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
      <ul class="treeview-menu">
          <li class="{{ ($route == 'marks.entry')?'active':'' }}"><a href="{{ route('marks.entry') }}"><i class="ti-more"></i>Marks Entry</a></li>

         <li class="{{ ($route == 'marks.entry.edit')?'active':'' }}"><a href="{{ route('marks.entry.edit') }}"><i class="ti-more"></i>Marks Edit</a></li>

         <li class="{{ ($route == 'marks.grade')?'active':'' }}"><a href="{{ route('marks.grade') }}"><i class="ti-more"></i>Marks Grade</a></li>
            
        </ul>

        </li>
		  
		<li class="treeview {{ ($prefix == '/accounts')?'active' : '' }}">
          <a href="#">
            <i data-feather="edit-2"></i>
            <span>Accounts Management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ ($route == 'student.account.fee')?'active':'' }}" ><a href="{{ route('student.account.fee') }}"><i class="ti-more"></i>Student Fee</a></li>

            <li class="{{ ($route == 'employee.account.fee')?'active':'' }}"><a href="{{ route('employee.account.fee') }}"><i class="ti-more"></i>Employee Salary</a></li>

        <li class="{{ ($route == 'account.others.cost')?'active':'' }}">
          <a href="{{ route('account.others.cost') }}"><i class="ti-more"></i>Other Cost</a>
        </li>
           
          </ul>
        </li> 
		  

    <li class="header nav-small-cap">Reports</li>  		  		  
		  
		{{-- <li class="header nav-small-cap">Repo</li>		   --}}
		  
 {{--  <li class="treeview {{ ($prefix == '/reports')?'active' : '' }}">
    <a href="#">
      <i data-feather="layers"></i>
<span>Reports Management</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-right pull-right"></i>
      </span>
    </a>
   <ul class="treeview-menu">
      <li class="{{ ($route == 'monthly.profit.view')?'active':'' }}">
        <a href="{{ route('monthly.profit.view') }}"><i class="ti-more"></i>Monthly/Yearly Profit</a>
      </li>

       <li class="{{ ($route == 'marksheet.genereate.view')?'active':'' }}">
        <a href="{{ route('marksheet.genereate.view') }}"><i class="ti-more"></i>MarksSheet Generate</a>
      </li>

     <li class="{{ ($route == 'attendance.report.view')?'active':'' }}">
        <a href="{{ route('attendance.report.view') }}"><i class="ti-more"></i>Employee Attendance Report</a>
      </li>

      <li class="{{ ($route == 'student.result.view')?'active':'' }}">
        <a href="{{ route('student.result.view') }}"><i class="ti-more"></i>All Student Result</a>
      </li>

      <li class="{{ ($route == 'student.IdCard.view')?'active':'' }}">
        <a href="{{ route('student.IdCard.view') }}"><i class="ti-more"></i>Student ID Card</a>
      </li>


    </ul>
  </li>   --}} 
		  

      </ul>
    </section>
	
	<div class="sidebar-footer">
		<!-- item-->
		<a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Settings" aria-describedby="tooltip92529"><i class="ti-settings"></i></a>
		<!-- item-->
		<a href="" class="link" data-toggle="tooltip" title="" data-original-title="Email"><i class="ti-email"></i></a>
		<!-- item-->
		<a href="" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i class="ti-lock"></i></a>
	</div>
  </aside>