<h2><?=($data['mesaj'] != NULL ? $data['mesaj'] : 'Giriş Yap') ?></h2>
<form action="?wanted_page=/Session" method="POST">        
    <table border="0" cellpadding="5">
        <tr>
            <td>Kullanıcı Adı: </td>
            <td><input name="username" value=""></td>
        </tr>
        <tr>
            <td>Şifre: </td>
            <td><input type="password" name="password" value=""></td>
        </tr>
        <tr>
            <td colspan="2" align="right">
                <input type="submit" value="Giriş">
            </td>
        </tr>
    </table>
</form>

<?php write_go_back_link(); ?> 