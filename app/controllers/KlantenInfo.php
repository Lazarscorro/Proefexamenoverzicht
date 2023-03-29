<?php
	class KlantenInfo extends Controller
	{
        private $klantinfoModel;

		public function __construct() 
		{           
			$this->klantinfoModel = $this->model('KlantInfo');
		}

		public function index() 
		{   
            /**
            * Haal via de method getPersoonInfo() uit de model PersoonInfo de records op
            * uit de database
            */
            $klantinfo = $this->klantinfoModel->getKlantInfo();

            /**
            * Maak de inhoud voor de tbody in de view
            */
            $rows = '';
            foreach ($klantinfo as $value){
                $rows .= "<tr>
                    <td>$value->Voornaam</td>
                    <td>$value->Tussenvoegsel</td>
                    <td>$value->Achternaam</td>
                    <td>$value->Mobiel</td>
                    <td>$value->Email</td>
                    <td>$value->IsVolwassen</td>
                    </tr>";
                }


            $data = [
            'title' => '<h1>Overzicht klanten</h1>',
            'klantinfo' => $rows
            ];

            // Load the view
			$this->view('klanteninfo/index', $data);
		}

    }