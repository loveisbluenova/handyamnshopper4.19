function displayMessagePart(isAjax) {
	/*if(isAjax == true) {
		urlPath = siteName+'admin/includes/displayMessage.php';
		 $.ajax({
				type:"GET",
				url: urlPath,
				success:function(response){
					if(response!="")
					{
						//$('#msgPart').html(response).show(3000);
						$('#msgPart').html(response);
					};
				}
			});
	}
	*/
	$('#closeMsgPart').click(function(){
		  $('#msgPart').fadeOut(1000, "linear");		
	});
	
	setTimeout(function() {
		  $('#msgPart').fadeOut(1200, "linear");
	}, 9000);
	
}
function updatePageContent(divName, module, ajaxFileName, varAttached, pageNo) {

		urlPath = SITE_URL+'modules/'+module+'/'+ajaxFileName+varAttached+'&pageNo='+pageNo;

		$('#'+divName+'').html('<div style="margin:80px; text-align:center;"><div style="padding:18px;"><img src="'+SITE_URL+'themes/images/loadingWait.gif" alt="" border="0" /><\/div><\/div>');
	   		
		 $.ajax({
			type:"GET",
			url: urlPath,
			success:function(response){
				if(response!="")
				{
					//alert(divName +','+ module);
					displayMessagePart(true);					
                    $('#'+divName+'').html(response).show(30000);
					
				};
			}
		});
}
function partyInv(uId, divId,pid) {
	var urlPath = SITE_URL + 'modules/parties/ajax.parties.php' ;
		 $.ajax({
			type:"POST",
			url: urlPath,
			data: {'uId': uId, 'action': "inviteHost",  'id':pid },
			success:function(response){
				$('#'+divId).html(response);
			}
		});
	
}

function followUser(userId,divId) {
	var urlPath = SITE_URL + 'modules/follow/ajax.follow.php' ;
	 $.ajax({
		type:"POST",
		url: urlPath,
		data: { 'id': userId, 'action': "userFollow" },
		success:function(response){
			if(response!=""){
				$('#'+divId).html(response);
			};
		}
	});
}
function unFollowUser(userId,divId) {
	var urlPath = SITE_URL + 'modules/follow/ajax.follow.php' ;
	 $.ajax({
		type:"POST",
		url: urlPath,
		data: { 'id': userId, 'action': "unFollowUser" },
		success:function(response){
			if(response!=""){
				$('#'+divId).html(response);
			};
		}
	});
}

