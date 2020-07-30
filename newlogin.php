<?php
require('config.php');

global $DB;
$name=$_REQUEST['username'];
$password=$_REQUEST['password'];
$url=$_REQUEST['url'];
$res=$_REQUEST['ref'];
$dashboard = $CFG->wwwroot;
$user = authenticate_user_login($name, $password);


if($user)
{
   
    
    $sql='SELECT * FROM mdl_user WHERE username="'.$name.'"';
   
    $user1 = $DB->get_record_sql($sql);


if($user1->lastlogin==0){

 $sqlof='SELECT * FROM mdl_user_info_category WHERE name="Other fields"';
$sqlofr = $DB->get_record_sql($sqlof);



 echo $sqlofd='SELECT * FROM mdl_user_info_data WHERE userid='.$user1->id.' and fieldid='.$sqlofr->id.' ';
$sqlofrd = $DB->get_record_sql($sqlofd);
if($sqlofrd){

/*update the the field of user */
 echo  $sqlup='update mdl_user_info_data set userid='.$user1->id.' , fieldid='.$sqlofr->id.' , data="'.$url.'" where userid='.$user1->id.' and fieldid='.$sqlofr->id.'';
 
 $DB->execute($sqlup);
/*end of updating the other field */
}
else
{
/*update the the field of user */
   $sqlup='insert into mdl_user_info_data  (userid,fieldid,data) values ('.$user1->id.','.$sqlofr->id.',"'.$url.'")';
 
 $DB->execute($sqlup);
/*end of updating the other field */
}

    
}


 if(complete_user_login($user))
 {
    

 $urltogo= $CFG->wwwroot.'/dashboard/';


 redirect($urltogo);
 }
    
}

else
{
   $urltogo= $res."?errorcode=3";
//echo $urltogo;

redirect($urltogo);
    
}





?>