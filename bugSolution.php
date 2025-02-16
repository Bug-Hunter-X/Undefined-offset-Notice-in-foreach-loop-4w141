function foo(array $arr) {
  foreach ($arr as $key => $value) {
    if (isset($arr[$key])) { //Check if the key exists
      //Some operations on the value
    }
  }
  //Alternative solution using empty():
  foreach($arr as $value){
    if (!empty($value)){
      //Some operations on the value
    }
  }
} 