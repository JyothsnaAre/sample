<?php
$username='';
$pwd1='';
$pwd2='';
if(isset($_POST['submit']))
{
	    $db=mysqli_connect('localhost','root','','logininfo') or die('unnable to connect ');
        $username=$_POST['username'];
		$pwd1=$_POST['password1'];
		$pwd2=$_POST['password2'];
		if(!empty($username) && !empty($pwd1) && !empty($pwd2))
		{
			if($pwd1==$pwd2)
			{
				$query="select * from login where username=' .$username .'";
				$data=mysqli_query($db,$query);
				if(mysqli_num_rows($data)==0)
				{
					$query="insert into login (username,password) values"."('$username',SHA('$pwd1'))" or die('unable to insert');
					mysqli_query($db,$query);
					header('location:login.php');
			    }
				else
				  echo '<p>Username already exists</p>';
			}
			else
			{
				echo '<p> please enter password correctly</p>';
			}
		}
		else
			echo '<p> please enter all details</p>';
	mysqli_close($db);
	exit();
}
?>
<h2> enter details to signup</h2>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
<fieldset>
<legend>SignUP</legend>
<label for="username"> username:</label>

<input type="text" id="username" name="username"
 value="<?php if(!empty($username)) echo $username; ?>" /><br/>
<label for="username"> password1:</label>
<input type="password" name="password1" id="password" /><br/>
<label for="username"> password1:</label>
<input type="password" name="password2" id="password" /><br/>
<input type="submit" value="Log In" name="submit" />
</fieldset>
</form>




