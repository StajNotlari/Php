<!doctype html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kayıt Güncelle</title>
    <?php  $this->load->view("dependencies/style");?>
</head>

<body>

    <?php  $this->load->view("dependencies/scripts");?>

    <div class="container" style="margin-top:100px">
        <div class="row">
            <div class="col-md-12">
                <form action="<?php echo base_url("todo/update/$todo->id"); ?>" method="post">
                    <div class="row">
                        <div class="form-group col-md-12">
                            <h3 style="margin-top:50px;">Düzenle</h3>
                            <input type="text" class="form-control" name="content"
                                value="<?php echo $todo->content; ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <input type="text" class="form-control" name="title" value="<?php echo $todo->title; ?>">
                            <button type="submit" class="btn btn-warning"
                                style="margin-top:10px; float:right;">Güncelle</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>

</body>

</html>