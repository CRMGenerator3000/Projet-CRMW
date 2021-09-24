<?php
    class Liscence
    {
        /**
         * This function send true if the liscence is still ok, send false if not or if the liscence is not in the base
         * @param string get a string that represent the liscence
         * 
         * @return boolean
         */
        public static function checkLiscence($liscence){
            /**
             * @var object sql request type
             */
            $sql=null; // TODO make a PLSQL function that take a liscence and send back true if the liscence is still working or false if not or not in the base

            $ans = $sql->execute();
            return ($ans? true:false );
        }


        public static function getLiscenceTimeLeft($liscence){
            if (!self::checkLiscence($liscence)) {
                return false;
            }
            // TODO Send back the liscence time left
        }
        
        
    }
    
    


?>