<?php
include("header.php");
?>

<div class= "signupform">
    
    <?php
    if(isset($_REQUEST['status']))
    {
        echo"<div class='responseMsg'>";
            if($_REQUEST['status']==2)
            {
                echo("*User name already Exist!!! Choose new Username*");
            }
        echo"</div>";  //end of responseMsg
    }
    ?>
    
    <form method="post" action="insertUser.php">
        <table>
            <tr> <td> NAME </td> <td> <input type="text" name="txtName"> </td> </tr>
            <tr> <td> EMAIL ADDRESS </td> <td> <input type="text" name="txtEmail"> </td> </tr>
            <tr> <td> MOBILE NO. </td> <td> <input type="text" name="txtMobile"> </td> </tr>
            <tr> <td> USERNAME </td> <td> <input type="text" name="txtUsername"> </td> </tr>
            <tr> <td> PASSWORD </td> <td> <input type="password" name="txtPassword"> </td> </tr>
            <tr> <td style="text-align:center"> <input type="submit" name="Submit" value="OK"> </td> <td> <input type="reset" name="Cancel" value="CANCEL"> </td> </tr>
            </table>
    </form>    
            <a href="Login.php">Already have an account? Login </a>     
</div><!--end of signupform-->

<?php
include("footer.php");
?>

