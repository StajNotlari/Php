<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Haber Paneli</title>
    <?php  $this->load->view("dependencies/style");?>
</head>
<body>

    <?php  $this->load->view("dependencies/scripts");?>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="<?php echo base_url("todo/insert"); ?>" method="post">
                    <div class="row">
                        <div class="form-group col-md-12">
                            <h3 style="margin-top:50px;">Ekle</h3>
                            <input type="text" class="form-control" name="todo_content" placeholder="Haber...">  
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <input type="text" class="form-control" name="todo_title" placeholder="İçerik...">
                            <button class="btn btn-primary col-md-12" style="margin-top:10px;">Kaydet</button>
                        </div>
                    </div>
                </form>
            
            </div>
        </div>
    <div class="row" style="margin-top:10px;">
        <div class="col-md-12">
        <h3 class="text-center"><b>HABERLER</b></h3>
            <table class="table table-hover table-striped">
                <thead>
                    <th class="text-left">Başlık</th>
                    <th class="text-left">Açıklama</th>
                    <th class="text-center">Durum</th>
                    <th class="text-center">Düzenle</th>
                    <th class="text-center">Sil</th>
                </thead>
                <tbody>
                    <?php foreach ($todos as $todo) { ?> 
                    <tr>
                        <td class="text-left">
                            <?php echo $todo->content;?>   
                        </td>
                        <td class="text-left">
                            <?php echo $todo->title;?>
                        </td>
                        <td class="text-center" style="width: 100px;">
                            <input 
                            type="checkbox"
                            data-url="<?php echo base_url("todo/iscompletedsetter/$todo->id"); ?>"
                            class="js-switch" <?php echo ($todo->isCompleted) ? "checked" : ""; ?> />
                        </td>
                        <td class="text-center" style="width: 100px;"> 
                            <a href="<?php echo base_url("todo/updatePage/$todo->id"); ?>" class="btn btn-warning">Düzenle</a>
                        </td>
                        <td class="text-center" style="width: 100px;"> 
                            <button data-url="<?php echo base_url("todo/delete/$todo->id"); ?>" class="btn btn-danger remove-btn">SiL</button>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    </div>

</body>
</html>
