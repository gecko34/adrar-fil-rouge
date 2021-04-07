<?php
class ControlCreateArticle extends ControlMain {
  // require_once "../model/Article.class.php";

  public function __construct($action="start") {
    $this->action = $action;
  }

  public function run() {
    switch ($this->action) {
        case "start":
            require_once "view/articleForm.inc.php";
            echo formArticle();
            break;
        case "check":
            echo "Article envoyé !";
            $title="";
            if (isset($_POST["title"])) {
              $title = htmlspecialchars($_POST["title"]);
            }
            $articleContent="";
            if (isset($_POST["articleContent"])) {
              $articleContent = htmlspecialchars($_POST["articleContent"]);
            }
            echo "<br>".$title."</br>".$articleContent;
            require_once "dao/dao.php";
            require_once "dao/daoArticle.php";

            $temp=new PostDao();
            $temp->insert($title, $articleContent);
            break;
        default:
            exit("Erreur");
    }
  }



}
