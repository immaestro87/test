<?

include 'model.php';

$name = 'image';
if (!empty($_FILES)) {
	if(isset($_FILES[$name])){
		if(0==$_FILES[$name]['error']){
			$newFileName =$_FILES[$name]['name'];
			$newFilePath = __DIR__ . '/img/' . $newFileName;
			move_uploaded_file(
				$_FILES[$name]['tmp_name'],
				$newFilePath
				);
				$title = 'Test image';
			dbExec("
				INSERT INTO images (title, file)
				VALUES ('$title', '$newFileName')
				");
		}
	}
}
header('Location: /index.php');