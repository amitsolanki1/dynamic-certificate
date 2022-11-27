<?php
//  $con=mysqli_connect("localhost","organ552_kpi","Organkpi@123","organ552_kpi") or die("connection unsuccess");
//  $con=mysqli_connect("localhost","root","","organ552_kpi") or die("connection unsuccess");

//  $res=mysqli_query($con,"Select * from student where status=0 limit 1");
//  if(mysqli_num_rows($res)>0){
    // header("content-type:image/jpg");

    $font="F:/xampp/htdocs/certificate/AGENCYR.TTF";
    $image= imagecreatefromjpeg("certificate.jpg");
    $color=imagecolorallocate($image,0,0,0);
    // while($row=mysqli_fetch_assoc($res)){
        // $name=$row['name'];
        $name="Amit Solanki ";
        imagettftext($image,60,0,800,1270,$color,$font,$name);
        $ref_number="LF/".date('Y/m/d').time();
        imagettftext($image,40,0,350,740,$color,$font,$ref_number);
        imagettftext($image,45,0,1770,700,$color,$font,date('Y-M-d'));
        $start_date=date_format(date_create('-90 days'),"d/M/Y")."  To  ".date('d/M/Y');
        imagettftext($image,40,0,1500,1470,$color,$font,$start_date);
        imagejpeg($image,"certificate-".time()."-".$name.".jpg");
        imagedestroy($image);
        // mysqli_query($con,"update student set status=1 where id='".$row['id']."'");
    // }
//  }
?>