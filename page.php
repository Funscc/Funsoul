<?php if(!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
  <div class="blog container">
    <div class="row">
      <div class="blog-main col-sm-12 col-md-9">
        <article>
          <h1 class="op-title yahei"><?php $this->title() ?></h1>
          <div class="blog-content">
<?php $this->content(); ?>
  <div class="alert-last alert alert-success alert-dismissible hidden-xs hidden-sm" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> </button><?php $this->options->Ptag2() ?>
  </div>
  <div class="alert alert-info alert-dismissible hidden-xs hidden-sm" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></button><?php $this->options->Ptag2() ?>
  </div>
 <?php if (!empty($this->options->sidebarBlock) && in_array('ShowPa1Ad', $this->options->sidebarBlock)): ?>
   <div class="idc4 idc">
     <a href="<?php $this->options->Pa1Url() ?>" target="_blank" rel="external nofloow"><img src="<?php $this->options->Pa1File() ?>"></a>
   </div>
<?php endif; ?>
  </div>
  </div>
  <div class="blog-sidebar col-sm-12 col-md-3">
<?php $this->need('sidebar.php'); ?>
  </div>
  </div>
  </div>
<?php $this->need('footer.php'); ?>
