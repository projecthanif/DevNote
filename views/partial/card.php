<div class="grid-item">
    <!----- CARD -------->
    <div class="card">
        <div class="card-head">
            <p class="date">Just Now</p>
            <p class="tag">
                <?= $list['tag'] ?>
            </p>
        </div>
        <h3 class="card-title"><?=$list['title'] ?> <?=  $list['id'] ?></h3>
        <div class="card-body">
            <?= $list['about'] ?>
        </div>
        <div class="card-footer">
            <button type="button" class="btn" onclick="update()">
                <i class="fas fa-pen"></i>
            </button>
            <button type="button" class="btn" onclick="deleteTodo()">
                <i class="fa-solid fa-trash-can" id="red"></i>
            </button>
        </div>
        <?php require 'views/partial/card-update.php' ?>
        <?php require 'views/partial/card-delete.php' ?>
    </div>
    <?php require 'views/partial/card-create.php' ?>
</div>