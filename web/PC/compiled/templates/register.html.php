<?php
echo '<script type="text/javascript" src="/scripts/common.js"></script>
<div id="content">
<link rel="stylesheet" rev="stylesheet" href="/sink/css/login.css" type="text/css" media="all" />
<div class="box_mid fix">
  <div class="regist fix">
   <h4>�û�ע��</h4>
   <div class="step"></div>
<form name="frmregister" id="frmregister" class="signup" action="'.$this->_tpl_vars['url_login'].'" method="post" onsubmit="if(!document.getElementById(\'iagree\').checked){alert(\'������ͬ���û�ע��Э����ܼ���ע�ᣡ\'); return false;}">
<fieldset>
    <div class="form-item">
        <div class="field-name">�û���:</div>
        <div class="field-input">
          <input type="text" name="username" id="username" size="25" maxlength="30" value="" onBlur="Ajax.Update(\''.$this->_tpl_vars['check_url'].'?item=u&username=\'+this.value, {outid:\'usermsg\', tipid:\'usermsg\', onLoading:\'<img border=\\\'0\\\' height=\\\'16\\\' width=\\\'16\\\' src=\\\''.$this->_tpl_vars['jieqi_url'].'/images/loading.gif\\\' /> Loading...\'});" /> <span id="usermsg"></span>
        </div>
    </div>
    <div class="form-item">
        <div class="field-name">����:</div>
        <div class="field-input">
          <input type="password" name="password" id="password" size="25" maxlength="30"  value="" onBlur="Ajax.Update(\''.$this->_tpl_vars['check_url'].'?item=p&password=\'+this.value, {outid:\'passmsg\', tipid:\'passmsg\', onLoading:\'<img border=\\\'0\\\' height=\\\'16\\\' width=\\\'16\\\' src=\\\''.$this->_tpl_vars['jieqi_url'].'/images/loading.gif\\\' /> Loading...\'});" /> <span id="passmsg"></span>
        </div>
    </div>
    <div class="form-item">
        <div class="field-name">ȷ������:</div>
        <div class="field-input">
          <input type="password" name="repassword" id="repassword" size="25" maxlength="30"  value=""  onBlur="Ajax.Update(\''.$this->_tpl_vars['check_url'].'?item=r&password=\'+password.value+\'&repassword=\'+this.value, {outid:\'repassmsg\', tipid:\'repassmsg\', onLoading:\'<img border=\\\'0\\\' height=\\\'16\\\' width=\\\'16\\\' src=\\\''.$this->_tpl_vars['jieqi_url'].'/images/loading.gif\\\' /> Loading...\'});" /> <span id="repassmsg"></span>
        </div>
    </div>
   <div class="form-item">
        <div class="field-name">Email:</div>
        <div class="field-input">
          <input type="text" name="email" id="email" size="25" maxlength="60"  value="" onBlur="Ajax.Update(\''.$this->_tpl_vars['check_url'].'?item=m&email=\'+this.value, {outid:\'mailmsg\', tipid:\'mailmsg\', onLoading:\'<img border=\\\'0\\\' height=\\\'16\\\' width=\\\'16\\\' src=\\\''.$this->_tpl_vars['jieqi_url'].'/images/loading.gif\\\' /> Loading...\'});" /> <span id="mailmsg"></span>
        </div>
    </div>
	';
if($this->_tpl_vars['show_checkcode'] == 1){
echo '
	    <div class="form-item" id="code_div">
	        <div class="field-name">��֤��:</div>
	        <div class="field-input">
	          	<input type="text" name="checkcode" class="yzm" maxlength="6" autocomplete=��off��/>
	          	<img src="'.$this->_tpl_vars['jieqi_url'].'/checkcode.php" class="pic" id="checkcode" /><a id="recode" class="f_org2 pl10" href="javascript:;">��һ��</a>
	        </div>
	    </div>';
}
echo '
    <div class="form-item">
     <div class="f12 g6 xy">
     <input type="checkbox" name="iagree" id="iagree" value="1" checked="checked" class="check" />�����Ķ���ͬ��<a href="javascript:void(0)" onclick="shxy()" class="f_blue">���û�Э�顷</a>
     </div>
    </div>
