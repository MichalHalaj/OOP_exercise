<?php

// Nastavení PDO připojení

class Databaze {

    private static $spojeni;

    private static $nastaveni = Array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // chceme, aby se vyvolaly výjimky v případě, když se něco nepovede
		PDO::ATTR_EMULATE_PREPARES => false, // nechceme emulovat prepared statements pro staré verze MySQL, které je nepodporovaly
		PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', // chceme pracovat pod Unicode kódováním
    );

    public static function pripoj($host, $uzivatel, $heslo, $databaze) {
        if (!isset(self::$spojeni)) {
            self::$spojeni = @new PDO(
                "mysql:host=$host;dbname=$databaze",
                $uzivatel,
                $heslo,
                self::$nastaveni
            );
        }
        return self::$spojeni;
    }

    public static function dotaz($sql, $parametry = array()) {
        $dotaz = self::$spojeni->prepare($sql);
        $dotaz->execute($parametry);
        return $dotaz;
    }

}
