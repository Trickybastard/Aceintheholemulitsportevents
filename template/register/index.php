<?php

// Edit or Replace this try/catch statement to work with the current PHT configuration
    try
{
  $pdo = new PDO('mysql:host=localhost;dbname=omarpvwe_ace', 'omarpvwe_aceuser', 'Phantom30!');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->exec('SET NAMES "utf8"');
}
catch (PDOException $e)
{
  $error = 'Unable to connect to the database server.';
  include '../includes/error.html.php';
  exit();
}
// Modify the If statement so the try only runs if the First Name field has been submitted AND the honeypot field is empty ''
if (isset($_POST['fname'])){
    $age = $_POST['age'];
    $role = $_POST['role'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $ename = $_POST['ename'];
    $enum = $_POST['enum'];
    $gender = $_POST['gender'];
    $shirt = $_POST['shirt'];
    $sat = $_POST['sat'];
    $sun = $_POST['sun'];
    $spec = $_POST['spec'];
    
    
    
    // If the if statement is true, save each form field value as a variable. These variable values will be used in the thank you page.

    // And run the try/catch to attempt to insert data in the database. Modify the INSERT statement to write all the form filed values (except the honeypot) to the database.
    try {
      $sql = 'INSERT INTO register SET
          fname = :fname,
          age = :age,
          role = :role,
          phone = :phone,
          email = :email,
          ename = :ename,
          enum = :enum,
          gender = :gender,
          shirt = :shirt,
          sat = :sat,
          sun = :sun,
          spec = :spec';
      $s = $pdo->prepare($sql);
     $s->bindValue(':fname', $_POST['fname']);
      $s->bindValue(':age', $age);
      $s->bindValue(':role', $role);
      $s->bindValue(':phone', $phone);
      $s->bindValue(':email', $email);
      $s->bindValue(':ename', $ename);
      $s->bindValue(':enum', $enum);
      $s->bindValue(':gender', $gender);
      $s->bindValue(':shirt', $shirt);
        $s->bindValue(':sat', $sat);
        $s->bindValue(':sun', $sun);
        $s->bindValue(':spec', $spec);
      $s->execute();
    }
    catch (PDOException $e)
    {
      $error = 'Error submiting data: ' . $e->getMessage();
      include '../includes/error.html.php';
      exit();
    }
    // load the thank you page after the INSERT runs
    include '../includes/success.html.php';
    // Add an else to load the initial page if the initial (line 19) if statement is false
    
  } else{

include 'register.html.php'; //Modify this to include the initial file for this folder
}

?>