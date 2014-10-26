<?php

class Model {
	protected $_db;
	protected $_sql;

	public function __construct() {
		// Retrive the PDO Object
		$this->_db = Database::getInstance();
	}

	protected function _setSql($sql) {
		$this->_sql = $sql;
	}

	public function getAll($data = null) {
		if(!$this->_sql)
			throw new Exception("No SQL Query!");

		$sql = $this->_db->prepare($this->_sql);
		$sql->execute($data);

		return $sql->fetchAll();
	}

	public function getRow($data = null) {
		if(!$this->_sql)
			throw new Exception("No SQL Query!");

		$sql = $this->_db->prepare($this->_sql);
		$sql->execute($data);

		return $sql->fetch();
	}
}

?>