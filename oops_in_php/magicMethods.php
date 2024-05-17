<?php 
// magic methods are the methods that call automatically on certain action.
// __constuct and  __destruct are also magic methods

// __invoke magic methods
// when we call a class method as a function (certain action bhai ) the __invoke method call

// class Student{
//     function __invoke($name){
//         echo "i am $name a student";
//     }
//     function other(){
//         echo "i am working in the student department";
//     }
// }
// $student=new Student();
// $student("rahul");
// echo "<br>";
// $student("saurabh");
// echo "<br>";
// $student->other();


// __get magic method
// if you try to call a private or a property that does not exist then 
// you got some error but you want a proper message that this property private either
// does not exist then you can use __get invike method.

// class User{
//     public $name="Piyush Dubey";
//     private $age=30;
//     function __get($property){
//         echo "$property  does not exist or not accessibale";
//     }
// }
// $user=new User();
// echo $user->name;
// echo "<br>";
// $user->age;
// echo "<br>";
// $user->gender;


// __set magic method
// if you want to set a property that ios private or oes not exist then you 
// get an error and you want to a proper message instead of that and also you want to forcefully set
// that property in both case you can use __set magic method.

// class Users{
//     private $name='piyush dubey';

//     function __set($property, $value){
//         // echo "$property property and value $value  does not exist or it's private ";
//         if(property_exists($this,$property)){
//             $this->$property=$value;
//         }
//         else{
//             echo "property does not exist";
//         }
//     }
    
//     function getName(){
//         echo $this->name;
//     }

// }
// $user =new Users();
// $user->getName();
// echo "<br>";
// $user->age=30;
// echo "<br>";
// $user->name='nikki';
// $user->getName();


// __call magic method.
// if you call a private method or a method that does not exist then you will get an error if you want that  error 
// to display accouding to yours and also call forcefully if the methods exist then you can
// use __call magic method.


class  User{
    private function getName($name){
        echo "user name is $name";
    }

    function __call($method,$args){
        if(method_exists($this,$method)){
            call_user_func_array([$this,$method],$args);
        }
        else
        echo "$method  method does not exist";
    }
} 
$user=new User();
$user->setName('piyush');  
echo "<br>";
$user->getName('piyush'); 
?>