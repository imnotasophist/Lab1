<main class="main">
    <div class="container">
        <div class="row">
            <aside class="aside col-xl-2">
                <p class="main__text main__text_bold">Категории</p>
                <ul>
                    <?php echo $category; ?>
                </ul>
            </aside>
            <section class="section col-xl-10">
                <h2 class="main__title"><?php echo $subtitle; ?></h2>
                <?php echo $cards; ?>
            </section>
        </div>
    </div>
</main>