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
			<h3 class="box-title">Category List <span class="badge badge-danger">{{ $countCat }}</span></h3>
			<a href="{{ route('Category.add') }}" style="float: right;" class="btn btn-rounded btn-success mb-5"> Add Category</a>			  
		</div>
				<!-- /.box-header -->
		<div class="box-body">
			<div class="table-responsive">
		<table id="example1" class="table table-bordered table-striped">
		<thead>
			<tr>
				{{-- <th width="5%">SL</th> --}}
				<th>Category Title</th>
				<th>Created At</th>
				<th>Actions</th>
				 
			</tr>
		</thead>

		@php
           $i=0;
           $a=1;
		@endphp
		<tbody>
			@for($i; $i<count($allData); $i++)
			{{-- @foreach($allData as $key=>$value) --}}
			<tr>
				{{-- <td>{{ $a }}</td> --}}
				<td>{{ $allData[$i]->title }}</td>
				<td>{{ date("M d, Y",strtotime($allData[$i]->created_at)) }}</td>
	<td>
<a href="{{ route('Category.Edit',$allData[$i]->id) }}" class="btn btn-info">Edit</a>

<a  target="" href="{{ route('Category.delete',$allData[$i]->id) }}" class="btn btn-danger" id="delete" >Delete</a>
	</td>
				 
			</tr>

			@endfor
							 
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

