<?php require 'admin_menu.php'; ?>
<a href="?wanted_page=/Students/Create">Yeni Ekle</a>
    
<table border="0" cellpadding="5">
    <tr>
        <th>ID</th>
        <th>Ad Soyad</th>
        <th></th>
        <th></th>
        <th></th>
    </tr>
    <?php foreach($data as $data): ?>
        <tr>
            <td><?=$data['id'] ?></td>
            <td><?=$data['name'] . ' ' . $data['surname'] ?> </td>
            <td>
                <a href="?wanted_page=/Students/Show/<?=$data['id'] ?>">
                   Göster 
                </a>
            </td>
            <td>
                <a href="?wanted_page=/Students/Edit/<?=$data['id'] ?>">
                   Düzenle 
                </a>
            </td>
            <td>
                <a href="?wanted_page=/Students/Delete/<?=$data['id'] ?>" onclick="return confirm('Emin misiniz?');">
                    Sil
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>