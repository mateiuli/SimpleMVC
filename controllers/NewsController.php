<?php

class NewsController extends Controller {
	public function __construct($model, $action) {
		parent::__construct($model, $action);
		$this->_setModel($model);
	}

	/**
	* 'index' page
	*/
	public function index() {
		try {
			$articles = $this->_model->getNews();

			// Data to send to the template
			$this->_view->set('title', 'News articles from the database');
			$this->_view->set('articles', $articles);

			return $this->_view->output();
		}
		catch(Exception $e) {
			echo "Application error: " . $e->getMessage();
		}
	}

	/**
	* 'details' page
	*/
	public function details($articleId) {
		try {
			$article = $this->_model->getArticleById($articleId);

			if($article) {
				$this->_view->set('title', $article['title']);
				$this->_view->set('article', $article['article']);
				$this->_view->set('pubdate', $article['date']);
			}
			else {
				$this->_view->set('title', 'Invalid article ID');
				$this->_view->set('noArticle', true);
			}

			return $this->_view->output();
		}
		catch(Exception $e) {
			echo "Application error: ". $e->getMessage();
		}
	}
}

?>