<!DOCTYPE html>
    <?php 
include("db.php");
include("control.php");
include('navbar.php');
$newbestel = $conn->query("SELECT * FROM test1 WHERE status='new'");
$afgerond = $conn->query("SELECT * FROM test1 WHERE status='old'or status='accepted'");
?>
<?php if ($newbestel->num_rows > 0) { ?>
    <table border='1'>
        <center><caption><strong>Nieuwe bestellingen</strong></caption></center>
        <thead>
            <tr>
                <th>Aantal</th>
                <th>Naam</th>
                <th>Mail</th>
                <th>Telefoon</th>
                <th>woonplaats</th>
                <th>postcode</th>
                <th>straat</th>
                <th>huisnummer</th>
                <th>Datum</th>
                <th>Status</th>
                <th>verplaatsen</th>
            </tr>
        </thead>
        <?php while ($row = $newbestel->fetch_assoc()) { ?>
        <tbody>
            <tr>
                <td><?php echo $row['aantal'] ?></td>
                <td><?php echo $row['naam'] ?></td>
                <td><?php echo $row['mail'] ?></td>
                <td><?php echo $row['telefoon'] ?></td>
                <td><?php echo $row['woonplaats'] ?></td>
                <td><?php echo $row['postcode'] ?></td>
                <td><?php echo $row['straat'] ?></td>
                <td><?php echo $row['huisnummer'] ?></td>
                <td><?php echo $row['datum'] ?></td>
                <td><?php echo $row['status'] ?></td>
                <td><form method="post">
                    <input type="hidden" name="form" value="selecter">
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                    <select name="select" value="" onChange="form.submit()">
                        <option value="">Selecteer een optie</option>
                        <option class="done" value="afronden">afronden</option>
                        <option class="accept" value="accepteren">accepteren</option>
                        <option class="back" value="oud+ ">terug</option>
                        <option class="verwijderen" value="verwijderen">verwijderen</option>
                    </select></form></td>
            </tr>
        </tbody>
        <?php } ?>
    <?php } else { ?>
        <caption><strong>Er zijn geen Nieuwe bestellingen</strong></caption>
    <?php } ?>
        </table>




        <?php if ($afgerond->num_rows > 0) { ?>
    <table border='1'>
        <center><caption><strong>afgeronde bestellingen</strong></caption></center>
        <thead>
            <tr>
                <th>Aantal</th>
                <th>Naam</th>
                <th>Mail</th>
                <th>Telefoon</th>
                <th>woonplaats</th>
                <th>postcode</th>
                <th>straat</th>
                <th>huisnummer</th>
                <th>Datum</th>
                <th>Status</th>
                <th>verplaatsen</th>
            </tr>
        </thead>
        <?php while ($row = $newbestel->fetch_assoc()) { ?>
        <tbody>
            <tr>
                <td><?php echo $row['aantal'] ?></td>
                <td><?php echo $row['naam'] ?></td>
                <td><?php echo $row['mail'] ?></td>
                <td><?php echo $row['telefoon'] ?></td>
                <td><?php echo $row['woonplaats'] ?></td>
                <td><?php echo $row['postcode'] ?></td>
                <td><?php echo $row['straat'] ?></td>
                <td><?php echo $row['huisnummer'] ?></td>
                <td><?php echo $row['datum'] ?></td>
                <td><?php echo $row['status'] ?></td>
                <td><form method="post">
                    <input type="hidden" name="form" value="selecter">
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                    <select name="select" value="" onChange="form.submit()">
                        <option value="">Selecteer een optie</option>
                        <option class="done" value="afronden">afronden</option>
                        <option class="accept" value="accepteren">accepteren</option>
                        <option class="back" value="oud+ ">terug</option>
                        <option class="verwijderen" value="verwijderen">verwijderen</option>
                    </select></form></td>
            </tr>
        </tbody>
        <?php } ?>
    <?php } else { ?>
        <caption><strong>Er zijn geen afgeronde bestellingen</strong></caption>
    <?php } ?>
        </table>