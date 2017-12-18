<?php
	class NewsController {

		public function actionIndex()
		{

			$newsList = array();
			$newsList = News::getNewsList();
			$pageTitle = 'Новости';

			require_once(ROOT.'/views/news/index.php');

			return true;
		}

		public function actionView($id)
		{
			if ($id) {
				$newsItem = News::getNewsItemById($id);
				$pageTitle = $newsItem['title'];
				require_once(ROOT.'/views/news/view.php');
			}

			return true;
		}

		public function actionAdd()
		{
			AdminBase::checkAdmin();
			$pageTitle = 'Добавить новость';
			if (isset($_POST['submit_n'])) {
				$title = $_POST['title'];
				$editor_data1 = $_POST['editor1'];
				$autor = $_POST['autor'];
				$image = $_POST['image'];
				$result = News::addNewNews($title,$editor_data1,$autor,$image);

			}
			require_once(ROOT.'/views/news/add.php');
			return true;
		}
	}
?>
