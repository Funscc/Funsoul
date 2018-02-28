<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
 <div id="comments" class="comme">
    <?php $this->comments()->to($comments); ?>
    <?php if ($comments->have()): ?>
        <?php $comments->listComments(); ?>
        <?php endif; ?>
        <?php if($this->allow('comment')): ?>
        <div id="<?php $this->respondId(); ?>" class="respond">
          <h4 id="response">Leave a Reply 
            <small><?php $comments->cancelReply(); ?></small>
          </h4>
          <p class="comments-note">如果您是第一次在本站留言，需要审核后才会显示内容！</p>
          <form method="post" action="<?php $this->commentUrl() ?>" id="comment-form" role="form">
                <div class="form-group1 form-group has-feedback">
                    <textarea rows="8" cols="50" name="text" id="textarea" class="form-control" 
                    placeholder="请输入评论内容" required=""><?php $this->remember('text'); ?></textarea>
                </div>
                <div class="form-group2 form-group has-feedback">
                    <input type="text" name="author" class="form-control" id="author" placeholder="昵称（必填）" 
                    aria-describedby="inputSuccess2Status" value="<?php $this->remember('author'); ?>" required> 
                    <span class="glyphicon glyphicon-user form-control-feedback" aria-hidden="true"></span> </div>
                <div class="form-group2 form-group has-feedback">
                    <input type="text" name="mail" class="form-control" id="mail" placeholder="邮件（支持Gravatar头像）" 
                      aria-describedby="inputSuccess2Status" value="<?php $this->remember('mail'); ?>"<?php if ($this->options->commentsRequireMail): ?> required<?php endif; ?>> 
                    <span class="glyphicon glyphicon-envelope form-control-feedback" aria-hidden="true"></span> </div>



<div class="form-group2 form-group has-feedback">
                    <input type="text" name="url" class="form-control" id="mail" placeholder="https://" 
                      aria-describedby="inputSuccess2Status" value="<?php $this->remember('url'); ?>"<?php if ($this->options->commentsRequireURL): ?> required<?php endif; ?>> 
                    <span class="glyphicon glyphicon-link form-control-feedback" aria-hidden="true"></span> </div>


                <button type="submit" class="btn-submit btn btn-primary btn-lg">提交评论</button>
                <?php $security = $this->widget('Widget_Security'); ?>
            <input type="hidden" name="_" value="<?php echo $security->getToken($this->request->getReferer())?>">
            </form>
        </div>
        <?php else: ?>
        <h3><?php _e('评论已关闭'); ?></h3>
        <?php endif; ?>
    </div>
</div>