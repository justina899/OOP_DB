<?php include "./routes.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Document1</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-3">
                <a href="./index.php">GO BACK</a>
            </div>
            <div class="col-6 border border-1 mt-5">
                <form action="" method="post">

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
                        <input type="number" step=".01" name="price" id="f3" class="form-control"
                            value="<?=($edit) ? $item->price : "" ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Informacija apie prekę</label>
                        <textarea name="about" id="f4" cols="50" rows="3"
                            class="md-textarea form-control"><?=($edit) ? $item->about : "" ?></textarea>
                    </div>

                    <button type="submit" name="save" class="btn btn-outline-primary mt-3 mb-3">add</button>
                </form>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
</body>

</html>