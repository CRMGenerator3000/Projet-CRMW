<?php
    class Tag{
        /**
         * Function that return the text refered to the tag and the target
         * 
         * @param function_name the name of the function to call
         * @param target the person to add to call
         * @param from the user info to use
         * 
         * @return string 
         * 
         * @version 0.1 tested but a limit test is not done  
         */
        public static function getText($function_name, $target, $from){
            return call_user_func('Tag::'.$function_name,$target,$from);
        }

        # All next function are debug function to test some easy calls to make sure everything is good
        
        public static function debug_name($target=null, $from=null) {return "Jean";}
        public static function debug_address($target=null, $from=null) {return "Montpellier";}
        public static function debug_name_entp($target=null, $from=null) {return "Umontpellier";}

        # All next function are all the tags, every function needs to be with the same function signature of template()
        public static function template($target=null, $from=null) {
            return null;
        }


    }
?>