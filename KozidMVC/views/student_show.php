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