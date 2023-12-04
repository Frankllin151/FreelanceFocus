<?php
namespace core;
require_once '../vendor/autoload.php';
use \src\Config;



use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class Controller {

    protected function redirect($url) {
        header("Location: ".$this->getBaseUrl().$url);
        exit;
    }

    private function getBaseUrl() {
        $base = (isset($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS']) == 'on') ? 'https://' : 'http://';
        $base .= $_SERVER['SERVER_NAME'];
        if($_SERVER['SERVER_PORT'] != '80') {
            $base .= ':'.$_SERVER['SERVER_PORT'];
        }
        $base .= Config::BASE_DIR;
        
        return $base;
    }

    private function _render($folder, $viewName, $viewData = []) {
        
        $twig = new Environment(new FilesystemLoader('src/views'));
    
        try {
            echo $twig->render($folder.'/'.$viewName.'.twig', $viewData);
        } catch (\Exception $e) {
            // Lida com erros do Twig, se necessário
            echo 'Erro ao renderizar o template: ' . $e->getMessage();
        }
    }

    private function renderPartial($viewName, $viewData = []) {
        $this->_render('partials', $viewName, $viewData);
    }

    public function render($viewName, $viewData = []) {
        $this->_render('pages', $viewName, $viewData);
    }

}