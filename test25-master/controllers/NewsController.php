<?
//require_once __DIR__.'/../models/News.php';
class NewsController{
    public function actionAll(){
        $db = new DB();
        $res = $db->query('SELECT * FROM news WHERE id = :id', [':id' => 1]);
        var_dump($res);
       //$news = News::getAll();
       //$view = new View();
       // $view->assign('items', $items);
        //$view->items = $news;
        //echo count($view);
        //var_dump($view->items);


        //$view->display('news/all.php');
        //include __DIR__ .'/../views/news/all.php';
    }
    public function actionOne(){

        $id = $_GET['id'];
        $item = News::getOne($id);
        $view = new View();
        $view->assign('items', $items);
        include __DIR__ .'/../views/news/one.php';
    }
}