$(function(){
	$(document).on('click', ".commentListing", function(){
		var id = $(this).parents('.created').attr('id');
		$('#comment_'+id).focus();
	});
	$(document).on('click', ".submitComment", function(){
		var sBtn = $(this);
		var comment = sBtn.parents('.review_desc').children('.cre_text').find('.comment');
		var commentText = trim(comment.val());
		var id = sBtn.parents('.created').attr('id');
		if(commentText!=''){
			sBtn.attr('disabled','disabled');
			$.ajax({
				url:SITE_URL+'listing/comment/'+id+'/',
				dataType:'json',
				type:'post',
				data:{'comment':commentText},
				success:function(rs){
					if(rs.success){
						sBtn.parents('.review_desc').before(rs.html);
						comment.val('');
					}
					sBtn.removeAttr('disabled');
				}
			});		
		}else{comment.val(commentText);}
	});
	$(document).on('click', ".likeListing", function(){
		var id = $(this).attr('id');
		id = id.split('_');
		var curA = $(this);
		curA.attr('disabled','disabled');
		var like = $(this).text() == 'Like' ? 'like' : 'unlike';
		$.ajax({
			url:SITE_URL+'listing/'+like+'/'+id[1]+'/',
			dataType:'json',
			success:function(rs){
				if(typeof(rs.login)!='undefined'){
					window.location=SITE_URL+'login/';
				}
				if(rs.success){
					txtReplace = like == 'like' ? 'Liked' : 'Like';
					$(curA).text(txtReplace);
					spanCntr = curA.parents('.created').children('.cre_like_box').children('a').children('.cntrLike');
					if(like == 'like'){
						var cnt = parseInt(spanCntr.html());
						spanCntr.html(cnt+1);
					}else{
						var cnt = spanCntr.html();
						spanCntr.html(cnt-1);
					}
				}
				curA.removeAttr('disabled');
			}
		});
	});
	$(document).on('click', ".share", function(){
		var mainParentDiv = $(this).parents('.box').children('.col_wrap');
		var img = mainParentDiv.children('a').children('img').attr('src');
		var val = mainParentDiv.find('h3 a').html();
		var urlToshare = mainParentDiv.find('h3 a').attr('href');
		var detail = '<ul>'+mainParentDiv.find('ul').html()+'</ul>';
		// defnedd in FB_APP_ID, SITE_NM, REDIRECT_URI default theme
		$.magnificPopup.open({
			preloader:true,
			modal:false,
			items: {
				src: '<div class="white_popup share_popup_new"><div class="share_popup_heading">Share this listing</div><div class="share_popup_details"><div class="lft_share"><img src="'+img+'" width="60" /></div><div class="lft_share_txt"><h3>'+val+'</h3>'+detail+'</div><div class="clr"></div></div><div class="share_link_icon"><ul><li><a href="javascript:void(0)" onclick="window.open(\'https://www.facebook.com/dialog/feed?app_id='+FB_APP_ID+'&display=popup&caption='+SITE_NM+'&link='+encodeURI(urlToshare)+'&redirect_uri='+REDIRECT_URI+'&picture=&name='+encodeURI(val)+'\');"><div class="fb_my"></div>facebook</a></li><li><a href="https://twitter.com/share?url='+encodeURI(urlToshare)+'&text='+encodeURI(val)+'" class="twitter-share-button" ><div class="tweet_my"></div>Tweet</a></li></ul><div class="clr"></div></div></div>',
				type: 'inline'
			},
			alignTop:false,
			closeBtnInside: true
		});
	});
});
function ajax_notify(elem)
{
	//var check_val=$("#send_message").is(':checked');
	var check_val=$('input[name="'+elem+'"]:checked').val();
	if(check_val != 'y')
	  check_val='n';
	var str="&type=notification_post&notification_type="+elem+"&check_val="+check_val;
	var urlPath = SITE_URL + 'modules/settings/ajax.settings.php' ;
	 $.ajax({
		type:"GET",
		url: urlPath,
		data: str,
		success:function(response){

		}
	});
}
function ajax_subcat(id)
{
	var str="&type=get_subcat&cat_id="+id;
	var urlPath = SITE_URL + 'modules/settings/ajax.settings.php' ;
	 $.ajax({
		type:"GET",
		url: urlPath,
		data: str,
		success:function(response){
			$("#subcat_id").html(response);
		}
	});
}
function project_status(id,status)
{
	var ans=confirm("Are you sure?");
	if(ans==true) {
		var str="&type=change_status&id="+id+"&status="+status;
		var urlPath = SITE_URL + 'modules/workroom/ajax.workroom.php' ;
		 $.ajax({
			type:"POST",
			url: urlPath,
			data: str,
			async:false,
			success:function(response){
				if(status=='closed')
				{
					window.location.href=SITE_URL + 'workroom/milestones/'+id;
				}
			}
		});
	}else{
		return false;
	}
}
function dispute_status(id,status)
{
	var str="&type=dispute_status&id="+id+"&status="+status;
	var urlPath = SITE_URL + 'modules/workroom/ajax.workroom.php' ;
	 $.ajax({
		type:"POST",
		url: urlPath,
		data: str,
		success:function(response){
			$("#status_span"+id).html(response);
		}
	});
}
function milestone_calc()
{
	var card_value;mile_stones=0;
	var bid_amt = $("#bmt").val(); //bid amount
	var values = document.getElementsByName('milePrice[]');  //all mile_stones
	var length=values.length;
	for(i=0; i<length; i++)
	{
	   if(parseInt(values[i].value) > 0)
		{   mile_stones=(parseInt(values[i].value) + parseInt(mile_stones)); }
	}
	if(mile_stones > bid_amt) {
		var msg="Milestone amount should be equal to bidded amount";
		alert(msg);
		return false;
	}
	if(mile_stones < bid_amt) {
		var msg="Milestone amount should be equal to bidded amount";
		alert(msg);
		return false;
	}
	return true;
}