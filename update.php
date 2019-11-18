<?php
include 'etudiant.class.php';
     
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $phone = $_POST['phone']; 
    $id = $_POST['id'];

    $nouveletudiant=new Etudiant;
$nouveletudiant->editEtudiant($firstname,$lastname,$email,$phone);
      
    ?>