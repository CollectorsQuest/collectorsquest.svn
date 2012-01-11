<link href="<?php echo GIT_PLUGIN_URL ?>/git.css" type="text/css" rel="stylesheet">
<!--script type="text/javascript" src="<?php echo GIT_PLUGIN_URL ?>/git_admin.js"></script-->
<script type="text/javascript">

function checkGitSettingFrom(){
	var $git_apikey = jQuery("#git_apikey");

	if (jQuery.trim($git_apikey.val()) == ''){
		alert("Please enter apikey");
		$git_apikey.focus();
		return false;
	}
	getGitScript();

}


function getGitScript(){
	var httphost 	= "<?php echo GIT_PLUGIN_URL.'git_client.php'; ?>";
	var signupUrl 	= "<?php echo site_url('wp-login.php?action=register');?>";
	var current_language 	= jQuery("#git_select_lang").val();
	var enter_api_key 		= jQuery("#git_apikey").val();

	var codeTemplate = [];
	codeTemplate.push('<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"><\/script>');
	codeTemplate.push('<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.2/jquery-ui.min.js"><\/script>');
	codeTemplate.push('<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/googleapis/0.0.4/googleapis.min.js"><\/script>');
	codeTemplate.push('<script type="text/javascript" src="//ajax.googleapis.com/jsapi"><\/script>');
	codeTemplate.push('<script type="text/javascript">');
	codeTemplate.push('google.load("identitytoolkit", "1", {packages: ["ac"], language: "'+current_language+'"});');
	codeTemplate.push('<\/script>');
	codeTemplate.push('<script type="text/javascript">');
	codeTemplate.push('$(function(){');
	codeTemplate.push("\t"+'window.google.identitytoolkit.setConfig({');
	codeTemplate.push("\t\t"+'developerKey: "'+enter_api_key+'",');
	codeTemplate.push("\t\t"+'companyName: "CollectorsQuest.com",');
	codeTemplate.push("\t\t"+'callbackUrl: "'+httphost+'?git_action=git_callback",');
	codeTemplate.push("\t\t"+'realm: "",');
	codeTemplate.push("\t\t"+'userStatusUrl: "'+httphost+'?git_action=git_userstat",');
	codeTemplate.push("\t\t"+'loginUrl: "'+httphost+'?git_action=git_login",');
	codeTemplate.push("\t\t"+'signupUrl: "'+signupUrl+'",');
	codeTemplate.push("\t\t"+'homeUrl: "'+httphost+'?git_action=git_home",');
	codeTemplate.push("\t\t"+'logoutUrl: "'+httphost+'?git_action=git_logout",');
	codeTemplate.push("\t\t"+'language: "en",');
	codeTemplate.push("\t\t"+'idps: ["GoogleApps"],');
	codeTemplate.push("\t\t"+'tryFederatedFirst: true,');
	codeTemplate.push("\t\t"+'useCachedUserStatus: false,');
	codeTemplate.push("\t\t"+'supportLegacyUsername: true');
	codeTemplate.push("\t"+'});');
	codeTemplate.push('});');

	codeTemplate.push('<\/script>');
	jQuery("#git_code").val(codeTemplate.join("\n"));
}

function getAgentLanguage(){
	var type=navigator.appName;
	var lang = '';
	if (type=="Netscape") {
		lang = navigator.language;
	} else {
		lang = navigator.userLanguage;
	}

	var lang = lang.substr(0,4);
	//cut down to first 2 chars of country code
	var languageList = {
		"zh-c":"zh-CN",
		"zh":"zh-TW",
		"en":"en-GB",
		"fr":"fr",
		"it":"it",
		"de":"de",
		"es":"es",
		"ja":"ja",
		"ko":"ko"
	};


	for (l in languageList){
		var rep = new RegExp(l, "i");
		if (rep.test(lang)){
			return languageList[l];
		}
	}

	return '';
}

