<?php
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// use App\Services\Movie\Movie;
// use App\Services\Movie\Model;
// use App\Services\Movie\MovieController;

// Route::get('/', function(){

//   $obj = new Movie();
//   echo $obj -> index();

// });

// Route::prefix('UI')->group(function(){

//   Route::get ('/', function(){
//     return view("welcome");
//   })->name("welcome");
  
//   Route::get('/home', function(){
//     return "This is my first project";
//   })->name("test");
  
//   Route::get('/testing', function(){
//     return redirect()->route("test");
//   });

// });


Route::prefix('UI')->group(function(){

  Route::get ('/', function(){
    return view("home");
  });

  Route::get('/contact-us', function(){
    return view("contact-us");
  });



});







// Route::get ('/', function(){

//   $movie = new MovieController();
//   echo $movie ->index();
//   echo '<br>';
//   echo $movie ->create();

// });



// Route:: get ('/', function(){
//   // $name = new Model;
//   // echo $name->CallProtectCreate();
//   $movie = new movie();
//     echo $movie ->index();
  

// });

// Route::get('/', function(){

//   $obj = new Movie();
//   var_dump ($obj -> fillable);
//   echo '<br>';
//   echo $obj -> index();

// });







// use App\Services\Animal\Bird;
//
// Route ::get('/',function(){
//   $obj = new Bird;
//   echo $obj -> fly();
//   echo '<br>';
//   // property ခေါ်တယ့်အခါ $ ဖြုတ်ပါ
//   echo $obj -> data['1'];
//   echo '<br>';
//   echo $obj -> data['2'];
// });



// Route::get('/', function () {

//   });


//    return view('welcome');


//    title = User-defined functions

//    $condition =true; // false;
//    if ($condition)  echo getHelloWorld();


//Functions within function
//    getKhineLinTun();
//
//    echo getLinLin();
//    echo '<br>';
//    echo getSepaktakraw();

//recursive function
//    echo testRecursive(1);


    // echo getAddResult(60,14890);

// $a = 7;
// $b = &$a;       // $b is a reference to $a
// print "$a\n";   // prints 3
// print "$b\n";   // prints 3
// echo '<br>';
// $a = 4;        // change $a
// print "$a\n";  // prints 4
// print "$b\n";  // prints 4

// $val = 1000;
// $val1 = 800;
// getChangeResult($val , $val1);
//
// echo $val;

// Use default Parameter in function
// $arg = 100;
// $arg1 = 200;
// echo  getResult ($arg, $arg1);


// echo makeCoffee('hot coffee');

// Inheritance variable from parent scope

// $other = 'Hello everyone';
// $example = function() use ($other){
//   return $other;
// };
//     echo $example();
// });

// Anonymous function
// $sub_val = 4;
// echo getCallBackTesting(10, function($res) use ($sub_val){
//   return $res - $sub_val;
// });
//
// echo '<br>';
//
// $sub_val = 4;
// echo getCallBackTesting(10, function($res) use ($sub_val){
//   return $res * $sub_val;
// });




// echo getParent ('/testing',function(){
//   echo 'That Right';
// });
?>