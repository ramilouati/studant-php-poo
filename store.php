
<?php
include 'etudiant.class.php';

$firstname = $_POST ['firstname'];
$lastname =$_POST ['lastname'];
$email =$_POST ['email'];
$phone= $_POST ['phone'];
$nouveletudiant=new Etudiant;
$nouveletudiant->creatEtudiant($firstname,$lastname,$email,$phone);
?>
