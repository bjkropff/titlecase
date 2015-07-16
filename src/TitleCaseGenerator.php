<?php
    class TitleCaseGenerator
    {
        function makeTitleCase($input_title)
        {
            //This 'explodes' the $input_title into an array of strings.
            $input_array_of_words = explode(" ", $input_title);

            //Declares a new, empty array.
            $output_titlecased = array();

            //Declares a new array of many non-titlecased words.
            $compares = array("a", "an", "and", "as", "at", "but", "by", "for", "from", "in", "nor", "of", "on", "or", "the", "to", "up");

            //Runs a foreach on $input_array_of_words
            foreach ($input_array_of_words as $word) {
                //if word is NOT in the array $compares OR $output_titlecased is empty, capitalize it and push it to the array
                if ((!in_array($word, $compares)) || ($output_titlecased == array()))
                {
                    array_push($output_titlecased, ucfirst($word));
                //if word is in the array $compares, push it to the array
                }elseif ((in_array($word, $compares)) && ($output_titlecased != array()))
                {
                    array_push($output_titlecased, $word);
                }
            }
            return implode(" ", $output_titlecased);
        }
    }
 ?>
