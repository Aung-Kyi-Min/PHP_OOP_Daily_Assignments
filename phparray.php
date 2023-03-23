<?php
     $d="abc";
     $d.=" is abc.";
     echo $d;

     echo "<br>";

    // Numeric Array 
     $families =array();
     $families[0]="Peter";
     $families[1]="lois";
     $families[2]="Glenn";

     $families = array("Peter","Lois","Glenn");             //numeric array
     $arrlen = count($families);
     for($i = 0; $i<$arrlen; $i++)
     {
         echo $families[$i]. "<br>" ;
     }
     echo $families[0]. "<br>";
     echo $families[1]. "<br>";
     echo $families[2]. "<br>";

    var_dump($families[1]);
    echo "<br>";



    // Associative Array
     $food =array('category' =>"noodle","qty"=> 30, "price" =>400,"total"=>12000);
     echo $food['category'];
     foreach($food as $x => $xvalue) {
         echo $x . " = " . $xvalue . "<br>";
     }

    
    //Multidimensional array

     $multi = array('Griffin'=>array("one"=>"Peter","two"=>"Lois","three"=>"Megan"),
                         "AA"=>array("one"=>"Glenn","two"=>"BB","three"=>"CC"));

     echo $multi['Griffin']["one"] . "<br>";
     echo $multi['AA']["three"] . "<br>";

    // "Quagmire"=>array("Glenn"=>40),
    // "Brown"=>array("Cleveland"=> 30,"Loretta"=>29,"Junior"=>28)

     $families1 = array(array("Peter",30),array("Lois",39), array("Megan",20));

     echo $families1[0][0] . " is " . $families1[0][1] . " years old . <br>";
     echo $families1[1][0] . " is " . $families1[1][1] . " years old . <br>";
     echo $families1[2][0] . " is " . $families1[2][1] . " years old . <br>";
     
     foreach($families1 as $x) {
         foreach ($x as $val){
             echo $val ."<br>";
         }
     }



     $multi1 = array('Griffin'=>array("one"=>"Peter","two"=>"Lois","three"=>"Megan"),
     "AA"=>array("one"=>"Glenn","two"=>"BB","three"=>"CC"));

     foreach ($multi1 as $key => $value){
         echo $key . " <br> ";
             foreach ($value as $sub_key => $sub_val){
                 if(is_array($sub_val)){
                     foreach($sub_val as $k => $v ) {
                         echo "\t" . $k . " = " . $v ."<br>";
                     }
                 }
                     else{
                         echo $sub_key . " = " . $sub_val . "<br>";
                     }
                 }
             }

    //     // Associative Array
     $food =array('category' =>"noodle","qty"=> 30, "price" =>400,"total"=>12000);
     echo $food['category'];
     foreach($food as $x => $xvalue) {
         echo $x . " = " . $xvalue . "<br>";
     }

    
     $lunch = array('one'=>"banana","two"=>"apple","three"=>"mango");
     $lunch = array('First'=>array("one"=>"banana","two"=>"apple","three"=>"mango"),
                         'Second'=>array("four"=>"pineapple","five"=>"watermaleon"));
         foreach($lunch as $key => $value){
             echo $key . "<br>";
             foreach($value as $sub_key => $sub_val){
                 if(is_array($sub_val)){
                 foreach($sub_val as $k => $v){
                     echo $k ."\t". $v;
                 }
             }
             }
         }

     $a = count($lunch);
     for($i=0;$i<$a;$i++){
         echo $lunch[$i];
     }
     foreach ($lunch as $key => $value){
         echo $key . "\t" . $value;
     }
?>   