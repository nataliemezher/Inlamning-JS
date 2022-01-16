<? session_start();
include("header.php"); ?>


<!--Contact form-->
<div class="contact-container">
    <div class="contact-box">
        <form>
            <h2 style="color: rgb(255, 255, 255);">Kontakta mig</h2>
            <input type="text" class="field" placeholder="Ditt namn">
            <input type="email" class="field" placeholder="Din E-mail">
            <textarea class="field" placeholder="Meddelande"></textarea>
            <input class="butt" type="submit" value="Skicka">
        </form>

    </div>
</div>




<? require("footer.php") ?>