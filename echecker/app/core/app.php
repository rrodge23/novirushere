
<?php
    /**
     * 
     */
  
    class App
    {
        protected $controller = 'home';
        protected $method = 'index';
        protected $params = [];
        
        function __construct()
        {
            
            $url = $this->parseUrl();
            if($url[0] == strtolower("public")){
                $this->redirectErrorPage();
                return false;
            }

            if(file_exists(__ROOT . 'app/controllers/' . $url[0] . '.php')){
                $this->controller = $url[0];
                unset($url[0]);
            }else{
                $this->redirectErrorPage();
                return false;
            }
            
            $this->controller = new $this->controller;

            if(isset($url[1])){
                if(method_exists($this->controller,$url[1])){
                    $this->method = $url[1];
                    unset($url[1]);
                }
            }
            $this->params = $url ? array_values($url) : [];
            call_user_func_array([$this->controller,$this->method], $this->params);
        }

        private function parseUrl(){
            if(isset($_GET['url'])){
                return $url = explode('/',filter_var(rtrim($_GET['url'],'/'), FILTER_SANITIZE_URL));
            }
        }

        private function redirectErrorPage(){
            $errorCtrl = new errorCtrl();
            call_user_func_array([$errorCtrl,$this->method], []);
        }

    }
    
?>