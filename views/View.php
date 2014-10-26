<?php

class View {
	protected $_file;
	protected $_data = array();

	public function __construct($file) {
		$this->_file = $file;
	}

	public function set($key, $value) {
		$this->_data[$key] = $value;
	}

	public function get($key) {
		return $this->_data[$key];
	}

	public function output() {
		if(!file_exists($this->_file)) 
			throw new Exception("Template " . $this->_file . " does not exist.");
		
		// from array generate local variables
		extract($this->_data);

		// store the output generated below into a variable
		ob_start();
		include($this->_file);
		$output = ob_get_contents();
		ob_end_clean();

		// render it later
		return $output;
	}
}

?>