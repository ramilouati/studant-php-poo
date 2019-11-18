<?php
require 'dbconnexion.class.php';
class Etudiant{
    private $cnx;
    public function __construct()
    {
        $db =new BasesDonnees;
        $this->cnx=$db->connectDB();
    }
    public function readAllEtudiant(){
        try {
             $rep='SELECT * FROM students';
             $result=$this->cnx->prepare($rep);
             $result->execute();
             return $result;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    
 public function creatEtudiant($firstname,$lastname,$email,$phone){
try{
    
    
    $rep ='INSERT INTO students(firstname, lastname, email , phone) VALUES ( :param_firstname, :param_lastname, :param_email, :param_phone)';
    $result = $this->$cnx->prepare($rep);
   $result->bindParam (':param_firstname',$firstname);
   $result->bindParam (':param_lastname',$lastname);
   $result->bindParam (':param_email',$email);
   $result->bindParam (':param_phone',$phone);
   $result->execute();
   return $result;
}
   catch (PDOException $e) {
   echo $e->getMessage();
}

}



public function editEtudiant($firstname,$lastname,$email,$phone,$id){
    try{
    $req = 'UPDATE students SET firstname=:param_firstname,lastname=:param_lastname,email=:param_email,phone=:param_phone WHERE id=:param_id';
    $result = $this->$cnx->prepare($req);
  
    $result->bindParam (':param_firstname',$firstname);
    $result->bindParam (':param_lastname',$lastname);
    $result->bindParam (':param_email',$email);
    $result->bindParam (':param_phone',$phone);
    $result->bindParam (':param_id',$id);
    $result->execute();
    return $result;
}
catch (PDOException $e) {
    echo $e->getMessage();
 }
    header('location:index.php');
   


}

public function delete(){
    try{
    $req = $cnx->prepare("DELETE FROM students WHERE  id=:param_id ");
    $req->bindParam(":param_id",$_GET['id']);
    $req->execute();
    return $result;
}
catch (PDOException $e) {
    echo $e->getMessage();
 }
    header('location:index.php');
}


}
