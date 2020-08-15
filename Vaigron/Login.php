<?php
include("header.php");
?>

<div class="signupform">
    
    <?php
    if(isset($_REQUEST['status'])) 
    {
        echo"<div class='responseMsg'>";
        if($_REQUEST['status']==1)
        {
            echo("Wrong User Name!!!");
        }
        else if($_REQUEST['status']==2)
        {
            echo("Wrong Password!!!");
        }
        echo"</div>";//end of responseMsg
    }
    
    ?>
    
    <form method="post" action="checkLogin.php">
        <table>
            
            <tr> <td> USERNAME </td> <td> <input type="text" name="txtUsername"> </td> </tr>
            <tr> <td> PASSWORD </td> <td> <input type="password" name="txtPassword"> </td> </tr>
            <tr> <td> <input type="submit" name="Submit" value="OK"> </td> <td> <input type="reset" name="Cancel" value="CANCEL"> </td> </tr>
            </table>
    </form>    
    <a href="Signup.php">Create a new account</a>     
</div><!--end of signupform-->

<?php
include("footer.php");
?>

