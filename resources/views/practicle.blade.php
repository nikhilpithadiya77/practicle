<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Booking</title>
        <link rel="stylesheet" type="text/css" href="{{URL::asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{URL::asset('css/style.css')}}">
    </head>
<body>
	<div class="container">
	 <h1 class="text-center"><span>Vehicle Booking</span></h1>
    
	 <form method="post" action="/test" enctype="multipart/form-data" class="form-horizontal">
	 @csrf	
     <div class="col-sm-6 col-sm-offset-3">
	 		<div class="form-group">
		      <label class="control-label col-sm-3">Select Vehicle:</label>
		      <div class="col-sm-9">
		        <select class="form-control" name="vehicle">
		        	<option>-- Select --</option>
		        	<option>Honda</option>
		        	<option>Ford</option>
		        	<option>TATA</option>
		        	<option>Hundai</option>
		        </select>
		      </div>
		    </div>

		    <div class="form-group">
		      <label class="control-label col-sm-3">Select Date:</label>
		      <div class="col-sm-9">
		        <input type="date" class="form-control" name="date" placeholder="date">
		      </div>
		    </div>

		    <div class="form-group">
		      <label class="control-label col-sm-3">Booking For:</label>
		      <div class="col-sm-9">
		        <select class="form-control" id="book_for" name="booking">
		        	<option>-- Select --</option>
		        	<option value="full">Full Day</option>
		        	<option value="half">Half Day</option>
		        </select>
		      </div>
		    </div>

		    <div class="form-group" id="bk_session" style="display:none">
		      <label class="control-label col-sm-3">Booking session:</label>
		      <div class="col-sm-9">
		        <select class="form-control" name="">
		        	<option>-- Select --</option>
		        	<option>Morning</option>
		        	<option>Evening</option>
		        </select>
		      </div>
		    </div>

		    <div class="form-group">
		      <label class="control-label col-sm-3">Name:</label>
		      <div class="col-sm-9">
		        <input type="text" class="form-control" name="name" placeholder="Enter Name">
		      </div>
		    </div>

		    <div class="form-group">
		      <label class="control-label col-sm-3">Email:</label>
		      <div class="col-sm-9">
		        <input type="text" class="form-control" name="email" placeholder="Enter Email">
		      </div>
		    </div>

		    <div class="form-group">
		      <label class="control-label col-sm-3">Phone:</label>
		      <div class="col-sm-9">
		        <input type="text" class="form-control" name="phone" placeholder="Enter Phone Number">
		      </div>
		    </div>

		    <div class="form-group">
		      <label class="control-label col-sm-3">Date Of Birth:</label>
		      <div class="col-sm-9">
		        <input type="text" class="form-control" name="dob" placeholder="DD\MM\YYYY">
		      </div>
		    </div>

		    <div class="form-group">
		      <label class="control-label col-sm-3">Address:</label>
		      <div class="col-sm-9">
		        <input type="text" class="form-control" name="address" placeholder="Address">
		      </div>
		    </div>


		    <div class="form-group">
		      <label class="control-label col-sm-3">ZIP:</label>
		      <div class="col-sm-9">
		        <input type="text" class="form-control" name="zipcode" placeholder="ZIP Code">
		      </div>
		    </div>

		    <div class="form-group">
		      <label class="control-label col-sm-3">City:</label>
		      <div class="col-sm-9">
		        <input type="text" class="form-control" name="city" placeholder="City">
		      </div>
		    </div>

		    <div class="form-group">
		      <label class="control-label col-sm-3">State:</label>
		      <div class="col-sm-9">
		        <input type="text" class="form-control" name="state" placeholder="State">
		      </div>
		    </div>

		    <div class="text-center">
		    	<a href="#" class="btn btn-default">Submit</a>
		    </div>

	 	</div>
	 </form>
	 </div>

	
	<script type="text/javascript" src="../js/jquery.min.js"></script>
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
	 <script type="text/javascript">
	 	$("#book_for").change(function() {
			if($(this).val()=="half"){
				$("#bk_session").show();
			}else{
				$("#bk_session").hide();
			}
		});
	 </script>
</body>
</html>
