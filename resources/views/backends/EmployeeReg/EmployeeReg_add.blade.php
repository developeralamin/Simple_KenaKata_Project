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
			  <h4 class="box-title">Add Employee</h4>
			  
			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col">

	 <form method="post" action="{{ route('Employee.store') }}" 
	 enctype="multipart/form-data">

	 	@csrf

	<div class="row">
		<div class="col-12">	

	  <div class="row"> {{-- /// 1st row --}}

		<div class="col-md-4" >		
			<div class="form-group">
				<h5>Employee Name <span class="text-danger">*</span></h5>
			<div class="controls">
				 <input type="text" name="name"  class="form-control"  
				 >  
			</div>
				 
			</div>
		</div><!-- End Col Md-4 -->

		<div class="col-md-4" >		
			<div class="form-group">
				<h5>Father's Name <span class="text-danger">*</span></h5>
			<div class="controls">
				 <input type="text" name="fname"  class="form-control" >  
			</div>
				 
			</div>
		</div><!-- End Col Md-4 -->

		<div class="col-md-4" >		
			<div class="form-group">
				<h5>Mother's Name <span class="text-danger">*</span></h5>
			<div class="controls">
				 <input type="text" name="mname"  class="form-control"  >  
			</div>
				 
			</div>
		</div><!-- End Col Md-4 -->

	</div> <!-- End Row -->{{-- /// end 1st row --}}


	 <div class="row"> {{-- /// 2nd row --}}

		<div class="col-md-4" >		
			<div class="form-group">
				<h5>Mobile Number <span class="text-danger">*</span></h5>
			<div class="controls">
				 <input type="text" name="mobile"  class="form-control"  >  
			</div>
				 
			</div>
		</div><!-- End Col Md-4 -->

		<div class="col-md-4" >		
			<div class="form-group">
				<h5>Address <span class="text-danger">*</span></h5>
			<div class="controls">
				 <input type="text" name="address"  class="form-control" >  
			</div>
				 
			</div>
		</div><!-- End Col Md-4 -->

		<div class="col-md-4" >		
		 <h5>Gender <span class="text-danger">*</span></h5>
		<div class="controls">
	 <select name="gender" id="gender"  class="form-control">
			<option value="" selected="" disabled="">Select Gender</option>
			<option value="Male">Male</option>
			<option value="FeMale">FeMale</option>
				 
			</select>
		 </div>
    </div>
			 
</div> <!-- end 2nd row -->


   <div class="row"> {{-- /// 3rd row --}}

		<div class="col-md-4" >		
			<div class="form-group">
				<h5>Religion <span class="text-danger">*</span></h5>
			<div class="controls">
			<select name="religion" id="religion"   class="form-control">
				<option value="" selected="" disabled="">Select Religion</option>
				<option value="Muslim">Muslim</option>
				<option value="Hindu">Hindu</option>
				<option value="Christan">Christan</option>
				<option value="Budduis">Budduis</option>
			 
			</select>  
			</div>
				 
			</div>
		</div><!-- End Col Md-4 -->

		<div class="col-md-4" >		
			<div class="form-group">
				<h5>Date Of Birth <span class="text-danger">*</span></h5>
			<div class="controls">
				 <input type="date" name="dob"  class="form-control" >  
			</div>
				 
			</div>
		</div><!-- End Col Md-4 -->
  </div> <!-- end 3rd row -->


  <div class="row"> {{-- /// 5th row --}}

    <div class="col-md-3" >		
		<div class="form-group">
			<h5>Salary <span class="text-danger">*</span></h5>
			<div class="controls">
		 <input type="text" name="salary"  id="salary" class="form-control" >  </div> 
		</div>
	</div><!-- End Col Md-4 -->



	<div class="col-md-3" >		
		<div class="form-group">
			<h5>Join Date <span class="text-danger">*</span></h5>
			<div class="controls">
		 <input type="date" name="join_date" id="join_date" class="form-control" >  </div> 
		</div>
	</div><!-- End Col Md-4 -->



  <div class="col-md-6" >    
        <div class="form-group">
         <h5>Employee Profile <span class="text-danger">*</span></h5>
          <input type="file" class="form-control" id="photo"  name="photo" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">


       <font style="color: red">
          {{ ($errors->has('photo'))?($errors->first('photo')):'' }}
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
		<a href="{{ route('Employee.view') }}" class="btn btn-rounded btn-success">Back</a>
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