
<h3>Congrats! You have updated a user.</h3>

<?php 

echo "<b>Name:</b> ". $_POST['brand'];
echo "<br>";
echo "<b>Email: </b>". $_POST['model'];
echo "<br>";
echo "<b>Username:</b> ". $_POST['age'];
echo "<br>";


?>

<div class="container">
    <a class="btn btn-secondary" href="?controller=vehicle&action=list">Back</a>
</div>