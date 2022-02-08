<div class="home">
    <div class='menu-name'>
        <h2> Features Posts </h2>
    </div>
    <div class='content'>
    <?php 
        for ($x = 0; $x < 12; $x++) {
            include 'card.php';
        }
    ?>
    </div>
    <div class='menu-name'>
        <h2> Trending Posts </h2>
    </div>
    <div class='content'>
    <?php 
        for ($x = 0; $x < 52; $x++) {
            include 'card.php';
        }
    ?>
    </div>
</div>
<div class='login-for-more'>
    Login for more features. Know more 
    <a href='#features'>about all features</a>.
</div>