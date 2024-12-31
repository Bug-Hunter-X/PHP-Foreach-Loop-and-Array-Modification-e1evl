function correctFoo(array &$arr){
    foreach($arr as $key => &$value){
        $value++;
    }
}

$arr = [1,2,3];
correctFoo($arr);
print_r($arr); // Output: Array ( [0] => 2 [1] => 3 [2] => 4 )

// Explanation:
// The `&` before `$value` in the `foreach` loop creates a reference.  This ensures that modifications to `$value` directly affect the original array element.  Without the `&`, a copy of the value is modified, leaving the original array unchanged.