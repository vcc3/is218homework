
 //form for taking input takes name email and a message
 //posting to the php file of form-mail
<form name="form1" method="post" action="form-email.php">
Name: <br/>
<input type="text" name="name" value="<?php echo $_POST['name']; ?>" size="50" /><br/><br/>
Email Address: <br/>
<input type="text" name="email" value="<?php echo $_POST['email']; ?>" size="50"/> <br/><br/>
Message: <br/>
<textarea name="message" rows="5" cols="50"><?php echo $_POST['message']; ?></textarea>
<br/>
<input type="submit" name="Submit" />
</form>