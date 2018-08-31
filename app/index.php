<?php
$hostname = gethostname();
if(count($_POST) > 0){
  $f = fopen('messages.txt', 'a');
  $date = date("Y-m-d H:i:s");
  $username = $_POST['username'];
  $message = $_POST['message'];
  fwrite($f, $date.' '.$username."\n".$message."\n\n");
  fclose($f);
}
$board = file_get_contents('messages.txt');
?>
<pre>
Server: <?php echo $hostname;?>
</pre>
<h1>K12 Twitter</h1>
<form method="POST" action=".">
  Username:<br>
  <input type="text" name="username"><br>
  Post:<br>
  <textarea name="message" rows="10" cols="50"></textarea><br>
  <input type="submit">
</form>

<pre>
<?php echo $board;?>
</pre>
