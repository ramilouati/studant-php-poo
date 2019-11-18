<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity=" " crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <div class="container">
<table class="table table-hover">
    <thead>
<tr>
    <td>id</td>
<td>first name</td>
<td>last name</td>
<td>email</td>
<td>phone</td>
</tr>
</thead>
<tbody>

<?php
include 'etudiant.class.php';
$etudiant = new etudiant;
$listetu = $etudiant -> readAllEtudiant();
while($data =$listetu->fetch()){
?>
<tr>
<td><?= $data['id'] ?></td>
<td><?= $data['firstname'] ?></td>
<td><?= $data['lastname'] ?></td>
<td><?= $data['email'] ?></td>
<td><?= $data['phone'] ?></td>



</tr>
<?php
}
?>



</tbody>
</table>


    </div>




</body>
</html>