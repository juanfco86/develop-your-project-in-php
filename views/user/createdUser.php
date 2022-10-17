

<h3>Congrats! You have created a new user.</h3>

<?php 

echo "<b>Name:</b> ". $_POST['name'];
echo "<br>";
echo "<b>Email: </b>". $_POST['email'];
echo "<br>";
echo "<b>Username:</b> ". $_POST['username'];
echo "<br>";
echo "<b>Password:</b> ". $_POST['password'];
echo "<br>";

?>

<div class="container">
    <a class="btn btn-secondary" href="?controller=User&action=showAll">Back</a>
</div>