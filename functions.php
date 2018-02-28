<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
function themeConfig($form) {
//置顶文章CID
    $sticky = new Typecho_Widget_Helper_Form_Element_Text('sticky', NULL, 99, _t('置顶文章'), _t('在这里填入一个你想指定的文章CID'));
    $form->addInput($sticky);
//文章底部说明
    $Ptag = new Typecho_Widget_Helper_Form_Element_Text('Ptag1', NULL, NULL, _t('文章和页面正文底部说明文字1'), _t('在这里填入显示文字/支持Html'));
    $form->addInput($Ptag);
    $Ptag = new Typecho_Widget_Helper_Form_Element_Text('Ptag2', NULL, NULL, _t('文章和页面正文底部说明文字2'), _t('在这里填入显示文字/支持Html'));
    $form->addInput($Ptag);
//顶部广告
    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('adFile', NULL, NULL, _t('顶部Banner广告'), _t('在这里填入一个图片URL地址'));
    $form->addInput($logoUrl);
    $adUrl = new Typecho_Widget_Helper_Form_Element_Text('adUrl', NULL, NULL, _t('顶部Banner广告链接'), _t('在这里填入一个链接地址'));
    $form->addInput($adUrl);
//底部广告
    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('ShowFootAdFile', NULL, NULL, _t('首页底部Banner广告'), _t('在这里填入一个图片URL地址'));
    $form->addInput($logoUrl);
    $adUrl = new Typecho_Widget_Helper_Form_Element_Text('ShowFootAdUrl', NULL, NULL, _t('首页底部Banner广告链接'), _t('在这里填入一个链接地址'));
    $form->addInput($adUrl);
//文章正文底部广告
    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('P1File', NULL, NULL, _t('Post正文底部广告'), _t('在这里填入一个图片URL地址'));
    $form->addInput($logoUrl);
    $adUrl = new Typecho_Widget_Helper_Form_Element_Text('P1Url', NULL, NULL, _t('Post正文底部广告链接1'), _t('在这里填入一个链接地址'));
    $form->addInput($adUrl);
//页面正文底部广告
    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('Pa1File', NULL, NULL, _t('Page正文底部广告1'), _t('在这里填入一个图片URL地址'));
    $form->addInput($logoUrl);
    $adUrl = new Typecho_Widget_Helper_Form_Element_Text('Pa1Url', NULL, NULL, _t('Page正文底部广告链接1'), _t('在这里填入一个链接地址'));
    $form->addInput($adUrl);
//侧边栏广告
    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('Sidebar1File', NULL, NULL, _t('侧边栏广告1'), _t('在这里填入一个图片URL地址'));
    $form->addInput($logoUrl);
    $adUrl = new Typecho_Widget_Helper_Form_Element_Text('Sidebar1Url', NULL, NULL, _t('侧边栏广告链接1'), _t('在这里填入一个链接地址'));
    $form->addInput($adUrl);
    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('Sidebar2File', NULL, NULL, _t('侧边栏广告2'), _t('在这里填入一个图片URL地址'));
    $form->addInput($logoUrl);
    $adUrl = new Typecho_Widget_Helper_Form_Element_Text('Sidebar2Url', NULL, NULL, _t('侧边栏广告链接2'), _t('在这里填入一个链接地址'));
    $form->addInput($adUrl);
    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('Sidebar3File', NULL, NULL, _t('侧边栏广告3'), _t('在这里填入一个图片URL地址'));
    $form->addInput($logoUrl);
    $adUrl = new Typecho_Widget_Helper_Form_Element_Text('Sidebar3Url', NULL, NULL, _t('侧边栏广告链接3'), _t('在这里填入一个链接地址'));
    $form->addInput($adUrl);
    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('Sidebar4File', NULL, NULL, _t('侧边栏广告4'), _t('在这里填入一个图片URL地址'));
    $form->addInput($logoUrl);
    $adUrl = new Typecho_Widget_Helper_Form_Element_Text('Sidebar4Url', NULL, NULL, _t('侧边栏广告链接4'), _t('在这里填入一个链接地址'));
    $form->addInput($adUrl);
    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('Sidebar5File', NULL, NULL, _t('侧边栏广告5'), _t('在这里填入一个图片URL地址'));
    $form->addInput($logoUrl);
    $adUrl = new Typecho_Widget_Helper_Form_Element_Text('Sidebar5Url', NULL, NULL, _t('侧边栏广告链接5'), _t('在这里填入一个链接地址'));
    $form->addInput($adUrl);
    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('Sidebar6File', NULL, NULL, _t('侧边栏广告6'), _t('在这里填入一个图片URL地址'));
    $form->addInput($logoUrl);
    $adUrl = new Typecho_Widget_Helper_Form_Element_Text('Sidebar6Url', NULL, NULL, _t('侧边栏广告链接6'), _t('在这里填入一个链接地址'));
    $form->addInput($adUrl);
    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('Sidebar7File', NULL, NULL, _t('侧边栏广告7'), _t('在这里填入一个图片URL地址'));
    $form->addInput($logoUrl);
    $adUrl = new Typecho_Widget_Helper_Form_Element_Text('Sidebar7Url', NULL, NULL, _t('侧边栏广告链接7'), _t('在这里填入一个链接地址'));
    $form->addInput($adUrl);
    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('Sidebar8File', NULL, NULL, _t('侧边栏广告8'), _t('在这里填入一个图片URL地址'));
    $form->addInput($logoUrl);
    $adUrl = new Typecho_Widget_Helper_Form_Element_Text('Sidebar8Url', NULL, NULL, _t('侧边栏广告链接8'), _t('在这里填入一个链接地址'));
    $form->addInput($adUrl);
    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('Sidebar9File', NULL, NULL, _t('侧边栏广告9'), _t('在这里填入一个图片URL地址'));
    $form->addInput($logoUrl);
    $adUrl = new Typecho_Widget_Helper_Form_Element_Text('Sidebar9Url', NULL, NULL, _t('侧边栏广告链接9'), _t('在这里填入一个链接地址'));
    $form->addInput($adUrl);
//后台开启关闭隐藏显示设置
    $sidebarBlock = new Typecho_Widget_Helper_Form_Element_Checkbox('sidebarBlock',
    array('ShowHeadAd' => _t('显示顶部广告'),
    'ShowFootAd' => _t('显示首页底部广告'),
    'ShowP1Ad' => _t('显示Post正文底部广告'),
    'ShowPa1Ad' => _t('显示Page正文底部广告'),
    'ShowSidebarAd1' => _t('显示侧边栏广告1'),
    'ShowSidebarAd2' => _t('显示侧边栏广告2'),
    'ShowSidebarAd3' => _t('显示侧边栏广告3'),
    'ShowSidebarAd4' => _t('显示侧边栏广告4'),
    'ShowSidebarAd5' => _t('显示侧边栏广告5'),
    'ShowSidebarAd6' => _t('显示侧边栏广告6'),
    'ShowSidebarAd7'=>  _t('显示侧边栏广告7'),
    'ShowSidebarAd8' => _t('显示侧边栏广告8'),
    'ShowSidebarAd9' => _t('显示侧边栏广告9')),
    array('ShowHeadAd','ShowFootAd', 'ShowP1Ad', 'ShowPa1Ad','ShowSidebarAd1','ShowSidebarAd2', 'ShowSidebarAd3', 'ShowSidebarAd4','ShowSidebarAd5', 'ShowSidebarAd6', 'ShowSidebarAd7', 'ShowSidebarAd8', 'ShowSidebarAd9'), _t('侧边栏显示'));
    $form->addInput($sidebarBlock->multiMode());
//文章略缩图
$slimg = new Typecho_Widget_Helper_Form_Element_Select('slimg', array(
        'showon'=>'有图文章显示缩略图，无图文章随机显示缩略图',
        'Showimg' => '有图文章显示缩略图，无图文章只显示一张固定的缩略图',
        'showoff' => '有图文章显示缩略图，无图文章则不显示缩略图',
        'allsj' => '所有文章一律显示随机缩略图',
        'guanbi' => '关闭所有缩略图显示'
    ), 'showon',
    _t('缩略图设置'), _t('默认选择“有图文章显示缩略图，无图文章随机显示缩略图”'));
    $form->addInput($slimg->multiMode());
}

