<?php
    require_once "src/TitleCaseGenerator.php";

    class TitleCaseGeneratorTest extends PHPUnit_Framework_TestCase
    {

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

      function test_makeTitleCase_oneWord()
      {
        //Arrange
        $test_TitleCaseGenerator = new TitleCaseGenerator;
        $input = "the little mermaid";

        //Act
        $result = $test_TitleCaseGenerator->makeTitleCase($input);

        //Assert
        $this->assertEquals("the little mermaid", $result);


      }
    }




?>