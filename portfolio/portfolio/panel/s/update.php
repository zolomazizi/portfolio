<?php
    include'connection.php';
    $pdo=$cnx;
  $id=null;
    
         if ( !empty($_GET['id'])) {
        $id = $_REQUEST['id'];
}
    
    if ( !empty($_POST)){
         
    $link = $_POST['link'];
    $file = $_POST['file'];

    
        $sqll = 'UPDATE panel SET file = ?, link = ? WHERE id = ?'; 

        // $sql = 'UPDATE liste_proprietaire SET adresse="'.$_POST['nouvelle_adresse'].'" WHERE nom="'.$_POST['proprio'].'"';

    $q = $pdo->prepare($sqll);  
    $q->execute(array($link,$file,$id)); 
    }


    
    
   
?>
<!DOCTYPE html>
<html>
<head>
	<title>update</title>
</head>
<body>



<form method="post" action="update.php?id=<?php echo $id?>"  class="zolo col-md-6 " enctype="multipart/form-data">
          
            <h3>update project</h3>
          <div class="col-md-6">
            <label class="">project title </label>
            <div class="form-group">
              <input type="text" class="form-control" name="title" placeholder="title">
            </div>
          </div>
          
          <div class="col-md-6">
             <label class="">project link</label>
            <div class="form-group">
              <input type="text" class="form-control" name="link" placeholder="link">
            </div>
          </div>
          
          <input type="hidden" name="siz" value="1000000">
          <div class="col-md-6">
             
            <div class="form-group">
              <input type="file"  name="file" placeholder="image">
            </div>
          </div>
           
          <div class="col-md-12">
            <div class="form-group">
              <input type="submit" name="submit" value="ajouter" class="btn btn-primary">
            </div>
          </div>

        </form> 






	<!-- <form action="update.php?id=<?php echo $id?>" method="post" >
        
	  <label for="nom">Name : </label>
      <input type="text" name="nom" placeholder="enter ur name"><br>
      <label for="pw">Password : </label>
      <input type="Password" name="pw" placeholder="enter ur Password"><br>
      <input type="submit" name="submit" value="submit">


<a href="./test.php">retour au menu</a>

</form> -->


</body>
</html>