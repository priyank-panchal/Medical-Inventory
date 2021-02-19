<?php
include'model/model.php';
$obj=new models();
$opas=$val1="";
$npas=$val2="";
$n2pas=$val3="";
$n=true;
session_start();        

if(isset($_REQUEST['sub']))
{
    if(empty($_REQUEST['opas']))
    {
        $n=false;
        $val1="filed is empty";
    }
    else
    {
    $opas=$_REQUEST['opas'];    
    }
    if(empty($_REQUEST['npas']))
    {
        $n=false;
        $val2="Filed is empty";
    }   
    else
    {
    $npas=$_REQUEST['npas'];
    $upper=preg_match('@[A-Z]@',$npas);
    $lower=preg_match('@[a-z]@',$npas);
    $number=preg_match('@[0-9]@',$npas);
    $special=preg_match('@[^\w]@',$npas);
    if(!$upper ||!$lower ||!$number ||!$special ||strlen($npas)<8)
    {
        $n=false;
        $val2='Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.';
    }
}

    if(empty($_REQUEST['n2pas']))
    {
        $n=false;
        $val3="Filed is empty";

    }
    else
    {
        $n2pas=$_REQUEST['n2pas'];
        $upper2=preg_match('@[A-Z]@',$n2pas);
        $lower2=preg_match('@[a-z]@',$n2pas);
        $number2=preg_match('@[0-9]@',$n2pas);
        $special2=preg_match('@[^\w]@',$n2pas);
            if(!$upper2 ||!$lower2 ||!$number2 ||!$special2 ||strlen($n2pas)<8)
        {
            $n=false;
            $val3='Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.';
    }       
    }

    if($n==true)
    {
        $sid=$_SESSION["suplogin"];
        $usel=array("sup_id"=>$sid);
        $uval=$obj->selectid($v,"supplier",$usel);
        $userpa=$uval->password;
        if($userpa==$opas)
        {
            if($npas==$n2pas)
            {
                $udata=array("password"=>$npas);
                $success=$obj->update($v,"supplier",$udata,$uval);
                if($success==true)
                {
                ?>
                <script type="text/javascript">
                    alert("password updated");
                    window.location="sup_changepassword.php";
                </script>
                <?php 
                }
            }
            else
            {
                ?>
            <script>alert("New Password and Conform password Not match");</script>
            <?php 
            }
        }
        else
        {
            ?>
            <script>alert("Old Password  Not Match");</script>
            <?php 
        }
    }
} 
?>