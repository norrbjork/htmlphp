<?php include( "incl/config.php");
$title="Source";
$pageId = "source";
$pageStyle=null;

// Include code from source.php to display sourcecode-viewer
$sourceBasedir=dirname(__FILE__);
$sourceNoEcho=true;
include("src/source.php");
$pageStyle=$sourceStyle;
?>

<?php include( "incl/header.php"); ?>

<!-- Sidans/Dokumentets huvudsakliga innehåll -->
<div id="container">
    <div id="content">
        <?php echo "$sourceBody"; ?>
    </div>
</div>

<?php include("incl/footer.php"); ?>
