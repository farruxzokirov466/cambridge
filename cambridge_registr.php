<!DOCTYPE html>
<html>
	<head>
		<title>Cambridge Learning Managment</title>
		<link rel="stylesheet" type="text/css" href="registr.css">
		<link rel="stylesheet" type="text/css" href="bootstrap.css">
	</head>
	<body>
		<div class="container">
			<div class="icon">
				<img class="testpic" src="pic/test.ico">
				<h3 class="welcome" >Welcome to Cambridge</h3>
				<p>We are inviting you to pass a complimentary starting test in any of our branches.</p>
				<p>It is held every hour at every branch from 9:00 to 14:00 on weekdays and is completely free of charge.</p>
				<p>Please fill up your personal and contact details so that we can build a learning path that perfectly fits you! ✌</p>
			</div>

			<form class="form" action="baza_yozish.php" method="post"><!---->

			 	<div  class="form-group row">
			 		<label  for="phone" class="col-sm-2 col-form-label">Phone</label>
			 		<div  class="col-sm-10">
			 			<div  class="input-group input-group-sm mb-3">
			 				<div  class="input-group-prepend">
			 					<span  id="basic-addon1" class="input-group-text">+998</span>
			 				</div>
			 				<input  type="text" id="phone" required="" name="phone" placeholder="Phone" class="form-control form-control-sm" >
			 			</div>
			 		</div>
			 	</div>
			 	 <div >
			 	 	<div  class="form-group row">
			 	 		<label  for="name" class="col-sm-2 col-form-label">Fullname</label>
			 	 		<div  class="col-sm-10">
			 	 			<input  type="text" id="name" required="" name="fullname" placeholder="Fullname" class="form-control form-control-sm"> 
			 	 		</div>
			 	 	</div>
			 	 </div> 
			 	 	<div  class="form-group row">
			 	 		<label  for="date_of_birth" class="col-sm-2 col-form-label">Date of birth</label> 
			 	 		<div  class="col-sm-10">
			 	 			<div  class="vdp-datepicker">
			 	 				<div class="input-group"><!----> 
			 	 					<input type="date" id="date_of_birth" name="date"  autocomplete="off" class="form-control"> 
			 	 				</div> 
			 	 			</div>
			 	 		</div>
			 	 	</div> 
			 	 		<div  class="form-group row">
			 	 			<label  for="phone2" class="col-sm-2 col-form-label">Phone no.2</label> 
			 	 			<div  class="col-sm-10">
			 	 				<div  class="input-group input-group-sm mb-3">
			 	 					<div  class="input-group-prepend">
			 	 						<span  id="basic-addon1" class="input-group-text">+998</span>
			 	 					</div> 
			 	 					<input  type="text" id="phone2" name="phone2" placeholder="Phone no.2" class="form-control form-control-sm" >
			 	 				</div>
			 	 			</div>
			 	 		</div> 
			 	 		<div  class="form-group row">
			 	 			<label  for="course" class="col-sm-2 col-form-label">Course</label> 
			 	 			<div  class="col-sm-10">
			 	 				<select  id="course" name="course" class="form-control form-control-sm">
			 	 					<option ></option> 
			 	 					<option  value="General English">General English</option>
			 	 					<option  value="IELTS">IELTS</option>
			 	 					<option  value="Preschool">Preschool</option>
			 	 					<option  value="General English for Kidzz">General English for Kidzz</option>
			 	 					<option  value="Public Speaking">Public Speaking</option>
			 	 					<option  value="Русский Язык">Русский Язык</option>
			 	 				</select> <!---->
			 	 			</div>
			 	 		</div> 
			 	 		<div  class="form-group row">
			 	 			<label  for="branch_id" class="col-sm-2 col-form-label">Branch</label> 
			 	 			<div  class="col-sm-10">
			 	 				<select  id="branch_id" name="branch" class="form-control form-control-sm">
			 	 					<option ></option> 
			 	 					<option  value="Cambridge Darkhan">Cambridge Darkhan</option>
			 	 					<option  value="Cambridge Kidzz">Cambridge Kidzz</option>
			 	 					<option  value="Cambridge Drujba">Cambridge Drujba</option>
			 	 					<option  value="Cambridge Badamzar">Cambridge Badamzar</option>
			 	 					<option  value="Cambridge Tinchlik">Cambridge Tinchlik</option>
			 	 					<option  value="Cambridge Oybek">Cambridge Oybek</option>
			 	 				</select>
			 	 			</div>
			 	 		</div> 
			 	 		<div  class="form-group row">
			 	 			<label  for="comment" class="col-sm-2 col-form-label">Time</label> 
			 	 			<div  class="col-sm-10">
			 	 				<select  id="comment" name="time" class="form-control form-control-sm">
			 	 					<option selected="">---</option> 
			 	 					<option value="9:00">9:00</option> 
			 	 					<option value="10:00">10:00</option> 
			 	 					<option value="11:00">11:00</option> 
			 	 					<option value="12:00">12:00</option> 
			 	 					<option value="13:00">13:00</option> 
			 	 					<option value="14:00">14:00</option>
			 	 				</select>
			 	 			</div>
			 	 		</div>
			 	 	<div  class="modal-footer">
			 	 		<input  type="submit" class="btn btn-success btn-sm btn-block" value="Register">
			 	 	</div>
			 </form>
		</div>

	</body>
</html>