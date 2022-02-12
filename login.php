<?php 
    $filepath = realpath(dirname(__FILE__));
    include_once $filepath."/inc/header.php";
?>

            <?php 
               if($_SERVER['REQUEST_METHOD'] == 'POST' AND isset($_POST['shout'])){
                   
               }
            ?>
            <div class="shoutfrom clear">
                <form action="" method="post">
                    <table>
                        <tr>
                            <td>Email</td>
                            <td><input type="text" name="name" required="1" placeholder="Enter your email address"></td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td><input type="text" name="body" required="1" placeholder="Enter your password"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" name="login" value="Login"></td>
                        </tr>
                    </table>
                </form>
            </div>
<?php 
    $filepath = realpath(dirname(__FILE__));
    include_once $filepath."/inc/footer.php";
?>