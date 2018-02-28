<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE html>
<html class="no-js" lang="zh-cmn-Hans">
 <head>
  <meta charset="<?php $this->options->charset(); ?>" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?>
  </title>
  <link href="<?php $this->options->themeUrl('css/bootstrap.min.css'); ?>" rel="stylesheet" />
  <link href="<?php $this->options->themeUrl('css/flat-ui.min.css'); ?>" rel="stylesheet" />
  <link href="<?php $this->options->themeUrl('css/vpsmm.2018.css'); ?>" rel="stylesheet" />
  <link rel="apple-touch-icon-precomposed" href="https://img.vpsmm.com/static/mm.jpg" sizes="114x114" />
  <?php $this->header('generator=&template='); ?>
  <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
  <!--[if lt IE 9]><script src="<?php $this->options->themeUrl('js/ie8-responsive-file-warning.js'); ?>"></script><![endif]-->
  <script src="<?php $this->options->themeUrl('js/ie-emulation-modes-warning.js'); ?>"></script>
  <!--[if lt IE 9]> <script src="<?php $this->options->themeUrl('js/html5shiv.min.js'); ?>"></script> <script src="<?php $this->options->themeUrl('js/respond.min.js'); ?>"></script> <![endif]-->
  <script src="<?php $this->options->themeUrl('js/jquery.min.js'); ?>"></script>
  <script src="<?php $this->options->themeUrl('js/bootstrap.min.js'); ?>"></script>
  <meta name="description" content="<?php $this->options->description() ?>" />
  <meta name="keywords" content="<?php $this->keywords('_'); ?>" />
 </head>
<body>
  <nav class="navbar navbar-default navbar-static-top">
   <div class="container">
    <div class="navbar-header">
     <a class="navbar-brand yahei" href="/">&lt;/&gt;<?php $this->options->title(); ?></a>
     <a class="nav-top hidden-sm hidden-lg hidden-md" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar" href="#"><span class="glyphicon glyphicon-tasks"></span></a>
     <a class="search-top hidden-sm hidden-lg hidden-md" data-toggle="modal" data-target="#mySearch" href="#"><span class="glyphicon glyphicon-search"></span></a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="<?php $this->options->siteUrl(); ?>">首页</a></li>
        <li>
<?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
<?php while($pages->next()): ?>
<a<?php if($this->is('page', $pages->slug)): ?> <?php endif; ?> href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a>
<?php endwhile; ?>
        </li>
<li<?php if ($this->is('category', 'typecho')): ?> class="active"<?php endif; ?>><a href="/typecho">Typecho</a></li>
      </ul>
      <ul class="nav navbar-nav2 navbar-nav navbar-right hidden-sm">
        <li><a href="#">投稿</a></li>
      </ul>
    </div>
    </div>
    </nav>
    <div class="idc1 idc hidden-xs container">
 <?php if (!empty($this->options->sidebarBlock) && in_array('ShowHeadAd', $this->options->sidebarBlock)): ?>
   <a href="<?php $this->options->adUrl() ?>" rel="external nofloow" target="_blank"><img src="<?php $this->options->adFile()?>" /></a> 
<?php endif; ?>
  </div>
