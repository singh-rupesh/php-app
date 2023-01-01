<?php

if(!ISSET($_REQUEST["uid"])){
  echo "Student ID is not Present";
  exit();
}else if (empty($_REQUEST["uid"])){
  echo "Student ID is empty";
  exit();
}else{
  require_once(__DIR__."/db/connection.php");
 
  $sth = $connection->prepare("SELECT * FROM `students` WHERE `id` = '{$_REQUEST["uid"]}' LIMIT 1");
  $sth->setFetchMode(PDO:: FETCH_OBJ);
  $sth->execute();
  $std_data = $sth->fetch();
}


?>

<!DOCTYPE html>

<head>
  <title>Student Form</title>

</head>


<body>
  <form action="update.php" style="padding-top: 8%; padding-left: 36%;">

    <label for="First name">First name: </label><br>

    <input type="text" name="first_name" placeholder="First name" value="<?= $std_data->first_name ?>"><br>

    <label for="Last name">Last name: </label><br>

    <input type="text" name="last_name" placeholder="Last name" value="<?= $std_data->last_name ?>"><br>

    <label for="D.O.B">D.O.B: </label><br>

    <input type="date" id="date_of_birth" name="dob" placeholder="Date Here" value="<?= $std_data->dob ?>"><br>

    <label for="Email">Email: </label><br>

    <input type="text" name="email" placeholder="name@demo.com" value="<?= $std_data->email ?>"><br>

    <label for="Mobile-Number">Mobile no: </label><br>

    <input type="number" name="mobile_no" placeholder="+91 9876543210" value="<?= $std_data->mobile_no ?>"><br>

    <label for="Country">Counrty: </label><br>
    <select name="country">
      <option value="america" <?php if($std_data->country == "america"){echo " selected";} ?>>America</option>
      <option value="russia" <?php if($std_data->country == "russia"){echo " selected";} ?>>Russia</option>
      <option value="england" <?php if($std_data->country == "england"){echo " selected";} ?>>England</option>
      <option value="india" <?php if($std_data->country == "india"){echo " selected";} ?>>India</option>
      <option value="china" <?php if($std_data->country == "china"){echo " selected";} ?>>China</option>
      <option value="pakistan" <?php if($std_data->country == "pakistan"){echo " selected";} ?>>Pakistan</option>
    </select><br><br>

    <input type="hidden" name="student_id" value="<?= $std_data->id ?>">

    <button type="submit">Update Student Profile</button>

    <button type="reset">Clear Form</button>

  </form>



</body>


</html>