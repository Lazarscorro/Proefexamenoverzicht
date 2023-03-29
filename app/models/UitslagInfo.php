<?php
class UitslagInfo
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getUitslagInfo()
    {
        $this->db->query("SELECT Persoon.Voornaam, Persoon.Tussenvoegsel, Persoon.Achternaam, Uitslag.Aantalpunten, Reservering.Datum
        FROM Persoon
        INNER JOIN Spel ON Persoon.Id = Spel.PersoonId
        INNER JOIN Uitslag ON Spel.Id = Uitslag.SpelId
        INNER JOIN Reservering ON Reservering.PersoonId = Persoon.Id ORDER BY Reservering.Datum DESC;");

        return $this->db->resultSet();;
    }

    public function getSingleUitslagInfo($id)
    {
        $this->db->query("SELECT Persoon.Voornaam, Persoon.Tussenvoegsel, Persoon.Achternaam, Uitslag.Aantalpunten, Reservering.Datum
        FROM Persoon
        INNER JOIN Spel ON Persoon.Id = Spel.PersoonId
        INNER JOIN Uitslag ON Spel.Id = Uitslag.SpelId
        INNER JOIN Reservering ON Reservering.PersoonId = Persoon.Id ORDER BY Reservering.Datum DESC;");

        return $this->db->single();
    }

  

}

