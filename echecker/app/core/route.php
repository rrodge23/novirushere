<?php
    /**
     * 
     */
    class Route    
    {
        protected static $controller = 'home';
        protected static $method = 'index';
        protected static $params = [];

        public static function set($route, $function){
            
            $url = self::parseUrl();
            
            if($url[0] == $route){
                
                if($url[0] == strtolower("public")){
                    self::redirectErrorPage();
                    return false;
                }

                if(file_exists(__ROOT . 'app/controllers/' . $url[0] . '.php')){
                    self::$controller = $url[0];
                    unset($url[0]);
                }else{
                    self::redirectErrorPage();
                    return false;
                }

                if(isset($url[1])){
                    if(method_exists(self::$controller,$url[1])){
                        self::$method = $url[1];
                        unset($url[1]);
                    }
                }
               
                self::$params = $url ? array_values($url) : [];
               
                call_user_func_array([self::$controller,self::$method], self::$params);
            }
            
        }

        private static function parseUrl(){
            if(isset($_GET['url'])){
                
                return $url = explode('/',filter_var(rtrim($_GET['url'],'/'), FILTER_SANITIZE_URL));
            }
        }
        private static function redirectErrorPage(){
            errorCtrl::index();
        }
    }
    
?>


