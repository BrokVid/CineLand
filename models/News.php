<?php
  class News
  {
    public static function getNewsItemById($id)
    {
      $id = intval($id);

      if ($id){
        $db = Db::getConnection();
        $result = $db->query('SELECT * FROM `news` WHERE `id` = '.$id);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $newsItem = $result->fetch();
        return $newsItem;
      }
    }

    public static function getNewsList()
    {

      $db = Db::getConnection();

      $newsList = array();
      $result = $db->query('SELECT `id`, `title`, `date`, `short_content`, `image` FROM `news` ORDER BY `date` DESC LIMIT 10');

      $i=0;
      while ($row = $result->fetch()){
        $newsList[$i]['id']=$row['id'];
        $newsList[$i]['title']=$row['title'];
        $newsList[$i]['date']=$row['date'];
        $newsList[$i]['short_content']=$row['short_content'];
        $newsList[$i]['image']=$row['image'];
        $i++;
      }
      return $newsList;
    }

    public static function addNewNews($title,$editor_data1,$autor,$image){
      $db = Db::getConnection();
      $sql = 'INSERT INTO `news`(`title`, `date`, `short_content`, `content`, `autor`, `image` ) VALUES (:title,:date,:short_content,:content,:autor,:image)';
      $date = date('Y-m-d H:i:s');
	  $editor_data2=substr($editor_data1,0,252);
      $result = $db->prepare($sql);
      $result->bindParam(':title',$title,PDO::PARAM_STR);
      $result->bindParam(':date',$date,PDO::PARAM_STR);
      $result->bindParam(':short_content',$editor_data2,PDO::PARAM_STR);
      $result->bindParam(':content',$editor_data1,PDO::PARAM_STR);
      $result->bindParam(':autor',$autor,PDO::PARAM_STR);
      $result->bindParam(':image',$image,PDO::PARAM_STR);
      return $result->execute();
      header('Location: /');
    }
  }
 ?>
