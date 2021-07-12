<?php

require 'helpers.php';

connect_to_db();

$student_id = $_GET['id'];
$sql = "SELECT * FROM students where id = " . $student_id;

$data = get_data_from_db_uses_by_sql($sql);
$data = $data[0];
?>

<style>
    td
    {
        padding: 7px;
    }
</style>

<h2>Öğrenci Bilgileri</h2>
<table border="1">
    <tr>
        <td>Id:</td>
        <td><?=$data['id'] ?></td>
    </tr>
    <tr>
        <td>Ad: </td>
        <td><?=$data['name'] ?></td>
    </tr>
    <tr>
        <td>Soyad: </td>
        <td><?=$data['surname'] ?></td>
    </tr>
    <tr>
        <td>Bolum: </td>
        <td><?=$data['department'] ?></td>
    </tr>
</table>

<?php write_go_back_link() ?>
<?php require 'footer.php'; ?>