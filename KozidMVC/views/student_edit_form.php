<h2>Öğrenci Düzenle</h2>
<form action="?wanted_page=/Students/Update" method="POST">
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