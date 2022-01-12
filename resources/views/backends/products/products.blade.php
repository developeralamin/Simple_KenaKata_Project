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
			<h3 class="box-title">Total Product <span class="badge badge-danger">{{ $count }}</span></h3>
			<a href="{{ route('Product.add') }}" style="float: right;" class="btn btn-rounded btn-success mb-5"> Add Product</a>			  
		</div>
				<!-- /.box-header -->
		<div class="box-body">
			<div class="table-responsive">
		<table id="example1" class="table table-bordered table-striped">
		<thead>
			<tr>
				<th width="5%">SL</th>
				<th>Category</th>
				<th>Product Title</th>
				<th>Cost Price</th>
				<th>Sale Price</th>
				<th>Has Stock</th>
				<th>Image</th>
				<th width="25%">Action</th>
				 
			</tr>
		</thead>

{{-- @php
 dump($allData);
@endphp --}}

		<tbody>
			@foreach($allData as $key=>$value)
	 <tr>
				<td>  {{ $key+1 }}</td>
				<td>  {{ $value['category']['title'] }}  </td>
				<td>  {{ $value->title }}</td>
				<td> {{ $value->cost_price }}</td>
				<td> {{ $value->sale_price }}</td>
				<td> {{ $value->stock }}</td>
				
			<td>
		<img src="{{ (!empty($value->image))? url('uploads/product/'.$value->image):url('uploads/no_image.jpg') }}" style="width: 60px; width: 60px;"> 		
			</td>


	<td>
<a href="{{ route('Product.Edit',$value->id) }}" class="btn  btn-md btn-info">Edit</a>
<a href="{{ route('Product.delete',$value->id) }}" id="delete" class="btn  btn-md btn-danger">Delete</a>

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

