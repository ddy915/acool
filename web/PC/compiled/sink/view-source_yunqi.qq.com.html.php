<?php
echo '<!DOCTYPE html>
<html xmlns:wb="http://open.weibo.com/wb">
<meta property="wb:webmaster" content="9ae527887cbbe288" />
<meta http-equiv="Content-Type" content="text/html; charset=GB2312" />
<meta id="ctl00_metaKeywords" content="С˵,С˵��,����С˵,�ഺС˵,����С˵,����С˵,����С˵,��ʷС˵,����С˵,ԭ��������ѧ" name="keywords">

<meta id="ctl00_metaDescription" content="С˵test�Ķ�,����С˵����'.$this->_tpl_vars['jieqi_pagetitle'].'��'.$this->_tpl_vars['jieqi_pagetitle'].'�ṩ����С˵,����С˵,ԭ��С˵,����С˵,����С˵,����С˵,�ഺС˵,��ʷС˵,����С˵,����С˵,�ƻ�С˵,�ֲ�С˵,�׷�С˵�����½����С˵�Ķ�,���ʾ���'.$this->_tpl_vars['jieqi_pagetitle'].'������С˵:ç�ļ�,��������,�콾��˫,ʤ��Ϊ��,������ɽ��" name="description">
<!-- 360��ȫ������ʹ��webkit���ٺ� -->
<meta property="qc:admins" content="216137574661377425146375" />
<meta name="renderer" content="webkit" />
<meta name="baidu-site-verification" content="RF6mkvL6i7" />
<meta name="description" content="'.$this->_tpl_vars['jieqi_pagetitle'].'����test����С˵����,ÿ�ո���С˵����,С˵���а�����ṩȫ�����ջ�ӭ��С˵����,������ÿ���С˵,������С˵.��ԽС˵.����С˵��.����ÿ������С˵����'.$this->_tpl_vars['jieqi_pagetitle'].'."  />
<meta name="keywords" content="С˵,С˵���а�,���С˵����,�ÿ���С˵" />
<!-- IEʹ����֧�ֵ����ģʽ -->
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="baidu-site-verification" content="3R33MUNLCM" />
<title>С˵_С˵���а�_'.$this->_tpl_vars['jieqi_pagetitle'].'|���С˵����_��ÿ���С˵��</title>
<script type="text/javascript" src="/scripts/url/index.js"></script>
<link href="/favicon.ico" type="image/x-icon"  rel="shortcut icon">
<link href="/favicon.ico" type="image/x-icon"  rel="Bookmark">
<link rel="stylesheet" type="text/css" href="sink/css/base.css"  />
<script type="text/javascript" src="/sink/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="/sink/js/base.js"></script>
<script type="text/javascript" src="/sink/js/layer.js"></script>
<script type="text/javascript" src="/sink/js/page.js"></script>
<script type="text/javascript" src="/sink/js/tcss.ping.js"></script>
<script type="text/javascript" src="/sink/js/banner.js"></script>
<script src="http://tjs.sjs.sinajs.cn/open/api/js/wb.js" type="text/javascript" charset="utf-8"></script>
</head>
<body>
';
$_template_tpl_vars = $this->_tpl_vars;
 $this->_template_include(array('template_include_tpl_file' => 'sink/head.html', 'template_include_vars' => array()));
 $this->_tpl_vars = $_template_tpl_vars;
 unset($_template_tpl_vars);
echo '
<script type="text/javascript">
    $(function() {
        CS.common.init();
    });
</script>
<!-- <div class="wrap">  -->
<link rel="stylesheet" type="text/css" href="sink/css/index.css"  />

