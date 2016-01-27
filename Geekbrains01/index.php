<?
require './model.php';

$images = dbQuery('
	SELECT * FROM images
');

require './view/index.php';