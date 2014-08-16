<?php

	public class LoginForm extends Nette\Application\UI\Form {
	
		public function __construct() {
			parent::__construct();
			$this->drawForm();
		}
		
		private function drawForm() {
			$this->getElementPrototype()->class('ajax');
			$this->addText('name', 'Name:')
				->setRequired('You must enter the username');
			$this->addPassword('pass', 'Password:')
				->setRequired('You must enter the password');
			$this->addSubmit('subm', 'Log In');
		}	
	}