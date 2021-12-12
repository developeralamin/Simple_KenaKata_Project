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
			<h3 class="box-title">Employee List <span class="badge badge-danger">{{ $countCat }}</span></h3>
			<a href="{{ route('Employee.add') }}" style="float: right;" class="btn btn-rounded btn-success mb-5"> Add Employee</a>			  
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
				<th>Mobile</th>
				<th>Gender</th>
				<th>Join Date</th>
				<th>Salary</th>
				<th>Image</th>
				<th width="25%">Action</th>
				 
			</tr>
		</thead>

		<tbody>
			@foreach($allData as $key=>$value)
	<tr>
				<td>{{ $key+1 }}</td>
				<td>{{ $value->name }}</td>
				<td>{{ $value->id_card_no }}</td>
				<td>{{ $value->mobile }}</td>
				<td>{{ $value->gender }}</td>
				<td>{{ $value->join_date }}</td>
				<td>{{ $value->salary }}</td>

			<td>
		<img src="{{ (!empty($value->photo))? url('uploads/employee_image/'.$value->photo):url('uploads/no_image.jpg') }}" style="width: 60px; width: 60px;"> 		
			</td>


	<td>
<a href="{{ route('Employee.Edit',$value->id) }}" class="btn  btn-sm btn-info">Edit</a>
<a href="{{ route('Employee.delete',$value->id) }}" id="delete" class="btn  btn-sm btn-danger">Delete</a>

<a  target="__blank" href="{{ route('Employee.details',$value->id) }}" class="btn btn-sm btn-success" id="">Details</a>
	</td>
				 
			</tr>

			@endforeach
							 
			</tbody>
			<tfoot>
				 
			</tfoot>
		  </table>

  {{ $allData->links() }}

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

