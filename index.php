<?
session_start();
include("header.php");
include("includes/functions-inc.php");

$loggedInUser = $_SESSION['user']['username'];
$loggedInID = $_SESSION['user']['userid'];

/*
*
* username: Mikko  , Lösenord:  mikko123
*
*/
//require("config.php");
?>



<!--main content-->
<div class="container">


    <!--side content-->
    <div class="aside-text">
        <div>Klicka <a href="https://theuselessweb.com/"> <strong>här</strong></a> om du har tråkigt</div>
        <div>Trött på att jobba? Klicka <a href="https://hackertyper.com/"> <strong>här</strong></a> och låt chefen tro att du jobbar</div>
        <div> <a href="https://en.wikipedia.org/wiki/List_of_conspiracy_theories"><strong>Här</strong></a> har du en lista på olika konspirationsteorier...om du fortfarande har tråkigt</div>
        <div>Titta live på djur och natur överallt i världen <a href="https://explore.org/livecams"><strong>här</strong></a></div>
    </div>

    <div class="main-content">
        <div>
            <div class="tips-spel1">
                <h2>Tips på lite lugnande spel</h2>
                <h4>Stardew valley</h4>
                <p> <img src="https://cdn.akamai.steamstatic.com/steam/apps/413150/capsule_616x353.jpg?t=1608624324" width="350" height="300" alt="bild på spel"> </p>
                <span>Stardew Valley är ett Indiespel inom genren simulator-rollspel, som är skapat av Eric "ConcernedApe" </span>
                <hr>
                <h4>Terraria</h4>
                <p><img src="https://cdn.akamai.steamstatic.com/steam/apps/105600/capsule_616x353.jpg?t=1590092560" width="350" height="300" alt="bild på spel"> </p>
                <span>Terraria är ett indie-plattformsspel med moment av äventyr, rollspel och worldbuilder-spel </span>
                <hr>
                <h4>Banished</h4>
                <p> <img src="https://cdn.akamai.steamstatic.com/steam/apps/242920/capsule_616x353.jpg?t=1584654657" width="350" height="300" alt="bild på spel"> </p>
                <span>Spelet är ett stadsbyggarspel där resurshantering är en avgörande faktor för attfå de förskjutna bosättarna att överleva och utveckla ett nytt samhälle.</span>
            </div>
            <div class="tips-växter">
                <h2>Tips på lättskötta växter </h2>
                <p>(Såna du kan glömma bort ett tag utan att de dör)</p>
                <h4>Svärmorstunga</h4>
                <p> <img src="https://cdn.shopify.com/s/files/1/0069/7299/7717/products/svarmorstunga-957399_1024x.jpg?v=1599307476" width="350" height="350" alt=""> </p>
                <span></span>
                <hr>
                <h4>Garderobsblomma</h4>
                <p> <img src="https://i.pinimg.com/originals/84/a6/de/84a6de08be0e07189f9df6a82748fdc6.jpg" width="350" height="350" alt=""> </p>
                <span></span>
                <hr>
                <h4>Gullranka</h4>
                <p> <img src="https://www.wexthuset.com/content/vaxter/krukvaxter/gullranka-odlingsrad-skotsel-sorter/Epipremnum-sorter-gullranka.jpg" width="350" height="350" alt=""> </p>
                <span></span>
            </div>
        </div>

        <div>
            <div class="tips-bok">
                <h2>Tips på nostalgi böcker</h2>
                <h4> I taket lyser stjärnorna</h4>
                <p> <img src="https://images.ohmyhosting.se/9pf5dPdQqEJ05384YStZBFlk2Fo=/fit-in/2200x1536/smart/filters:quality(85)/https%3A%2F%2Fwww.selmastories.se%2Fwp-content%2Fuploads%2F2020%2F04%2Fhttps-www.bokino.se-wp-content-uploads-2020-02-9789170011580.jpg" width="350" height="400" alt=""> </p>
                <hr>
                <h4>Shoo len</h4>
                <p> <img src="http://image.bokus.com/images2/9789163864759" width="350" height="400" alt=""> </p>
                <hr>
                <h4>Jag saknar dig, jag saknar dig</h4>
                <p> <img src="https://images.ohmyhosting.se/gSgeErNeddKtINcjJOle_o_EHdE=/fit-in/2200x1536/smart/filters:quality(85)/https%3A%2F%2Fwww.selmastories.se%2Fwp-content%2Fuploads%2F2020%2F04%2Fhttps-www.bokino.se-wp-content-uploads-2020-02-jag-saknar-dig.jpg" width="350" height="400" alt=""> </p>
            </div>
            <div class="tips-serier">
                <h2>Tips på Serier</h2>
                <h4>The walking dead</h4>
                <p> <img src="https://phantom-marca.unidadeditorial.es/3d70e0bb3507dd9f43d687a6a5b107cc/resize/1320/f/jpg/assets/multimedia/imagenes/2021/07/25/16272310050961.jpg" width="350" height="300" alt=""> </p>
                <hr>
                <h4>The Office</h4>
                <p> <img src="https://cms.qz.com/wp-content/uploads/2021/01/the-office-peacock-e1610563191354.jpg?quality=75&strip=all&w=1200&h=630&crop=1" width="350" height="300" alt=""> </p>
            </div>
        </div>
    </div>



</div>


<? include("footer.php") ?>