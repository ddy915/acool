;(function($){var em=[{'id':1,'phrase':'[微笑]','url':'1.gif'},{'id':2,'phrase':'[撇嘴]','url':'2.gif'},{'id':3,'phrase':'[色]','url':'3.gif'},{'id':4,'phrase':'[发呆]','url':'4.gif'},{'id':5,'phrase':'[得意]','url':'5.gif'},{'id':6,'phrase':'[流泪]','url':'6.gif'},{'id':7,'phrase':'[害羞]','url':'7.gif'},{'id':8,'phrase':'[闭嘴]','url':'8.gif'},{'id':9,'phrase':'[睡]','url':'9.gif'},{'id':10,'phrase':'[大哭]','url':'10.gif'},{'id':11,'phrase':'[尴尬]','url':'11.gif'},{'id':12,'phrase':'[发怒]','url':'12.gif'},{'id':13,'phrase':'[调皮]','url':'13.gif'},{'id':14,'phrase':'[呲牙]','url':'14.gif'},{'id':15,'phrase':'[惊讶]','url':'15.gif'},{'id':16,'phrase':'[难过]','url':'16.gif'},{'id':17,'phrase':'[酷]','url':'17.gif'},{'id':18,'phrase':'[冷汗]','url':'18.gif'},{'id':19,'phrase':'[抓狂]','url':'19.gif'},{'id':20,'phrase':'[吐]','url':'20.gif'},{'id':21,'phrase':'[偷笑]','url':'21.gif'},{'id':22,'phrase':'[可爱]','url':'22.gif'},{'id':23,'phrase':'[白眼]','url':'23.gif'},{'id':24,'phrase':'[傲慢]','url':'24.gif'},{'id':25,'phrase':'[饥饿]','url':'25.gif'},{'id':26,'phrase':'[困]','url':'26.gif'},{'id':27,'phrase':'[惊恐]','url':'27.gif'},{'id':28,'phrase':'[流汗]','url':'28.gif'},{'id':29,'phrase':'[憨笑]','url':'29.gif'},{'id':30,'phrase':'[大兵]','url':'30.gif'},{'id':31,'phrase':'[奋斗]','url':'31.gif'},{'id':32,'phrase':'[咒骂]','url':'32.gif'},{'id':33,'phrase':'[疑问]','url':'33.gif'},{'id':34,'phrase':'[嘘]','url':'34.gif'},{'id':35,'phrase':'[晕]','url':'35.gif'},{'id':36,'phrase':'[折磨]','url':'36.gif'},{'id':37,'phrase':'[衰]','url':'37.gif'},{'id':38,'phrase':'[骷髅]','url':'38.gif'},{'id':39,'phrase':'[敲打]','url':'39.gif'},{'id':40,'phrase':'[再见]','url':'40.gif'},{'id':41,'phrase':'[擦汗]','url':'41.gif'},{'id':42,'phrase':'[抠鼻]','url':'42.gif'},{'id':43,'phrase':'[鼓掌]','url':'43.gif'},{'id':44,'phrase':'[糗大了]','url':'44.gif'},{'id':45,'phrase':'[坏笑]','url':'45.gif'},{'id':46,'phrase':'[左哼哼]','url':'46.gif'},{'id':47,'phrase':'[右哼哼]','url':'47.gif'},{'id':48,'phrase':'[哈欠]','url':'48.gif'},{'id':49,'phrase':'[鄙视]','url':'49.gif'},{'id':50,'phrase':'[委屈]','url':'50.gif'},{'id':51,'phrase':'[快哭了]','url':'51.gif'},{'id':52,'phrase':'[阴险]','url':'52.gif'},{'id':53,'phrase':'[亲亲]','url':'53.gif'},{'id':54,'phrase':'[吓]','url':'54.gif'},{'id':55,'phrase':'[可怜]','url':'55.gif'},{'id':56,'phrase':'[菜刀]','url':'56.gif'},{'id':57,'phrase':'[西瓜]','url':'57.gif'},{'id':58,'phrase':'[啤酒]','url':'58.gif'},{'id':59,'phrase':'[篮球]','url':'59.gif'},{'id':60,'phrase':'[乒乓]','url':'60.gif'},{'id':61,'phrase':'[咖啡]','url':'61.gif'},{'id':62,'phrase':'[饭]','url':'62.gif'},{'id':63,'phrase':'[猪头]','url':'63.gif'},{'id':64,'phrase':'[玫瑰]','url':'64.gif'},{'id':65,'phrase':'[凋谢]','url':'65.gif'},{'id':66,'phrase':'[示爱]','url':'66.gif'},{'id':67,'phrase':'[爱心]','url':'67.gif'},{'id':68,'phrase':'[心碎]','url':'68.gif'},{'id':69,'phrase':'[蛋糕]','url':'69.gif'},{'id':70,'phrase':'[闪电]','url':'70.gif'},{'id':71,'phrase':'[炸弹]','url':'71.gif'},{'id':72,'phrase':'[刀]','url':'72.gif'},{'id':73,'phrase':'[足球]','url':'73.gif'},{'id':74,'phrase':'[瓢虫]','url':'74.gif'},{'id':75,'phrase':'[便便]','url':'75.gif'},{'id':76,'phrase':'[月亮]','url':'76.gif'},{'id':77,'phrase':'[太阳]','url':'77.gif'},{'id':78,'phrase':'[礼物]','url':'78.gif'},{'id':79,'phrase':'[拥抱]','url':'79.gif'},{'id':80,'phrase':'[强]','url':'80.gif'},{'id':81,'phrase':'[弱]','url':'81.gif'},{'id':82,'phrase':'[握手]','url':'82.gif'},{'id':83,'phrase':'[胜利]','url':'83.gif'},{'id':84,'phrase':'[抱拳]','url':'84.gif'},{'id':85,'phrase':'[勾引]','url':'85.gif'},{'id':86,'phrase':'[拳头]','url':'86.gif'},{'id':87,'phrase':'[差劲]','url':'87.gif'},{'id':88,'phrase':'[爱你]','url':'88.gif'},{'id':89,'phrase':'[NO]','url':'89.gif'},{'id':90,'phrase':'[OK]','url':'90.gif'},{'id':91,'phrase':'[爱情]','url':'91.gif'},{'id':92,'phrase':'[飞吻]','url':'92.gif'},{'id':93,'phrase':'[跳跳]','url':'93.gif'},{'id':94,'phrase':'[发抖]','url':'94.gif'},{'id':95,'phrase':'[怄火]','url':'95.gif'},{'id':96,'phrase':'[转圈]','url':'96.gif'},{'id':97,'phrase':'[磕头]','url':'97.gif'},{'id':98,'phrase':'[回头]','url':'98.gif'},{'id':99,'phrase':'[跳绳]','url':'99.gif'},{'id':100,'phrase':'[挥手]','url':'100.gif'},{'id':101,'phrase':'[激动]','url':'101.gif'},{'id':102,'phrase':'[街舞]','url':'102.gif'},{'id':103,'phrase':'[献吻]','url':'103.gif'},{'id':104,'phrase':'[左太极]','url':'104.gif'},{'id':105,'phrase':'[右太极]','url':'105.gif'}];function setCursorPosition(ctrl,pos){if(ctrl.setSelectionRange){ctrl.focus();ctrl.setSelectionRange(pos,pos);}else if(ctrl.createTextRange){var range=ctrl.createTextRange();range.collapse(true);range.moveEnd('character',pos);range.moveStart('character',pos);range.select();}}
function getPositionForTextArea(obj)
{var Sel=document.selection.createRange();var Sel2=Sel.duplicate();Sel2.moveToElementText(obj);var CaretPos=-1;while(Sel2.inRange(Sel)){Sel2.moveStart('character');CaretPos++;}
return CaretPos;}
$.fn.extend({jqfaceedit:function(options){var defaults={txtAreaObj:'',containerObj:'',textareaid:'msg',popName:'',emotions:em,top:0,left:0,faceImgPath:''};options=$.extend(defaults,options);var cpos=0;var textareaid=options.textareaid;return this.each(function(){var Obj=$(this);var container=options.containerObj;if(document.selection){options.txtAreaObj.bind("click keyup",function(e){e.stopPropagation();cpos=getPositionForTextArea(document.getElementById(textareaid)?document.getElementById(textareaid):window.frames[options.popName].document.getElementById(textareaid));});}
$(Obj).bind("click",function(e){e.stopPropagation();var faceHtml='<div id="face">';faceHtml+='<div id="texttb"><a class="f_close" title="关闭" href="javascript:void(0);"></a></div>';faceHtml+='<div id="facebox">';faceHtml+='<div id="face_detail" class="facebox cf"><dl>';for(i=0;i<options.emotions.length;i++){faceHtml+='<dd text='+options.emotions[i].phrase+' type='+i+'><img title='+options.emotions[i].phrase+' src="'+options.faceImgPath+'/emotions/'+options.emotions[i].url+'"  style="cursor:pointer;"   /></dd>';}
faceHtml+='</dl></div>';faceHtml+='</div><div class="arrow_f arrow_t"></div></div>';container.find('#face').remove();container.append(faceHtml);container.find("#face_detail dl > dd").bind("click",function(e){var txt=$(this).attr("text");var faceText=txt;var tclen=options.txtAreaObj.val().length;var tc=document.getElementById(textareaid);if(options.popName){tc=window.frames[options.popName].document.getElementById(textareaid);}
var pos=0;if(typeof document.selection!="undefined"){options.txtAreaObj.focus();setCursorPosition(tc,cpos);document.selection.createRange().text=faceText;pos=getPositionForTextArea(tc);}else{pos=tc.selectionStart+faceText.length;options.txtAreaObj.val(options.txtAreaObj.val().substr(0,tc.selectionStart)+faceText+options.txtAreaObj.val().substring(tc.selectionStart,tclen));}
cpos=pos;setCursorPosition(tc,pos);});container.find(".f_close").bind("click",function(){container.find("#face").remove();});$('body').bind("click",function(e){e.stopPropagation();container.find('#face').remove();$(this).unbind('click');});if(options.popName!=''){$(window.frames[options.popName].document).find('body').bind("click",function(e){e.stopPropagation();container.find('#face').remove();});}
container.find('#face').bind("click",function(e){e.stopPropagation();});container.find("#face").show();});});},emotionsToHtml:function(options){return this.each(function(){var msgObj=$(this);var rContent=msgObj.html();var regx=/(\[[\u4e00-\u9fa5]*\w*\]){1}/g;var rs=rContent.match(regx);if(rs){for(i=0;i<rs.length;i++){for(n=0;n<em.length;n++){if(em[n].phrase==rs[i]){var t="<img src='"+options.faceImgPath+"/emotions/"+em[n].url+"' />";rContent=rContent.replace(rs[i],t);break;}}}}
msgObj.html(rContent);});}});})(jQuery);;(function($){var _util=CS.util,_uiBinder=CS.uiBinder,_dialog=CS.dialog,_mask=CS.mask,_loginPopup=CS.loginPopup;var _params={},_options={},_objMask=null,_showTabList=['recommend','reward','monthTicket'],_isSubmitingMonthTicket=0,_isSubmitingRecommend=0,_isSubmitingReward=0,_popup_nodes=null,_showPopupCss='pop_show',_selectedTabCss='nav_current';var _tips={'defaultRewardContent':'这本书太棒了！鼓励一下，希望后续更加精彩！'};var _popup_tpl=['<div attr="inner:popup;" class="readerInteractPopup" style="display:none;">','<div class="sakura">','<h1>','<a attr="click:closePopup;" class="close_btn_old close_btn2" href="javascript:"></a>','《<%=bookName%>》读者互动','</h1>','<div attr="inner:tabList;" class="sakura_nav">','<a attr="inner:recommendTab;click:switchTab;" interactiontype="recommend" href="javascript:;" style="display:none;">投推荐票</a>','<a attr="inner:monthTicketTab;click:switchTab;" interactiontype="monthTicket" href="javascript:;" style="display:none;">月  票</a>','<a attr="inner:rewardTab;click:switchTab;" interactiontype="reward" href="javascript:;" style="display:none;"><%=rewardDefaultText%></a>','</div>','<h2 class="topshadow"></h2>','<div attr="inner:content;" class="pop_cont"></div>','</div>','</div>'].join('');function init(params,options){_params=$.extend({'bookName':'','bid':'','getInteractonContent_ajaxUrl':'','submitReward_ajaxUrl':'','submitRecommend_ajaxUrl':'','submitMonthTicket_ajaxUrl':''},params||{});_options=$.extend({'showMonthTicket':0,'rewardDefaultText':'打  赏'},options||{});}
function openPopup(type){if(!_util.isLogin()){_loginPopup.open();return false;}
if(!_popup_nodes){_popup_nodes=_uiBinder.appendHTML(document.body,_util.sim2tra(_popup_tpl),{'bookName':_params.bookName,'rewardDefaultText':_options.rewardDefaultText},{'closePopup':function(){_objMask.close();},'switchTab':_switchPopupTab});_objMask=new _mask(_popup_nodes.popup);}
if(_popup_nodes){var tabName='';for(var i=0,len=_showTabList.length;i<len;i++){tabName=_showTabList[i];if(tabName==='monthTicket'&&!_options.showMonthTicket){continue;}
$(_popup_nodes[tabName+'Tab']).removeClass(_selectedTabCss).show();}
$("a[interactiontype='"+type+"']",_popup_nodes.tabList).addClass(_selectedTabCss);_objMask.open();_renderInteractContent(type);}
return false;}
function _renderInteractContent(type){if(!_params.getInteractonContent_ajaxUrl||!type){return;}
_util.request({url:_params.getInteractonContent_ajaxUrl,data:{'page':type,'bid':_params.bid},type:'get',dataType:"json",success:function(json){_renderInteractContentCallback(type,json);}});}
function _renderInteractContentCallback(type,tpl){if(!_popup_nodes||!_popup_nodes['content']){return;}
var events={};$(_popup_nodes['content']).html('');switch(type){case'reward':events={'clearCommentDefaultText':_clearRewardCommentDefaultText,'setCommentDefaultText':_setRewardCommentDefaultText,'submitReward':_submitReward};break;case'recommend':events={'submitRecommend':_submitRecommend};break;case'monthTicket':events={'submitMonthTicket':_submitMonthTicket,'switchTab':function(){$(_popup_nodes.rewardTab).trigger('click');}};break;default:break;}
var nodes=_uiBinder.appendHTML(_popup_nodes['content'],tpl,{},events);if(nodes.commentInput){_tips.defaultRewardContent=nodes.commentInput.value;}
var $rewardTips=$("#TextareaTipsArr");if($rewardTips.length>0&&$rewardTips.html().length>0){var rewardCommentList=$.parseJSON($rewardTips.text());if(rewardCommentList){_bindRewardGoldRadioEvent(nodes,rewardCommentList);}}}
function _bindRewardGoldRadioEvent(nodes,rewardCommentList){var $goldRadio=$(nodes.rewardContainer).find('input[type="radio"]');$goldRadio.change(function(){var tips=rewardCommentList[$goldRadio.index(this)];if(tips){nodes.commentInput.value=_util.sim2tra(tips);_tips.defaultRewardContent=tips;}});}
function _switchPopupTab(e,el,nodes){$("a",nodes.tabList).each(function(){$(this).removeClass(_selectedTabCss);});$(el).addClass(_selectedTabCss);_renderInteractContent($(el).attr("interactiontype"));return false;}
function _submitReward(e,el,nodes){if(!_util.isLogin()){$(".close_btn2").click();_loginPopup.open();return;}
if(_isSubmitingReward){return false;}
var goldCount=$("input[type='radio']:checked",nodes.rewardContainer).val(),remainedGoldCount=$(el).attr('goldcount');remainedGoldCount=remainedGoldCount?parseInt(remainedGoldCount,10):0;if(!_params.submitReward_ajaxUrl||!_params.bid){_dialog.alert('提交地址或书id未获取到');return false;}
if(!goldCount){_dialog.alert("您还没有设定打赏金额，请选择后再确认打赏!");return false;}
if(goldCount>remainedGoldCount){_dialog.alert("您的账户余额不足，请充值后再进行打赏!");return false;}
var commentLength=$.trim(nodes.commentInput.value).length;if(commentLength<6){_dialog.alert('您的寄语太短了，请输入至少6个字的评论内容！');return false;}else if(commentLength>500){_dialog.alert('您的寄语太长了，请输入至多500个字的评论内容！');return false;}
var commentContent=$(nodes.commentInput).val(),commentHtml=$('<div />').text(commentContent).html();_isSubmitingReward=1;_util.request({url:_params.submitReward_ajaxUrl,data:{'bid':_params.bid,'amount':goldCount,'review':commentHtml},type:'post',dataType:"json",success:function(json){if(json.info){_dialog.alert(json.info);}
if(json.status){$(".close_btn_oldsdo, .close_btn_old").click();}},error:function(){},complete:function(){_isSubmitingReward=0;}});return false;}
function _clearRewardCommentDefaultText(e,el,nodes){if(nodes.commentInput&&$.trim(nodes.commentInput.value)===_util.sim2tra(_tips.defaultRewardContent)){nodes.commentInput.value='';}}
function _setRewardCommentDefaultText(e,el,nodes){if(nodes.commentInput&&$.trim(nodes.commentInput.value).length===0){nodes.commentInput.value=_util.sim2tra(_tips.defaultRewardContent);}}
function _submitRecommend(e,el,nodes){if(!_util.isLogin()){$(".close_btn2").click();_loginPopup.open();return;}
if(_isSubmitingRecommend){return false;}
var voteCount=$('input[name=recommend_num]:checked',nodes.recommendContainer).val(),remainedVoteCount=$(el).attr('votecount');remainedVoteCount=remainedVoteCount?parseInt(remainedVoteCount,10):0;if(!_params.submitRecommend_ajaxUrl||!_params.bid){_dialog.alert('提交地址或书id未获取到');return false;}
if(!voteCount){_dialog.alert("您还没有设定投票数量，请选择后再确认投票!");return false;}
if(voteCount>remainedVoteCount){_dialog.alert("剩余推荐票数量不足，请重新设定投票数!");return false;}
_isSubmitingRecommend=1;_util.request({url:_params.submitRecommend_ajaxUrl,data:{'bid':_params.bid,'Votenum':voteCount},type:'post',dataType:"json",success:function(json){if(json.info){_dialog.alert(json.info);}
if(json.status){$(".close_btn_old").click();}},error:function(){},complete:function(){_isSubmitingRecommend=0;}});return false;}
function _submitMonthTicket(e,el,nodes){if(!_util.isLogin()){$(".close_btn2").click();_loginPopup.open();return;}
if(_isSubmitingMonthTicket){return false;}
var ticketCount=$('input[name=Monthly_num]:checked',nodes.monthTicketContainer).val(),remainedTicketCount=$(el).attr('ticketcount');remainedTicketCount=remainedTicketCount?parseInt(remainedTicketCount,10):0;if(!_params.submitMonthTicket_ajaxUrl||!_params.bid){_dialog.alert('提交地址或书id未获取到');return false;}
if(ticketCount==="Monthly_num_value"){ticketCount=nodes.ticketCountInput.value;}
if(!ticketCount){_dialog.alert("您还没有设定投票数量，请选择后再确认投票!");return false;}
if(ticketCount>remainedTicketCount){_dialog.alert("剩余月票数量不足，请重新设定投票数!");return false;}
_isSubmitingMonthTicket=1;_util.request({url:_params.submitMonthTicket_ajaxUrl,data:{'bid':_params.bid,'ticketCount':ticketCount},type:'post',dataType:"json",success:function(json){if(json.info){_dialog.alert(json.info);}
if(json.status){$(".close_btn_old").click();}},error:function(){},complete:function(){_isSubmitingMonthTicket=0;}});return false;}
_util.initNameSpace("CS");CS.readerInteract={'init':init,'openPopup':openPopup};})(jQuery);;(function($){var _util=CS.util,_dialog=CS.dialog,_mask=CS.mask,_readerInteract=CS.readerInteract;var _params={};var _mask_surveyItemPopup=null;function init(bid,isVipNovel,interactionCenterTabIndex,getInteractionCenterAjaxUrl,submitSurveyAjaxUrl,getSurveyResultAjaxUrl){_params.bid=bid||0;_params.isVipNovel=isVipNovel||0;_params.interactionCenterTabIndex=interactionCenterTabIndex||0;_params.getInteractionCenterAjaxUrl=getInteractionCenterAjaxUrl||'';_params.submitSurveyAjaxUrl=submitSurveyAjaxUrl||'';_params.getSurveyResultAjaxUrl=getSurveyResultAjaxUrl||'';_getData();}
function _bindEvent(){$(".tabswish").on('click','a',function(){var tabId=$(this).attr("stab"),$tabBox=$(this).parent("div");$(".swishnev").hide();$tabBox.removeClass('tabstyle').addClass("active");$tabBox.siblings('div').removeClass('active').addClass("tabstyle");$("#"+tabId).show();return false;});$("#recommendBtnpup").on("click",function(){_readerInteract.openPopup('recommend');return false;});$("#rewordBtnpup").on("click",function(){_readerInteract.openPopup('reward');return false;});$("#monthTictPopupBtn").on("click",function(){if(_params.isVipNovel==0){_dialog.alert('本书尚未开通VIP，暂时无法获得月票!');return false;}
_readerInteract.openPopup('monthTicket');return false;});$("#surveyjoinBtn").on('click',function(){var surveyId=$("input[name='surveyId']").val(),selectedSurveyItemId=$("input[name='survote']:checked").val();_submitSurvey(surveyId,selectedSurveyItemId);return false;});$("#surveyresultBtn").on("click",function(){var surveyId=$("input[name='surveyId']").val();_showSurveyResult(surveyId);return false;});}
function _bindSurveyResultPopupEvent(){$("#surveyitempobup .close2").on("click",function(){if(_mask_surveyItemPopup){_mask_surveyItemPopup.close();}});}
function _getData(){_util.request({url:_params.getInteractionCenterAjaxUrl,data:{bid:_params.bid,tab:_params.interactionCenterTabIndex},type:'get',dataType:"json",success:function(json){if(json&&'content'in json){$("#interactcenter").html(json.content).show();_bindEvent();}}});}
function _submitSurvey(surveyId,selectedSurveyItemId){if(!selectedSurveyItemId){_dialog.alert("选择不能为空");return;}
_util.request({url:_params.submitSurveyAjaxUrl,data:{'bid':_params.bid,'sid':surveyId,'itemId':selectedSurveyItemId},type:"post",dataType:"json",success:function(json){if(!json){return;}
if(json.info){_dialog.alert(json.info);}
if(json.code===-1){$(".btnpoplogin").click();}}});}
function _showSurveyResult(surveyId){_util.request({url:_params.getSurveyResultAjaxUrl,data:{'sid':surveyId},type:"get",dataType:"json",success:function(json){if(!json){return;}
$("#surveyitempobup").html(json);if(!_mask_surveyItemPopup){_mask_surveyItemPopup=new _mask($("#surveyitempobup"));}
_mask_surveyItemPopup.open();_bindSurveyResultPopupEvent();}});}
_util.initNameSpace("CS.page");CS.page.interactionCenter={"init":init};})(jQuery);;(function($){var _util=CS.util,_dialog=CS.dialog,_loginPopup=CS.loginPopup;var _params={};var _commentContent_maxLen=5000,_isSubmittingComment=0,_defaultCommentTitle='请输入标题';function init(bid,novel_pic,verifyImgUrl,faceImgPath,getCommentListAjaxUrl,up_ajaxUrl,applyHelper_ajaxUrl,submitComment_ajaxUrl){_params.bid=bid||0;_params.novel_pic=novel_pic||'';_params.verifyImgUrl=verifyImgUrl||'';_params.faceImgPath=faceImgPath||'';_params.getCommentListAjaxUrl=getCommentListAjaxUrl||'';_params.up_ajaxUrl=up_ajaxUrl||'';_params.applyHelper_ajaxUrl=applyHelper_ajaxUrl||'';_params.submitComment_ajaxUrl=submitComment_ajaxUrl||'';_getCommentList();}
function _getCommentList(){_util.request({url:_params.getCommentListAjaxUrl,data:{'bid':_params.bid},type:'get',dataType:"json",success:function(json){if(json&&'data'in json){if(json.data.html){$('#intro_comments').html(json.data.html);_bindEvent();}
if(json.data.commentNum){$('#novelInfo_commentCount').text(json.data.commentNum);}}}});}
function _bindEvent(){var $verifyCodeInput=$("#verifyInput");if($verifyCodeInput.length>0){setTimeout(_fleshVerify,1000);$verifyCodeInput.focus(function(){if($(this).val().length===0){_fleshVerify();}});$('#verifyImg').on('click',_fleshVerify);}
$('#commentTitle').on('focus',_setCommentTitleFocus);$('#commentTitle').on('blur',_setCommentTitleBlur);$('#commentContent').keyup(_commentContentInputHandler);$('#submitCommentBtn').on('click',_submitComment);$('#hotCommentTab, #newCommentTab').on('click',_switchCommentList);$('#hotCommentList .nsupport, #newCommentList .nsupport').on('click',_submitUp);$('.applyhelper').on('click',_applyHelper);$('#hotCommentList a[weibotype], #newCommentList a[weibotype]').on('click',function(){return _weiboShare($(this).attr('weibotype'),$(this).parent().siblings('.nev').text());});$("#message_face").jqfaceedit({txtAreaObj:$("#commentContent"),containerObj:$('.leftbtn'),textareaid:"commentContent",top:5,left:-45,faceImgPath:_params.faceImgPath});$("#show_face").click(function(){$('.show_e').html($('#commentContent').val());$('.show_e').emotionsToHtml();});}
function _switchCommentList(){$('#hotCommentTabBox, #newCommentTabBox').removeClass('choice');$(this.parentNode).addClass('choice');$('#hotCommentList, #newCommentList').hide();$('#'+$(this).attr('commentlistid')).show();return false;}
function _fleshVerify(){$('#verifyImg').attr('src',_params.verifyImgUrl+"?rnd="+new Date().getTime());return false;}
function _setCommentTitleFocus(){if(this&&this.value===_util.sim2tra(_defaultCommentTitle)){this.style.color="black";this.value='';}}
function _setCommentTitleBlur(){if(this&&$.trim(this.value)===''){this.style.color="gray";this.value=_util.sim2tra(_defaultCommentTitle);}}
function _commentContentInputHandler(){var el=$(this),inputVal=el.val();if(inputVal.length>_commentContent_maxLen){el.val(inputVal.substring(0,_commentContent_maxLen));}
$('#leftWord').html(_commentContent_maxLen-el.val().length);}
function _submitUp(){var cid=$(this).attr('idx'),upBtn=this;_util.request({url:_params.up_ajaxUrl,data:{'cid':cid},type:'get',dataType:"json",success:function(json){if(json.status){var upCountObj=$("num",upBtn),upCount=parseInt(upCountObj.html(),10)+1;upCountObj.html(upCount);}}});}
function _applyHelper(){_dialog.confirm("您确认要申请成为本书副版主？",function(){_util.request({url:_params.applyHelper_ajaxUrl,data:{'bid':_params.bid},type:'get',dataType:"json",success:function(json){if(json.info){_dialog.alert(json.info);}
if(json.code===1001){if(json.data&&json.data.url){window.location=json.data.url;}}else if(json.code===-1){_loginPopup.open();}}});});return false;}
function _submitComment(){var title=$.trim($('#commentTitle').val()),text=$.trim($('#commentContent').val()),$verifyCodeInput=$('#verifyInput'),cmtverify=$verifyCodeInput.length>0?$verifyCodeInput.val():'0';if(!_util.isLogin()){_loginPopup.open();return false;}
if(title.length===0||title===_util.sim2tra(_defaultCommentTitle)){_dialog.alert('请输入评论标题');$('#commentTitle').focus();return false;}
if(text.length===0){_dialog.alert('请输入评论内容');$('#commentContent').focus();return false;}
if($verifyCodeInput.length>0&&cmtverify.length!=5){_dialog.alert('验证码不正确!');$verifyCodeInput.val("").focus();return false;}
if(_isSubmittingComment){return;}
_isSubmittingComment=1;_util.request({url:_params.submitComment_ajaxUrl,data:{'bid':_params.bid,'title':title,'text':text,'verify':cmtverify},type:'post',dataType:"json",success:function(json){if(json.status){$('#commentTitle').val('');$('#commentContent').val('');_dialog.alert(json.info,function(){_getCommentList();});}else if(json.info){_dialog.alert(json.info);}},complete:function(){_isSubmittingComment=0;}});return false;}
function _weiboShare(weiboType,title){var weiboShareUrl='';if(weiboType=='sina'){weiboShareUrl='http://service.weibo.com/share/share.php?';}else if(weiboType=='qq'){weiboShareUrl='http://share.v.t.qq.com/index.php?c=share&a=index&';}
var param={url:window.location.href,title:title,pic:_params.novel_pic,rnd:new Date().valueOf()};var arr_param=[];for(var p in param){arr_param.push(p+'='+encodeURIComponent(param[p]||''));}
window.parent.location.href=weiboShareUrl+arr_param.join('&');return false;}
_util.initNameSpace("CS.page.intro");CS.page.intro.comment={"init":init};})(jQuery);;(function($){var _util=CS.util,_dialog=CS.dialog;var _params={};var _isCheckFeed=0,_isGetNovelTree=0;function init(bid,getTreeAjaxUrl,feedTreeAjaxUrl,checkUserFeedToolAjaxUrl){_params.bid=bid||'0';_params.getTreeAjaxUrl=getTreeAjaxUrl||'';_params.feedTreeAjaxUrl=feedTreeAjaxUrl||'';_params.checkUserFeedToolAjaxUrl=checkUserFeedToolAjaxUrl||'';_bindEvent();}
function _bindEvent(){var $treeDetailBox=$("#noveltreedetail");$("#novelTreemin").on('click',function(){_getNovelTree();$treeDetailBox.show();});}
function _bindTreeEvent(){var $growRecord=$('#growRecord');$('#dynamicBtn').toggle(function(){$(this).text(_util.sim2tra('成长树动态 +'));$growRecord.slideUp(200);},function(){$(this).text(_util.sim2tra('成长树动态 -'));$growRecord.slideDown(200);});$("#waterfeedway").hover(function(){$(this).removeClass('water').addClass('watering');},function(){$(this).removeClass('watering').addClass('water');});$("#fertifeedway").hover(function(){$(this).removeClass('fertilize').addClass('fertilization');},function(){$(this).removeClass('fertilization').addClass('fertilize');});$("#treeClose").on('click',function(){$("#noveltreedetail").hide();return false;});$("#treeProp a").on('click',function(e){var type=$(this).attr("type");_checkFeed(type);return false;});}
function _checkFeed(type){if(type==1){$("#waterfeedway").removeClass('water').addClass('watering');}else{$("#fertifeedway").removeClass('fertilize').addClass('fertilization');}
if(_isCheckFeed===1){return;}
_isCheckFeed=1;_util.request({url:_params.checkUserFeedToolAjaxUrl,data:{'bid':_params.bid,'type':type},type:'post',dataType:"json",success:function(json){if(!json){return;}
if(json.status){_dialog.confirm(json.info,function(){_useFeed(type);});}else if(json.info){_dialog.alert(json.info);}},error:function(){_dialog.alert('网络异常，请稍候再试');},complete:function(){_isCheckFeed=0;}});}
function _useFeed(type){_util.request({url:_params.feedTreeAjaxUrl,data:{'bid':_params.bid,'type':type},type:'post',dataType:"json",success:function(json){if(!json){return;}
if(json.info){_dialog.alert(json.info);}
if(json.status){_getNovelTree();}},error:function(){_dialog.alert('网络异常，请稍候再试');}});}
function _getNovelTree(){if(_isGetNovelTree===1){return;}
_isGetNovelTree=1;_util.request({url:_params.getTreeAjaxUrl,data:{'bid':_params.bid,'t':Math.random()},type:'post',dataType:"json",success:function(json){$("#noveltreedetail").html(json.data.content);if(json.data.Grade>0){$("#novelTreemin a").addClass('level'+json.data.Grade);}
_bindTreeEvent();},error:function(){_dialog.alert('网络异常，请稍候再试');},complete:function(){_isGetNovelTree=0;}});}
_util.initNameSpace("CS.page.intro.tree");CS.page.intro.tree={"init":init};})(jQuery);;(function($){var _util=CS.util,_mask=CS.mask,_dialog=CS.dialog,_loginPopup=CS.loginPopup;var _params={},_maskByVotePopup=null;function init(bid,authorId,getVoteNumAjaxUrl,votePopupUrl){_params.bid=bid||0;_params.authorId=authorId||0;_params.getVoteNumAjaxUrl=getVoteNumAjaxUrl||'';_params.votePopupUrl=votePopupUrl||'';if($('#goodOriginalBox').length>0){_getVoteNum();}
_bindEvent();}
function _bindEvent(){$('#goodOriginalOpenVotePopupBtn').on('click',function(){_openVotePopup();return false;});}
function _getVoteNum(){_util.request({type:"GET",url:_params.getVoteNumAjaxUrl,dataType:"jsonp",data:{'BID':_params.bid,'authorId':_params.authorId},jsonp:"callback",jsonpCallback:"votenumweb",success:function(json){if(!json){return;}
if(json.status){$('#goodOriginalAuthorVoteNum').text(json.authorIdVote);$('#goodOriginalBookVoteNum').text(json.BIDVote);}},error:function(){}});}
function _openVotePopup(){if(!_util.isLogin()){_loginPopup.open();return;}
var $votePopup=$('#goodOriginalVotePopup');if(!_maskByVotePopup){_maskByVotePopup=new _mask($votePopup);$votePopup.find('.closeBtn').on('click',function(){if(_maskByVotePopup){_maskByVotePopup.close();}
return false;});}
if(_maskByVotePopup){$votePopup.find('iframe').attr('src',_params.votePopupUrl+'?BID='+_params.bid+'&authorId='+_params.authorId+'&rnd='+new Date().getTime());_maskByVotePopup.open();}}
_util.initNameSpace("CS.activity");CS.activity.goodOriginal={'init':init};})(jQuery);;(function($){var _util=CS.util,_dialog=CS.dialog,_loginPopup=CS.loginPopup,_bookshelf=CS.bookshelf,_readerInteract=CS.readerInteract;var _params={};function init(bid,isEpubNovel,getPersonalAjaxUrl){_params.bid=bid||'0';_params.isEpubNovel=isEpubNovel||0;_params.getPersonalAjaxUrl=getPersonalAjaxUrl;_getUserInfo();_bindEvent();_initEpubNovelBtn();}
function _bindEvent(){var $bigQrBox=$('#qrBox'),$bigQrImg=$bigQrBox.find('img');$('#qrImg').add($bigQrBox).hover(function(){$bigQrImg.show();},function(){$bigQrImg.hide();});$('#openMonthPopupBtn').on('click',function(){return _readerInteract.openPopup('monthTicket');});var tabList=[{'$tabBox':$('#authorWeixinTabBox'),'tabTag':'a','$contentItems':$('#authorWeixinContent, #authorSayContent')},{'$tabBox':$('#authorBookTabList'),'tabTag':'a','$contentItems':$('#theAuthorBest, #theAuthorOther')},{'$tabBox':$('#bookRecommendTabBox'),'tabTag':'a','$contentItems':$('#theThisWeek, #theLastWeek')}];$.each(tabList,function(index,item){item.$tabBox.on('click',item.tabTag,function(){var tabIndex=item.$tabBox.find(item.tabTag).index(this);$(this).parent().addClass('choice').siblings().removeClass('choice');item.$contentItems.hide();item.$contentItems.eq(tabIndex).show();return false;});});}
function _getUserInfo(){_util.request({url:_params.getPersonalAjaxUrl,data:{bid:_params.bid,},type:'get',dataType:"json",success:function(json){if(json&&json.status){_getUserInfoCallback(json.data);}}});}
function _getUserInfoCallback(data){if(!data){return;}
var $openRewardPopupBtn=$('#openRewardPopupBtn'),$openRecommendPopupBtn=$('#openRecommendPopupBtn'),$addToBookshelfBtn=$("#addtobookshelf");if(data.uid>0){$openRewardPopupBtn.on('click',function(){return _readerInteract.openPopup('reward');});$openRecommendPopupBtn.on('click',function(){return _readerInteract.openPopup('recommend');});if(data.isFav){$addToBookshelfBtn.removeClass("but01").addClass('but05').text("已加入");}else{$addToBookshelfBtn.on('click',function(){_bookshelf.addToBookshelf(_params.bid);});}}else{$openRewardPopupBtn.add($openRecommendPopupBtn).add($addToBookshelfBtn).on("click",function(){_loginPopup.open();});}
if(data.readUrl){$("#readNow").text("继续阅读").attr("href",data.readUrl);}
if(data.discountTime){var $discountTag=$('#discountTag');if(data.discountType==='discount'){$discountTag.attr('class','discount');}
$discountTag.show();$('#discountTime').text(data.discountTime).show();}}
function _initEpubNovelBtn(){if(_params.isEpubNovel===1){$('#readNow').on('click',function(){_dialog.open({"content":'本作品为epub精排版格式，为了给您带来更完美的阅读体验，请通过QQ阅读客户端浏览。',"button":[{"value":"下载客户端","focus":true,"callback":function(){window.open('http://book.qq.com/act/reader/index.html');}},{"value":"取消"}]});return false;});}}
_util.initNameSpace("CS.page.intro");CS.page.intro.main={"init":init};})(jQuery);