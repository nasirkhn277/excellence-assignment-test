<?php
function check($input) {
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
  }

  function get_hobbies($id) {
    global $db;
    $select_h = $db->prepare("SELECT * FROM global_hobbies WHERE ID = ?");
    $select_h->bindParam(1, $id);
	$select_h->execute();
	$select_h->setFetchMode(PDO::FETCH_ASSOC);
    $row_h = $select_h->fetchAll();
    $output = $row_h[0]['Hobby'];
    return $output;
  }

  function get_designation($id) {
    global $db;
    $select_d = $db->prepare("SELECT * FROM global_designation WHERE ID = ?");
    $select_d->bindParam(1, $id);
	$select_d->execute();
	$select_d->setFetchMode(PDO::FETCH_ASSOC);
    $row_d = $select_d->fetchAll();
    $output = $row_d[0]['Designation'];
    return $output;
  }

?>