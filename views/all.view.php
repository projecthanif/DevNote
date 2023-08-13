<?php require 'partial/head.php' ?>

<?php require 'partial/sidebar.php' ?>

<?php require 'partial/header.php' ?>

<main>
    <section class="body-section">
        <div class="container">
            <div class="grid-container">
                <?php foreach ($select as $list) : ?>

                    <?php require 'views/partial/card.php' ?>

                <?php endforeach ?>
            </div>
        </div>
    </section>
</main>

<?php require 'partial/footer.php' ?>