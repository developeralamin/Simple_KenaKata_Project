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
			<h3 class="box-title">Employee Leave List <span class="badge badge-danger">{{ $countCat }}</span></h3>
			<a href="{{ route('EmployeeLeave.add') }}" style="float: right;" class="btn btn-rounded btn-success mb-5"> Add Employee Leave</a>			  
		</div>
				<!-- /.box-header -->
		<div class="box-body">
			<div class="table-responsive">
		<table id="example1" class="table table-bordered table-striped">
		<thead>
			<tr>
				<th width="5%">SL</th>
				<th>Name</th>
				<th>ID NO.</th>
				<th>Purpose</th>
				<th>Start Date</th>
				<th>End Date </th>
				<th width="25%">Action</th>
				 
			</tr>
		</thead>

		<tbody>
			@foreach($allDataa as $key=>$employee)
	<tr>
				<td>{{ $key+1 }}</td>
				<td>{{ $employee['user']['name'] }}</td>
				<td>{{ $employee['user']['id_card_no'] }}</td>
				<td>{{ $employee['leave_purpose']['name'] }}</td>
				<td>{{ $employee->start_date }}</td>
				<td>{{ $employee->end_date }}</td>

		      


	<td>
<a href="{{ route('EmployeeLeave.Edit',$employee->id) }}" class="btn  btn-sm btn-info">Edit</a>
<a href="{{ route('EmployeeLeave.delete',$employee->id) }}" id="delete" class="btn  btn-sm btn-danger">Delete</a>

	</td>
				 
			</tr>

			@endforeach
							 
			</tbody>
			<tfoot>
				 
			</tfoot>
		  </table>

  {{-- {{ $allData->links() }} --}}

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