</script>
<div id="setting_content">
	<h2>Google Identity Toolkit</h2>
	<form method="post" action="options.php" id="set_git_setting" onsubmit="return checkGitSettingFrom();">
		<?php wp_nonce_field('update-options'); ?>
		<?php settings_fields('git'); ?>
	<table>
		<tr >
			<td class="lable" style="width:200px;">
				<span class="required">*</span> <span>API Key</span><br />
				<span class="help">
					Login to your <a href="http://code.google.com/apis/console">Google developer console</a> and copy your API key into this field.
				</span>
			</td>
			<td><input type="text" value="<?php echo get_option('git_apikey');?>" size="50" id="git_apikey" name="git_apikey"></td>
		</tr>
		<tr style="display: none;">
			<td><span class="required">*</span> Google Identity Toolkit Code</td>
			<td>
				<textarea rows="15" cols="100" id="git_code" name="git_code"><?php echo get_option('git_code') ?></textarea>
			</td>
		</tr>

		<tr style="display: none;">
			<td><span class="required">*</span> Clean the original login and register link?</td>
			<td>
				<input type="hidden" name="git_close_original" id="git_close_original" value="1" />

			</td>
		</tr>
		<tr>
			<td><span class="required">*</span> Language</td>
			<td>
				<div id="language_select">
					<select class="form-select " name="git_select_lang" id="git_select_lang">
		          		<option selected="selected" value="__auto__">Auto</option>
		          		<option value="de">&#8234;Deutsch&#8236;</option>
		          		<option value="en">&#8234;English&#8236;</option>
		          		<option value="en-GB">&#8234;English (UK)&#8236;</option>
		          		<option value="es">&#8234;espa&ntilde;ol&#8236;</option>
		          		<option value="fr">&#8234;fran&ccedil;ais&#8236;</option>
		          		<option value="it">&#8234;italiano&#8236;</option>
		          		<option value="ja">&#8234;&#26085;&#26412;&#35486;&#8236;</option>
		          		<option value="ko">&#8234;&#54620;&#44397;&#50612;&#8236;</option>
		          		<option value="zh-CN">&#8234;&#31616;&#20307;&#20013;&#25991;&#8236;</option>
		          		<option value="zh-TW">&#8234;&#32321;&#39636;&#20013;&#25991; (&#21488;&#28771;)&#8236;</option>
		          	</select>
				</div>
			</td>
		</tr>
	</table>
	<p class="submit">
		<input type="hidden" name="action" value="update" />
		<input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
	</p>
	</form>
</div>

<?php
// $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 4); //只取前4位，这样只判断最优先的语言。如果取前5位，可能出现en,zh的情况，影响判断。
// if (preg_match("/zh-c/i", $lang))
// echo "简体中文";
// else if (preg_match("/zh/i", $lang))
// echo "繁體中文";
// else if (preg_match("/en/i", $lang))
// echo "English";
// else if (preg_match("/fr/i", $lang))
// echo "French";
// else if (preg_match("/de/i", $lang))
// echo "German";
// else if (preg_match("/jp/i", $lang))
// echo "Japanese";
// else if (preg_match("/ko/i", $lang))
// echo "Korean";
// else if (preg_match("/es/i", $lang))
// echo "Spanish";
// else if (preg_match("/sv/i", $lang))
// echo "Swedish";
// else echo $_SERVER["HTTP_ACCEPT_LANGUAGE"];
?>
<script type="text/javascript">
	(function(){
		var currentLanguage = "<?php echo get_option('git_select_lang');?>";
		jQuery("#git_select_lang").val(currentLanguage);

		jQuery("#git_select_lang").bind('change', function(event) {
			var selectVal = $(this).val();
			var git_code = $("#git_code").val();
			git_code_arr = git_code.split("\n");

			for(var i=0; i<git_code_arr.length; i++){
				if (git_code_arr[i].indexOf('google.load') > -1){
					git_code_arr[i] = 'google.load("identitytoolkit", "0.1", {packages: ["ac"], language: "'+selectVal+'"});'
				}
			}
			$("#git_code").val(git_code_arr.join("\n"));
			$("#git_select_lang").data("current_language", selectVal);
		});
	})();
</script>
