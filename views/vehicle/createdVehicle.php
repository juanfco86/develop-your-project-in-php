
<h3>Congrats! You have created a new vehicle.</h3>

<?php 

echo "<b>Brand:</b> ". $_POST['brand'];
echo "<br>";
echo "<b>Model: </b>". $_POST['model'];
echo "<br>";
echo "<b>Age:</b> ". $_POST['age'];
echo "<br>";

?>

<div class="container">
    <a class="btn btn-secondary" href="?controller=vehicle&action=list">Back</a>
</div>