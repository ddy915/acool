<?php
echo '<!doctype html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset='.$this->_tpl_vars['jieqi_charset'].'" />
<title>���ִ���</title>
<link rel="stylesheet" type="text/css" media="all" href="'.$this->_tpl_vars['jieqi_themecss'].'" />
<script language="javascript" type="text/javascript" src="'.$this->_tpl_vars['jieqi_url'].'/scripts/common.js"></script>
			</head>
<body>
<div style="width:100%; text-align:center; padding-top:150px;">
  <div style="margin:auto; width:350px;">
    <div class="block">
      <div class="blocktitle">���ִ���</div>
      <div class="blockcontent">
	    <div style="padding:10px;text-align:left;">����ԭ��'.$this->_tpl_vars['errorinfo'].'<br />'.$this->_tpl_vars['debuginfo'].'<br />�� <a href="javascript:history.back(1)">�� ��</a> ������</div>
	    <div style="text-align:right; line-height:2; padding-right:10px;">[<a href="javascript:window.close()">�رձ�����</a>]</div>
	  </div>
	  <div class="blocknote">��Ȩ����&copy; <a href="'.$this->_tpl_vars['jieqi_url'].'/">'.$this->_tpl_vars['jieqi_sitename'].'</a></div>
	</div>
  </div>
</div>
</body>
</html>';
?>