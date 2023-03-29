<?php
	class UitslagenInfo extends Controller
	{
        private $uitslaginfoModel;

		public function __construct() 
		{           
			$this->uitslaginfoModel = $this->model('UitslagInfo');
		}

		public function index() 
		{   
            /**
            * Haal via de method getPersoonInfo() uit de model PersoonInfo de records op
            * uit de database
            */
            $uitslaginfo = $this->uitslaginfoModel->getUitslagInfo();

            /**
            * Maak de inhoud voor de tbody in de view
            */
            $rows = '';
            foreach ($uitslaginfo as $value){
                $rows .= "<tr>
                    <td>$value->Voornaam</td>
                    <td>$value->Tussenvoegsel</td>
                    <td>$value->Achternaam</td>
                    <td>$value->Aantalpunten</td>
                    <td>$value->Datum</td>
                    </tr>";
                }


            $data = [
            'title' => '<h1>Overzicht klanten</h1>',
            'rows' => $rows
            ];

            // Load the view
			$this->view('uitslageninfo/index', $data);
		}

    }