// 文章略缩图详细配置
function themeFields($layout) {
    $thumb = new Typecho_Widget_Helper_Form_Element_Text('thumb', NULL, NULL, _t('自定义缩略图'), _t('输入缩略图地址(仅文章有效)'));
    $layout->addItem($thumb);
}
/** 输出文章缩略图 */
function showThumbnail($widget)
{
    // 当文章无图片时的默认缩略图
    $dir = './usr/themes/Funsoul/img/sj/';//随机缩略图目录
    $n=sizeof(scandir($dir))-2;
    if($n <= 0){
    $n=3;
    }// 异常处理，干掉自动判断图片数量的功能，切换至手动
    $rand = rand(1,$n);
    // 随机 n张缩略图

    $random = $widget->widget('Widget_Options')->themeUrl . '/img/sj/' . $rand . '.jpg'; // 随机缩略图路径
if(Typecho_Widget::widget('Widget_Options')->slimg && 'Showimg'==Typecho_Widget::widget('Widget_Options')->slimg
){
  $random = $widget->widget('Widget_Options')->themeUrl . '/img/mr.png'; //无图时只显示固定一张缩略图
}

$cai = '';//这里可以添加图片后缀，例如七牛的缩略图裁剪规则，这里默认为空
    $attach = $widget->attachments(1)->attachment;
    $pattern = '/\<img.*?src\=\"(.*?)\"[^>]*>/i';
  $patternMD = '/\!\[.*?\]\((http(s)?:\/\/.*?(jpg|png))/i';
    $patternMDfoot = '/\[.*?\]:\s*(http(s)?:\/\/.*?(jpg|png))/i';
if (preg_match_all($pattern, $widget->content, $thumbUrl)) {
$ctu = $thumbUrl[1][0].$cai;
    }

//如果是内联式markdown格式的图片
  else   if (preg_match_all($patternMD, $widget->content, $thumbUrl)) {
$ctu = $thumbUrl[1][0].$cai;
    }
    //如果是脚注式markdown格式的图片
    else if (preg_match_all($patternMDfoot, $widget->content, $thumbUrl)) {
$ctu = $thumbUrl[1][0].$cai;
    }

 else
if ($attach && $attach->isImage) {

$ctu = $attach->url.$cai;
    }
else

if ($widget->tags) {
foreach ($widget->tags as $tag) {

    $ctu = './usr/themes/Funsoul/img/tag/' . $tag['slug'] . '.jpg';

    if(is_file($ctu))
    {
$ctu = $widget->widget('Widget_Options')->themeUrl . '/img/tag/' . $tag['slug'] . '.jpg';
    }
    else
 {
       $ctu = $random;
    }
break;
}
}
else {
$ctu = $random;
}
if(Typecho_Widget::widget('Widget_Options')->slimg && 'showoff'==Typecho_Widget::widget('Widget_Options')->slimg
){
if($widget->fields->thumb){$ctu = $widget->fields->thumb;}
if($ctu== $random)
echo '';
else
if($widget->is('post')||$widget->is('page')){
echo $ctu;
}else{
echo '<img src="'
.$ctu.
'">';
}
}else{
if($widget->fields->thumb){$ctu = $widget->fields->thumb;}
  if(!$widget->is('post')&&!$widget->is('page')){
if(Typecho_Widget::widget('Widget_Options')->slimg && 'allsj'==Typecho_Widget::widget('Widget_Options')->slimg
){$ctu = $random;}
}
echo $ctu;
}
}
//随机文章
function getRandomPosts($limit = 10){
    $db = Typecho_Db::get();
    $result = $db->fetchAll($db->select()->from('table.contents')
        ->where('status = ?','publish')
        ->where('type = ?', 'post')
        ->where('created <= unix_timestamp(now())', 'post')
        ->limit($limit)
        ->order('RAND()')
    );
    if($result){
        $i=1;
        foreach($result as $val){
            if($i<=3){
                $var = ' class="red"';
            }else{
                $var = '';
            }
            $val = Typecho_Widget::widget('Widget_Abstract_Contents')->push($val);
            $post_title = htmlspecialchars($val['title']);
            $permalink = $val['permalink'];
            echo '<li><a href="'.$permalink.'" title="'.$post_title.'" target="_blank">'.$post_title.'</a></li>';
            $i++;
        }
    }
}
//文章浏览统计
function get_post_view($archive)
{
    $cid    = $archive->cid;
    $db     = Typecho_Db::get();
    $prefix = $db->getPrefix();
    if (!array_key_exists('views', $db->fetchRow($db->select()->from('table.contents')))) {
        $db->query('ALTER TABLE `' . $prefix . 'contents` ADD `views` INT(10) DEFAULT 0;');
        echo 0;
        return;
    }
    $row = $db->fetchRow($db->select('views')->from('table.contents')->where('cid = ?', $cid));
    if ($archive->is('single')) {
       $db->query($db->update('table.contents')->rows(array('views' => (int) $row['views'] + 1))->where('cid = ?', $cid));
    }
    echo $row['views'];
}
