// Fizzbuzz in PHP

<?php 

for ($i=0; $i < 100; $i++) { 
	if($i % 3 == 0 && $i % 5 == 0){
        echo "Fizzbuzz <br>";
    }
    else if($i % 3 == 0){
        echo "Fizz <br>";
    }
    else if($i % 5 == 0){
        echo "Buzz <br>";
    }
    else {
        echo $i."<br>";
    }
}