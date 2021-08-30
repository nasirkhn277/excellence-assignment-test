
<?php

include_once "connection.php";
include_once "functions.php";

// define variables and set to empty values
$name = $lname = $email = $dob = $phone = $designation = $gender = $hobby = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $name = check($_POST['name']);
      $lname = check($_POST['lname']);
      $email = check($_POST['email']);
      $dob = check($_POST['dob']);
      $phone = check($_POST['phone']);
      $designation = check($_POST['designation']);
      $gender = check($_POST['gender']);
      $hobby = $_POST['hobby'];
}
$hobbies =array();
foreach ($hobby as $hkey => $hVal) { 
  $hobbies[] = get_hobbies($hVal);
}
        $insrt = $db->prepare("INSERT INTO user_info (First_Name, Last_Name, Email, DOB, Mobile, Designation, Gender, Reg_date) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $insrt->bindParam(1, $name);
        $insrt->bindParam(2, $lname);
        $insrt->bindParam(3, $email);
        $insrt->bindParam(4, $dob);
        $insrt->bindParam(5, $phone);
        $insrt->bindParam(6, $designation);
        $insrt->bindParam(7, $gender);
        $insrt->bindValue(8, time());
        $insrt->execute();
       
        $last_id = $db->lastInsertId();
        
        //insert class
        $query = "INSERT INTO user_hobbies (Users_ID, Hobby_id) VALUES"; //Prequery
        $qPart = array_fill(0, count($hobby), "(?, ?)");
        $query .= implode(",", $qPart);
        $stmt = $db->prepare($query);
        
        $i = 1;
        foreach ($hobby as $key => $Val) { //bind the values one by one
            $stmt->bindParam($i++, $last_id);
            $stmt->bindParam($i++, $hobby[$key]);
        }
        
        $stmt->execute(); //execute

$hoby = implode(' , ', $hobbies);
?>

<section class="">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Excellence Technosoft Pvt Ltd</h2>
				</div>
			</div>
      <div class="alert alert-info" role="alert">
        First Name: <?php echo $name; ?>
      </div>
      <div class="alert alert-info" role="alert">
        Last Name: <?php echo $lname; ?>
      </div>
      <div class="alert alert-info" role="alert">
        Email: <?php echo $email; ?>
      </div>
      <div class="alert alert-info" role="alert">
        Date f Birth: <?php echo date('d-m-Y',strtotime($dob)); ?>
      </div>
      <div class="alert alert-info" role="alert">
        Mobile: <?php echo $phone; ?>
      </div>
      <div class="alert alert-info" role="alert">
        Designation: <?php echo get_designation($designation); ?>
      </div>
      <div class="alert alert-info" role="alert">
        Gender: <?php echo $gender == "1" ? "Male" : "Female"; ?>
      </div>
      <div class="alert alert-info" role="alert">
        Hobbies: <?php echo $hoby; ?>
      </div>
    </div>
	</section>


