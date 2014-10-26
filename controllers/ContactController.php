<?php

class ContactController extends Controller {
	public function index() {
		$this->_view->set('title', 'Simple Contact Form');
		return $this->_view->output();
	}

	public function save() {
		if(!isset($_POST['contactFormSubmit']))
			header('Location: ' . get_url('contact/index'));

		$errors = array();

		// Required field
		$fields = array('first_name', 'last_name', 'email', 'message');
		
		foreach($fields as $field) {
			$$field = isset($_POST[$field]) ? trim($_POST[$field]) : null;
		}

		// Data sanitization
		if(empty($email)) {
			array_push($errors, 'E-mail is required!');
		}
		else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			array_push($errors, 'Invalid e-mail!');
		}

		if(empty($message)) {
			array_push($errors, 'Message is required!');
		}

		// Houston, we got a problem
		if(!empty($errors)) {
			$this->_setView('index');
			
			$this->_view->set('title', 'Contact Form | Invalid form data');
			$this->_view->set('errors', $errors);
			$this->_view->set('formData', $_POST);

			return $this->_view->output();
		}

		try {
			$contact = new ContactModel();
			$contact->setFirstName($first_name);
			$contact->setLastName($last_name);
			$contact->setEmail($email);
			$contact->setMessage($message);
			$contact->save();

			$this->_setView('success');
			$this->_view->set('title', 'Contact Form | Message sent');

			$this->_view->set('formData', array(
				'first_name' 	=> $first_name,
				'last_name' 	=> $last_name,
				'email' 		=> $email,
				'message' 		=> $message,
			));
		}
		catch(Exception $e) {
			$this->_setView('index');
			$this->_view->set('title', 'Contact Form | An error occured while saving the data');
			$this->_view->set('formData', $_POST);
			$this->_view->set('saveError', $e->getMessage());
		}

		return $this->_view->output();
	}
}

?>