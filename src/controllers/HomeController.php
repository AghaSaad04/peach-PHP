<?php
use App\Controller;

class HomeController extends Controller
{
	public function index() {
		$this->View('home');
	}
}

?>