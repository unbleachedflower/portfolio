<?php

?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="../styles/style.css">
</head>

<body>

<div class="hero">
      <div id="myHeader">

        <nav class="navbar navbar-expand-lg navbar-dark bg-black">
          <a class="navbar-brand logo" href="index.php"><img src="../images/logo.png" id="myHeader" class="img-fluid animated fadeInLeft" alt="Responsive image"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="../index.php">About<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 Design
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown bg-black">
                  <a class="dropdown-item" href="../dyson.php">DysonOn:</a>
                  <a class="dropdown-item" href="../plantme.php">PlantMe</a>
                  <a class="dropdown-item" href="../beanbarista.php">Bean & Barista</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 Develop
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown bg-black">
                  <a class="dropdown-item" target="_blank" href="https://huang23.dev.fast.sheridanc.on.ca/spaceVoyager/">SpaceVoyer</a>
                  <a class="dropdown-item" target="_blank" href="https://huang23.dev.fast.sheridanc.on.ca/motiful/">Motiful</a>
                  <a class="dropdown-item" target="_blank" href="https://huang23.dev.fast.sheridanc.on.ca/OceanCleanUp/Ocean%20Cleanup/oceanCleanUp.html">Ocean Cleanup</a>
                  <a class="dropdown-item" target="_blank" href="https://huang23.dev.fast.sheridanc.on.ca/Christmas%20Whiplus/lv1.html">Christmas Whiplus</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="ajax/index.php">Request</a>
              </li>
            </ul>
          </div>
        </nav>

        
              <div class="social animated fadeInLeft">
                <a href="https://www.behance.net/dahuang" target="_blank"><img src="../images/behance.png" class="img-fluid"></a>
                <a href="https://dribbble.com/getmelily" target="_blank"><img src="../images/dribble.png" class="img-fluid"></a>
                <a href="https://www.linkedin.com/in/getmelily/" target="_blank"><img src="../images/linkedIn.png"class="img-fluid"></a>
              </div>

        </div>
            
</div>

	<h1 class="contact">Work With Me</h1>
	
	<div class="container-fluid">
		<div class="container request">
			<div class="row m-3 text-center">
				<div class="col-lg-12">
				</div>
			</div>
			<div  class="row justify-content-center">
				<div class="col-lg-6">
				<button type="button" class="btn btn-lg btn-primary" data-toggle="modal" data-target="#exampleModalCenter" >Request</button>	
				</div>
				<div class="col-lg-6">
					<input type="text" id="search" class="form-control" placeholder="Search Now">
				</div>
			</div>
			<div class="row mt-5" id="tbl_rec">
		
			</div>
		</div>
	</div>
	
<!-- Insert Design Modal -->
	
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Request</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="POST" id="ins_rec">
	      <div class="modal-body">
			  	<div class="form-group">
					<label style="color:black"><b>User Name</b></label>
					<input type="text" name="username" class="form-control" placeholder="Username">
					<span class="error-msg" id="msg_1"></span>
			  	</div>
			  	<div class="form-group">
					<label style="color:black"><b>Email</b></label>
					<input type="text" name="email" class="form-control" placeholder="YourEmail@email.com">
					<span class="error-msg" id="msg_2"></span>
			  	</div>
				<div class="form-group">
					<label style="color:black"><b>Job Type</b></label>
					<select class="custom-select" name="country" id="country" style="color:black">
						<option value="" selected>Choose...</option>
						<option value="Project">Project</option>
						<option value="Contract">Contract</option>
						<option value="FullTime">FullTime</option>
					</select>
					<span class="error-msg" id="msg_3"></span>
			  	</div>
				<div class="form-group">
					<label style="color:black"><b>Start Date</b></label>
					<input type="date" name="bod" class="form-control">
					<span class="error-msg" id="msg_4"></span>
			  	</div>
				<div class="form-group">
					<label style="color:black" class="mr-3"><b>Period</b></label>
					<div class="form-check form-check-inline" style="color:black">
					  <input class="form-check-input" type="radio" name="gender" value="PartTime" checked>
					  <label class="form-check-label" >ParTime</label>
					</div>
					<div class="form-check form-check-inline" style="color:black">
					  <input class="form-check-input" type="radio" name="gender" value="FullTime">
					  <label class="form-check-label" >FullTime</label>
					</div>
					<span class="error-msg"  id="msg_5"></span>
				</div>	
				<div class="form-group">
					<span class="success-msg" id="sc_msg"></span>
				</div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" id="close_click" data-dismiss="modal">Close</button>
	        <button type="submit" class="btn btn-primary" >Request</button>
	      </div>
      </form>
    </div>
  </div>
