<?php
echo '<div class="container">
    <style>
        .block {
            border:none;
            background-color:transparent;
            box-shadow: 0 1px 1px 1px #CCC;
            border-radius:5px;
        }
        .block .bd {
            background-color:#fff;
            border-top:none;
            border-bottom-right-radius:5px;
            border-bottom-left-radius:5px;
            display:none;
        }
        .block  .hd {
            background-image:url(http://m.mgwxw.com/_res/css/heiyan/mobile/img/charge/bg.png);
            height:30px;
            overflow:hidden;
            line-height:30px;
            -moz-border-radius-topleft:5px;
            border-top-right-radius:5px;
            border-top-left-radius:5px;
            border-bottom: 1px dashed #E3E3E3;

        }

        .block .hd h4 {
            color:#747474;
        }

        .tb {
            width:100%;
        }

        .tb .text-border{
            width:98%;
            padding:0 1%;
            line-height:30px;
            height:30px;
            border:1px solid #67B7E2;
        }
        .changegold {
            color:#ff6a00;
        }
        .alert {
            margin-bottom:0px;
        }
        ul.bank li {
            width:48%;
            float:left;
            margin-left:1px;
            text-align:center;
            padding:8px 0;
            line-height:30px;
        }


        .cardtb td {
            padding:5px 0;
        }
        .sns,.card {
            background: #ccc;
            clear:both;
        }

        .sns li,.card li {
            list-style:none;
            line-height:24px;
            height:24px;
            float:left;
            width:32%;
            text-align:center;
            background: #369ACE;
            margin-bottom:5px;
            padding:8px 0;

            cursor:pointer;
            color:#fff;

            border-top-right-radius:5px;
            border-top-left-radius:5px;
        }

        .card li:nth-child(2) {
            margin: 0 2%;
        }

        .card li.active {
            font-weight:bold;
            color:#fff;
            background-color:#0F568C;
        }

        .snshr {
            border-bottom: 1px dashed #E3E3E3;
            margin:15px 0;
            height:1px;
        }
        .block {
            margin: 0 10px 15px;
            background: #fff;
        }
        .mod, .mod .bd, .mod .ft, .mod .hd {
            position: relative;
            zoom: 1;
        }
    </style>

    <div class="mod block">
        <div class="hd">
            <span class="fr"><img src="/_res/css/heiyan/mobile/img/charge/wx.png" height="20"></span>
            <h4>΢��(1Ԫ:100'.$this->_tpl_vars['egoldname'].') </h4>
        </div>
        <div class="bd">
            <form name="frmalipay" method="post" action="'.$this->_tpl_vars['jieqi_modules']['pay']['url'].'/zhifukaweixinpay.php">
                <table class="grid" width="100%" align="center">
                    <tr>
                        <td style="font-size:14px;line-height:200%;padding:20px;">
                            <strong>��ѡ����Ҫ�ĳ�ֵ��</strong><br />
                            <div style="width:100%;clear:both;margin-bottom:10px;">
                                <ul>
                                    <li><input type="radio" name="egold" value="50000" class="radio"> 50000'.$this->_tpl_vars['egoldname'].'��500Ԫ��</li>
                                    <li><input type="radio" name="egold" value="20000" class="radio"> 20000'.$this->_tpl_vars['egoldname'].'��200Ԫ��</li>
                                    <li><input type="radio" name="egold" value="10000" class="radio"> 10000'.$this->_tpl_vars['egoldname'].'��100Ԫ��</li>
                                    <li><input type="radio" name="egold" value="5000" class="radio"> 5000 '.$this->_tpl_vars['egoldname'].'��50Ԫ��</li>
                                    <li><input type="radio" name="egold" value="2000" class="radio" checked="checked"> 2000 '.$this->_tpl_vars['egoldname'].'��20Ԫ��</li>
                                    <!--<li><input type="radio" name="egold" value="1000" class="radio"> 1000'.$this->_tpl_vars['egoldname'].'��10Ԫ��</li>-->
                                </ul>
                                <div class="cb"></div>
                            </div>
                            <input type="submit" name="Submit" class="btn btn-blue" value="������һ��" class="button" >
                            <input type="hidden" name="action" value="bankpay">'.$this->_tpl_vars['jieqi_token_input'].'
                        </td>
                    </tr>
                </table>
            </form>
            <div class="space-10"></div>
        </div>
    </div>

    <div class="mod block">
        <div class="hd">
            <span class="fr"><img src="/_res/css/heiyan/mobile/img/charge/wx.png" height="20"></span>
            <h4>΢���ڳ���ʶ���ά�븶��</h4>
        </div>
        <div class="bd">
            <form name="frmalipay" method="post" action="'.$this->_tpl_vars['jieqi_modules']['pay']['url'].'/weixinpay.php">
                <table class="grid" width="100%" align="center">
                    <tr>
                        <td style="font-size:14px;line-height:200%;padding:20px;">
                            <strong>��ѡ����Ҫ�ĳ�ֵ��</strong><br />
                            <div style="width:100%;clear:both;margin-bottom:10px;">
                                <ul>
                                    <li><input type="radio" name="egold" value="50000" class="radio"> 50000'.$this->_tpl_vars['egoldname'].'��500Ԫ��</li>
                                    <li><input type="radio" name="egold" value="20000" class="radio"> 20000'.$this->_tpl_vars['egoldname'].'��200Ԫ��</li>
                                    <li><input type="radio" name="egold" value="10000" class="radio"> 10000'.$this->_tpl_vars['egoldname'].'��100Ԫ��</li>
                                    <li><input type="radio" name="egold" value="5000" class="radio"> 5000 '.$this->_tpl_vars['egoldname'].'��50Ԫ��</li>
                                    <li><input type="radio" name="egold" value="2000" class="radio" checked="checked"> 2000 '.$this->_tpl_vars['egoldname'].'��20Ԫ��</li>
                                    <!--<li><input type="radio" name="egold" value="1000" class="radio"> 1000'.$this->_tpl_vars['egoldname'].'��10Ԫ��</li>-->
                                </ul>
                                <div class="cb"></div>
                            </div>
                            <input type="submit" name="Submit" class="btn btn-blue" value="������һ��" class="button" >
                            <input type="hidden" name="action" value="bankpay">'.$this->_tpl_vars['jieqi_token_input'].'
                        </td>
                    </tr>
                </table>
            </form>
            <div class="space-10"></div>
        </div>
    </div>

    <!--<div class="mod block">-->
        <!--<div class="hd">-->
            <!--<span class="fr"><img src="/_res/css/heiyan/mobile/img/charge/qqpay.png" height="20"></span>-->
            <!--<h4>�ֻ�QQ��ֵ(1Ԫ:100'.$this->_tpl_vars['egoldname'].') </h4>-->
        <!--</div>-->
        <!--<div class="bd">-->
            <!--<form name="frmalipay" method="post" action="'.$this->_tpl_vars['jieqi_modules']['pay']['url'].'/qqpay.php">-->
                <!--<table class="grid" width="100%" align="center">-->
                    <!--<tr>-->
                        <!--<td style="font-size:14px;line-height:200%;padding:20px;">-->
                            <!--<strong>��ѡ����Ҫ�ĳ�ֵ��</strong><br />-->
                            <!--<div style="width:100%;clear:both;margin-bottom:10px;">-->
                                <!--<ul>-->
                                    <!--<li><input type="radio" name="egold" value="50000" class="radio"> 50000'.$this->_tpl_vars['egoldname'].'��500Ԫ��</li>-->
                                    <!--<li><input type="radio" name="egold" value="20000" class="radio"> 20000'.$this->_tpl_vars['egoldname'].'��200Ԫ��</li>-->
                                    <!--<li><input type="radio" name="egold" value="10000" class="radio"> 10000'.$this->_tpl_vars['egoldname'].'��100Ԫ��</li>-->
                                    <!--<li><input type="radio" name="egold" value="5000" class="radio"> 5000 '.$this->_tpl_vars['egoldname'].'��50Ԫ��</li>-->
                                    <!--<li><input type="radio" name="egold" value="2000" class="radio" checked="checked"> 2000 '.$this->_tpl_vars['egoldname'].'��20Ԫ��</li>-->
                                    <!--&lt;!&ndash;<li><input type="radio" name="egold" value="1000" class="radio"> 1000'.$this->_tpl_vars['egoldname'].'��10Ԫ��</li>&ndash;&gt;-->
                                <!--</ul>-->
                                <!--<div class="cb"></div>-->
                            <!--</div>-->
                            <!--<input type="submit" name="Submit" class="btn btn-blue" value="������һ��" class="button" >-->
                            <!--<input type="hidden" name="action" value="bankpay">'.$this->_tpl_vars['jieqi_token_input'].'-->
                        <!--</td>-->
                    <!--</tr>-->
                <!--</table>-->
            <!--</form>-->
            <!--<div class="space-10"></div>-->
        <!--</div>-->
    <!--</div>-->


    <div class="mod block">
        <div class="hd">
            <span class="fr"><img src="/_res/css/heiyan/mobile/img/charge/alipay.png" height="20"></span>
            <h4>֧����(1Ԫ:100'.$this->_tpl_vars['egoldname'].') </h4>
        </div>
        <div class="bd">
            <form name="frmalipay" method="post" action="'.$this->_tpl_vars['jieqi_modules']['pay']['url'].'/alipay.php">
                <table class="grid" width="100%" align="center">
                    <caption>֧������ֵ</caption>
                    <tr>
                        <td style="font-size:14px;line-height:200%;padding:20px;">
                            <strong>��ѡ����Ҫ�ĳ�ֵ��</strong><br />
                            <div style="width:100%;clear:both;margin-bottom:10px;">
                                <ul class="recnTul">
                                    <li onclick="check_radio();"><input type="radio" name="egold" value="50000" class="radio"> 50000'.$this->_tpl_vars['egoldname'].'<span>500Ԫ</span></li>
                                    <li onclick="check_radio();"><input type="radio" name="egold" value="20000" class="radio"> 20000'.$this->_tpl_vars['egoldname'].'<span>200Ԫ</span></li>
                                    <li onclick="check_radio();"><input type="radio" name="egold" value="10000" class="radio"> 10000'.$this->_tpl_vars['egoldname'].'<span>100Ԫ</span></li>
                                    <li onclick="check_radio();"><input type="radio" name="egold" value="5000" class="radio"> 5000 '.$this->_tpl_vars['egoldname'].'<span>50Ԫ</span></li>
                                    <li onclick="check_radio();"><input type="radio" name="egold" value="2000" class="radio" checked="checked"> 2000 '.$this->_tpl_vars['egoldname'].'<span>20Ԫ</span></li>
                                    <!-- <li onclick="check_radio();"><input type="radio" name="egold" value="1000" class="radio"> 1000 '.$this->_tpl_vars['egoldname'].'<span>10Ԫ</span></li>-->
                                </ul>
                                <div class="cb"></div>
                            </div>
                            <input type="submit" name="Submit" value="������һ��" class="btn btn-blue" >
                            <input type="hidden" name="action" value="bankpay">
                        </td>
                    </tr>
                </table>
            </form>
            <div class="space-10"></div>
            <div class="alert alert-error">��ע�⣬��һ��ʹ����Ҫ����������ʱ����Ҫ����֧�����룬�ǵ�½���롣</div>
        </div>
    </div>


    <script>

        $(".block  .hd").click(function () {
            var me = $(this);
            me.parent().find(".bd").toggle();
        })
    </script>
</div>';
?>