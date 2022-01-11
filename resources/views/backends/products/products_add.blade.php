@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


 <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
	

<section class="content">

		 <!-- Basic Forms -->
		  <div class="box">
			<div class="box-header with-border">
			  <h4 class="box-title">Add Product</h4>
			  
			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col">

	 <form method="post" action="{{ route('Product.store') }}" 
	 enctype="multipart/form-data">

	 	@csrf

	<div class="row">
		

		<div class="col-md-4" >		
			<div class="form-group">
				<h5>Category <span class="text-danger">*</span></h5>
			<div class="controls">
			<select name="category_id" id="category_id"  value=""   class="form-control">
            <option>Select Category</option>
			@foreach($categories as $category)
				<option value="{{ $category->id }}">{{ $category->title }}</option>
		   @endforeach

			</select>  
			</div>
				 
			</div>
		</div><!-- End Col Md-4 -->


		<div class="col-md-4" >		
			<div class="form-group">
				<h5>Title <span class="text-danger">*</span></h5>
			<div class="controls">
				 <input type="text" name="title"  value="{{ old('title') }}" class="form-control"  
				 >  
			</div>
				 
			</div>
		</div><!-- End Col Md-4 -->

		<div class="col-md-4" >		
			<div class="form-group">
				<h5>Cost Price <span class="text-danger">*</span></h5>
			<div class="controls">
				 <input type="text" name="cost_price" value="{{ old('cost_price') }}"  class="form-control" >  
			</div>
				 
			</div>
		</div><!-- End Col Md-4 -->

		<div class="col-md-4" >		
			<div class="form-group">
				<h5>Sale Price<span class="text-danger">*</span></h5>
			<div class="controls">
				 <input type="text" name="sale_price"  value="{{ old('sale_price') }}" class="form-control"  >  
			</div>
				 
			</div>
		</div><!-- End Col Md-4 -->


		<div class="col-md-4" >		
			<div class="form-group">
				<h5>Stock<span class="text-danger">*</span></h5>
			<div class="controls">
				 {{-- <input type="text" name="mname"  class="form-control"  >   --}}

			<select name="stock" id="stock"  value="{{ old('stock') }}"  class="form-control">
				<option value="YES">YES</option>
				<option value="NO">NO</option>
			</select>  
			</div>
				 
			</div>
		</div><!-- End Col Md-4 -->

	</div> <!-- End Row -->{{-- /// end 1st row --}}




  


  <div class="row"> {{-- /// 5th row --}}




  <div class="col-md-6" >    
        <div class="form-group">
         <h5>Image<span class="text-danger">*</span></h5>
          <input type="file" class="form-control" id="image" value="{{ old('image') }}"  name="image" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">


       <font style="color: red">
          {{ ($errors->has('image'))?($errors->first('image')):'' }}
       </font>

        </div>
     </div>



  {{-- end this section --}}

    <div class="controls">
        <img id="blah" alt="your image" width="400" height="400" src="{{url('uploads/no_image.jpg') }}" style="width: 300px;height: 300px;border: 1px solid #000000" alt="User Avatar"> 

  </div>


			 
  </div> <!-- end 5th row -->


	</div><!-- End Col 12 -->

	</div> <!-- End Row -->
	</div> <!-- End Col M12 -->
	</div> <!-- End Row -->
				 
	 <div class="text-xs-right">
	   <input type="submit" class="btn btn-rounded btn-info mb-5" value="Submit">
		<a href="{{ route('Product.view') }}" class="btn btn-rounded btn-success">Back</a>
    </div>
</form>

				</div>
				<!-- /.col -->
			  </div>
			  <!-- /.row -->
			</div>
			<!-- /.box-body -->
		  </div>
		  <!-- /.box -->

		</section>

	  
	  </div>
  </div>

  
<script type="text/javascript">
	$(document).ready(function(){
		$('#photo').change(function(e){
			 var reader = new FileReader();
			 reader.onload = function(e){
			 	$('#showimage').attr('src',e.target.result);
			 }
			 reader.readAsDataURL(e.target.files['0']);
		});
	});
</script>



@endsection