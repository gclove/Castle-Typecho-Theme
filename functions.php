<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeConfig($form) {
	$themecolor = new Typecho_Widget_Helper_Form_Element_Select('themecolor',array(
    'red' => 'Red',
    'pink' => 'Pink',
    'purple' => 'Purple',
    'deep-purple' => 'Deep Purple',
    'indigo' => 'Indigo',
    'blue' => 'Blue',
    'light-blue' => 'Light Blue',
    'cyan' => 'Cyan',
    'teal' => 'Teal',
    'green' => 'Green',
    'light-green' => 'Light Green',
    'lime' => 'Lime',
    'yellow' => 'Yellow',
    'amber' => 'Amber',
    'orange' => 'Orange',
    'deep-orange' => 'Deep Orange',
    'brown' => 'Brown',
    'grey' => 'Grey',
    'blue-grey' => 'Blue Grey'
  ),
  'pink',
  _t('主题色'),
  _t('请选择主题的颜色OvO'));
  $form->addInput($themecolor->multiMode());
  
  $accentcolor = new Typecho_Widget_Helper_Form_Element_Select('accentcolor',array(
    'red' => 'Red',
    'pink' => 'Pink',
    'purple' => 'Purple',
    'deep-purple' => 'Deep Purple',
    'indigo' => 'Indigo',
    'blue' => 'Blue',
    'light-blue' => 'Light Blue',
    'cyan' => 'Cyan',
    'teal' => 'Teal',
    'green' => 'Green',
    'light-green' => 'Light Green',
    'lime' => 'Lime',
    'yellow' => 'Yellow',
    'amber' => 'Amber',
    'orange' => 'Orange',
    'deep-orange' => 'Deep Orange'
  ),
  'pink',
  _t('主题强调色'),
  _t('请选择主题的强调颜色QWQ'));
  $form->addInput($accentcolor->multiMode());
  
  $style = new Typecho_Widget_Helper_Form_Element_Select('style',array(
    'default_style' => '默认MDUI风格',
    'bg_style' => '背景图风格'
  ),
  'default_style',
  _t('主题风格'),
  _t('请选择主题的风格awa'));
  $form->addInput($style->multiMode());
  
  $icon_color = new Typecho_Widget_Helper_Form_Element_Select('icon_color',array(
    'white' => 'White',
    'black' => 'Black'
  ),
  'white',
  _t('整体颜色风格'),
  _t('根据背景图设置颜色风格(默认风格无效)qwq..'));
  $form->addInput($icon_color->multiMode());
  
  $top = new Typecho_Widget_Helper_Form_Element_Checkbox('top', array(
  'topbtn' => _t('显示回到顶部按钮'),
  ),
  array('topbtn'), _t('右下角按钮'));
  $form->addInput($top->multiMode());
  
  $tools = new Typecho_Widget_Helper_Form_Element_Checkbox('tools', array(
  'searchbtnm' => _t('显示移动端搜索按钮'),
  'searchbtnp' => _t('显示PC端搜索按钮'),
  ),
  array('searchbtnm', 'searchbtnp'), _t('工具栏'));
  $form->addInput($tools->multiMode());
  
  $menu = new Typecho_Widget_Helper_Form_Element_Checkbox('menu', array(
    'closemenu' => _t('默认隐藏侧边栏'),
	'showarchives' => _t('显示按月归档'),
    'showcategory' => _t('显示文章分类'),
    'showpage' => _t('显示独立页面'),
	'showlogin' => _t('显示登陆按钮'),
	'showthemename' => _t('显示主题名(侧边可不显示 但底部必须保留)'),
  ),
  array('closemenu', 'showarchives', 'showcategory', 'showpage', 'showlogin', 'showthemename'), _t('抽屉侧边栏'));
  $form->addInput($menu->multiMode());
  
  $iwa = new Typecho_Widget_Helper_Form_Element_Checkbox('iwa', array(
  'authimg' => _t('作者头像(勾选显示Gravatar头像 取消勾选即显示LOGO)'),
  'searchno' => _t('搜索无结果时Archive页面显示搜索框'),
  'flbq' => _t('文章页分类标签[勾选不显示 - 缺陷功能推荐不显示 - 将尽快修复]'),
  'appreciates' => _t('文章页赞赏功能'),
  ),
  array('authimg', 'searchno', 'flbq', 'appreciates'), _t('主页/文章/Archive设置'));
  $form->addInput($iwa->multiMode());
  
  $others_setting = new Typecho_Widget_Helper_Form_Element_Checkbox('others_setting', array(
  'origintitile' => _t('失去/恢复焦点标题变化'),
  ),
  array('origintitile'), _t('其他设置'));
  $form->addInput($others_setting->multiMode());
  
  $sqjd = new Typecho_Widget_Helper_Form_Element_Text('sqjd', NULL, '页面崩溃了Σ( ° △ °|||)︴', _t('失去焦点标题'), _t('输入失去焦点时显示的标题，必须开启上面开关才有效'));
  $form->addInput($sqjd);
  
  $hfjd = new Typecho_Widget_Helper_Form_Element_Text('hfjd', NULL, '又好了_(:3」∠)_', _t('恢复焦点标题'), _t('输入恢复焦点时显示的标题，必须开启上面开关才有效'));
  $form->addInput($hfjd);
  
  $postcid = new Typecho_Widget_Helper_Form_Element_Text('postcid', NULL, NULL, _t('置顶文章CID'), _t('输入要置顶的文章Cid，多篇用,分格'));
  $form->addInput($postcid);
  
  $bgimg = new Typecho_Widget_Helper_Form_Element_Text('bgimg', NULL, 'https://i.loli.net/2018/09/09/5b94db35f2295.jpg', _t('背景图'), _t('背景图(确保选择了背景图风格)，不填写显示/others/images/bg.jpg图片)'));
  $form->addInput($bgimg);
  
  $headimg = new Typecho_Widget_Helper_Form_Element_Text('headimg', NULL, NULL, _t('头像及站点LOGO'), _t('输入侧边抽屉头像及站点LOGO图片链接，不填写将不显示<br>QQ头像接口：https://q2.qlogo.cn/headimg_dl?dst_uin=QQ号&spec=640'));
  $form->addInput($headimg);
  
  $headbg = new Typecho_Widget_Helper_Form_Element_Text('headbg', NULL, NULL, _t('侧边抽屉图片'), _t('输入侧边抽屉背景图片链接，不填写将显示主题目录下的/others/images/headbg.jpg'));
  $form->addInput($headbg);
  
  $miibeian = new Typecho_Widget_Helper_Form_Element_Text('miibeian', NULL, NULL, _t('备案号'), _t('输入备案号，不填写将不显示'));
  $form->addInput($miibeian);
  
  $github = new Typecho_Widget_Helper_Form_Element_Text('github', NULL, NULL, _t('GitHub'), _t('输入GitHub用户名，不填写将不显示<br>例如https://github.com/ohmyga233 中的ohmyga233'));
  $form->addInput($github);
  
  $email = new Typecho_Widget_Helper_Form_Element_Text('email', NULL, NULL, _t('EMail'), _t('输入EMail，不填写将不显示'));
  $form->addInput($email);
  
  $twitter = new Typecho_Widget_Helper_Form_Element_Text('twitter', NULL, NULL, _t('Twitter'), _t('输入Twitter链接，不填写将不显示'));
  $form->addInput($twitter);
  
  $qqqr = new Typecho_Widget_Helper_Form_Element_Text('qqqr', NULL, NULL, _t('QQ打赏二维码'), _t('输入QQ打赏二维码，不填写将不显示(上面打赏显示没开填写也不显示)'));
  $form->addInput($qqqr);
  
  $wxqr = new Typecho_Widget_Helper_Form_Element_Text('wxqr', NULL, NULL, _t('微信打赏二维码'), _t('输入微信打赏二维码，不填写将不显示(上面打赏显示没开填写也不显示'));
  $form->addInput($wxqr);
  
  $aliqr = new Typecho_Widget_Helper_Form_Element_Text('aliqr', NULL, NULL, _t('支付宝打赏二维码'), _t('输入支付宝打赏二维码，不填写将不显示(上面打赏显示没开填写也不显示'));
  $form->addInput($aliqr);
  
}

function themeFields($layout) {
	?>
    <style>
    #custom-field input{
        width:100%;
    }
    </style>
    <?php
    $wzimg = new Typecho_Widget_Helper_Form_Element_Text('wzimg', NULL, NULL, _t('文章封面图'), _t('如果不填将显示随机封面图'));
    $layout->addItem($wzimg);
}