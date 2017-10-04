<?php

   $obj = new main();

   class main {
	  	  
    public function __construct() {
       
	   htmlTags::printHeaders("PHP BASIC PRACTICE ASSIGNMENT");
	   htmlTags::printHorizontal();
	   
	   $date = date("Y-m-d");
	   $tar = date("Y/m/d");
	   $year = array("2012", "396", "300","2000", "1100", "1089");
	   $str = "Wilfred";
	   
	   //call the static methods
	   Display::displayDate($date, $tar, $year);
	   Display::replaceString($date);
	   Loops::compareDates ($date, $tar);
	   Loops::searchPosition ($tar);
	   Loops::countWords ($tar, $str);
	   Loops::characters ($tar, $str);
	   Loops::convertIntoArray($tar);
	   Loops::findLeapYearWithForeach($year);
       Loops::findLeapYearWithWhile($year);
	   Loops::findLeapYearUsingSwitch($year);
	   Loops::delimit($year);
    }
	
	 public function __destruct() {
		 
		 htmlTags::printHeaders("DESTRUCTOR CALLED: I am done with the assignment");		 
    }
  }

   class Display {
	  
	  static public function displayDate($date1 ,$tar1, $year1) {
         echo "The value of date is :" .$date1 ."<br>";
		 echo "The value of tar is :" .$tar1 ."<br>";
		 print_r($year1);
		 htmlTags::printHorizontal();
     }
	 
	 static public function replaceString($date1) { 
		 $date2 = DateTime::createFromFormat("Y-m-d", $date1 );
		 echo "2. The New Replaced Date String is :";
		 echo $date2-> format("Y/m/d");
		 htmlTags::printHorizontal();
     }  
  }
  
  class Loops {
	  
	  static public function compareDates($date1 ,$tar1) {
         echo "3. To compare date & tar";

		 if (strcmp($date1, $tar1) > 0)
	          echo "<br> The future </br>";

		 elseif  (strcmp($date1, $tar) < 0)
	          echo "<br> the past";

		 else  
			  echo "<br> oops";

		 htmlTags::printHorizontal();
     }

	 
	 static public function searchPosition($tar1) {
      
	    echo "4. print the position of / in date <br>";
		htmlTags::printContents("The positions of / in date is :");

		for($i=0; $i <strlen($tar1);$i++)
        {
           if($tar1[$i]=='/')
           {
              echo " ".$i; 
           }
        }
		
		 htmlTags::printHorizontal();
     }


	 static public function countWords($tar1, $string) {
      
		htmlTags::printContents("The number of words in date is :");
		echo "<br>" .str_word_count($tar1);
	    htmlTags::printHorizontal();
		
		htmlTags::printContents("The length of the string in date is :");
		echo "<br>" .strlen($string);
	    htmlTags::printHorizontal();
         
     }
       static public function characters($tar1, $string) {
      
		htmlTags::printContents("the ASCII value of the first character of a string is :");
		echo "<br>" .ord($string);
	    htmlTags::printHorizontal();
		
		htmlTags::printContents("the last two characters in date is :");
		echo "<br>" .substr("$tar1", -2);
	    htmlTags::printHorizontal();
     }	 
      
	 static public function convertIntoArray($tar1) 
   {
      
		htmlTags::printContents("Convert date into array & delimit:");
		
		$array = explode("/",$tar1);
        for($i=0; $i < count($array);$i++)
        {
            echo ($array[$i])." ";
        }
            echo "<br>";

	    htmlTags::printHorizontal();		
     }
     

		static public function findLeapYearWithForeach($year) {
      
		htmlTags::printContents("Leap Year using Foreach:");
		
				foreach($year as $value)
				{
					if(((int)$value)%4==0)
						echo "<br>True";
					else
						echo "<br>False";
						echo "<br>";
				}
				
		 htmlTags::printHorizontal();
		}
		
	    static public function findLeapYearWithWhile($year) 
      {
      htmlTags::printContents("Leap Year using While:");
		
				$i=0;
				while($i<count($year))
				{
					if(((int)$year[$i])%4==0)
					{
						echo "<br>True";
					}
					else
					{
						echo "<br>False";
					}
					++$i;

					echo "<br>";
				}
	    htmlTags::printHorizontal();		
     }
     

		 static public function findLeapYearUsingSwitch($year) {
      
		htmlTags::printContents("Leap Year using Switch:");
		
				for ($i=0;$i<count($year);$i++)
				{
						echo "<br>";
						switch ($year{$i})
						{
								case "2012": 
								if(((int)$year[$i])%4==0)
								{
									echo "<br>True";
								}
								else
								{
									echo "<br>False";
								}
								break;
								
								case "396": 
								if(((int)$year[$i])%4==0)
								{
									echo "<br>True";
								}
								else
								{
									echo "<br>False";
								}
								break;
								
								case "300": 
								if(((int)$year[$i])%4==0)
								{
									echo "<br>True";
								}
								else
								{
									echo "<br>False";
								}
								break;
								
								case "2000": 
								if(((int)$year[$i])%4==0)
								{
									echo "<br>True";
								}
								else
								{
									echo "<br>False";
								}
								break;
								
								case "1089": 
								if(((int)$year[$i])%4==0)
								{
									echo "<br>True";
								}
								else
								{
									echo "<br>False";
								}
								break;
								
								case "1100": 
								if(((int)$year[$i])%4==0)
								{
									echo "<br>True";
								}
								else
								{
									echo "<br>False";
								}
								break;
								
								default:
								break;
						}
				}

	    htmlTags::printHorizontal();		
     }
 static public function delimit($year) {
      
		htmlTags::printContents("delimit :");
				
				foreach($year as $value)
				{
					if(((int)$value)%4==0)
						echo " True";
					else
						echo " False";
				}
				
		 htmlTags::printHorizontal();	
     }	 	
       }
       
       class htmlTags
 {
	   
	    static public function printHorizontal()
 {
         echo '<hr>';
     }
	 
	    static public function printHeaders($text)
 {
         echo '<h1>' . $text . '</h1>';
     }
	 
		static public function printContents($text) 
{
         echo '<h3>' . $text. '</h3>';
     }
     
  }

?>
			
	 
		