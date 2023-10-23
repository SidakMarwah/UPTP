<?php
use SimpleExcel\SimpleExcel;

if(isset($_POST['import'])){

if(move_uploaded_file($_FILES['excel_file']['tmp_name'],$_FILES['excel_file']['name'])){
    require_once('SimpleExcel/SimpleExcel.php'); 
    
    $excel = new SimpleExcel('csv');                  
    
    $excel->parser->loadFile($_FILES['excel_file']['name']);           
    
    $foo = $excel->parser->getField(); 

    $count = 1;
    $db = mysqli_connect('localhost','root','','hack');

    while(count($foo)>$count){
        $p_id = $foo[$count][0];
        $name = $foo[$count][1];
        $contact = $foo[$count][2];
        $problem
 = $foo[$count][3];
		$progress
 = $foo[$count][4];
		$by_hid
 = $foo[$count][5];
		$docs
 = $foo[$count][6];
		$story
 = $foo[$count][7];

        $query = "INSERT INTO prob (p_id,name,contact,problem,progress,by_hid,docs,story



) ";
        $query.="VALUES ('$p_id','$name','$contact','$problem','$progress','$by_hid','$docs','$story
')";
        mysqli_query($db,$query);
        $count++;
    }

    echo "<script>window.location.href='index.php';</script>";
               
    
    
               
    
    
}
   
    
    
}
?>