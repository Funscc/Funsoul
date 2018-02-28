<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php if (!empty($this->options->sidebarBlock) && in_array('ShowFootAd', $this->options->sidebarBlock)): ?>
  <div class="idc2 idc container-fluid"> 
   <div class="container"> 
    <a href="<?php $this->options->ShowFootAdUrl()?>" target="_blank" rel="external nofloow"><img src="<?php $this->options->ShowFootAdFile()?>" /></a> 
   </div> 
  </div> 
<?php endif; ?>
<div class="foot container-fluid"> 
   <div class="container"> 
    <div class="row footer"> 
     <div class="foot-about col-xs-12 col-md-6 col-lg-7"> 
      <div class="footer-about"> 
       <h3 class="footer-title yahei">网站声明</h3> 
       <p class="footer-txt-1"><?php $this->options->description() ?></p> 
       <p class="footer-txt-2">神武手游论坛：<a href="#" target="_blank">http://i.funs.cc</a> 回音音乐：<a href="#" class="last" target="_blank">https://www.echoo.cc</a></p> 
       <p class="footer-txt-3"><img src="<?php $this->options->themeUrl('picture/logo.jpg'); ?>" /></p> 
       <p class="footer-txt-4">建站: <span class="btime"><?php echo round((time() -   1438617600) / 86400); ?>天</span> - <a href="http://www.miitbeian.gov.cn/" target="_blank" rel="external nofollow">备案不存在的.这辈子是不可能备案的</a></p> 
      </div> 
     </div> 
 
     <div class="foot-cloud col-md-6 col-lg-5"> 
      <div class="tag-cloud footer-banner"> 
       <h3 class="footer-title yahei">最新反馈</h3> 
       <ul> 
       <?php $this->widget('Widget_Comments_Recent')->to($comments); ?>
            <?php while($comments->next()): ?>
                <li><a href="<?php $comments->permalink(); ?>"><?php $comments->author(false); ?></a>: <?php $comments->excerpt(35, '...'); ?></li>
                <?php endwhile; ?>
       </ul> 
      </div> 
     </div>
    </div> 
   </div> 
  </div> 
  <div class="modal fade" id="mySearch" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"> 
   <div class="modal-dialog-search modal-dialog"> 
    <div class="modal-content"> 
     <div class="modal-header"> 
      <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button> 
      <h4 class="modal-title yahei" id="myModalLabel">文章搜索</h4> 
     </div> 
     <form id="top-search" method="post" action="" role="search"> 
      <div class="modal-body"> 
       <input type="text" name="s" class="form-control" placeholder="请输入搜索关键词" /> 
      </div> 
      <div class="modal-footer"> 
       <button type="button" class="btn btn-default" data-dismiss="modal">CLOSE</button> 
       <button type="button submit" class="btn btn-primary">SEARCH</button> 
      </div> 
     </form> 
    </div> 
   </div> 
  </div>   
 </body>
</html>