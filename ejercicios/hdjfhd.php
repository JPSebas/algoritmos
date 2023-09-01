<?php
$val_a= $_GET['val_a'];
$val_b= $_GET[ 'val_b'];
$val_c= $_GET[ 'val_c'];

if ($val_a>$val_b) {
    if ($val_a>$val_c) {
    
    echo "el numero mayor es:", $val_a;
    
}
else {
    echo 'el numero mayor es:', $val_c;
}

}
else if  ($val_b>$val_c){
    echo 'el mayor es:'; $val_b;
}else {
    echo 'el numero mayor es:', $val_c;
}



?>