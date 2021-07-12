<?php
if($data['user'] == NULL)
{
    $name = 'Misafir';
    echo '<a href="?wanted_page=/Session/LoginForm">Giriş Yap</a><br>';
}
else
{
    require 'admin_menu.php';
    $name = $data['user']['name'] . ' ' . $data['user']['surname'];
}
?>
Hoşgeldin <?=$name?>
<br>
<h1>Öğrenciler:</h1>

<ol type="1">
    <?php foreach($data['students'] as $student): ?>
        <li>
            <?=$student['name'] . ' ' . $student['surname'] . ' - ' . $student['department'] ?> 
        </li>
    <?php endforeach; ?>
</ol>