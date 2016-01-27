<?php
require_once 'dbconfig.php';

if($user->is_loggedin()!="")
{
	$user->redirect('home.php');
}

if(isset($_POST['btn-login']))
{
	$uname = $_POST['txt_uname_email'];
	$umail = $_POST['txt_uname_email'];
	$upass = $_POST['txt_password'];
		
	if($user->login($uname,$umail,$upass))
	{
		$user->redirect('home.php');
	}
	else
	{
		$error = "Wrong Details !";
	}	
}
?>
<form method="post">
    <h2>Sign in.</h2><hr />
    <?php
	if(isset($error))
	{
			 ?>
             <div>
                <i></i> &nbsp; <?php echo $error; ?> !
             </div>
             <?php
	}
	?>
    <div>
    	<input type="text" name="txt_uname_email" placeholder="Username or E mail ID" required />
    </div>
    <div>
    	<input type="password" name="txt_password" placeholder="Your Password" required />
    </div>
    <div></div><hr />
    <div>
    	<button type="submit" name="btn-login">
        	<i></i>&nbsp;SIGN IN
        </button>
    </div>
    <br />
    <label>Don't have account yet ! <a href="sign-up.php">Sign Up</a></label>
</form>
</body>
</html>