</fieldset>
<button name="submit" id="submit" class="btn-submit2" type="submit">ע��</button>
<input type="hidden" name="action" value="newuser" />
</form>

  </div>
  <div class="remark">   
    <div class="t">�����ʺţ� <a href="/login.php" onclick="openDialog(\''.$this->_tpl_vars['jieqi_url'].'/login.php?ajax_gets=jieqi_contents\', false);stopEvent();" class="dl">�� ¼</a><p class="other f_blue">������¼��ʽ��<a href="javascript:;" onclick="otherlogin(\''.$this->_tpl_vars['jieqi_url'].'/api/qq/login.php\');" title="QQ��¼"><em></a><a href="javascript:;" onclick="otherlogin(\''.$this->_tpl_vars['jieqi_url'].'/api/weibo/login.php\');" title="΢����¼"><em class="sina"></em></a>


</p></div>

</a><a href="javascript:;" onclick="otherlogin(\''.$this->_tpl_vars['jieqi_url'].'/api/weibo/login.php\');" title="΢����¼"><em class="sina"></em></a><a href="javascript:;" onclick="otherlogin(\'#\');" title="΢�ŵ�¼"><em class="wechat"></em></a><a href="javascript:;" onclick="otherlogin(\'#\');" title="�ٶȵ�¼"><em class="baidu"></em></a>


    <dl>
     <dt>ע���Ϊ'.$this->_tpl_vars['jieqi_pagetitle'].'��Ա������ӵ�У�</dt>
     <dd>&middot;ӵ�к�������ղظ���ͼ��</dd>
     <dd>&middot;Ͷ�Ƽ�Ʊ��ϲ����С˵,֧�����ߴ���</dd>
     <dd>&middot;����ΪVIP,�½ڶ������Ż�</dd>
     <dd>&middot;�����Ա,��õ��ϼ���Ʒ��㿴</dd>
    </dl>

  </div>