</head>
<body onselectstart="return false">
<body>
<div class="pageCenter">
    <div class="mainNavWrap cf">
        <a class="yqLogo" href="/">
            <img src="/sink/image/logo.png" width="181" height="80" alt="'.$this->_tpl_vars['jieqi_pagetitle'].'" title="'.$this->_tpl_vars['jieqi_pagetitle'].'" />
        </a>
        <!-- ��һ����� -->
        <a class="topBanner" target="_blank" href="'.$this->_tpl_vars['jieqi_url'].'/info/24.html">
            <img width="800" height="80" alt="#"  title="" src="/sink/image/cjtssy.png" >
        </a>

    </div>
    <div class="head_mainnav">
        <div class="head_mainnav_hd cf">
            <h3 class="cur">
                <a href="'.$this->_tpl_vars['jieqi_url'].'/">
                    ��ҳ
                </a>
            </h3>

            <h3>
                <a href="'.$this->_tpl_vars['jieqi_modules']['article']['url'].'/articlefilter.php">
                    ���

                </a>
            </h3>
            <span>
          </span>

            <h3>
                <a href="'.$this->_tpl_vars['jieqi_modules']['article']['url'].'/myarticle.php">
                    ��������
                </a>
            </h3>
            <span>
          </span>

            <h3>
                <a href="'.$this->_tpl_vars['jieqi_url'].'/user">
                    ��������
                </a>
            </h3>
            <span>
          </span>
            <h3>
                <a href="'.$this->_tpl_vars['jieqi_url'].'/modules/fuli/2016.html" target="_blank">
                    ���߸���
                </a>
            </h3>
            <span>
          </span>
            <h3>
                <a href="http://m.juziread.com" target="_blank">
                    �ֻ���
                </a>
            </h3>
            <span>
          </span>
            <h3>
                <a href="'.$this->_tpl_vars['jieqi_modules']['pay']['url'].'/buyegold.php" target="_blank">
                    ��ֵ
                </a>
            </h3>
            <!--<div class="headSerachBox">
                  <form action="/modules/article/search.php" method="post">
                   <input type="text" name="searchkey" class="search_text" placeholder="����һ�°ɣ�"/>
                   <input type="submit" value="" class="search_button">
               </form> -->
        </div>
    </div>
    <div class="head_mainnav_bd cf">
        <div class="subClass">
            <!-- burn �޸� 2016-12-19 -->
            ';
if (empty($this->_tpl_vars['artileSort'])) $this->_tpl_vars['artileSort'] = array();
elseif (!is_array($this->_tpl_vars['artileSort'])) $this->_tpl_vars['artileSort'] = (array)$this->_tpl_vars['artileSort'];
$this->_tpl_vars['i']=array();
$this->_tpl_vars['i']['columns'] = 1;
$this->_tpl_vars['i']['count'] = count($this->_tpl_vars['artileSort']);
$this->_tpl_vars['i']['addrows'] = count($this->_tpl_vars['artileSort']) % $this->_tpl_vars['i']['columns'] == 0 ? 0 : $this->_tpl_vars['i']['columns'] - count($this->_tpl_vars['artileSort']) % $this->_tpl_vars['i']['columns'];
$this->_tpl_vars['i']['loops'] = $this->_tpl_vars['i']['count'] + $this->_tpl_vars['i']['addrows'];
reset($this->_tpl_vars['artileSort']);
for($this->_tpl_vars['i']['index'] = 0; $this->_tpl_vars['i']['index'] < $this->_tpl_vars['i']['loops']; $this->_tpl_vars['i']['index']++){
	$this->_tpl_vars['i']['order'] = $this->_tpl_vars['i']['index'] + 1;
	$this->_tpl_vars['i']['row'] = ceil($this->_tpl_vars['i']['order'] / $this->_tpl_vars['i']['columns']);
	$this->_tpl_vars['i']['column'] = $this->_tpl_vars['i']['order'] % $this->_tpl_vars['i']['columns'];
	if($this->_tpl_vars['i']['column'] == 0) $this->_tpl_vars['i']['column'] = $this->_tpl_vars['i']['columns'];
	if($this->_tpl_vars['i']['index'] < $this->_tpl_vars['i']['count']){
		list($this->_tpl_vars['i']['key'], $this->_tpl_vars['i']['value']) = each($this->_tpl_vars['artileSort']);
		$this->_tpl_vars['i']['append'] = 0;
	}else{
		$this->_tpl_vars['i']['key'] = '';
		$this->_tpl_vars['i']['value'] = '';
		$this->_tpl_vars['i']['append'] = 1;
	}
	echo '
            <a href="'.jieqi_geturl('article','articlelist','1',$this->_tpl_vars['artileSort'][$this->_tpl_vars['i']['key']]['sortID']).'">
                '.$this->_tpl_vars['artileSort'][$this->_tpl_vars['i']['key']]['caption'].'
            </a>
			
            ';
if($this->_tpl_vars['i']['key'] < $this->_tpl_vars['artileSortCount']){
echo '
            <span>
              |
            </span>
            ';
}
echo '

            ';
}
echo '


            <!--<a href="'.jieqi_geturl('article','articlelist','1','1').'">-->
                <!--'.$this->_tpl_vars['test'].'-->
            <!--</a>-->

            <!--<span>-->
              <!--|-->
            <!--</span>-->
            <!--<a href="'.jieqi_geturl('article','articlelist','1','1').'">-->
                <!--���á�ħ��-->
            <!--</a>-->
            <!--<span>-->
              <!--|-->
            <!--</span>-->
            <!--<a href="'.jieqi_geturl('article','articlelist','1','2').'">-->
                <!--����������-->
            <!--</a>-->
            <!--<span>-->
              <!--|-->
            <!--</span>-->
            <!--<a href="'.jieqi_geturl('article','articlelist','1','3').'">-->
                <!--���С�У԰-->
            <!--</a>-->
            <!--<span>-->
              <!--|-->
            <!--</span>-->
            <!--<a href="'.jieqi_geturl('article','articlelist','1','4').'">-->
                <!--��ʷ������-->
            <!--</a>-->
            <!--<span>-->
              <!--|-->
            <!--</span>-->
            <!--<a href="'.jieqi_geturl('article','articlelist','1','5').'">-->
                <!--���졤����-->
            <!--</a>-->
            <!--<span>-->
              <!--|-->
            <!--</span>-->
            <!--<a href="'.jieqi_geturl('article','articlelist','1','6').'">-->
                <!--�ƻá�ͬ��-->
            <!--</a>-->
            <!--<span>-->
              <!--|-->
            <!--</span>-->
            <!--<a href="'.jieqi_geturl('article','articlelist','1','7').'">-->
                <!--�ִ�������-->
            <!--</a>-->
            <!--<span>-->
              <!--|-->
            <!--</span>-->
            <!--<a href="'.jieqi_geturl('article','articlelist','1','8').'">-->
                <!--�Ŵ�������-->
            <!--</a>-->
            <!--<span>-->
              <!--|-->
            <!--</span>-->
            <!--<a href="'.jieqi_geturl('article','articlelist','1','11').'">-->
                <!--������ͬ��-->
            <!--</a>-->
            <!--<span>-->
              <!--|-->
            <!--</span>-->
            <!--<a href="'.jieqi_geturl('article','articlelist','1','9').'">-->
                <!--���롤����-->
            <!--</a>-->
            <!--<span>-->
              <!--|-->
            <!--</span>-->
            <!--<a href="'.jieqi_geturl('article','articlelist','1','12').'">-->
                <!--��ѧ-->
            <!--</a>-->
        </div>

    </div>
    <!--������-->
    <div class="index_notice cf">
        '.$this->_tpl_vars['jieqi_pageblocks']['1']['content'].'
        </ul>
    </div>
