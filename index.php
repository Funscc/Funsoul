<?php
/**
 * Funs.cc 
 * 
 * @package Funsoul
 * @author Funsoul
 * @version 1.0
 * @link http://Funs.cc
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
?>

<?php

/** 文章置顶 */
$sticky = $sticky = $this->options->sticky; //置顶的文章cid，按照排序输入, 请以半角逗号或空格分隔
if($sticky && $this->is('index') || $this->is('front')){
    $sticky_cids = explode(',', strtr($sticky, ' ', ','));//分割文本 
    $sticky_html = "<span style='color:red'>[置顶] </span>"; //置顶标题的 html
    $db = Typecho_Db::get();
    $pageSize = $this->options->pageSize;
    $select1 = $this->select()->where('type = ?', 'post');
    $select2 = $this->select()->where('type = ? && status = ? && created < ?', 'post','publish',time());
    //清空原有文章的列队
    $this->row = [];
    $this->stack = [];
    $this->length = 0;
    $order = '';
    foreach($sticky_cids as $i => $cid) {
        if($i == 0) $select1->where('cid = ?', $cid);
        else $select1->orWhere('cid = ?', $cid);
        $order .= " when $cid then $i";
        $select2->where('table.contents.cid != ?', $cid); //避免重复
    }
    if ($order) $select1->order(null,"(case cid$order end)"); //置顶文章的顺序 按 $sticky 中 文章ID顺序
    if ($this->_currentPage == 1) foreach($db->fetchAll($select1) as $sticky_post){ //首页第一页才显示
        $sticky_post['sticky'] = $sticky_html;
        $this->push($sticky_post); //压入列队
    }
$uid = $this->user->uid; //登录时，显示用户各自的私密文章
    if($uid) $select2->orWhere('authorId = ? && status = ?',$uid,'private');
    $sticky_posts = $db->fetchAll($select2->order('table.contents.created', Typecho_Db::SORT_DESC)->page($this->_currentPage, $this->parameter->pageSize));
    foreach($sticky_posts as $sticky_post) $this->push($sticky_post); //压入列队
    $this->setTotal($this->getTotal()-count($sticky_cids)); //置顶文章不计算在所有文章内
}

?>

  <div class="blog container"> 
   <div class="row"> 
    <div class="blog-main col-sm-12 col-md-9"> 
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
         <?php $this->tags(' ', true); ?>
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