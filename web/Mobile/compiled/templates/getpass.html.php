<?php
echo '<script type="text/javascript">
function frmgetpass_validate(){
  if(document.frmgetpass.uname.value == ""){
    alert( "�������û���" );
	document.frmgetpass.uname.focus();
	return false;
  }
  if(document.frmgetpass.email.value == ""){
    alert( "������Email" );
	document.frmgetpass.email.focus();
	return false;
  }
}
</script>
<form name="frmgetpass" id="frmgetpass" action="'..'?do=submit" method="post" onsubmit="return frmgetpass_validate();">
<table class="grid" width="60%" style="min-width:480px;">
  <caption>�������룿</caption>
  <tr valign="middle" align="left">
    <td class="tdl" width="25%">˵����</td>
    <td class="tdr" width="75%">�ύ������Ϣ������鿴�������䣬������ʾ�����ӷ��ر�վ�����趨���롣</td>
  </tr>
  <tr valign="middle" align="left">
    <td class="tdl">�û�����</td>
    <td class="tdr"><input type="text" class="text" name="uname" size="25" value="" /></td>
  </tr>
  <tr valign="middle" align="left">
    <td class="tdl">Email��</td>
	<td class="tdr"><input type="text" class="text" name="email" size="25" value="" /></td>
  </tr>
  <tr valign="middle" align="left">
    <td class="tdl">&nbsp;<input type="hidden" name="act" value="sendpass" />'.$this->_tpl_vars['jieqi_token_input'].'</td>
	<td class="tdr"><input type="submit" class="button" name="submit" value="�� ��" /></td>
  </tr>
</table>
</form>';
?>