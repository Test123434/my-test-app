<!DOCTYPE html>
<html lang='en_us'>
<head>
    <link rel="SHORTCUT ICON" href="themes/SuiteR/images/sugar_icon.ico?v=jIT3X4f60i1mEnPpASjaBQ">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <!-- Bootstrap -->
    <link href="themes/SuiteR/css/bootstrap.min.css" rel="stylesheet">
    <link href="themes/SuiteR/css/footable.core.css" rel="stylesheet" type="text/css" />

    <link href="themes/SuiteR/css/font-awesome.css" rel="stylesheet" type="text/css"/>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <![endif]-->
    <title>SugarCRM</title>
    <script>var module_sugar_grp1 = 'Users';</script><script>var action_sugar_grp1 = 'Login';</script><script>jscal_today = 1000*1491302667; if(typeof app_strings == "undefined") app_strings = new Array();</script><script type="text/javascript" src="cache/include/javascript/sugar_grp1_jquery.js?v=jIT3X4f60i1mEnPpASjaBQ"></script><script type="text/javascript" src="cache/include/javascript/sugar_grp1_yui.js?v=jIT3X4f60i1mEnPpASjaBQ"></script><script type="text/javascript" src="cache/include/javascript/sugar_grp1.js?v=jIT3X4f60i1mEnPpASjaBQ"></script><script type="text/javascript" src="include/javascript/calendar.js?v=jIT3X4f60i1mEnPpASjaBQ"></script>        <script>
            if ( typeof(SUGAR) == 'undefined' ) {SUGAR = {}};
            if ( typeof(SUGAR.themes) == 'undefined' ) SUGAR.themes = {};
        </script><script type="text/javascript" src="cache/themes/SuiteR/js/style.js?v=jIT3X4f60i1mEnPpASjaBQ"></script>
    
    <script type="text/javascript">
        <!--
        SUGAR.themes.theme_name      = 'SuiteR';
        SUGAR.themes.theme_ie6compat = 'false';
        SUGAR.themes.hide_image      = 'themes/SuiteR/images/hide.gif?v=jIT3X4f60i1mEnPpASjaBQ';
        SUGAR.themes.show_image      = 'themes/SuiteR/images/show.gif?v=jIT3X4f60i1mEnPpASjaBQ';
        SUGAR.themes.loading_image   = 'themes/SuiteR/images/img_loading.gif?v=jIT3X4f60i1mEnPpASjaBQ';
        SUGAR.themes.allThemes       = eval();
        if ( YAHOO.env.ua )
            UA = YAHOO.env.ua;
        -->
    </script>
    
    
            <!-- qtip & suggestion box -->
            <link rel="stylesheet" type="text/css" href="include/javascript/qtip/jquery.qtip.min.css" /><link rel="stylesheet" type="text/css" href="cache/themes/SuiteR/css/yui.css?v=jIT3X4f60i1mEnPpASjaBQ" /><link rel="stylesheet" type="text/css" href="include/javascript/jquery/themes/base/jquery.ui.all.css" /><link rel="stylesheet" type="text/css" href="cache/themes/SuiteR/css/deprecated.css?v=jIT3X4f60i1mEnPpASjaBQ" /><link rel="stylesheet" type="text/css" href="cache/themes/SuiteR/css/style.css?v=jIT3X4f60i1mEnPpASjaBQ" />
    <link rel="stylesheet" type="text/css" href="themes/SuiteR/css/colourSelector.php">
    <script type="text/javascript" src='themes/SuiteR/js/jscolor.js?v=jIT3X4f60i1mEnPpASjaBQ'></script>
    <script type="text/javascript" src='cache/include/javascript/sugar_field_grp.js?v=jIT3X4f60i1mEnPpASjaBQ'></script>
</head><body onMouseOut="closeMenus();">


    <iframe id='ajaxUI-history-iframe' src='index.php?entryPoint=getImage&imageName=blank.png' title='empty' style='display:none'></iframe>
    <input id='ajaxUI-history-field' type='hidden'>
    <script type='text/javascript'>
        if (SUGAR.ajaxUI && !SUGAR.ajaxUI.hist_loaded) {
            YAHOO.util.History.register('ajaxUILoc', "", SUGAR.ajaxUI.go);
                        YAHOO.util.History.initialize("ajaxUI-history-field", "ajaxUI-history-iframe");
            
        }
    </script>

<!-- Start of page content -->
<link rel="stylesheet" type="text/css" media="all" href="modules/Users/login.css?v=jIT3X4f60i1mEnPpASjaBQ"><script type="text/javascript" src="modules/Users/login.js?v=jIT3X4f60i1mEnPpASjaBQ"></script><p align='center' class='error' > You have been logged out because your session has expired.</p><script>
		function validateAndSubmit(){generatepwd();}
		</script><!--
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.

 * SuiteCRM is an extension to SugarCRM Community Edition developed by Salesagility Ltd.
 * Copyright (C) 2011 - 2014 Salesagility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for  technical reasons, the Appropriate Legal Notices must
 * display the words  "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 ********************************************************************************/

/*********************************************************************************

 ********************************************************************************/
