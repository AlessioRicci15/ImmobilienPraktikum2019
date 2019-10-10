<?php
    include("sql/databaseconnaction.php");
    include("model/Country.php");
    include("model/Property.php");
    include("router.php");     
?>
<!DOCTYPE html>
    <html lang="en">
    <?php include("layout/head.php"); ?>
    <body>
        <?php
            include("layout/header.php");
            include("layout/nav.php");
        ?>    
        <main>
        <?php
            include($view);
        ?>
        </main>
        <?php
            include("layout/footer.php");
            include("layout/foot.php");
        ?>
    </body>
</html>