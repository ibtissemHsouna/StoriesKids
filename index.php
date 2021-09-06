

<?php include 'header.php';?>

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
<div class="container">
<h1 class="text-center featureTitle mb-5 mt-5">Featured Stories</h1>
<div class="row">

<?php 

$sql="Select * from topic ";
$result=mysqli_query($con,$sql);
if($result){
	while($row=mysqli_fetch_array($result)){
	$id=$row['topic_id']; 
	$topic_image=$row['topic_image'];
	$topic_name=$row['topic_name'];
	$topic_desc=$row['topic_desc'];
	echo '<div class="col-md-4 col-sm-6 mb-5">
<div class="card" style="width: 18rem;">
  <img src='.$topic_image.' class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">'.$topic_name.'</h5>
    <p class="card-text">'.substr($topic_desc,0,50).'........</p>
    <a href="stories.php?story_id='.$id.'" class="btn btn-primary">Continue reading</a>
  </div>
</div>
</div>';
}
}
?>

<div class="col-md-4 col-sm-6 mb-5">
<div class="card" style="width: 18rem;">
  <img src="./images/img10.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Continue reading</a>
  </div>
</div>
</div>

<div class="col-md-4 col-sm-6 mb-5">
<div class="card" style="width: 18rem;">
  <img src="./images/img10.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Continue reading</a>
  </div>
</div>
</div>

<div class="col-md-4 col-sm-6 mb-5">
<div class="card" style="width: 18rem;">
  <img src="./images/img10.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Continue reading</a>
  </div>
</div>
</div>

</div>



</div>
</div>
    
<?php include 'footer.php';?>

</body>
</html>