<?php include"connection.php"; 

?>
    


<!DOCTYPE html>
<html lang="en">
<head>

    <title>Recherche page</title>
</head>
<body>
    <form action="" method="POST">

    <label for="sport ">Sport existant</label>
        <select name="sport existant" required>
            <?php
            $query="SELECT * FROM sport ";
            $result=mysqli_query($con,$query);
        while ($row =$result->fetch_assoc()) {
    echo "<option value='" . $row['sport_name'] . "'>" . $row['sport_name'] . "</option>";;
  }
        ?>
        </select><br>

        </select><br>

<label for="niveau">niveau</label>
<select name="niveau">
    <option value="debut">debutant</option>
    <option value="confirm">confirm</option>
    <option value="pro">pro</option>
    <option value="supporter">suporter</option>
</select>
<br>
    <label for="department">Department:</label>
        <select name="department" required>
            <?php
            $query = "SELECT DISTINCT department FROM users";
            $result = mysqli_query($con, $query);
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<option value='" . $row['department'] . "'>" . $row['department'] . "</option>";
            }
            ?>
        </select><br>
        <button type="button">Recherche</button>

    </form>
  
</body>
</html>
