<?php include 'partials/header.php'; ?>

    <main class="contact">
        <article>

            <header class="post-header">
                <div class="container">
                    <h1 class="post-title">Kontakt</h1>
                </div>
            </header>

            <section class="container contact-float-handler"> <br><br>

                <form action=""> <br>
                    <h1>Napíš nám správu</h1><br>
                    <div class="form-main">
                        <label for="name">Meno</label><br>
                        <input type="name" id="name" name="name" value=""> <br>
                    </div>

                    <div class="form-main">
                        <label for="email">E-Mail</label><br>
                        <input type="email" id="email" name="email" value=""> <br>
                    </div>

                    <div>
                        <label for="text">Správa</label><br>
                        <textarea id="message" name="message" rows="4" cols="50"></textarea> <br><br>
                        <input class="button" type="submit" value="Odoslať">
                    </div>

                </form>


                <ul class="menu personal">
                    <li><?= $meno ?> </li>
                    <li><?= $adresa ?></li>
                    <li><?= $psc ?></li>
                    <li><?= $krajina ?></li>
                    <li><i class="fa fa-phone"></i><a href="tel:<?= $phone_contact ?>"><?= $phone_contact ?></a></li>
                    <li><i class="fa fa-envelope"></i><a href="mailto:<?= $email_contact ?>"><?= $email_contact ?></a></li>
                </ul>

                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3346.036450469409!2d17.031723516034134!3d48.18344217922713!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476c8c979c910b33%3A0xbc48f5180b390f3d!2sChrob%C3%A1kova%206%2C%20841%2002%20D%C3%BAbravka!5e1!3m2!1sen!2ssk!4v1612283390780!5m2!1sen!2ssk" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
                </iframe> <br><br><br><br>

            </section>

        </article>
    </main>

<?php include 'partials/footer.php'; ?>