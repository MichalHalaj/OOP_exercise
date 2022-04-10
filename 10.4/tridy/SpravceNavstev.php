<?php

// Nastavení PDO připojení

class SpravceNavstev
{
    
    public function zapocitej()
    {
        Databaze::dotaz('
            INSERT INTO `zobrazenie`
            (`ip`, `datum`)
            VALUES (?, ?)
        ', array($_SERVER['REMOTE_ADDR'], time()));
    }
    
    public function zobrazeniCelkem()
    {
        $vysledek = Databaze::dotaz('
            SELECT COUNT(*) AS `pocet`
            FROM `zobrazenie`
        ');
        $data = $vysledek->fetch();
        return $data['pocet'];
    }
    
    public function zobrazeniZa($dnu)
    {
        $vysledek = Databaze::dotaz('
            SELECT COUNT(*) AS `pocet`
            FROM `zobrazenie`
            WHERE `datum` > ?
        ', array(time() - $dnu * 86400));
        $data = $vysledek->fetch();
        return $data['pocet'];
    }
    
    public function uipCelkem()
    {
        $vysledek = Databaze::dotaz('
            SELECT COUNT(DISTINCT `ip`) AS `pocet`
            FROM `zobrazenie`
        ');
        $data = $vysledek->fetch();
        return $data['pocet'];
    }

    public function uipZa($dnu)
    {
        $vysledek = Databaze::dotaz('
            SELECT COUNT(DISTINCT `ip`) AS `pocet`
            FROM `zobrazenie`
            WHERE `datum` > ?
        ', array(time() - $dnu * 86400));
        $data = $vysledek->fetch();
        return $data['pocet'];
    }

    public function vypisStatistiky()
    {
        echo('<table>');
            echo('<tr>
                <td>Zobrazení celkem</td>
                <td>' . $this->zobrazeniCelkem() . '</td>
            </tr>');
            echo('<tr>
                <td>UIP celkem</td>
                <td>' . $this->uipCelkem() . '</td>
            </tr>');
            echo('<tr>
                <td>Zobrazení měsíc</td>
                <td>' . $this->zobrazeniZa(30) . '</td>
            </tr>');
            echo('<tr>
                <td>UIP mesíc</td>
                <td>' . $this->uipZa(30) . '</td>
            </tr>');
            echo('<tr>
                <td>Zobrazení týden</td>
                <td>' . $this->zobrazeniZa(7) . '</td>
            </tr>');
            echo('<tr>
                <td>UIP týden</td>
                <td>' . $this->uipZa(7) . '</td>
            </tr>');
        echo('</table>');
    }
    
}
