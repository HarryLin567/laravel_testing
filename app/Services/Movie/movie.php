<?php
namespace App\Services\Movie;
use App\Services\Movie\Model;

Class Movie extends Controller{

  Public function index(){
    $obj = new Model();
      return $obj -> hello();

}
}





// class Movie extends Model{
//   public $fillable = ['Mg Mg','Aung Aung'];

//   public function index(){
//     return 'Today is'. $this -> date();
//   }
// }
