<?php
namespace App\Model;

use \Nette\Security as NS;

class MyAuthenticator extends \Nette\Object implements NS\IAuthenticator  {

    /** @var \Nette\Database\Context */
    private $database;
    private $table = "Users";

    public function __construct(\Nette\Database\Context $connection) {
        $this->database = $connection;
    }

    public function authenticate(array $credentials) {
		list($username, $password) = $credentials;
		 $row = $this->database->table('Users')
				->where('Name', $username)->fetch();

			if (!$row) {
				throw new NS\AuthenticationException('User not found.');
			}

			if (!NS\Passwords::verify($password, $row->Pass)) {
				throw new NS\AuthenticationException('Invalid password.');
			}

			return new NS\Identity($row->id, $row->role);
    }

}