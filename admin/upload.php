<?php 
if(isset($_FILES['admin']['name']))
{
	$file = $_FILES['admin']['tmp_name'];
	$file_name = $_FILES['admin']['name'];
	$file_name_array = explode("." , $file_name);
	$extension  = end($file_name_array);
	$new_image_name = rand() . '.' . $extension;
	chmod('admin', 1777);
	$allowed_extension = array("jpg" , "gif", "png" , "jpeg");
	if(in_array($extension, $allowed_extension))
	{
		move_uploaded_file($file, 'admin/' . $new_image_name);
		$function_number = $GET ['CKEditorFuncNum'];
		$url = 'admin/' . $new_image_name;
		$message = '';
		echo "<script type= 'text/javascript'
		>window.parent.CKEDITOR.tools.callFunction('$function_number', '$url', '$message'>;</script>";
	}
}

?>

uSL@x@ytyX^dp*RUdJY!