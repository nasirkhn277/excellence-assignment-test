
<?php include_once "connection.php"; ?>
<section class="">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Excellence Technosoft Pvt Ltd</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<form id="frm" action="?page=main" method="post" class="">
				<div class="form-group row">
					<label for="inputEmail3" class="col-sm-2 col-form-label">First Name<span style="color:red;">*</span></label>
					<div class="col-sm-10">
					<input type="text" class="form-control required" id="name" maxlength="80" name="name" placeholder="First Name">
					</div>
				</div>
				<div class="form-group row">
					<label for="inputEmail3" class="col-sm-2 col-form-label">Last Name</label>
					<div class="col-sm-10">
					<input type="text" class="form-control" id="lname" maxlength="80" name="lname" placeholder="Last Name">
					</div>
				</div>
				<div class="form-group row">
					<label for="inputEmail3" class="col-sm-2 col-form-label">Email<span style="color:red;">*</span></label>
					<div class="col-sm-10">
					<input type="email" class="form-control required" maxlength="80" id="email" name="email" placeholder="Email">
					</div>
				</div>
				<div class="form-group row">
					<label for="inputEmail3" class="col-sm-2 col-form-label">Date Of Birth<span style="color:red;">*</span></label>
					<div class="col-sm-10">
					<input type="date" class="form-control required" id="dob" name="dob" placeholder="Date Of Birth">
					</div>
				</div>
				<div class="form-group row">
					<label for="inputEmail3" class="col-sm-2 col-form-label">Mobile<span style="color:red;">*</span></label>
					<div class="col-sm-10">
					<input type="text" class="form-control required numeric" id="phone" name="phone" maxlength="10" placeholder="Telephone/Mobile">
					</div>
				</div>
				<div class="form-group row">
				<label for="inputEmail3">Designation<span style="color:red;">*</span></label>
				<select class="col-sm-8 col-form-label required" id="designation" name="designation">
				<option value="">Select</option>

				<?php 
					$select = $db->prepare('SELECT * FROM global_designation WHERE Active= ?');
					$select->bindValue(1, 1);
					$select->execute();
					$select->setFetchMode(PDO::FETCH_ASSOC);
					while($row_d = $select->fetch()){
						?>
						<option value="<?php echo $row_d['ID'] ?>"><?php echo $row_d['Designation'] ?></option>
						<?php
					}
				?>
				</select>
			</div>
				</div>
				<fieldset class="form-group">
				<div class="row">
				<legend class="col-form-label col-sm-2 pt-0" style="color:white;">Gender<span style="color:red;">*</span></legend>
				<div class="col-sm-10">
					<div class="form-check">
					<input class="form-check-input"  type="radio" name="gender" id="genderM" value="1" checked>
					<label class="form-check-label" style="color:white;" for="gridRadios1">
						Male
					</label>
					</div>
					<div class="form-check">
					<input class="form-check-input" type="radio" name="gender" id="genderF" value="2">
					<label class="form-check-label" for="gridRadios2" style="color:white;">
						Female
					</label>
					</div>
				</div>
				</div>
			</fieldset>
				<div class="form-group row">
					<div class="col-form-label col-sm-2 pt-0" style="color:white;">Hobbies </div>
					<div class="col-sm-10">
					<?php 
					$select_h = $db->prepare('SELECT * FROM global_hobbies WHERE Active = ?');
					$select_h->bindValue(1, 1);
					$select_h->execute();
					$select_h->setFetchMode(PDO::FETCH_ASSOC);
					while($row_h = $select_h->fetch()){
						?>
					<div class="form-check">
						<input class="form-check-input" type="checkbox" name="hobby[]" id="hobby" value="<?php echo $row_h['ID'] ?>">
						<label class="form-check-label" for="gridCheck1" style="color:white;">
						<?php echo $row_h['Hobby'] ?>
						</label>
					</div>
					<?php
					}
					?>
				</div>
				</div>
				<div class="form-group row">
					<div class="col-sm-10">
					<button type="submit" id="btn" class="btn btn-primary">Submit Button</button>
					</div>
				</div>
				</form>
		      </div>
				</div>
			</div>
		</div>
	</section>