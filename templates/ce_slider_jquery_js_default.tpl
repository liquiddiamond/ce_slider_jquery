<?php

/* 
 * This Contao module works thanks to
 * 
 * SlidesJs jQuery Slider script by Nathan Searles
 * 
 * Version 1.1.9 - Updated September 5th, 2011
 * 
 * http://slidesjs.com/
 * http://github.com/nathansearles/slides/
 * http://nathansearles.com/
 * 
 * Slides is licensed under the Apache license. http://www.apache.org/licenses/LICENSE-2.0
 * 
 */

/* 
 * Commented parameters are not supported correctly in the current release of the module
 */

?>

<script type="text/javascript">
    $(function(){
        $("#<?php echo $this->Container; ?>").slides({
<?php if($this->Preload): ?>
            preload: true,
            preloadImage: '<?php echo $this->PreloadImage; ?>',
<?php endif; ?>
<?php if($this->GenerateNextPrev): ?>
            generateNextPrev: true,
            next: '<?php echo $this->NextClass; ?>',
            prev: '<?php echo $this->PrevClass; ?>',
<?php endif; ?>
<?php if(!$this->Pagination): ?>
            pagination: <?php echo (($this->Pagination) ? 'true' : 'false' ); ?>,
            generatePagination: <?php echo ($this->GeneratePagination) ? 'true' : 'false'; ?>,
            paginationClass: '<?php echo $this->PaginationClass; ?>',
            currentClass: '<?php echo $this->CurrentClass; ?>',
<?php endif; ?>
            effect: '<?php echo $this->Effect; ?>',
            slideSpeed: <?php echo $this->SlideSpeed; ?>,
            slideEasing: '<?php echo $this->SlideEasing; ?>',
            fadeSpeed: <?php echo $this->FadeSpeed; ?>,
            fadeEasing: '<?php echo $this->FadeEasing; ?>',
            crossfade: <?php echo (($this->Crossfade) ? 'true' : 'false' ); ?>,
            start: <?php echo $this->Start; ?>,
            randomize: <?php echo (($this->Randomize) ? 'true' : 'false' ); ?>,
            play: <?php echo $this->Play; ?>,
            pause: <?php echo $this->Pause; ?>,
            hoverPause: <?php echo (($this->HoverPause) ? 'true' : 'false' ); ?>,
<?php if(!$this->AutoHeight): ?>
            autoHeight: <?php echo (($this->AutoHeight) ? 'true' : 'false' ); ?>,
            autoHeightSpeed: <?php echo (($this->AutoHeightSpeed) ? 'true' : 'false' ); ?>,
<?php endif; ?>
            bigTarget: <?php echo (($this->BigTarget) ? 'true' : 'false' ); ?>
        });
    });
</script>