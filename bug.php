function foo(array &$arr) {
  foreach ($arr as &$value) {
    $value++;
  }
}

$arr = [1, 2, 3];
foo($arr);
print_r($arr); // Output: Array ( [0] => 2 [1] => 3 [2] => 4 )

function bar(array $arr) {
  foreach ($arr as $key => $value) {
    $arr[$key]++;
  }
}

$arr = [1, 2, 3];
foo($arr);
print_r($arr); // Output: Array ( [0] => 2 [1] => 3 [2] => 4 )

//Incorrect code
function wrongFoo(array $arr){
    foreach($arr as $key => $value){
        $arr[$key]++;
    }
}
$arr = [1,2,3];
wrongFoo($arr);
print_r($arr); //Output: Array ( [0] => 2 [1] => 3 [2] => 4 )

//Correct Code
function correctFoo(array &$arr){
    foreach($arr as $key => &$value){
        $value++;
    }
}
$arr = [1,2,3];
correctFoo($arr);
print_r($arr); // Output: Array ( [0] => 2 [1] => 3 [2] => 4 )