@extends('admin.admin_master')
@section('admin')

 <div class="content-wrapper">
	  <div class="container-full">
	<!-- Content Header (Page header) -->
		 
	<!-- Main content -->
	<section class="content">
	  <div class="row">
			  
 <div class="col-12">

	 <div class="box">
	 <div class="box-header with-border">
		<h3 class="box-title">Employee Salary List</h3>
		 </br>
		<h5><strong> Employee Name :</strong> {{ $employee->name }}</h5>
		<h5><strong> Employee ID NO :</strong> {{ $employee->id_card_no }}</h5>
 <a href="{{ route('EmployeeSalary.view') }}" style="float: right;" class="btn btn-rounded btn-success mb-5">Employee Salary List</a> 	
	 </div>

				<!-- /.box-header -->
		<div class="box-body">
			<div class="table-responsive">
		<table id="example1" class="table table-bordered table-striped">
		<thead>
			<tr>
				<th width="5%">SL</th>
				<th>Previous Salary</th>
				<th>Increment Salary</th>
				<th>Present Salary</th>
				<th>Effected Salary</th>
				 
			</tr>
		</thead>
		<tbody>
			@foreach($increment_salary as $key => $increment_salary )
			<tr>
				<td>{{ $key+1 }}</td>
				<td>{{ $increment_salary->previous_salary }}</td>
				<td>{{ $increment_salary->increment_salary }}</td>
				<td>{{ $increment_salary->present_salary }}</td>
				<td>{{ $increment_salary->effected_salary }}</td>
				 
			</tr>
			@endforeach
							 
			</tbody>
			<tfoot>
				 
			</tfoot>
		  </table>
		</div>
		</div>
		<!-- /.box-body -->
	  </div>
	  <!-- /.box -->
	       
	</div>
	<!-- /.col -->
  </div>
  <!-- /.row -->
</section>
		<!-- /.content -->
	  
	  </div>
  </div>


@endsection

