<?php include"connection.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>

    <title>Register form</title>
</head>
<body>
    <form action="" method="POST" >
    <label for="name">Nom:  </label>
        <input type="text" name="firstname" required><br>

        <label for="lastname">Prenome:</label>
        <input type="text" name="lastname" required><br>

        <label for="department">Department:</label>
        <input type="text" name="department" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" required><br>

        <label for="sport">Sport</label>
        <select name="sport" required>
            <?php
            $query="SELECT * FROM sport ";
            $result=mysqli_query($con,$query);
        while ($row =$result->fetch_assoc()) {
    echo "<option value='" . $row['sport_name'] . "'>" . $row['sport_name'] . "</option>";;
  }
        ?>
        </select><br>

        <label for="niveau">niveau</label>
        <select name="niveau">
            <option value="debut">debutant</option>
            <option value="confirm">confirm</option>
            <option value="pro">pro</option>
            <option value="supporter">suporter</option>
    </select>
    <label for="new_sport">Ajouter un nouveau sport:</label>
        <input type="text" name="new_sport">
        <button type="button" onclick="addNewSport()">Add</button><br>

        <input type="submit" value="Register">
        <input type="reset" value="Reset">

       <a href="index.php">page accueil</a>
    </form>
  <script>
     function addNewSport() {
            var newSport = document.getElementsByName("new_sport")[0].value;
            var option = document.createElement("option");
            option.text = newSport;
            option.value = newSport;
            var select = document.getElementsByName("sport")[0];
            select.add(option);
            document.getElementsByName("new_sport")[0].value = "";
     }
  </script>
</body>
</html>