-->
<script type='text/javascript'>
var LBL_LOGIN_SUBMIT = 'Submit';
var LBL_REQUEST_SUBMIT = 'Your request has been submitted.';
var LBL_SHOWOPTIONS = 'Show Options';
var LBL_HIDEOPTIONS = 'Hide Options';
</script>
<!-- Start login container -->
<div class="container">
    <div id="loginform">
    <form class="form-signin" role="form" action="index.php" method="post" name="DetailView" id="form" onsubmit="return document.getElementById('cant_login').value == ''">
        <div class="companylogo"><IMG src="custom/themes/default/images/company_logo.png?v=jIT3X4f60i1mEnPpASjaBQ" alt="SuiteCRM" style="margin: 5px 0;"></div>
        <span class="error" id="browser_warning" style="display:none">
            <b>Warning:</b> Your browser version is no longer supported or you are using an unsupported browser.<p></p>The following browser versions are recommended:<p></p><ul><li>Internet Explorer 10 (compatibility view not supported)<li>Firefox 32.0<li>Safari 5.1<li>Chrome 37</ul>
        </span>
		<span class="error" id="ie_compatibility_mode_warning" style="display:none">
		<b>Warning:</b> Your browser is in IE compatibility view which is not supported.
		</span>
                    <span id='post_error' class="error"></span>
                <input type="hidden" name="module" value="Users">
        <input type="hidden" name="action" value="Authenticate">
        <input type="hidden" name="return_module" value="Users">
        <input type="hidden" name="return_action" value="Login">
        <input type="hidden" id="cant_login" name="cant_login" value="">
                    <input type="hidden" name="login_module" value="Cases">
                    <input type="hidden" name="login_action" value="index">
                    <input type="hidden" name="login_record" value="">
                    <input type="hidden" name="login_token" value="">
                    <input type="hidden" name="login_oauth_token" value="">
                    <input type="hidden" name="login_mobile" value="">
               <!-- <br>
                <br> -->
        <br>
        <div class="input-group">
            <span class="input-group-addon logininput glyphicon glyphicon-user"></span>
            <input type="text" class="form-control" placeholder="User Name" required autofocus tabindex="1" id="user_name" name="user_name"  value='' />
        </div>
        <br>
        <div class="input-group">
            <span class="input-group-addon logininput glyphicon glyphicon-lock"></span>
            <input type="password" class="form-control" placeholder="Password" tabindex="2" id="user_password" name="user_password" value='' />
        </div>
        <br>
        <input id="bigbutton" class="btn btn-lg btn-primary btn-block" type="submit" title="Log In" tabindex="3" name="Login" value="Log In">
        <div id="forgotpasslink" style="cursor: pointer; display:;" onclick='toggleDisplay("forgot_password_dialog");'>
            <a href='javascript:void(0)'>Forgot Password?</a>
        </div>
    </form>
        <form class="form-signin passform" role="form" action="index.php" method="post" name="DetailView" id="form" name="fp_form" id="fp_form" >
            <div id="forgot_password_dialog" style="display:none" >
                <input type="hidden" name="entryPoint" value="GeneratePassword">
                <div id="generate_success" class='error' style="display:inline;"></div>
                <br>
                <div class="input-group">
                    <span class="input-group-addon logininput glyphicon glyphicon-user"></span>
                    <input type="text" class="form-control" size='26' id="fp_user_name" name="fp_user_name"  value='' placeholder="User Name"/>
                </div>
                <br>
                <div class="input-group">
                    <span class="input-group-addon logininput glyphicon glyphicon-envelope"></span>
                    <input type="text" class="form-control" size='26' id="fp_user_mail" name="fp_user_mail" value ='' placeholder="Email Address">
                </div>
                <br>
                
                <div id='wait_pwd_generation'></div>
                <input title="Email Temp Password" class="button  btn-block" type="button" style="display:inline" onclick="validateAndSubmit(); return document.getElementById('cant_login').value == ''" id="generate_pwd_button" name="fp_login" value="Submit">
            </div>
        </form>
    </div>
</div>
<!-- End login container --></div>
</div>
<!-- END of container-fluid, pageContainer divs -->
<!-- Start Footer Section -->
<!-- END Footer Section -->

<script>

//qe_init function sets listeners to click event on elements of 'quickEdit' class
 if(typeof(DCMenu) !='undefined'){
    DCMenu.qe_refresh = false;
    DCMenu.qe_handle;
 }
function qe_init(){

    //do not process if YUI is undefined
    if(typeof(YUI)=='undefined' || typeof(DCMenu) == 'undefined'){
        return;
    }


    //remove all existing listeners.  This will prevent adding multiple listeners per element and firing multiple events per click
    if(typeof(DCMenu.qe_handle) !='undefined'){
        DCMenu.qe_handle.detach();
    }

    //set listeners on click event, and define function to call
    YUI().use('node', function(Y) {
        var qe = Y.all('.quickEdit');
        var refreshDashletID;
        var refreshListID;

        //store event listener handle for future use, and define function to call on click event
        DCMenu.qe_handle = qe.on('click', function(e) {
            //function will flash message, and retrieve data from element to pass on to DC.miniEditView function
            ajaxStatus.flashStatus(SUGAR.language.get('app_strings', 'LBL_LOADING'),800);
            e.preventDefault();
            if(typeof(e.currentTarget.getAttribute('data-dashlet-id'))!='undefined'){
                refreshDashletID = e.currentTarget.getAttribute('data-dashlet-id');
            }
            if(typeof(e.currentTarget.getAttribute('data-list'))!='undefined'){
                refreshListID = e.currentTarget.getAttribute('data-list');
            }
            DCMenu.miniEditView(e.currentTarget.getAttribute('data-module'), e.currentTarget.getAttribute('data-record'),refreshListID,refreshDashletID);
        });

    });
}

    qe_init();

	SUGAR_callsInProgress++;
	SUGAR._ajax_hist_loaded = true;
    if(SUGAR.ajaxUI)
    	YAHOO.util.Event.onContentReady('ajaxUI-history-field', SUGAR.ajaxUI.firstLoad);
</script>

</div>
</body>
</html>
