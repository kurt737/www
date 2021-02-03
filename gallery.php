<?php include 'partials/header.php'; ?>

    <main class="about">
        <article>

            <header class="post-header">
                <div class="container">
                    <h1 class="post-title">Galéria</h1>
                </div>
            </header>

            <div class="post-content">

                <div class="container">
                    <h2 class="text-center">Da Vinciho obrazy</h2>
                        <ul class="menu controls">
                            <?php gallery_nav(); ?>
                        </ul>
                </div>
                <?php
                $page = $_GET['page'];
                include "gallery/$page.php";
                ?>
            </div>

        </article>
    </main>

<?php include 'partials/footer.php'; ?>