<?php
session_start();
if ($_POST['Submit'] == 'Send')
{
 

$to = $_POST['toemail'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$fromemail = $_POST['fromemail'];
$fromname = $_POST['fromname'];
$lt= '<';
$gt= '>';
$sp= ' ';
$from= 'From:';
$headers = $from.$fromname.$sp.$lt.$fromemail.$gt;
mail($to,$subject,$message,$headers);
header("Location: index.php?msg= Mail Sent!");
exit();
}
?>
<html>
<head>
<title>Email Pranks</title>
</head>
<body bgcolor="#ffffcc">
<h2 align="center">
Fake Email Prank </h2>
<h3 align="center">
Please do not misuse this script. Use it only for having FUN.
</h3><br>
<p style="margin-left:15px">
<form action="index.php" method="POST">
<b>From Name:</b><br>
<input type="text" name="fromname" size="50"><br>
<br><b>From Email:</b><br>
<input type="text" name="fromemail" size="50"><br>
<br><b>To Email:</b><br>
<input type="text" name="toemail" size="50"><br>
<br><b>Subject:</b><br>
<input type="text" name="subject" size="74"><br>
<br><b>Your Message:</b><br>
<textarea name="message" rows="5" cols="50">
</textarea><br>
<br>
<input type="submit" name="Submit" value="Send">
<input type="reset" value="Reset">
</form>
</p>
<?php if (isset($_GET['msg'])) { echo "<font color=\"red\"><h3 align=\"center\"> $_GET[msg] </h3></font>"; } ?>
<h3 align="center">
WARNING: Use it at your own risk. Do not use this for Spamming!.
</h3>
</body>
</html>

