<script src="<?php echo e(asset('js/app.js')); ?>"></script>

<script>
	    $('.docs-sidebar>.nav>li>a').click(function() {
        $('.docs-sidebar>.nav>li>a').removeClass('selected');
        $('.docs-sidebar>.nav>li>.nav>li>a').removeClass('selected');
        $('.docs-sidebar>.nav>li>.nav>li>.nav>li>a').removeClass('selected');
        $(this).addClass('selected');
        //alert($(this).hasClass( "selected" ).toString());
    });
	    $('.docs-sidebar>.nav>li>.nav>li>a').click(function() {
        $('.docs-sidebar>.nav>li>.nav>li>a').removeClass('selected');
        $('.docs-sidebar>.nav>li>a').removeClass('selected');
        $('.docs-sidebar>.nav>li>.nav>li>.nav>li>a').removeClass('selected');
        $(this).addClass('selected');
        //alert($(this).hasClass( "selected" ).toString());
    });

	    $('.docs-sidebar>.nav>li>.nav>li>.nav>li>a').click(function() {
        $('.docs-sidebar>.nav>li>.nav>li>.nav>li>a').removeClass('selected');
        $('.docs-sidebar>.nav>li>.nav>li>a').removeClass('selected');
        $('.docs-sidebar>.nav>li>a').removeClass('selected');
        $(this).addClass('selected');
        //alert($(this).hasClass( "selected" ).toString());
    });
</script>
