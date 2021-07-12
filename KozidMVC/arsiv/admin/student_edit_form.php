<?php

require 'helpers.php';

connect_to_db();

$student_id = $_GET['id'];
$sql = "SELECT * FROM students where id = " . $student_id;

$data = get_data_from_db_uses_by_sql($sql);
$data = $data[0];
?>


<h2>Öğrenci Düzenle</h2>
<form action="student_update.php" method="POST">
    <input type="hidden" name="id" value="<?=$data['id'] ?>">
        
    <table border="0" cellpadding="5">
        <tr>
            <td>Id:</td>
            <td><?=$data['id'] ?></td>
        </tr>
        <tr>
            <td>Ad: </td>
            <td><input name="name" value="<?=$data['name'] ?>"></td>
        </tr>
        <tr>
            <td>Soyad: </td>
            <td><input  name="surname" value="<?=$data['surname'] ?>"></td>
        </tr>
        <tr>
            <td>Bolum: </td>
            <td><input  name="department" value="<?=$data['department'] ?>"></td>
        </tr>
        <tr>
            <td colspan="2" align="right">
                <input type="submit" value="Kaydet">
            </td>
        </tr>
    </table>
</form>

<?php write_go_back_link(); ?>

<?php require 'footer.php'; ?>