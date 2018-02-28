    
    <?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
     <div class="sidebar-idc-1"> 
    <?php if (!empty($this->options->sidebarBlock) && in_array('ShowSidebarAd1', $this->options->sidebarBlock)): ?>
      <h5 class="zunbt section-header yahei">向您推荐 // 中国速度</h5> 
      <div class="sidebar-idc-3">
       <a href="<?php $this->options->Sidebar1Url()?>" target="_blank" rel="external nofloow"><img src="<?php $this->options->Sidebar1File()?>" /></a>
      </div> 
<?php endif; ?>
     </div> 
     <div class="sidebar-search"> 
      <div class="form-group has-success has-feedback"> 
       <form id="search" method="post" class="clearfix">
        <label class="control-label sr-only" for="inputSuccess5">Hidden label</label> 
        <input type="text" class="form-control" id="inputSuccess5" aria-describedby="inputSuccess5Status" placeholder="输入关键词后回车" name="s" /> 
        <span class="glyphicon glyphicon-search form-control-feedback" aria-hidden="true"></span> 
        <span id="inputSuccess5Status" class="sr-only">(success)</span>
       </form> 
      </div> 
     </div> 
  
     <div class="sidebar-idc-1"> 
      <h5 class="section-header yahei"><?php _e('最新文章'); ?></h5> 
      <ul> 
       <?php $this->widget('Widget_Contents_Post_Recent')
                ->parse('<li><a href="{permalink}">{title}</a></li>'); ?>
      </ul> 
     </div> 
     
     <div class="sidebar-idc-2"> 
<?php if (!empty($this->options->sidebarBlock) && in_array('ShowSidebarAd2', $this->options->sidebarBlock)): ?>
     <h5 class="zunbt section-header yahei">Seo/Python学习</h5>
      <a href="<?php $this->options->Sidebar2Url()?>" target="_blank" rel="external nofloow"><img src="<?php $this->options->Sidebar2File()?> "/></a> 
   <?php endif; ?>
<?php if (!empty($this->options->sidebarBlock) && in_array('ShowSidebarAd3', $this->options->sidebarBlock)): ?>
      <a href="<?php $this->options->Sidebar3Url()?>" target="_blank" rel="external nofloow"><img src="<?php $this->options->Sidebar3File()?>" /></a> 
<?php endif; ?>
<?php if (!empty($this->options->sidebarBlock) && in_array('ShowSidebarAd4', $this->options->sidebarBlock)): ?>
      <a href="<?php $this->options->Sidebar4Url()?>" target="_blank" rel="external nofloow"><img src="<?php $this->options->Sidebar4File()?>" /></a> 
<?php endif; ?>
<?php if (!empty($this->options->sidebarBlock) && in_array('ShowSidebarAd5', $this->options->sidebarBlock)): ?>
      <a href="<?php $this->options->Sidebar5Url()?>" target="_blank" rel="external nofloow"><img src="<?php $this->options->Sidebar3File()?>" class="last" /></a> 
<?php endif; ?>
     </div> 
     <div class="sidebar-idc-1"> 
      <h5 class="section-header yahei">随机文章</h5> 
      <ul> 
       <?php getRandomPosts('10');?>
      </ul> 
     </div> 
     <div class="sidebar-idc-2"> 
    <?php if (!empty($this->options->sidebarBlock) && in_array('ShowSidebarAd6', $this->options->sidebarBlock)): ?>
      <a href="<?php $this->options->Sidebar6Url()?>" target="_blank" rel="external nofloow"><img src="<?php $this->options->Sidebar6File()?>" /></a> 
<?php endif; ?>
    <?php if (!empty($this->options->sidebarBlock) && in_array('ShowSidebarAd7', $this->options->sidebarBlock)): ?>
      <a href="<?php $this->options->Sidebar7Url()?>" target="_blank" rel="external nofloow"><img src="<?php $this->options->Sidebar7File()?>" /></a> 
<?php endif; ?>
    <?php if (!empty($this->options->sidebarBlock) && in_array('ShowSidebarAd8', $this->options->sidebarBlock)): ?>
      <a href="<?php $this->options->Sidebar8Url()?>" target="_blank" rel="external nofloow"><img src="<?php $this->options->Sidebar8File()?>" /></a> 
<?php endif; ?>
    <?php if (!empty($this->options->sidebarBlock) && in_array('ShowSidebarAd9', $this->options->sidebarBlock)): ?>
      <a href="<?php $this->options->Sidebar9Url()?>" target="_blank" rel="external nofloow"><img src="<?php $this->options->Sidebar9File()?>" class="last" /></a> 
<?php endif; ?>
     </div> 
     <div class="sidebar-idc-1"> 
      <h5 class="section-header yahei">友情链接</h5> 
     <ul>
        <?php
      Links_Plugin::output($myLink, 0);?>
      </ul>
     </div> 
