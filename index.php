<?php 
    $filepath = realpath(dirname(__FILE__));
    include_once $filepath."/inc/header.php";
?>
            <div class="box">
                <ul>
                    <?php 
                        $shouts = $shout->getAllData();
                        if($shouts){
                            while($result = $shouts->fetch_assoc()){
                    ?>
                    <li><span><?php echo $result['time']; ?> </span><b><?php echo $result['name']; ?></b> <?php echo $result['body']; ?></li>
                    <?php } ?>
                    <?php }else{
                        echo "<li>Not yet any conversation</li>";
                    } ?>
                </ul>
            </div>
            <?php 
               if($_SERVER['REQUEST_METHOD'] == 'POST' AND isset($_POST['shout'])){
                    $shouthData = $shout->insertData($_POST);
               }
            ?>
            <div class="shoutfrom clear">
                <form action="" method="post">
                    <table>
                        <tr>
                            <td>Name</td>
                            <td><input type="text" name="name" required="1" placeholder="Enter your name"></td>
                        </tr>
                        <tr>
                            <td>Message</td>
                            <td><input type="text" name="body" required="1" placeholder="Enter your message"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" name="shout" value="Shout It"></td>
                        </tr>
                    </table>
                </form>
            </div>
<?php 
    $filepath = realpath(dirname(__FILE__));
    include_once $filepath."/inc/footer.php";
?>