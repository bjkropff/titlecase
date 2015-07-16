<?php
    require_once "src/TitleCaseGenerator.php";

    class TitleCaseGeneratorTest extends PHPUnit_Framework_TestCase
    {
      // Basic test to capitalize a one word title
      function test_makeTitleCase_oneWord()
      {
        //Arrange
        $test_TitleCaseGenerator = new TitleCaseGenerator;
        $input = "beowolf";

        //Act
        $result = $test_TitleCaseGenerator->makeTitleCase($input);

        //Assert
        $this->assertEquals("Beowolf", $result);


      }

      // Test to capitalize a multiple word title
      function test_makeTitleCase_multipleWord()
      {
        //Arrange
        $test_TitleCaseGenerator = new TitleCaseGenerator;
        $input = "the little mermaid";

        //Act
        $result = $test_TitleCaseGenerator->makeTitleCase($input);

        //Assert
        $this->assertEquals("The Little Mermaid", $result);


      }

      // Test to NOT capitalize chosen word ('of') in a title
      function test_makeTitleCase_nonChosenWord()
      {
        //Arrange
        $test_TitleCaseGenerator = new TitleCaseGenerator;
        $input = "little shop of horrors";

        //Act
        $result = $test_TitleCaseGenerator->makeTitleCase($input);

        //Assert
        $this->assertEquals("Little Shop of Horrors", $result);


      }
      // Test to NOT capitalize chosen words in a title
      function test_makeTitleCase_multipleNotChosen()
      {
        //Arrange
        $test_TitleCaseGenerator = new TitleCaseGenerator;
        $input = "father of the bride";


        //Act
        $result = $test_TitleCaseGenerator->makeTitleCase($input);

        //Assert
        $this->assertEquals("Father of the Bride", $result);


      }
      // // Test to NOT capitalize chosen words in a title unless it is the first word
      // function test_makeTitleCase_nonChosenWord()
      // {
      //   //Arrange
      //   $test_TitleCaseGenerator = new TitleCaseGenerator;
      //   $input = "the little shop of horrors";
      //
      //
      //   //Act
      //   $result = $test_TitleCaseGenerator->makeTitleCase($input);
      //
      //   //Assert
      //   $this->assertEquals("Little Shop of Horrors", $result);
      //
      //
      // }
    }




?>
