<?php include( "incl/config.php");
$title="Me, Myself and I"; 
$pageId="me"; 

// Define style thats specific for this page
$pageStyle = '
figure#portrait {
    border: 3px solid white;
    background-color: white;
    margin: 0 15px 30px;
    padding: 10px 10px;
    -moz-box-shadow: 10px 10px 5px gray;
    -webkit-box-shadow: 10px 10px 5px gray;
    box-shadow: 10px 10px 5px gray;
}
figure#portrait figcaption {
    padding-top: 10px;
    font: 400 130px/0.8 'Great Vibes', Helvetica, sans-serif;
    color: #fff;
    text-shadow: 4px 4px 3px rgba(0,0,0,0.1); 
}
';

?>


<?php include( "incl/header.php"); ?>

<!-- Sidans/Dokumentets huvudsakliga innehåll -->

<body id="me">
    <div id="container">
        <h1>Me, Myself and I</h1>
        <figure id="portrait">
            <img src="img/sn.jpg" alt="A photo of Sylvester Norrbjörk">
            <figcaption>
                Looking thoughtful...
            </figcaption>
        </figure>
        <div id="content">
            <p>Mitt namn är Sylvester Norrbjörk. Jag föddes i Falun för 34 år sedan, men sedan jag var 9 år gammal har jag flyttat runt en hel del, bl.a. Indien, Mexiko och Italien. För den delen så befinner jag mig för tillfället i Italien.</p>
            <p>
                Jag har stort intresse för IT, kampsport, matlagning, att läsa, filosofiska discusioner (och även ofilosofiska discussioner), promenader längs stranden vid solnedgången, katter, mysiga hemmakvällar...
            </p>
            <p>
                Mellan jobb, studier och hobbies så har jag sysslat med grafisk design (Photoshop, Illustrator, Corel Draw), desktop publishing (Pagemaker, numera Indesign), nätverksteknik (2-årig KY-utbildning som täckte allt från Linux, Windows Server, hårdvara, mjukvara, och mycket mer), webbdesign (kurser i HTML och CSS), webbprogrammering (kurs i Javascript och Jquery), programmering (kurser i C# och Java) och sist Flash (lärde mig att använda Adobe Flash på egen hand och använder det på jobbet då varje projekt har minst en flash animation).
            </p>
            <p>
                Allt som allt är det lite blandat, men mitt nuvarande fokus och intresse är webbprogrammering med lite Java på sidan.
            </p>
        </div>
        <div id="content"></div>
    </div>
</body>

<?php include( "incl/footer.php"); ?>