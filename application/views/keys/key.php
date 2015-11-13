<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <?php $this->load->view('./common/head'); ?>
</head>
<body>
<div class="jumbotron-play">
    <div class="canvas" id="canvas">
    </div>
</div>
</body>
</html>

<script>
    $(document).ready(function () {
        var keys = '';
        var count = 51;
        for (var i = 1; i < count; i++) {
            keys += '<div class="col">' + '<div class="bar" style="height:' + (parseInt(Math.random() * 40) + 20 ) + '%;"></div></div>';
        }
        $('#canvas').html(keys);
    });
</script>