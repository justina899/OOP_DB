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
            <td><button type="submit" name="edit" formaction="./edit.php" class="btn btn-outline-success">edit</button></td>
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