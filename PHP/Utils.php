<?php
    class Utils
    {
        /**
         *  Generate a text with spec parameter depending on the target
         *  @param string the text with some tags of the different parameters each tag need to be in the format %tag%
         *  @param target the target of the text
         *  @param from the user of the app
         * 
         *  @return string the text with no tags and the special text for the target
         * 
         *  @version 0.0 NO TEST ON IT just theorical conception, check with createText() to errase one of them before using it
         */
        public static function createText($string, $target=null, $from=null){
            if(!is_string($string)) return null;
            $old_index=0;
            $index = self::find_next_tag($string, $old_index);
            $new_string = "";
            while ($index) {
                $new_string .= substr($string,$old_index, ($index["next_index"]-$old_index-strlen($index["tag_name"])-2));
                $new_string .= Tag::getText($index["tag_name"], $target, $from);
                $old_index = $index["next_index"];
                $index = self::find_next_tag($string, $old_index);

            }
            return $new_string;
        }

        /**
         * Find next tag in a string, each tag start and end with "%" between each "%" there is the name of the tag
         * @param string with or not tags not null and not empty
         * @param int index that where the search comes
         * 
         * @return array[2] with first a string that's the first tag's name and the second with the index of the next char after the last "%"
         * 
         * @version 0.0 NO TEST ON IT just theorical conception
         */
        private static function find_next_tag($string, $index){
            if($next_index_start = strpos($string, "%",$index)){
                $next_index_end = strpos($string, "%",$next_index_start+1);
                $tag_name = substr($string, ($next_index_start+1),($next_index_end-$next_index_start-1));
                $array = array(
                    "tag_name" => $tag_name,
                    "next_index" => $next_index_end+1
                );
                return $array;
            }
            return false;
        }
    }
    




?>