</div></div>
<div id="cont" style="display:none;">
    	<h1>'.$this->_tpl_vars['jieqi_pagetitle'].'Э��</h1>
		<p>
    	��ֻ�������������������з��������������'.$this->_tpl_vars['jieqi_pagetitle'].'ע���ʺ�
		</p>
		<p>
		1. �ر���ʾ
		<br />'.$this->_tpl_vars['jieqi_pagetitle'].'ͬ�ⰴ�ձ�Э��Ĺ涨���䲻ʱ�����Ĳ��������ṩ���ڻ���������ط���(���³�"�������")��Ϊ���������񣬷���ʹ����(���³�"�û�")ͬ�ⱾЭ���ȫ���������ҳ���ϵ���ʾ���ȫ����ע������û��ڽ���ע���������е��"ͬ��"��ť����ʾ�û���ȫ���ܱ�Э�����µ�ȫ�������Щ�������'.$this->_tpl_vars['jieqi_pagetitle'].'������������ʱ���£�������Э��һ�������䶯��'.$this->_tpl_vars['jieqi_pagetitle'].'��������ص�ҳ������ʾ�޸����ݡ��޸ĺ�ķ���Э��һ����ҳ���Ϲ�������Ч����ԭ���ķ���Э�顣�û���ʹ��'.$this->_tpl_vars['jieqi_pagetitle'].'�ṩ�ĸ������֮ǰ��Ӧ��ϸ�Ķ�������Э�飬���û���ͬ�Ȿ����Э�鼰/����ʱ������޸ģ��û���������ȡ��'.$this->_tpl_vars['jieqi_pagetitle'].'�ṩ�ķ���
		</p>
		<p>
		2. ��������
		<br />
		2.1 '.$this->_tpl_vars['jieqi_pagetitle'].'�������ľ���������'.$this->_tpl_vars['jieqi_pagetitle'].'����ʵ������ṩ��������ѧ��Ʒ�Ķ�����̳(BBS)�������ҡ������ʼ��������������۵ȡ�'.$this->_tpl_vars['jieqi_pagetitle'].'������ʱ������жϻ���ֹ���ֻ�ȫ����������Ȩ����
		<br />2.2 '.$this->_tpl_vars['jieqi_pagetitle'].'���ṩ�������ʱ�����ܻ�Բ����������(����VIp��Ʒ�Ķ�)���û���ȡһ���ķ��á��ڴ�����£�'.$this->_tpl_vars['jieqi_pagetitle'].'�������ҳ��������ȷ����ʾ�����û��ܾ�֧���õȷ��ã�����ʹ����ص��������
		<br />2.3 �û����⣬'.$this->_tpl_vars['jieqi_pagetitle'].'���ṩ��ص�������񣬳���֮���������������йص��豸(����ԡ����ƽ��������������뻥�����йص�װ��)������ķ���(��Ϊ���뻥������֧���ĵ绰�Ѽ�������)��Ӧ���û����и�����
		</p>
		<p>
		3. ʹ�ù���
		<br />
		3.1 �û�������ʹ��'.$this->_tpl_vars['jieqi_pagetitle'].'�������ʱ��������'.$this->_tpl_vars['jieqi_pagetitle'].'����ע�Ტ�ṩ׼ȷ�ĸ������ϣ�������������κα䶯�����뼰ʱ���¡����������ṩ��׼ȷ�����ܲ�����ط���ʱ��'.$this->_tpl_vars['jieqi_pagetitle'].'���е��κ����Ρ�
		
		<br />3.2 �û�ע��ɹ���'.$this->_tpl_vars['jieqi_pagetitle'].'������ÿ���û�һ���û��ʺż���Ӧ�����룬���û��ʺź��������û����𱣹ܣ��û�Ӧ���������û��ʺŽ��е����л���¼����������Ρ�
		
		<br />3.3 �û�ͬ�����'.$this->_tpl_vars['jieqi_pagetitle'].'ͨ�������ʼ���������ʽ���û����͵���Ʒ���������������ҵ��Ϣ��
		
		<br />3.4 �û���ʹ��'.$this->_tpl_vars['jieqi_pagetitle'].'�����������У�������ѭ����ԭ��
		
		<br />(A) �����й��йصķ��ɺͷ��棻
		
		<br />(B) ����Ϊ�κηǷ�Ŀ�Ķ�ʹ���������ϵͳ��
		
		<br />(C) ������������������йص�����Э�顢�涨�ͳ���
		
		<br />(D) ��������'.$this->_tpl_vars['jieqi_pagetitle'].'�������ϵͳ�����κο��ܶԻ�������������ת��ɲ���Ӱ�����Ϊ��
		
		<br />(E) ��������'.$this->_tpl_vars['jieqi_pagetitle'].'�������ϵͳ�����κ�ɧ���Եġ��������˵ġ������Եġ������Եġ�ӹ������Ļ������κηǷ�����Ϣ���ϣ�
		
		<br />(F) ��������'.$this->_tpl_vars['jieqi_pagetitle'].'�������ϵͳ�����κβ�����'.$this->_tpl_vars['jieqi_pagetitle'].'����Ϊ��
		
		<br />(G) ��'.$this->_tpl_vars['jieqi_pagetitle'].'��������ҵ���ķ��񡢲�Ʒ��ҵ����ѯӦ��ȡ��Ӧ�����ṩ�Ĺ�ͨ�����������ڹ��ڳ��Ϸ����й�'.$this->_tpl_vars['jieqi_pagetitle'].'����ط���ĸ���������
		
		<br />(H) �緢���κηǷ�ʹ���û��ʺŻ��ʺų��ְ�ȫ©���������Ӧ����ͨ��'.$this->_tpl_vars['jieqi_pagetitle'].'��
		</p>
		<p>
		4. ��������Ȩ
		<br />4.1 '.$this->_tpl_vars['jieqi_pagetitle'].'�ṩ������������ݿ��ܰ��������֡�������������ͼƬ��¼��ͼ���ȡ�������Щ�����ܰ�Ȩ�����̱귨�������Ʋ�����Ȩ���ɵı�����
		<br />4.2 �û�ֻ���ڻ��'.$this->_tpl_vars['jieqi_pagetitle'].'���������Ȩ���˵�������Ȩ֮�����ʹ����Щ���ݣ����������Ը��ơ�������Щ���ݡ������������йص�������Ʒ��
		</p>
		<p>
		5. ��˽����
		<br />5.1 �����û����ر���δ�����ˣ�����˽��'.$this->_tpl_vars['jieqi_pagetitle'].'��һ��������ߣ���ˣ�����ĸ���໤�ˣ�ϣ��δ�����ˣ�������ʮ��������Ů������ʹ�ñ����񣬱����Ը�ĸ���໤�ˣ���������ע�ᣬ�ڽ��ܱ�����ʱ��Ӧ�Է����໤�����ݼ����жϱ������Ƿ������δ�����ˡ� '.$this->_tpl_vars['jieqi_pagetitle'].'��֤�����⹫�������������5.2����������⣩�ṩ�û�ע�����ϼ��û���ʹ���������ʱ�洢��'.$this->_tpl_vars['jieqi_pagetitle'].'�ķǹ������ݣ�������������⣺
		<br />(A) ���Ȼ���û�����ȷ��Ȩ��
		<br />(B) �����йصķ��ɷ���Ҫ��
		<br />(C) ��������������ܲ��ŵ�Ҫ��
		<br />(D) Ϊά����ṫ�ڵ����棻
		<br />(E) Ϊά��'.$this->_tpl_vars['jieqi_pagetitle'].'�ĺϷ�Ȩ�档
		<br />5.2 '.$this->_tpl_vars['jieqi_pagetitle'].'���ܻ���������������û��ṩ��ص���������ڴ�����£���õ�����ͬ��е���'.$this->_tpl_vars['jieqi_pagetitle'].'ͬ�ȵı����û���˽�����Σ���'.$this->_tpl_vars['jieqi_pagetitle'].'�ɽ��û���ע�����ϵ��ṩ���õ�������
		<br />5.3�ڲ�͸¶�����û���˽���ϵ�ǰ���£�'.$this->_tpl_vars['jieqi_pagetitle'].'��Ȩ�������û����ݿ���м������������ѽ��з�������������û����ݿ������ҵ�ϵ����á� ����'.$this->_tpl_vars['jieqi_pagetitle'].'���û�����˽Ȩ�������˼����Ŭ����������Ȼ���ܱ�֤���еİ�ȫ������ʩʹ�û��ļ�����Ϣ�Ȳ����κ���ʽ����ʧ��
		</p>
		<p>
		6. ��������
		<br />6.1 '.$this->_tpl_vars['jieqi_pagetitle'].'�����߲���֤�������ˣ�
		<br />(A)�����񽫷�������Ҫ��
		<br />(B)�����񽫲��ܸ��š���ʱ�ṩ����ȫ�ɿ��򲻻������
		<br />(C)'.$this->_tpl_vars['jieqi_pagetitle'].'��Ŭ����֤������Ʒ�������ԣ�������������߻�������'.$this->_tpl_vars['jieqi_pagetitle'].'���ܿ��Ƶ�ԭ������Ʒ�����ز��ܼ���ʱ��'.$this->_tpl_vars['jieqi_pagetitle'].'���û����е��κ����Ρ�
		<br />(D)���û������ʻ�Ȩ������'.$this->_tpl_vars['jieqi_pagetitle'].'���񹹳��ƻ�����ʱ��'.$this->_tpl_vars['jieqi_pagetitle'].'��Ȩֹͣ���ʺŵ�ʹ��Ȩ����
		<br />6.2�û���ȷͬ����ʹ��'.$this->_tpl_vars['jieqi_pagetitle'].'������������ڵķ��ս���ȫ�����Լ��е�������ʹ��'.$this->_tpl_vars['jieqi_pagetitle'].'��������������һ�к��Ҳ�����Լ��е���'.$this->_tpl_vars['jieqi_pagetitle'].'���û����е��κ����Ρ�
		</p>
		<p>
		7. ���������жϻ���ֹ
		<br />7.1 ����ϵͳά������������Ҫ������ͣ�������'.$this->_tpl_vars['jieqi_pagetitle'].'�����������Ƚ���ͨ�档
		<br />7.2 �緢�������κ�һ�����Σ�'.$this->_tpl_vars['jieqi_pagetitle'].'��Ȩ��ʱ�жϻ���ֹ���û��ṩ��Э�����µ�������������֪ͨ�û���
		<br />(A)�û��ṩ�ĸ������ϲ���ʵ��
		<br />(B)�û�Υ����Э���й涨��ʹ�ù���
		<br />7.3 ��ǰ�����������⣬'.$this->_tpl_vars['jieqi_pagetitle'].'ͬʱ�����ڲ�����֪ͨ�û����������ʱ�жϻ���ֹ���ֻ�ȫ����������Ȩ�����������з�����жϻ���ֹ����ɵ��κ���ʧ��'.$this->_tpl_vars['jieqi_pagetitle'].'������û����κε������е��κ����Ρ�
		</p>
		<p>
		8. ΥԼ�⳥
		<br />�û�ͬ�Ᵽ�Ϻ�ά��'.$this->_tpl_vars['jieqi_pagetitle'].'�������û������棬�����û�Υ���йط��ɡ������Э�����µ��κ��������'.$this->_tpl_vars['jieqi_pagetitle'].'���κ����������������ʧ���û�ͬ��е��ɴ���ɵ����⳥���Ρ�
		</p>
		<p>
		9. ���ɹ�Ͻ
		<br />9.1 ��Э��Ķ�����ִ�кͽ��ͼ�����Ľ����Ӧ�����й����ɡ�
		<br />9.2 ��˫���ͱ�Э�����ݻ���ִ�з����κ����飬˫��Ӧ�����Ѻ�Э�̽����Э�̲���ʱ���κ�һ����Ӧ��'.$this->_tpl_vars['jieqi_pagetitle'].'�������������ڵص�����Ժ�������ϡ�
		</p>
		<p>
		10. ֪ͨ���ʹ�
		<br />��Э���������е�֪ͨ����ͨ����Ҫҳ�湫�桢�����ʼ��򳣹���ż����͵ȷ�ʽ���У��õ�֪ͨ�ڷ���֮����Ϊ���ʹ��ռ��ˡ�
		</p>
		<p>
		11. �����涨
		<br />11.1 ��Э�鹹��˫���Ա�Э��֮Լ����������й����˵�����Э�飬����Э��涨��֮�⣬δ���豾Э���������Ȩ����
		<br />11.2 �籾Э���е��κ��������������ԭ����ȫ�򲿷���Ч�򲻾���ִ��������Э�������������Ӧ��Ч������Լ������
		<br />11.3 ��Э���еı����Ϊ������裬���߷��ɻ���ԼЧ����
    </div>

<script type="text/javascript">
layer.ready(function(){
		$(\'#frmregister\').on(\'submit\', function(e){
		e.preventDefault();
		var i = layer.load(0);
				GPage.postForm(\'frmregister\', $("#frmregister").attr("action"),
			   function(data){
					if(data.status==\'OK\'){
					    layer.msg(data.msg,1,{type:1,shade:false},function(){});
						$.ajaxSetup ({ cache: false });
						jumpurl(data.jumpurl);
					}else{
					    layer.close(i);
						layer.alert(data.msg, 8, !1);
					}
			   });
//			}
		});
});
function shxy(){
	$.layer({
		type: 1,
		title: false,
		offset: [\'160px\' , \'\'],
		area: [\'980px\', \'auto\'],
//		shade: [0],
		page: {
			dom: \'#cont\'
		}, 
		success: function(){
//			layer.shift(\'left\',400); //��߶�������
		}
	});
}
</script>';
?>