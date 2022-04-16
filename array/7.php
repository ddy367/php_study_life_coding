<?php
function get_members(){
    return ['egoing', 'k8805', 'sorialgi'];
}
 
echo get_members()[1];
 
?>

<?php
function get_members2(){
    return array('egoing', 'k8805', 'sorialgi');
}
 
echo get_members2()[1];
 
?>