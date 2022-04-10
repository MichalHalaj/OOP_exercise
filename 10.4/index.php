<!DOCTYPE html>

<html lang="cs-cz">
    <head>
            <meta charset="utf-8" />
            <title>OOP v PHP na ITnetwork.cz</title>
    </head>

    <body>
        <h1>Návštěvnost webu</h1>
        <?php
		// Nastavení Unicode kódování        
        mb_internal_encoding("UTF-8");
		// Autoloader
        function nactiTridu($trida)
        {
            require("tridy/$trida.php");
        }
        spl_autoload_register("nactiTridu");
        // Připojení k databázi
        Databaze::pripoj('localhost', 'root', '', 'zobrazeni');
        
        // Obsluha správce návštěv
        $spravceNavstev = new SpravceNavstev();
        $spravceNavstev->zapocitej();
        $spravceNavstev->vypisStatistiky();
        
        ?>
    </body>
</html>
