<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Examples extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');

		$this->load->library('grocery_CRUD');
	}

	public function _example_output($output = null)
	{
		$this->load->view('example.php',(array)$output);
	}

	public function menu()
	{
			$crud = new grocery_CRUD();

			$crud->set_table('menu');
			$crud->columns('Pocet_ludi','Pocet_chodov','Cena_na_osobu','Cena_spolu');
			
			$crud->set_subject('Menu');

			$output = $crud->render();

			$this->_example_output($output);
	}

	public function miesto_konania()
	{
			$crud = new grocery_CRUD();

			$crud->set_table('miesto_konania');
			$crud->columns('Nazov','Adresa','Udalost_idUdalost');
			
			$crud->set_subject('Menu');

			$output = $crud->render();

			$this->_example_output($output);
	}

	public function program()
	{
			$crud = new grocery_CRUD();

			$crud->set_table('program');
			$crud->columns('Nazov','Cena','Udalost_idUdalost');
			
			$crud->set_subject('Program');

			$output = $crud->render();

			$this->_example_output($output);
	}

	public function ucinkujuci()
	{
			$crud = new grocery_CRUD();

			$crud->set_table('ucinkujuci');
			$crud->columns('Meno','Priezvisko','Tel_cislo','Email');
			
			$crud->set_subject('Účinkujúci');

			$output = $crud->render();

			$this->_example_output($output);
	}
	
	public function udalost()
	{
			$crud = new grocery_CRUD();

			$crud->set_table('udalost');
			$crud->columns('Nazov','Datum','Zaciatok','Koniec');
			
			$crud->set_subject('Udalosť');

			$output = $crud->render();

			$this->_example_output($output);
	}

	public function vyzdoba()
	{
			$crud = new grocery_CRUD();

			$crud->set_table('vyzdoba');
			$crud->columns('Cena','Udalost_idUdalost');
			
			$crud->set_subject('Výzdoba');

			$output = $crud->render();

			$this->_example_output($output);
	}

	public function zakaznik()
	{
			$crud = new grocery_CRUD();

			$crud->set_table('zakaznik');
			$crud->columns('Meno','Priezvisko','Tel_cislo','Email','Bankovy_ucet','Udalost_idUdalost');
			
			$crud->set_subject('Zákazník');

			$output = $crud->render();

			$this->_example_output($output);
	}

	public function zamestnanci()
	{
			$crud = new grocery_CRUD();

			$crud->set_table('zamestnanci');
			$crud->columns('Meno','Priezvisko','Tel_cislo','Email','Bankovy_ucet');
			
			$crud->set_subject('Zamestnanec');

			$output = $crud->render();

			$this->_example_output($output);
	}


}
