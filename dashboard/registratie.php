<?php
include('db.php');
include('control.php');
include('navbar.php');
$users = $conn->query("SELECT * FROM users");
?>
<!DOCTYPE html>

<a class="uitloggen" href="uitloggen.php">uitloggen</a>
<br><br><br>
<form class="registratie" method="POST">
    <p>registreren</p>
    <input type="email" name="email" required placeholder="bij@voorbeeld.com">
    <input type="password" name="password" required placeholder="wachtwoord">
    <input type="submit" name="submit">
</form>

<?php
include('db.php');

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $insert = $conn->query("
    INSERT INTO
    users
    (
    email,
    wachtwoord
    ) VALUES
    (
    '".$conn->real_escape_string($_POST['email'])."',
    '".$conn->real_escape_string($_POST['password'])."'
    )
    ");
}
?>

<br><br><br><br><br><br><br>

<?php
?>
<?php if ($users->num_rows > 0) { ?>
    <table border='1'>
        <caption><strong>users</strong></caption>
        <thead>
            <tr>
                <th>email</th>
                <th>wachtwoord</th>
                <th>status</th>
            </tr>
        </thead>
        <?php while ($row = $users->fetch_assoc()) { ?>
        <tbody>
            <tr>
                <td><?php echo $row['email'] ?></td>
                <td><?php echo $row['wachtwoord'] ?></td>
                <td><?php echo $row['status'] ?></td>
                    </select></form>
            </tr>
        </tbody>
        <?php } ?>
    <?php } else { ?>
        <caption><strong>Er zijn geen Nieuwe bestellingen</strong></caption>
    <?php } ?>
        </table>


<style>
    .uitloggen{
    margin: auto;
    font-size: 22px;
    color: #fff;
    background-color: black;
    border-radius: 10px;
    border: gray solid 3px;
    padding: 6px;
    float: right;
    }
    a{
    text-align: center;
    color: black;
    text-decoration: none;
    font-family: 'Open Sans', sans-serif;
    font-size: 1.2vw;
    margin-bottom: -16px;
}
a:hover{
color: red;
transition: 0.5s;
}
.registratie{
    position: center;

}

</style>