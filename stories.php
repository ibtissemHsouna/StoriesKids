<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kidsStory</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" 
  integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
   <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" 
   integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
   crossorigin="anonymous" referrerpolicy="no-referrer" />
   
</head>
<body>
<?php include 'connect.php';?>
<?php include 'header.php';?>


<?php 

$id=$_GET['story_id'];
$sql="Select * from topic  where topic_id=$id";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result)){
	$topic_name=$row['topic_name'];
	$topic_desc=$row['topic_desc'];
	$topic_image=$row['topic_image'];
	
}

?>

<!--jambotron-->
<div class="container-fluid ">
<div class="jumbotron bg-warning rounded">
<div class="container">
  // <h1 class="display-4"><?php echo $topic_name ;?></h1>
  <p class="lead"><?php echo $topic_desc ;?></p>

    <button class="btn btn-dark mb-4"><a class="text-light " href="#reading" role="button">Continue Reading</a>
</div>
</div>
</div>
<!-- end jambotron-->

<div class="container-fluid">
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./images/kids1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
       
        <p>“Once you learn to read, you will be forever free.” </p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="./images/kids2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
   
        <p>“Today a reader, tomorrow a leader.” </p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="./images/kids3.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
      
        <p>“Reading is to the mind what exercise is to the body.” </p>
      </div>
    </div>
	
	
  </div>
 </div>
  
</div>

<div class="container mt-4" id="reading">
<div class="jumbotron jumbotron-fluid bg-warning rounded p-0 ">
<div class="container">
  <h1 class="display-4 text-center">Enjoy Reading</h1>
  <img src=<?php echo $topic_image ;?> class="img-fluid" >
  <p class="lead">Cela se passait il y a bien longtemps dans la forêt enchantée des rêves bleus. Il y avait une licorne qui s'appelait Flora. Son plus grand rêve était de voler.
Le problème se trouvait là: elle n'avait pas d'ailes et ne pouvant voler, elle alla voir la sorcière Caraba qui habitait dans la forêt désenchantée.
Elle lui demanda si elle avait une potion pour avoir des ailes et pour pouvoir voler. La sorcière chercha dans tous ses grimoires et enfin elle trouva la bonne potion. La licorne but la potion, mais elle ne sentit pas ses ailes. Caraba lui dit alors:
- Tes ailes pousseront jour après jour.
Puis Flora repartit chez elle. Le lendemain, elle vit quelque chose bouger; cela la fit sursauter. Elle s'aperçut ensuite que c'était ses ailes qui, jour après jour, poussèrent.
Mais ne pouvant toujours pas voler, elle alla voir le magicien Délavéga qui habitait dans la montagne blanche.
Elle sauta par-dessus des troncs, galopa, traversa des forêts, et enfin arriva au pied de la Montagne blanche. Elle monta et, devant le château, s'arrêta net.
Devant le château se dressait un petit lapin nommé Timidina. Il tenait dans ses pattes une liste de charades. Le magicien lui avait donné ce rôle pour que personne n'entre dans le château sans autorisation. Timidina lui dit :
- Réponds à ma charade et tu pourras entrer.
Le petit lapin lut sa charade à Flora :
- Mon premier est Noir et Blanc,
Mon second est un poisson,
Mon tout rampe et étouffe.
Qui suis-je ?
Flora donna sa réponse.
- C'est bien, la réponse est bien Python. Tu peux entrer dans le château, prends le couloir et la première porte à droite.
Flora suivit les indications du lapin. Elle arriva dans la salle d'attente du magicien Délavéga.
Le magicien lui demanda ce qu'elle voulait. Elle lui dit :
- Je voudrais voler, mais je ne peux pas. La sorcière Caraba m'a donné des ailes mais elle a dû oublier un ingrédient.
  </p>

   
</div>
</div>
</div>

<div class="container-fluid mb-4">
<h2 class="text-center display-4">
Thank you for you time <i class="fas fa-smile"></i>
</h2>

</div>
<?php include 'footer.php';?>
</body>