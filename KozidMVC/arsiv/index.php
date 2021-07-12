Sitemize hoş geldiniz.
<br>

<h1>Öğrenciler:</h1>

<?php
require 'admin/helpers.php';

connect_to_db();
$students = get_data_from_db_uses_by_sql("SELECT * FROM students");
?>
    
<ol type="1">
    <?php foreach($students as $data): ?>
        <li>
            <?=$data['name'] . ' ' . $data['surname'] ?> 
        </li>
    <?php endforeach; ?>
</ol>