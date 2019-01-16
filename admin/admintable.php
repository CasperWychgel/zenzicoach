<?php
session_start();
include_once '../includes/dbh.inc.php';

$sql = 'SELECT * 
		FROM users';

$query = mysqli_query($conn, $sql);

if (!$query) {
    die ('SQL Error: ' . mysqli_error($conn));
}
?>
<html>
<head>
    <title>Zenzicoach admintable</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<?php
if (!isset($_SESSION['a_username'])){
    header("Location: ../mobile table-checkbox fix.html?login=unauthorised");
    exit();
}
else { ?>
<table id="customer">
    <caption class="title">Zenzicoach admintable</caption>
    <thead>
    <tr>
        <th>ID</th>
        <th>Voornaam</th>
        <th>Achternaam</th>
        <th>Email</th>
        <th>Telefoon</th>
        <th>Probleem</th>
        <th>Vraag</th>
    </tr>
    </thead>
    <tbody>
    <?php
    while ($row = mysqli_fetch_array($query))
    {
        echo '<tr>
					<td>'.$row['id'].'</td>
					<td>'.$row['user_first'].'</td>
					<td>'.$row['user_last'].'</td>
					<td>'.$row['user_email'].'</td>
					<td>'.$row['user_tel'].'</td>
					<td>'.$row['user_problem'].'</td>
					<td>'.$row['user_question'].'</td>
				</tr>';

    }?>
    </tbody>
</table>
<?php } ?>
</body>
</html>