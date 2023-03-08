<?php 
// Các cấp độ Errors
/**
 * 1. notice
 * 2. warning
 * 3. Errors
 */

// $arr = [];
// echo $arr[0];

try{
    // echo a();
    echo a();
}catch(Error $e){
    echo $e->getMessage();
}
echo '<h2>Demotam Academy</h2>';

?>