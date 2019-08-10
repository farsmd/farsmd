<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>

<form action="db.php" method="post">
  Code:<br>
  <input type="text" name="code" value="10001">
  <br>
  Name:<br>
  <input type="text" name="pn" value="name">
  <br>
  Price:<br>
  <input type="text" name="price" value="12000">
  <br>
  Pcs:<br>
  <input type="text" name="pcs" value="100">
  <br>

  <br>
  <input type="submit" value="Submit">
</form>

<p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>

</body>
</html>
