<?php
 
if(isset($_COOKIE['micookie']) || isset($_COOKIE['unyear']) ){
    unset($_COOKIE['micookie']);
    setcookie('micookie','',time()-100);
    setcookie('unyear','',time()-100);


}

header('Location:vercookie.php');