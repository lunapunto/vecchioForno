<?php
require_once('functions.php');
?>
<!-- Input helpers -->
<input type="hidden" name="ajaxurl" id="ajaxurl" value="<?= dir.'/ajax';?>"/>
<input type="hidden" name="dir" id="dir" value="<?= dir;?>"/>

</div><!-- #wrapper-->

<script type="text/javascript">
  $(window).on('load', function(){
    $('#loader').fadeOut(200);
    $('body').addClass('loaded');
  });
</script>

</body>
</html>
