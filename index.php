<?php 
    // print word
    // echo "<h1> Akarachai Saeteaw </h1>";
    // print 'Akarachai';

    // Variable
    // $name = "akarchai";
    // $L_name = 23;
    // $gene = false;
    // $price = 20.99;
    // echo 'ชื่อ: $name'; //equal string
    // echo "ชื่อ: ".$name." นามสกุล ".$L_name." Gene: ".$gene. $price; //equal variation

    // //Condition
    // $score = 300;
    // switch ($score){
    // case 300: echo "Woww";
    //     break;
    // case 400; echo "Nooo";
    //     break;
    // case 500; echo "wIII";
    //     break;
    // default:
    //     echo "พังงง";
    // } 
    // if ($score === 500) {
    //     echo "Number equal 500";
    // } 
    // else if ($score == 400) {
    //     echo "Number equal 400";
    // }
    // else ($score == 300) {
    //     echo "Number equal 300";
    // }

    //Loop
    // //for
    // for ($count == 1;$count<=10; $count++) {
    //     echo "PHP";
    // }
    // //while
    // $score==20;
    // while ($score != 25) {
    //     echo "Akarachai ";
    //     $score++;
    //     if ($score ==25){
    //         break;
    //     }
    // // }
    // // do while
    // $score == 1;
    // do {
    //     echo " Akarachai";
    //     $score++;
    // } while ($score != 10);

    // //Arrays print_r == show detail of arrays
    // $name = array("AA", "BB", "CC", "DD");
    // print_r ($name);
    // foreach($name as $new) {
    //     echo $new;
    // }
    // // Arrays 2
    //     $name = array("Thai", "Eng", "Japan");
    //     print_r ($name);
    //     $country = array("TH" =>"Thai", "English"=>"Eng", "japan"=>"JP"); //Key-Value
    //     echo $country["TH"];
    //     // print_r ($country);

    // access to arrays
    // //form 1
    // $name = array("Tsahi", "Eng", "Japan");
    // foreach ($name as $value) {
    //     echo $value;
    // };
    // //form 2
    // $country = array("TH" =>"Thai", "English"=>"Eng", "japan"=>"JP"); //Key-Value

    // //use in case Key and Value
    // foreach ($country as $key => $value) {
    //     echo " Key =".$key." Value =".$value;
    // }
    // $count_name = count($name);
    // echo $count_name;
    // for ($i = 0; $i < $count_name; $i++) {
    //     echo $name[$i];
    // };
    // // check types of data
    // $name = "Akarachai";
    // $age = 20;
    // $Room = array("AA", "BB", "CC", 1209, 120.7);

    // // echo gettype($name);
    // // echo gettype($age);
    // // echo gettype($Room);
    // // for ($i = 0; $i < count($Room); $i++) {
    // //     echo " Arrays [$i] = ".gettype($Room[$i]);
    // // };
    // var_dump($Room);

    // // while each
    // $country = array("TH" =>"Thai", "English"=>"Eng", "japan"=>"JP"); //Key-Value
    // while ($element = each($country)) {
    //     echo $element['key'];
    //     echo $element['value'];
    // }

    //push and pop add & delete element in the end
    // $animal = array("cats", "Dogs");
    // var_dump($animal);
    // // add element in arrays in the end
    // array_push($animal, "Elephant");
    // var_dump($animal);
    // Delete element in arrays in the end
    // $animal_2 = array("AA", "BB");
    // var_dump($animal_2);
    // array_pop($animal_2);
    // var_dump($animal_2);

    // //shift and unshift add & delete element in first
    // $animal = array("cats", "Dogs");
    // array_unshift($animal, "Brids"); //add element in first
    // print_r ($animal);
    // // array_unshift($animal, 2500);
    // print_r ($animal) ;
    // echo "------";

    // // push some data from array "shift"
    // array_shift($animal);
    // print_r ($animal)

    // //sort arrays
    // $food = array("Zoo", "Fruit", "Food", "Ice-Cream");
    // //Array index
    // echo "Before sort";
    // for ($i = 0; $i < count($food); $i++) {
    //     echo $food[$i];
    // }
    // sort($food);
    // for ($i = 0; $i < count($food); $i++) {
    //     echo $food[$i];
    // }
    // // sort greater than
    // asort($food);
    // for ($i = 0; $i < count($food); $i++) {
    //     echo $food[$i];
    // }
    
    // //sort array from associate
    // $room = array("A1" => 20, "C2" => 40, "G3" => 4, "P4"=>10);
    // print_r ($room);
    // asort($room);
    // print_r ($room);
    // arsort($room); //many to less
    // print_r ($room);
    // ksort($room); // sort form key
    // print_r ($room);
    // krsort($room); // many to less
    // print_r ($room);

    // //shuffle data in array
    // $arr = array("A" =>50, "B"=>60, "C"=> 2);
    // print_r ($arr);
    // shuffle($arr);
    // print_r ($arr);
    // if (shuffle($arr)== true) {
    //     print_r ($arr);
    // }

    // //reverse_array
    // $number = range(10,20);
    // for ($i ==0; $i<count($number);$i++) {
    //     echo $number[$i]." ";
    // }
    // $reverse_num = array_reverse($number);
    // for ($i ==0; $i<count($reverse_num);$i++) {
    //     echo $reverse_num[$i]." ";
    // }

    // //swich data in array between key and value
    // $room = array("A1"=>60, "B2"=>50, "B1"=>40);
    // print_r ($room);
    // $flip_num = array_flip($room);
    // print_r ($flip_num);

    // //Create function
    // function random_number() {
    //     $sum=0;
    //     for ($i=1; $i<=10; $i++) {
    //         $sum+=rand(1, 20);
    //         echo "total: ".$sum.' ';
    //     }
    // }
    // function summation() {
    //     $var = 5+2;
    //     echo $var;
    // }
    // random_number();
    // summation();

    // //sent array to function and return values
    // function FillName($name, $lname) {
    //     echo $name.' '.$lname;
    // };
    // function Addition($num_1, $num_2) {
    //     echo " Total ".($num_1+$num_2);
    // };
    // $arr = array(10, 20, 30, 50);
    // function Sum_Array($arr) {
    //     print_r ($arr);
    //     $sum = 0;
    //     for ($i =0; $i<count($arr);$i++) {
    //         $sum += $arr[$i];
    //     }
    //     echo $sum;
    // }
    // FillName("TUU", "POM");
    // Addition(10, 40);
    // Sum_Array($arr);
    // return values
    // function _() {
    //     $var = 10+20;
    //     return $var;
    // }
    // $result = _();
    // echo $result;

    // function multi() {
    //     $var = 50*20;//Local variable
    //     return $var;
    // };
    // echo multi();
    // function Summation($var_1, $var_2) {
    //     $sum = $var_1 + $var_2;
    //     return $sum;
    // };
    // function Summation_2($var_3) {
    //     $sum == 0;
    //     for ($i=0; $i<count($var_3);$i++) {
    //         $sum += $var_3[$i];
    //     };
    //     return $sum;
    // };  
    // // echo Summation(10, 20);
    // $arr = array(10, 20, 1, 30, 60);
    // echo Summation_2($arr);
    
    // //String function
    // $str = "Akarchai";
    // echo strlen($str);
    // for ($i =0; $i< strlen($str); $i++) {
    //     echo "Wowwww";
    // }

    // //change from strings
    // $str_1 = "Web Programming PHP";
    // //upper letter
    // echo strtoupper($str_1);
    // echo strtolower($str_1);
    // //change first letter to upper
    // $str_2 = "you word upper";
    // echo ucwords($str_2);

    //Cut space in strings
    $str_1 = "  YouWebprogramming  ";
    $strl = ltrim($str_1);
    echo $str_1."ก่อนใช้".strlen($str_1);
    echo $strl."หลังใช้".strlen($strl);

?>