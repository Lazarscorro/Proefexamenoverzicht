<?php
class KlantInfo
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getKlantInfo()
    {
        $this->db->query("SELECT `Voornaam`, `Tussenvoegsel`, `Achternaam`, `IsVolwassen`, `Mobiel`, `Email` FROM `Persoon` INNER JOIN `Contact` ON Persoon.id = Contact.PersoonId;");

        return $this->db->resultSet();;
    }

    public function getSingleKlantInfo($id)
    {
        $this->db->query("SELECT `Voornaam`, `Tussenvoegsel`, `Achternaam`, `IsVolwassen`, `Mobiel`, `Email` FROM `Persoon` INNER JOIN `Contact` ON Persoon.id = Contact.PersoonId WHERE `Id` = :id;");
        $this->db->bind(':id', $id, PDO::PARAM_INT);

        return $this->db->single();
    }

}
