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
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> 交流：小夜博客2000人QQ群：123456（<a href="#" target="_blank">快速加群链接</a> 或 <a href="<?php $this->options->themeUrl('/dist/img/qq.png'); ?>" target="_blank">手机QQ扫码</a>），口令：小夜2018。
          </div>
          <div class="alert alert-info alert-dismissible hidden-xs hidden-sm" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> 提醒：VPS月付+每日自动备份FTP（<a href="#" target="_blank">自动脚本</a>），防止一切不可控状况。数据是站长的命根子。
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