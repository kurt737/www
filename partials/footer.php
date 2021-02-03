<aside class="pre-footer">

    <div class="container">

        <ul class="menu personal">
            <li><i class="fa fa-phone"></i><a href="tel:<?= $phone_contact ?>"><?= $phone_contact ?></a></li>
            <li><i class="fa fa-envelope"></i><a href="mailto:<?= $email_contact ?>"><?= $email_contact ?></a></li>
        </ul>

    </div>

</aside>

<footer>

    <div class="container">

        <p class="logo">
            <a href="index.php"> <?= $logo; ?> </a>
        </p>

        <p class="author">
            © 2021 web.sk
        </p>

        <ul class="menu nav-footer">
            <?php footer_nav() ?>
        </ul>

    </div>

</footer>

<script src="assets/js/lightbox.js"></script>

</body>
</html>