<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity=" " crossorigin="anonymous">

</head>
<body>
<div class="container py-3">
<div class="jumbotron">
<H1>Liste Des Etudients DSI21 Iset Bizerte 2019
</H1>
</div>
</div>
<div class="container">
<a href="create.php"><button class="btn btn-info"><i class="fa fa-user-plus"></i>Nouvel etudient</button></a>
</div>
<br>
<div class="container">
<table class="table table-hover">
<tr>
<th>ID</th>
<th>Firs tName</th>
<th>Last Name</th>
<th>Email</th>
<th>Phone</th>
<th>Operations</th>
</tr>
</div>

<?php
include 'dbconnexion.php';

$rep = $cnx->prepare('SELECT * FROM students');
$rep->execute();
while($data = $rep->fetch()){
    echo'<tr>';
    echo'<td>'.$data['id'].'</td>';
    echo '<td>'.$data['firstname'].'</td>';
    echo '<td>'.$data['lastname'].'</td>';
    echo '<td>'.$data['email'].'</td>';
    echo '<td>'.$data['phone'].'</td>';
    
    echo '<td><a href="edit.php?id= '.$data['id'].'">Editer</a>&nbsp;&nbsp;';
    echo '<a href="delete.php?id='.$data['id'].'">Supprimer</a></td>';
    echo '</tr>';
}
//var_dump($rep);

?>

</table>
<script src="js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>