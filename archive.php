<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

  <div class="blog container"> 
   <div class="row"> 
    <div class="blog-main col-sm-12 col-md-9"> 
      <ol class="breadcrumb hidden-lg hidden-md hidden-sm">
  <li class="hidden-xs"><a href="/">博客首页</a></li>
  <li>
<?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('搜索 %s 关键词下的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('作者 %s 发布文章')
        ), '', ''); ?><?php if ($this->
_currentPage > 1)
    echo ' - 第 ' . $this->_currentPage . ' 页' ; ?>
  </li>
</ol>
     <?php while($this->next()): ?>

     <article id="blog-7110" class="post" itemscope="" itemtype="http://schema.org/BlogPosting"> 
      <div class="blog-node media "> 
       <h2 class="title yahei" itemprop="name headline"><a itemtype="url" href="<?php $this->permalink() ?>" title="<?php $this->title() ?>" target="_blank"><?php $this->sticky(); $this->title(); ?></a></h2> 
       <div class="blog-timg media-left">
<?php if($this->options->slimg && 'guanbi'==$this->options->slimg): ?>
<?php else: ?>
<?php if($this->options->slimg && 'showoff'==$this->options->slimg): ?><a href="<?php $this->permalink() ?>" ><?php showThumbnail($this); ?></a>
<?php else: ?>
<a href="<?php $this->permalink() ?>" title="<?php $this->title() ?>" target="_blank"> <img src="<?php showThumbnail($this); ?>" /> </a>
<?php endif; ?>
        <?php endif; ?>
       </div> 
       <div class="media-body">
         <?php $this->excerpt(250); ?> 
        <div class="tags">
         <?php $this->tags('', true); ?>
         <a href="<?php $this->permalink() ?>" class="pull-right"><span class="glyphicon glyphicon-time" aria-hidden="true"></span> <time datetime="<?php $this->date('Y-m-d'); ?>" itemprop="datePublished"><?php $this->date('Y-m-d'); ?></time></a>
        </div> 
       </div> 
      </div> 
     </article> 
     <?php endwhile; ?>
     <nav class="blog-nav"> 

<?php $this->pageLink('<x aria-label="Previous" class="btn btn-inverse btn-lage pull-left">上一页</x>','prev');?>

      <a href="" class="btn btn-inverse" disabled="disabled">第 <?php if($this->_currentPage>1) echo $this->_currentPage;  else echo 1;?> 页 / 共 <?php echo   ceil($this->getTotal() / $this->parameter->pageSize); ?> 页</a> 

 <?php $this->pageLink('<x aria-label="Next" class="btn btn-inverse btn-lage pull-right">下一页</x>','next');?>

     </nav> 
    </div> 
    <div class="blog-sidebar col-sm-12 col-md-3"> 
<?php $this->need('sidebar.php'); ?>
    </div> 
   </div> 
  </div> 
  <?php $this->need('footer.php'); ?>