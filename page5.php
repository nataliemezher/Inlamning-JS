<? session_start();
include("header.php"); ?>


<!--Contact form-->
<div class="contact-container">
    <div class="contact-box">
        <form method="POST" action="./includes/form.php">
            <h2 style="color: rgb(255, 255, 255);">Kontakta mig</h2>
            <input type="text" name="name" class="field" placeholder="Ditt namn">
            <input type="text" name="email" class="field" placeholder="Din E-mail">
            <input type="text" name="subject" class="field" placeholder="Titel">
            <textarea class="field" name="message" placeholder="Meddelande"></textarea>
            <input class="butt" type="submit" name="sendmail" value="Skicka">
        </form>

    </div>
</div>




<? require("footer.php") ?>