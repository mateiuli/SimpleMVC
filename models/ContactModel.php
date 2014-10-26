<?php

class ContactModel extends Model {
	private $_firstName;
	private $_lastName;
	private $_email;
	private $_message;

	public function setFirstName($firstName) {
		$this->_firstName = $firstName;
	}

	public function setLastName($lastName) {
		$this->_lastName = $lastName;
	}

	public function setEmail($email) {
		$this->_email = $email;
	}

	public function setMessage($message) {
		$this->_message = $message;
	}

	public function save() {
		$sql = "INSERT INTO `contact`
					(`first_name`, `last_name`, `email`, `message`)
				VALUES
					(?, ?, ?, ?)";

		$stmt = $this->_db->prepare($sql);

		return $stmt->execute(array(
			$this->_firstName,
			$this->_lastName,
			$this->_email,
			$this->_message,
		));
	}
}

?>