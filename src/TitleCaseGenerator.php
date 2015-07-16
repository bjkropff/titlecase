<?php
    class TitleCaseGenerator
    {
        function makeTitleCase($input_title)
        {
            //This 'explodes' the $input_title into an array of strings.
            $input_array_of_words = explode(" ", $input_title);

            //Declares a new, empty array.
            $output_titlecased = array();

            //Runs a foreach on $input_array_of_words
            foreach ($input_array_of_words as $word) {
                //if word is of, push it to the array
                if($word == "of"){
                    array_push($output_titlecased, $word);
                }
                //if word is NOT of, capitalize it and push it to the array
                if($word !== "of"){
                    array_push($output_titlecased, ucfirst($word));
                }
            }
            return implode(" ", $output_titlecased);
        }
    }
 ?>
