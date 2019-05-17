/*
* Fizz Buzz is a math game that is based on division. 
* To sum it up: 
* Participants count up from the number one, 
* saying “Fizz” when the number is divisible by three and 
* “Buzz” when the number is divisible by five. 
* If a number happens to be divisible by both three and five, 
* then the phrase “Fizz Buzz” is used (the number 15 is a good example).
*
* @author  Tyrone Adams
* @version 1.0
* @since   2019-05-17 
*
*/
function fizzBuzz(){
  //Loop through numbers 1-100
 for ($i = 1; $i <= 100; $i++){
  //Check if current number is divisible by 3 and 5
  if($i%3==0 && $i%5==0){
     echo "FizzBuzz<br />";
  }
  //Check if current number is divisible by 3
  else if($i%3==0){
     echo "Fizz<br />";
  }
  //Check if current number is divisible by 5
  else if($i%5==0){
     echo "Buzz<br />";
  }
  //Display number if number does not conform to any rule
  else {
     echo $i."<br />";
  }
 }
}

fizzBuzz();