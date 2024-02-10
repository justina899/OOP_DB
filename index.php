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
    <title>Document</title>
</head>

<body>
    <div class="container">
        <?php include "./components/navBar.php"; ?>
        <?php include "./components/filter.php"; ?>

    
        <form action="/action_page.php">
            <div class="col-2">
                <select class="form-select" name="tableView">
                    <option selected value="1";>table view</option>
                    <option value="2">cards view</option>
                </select>
            </div>
        </form>
        
        <?php include "./components/table.php";?>
        <?php include "./components/cards.php";?>
        
        
        
    </div>
</body>

</html>