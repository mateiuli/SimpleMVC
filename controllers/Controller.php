<?php

class Controller {
	protected $_model;
	protected $_controller;
	protected $_action;
	protected $_view;
	protected $_modelBaseName;

	public function __construct($model, $action) {
		$this->_controller = ucwords(__CLASS__);
		$this->_action = $action;
		$this->_modelBaseName = $model;

		$tmpPath = HOME . DS . 'views' . DS;
		$tmpPath .= strtolower($this->_modelBaseName) . DS;
		$tmpPath .= $action . '.tpl';

		$this->_view = new View($tmpPath);
	}

	protected function _setModel($modelName) {
		$modelName .= 'Model';
		$this->_model = new $modelName;
	}

	protected function _setView($viewName) {
		$tmpPath = HOME . DS . 'views' . DS;
		$tmpPath .= strtolower($this->_modelBaseName) . DS;
		$tmpPath .= $viewName . '.tpl';

		$this->_view = new View($tmpPath);
	}
}

?>