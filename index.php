<?php
include "./controllers/ItemController.php";

$edit = false;
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['save'])) {
        ItemController::store();
        header("Location: ./Index.php");
        die;
    }
    if (isset($_POST['edit'])) {
        $item = ItemController::show();
        $edit = true;
    }
    if (isset($_POST['update'])) {
        ItemController::update();
        header("Location: ./Index.php");
        die;
    }
    if (isset($_POST['destroy'])) {
        ItemController::destroy();
        header("Location: ./Index.php");
        die;
    }
}
$items = ItemController::index();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-3"></div>
            <form action="" method="post" class="col-6 border border-1 mt-5">
                <div class="form-group">
                    <label for="exampleInputEmail1">prekės pavadinimas</label>
                    <input type="text" name="name" id="f1" class="form-control"
                        value="<?=($edit) ? $item->name : "" ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">kategorija</label>
                    <input type="text" name="category" id="f2" class="form-control"
                        value="<?=($edit) ? $item->category : "" ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">kaina</label>
                    <input type="number" name="price" id="f3" class="form-control"
                        value="<?=($edit) ? $item->price : "" ?>">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Informacija apie prekę</label>
                    <textarea name="about" id="f4" cols="50" rows="3"
                        class="md-textarea form-control"><?=($edit) ? $item->about : "" ?></textarea>
                </div>
                <?php if ($edit) { ?>
                <input type="hidden" name="id" value="<?= $item->id ?>">
                <button type="submit" name="update" class="btn btn-outline-success mt-3 mb-3">update</button>
                <?php } else { ?>
                <button type="submit" name="save" class="btn btn-outline-primary mt-3 mb-3">save</button>
                <?php } ?>

            </form>
            <div class="col-3"></div>
        </div>

        <table class="table table-hover border border-1 mt-4 mb-5">
            <tr>
                <!--table row -->
                <th>id</th>
                <!--table head -->
                <th>name</th>
                <th>category</th>
                <th>price</th>
                <th>about</th>
                <th></th>
                <th>edit</th>
                <th></th>
                <th>delete</th>
            </tr>
            <tbody>
                <!--table body -->
                <?php foreach ($items as $item) { ?>
                <tr>
                    <!--table row -->
                    <td>
                        <?= $item->id ?>
                    </td>
                    <!--table data - 5 rows-->
                    <td>
                        <?= $item->name ?>
                    </td>
                    <td>
                        <?= $item->category ?>
                    </td>
                    <td>
                        <?= $item->price ?>
                    </td>
                    <td>
                        <?= $item->about ?>
                    </td>

                    <td>
                        <form action="" method="post">
                            <input type="hidden" name="id" value="<?= $item->id ?>">
                    <td><button type="submit" name="edit" class="btn btn-outline-success">edit</button></td>
                    </form>
                    </td>
                    <td>
                        <form action="" method="post">
                            <input type="hidden" name="id" value="<?= $item->id ?>">
                    <td><button type="submit" name="destroy" class="btn btn-outline-danger">delete</button></td>
                    </form>
                    </td>
                </tr>
                <?php
                } ?>
            </tbody>
        </table>
    </div>
</body>

</html>