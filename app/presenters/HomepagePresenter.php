<?php

namespace App\Presenters;

use Nette,
	App\Model,
	App\Components\Login;

/**
 * Homepage presenter.
 */
class HomepagePresenter extends BasePresenter
{
	private $database;
	private $authenticator;
	function __construct(Nette\Database\Context $connection) {
		$this->database=$connection;
	}
	private $welcome='Welcome to ArcheryArena!';
	public function renderDefault()
	{
		$this->template->welcome = $this->welcome;
	}

	protected function createComponentLogInForm() {
		$this->authenticator= new \App\Model\MyAuthenticator($this->database);
		$this->user->setAuthenticator($this->authenticator);
		return new \App\Components\Login\LoginControl($this->user);
	}
	


}
