<?php include( "incl/config.php"); $title="Redovisningar för kursmomenten" ; $pageId="report" ; ?>

<?php include( "incl/header.php"); ?>


<!-- Sidans/Dokumentets huvudsakliga innehåll -->
<div id="container">
    <h1>Redovisning</h1>
    <div id="content">
        <h2 id="Kmom02">Kmom02: HTML-element och CSS-konstruktioner</h2>
        <time class="date">2015-02-12</time>
        <h4>
            Problem samt lösning
        </h4>
        <p>
            Jag hade lite problem med att integrera PHP header filen med html dokumenten och CSS stylesheet. Det tog lite tid innan jag började förstå exakt var varje element skulle vara. Ett tag hade jag dubbel/trippel body id då jag validerade koden, en i HTML och två i PHP koden (jag kopierade in PHP raden på två ställen då jag höll på att lista ut hur det fungerade). Thank God (or W3C) we have HTML/CSS validation! Jag kan tänka mig att det måste ha varit mycket svårare att skapa webbsidor förr i tiden.
        </p>
        <h4>
            HTML/CSS bakgrund
        </h4>
        <p>
            Jag har lite erfarenhet med HTML5 och CSS då jag har både skapat några webbsidor och läst två kurser innan; en på gymnasiet och en på högskolenivå. Det här är tredje gången jag läser HTML5/CSS, men ändå finns det alltid något nytt eller något man glömt bort eller något man kan förbättra. HTML20 och CSS20 guiderna hjälpte till med detta och jag tycker de täcker det mesta och det viktigaste vad gäller HTML/CSS.
        </p>
        <h4>
            Insikter
        </h4>
        <p>
            Vad jag verkligen vill förbättra är att strukturen på CSS filen. Jag vet av erfarenhet att med tiden så kan CSS filen ganska stor och har man ingen bra struktur och kommentarer så blir det väldigt svårt att göra ändringar eller hitta fel, även för den som har skapat filen. Så eftersom jag har ganska bra koll på HTML/CSS tänker jag fokusera på att förbättra struktur och kommentarer i CSS filerna.
        </p>
        <p>
            Jag tyckte om idén med en debug.css och det är något jag kommer fortsätta att använda. Hittils har jag bara lagt till en border på de krånglande div elementen, men sedan måste man ju ta bort dem, vilket man slipper med ett separat debug stylesheet.
        </p>
        <h4>
            PHP
        </h4>
        <p>
            Med det sagt så ser jag verkligen framemot att fortsätta med PHP vilket för mig är den verkliga anledningen till att jag har valt denna kurs (PHP och fortsättningskurserna). Jag har hört bra saker om PHP och jag gillar redan det lilla jag sett. Jag viste till exempel inte att man kunde använda PHP att dela upp ett HTML dokument i delar och t.ex. ha en navigeringsmeny för hela webbplatsen. Hur många gånger har jag gjort en ändring i navigeringsmenyn och behövt uppdatera menyn på 10-15 sidor. Min enda kontakt med PHP hittills var ett litet script (som jag inte skrev själv) till kontaktsidan på en webbsida.
        </p>

        <?php include( "incl/timestamp.php"); ?>
        <div class="back">
            <a href="report.php">Upp</a>
        </div>

        <h2 id="Kmom01">Kmom01: Kom igång med HTML, CSS och PHP</h2>
        <time class="date">2015-01-28</time>
        <p>
            Jag gillar hur momentet är strukturerat och det var inga problem med att följa instruktionerna.
        </p>

        <h4>Operativsystem</h4>
        <p>
            Jag använder Manjaro (Arch Linux variant) men jag har också Windows Technical Preview (Windows 10) på en annan partition för vissa program som jag behöver (bl.a. Adobe Flash CC).
        </p>
        <h4>Webbläsare</h4>
        <p>
            Jag växlar mellan mest Chrome och Opera, men ibland även Firefox och på Windows partitionen finns så klart också IE för testning. Skapar man webbsidor vill man ju att ”alla” användare(IE 10+) ska kunna se innehållet.
        </p>

        <h4>SFTP-Klient</h4>
        <p>
            SFTP-klientet är och har alltid varit Filezilla.
        </p>

        <h4>Editor</h4>
        <p>
            I Windows använder jag Visual Studio även om det är lite overkill men dess IntelliSense är helt fantastiskt, däremot i Linux använder jag olika beroende på programmeringsspråket.
        </p>
        <p>
            Jag har använt Jedit en gång innan och jag var inte riktigt nöjd även om jag inte kommer ihåg varför (jag kanske testar det igen). Till detta moment använde jag i alla fall Brackets och det var här jag stötte på det enda problemet i denna uppgift. När jag klistrade in koden från source.php och sparade filen så ”fixade” Brackets till koden. Det tog en kvart innan jag kunde lista ut varför Källkod länken inte fungerade på sidan. Problemet är att jag har en extension (Beautify) till Brackets som snyggar till koden (tabbar och sådant), men tydligen så fungerar den inte med PHP. Själva editorn fungerar däremot utan problem och jag gillar verkligen det stilrena gränssnittet och funktionerna.
        </p>
        <?php include( "incl/timestamp.php"); ?>

        <div class="back">
            <a href="report.php">Upp</a>
        </div>
    </div>
</div>

<?php include( "incl/signature.php"); ?>
<?php include( "incl/footer.php"); ?>
