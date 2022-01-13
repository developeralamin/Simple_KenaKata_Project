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

			<a href="{{ route('Customer.add') }}" style="float: right;" class="btn btn-rounded btn-success mb-5"> Add Customer</a>		

		</div>
				<!-- /.box-header -->
		<div class="box-body">
			<div class="table-responsive">
		<table id="example1" class="table table-bordered table-striped">
		<thead>
			<tr>
				<th width="5%">SL</th>
				<th>Group</th>
				<th>Customer Name</th>
				<th>E-mail</th>
				<th>Address</th>
				<th>Phone</th>
				<th>Actions</th>
				 
			</tr>
		</thead>


		<tbody>
			@foreach($allDatas as $key=> $allData)

			<tr>
				<td>{{ $key+1 }}</td>
				<td>{{ $allData['userGroup']['user_group_name'] }}</td>
				<td>{{ $allData->name }}</td>
				<td>{{ $allData->email }}</td>
				<td>{{ $allData->address }}</td>
				<td>{{ $allData->phone }}</td>
	<td>
<a href="{{ route('Customer.Edit',$allData->id) }}" class="btn btn-info">Edit</a>

<a  target="" href="{{ route('Customer.delete',$allData->id) }}" class="btn btn-danger" id="delete" >Delete</a>
	</td>
				 
			</tr>

			@endforeach
							 
			</tbody>
			<tfoot>
				 
			</tfoot>
		  </table>

  {{-- {{ $allDatas->links() }} --}}

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

