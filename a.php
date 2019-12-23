<?php
    print_r($_POST);


    foreach($_POST['juminno'] as $jk=>$ju){
        echo trim($ju);
        //foreach($ju as $k=>$v){
        //    echo addslashes($v);
        //}
    }
?>