</div>
	
<!-- End Insert Modal -->
		
<!-- Update Design Modal -->
	
<div class="modal fade" id="updateModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="updateModalCenterTitle">Update Record</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="POST" id="updata">
      <div class="modal-body">
		  	<div class="form-group">
				<label style="color:black"><b>User Name</b></label>
				<input type="text" class="form-control" name="username" id="upd_1" placeholder="Username">
				<span class="error-msg" id="umsg_1"></span>
		  	</div>
		  	<div class="form-group">
				<label style="color:black"><b>Email</b></label>
				<input type="text" class="form-control" name="email" id="upd_2" placeholder="YourEmail@email.com">
				<span class="error-msg" id="umsg_2"></span>
		  	</div>
			<div class="form-group">
				<label style="color:black"><b>Job Type</b></label>
				<select class="custom-select" id="upd_3" name="country">
					<option value="" selected>Choose...</option>
					<option value="Contract">Contract</option>
					<option value="Project">Project</option>
					<option value="FullTime">FullTime</option>
				</select>
				<span class="error-msg" id="umsg_3"></span>
		  	</div>
			<div class="form-group">
				<label style="color:black"><b>Start Date</b></label>
				<input type="date" class="form-control" id="upd_4" name="bod">
				<span class="error-msg" id="umsg_4"></span>
		  	</div>
			<div class="form-group">
				<label style="color:black"><b>Period</b></label>
				<div class="form-check form-check-inline">
				  <input class="form-check-input" type="radio" id="upd_5" name="gender" value="PartTime">
				  <label class="form-check-label" style="color:black" >PartTime</label>
				</div>
				<div class="form-check form-check-inline">
				  <input class="form-check-input" type="radio" id="upd_6" name="gender" value="FullTime">
				  <label class="form-check-label" style="color:black" >FullTime</label>
				</div>
				<span class="success-msg" id="umsg_5"></span>
			</div>
			<div class="form-group">
				<input type="hidden" name="dataval" id="upd_7">
				<span class="success-msg" id="umsg_6"></span>
			</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" id="up_cancle">Cancel</button>
        <button type="submit" class="btn btn-primary">Update Record</button>
      </div>
      </form>	
    </div>
  </div>
</div>	
	
<!-- End Update Design Modal -->
	
<!-- Delete Design Modal -->
	
<div class="modal fade" id="deleteModalCenter" tabindex="-1" role="dialog" aria-labelledby="deleteModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteModalCenterTitle">Are You Sure Delete This Record ?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="color:black">
		  <p>If You Click On Delete Button Record Will Be Deleted. We Don't have Backup So Be Carefull.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" id="de_cancle" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary" id="deleterec">Delete Now</button>
      </div>
    </div>
  </div>
</div>	

 <!-- FOOTER -->
 <footer class="container">
    <p class="float-right"><a href="#">Back to top</a></p>
    <p>&copy; 2020 getmelily.com all right reserved.</p>
</footer>
	
<!-- End Delete Design Modal -->
	
<script src="https://code.jquery.com/jquery-3.3.1.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" type="text/javascript"></script>


<script type="text/javascript">
	