</div>
</div>
</div>

<div class="pageCenter">
    <!--��һ��-->
    <div class="indexOne mb10 cf">
        <div class="tabWrap fl mr10">
            <div class="threeTabBox">
                <em>
                    ����ǿ��
                </em>
            </div>
            <div class="listWrap">
                <div class="tabList">
                    <ul class="rankList rankHover numList">
                        '.$this->_tpl_vars['jieqi_pageblocks']['2']['content'].'
                    </ul>
                </div>
            </div>
        </div>
        <div class="indexOneCenter">
            <!-- ��ͼ�ֲ� -->
            <div id="slideshow" class="block">
                <div id="focus">
                    <ul>
                        '.$this->_tpl_vars['jieqi_pageblocks']['4']['content'].'
                    </ul>
                </div>
            </div>

        </div>
        <div class="tabWrap mb10 fr">
            <div class="threeTabBox">
                <em>
                    Ů��ǿ��
                </em>
            </div>
            <div class="rankListWrap">
                <ul class="rankList rankHover numList">
                    '.$this->_tpl_vars['jieqi_pageblocks']['5']['content'].'
                </ul>
            </div>
        </div>

    </div>

    <!--�ڶ���-->
    <div class="indexTwo mb10 cf">
        <div class="tabWrap fl mr10">
            <div class="threeTabBox">
                <em>
                    VIP��
                </em>
            </div>
            <div class="rankListWrap">
                <ul class="rankList rankHover numList">
                    '.$this->_tpl_vars['jieqi_pageblocks']['17']['content'].'
                </ul>
            </div>
        </div>

        <div class="indexCenter">
            <h6>
                Ů�����Ƽ�
            </h6>

            <div class="recBookWrap">
                <div class="recBook cf">
                    <div class="twoBookWrap">
                        '.$this->_tpl_vars['jieqi_pageblocks']['16']['content'].'
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="tabWrap tabSwitch fr">
            <div class="threeTabBox">
                <em>
                    ���Ƽ���
                </em>
            </div>
            <div class="listWrap">

                <ul class="rankList rankHover numList tabList">
                    '.$this->_tpl_vars['jieqi_pageblocks']['13']['content'].'
                </ul>

            </div>
        </div>

    </div>

    <!-- �ڶ������ -->
    <div class="banner_index"><a href=\''.$this->_tpl_vars['jieqi_url'].'/info/1754.html\'  target=\'_blank\' ><img src=\''.$this->_tpl_vars['jieqi_url'].'/sink/image/qqhfg.png\' height=\'95\'  width=\'1000\' /></a></div>
    <!--������-->
    <div class="indexThree mb10 cf">
        <div class="tabWrap tabSwitch fl mr10">
            <div class="threeTabBox">
                <em>
                    �ʻ���
                </em>
            </div>
            <div class="listWrap">
                <ul class="rankList rankHover numList">
                    '.$this->_tpl_vars['jieqi_pageblocks']['10']['content'].'
                </ul>
            </div>
        </div>

        <div class="indexCenter">
            <h6>��Ʒ��Ƶ��</h6>
            <div class="recBookWrap">
                <div class="recBook cf">
                    <div class="twoBookWrap">
                        '.$this->_tpl_vars['jieqi_pageblocks']['7']['content'].'
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!--��Ʒ������-->
        <div class="tabWrap tabSwitch fr">
            <div class="threeTabBox">
                <em> ǩԼ�����ܰ�</em>
            </div>
            <div class="listWrap">
                <ul class="rankList rankHover numList tabList">
                    '.$this->_tpl_vars['jieqi_pageblocks']['8']['content'].'

                </ul>

            </div>
        </div>
    </div>

    <!--������-->
    <div class="indexFour mb10 cf">
        <div class="tabWrap tabSwitch fl mr10">
            <div class="threeTabBox">
                <em>
                    ��Ʊ��
                </em>
            </div>
            <div class="listWrap">
                <ul class="rankList rankHover numList">
                    '.$this->_tpl_vars['jieqi_pageblocks']['14']['content'].'
                </ul>

            </div>
        </div>

        <div class="indexCenter">
            <h6>
                �������Ƽ�
            </h6>
            <div class="recBookWrap">
                <div class="recBook cf">
                    <div class="twoBookWrap">
                        '.$this->_tpl_vars['jieqi_pageblocks']['11']['content'].'
                        </ul>
                    </div>
                </div>

            </div>
        </div>

        <div class="tabWrap tabSwitch fl mr10">
            <div class="threeTabBox">
                <em>
                    ԭ�����ư�
                </em>
            </div>
            <div class="listWrap">
                <ul class="rankList rankHover numList">
                    '.$this->_tpl_vars['jieqi_pageblocks']['6']['content'].'
                </ul>
            </div>
        </div>
    </div>

    <!-- ��������� -->
    <div class="banner_index"><a href=\''.$this->_tpl_vars['jieqi_url'].'/info/31.html\'  target=\'_blank\' ><img src=\''.$this->_tpl_vars['jieqi_url'].'/sink/image/yygs.png\' height=\'90\'  width=\'1000\' /></a></div>

    <!--�ײ�������-->
    <div class="indexSeven mb10 cf">
        <div class="fl mr10">
            <div class="tabWrap tabSwitch mb10">
                <div class="threeTabBox">
                    <em>
                        ������
                    </em>
                </div>
                <div class="listWrap">
                    <ul class="rankList rankHover numList tabList">
                        '.$this->_tpl_vars['jieqi_pageblocks']['18']['content'].'
                    </ul>
                </div>
            </div>
            <!--�ͷ�����-->
            <div class="code">
                <h3>
                    �ͷ�����
                </h3>
                <div class="service">
                    <div class="contact">
                        <p>
                            ��Ƶ���:
                            <!--<a target=blank href=tencent://message/?uin=780182196&Site=��Ѷ���&Menu=yes>
							<img border="0" SRC=\'http://wpa.qq.com/pa?p=1:780182196:1\' alt="��ƵͶ���������">
							</a>-->
                            QQ��780182196
                        </p>
                        <p>
                            ŮƵ���:
                            <!--<a target=blank href=tencent://message/?uin=3470955446&Site=��Ѷ���&Menu=yes>
							<img border="0" SRC=http://wpa.qq.com/pa?p=1:3470955446:1 alt="ŮƵͶ���������">
							</a>-->
                            QQ��3470955446
                        </p>
                        <p>
                            �������:
                            <!--<a target=blank href=tencent://message/?uin=748575917&Site=��Ѷ���&Menu=yes>
							<img border="0" SRC=http://wpa.qq.com/pa?p=1:748575917:1 alt="��������������">
							</a>-->
                            QQ��748575917
                        </p>

                        <em>
                            �ͷ�QQ��
                            <a href="mailto:1573526519" target="_blank">
                                1573526519
                            </a>
                        </em>
                        <em>
                            �ͷ��绰��
                            <a href="mailto:17316923047" target="_blank">
                                17316923047
                            </a>
                        </em>

                        <!--<p class="cf">-->
                          <!--<span>-->
                            <!--΢��:<wb:follow-button uid=" " type="red_2" width="136" height="24"></wb:follow-button>-->
                          <!--</span>-->
                        <!--</p>-->
                    </div>
                </div>
            </div>
        </div>

        <!--����С˵�����б�-->
        <div class="indexCenter newUpdate">
            <h6>
                ����С˵�����б�
            </h6>
            <div id="updateTabBox" class="updateTabBox">
                <div class="updateTab">
                    <ul>
                        <li class="upCur">
                            ���С˵
                        </li>
                        <li>
                            VIPС˵
                        </li>
                        <li class="noborder">
                            ǩԼС˵
                        </li>
                    </ul>
                </div>
            </div>

            <div id="updateList" class="updateList">

                <ul>
                    '.$this->_tpl_vars['jieqi_pageblocks']['21']['content'].'
                </ul>

                <ul class="hidden">
                    '.$this->_tpl_vars['jieqi_pageblocks']['22']['content'].'
                </ul>

                <ul class="hidden">
                    '.$this->_tpl_vars['jieqi_pageblocks']['23']['content'].'
                </ul>
            </div>
        </div>
        <div class="fr">
            <div class="tabWrap mb10">
                <div class="twoTabBox">
                    <h3>
                        �������
                    </h3>
                </div>
                <div class="rankListWrap">
                    <ul class="rankList rankHover numList">
                        '.$this->_tpl_vars['jieqi_pageblocks']['25']['content'].'
                    </ul>
                </div>
            </div>
			<!--�µĹ��λ-->
            <div class="code">
                <h3>
                    �ͷ�����
                </h3>
                <div class="service">
                    <div class="contact">
                        <p>
                            ��Ƶ���:
                            <!--<a target=blank href=tencent://message/?uin=780182196&Site=��Ѷ���&Menu=yes>
							<img border="0" SRC=\'http://wpa.qq.com/pa?p=1:780182196:1\' alt="��ƵͶ���������">
							</a>-->
                            QQ��780182196
                        </p>
                        <p>
                            ŮƵ���:
                            <!--<a target=blank href=tencent://message/?uin=3470955446&Site=��Ѷ���&Menu=yes>
							<img border="0" SRC=http://wpa.qq.com/pa?p=1:3470955446:1 alt="ŮƵͶ���������">
							</a>-->
                            QQ��3470955446
                        </p>
                        <p>
                            �������:
                            <!--<a target=blank href=tencent://message/?uin=748575917&Site=��Ѷ���&Menu=yes>
							<img border="0" SRC=http://wpa.qq.com/pa?p=1:748575917:1 alt="��������������">
							</a>-->
                            QQ��748575917
                        </p>

                        <em>
                            �ͷ�QQ��
                            <a href="mailto:1573526519" target="_blank">
                                1573526519
                            </a>
                        </em>
                        <em>
                            �ͷ��绰��
                            <a href="mailto:17316923047" target="_blank">
                                17316923047
                            </a>
                        </em>

                        <!--<p class="cf">-->
                          <!--<span>-->
                            <!--΢��:<wb:follow-button uid=" " type="red_2" width="136" height="24"></wb:follow-button>-->
                          <!--</span>-->
                        <!--</p>-->
                    </div>
                </div>
            </div>

        </div>
    </div>
	
