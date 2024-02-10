<form action="" method="post">

    <div class="form-group">
        <label for="exampleInputEmail1">prekės pavadinimas</label>
        <input type="text" name="name" id="f1" class="form-control" value="<?=($edit) ? $item->name : "" ?>">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">kategorija</label>
        <input type="text" name="category" id="f2" class="form-control" value="<?=($edit) ? $item->category : "" ?>">
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
    <?php if ($edit) { ?>
    <input type="hidden" name="id" value="<?= $item->id ?>">
    <button type="submit" name="update" class="btn btn-outline-success mt-3 mb-3">update</button>
    <?php } else { ?>
    <button type="submit" name="save" class="btn btn-outline-primary mt-3 mb-3">add</button>
    <?php } ?>

</form>