<?php
include('./views/HeaderView.php');

if(isset($_SESSION['login'])){
    //User menu
    include('./Views/MenuUserView.html');
} else {
    //Default menu
    include('./Views/MenuHomeView.html');
}
?>
<body>
    <div id="Main-content-box">
    <?php echo $contentPage; ?>
    </div>';
<?php
    if(!isset($_SESSION['login'])){
        include('./Views/LeftSider.php');
    }
?>
</body>
<?php
//Default Footer
include('./Views/FooterView.html');