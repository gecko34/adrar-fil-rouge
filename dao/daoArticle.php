<?php
class PostDao extends Dao {
    const SQL_INSERT_ARTICLE = "
    INSERT INTO article
      (title, content)
    VALUES
      (:titleArticle, :contentArticle)
      ";

    public function insert($form_title,$form_contentArticle){
        $myConnection = Dao::connect();
        $request = $myConnection->prepare(self::SQL_INSERT_ARTICLE);
        $request->bindValue(':titleArticle', $form_title);
        $request->bindValue(':contentArticle',$form_contentArticle);
        if (! $request->execute()){
            throw new BlogException(1, "Cannot get the list of Posts");
        }
    }

    const SQL_ALL_ARTICLES = "
    SELECT * FROM article
    ";

    public function getAll(){
        $myConnection = Dao::connect();
        $request = $myConnection->prepare(self::SQL_ALL_ARTICLES);
        if (! $request->execute()){
            throw new BlogException(1, "Cannot get the list of Posts");
        } else {
          $data = $request->fetchAll(PDO::FETCH_ASSOC);
          $articlesData = [];
          foreach ($data as $value) {
              $articlesData [] = new Article(
                $value["id"],
                $value["title"],
                $value["content"]
              );
          }
          return $articlesData;
        }
    }

    const SQL_ONE_ARTICLE = "
    SELECT * FROM article
    ";

    public function getOne($id){
        $myConnection = Dao::connect();
        $request = $myConnection->prepare((self::SQL_ONE_ARTICLE." WHERE id=".$id." "));
        if (! $request->execute()){
            throw new BlogException(1, "Cannot get the list of Posts");
        } else {
          $data = $request->fetch(PDO::FETCH_ASSOC);
          $articleData = new Article(
                $data["id"],
                $data["title"],
                $data["content"]
              );
          return $articleData;
        }
    }

    const SQL_DELETE_ONE = "
    DELETE FROM article
    ";

    public function deleteOne($id){
        $myConnection = Dao::connect();
        $request = $myConnection->prepare((self::SQL_DELETE_ONE." WHERE id=".$id." "));
        if (! $request->execute()){
            throw new BlogException(1, "Cannot get the list of Posts");
        }
    }



}
