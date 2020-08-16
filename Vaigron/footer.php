<!-- @swap1210
madde logout button here and also using session varable to get user name of the current user
-->

<div id="footer" >
<div class="d-flex justify-content-between">
<div>Developed by Siddhi Patel</div>
<div>
        <?php  
            if (isset($_SESSION["user_det"]["uname"])) {
                echo '<a href="logout.php">logout ('.$_SESSION["user_det"]["uname"].')</a>';
            }else{
                echo '<a href="Login.php">Already have an account? Login </a>';
            }
        ?>
</div>
</div><!--end of footer-->

</body>
</html>