$(document).ready(function (){
	$('#tbl_rec').load('record.php');

	$('#search').keyup(function (){
		var search_data = $(this).val();
		$('#tbl_rec').load('record.php', {keyword:search_data});
	});

	//insert Record

	$('#ins_rec').on("submit", function(e){
		e.preventDefault();
		$.ajax({

			type:'POST',
			url:'insprocess.php',
			data:$(this).serialize(),
			success:function(vardata){

				var json = JSON.parse(vardata);

				if(json.status == 101){
					console.log(json.msg);
					$('#tbl_rec').load('record.php');
					$('#ins_rec').trigger('reset');
					$('#close_click').trigger('click');
				}
				else if(json.status == 102){
					$('#sc_msg').text(json.msg);
					console.log(json.msg);
				}
				else if(json.status == 103){
					$('#msg_1').text(json.msg);
					console.log(json.msg);
				}
				else if(json.status == 104){
					$('#msg_2').text(json.msg);
					console.log(json.msg);
				}
				else if(json.status == 105){
					$('#msg_3').text(json.msg);
					console.log(json.msg);
				}
				else if(json.status == 106){
					$('#msg_4').text(json.msg);
					console.log(json.msg);
				}
				else if(json.status == 107){
					$('#msg_5').text(json.msg);
					console.log(json.msg);
				}
				else{
					console.log(json.msg);
				}

			}

		});

	});

	//select data

	$(document).on("click", "button.editdata", function(){
		$('#umsg_1').text("");
		$('#umsg_2').text("");
		$('#umsg_3').text("");
		$('#umsg_4').text("");
		$('#umsg_5').text("");
		$('#umsg_6').text("");
		$('#umsg_7').text("");
		var check_id = $(this).data('dataid');
		$.getJSON("updateprocess.php", {checkid : check_id}, function(json){
			if(json.status == 0){
				$('#upd_1').val(json.username);
				$('#upd_2').val(json.email);
				$('#upd_3').val(json.country);
				$('#upd_4').val(json.bod);
				$('#upd_7').val(check_id);
				if(json.gender == 'Male'){
					$('#upd_5').prop("checked", true);
				}
				else{
					$('#upd_6').prop("checked", true);
				}
			}
			else{
				console.log(json.msg);
			}
		});
	});

	//Update Record

	$('#updata').on("submit", function(e){
		e.preventDefault();

		$.ajax({

			type:'POST',
			url:'updateprocess2.php',
			data:$(this).serialize(),
			success:function(vardata){

				var json = JSON.parse(vardata);

				if(json.status == 101){
					console.log(json.msg);
					$('#tbl_rec').load('record.php');
					$('#ins_rec').trigger('reset');
					$('#up_cancle').trigger('click');
				}
				else if(json.status == 102){
					$('#umsg_6').text(json.msg);
					console.log(json.msg);
				}
				else if(json.status == 103){
					$('#umsg_1').text(json.msg);
					console.log(json.msg);
				}
				else if(json.status == 104){
					$('#umsg_2').text(json.msg);
					console.log(json.msg);
				}
				else if(json.status == 105){
					$('#umsg_3').text(json.msg);
					console.log(json.msg);
				}
				else if(json.status == 107){
					$('#umsg_4').text(json.msg);
					console.log(json.msg);
				}
				else if(json.status == 106){
					$('#umsg_5').text(json.msg);
					console.log(json.msg);
				}

				else{
					console.log(json.msg);
				}

			}

		});

	});

	//delete record

	var deleteid;

	$(document).on("click", "button.deletedata", function(){
		deleteid = $(this).data("dataid");
	});

	$('#deleterec').click(function (){
		$.ajax({
			type:'POST',
			url:'deleteprocess.php',
			data:{delete_id : deleteid},
			success:function(data){
				var json = JSON.parse(data);
				if(json.status == 0){
					$('#tbl_rec').load('record.php');
					$('#de_cancle').trigger("click");
					console.log(json.msg);
				}
				else{
					console.log(json.msg);
				}
			}
		});
	});


});

</script>

</body>
</html>
