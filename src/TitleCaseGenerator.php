<?php
    class TitleCaseGenerator
    {
        function makeTitleCase($input_title)
        {
            //This 'explodes' the $input_title into an array of strings.
            $input_array_of_words = explode(" ", strtolower($input_title));

            //Add counter of the length of the array for comparing in foreach loop
            //$array_length_for_counting = count($input_array_of_words);

            //Declares a new, empty array.
            $output_titlecased = array();

            //Declares a new array of many non-titlecased words.
            $compares = array("a", "an", "and", "as", "at", "but", "by", "do", "for", "from", "in", "nor", "of", "on", "or", "the", "to", "up");

            //Runs a foreach on $input_array_of_words
            foreach ($input_array_of_words as $word) {
                //if word is NOT in the array $compares OR $output_titlecased is empty, capitalize it and push it to the array
                if ((!in_array($word, $compares)) || ($output_titlecased == array()))
                {
                    array_push($output_titlecased, ucfirst($word));
                //if word is in the array $compares, push it to the array
                }elseif ((in_array($word, $compares)) && ($output_titlecased != array()))
                {
                    //Need to find if it is the last element in the title. True -> capitalize, false -> leave lowercase
                    //if($array_length_for_counting == count($output_titlecased))
                    array_push($output_titlecased, $word);
                }
            }
            return implode(" ", $output_titlecased);
        }
    }
 ?>