</div>
<br>
<a id="totop" class="go_top" href="javascript:">
</a>
</body>

</html>

<div class="footer">
    <div class="footer_main cf">

        <!-- <span>
        ��������
          </span>
          <div class="link_a">
    '.$this->_tpl_vars['jieqi_pageblocks']['26']['content'].'
          </div>
          <div class="user clearfix">
            <dl class="user_dl">
              <dt>
              </dt>

           <dd>
                <a target="_blank" href="#">
                  �������
                </a>
                <br>
                <a target="_blank" href="#">
                  ��վ�ͷ�
                </a>
              </dd>
            </dl>
            <dl class="cooperate_dl">
              <dt>
              </dt>
              <dd>
                <p>
                  ��Ȩ������
                  <a href="#">
                    2261740690@qq.com
                  </a>
                </p>
                <p>
                ��������
                  <a href="#">
                   2262380196@qq.com
                  </a>
                </p>
              </dd>
            </dl>

         </div>   <div class="foot"> -->

        <div class="link_a">
            <span>��������</span>
            
        </div></div>

    <div class="foot">
        <p>

        <p>
            <!--<div class="">
             ��Ѷ���������������ϲ����С˵�Ķ���վ����վʼ��������Ϊ�����ߺ����ߴ���һ����һ�����Ķ����磡�Һÿ�������С˵����ѵ�����С˵��С˵�������а������Ѷ��顣��Ѷ��飬�ɶ�λ����༭��ͬ��Ӫ������ӵ��ǿ��ĵ�����С˵��Ӫ������Ŭ�����������Ʒ���Ų�һ���Ĺ��!Ŀǰ���ս�Ժ����������У����ġ����졢������ǡ������յ�ʮ�������ƽ̨��
             </p> -->
        <p>
            <a href="'.$this->_tpl_vars['jieqi_url'].'/modules/forum/showtopic.php?tid=3&lpage=1&page=1" target="_blank" rel="nofollow">
                ���ڱ�վ
            </a>
            <a href="'.$this->_tpl_vars['jieqi_url'].'/modules/forum/showtopic.php?tid=4&lpage=1&page=1" target="_blank" rel="nofollow">
                �������
            </a>
            <a href="'.$this->_tpl_vars['jieqi_url'].'/modules/forum/showtopic.php?tid=5&lpage=1&page=1" target="_blank" rel="nofollow">
                ��ҪͶ��
            </a>
            <a href="'.$this->_tpl_vars['jieqi_url'].'/modules/forum/showtopic.php?tid=6&lpage=1&page=1" target="_blank" rel="nofollow">
                ��Ȩ����
            </a>
            <a href="'.$this->_tpl_vars['jieqi_url'].'/modules/forum/showtopic.php?tid=7&lpage=1&page=1" target="_blank" rel="nofollow">
                ��ϵ����
            </a>
            <a href="http://m.juziread.com" target="_blank" rel="nofollow">
                �ֻ���
            </a>
            <a href="'.$this->_tpl_vars['jieqi_url'].'/modules/fuli/2016.html" target="_blank" rel="nofollow">
                ���߸���
            </a>
        </p>
        <p>
            Copyright&nbsp;&nbsp;&copy;&nbsp;2016&nbsp;juziread.&nbsp;All&nbsp;Rights&nbsp;Reserved
        </p>
        <p>
            ���߷���С˵��Ʒʱ�������ع��һ�������Ϣ�����취�涨����վ����¼С˵��Ʒ���������⡢������۾����������Ϊ����������վ������
        </p>
        <p>
            ���Ǿܾ��κ�ɫ��С˵���ܾ��κγ�Ϯ�����ַ���Ȩ��С˵��һ�����֣�����ɾ����
        </p>
        <p>
            ����������&nbsp;��Ȩ����&nbsp;���ݱ�����Ϣ�Ƽ����޹�˾</a><a href="http://www.miibeian.gov.cn/ " target="_blank" rel="nofollow">&nbsp;��ICP��17059697��-1
        <p>
          
        </p>
    </div>
</div>
<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"16"},"slide":{"type":"slide","bdImg":"7","bdPos":"right","bdTop":"100"}};with(document)0[(getElementsByTagName(\'head\')[0]||body).appendChild(createElement(\'script\')).src=\'http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion=\'+~(-new Date()/36e5)];</script>
</div>
<a id="goTopBtn" class="go_top" href="javascript:">
</a>
<script type="text/javascript" src="sink/js/gb.js"></script>
</div>
</body>
</html>
';
?>