<?php 
$demo="file.txt";
function reading($demo){
    if (file_exists($demo)) {
        $data=file_get_contents($demo);
        echo $data;
    }
}
// reading($demo);
function writing($demo,$id,$name,$sal){
    $data="$id,$name,$sal";
    file_put_contents($demo,array($id,$name,$sal));
    echo $data;
}
// writing($demo,1,'tom',12000);

function append($demo,$id,$name,$sal){
    $data="$id:$name:$sal";
    file_put_contents($demo,array($id,$name,$sal),FILE_APPEND);
    echo $data;
}
// append($demo,2,'jerry',13000);
function delete($demo){
    if (file_exists($demo)) {
        unlink($demo);
        echo "file deleted";
    }else{
        echo "not found";
    }
}
delete($demo);
?>