<?php

class NewsModel extends Model {
	public function getNews() {
		$sql = "SELECT 
					`id`, 
					`title`,
					`intro`,
					DATE_FORMAT(`date`, '%d-%m-%Y') as `date`,
					`category`
				FROM `news`
				ORDER BY `date` DESC";

		$this->_setSql($sql);
		$articles = $this->getAll();

		return empty($articles) ? false : $articles;
	}

	public function getArticleById($id) {
		$sql = "SELECT 
					`id`, 
					`title`,
					`intro`,
					`article`,
					DATE_FORMAT(`date`, '%d-%m-%Y') as `date`,
					`category`
				FROM `news`
				WHERE `id` = ?
				ORDER BY `date` DESC";

		$this->_setSql($sql);
		$article = $this->getRow(array($id));

		return empty($article) ? false : $article;
	}
}

?>