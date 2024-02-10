<div class="row">
    
        <?php

foreach ($items as $item) { ?>
<div class="col-sm-3">

        <div class="card" style="width: 18rem; height: 18rem">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">
                    <?= $item->name ?>
                </h5>
                <h7 name="item price <?= $item->price ?>">
                    <?= $item->price ?> EUR</h5>
                        <p class="card-text <?= $item->id ?>" >
                            <?= $item->about ?>
                        </p>
                        <a href="#" class="btn btn-primary" style="bottom">Go somewhere</a>
            </div>
        </div>
        </div>
        <?php
} ?>
    
</div>