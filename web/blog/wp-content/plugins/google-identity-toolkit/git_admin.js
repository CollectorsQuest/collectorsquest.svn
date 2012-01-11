 
jQuery(function(){
	
	// var postBox = jQuery('#normal-sortables');
	// var loginBox = [];
	// loginBox.push('<div class="postbox" id="dashboard_recent_drafts">');
	// loginBox.push('<div title="Webmail login" class="handlediv"><br></div><h3 class="hndle"><span>Webmail login</span></h3>');
	// loginBox.push('<div id="git_login_webmail" style="padding:4px;"></div>');
	// loginBox.push('</div>');
// 	
	// postBox.append(loginBox.join(''));
	// showLoginWebmail("#git_login_webmail");
	// jQuery("#git_login_webmail").gitShowMailLogin();
	// gitShowMailLogin();
});

function showLoginWebmail(el){
	var _this = $(el);
	var git_maillogin = [
	        {"id":"gmail", "domain":"gmail.com", "icon":"http://www.google.com/uds/modules/identitytoolkit/image/gmail-ac.png","url":"http://www.gmail.com"},
	        {"id":"yahoo", "domain":"yahoo.com", "icon":"http://www.google.com/uds/modules/identitytoolkit/image/yahoo-ac.png","url":"http://mail.yahoo.com"},
	        {"id":"aol", "domain":"aol.com", "icon":"http://www.google.com/uds/modules/identitytoolkit/image/aol-ac.png","url":"http://mail.aol.com"},
	        {"id":"hotmal", "domain":"hotmail.com", "icon":"http://www.google.com/uds/modules/identitytoolkit/image/hotmail-ac.png","url":"http://mail.hotmail.com"}
	];
	
    var accounts = window.google.identitytoolkit.easyrp.util.accountstorage.readAccounts();
    if (accounts){
        var mailLoginHtml = ['<div  class="profile">'];
        jQuery(accounts).each(function(i, v){
            jQuery(git_maillogin).each(function(ii, vv){
                if (v.email.indexOf(vv.domain) >-1){
                   mailLoginHtml.push("<div class='widget-idp' style=' background-image:-moz-linear-gradient(center top , #FCFCFC, #ECECEC); border-color:#DDDDDD #BBBBBB #BBBBBB #DDDDDD;border-style:solid; border-width:1px; display:inline-block; height:50px; margin:0 1em 0 0; width:147px;'><a href='"+vv.url+"' target='_blank'><img src='"+vv.icon+"' /></a></div>");
                }       
            });
            var email = v.email;
        });
        mailLoginHtml.push('</div>');
        // var $content = jQuery("#block-system-main").find(".content");
        _this.append(mailLoginHtml.join(''));
        
        _this.find(".widget-idp").hover(function(){
            jQuery(this).css({"backgroundImage":'-moz-linear-gradient(center top , #FCFCFC, #dCdCdC)'});
        }, function(){
            jQuery(this).css({"backgroundImage": '-moz-linear-gradient(center top , #FCFCFC, #ECECEC)'});
        });
    }
}
// })(jQuery);
