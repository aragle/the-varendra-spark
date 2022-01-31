<?php
    include 'includes/pages/header.php';
?>
<style>
html body {
    width: 100%;
    height: 100%;
    padding: 0px;
    margin: 0px;
    overflow: hidden;
}

#preview-frame {
    width: 100%;
    background-color: #fff;
}
</style>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>
//function to fix height of iframe!
var calcHeight = function() {
    //var headerDimensions = 0; //$('#header-bar').height();
    $('#preview-frame').height($(window).height());
}

$(document).ready(function() {
    calcHeight();
    /*$('#header-bar a.close').mouseover(function() {
      $('#header-bar a.close').addClass('activated');
    }).mouseout(function() {
      $('#header-bar a.close').removeClass('activated');
    });*/
});

$(window).resize(function() {
    calcHeight();
}).load(function() {
    calcHeight();
});
</script>

<iframe id="preview-frame" src="http://202.5.52.152:8083/" name="preview-frame" frameborder="0" noresize="noresize"
    style="height: 902px;">
</iframe>

<?php
    include 'includes/pages/footer.php';
?>