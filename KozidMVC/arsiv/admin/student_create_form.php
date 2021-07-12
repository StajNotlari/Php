<?php
require 'helpers.php';
?>


<h2>Öğrenci Ekle</h2>
<form action="student_add.php" method="POST">        
    <table border="0" cellpadding="5">
        <tr>
            <td>Ad: </td>
            <td><input name="name" value=""></td>
        </tr>
        <tr>
            <td>Soyad: </td>
            <td><input  name="surname" value=""></td>
        </tr>
        <tr>
            <td>Bolum: </td>
            <td><input  name="department" value=""></td>
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