<?php
namespace App\Components\Login;
	class LoginControl extends \Nette\Application\UI\Control {
		
		/**
		 * @var Nette\Http\User
		 */
		private $user;
		public function __construct(Nette\Http\User $u) {
			$this->user=$u;
		}
		public function render() {
			$this->template->setFile(__DIR__ . '/login.latte');
			$this->template->render();
		}
		protected function createComponentLoginForm() {
			$form = new LoginForm;
			$form->onSubmit[] = array($this, 'postForm_onSubmit');
		}
		
		protected function cryptPassword($password) {
			return crypt($password,crypt('qyzxjb$te6546)98s=-36rgvdjha3;.,kenq`~','5*4234hdnsf~3414-*/451vsgaquerhfg?><ML:qwe322441asdc'));
		}
		
				/** @var \App\Model\Authenticator @inject */
		private function postForm_onSubmit(Nette\Application\UI\Form $form) {
			$values = $form->getValues();
			$this->user->login($values['name'],$this->cryptPassword($values['pass']));
		}
	}
