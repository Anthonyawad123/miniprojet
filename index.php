<?php

include('connection.php');

$query = "SELECT * FROM sport";
$result = mysqli_query($con, $query);

echo "<ul>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<li>" . $row['sport_name'] . "</li>";
}
echo "</ul>";

if (isset($_POST['email'])) {
    $email = $_POST['email'];
    $query = "SELECT * FROM users WHERE user_email= '$email'";
    $result = mysqli_query($con, $query);
    
    if (mysqli_num_rows($result)) {
        $visitor = mysqli_fetch_assoc($result);
        $name = $visitor['user_name'];
        setcookie('visitor_name', $name, time() + (86400 * 30), '/');
    }
 else {
    header('Location: ajout.php');
    exit();
}

if (isset($_COOKIE['visitor_name'])) {
    $visitorName = $_COOKIE['visitor_name'];
    echo "Welcome, $visitorName!";

    echo "<a href='recherche.php'>Search</a>";
    echo "<a href='ajout.php'>Register for a New Sport</a>";
}

}


?>
<?php     echo "<a href='ajout.php'>Register Now</a>"; ?>
<html>
<form action="" method="POST">
    <label for="email">Email:</label>
    <input type="email" name="email" required>
    <button type="submit">Submit</button>
</form>
</html>

