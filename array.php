<?php

//$data=array[];//old

//$data=[];
//$data[0]=10;  //numeric array
//$data[2]=20;
//$data[3]=30;
//
//$data['name']='Mosiur';
//$data['city']='Mirpur-10';
//$data['country']='Bangladesh';
//
//echo $data['name'];



//$data=[10,20,30,'Mosiur','Mirpur-10','Bangladesh'];
//echo $data[4];

//$data = [
//    'name'        =>'Qumrun',              //assosiative array
//    'city'        =>'Sheikhdi',
//    'country'     =>'Bangladesh',
//    'phone'       =>'01747161611',
//    'gender'      =>'Female'
//];
//echo $data['name'];
//$data = ['name'=>'Qumrun','city'=>'Sheikhdi','country'=>'Bangladesh','phone'=>'01747161611','gender'=>'Female'];

//foreach ($data as $value){                   //all data
//    echo $value.'<br/>';
//}
//echo '<pre>';  //with  index dekte hole
//print_r($data);


//echo '<pre>';
//var_dump($data);



//$data = [];
//$data[0][0]=10;
//$data[0][1]=20;
//$data[0][2]=30;
//
//$data[1][0]=40;
//$data[1][1]=50;
//$data[1][2]=60;
//
//$data[2][0]=70;
//$data[2][1]=80;
//$data[2][2]=90;
//
//$data[3][0]=100;
//$data[3][1]=110;
//$data[3][2]=120;
//
//foreach ($data as $value){
////    echo $value[0].' '.$value[1].' '.$value[2].'<br/>';
//    foreach ($value as $v_value){
//        echo $v_value.' ';
//    }
//    echo '<br/>';
//}
  //$_    //$_ hole asbe 8 array

//function demo($firstName, $lastName=null){
////   $firstName='Qumrun';
////   $lastName='Nessa';
//   $fullName=$firstName.' '.$lastName;
////   echo $fullName;
//    return $fullName;
//}
//echo '<br/>-----------------<br/>';
//echo demo('Meherun');
//echo '<br/>-----------------<br/>';
//$res = demo('Qumrun', 'Nessa');
//echo 'Full name is :'.$res;
//
//echo '<br/>-----------------<br/>';
//$res = demo('Badrun', 'Nessa');
//echo '<h1/>'.$res.'<h1/>';

class Demo{
    public $name='Qumrun Nessa';
    public $city='Sheikhdi';

    function add(){
        echo 'In Add';
    }
    function hello(){
        echo 'In Hello';
    }

}
$demo = new Demo;

$demo->add();
$demo->name;//hobena
echo $demo->name;//hobe













