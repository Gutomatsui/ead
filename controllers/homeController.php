<?php
class homeController extends controller {

	public function __construct(){
		parent::__construct();

		$alunos = new Alunos();

		if(!$alunos->islogged()) {
			header("Location: ".BASE."login");
		}
	}

	public function index() {
		$dados = array();




		$this->loadTempplate('home', $dados);
	}

}