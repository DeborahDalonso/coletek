<?

class View
{
    public static function forge($view)
    {

        $view = str_replace('.', '/', $view);
        $viewFile = __DIR__ . "/../../../views/$view.php";

        if (!file_exists($viewFile)) {
            header('HTTP/1.0 404 Not Found');
            \View::forge('http.error404');
        }
        
        include $viewFile;
    }
}
