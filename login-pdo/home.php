<?php
include_once 'dbconfig.php';
if(!$user->is_loggedin())
{
	$user->redirect('index.php');
}
$user_id = $_SESSION['user_session'];
$stmt = $DB_con->prepare("SELECT * FROM users WHERE user_id=:user_id");
$stmt->execute(array(":user_id"=>$user_id));
$userRow=$stmt->fetch(PDO::FETCH_ASSOC);
?>
<div>
	<div>
    	<label><a href="logout.php?logout=true"><i></i> logout</a></label>
    </div>
</div>
<div>
welcome : <?php print($userRow['user_name']); ?>
<br /><br />
</div>
</body>
</html>