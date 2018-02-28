 <?php if(!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<div class="blog container">
  <div class="row">
    <div class="blog-main col-sm-12 col-md-9">
      <article>
        <h1 class="op-title yahei"><?php $this->title() ?><br/><small><span class="glyphicon1 glyphicon glyphicon-time" aria-hidden="true"></span> <?php $this->date('F j, Y'); ?> <span class="glyphicon2 glyphicon glyphicon-eye-open hidden-xs" aria-hidden="true"></span><span class="hidden-xs">阅读<?php get_post_view($this) ?>次
</span><a href="#comments" class="hidden-sm hidden-xs"><span class="glyphicon2 glyphicon glyphicon-fire" aria-hidden="true"></span> <?php echo $this->commentsNum(); ?>条评价</a><a href="#comments" class="hidden-sm hidden-xs"><span class="glyphicon2 glyphicon glyphicon-pencil" aria-hidden="true"></span> 我来吐槽</a><span class="glyphicon2 glyphicon glyphicon-tag" aria-hidden="true"><?php $this->tags(', ', true, 'none'); ?></small></h1>
        <div class="blog-content">
          <?php $this->content(); ?>
          <div class="alert-last alert alert-success alert-dismissible hidden-xs hidden-sm" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><?php $this->options->Ptag1() ?>
          </div>
          <div class="alert alert-info alert-dismissible hidden-xs hidden-sm" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><?php $this->options->Ptag2() ?>
          </div>
 <?php if (!empty($this->options->sidebarBlock) && in_array('ShowP1Ad', $this->options->sidebarBlock)): ?>
          <div class="idc4 idc">
            <a href="<?php $this->options->P1Url() ?>" target="_blank" rel="external nofloow"><img src="<?php $this->options->P1File() ?>"></a>
          </div>
<?php endif; ?>
        </div>
        <div class="comments">
        <?php $this->need('comments.php'); ?>
        </div>
      </article>
      <div class="blog-sidebar col-sm-12 col-md-3"> 
      <?php $this->need('sidebar.php'); ?>
      </div> 
        </div>
  </div>
    	
 <?php $this->need('footer.php'); ?>





 