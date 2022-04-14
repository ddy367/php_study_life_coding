<?php
if($_POST['id'] === 'egoing') {
    if($_POST['pw'] === '111111') {
        echo "right";
    } else {
        echo "pw wrong";
    }
} else {
    echo "wrong";
}
?>