<?php
    include'connection.php';
    
    $id=null;
    
    	 if ( !empty($_GET['id'])) {
        $id = $_REQUEST['id'];
}
    
    if ( !empty($_POST))
    {
    	$pdo=$cnx;


 
	$sqll = 'DELETE FROM panel WHERE id = ?'; 
    $q = $pdo->prepare($sqll);	
    $q->execute(array($id)); 
    }
   
?>
<!DOCTYPE html>
<html>
<head>
    <title>delete</title>
</head>
<body>
    <form method="post" action="delet.php?id=<?php echo $id?>">
    
<h3>Are you sure u want to delete ? </h3>
<input type="submit" name="yes" value="yes">
<a href="./work.php">retour au menu</a>

</form>


</body>
</html>