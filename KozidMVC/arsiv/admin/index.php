<?php
require 'helpers.php';

connect_to_db();
$students = get_data_from_db_uses_by_sql("SELECT * FROM students");
?>
<a href="student_create_form.php">Yeni Ekle</a>
    
<table border="0" cellpadding="5">
    <tr>
        <th>ID</th>
        <th>Ad Soyad</th>
        <th></th>
        <th></th>
        <th></th>
    </tr>
    <?php foreach($students as $data): ?>
        <tr>
            <td><?=$data['id'] ?></td>
            <td><?=$data['name'] . ' ' . $data['surname'] ?> </td>
            <td>
                <a href="student_show.php?id=<?=$data['id'] ?>">
                   Göster 
                </a>
            </td>
            <td>
                <a href="student_edit_form.php?id=<?=$data['id'] ?>">
                   Düzenle 
                </a>
            </td>
            <td>
                <a href="student_delete.php?id=<?=$data['id'] ?>" onclick="return confirm('Emin misiniz?');">
                    Sil
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>


<?php require 'footer.php'; ?>