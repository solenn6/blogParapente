<?php
if(!empty($_FILES))
{
	foreach($_FILES as $file)
	{
		$source = $file['tmp_name'];
		$dest = 'uploads/'.$file['name'];
		
		move_uploaded_file($source,$dest);
		
		if($file['error']==UPLOAD_ERR_OK)
		{
			echo '<div>Fichier uploadé</div>';
		}
		else
		{
			echo 'Erreur';
		}
	}
	require("connectdb.php");
	$pseudo= $_POST['pseudo'];
	$content=$_POST['content'];
	$id=$_POST['site'];
    $req= $db->prepare("INSERT INTO experience_comment(id_site, comment_pseudo, comment_date, comment_content, comment_picture) 
        VALUES (:id, :pseudo, NOW(), :content, :picture)");
    $req->bindParam(':id', $id);
    $req->bindParam(':pseudo', $pseudo);
    $req->bindParam(':content', $content);
    $req->bindParam(':picture', $dest);
    $req->execute();
}
header("location:descriptionSite.php?site=$id");
?>

