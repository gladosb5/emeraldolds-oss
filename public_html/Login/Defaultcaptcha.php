<?php

include $_SERVER["DOCUMENT_ROOT"]."/api/includes.php";

include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/head.php";

if($logged == "yes"){
	header("Location: /");
}

?>
<?php
$s = "welcome back to emerald!";
	if (empty($_POST['captcha_verified']) || $_POST['captcha_verified'] !== '1') {
        $s = "Captcha verification failed – please try again.";
    } else {
		$oldusername = $_POST["UserName"];
		$oldpass = $_POST['Password'];
		
		$username = $ep->remove($oldusername);
		$pass = $ep->remove($oldpass);
		
		if(strlen($username) < 1){
			$s = "Username or Password Incorrect.";
		}else{
			if (preg_match('/^[a-zA-Z0-9]+$/', $username) == 0 || $ch->hasProfanity($username)) {
				$s = 'Username or Password Incorrect.';
			}else{
				if(strlen($pass) < 1){
					$s = "Username or Password Incorrect.";
				}else{
					$query = mysqli_query($conn,"SELECT id,username,password_hash,password_salt FROM users WHERE username = '$username'");
					if($query){
						if(mysqli_num_rows($query) == 1){
							$ong = mysqli_fetch_assoc($query);
							$salt = $ong['password_salt'];
							$hash = crypt($pass, $salt);
							$phash = $ong['password_hash'];
							if($hash === $phash){
								/*
								$_SESSION['id'] = $ong['id'];
								$_SESSION['username'] = $ong['username'];
								$logged = "yes";
								*/
								
								$form_code = md5(uniqid());
								$aid = generateRandomString(128);
								$location = $_SERVER["REMOTE_ADDR"];
								$stmt = $conn->prepare('INSERT INTO `sessions` (`userId`, `sessionId`, `csrfToken`, `useragent`, `location`) VALUES (?, ?, ?, ?, ?);');
								$stmt->bind_param('issss', $ong['id'], $aid, $form_code, $_SERVER['HTTP_USER_AGENT'], $location);
								$stmt->execute();
								$stmt->close();

								
								if (isset($_COOKIE['auth_uid']) || isset($_COOKIE['a_id'])) {
									setcookie('auth_uid', "", time() - 3600);
									setcookie('a_id', "", time() - 3600);
								}
								
								setcookie("auth_uid", $ong['id'], time() + (86400 * 30), "/", ".emeraldolds.glados.pro", false, true);
								setcookie("a_id", $aid, time() + (86400 * 30), "/", ".emeraldolds.glados.pro", false, true);

								header("Location: /");
							}else{
								$s = "Username or Password Incorrect.";
							}
						}else{
							$s = "Username or Password Incorrect.";
						}
					}else{
						$s = "Something went wrong. Send this code to a developer: L1pZn1Y";
					}
				}
			}
		}
	}
?>
<title>emeraldnews: A FREE Virtual World-Building Game with Avatar Chat, 3D Environments, and Physics</title> 
</div>
<style>
.btn{display:inline-block;color:#212529;text-align:center;vertical-align:middle;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;background-color:transparent;border:1px solid transparent;padding:.375rem .75rem;font-size:.875rem;line-height:1.5;border-radius:.25rem;transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out}
@media (prefers-reduced-motion:reduce){.btn{transition:none}}
.btn:hover{color:#212529;text-decoration:none}
.btn.focus,.btn:focus{outline:0;box-shadow:0 1px 2px 0 rgba(49,130,206,.1),0 2px 4px 2px rgba(49,130,206,.1)}
.btn.disabled,.btn:disabled{opacity:.65}a.btn.disabled,fieldset:disabled a.btn{pointer-events:none}
.btn-primary{color:#fff;background-color:#3182ce;border-color:#3182ce}
.btn-primary:hover{color:#fff;background-color:#2a6faf;border-color:#2768a5}
.btn-primary.focus,.btn-primary:focus{box-shadow:0 0 0 1px rgba(80,149,213,.5)}
.btn-primary.disabled,.btn-primary:disabled{color:#fff;background-color:#3182ce;border-color:#3182ce}
.btn-primary:not(:disabled):not(.disabled).active,.btn-primary:not(:disabled):not(.disabled):active,.show>.btn-primary.dropdown-toggle{color:#fff;background-color:#2768a5;border-color:#25629b}
.btn-primary:not(:disabled):not(.disabled).active:focus,.btn-primary:not(:disabled):not(.disabled):active:focus,.show>.btn-primary.dropdown-toggle:focus{box-shadow:0 0 0 1px rgba(80,149,213,.5)}
.btn-secondary{color:#fff;background-color:#6c757d;border-color:#6c757d}
.btn-secondary:hover{color:#fff;background-color:#5a6268;border-color:#545b62}
.btn-secondary.focus,.btn-secondary:focus{box-shadow:0 0 0 1px rgba(130,138,145,.5)}
.btn-secondary.disabled,.btn-secondary:disabled{color:#fff;background-color:#6c757d;border-color:#6c757d}
.btn-secondary:not(:disabled):not(.disabled).active,.btn-secondary:not(:disabled):not(.disabled):active,.show>.btn-secondary.dropdown-toggle{color:#fff;background-color:#545b62;border-color:#4e555b}
.btn-secondary:not(:disabled):not(.disabled).active:focus,.btn-secondary:not(:disabled):not(.disabled):active:focus,.show>.btn-secondary.dropdown-toggle:focus{box-shadow:0 0 0 1px rgba(130,138,145,.5)}
.btn-success{color:#fff;background-color:#38a169;border-color:#38a169}
.btn-success:hover{color:#fff;background-color:#2e8556;border-color:#2b7b50}
.btn-success.focus,.btn-success:focus{box-shadow:0 0 0 1px rgba(86,175,128,.5)}
.btn-success.disabled,.btn-success:disabled{color:#fff;background-color:#38a169;border-color:#38a169}
.btn-success:not(:disabled):not(.disabled).active,.btn-success:not(:disabled):not(.disabled):active,.show>.btn-success.dropdown-toggle{color:#fff;background-color:#2b7b50;border-color:#28724a}
.btn-success:not(:disabled):not(.disabled).active:focus,.btn-success:not(:disabled):not(.disabled):active:focus,.show>.btn-success.dropdown-toggle:focus{box-shadow:0 0 0 1px rgba(86,175,128,.5)}
.btn-info{color:#fff;background-color:#854a8f;border-color:#854a8f}
.btn-info:hover{color:#fff;background-color:#6e3d76;border-color:#66396d}
.btn-info.focus,.btn-info:focus{box-shadow:0 0 0 1px rgba(151,101,160,.5)}
.btn-info.disabled,.btn-info:disabled{color:#fff;background-color:#854a8f;border-color:#854a8f}
.btn-info:not(:disabled):not(.disabled).active,.btn-info:not(:disabled):not(.disabled):active,.show>.btn-info.dropdown-toggle{color:#fff;background-color:#66396d;border-color:#5e3465}
.btn-info:not(:disabled):not(.disabled).active:focus,.btn-info:not(:disabled):not(.disabled):active:focus,.show>.btn-info.dropdown-toggle:focus{box-shadow:0 0 0 1px rgba(151,101,160,.5)}
.btn-warning{color:#212529;background-color:#cd9701;border-color:#cd9701}
.btn-warning:hover{color:#fff;background-color:#a77b01;border-color:#9a7201}
.btn-warning.focus,.btn-warning:focus{box-shadow:0 0 0 1px rgba(179,134,7,.5)}
.btn-warning.disabled,.btn-warning:disabled{color:#212529;background-color:#cd9701;border-color:#cd9701}
.btn-warning:not(:disabled):not(.disabled).active,.btn-warning:not(:disabled):not(.disabled):active,.show>.btn-warning.dropdown-toggle{color:#fff;background-color:#9a7201;border-color:#8e6801}
.btn-warning:not(:disabled):not(.disabled).active:focus,.btn-warning:not(:disabled):not(.disabled):active:focus,.show>.btn-warning.dropdown-toggle:focus{box-shadow:0 0 0 1px rgba(179,134,7,.5)}
.btn-danger{color:#fff;background-color:#e53e3e;border-color:#e53e3e}
.btn-danger:hover{color:#fff;background-color:#df1e1e;border-color:#d41c1c}
.btn-danger.focus,.btn-danger:focus{box-shadow:0 0 0 1px rgba(233,91,91,.5)}
.btn-danger.disabled,.btn-danger:disabled{color:#fff;background-color:#e53e3e;border-color:#e53e3e}
.btn-danger:not(:disabled):not(.disabled).active,.btn-danger:not(:disabled):not(.disabled):active,.show>.btn-danger.dropdown-toggle{color:#fff;background-color:#d41c1c;border-color:#c81b1b}
.btn-danger:not(:disabled):not(.disabled).active:focus,.btn-danger:not(:disabled):not(.disabled):active:focus,.show>.btn-danger.dropdown-toggle:focus{box-shadow:0 0 0 1px rgba(233,91,91,.5)}
.btn-light{color:#212529;background-color:#f8f9fa;border-color:#f8f9fa}
.btn-light:hover{color:#212529;background-color:#e2e6ea;border-color:#dae0e5}
.btn-light.focus,.btn-light:focus{box-shadow:0 0 0 1px rgba(216,217,219,.5)}
.btn-light.disabled,.btn-light:disabled{color:#212529;background-color:#f8f9fa;border-color:#f8f9fa}
.btn-light:not(:disabled):not(.disabled).active,.btn-light:not(:disabled):not(.disabled):active,.show>.btn-light.dropdown-toggle{color:#212529;background-color:#dae0e5;border-color:#d3d9df}
.btn-light:not(:disabled):not(.disabled).active:focus,.btn-light:not(:disabled):not(.disabled):active:focus,.show>.btn-light.dropdown-toggle:focus{box-shadow:0 0 0 1px rgba(216,217,219,.5)}
.btn-outline-primary{color:#3182ce;border-color:#3182ce}
.btn-outline-primary:hover{color:#fff;background-color:#3182ce;border-color:#3182ce}
.btn-outline-primary.focus,.btn-outline-primary:focus{box-shadow:0 0 0 1px rgba(49,130,206,.5)}
.btn-outline-primary.disabled,.btn-outline-primary:disabled{color:#3182ce;background-color:transparent}
.btn-outline-primary:not(:disabled):not(.disabled).active,.btn-outline-primary:not(:disabled):not(.disabled):active,.show>.btn-outline-primary.dropdown-toggle{color:#fff;background-color:#3182ce;border-color:#3182ce}
.btn-outline-primary:not(:disabled):not(.disabled).active:focus,.btn-outline-primary:not(:disabled):not(.disabled):active:focus,.show>.btn-outline-primary.dropdown-toggle:focus{box-shadow:0 0 0 1px rgba(49,130,206,.5)}
.btn-outline-secondary{color:#6c757d;border-color:#6c757d}
.btn-outline-secondary:hover{color:#fff;background-color:#6c757d;border-color:#6c757d}
.btn-outline-secondary.focus,.btn-outline-secondary:focus{box-shadow:0 0 0 1px rgba(108,117,125,.5)}
.btn-outline-secondary.disabled,.btn-outline-secondary:disabled{color:#6c757d;background-color:transparent}
.btn-outline-secondary:not(:disabled):not(.disabled).active,.btn-outline-secondary:not(:disabled):not(.disabled):active,.show>.btn-outline-secondary.dropdown-toggle{color:#fff;background-color:#6c757d;border-color:#6c757d}
.btn-outline-secondary:not(:disabled):not(.disabled).active:focus,.btn-outline-secondary:not(:disabled):not(.disabled):active:focus,.show>.btn-outline-secondary.dropdown-toggle:focus{box-shadow:0 0 0 1px rgba(108,117,125,.5)}
.btn-outline-danger{color:#e53e3e;border-color:#e53e3e}
.btn-outline-danger:hover{color:#fff;background-color:#e53e3e;border-color:#e53e3e}
.btn-outline-danger.focus,.btn-outline-danger:focus{box-shadow:0 0 0 1px rgba(229,62,62,.5)}
.btn-outline-danger.disabled,.btn-outline-danger:disabled{color:#e53e3e;background-color:transparent}
.btn-outline-danger:not(:disabled):not(.disabled).active,.btn-outline-danger:not(:disabled):not(.disabled):active,.show>.btn-outline-danger.dropdown-toggle{color:#fff;background-color:#e53e3e;border-color:#e53e3e}
.btn-outline-danger:not(:disabled):not(.disabled).active:focus,.btn-outline-danger:not(:disabled):not(.disabled):active:focus,.show>.btn-outline-danger.dropdown-toggle:focus{box-shadow:0 0 0 1px rgba(229,62,62,.5)}
.btn-link{font-weight:400;color:#11b0ff;text-decoration:none}
.btn-link:hover{color:#0083c4;text-decoration:underline}
.btn-link.focus,.btn-link:focus{text-decoration:underline;box-shadow:none}
.btn-link.disabled,.btn-link:disabled{color:#6c757d;pointer-events:none}
.btn-lg{padding:.5rem 1rem;font-size:1.09375rem;line-height:1.5;border-radius:.3rem}
.btn-sm{padding:.25rem .5rem;font-size:.765625rem;line-height:1.5;border-radius:.2rem}
.btn-block{display:block;width:100%}
.btn-block+.btn-block{margin-top:.5rem}input[type=button].btn-block,input[type=reset].btn-block,input[type=submit].btn-block{width:100%}
.fade{transition:opacity .15s linear}
@media (prefers-reduced-motion:reduce){.fade{transition:none}}
.fade:not(.show){opacity:0}
.collapse:not(.show){display:none}
.dropdown{position:relative}
.dropdown-toggle{white-space:nowrap}
.dropdown-toggle:after{display:inline-block;margin-left:.255em;vertical-align:.255em;content:"";border-top:.3em solid;border-right:.3em solid transparent;border-bottom:0;border-left:.3em solid transparent}
.dropdown-toggle:empty:after{margin-left:0}
.dropdown-menu{position:absolute;top:100%;left:0;z-index:1000;display:none;float:left;min-width:10rem;padding:.5rem 0;margin:.125rem 0 0;font-size:.875rem;color:#212529;text-align:left;list-style:none;background-color:#fff;background-clip:padding-box;border:1px solid rgba(0,0,0,.15);border-radius:.25rem}
.dropdown-menu-right{right:0;left:auto}
.dropdown-menu[x-placement^=bottom],.dropdown-menu[x-placement^=left],.dropdown-menu[x-placement^=right],.dropdown-menu[x-placement^=top]{right:auto;bottom:auto}
.dropdown-divider{height:0;margin:.5rem 0;overflow:hidden;border-top:1px solid #e9ecef}
.dropdown-item{display:block;width:100%;padding:.25rem 1.5rem;clear:both;font-weight:400;color:#212529;text-align:inherit;white-space:nowrap;background-color:transparent;border:0}
.dropdown-item:focus,.dropdown-item:hover{color:#16181b;text-decoration:none;background-color:#f8f9fa}
.dropdown-item.active,.dropdown-item:active{color:#fff;text-decoration:none;background-color:#3182ce}
.dropdown-item.disabled,.dropdown-item:disabled{color:#6c757d;pointer-events:none;background-color:transparent}
.dropdown-menu.show{display:block}
.dropdown-header{display:block;padding:.5rem 1.5rem;margin-bottom:0;font-size:.765625rem;color:#6c757d;white-space:nowrap}
.btn-group{position:relative;display:inline-flex;vertical-align:middle}
.btn-group>.btn{position:relative;flex:1 1 auto}
.btn-group>.btn.active,.btn-group>.btn:active,.btn-group>.btn:focus,.btn-group>.btn:hover{z-index:1}
.btn-group>.btn-group:not(:first-child),.btn-group>.btn:not(:first-child){margin-left:-1px}
.btn-group>.btn-group:not(:last-child)>.btn,.btn-group>.btn:not(:last-child):not(.dropdown-toggle){border-top-right-radius:0;border-bottom-right-radius:0}
.btn-group>.btn-group:not(:first-child)>.btn,.btn-group>.btn:not(:first-child){border-top-left-radius:0;border-bottom-left-radius:0}
.input-group{position:relative;display:flex;flex-wrap:wrap;align-items:stretch;width:100%}
.input-group>.custom-file,.input-group>.custom-select,.input-group>.form-control{position:relative;flex:1 1 auto;width:1%;margin-bottom:0}
.input-group>.custom-file+.custom-file,.input-group>.custom-file+.custom-select,.input-group>.custom-file+.form-control,.input-group>.custom-select+.custom-file,.input-group>.custom-select+.custom-select,.input-group>.custom-select+.form-control,.input-group>.form-control+.custom-file,.input-group>.form-control+.custom-select,.input-group>.form-control+.form-control{margin-left:-1px}
.input-group>.custom-file .custom-file-input:focus~.custom-file-label,.input-group>.custom-select:focus,.input-group>.form-control:focus{z-index:3}
.input-group>.custom-file .custom-file-input:focus{z-index:4}
.input-group>.custom-select:not(:last-child),.input-group>.form-control:not(:last-child){border-top-right-radius:0;border-bottom-right-radius:0}
.input-group>.custom-select:not(:first-child),.input-group>.form-control:not(:first-child){border-top-left-radius:0;border-bottom-left-radius:0}
.input-group>.custom-file{display:flex;align-items:center}
.input-group>.custom-file:not(:last-child) .custom-file-label,.input-group>.custom-file:not(:last-child) .custom-file-label:after{border-top-right-radius:0;border-bottom-right-radius:0}
.input-group>.custom-file:not(:first-child) .custom-file-label{border-top-left-radius:0;border-bottom-left-radius:0}
.input-group-append{display:flex}
.input-group-append .btn{position:relative;z-index:2}
.input-group-append .btn:focus{z-index:3}
.input-group-append,.input-group-append .btn+.btn,.input-group-append .btn+.input-group-text,.input-group-append .input-group-text+.btn,.input-group-append .input-group-text+.input-group-text{margin-left:-1px}
.input-group-text{display:flex;align-items:center;padding:.375rem .75rem;margin-bottom:0;font-size:.875rem;font-weight:400;line-height:1.5;color:#495057;text-align:center;white-space:nowrap;background-color:#e9ecef;border:1px solid #ced4da;border-radius:.25rem}
.input-group-text input[type=checkbox],.input-group-text input[type=radio]{margin-top:0}
.input-group>.input-group-append:last-child>.btn:not(:last-child):not(.dropdown-toggle),.input-group>.input-group-append:last-child>.input-group-text:not(:last-child),.input-group>.input-group-append:not(:last-child)>.btn,.input-group>.input-group-append:not(:last-child)>.input-group-text{border-top-right-radius:0;border-bottom-right-radius:0}
.input-group>.input-group-append>.btn,.input-group>.input-group-append>.input-group-text{border-top-left-radius:0;border-bottom-left-radius:0}
.custom-control{position:relative;display:block;min-height:1.3125rem;padding-left:1.5rem}
.custom-control-input{position:absolute;z-index:-1;opacity:0}
.custom-control-input:checked~.custom-control-label:before{color:#fff;border-color:#ccc;background-color:#ccc}
.custom-control-input:focus~.custom-control-label:before{box-shadow:0 0 2px 1px rgba(49,130,206,.1)}
.custom-control-input:focus:not(:checked)~.custom-control-label:before{border-color:#468fd3}
.custom-control-input:not(:disabled):active~.custom-control-label:before{color:#fff;background-color:#c1daf0;border-color:#c1daf0}
.custom-control-input:disabled~.custom-control-label{color:#6c757d}
.custom-control-input:disabled~.custom-control-label:before{background-color:#e9ecef}
.custom-control-label{position:relative;margin-bottom:0;vertical-align:top}
.custom-control-label:before{pointer-events:none;background-color:#fff;border:1px solid #adb5bd}
.custom-control-label:after,.custom-control-label:before{position:absolute;top:.15625rem;left:-1.5rem;display:block;width:1rem;height:1rem;content:""}
.custom-control-label:after{background:no-repeat 50%/50% 50%}
.custom-checkbox .custom-control-label:before{border-radius:.25rem}
.custom-checkbox .custom-control-input:checked~.custom-control-label:after{background-image:url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3E%3Cpath fill='%23fff' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26l2.974 2.99L8 2.193z'/%3E%3C/svg%3E")}
.custom-checkbox .custom-control-input:indeterminate~.custom-control-label:before{border-color:#ccc;background-color:#ccc}
.custom-checkbox .custom-control-input:indeterminate~.custom-control-label:after{background-image:url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 4'%3E%3Cpath stroke='%23fff' d='M0 2h4'/%3E%3C/svg%3E")}
.custom-checkbox .custom-control-input:disabled:checked~.custom-control-label:before{background-color:rgba(49,130,206,.5)}
.custom-checkbox .custom-control-input:disabled:indeterminate~.custom-control-label:before{background-color:rgba(49,130,206,.5)}
.custom-radio .custom-control-label:before{border-radius:50%}
.custom-radio .custom-control-input:checked~.custom-control-label:after{background-image:url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3E%3Ccircle r='3' fill='%23fff'/%3E%3C/svg%3E")}
.custom-radio .custom-control-input:disabled:checked~.custom-control-label:before{background-color:rgba(49,130,206,.5)}
.custom-select{display:inline-block;width:100%;height:calc(2.0625rem + 2px);padding:.375rem 1.75rem .375rem .75rem;font-size:.875rem;font-weight:400;line-height:1.5;color:#495057;vertical-align:middle;background:url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 5'%3E%3Cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3E%3C/svg%3E") no-repeat right .75rem center/8px 10px;background-color:#fff;border:1px solid #ced4da;border-radius:.25rem;-webkit-appearance:none;-moz-appearance:none;appearance:none}
.custom-select:focus{border-color:#98c1e7;outline:0;box-shadow:0 0 0 1px rgba(49,130,206,.25)}
.custom-select:focus::-ms-value{color:#495057;background-color:#fff}
.custom-select[multiple],.custom-select[size]:not([size="1"]){height:auto;padding-right:.75rem;background-image:none}
.custom-select:disabled{color:#6c757d;background-color:#e9ecef}
.custom-select::-ms-expand{display:none}
.custom-file{display:inline-block;margin-bottom:0}
.custom-file,.custom-file-input{position:relative;width:100%;height:calc(2.0625rem + 2px)}
.custom-file-input{z-index:2;margin:0;opacity:0}
.custom-file-input:focus~.custom-file-label{border-color:#98c1e7;box-shadow:0 0 2px 1px rgba(49,130,206,.1)}
.custom-file-input:disabled~.custom-file-label{background-color:#e9ecef}
.custom-file-input:lang(en)~.custom-file-label:after{content:"Browse"}
.custom-file-input~.custom-file-label[data-browse]:after{content:attr(data-browse)}
.custom-file-label{left:0;z-index:1;height:calc(2.0625rem + 2px);font-weight:400;background-color:#fff;border:1px solid #ced4da;border-radius:.25rem}
.custom-file-label,.custom-file-label:after{position:absolute;top:0;right:0;padding:.375rem .75rem;line-height:1.5;color:#495057}
.custom-file-label:after{bottom:0;z-index:3;display:block;height:2.0625rem;content:"Browse";background-color:#e9ecef;border-left:inherit;border-radius:0 .25rem .25rem 0}
.custom-control-label:before,.custom-file-label,.custom-select{transition:background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out}
@media (prefers-reduced-motion:reduce){.custom-control-label:before,.custom-file-label,.custom-select{transition:none}}
.nav{display:flex;flex-wrap:wrap;padding-left:0;margin-bottom:0;list-style:none}
.nav-link{display:block;padding:.5rem 1rem}
.nav-link:focus,.nav-link:hover{text-decoration:none}
.nav-link.disabled{color:#6c757d;pointer-events:none;cursor:default}
.nav-tabs{border-bottom:1px solid #dee2e6}
.nav-tabs .nav-item{margin-bottom:-1px}
.nav-tabs .nav-link{border:1px solid transparent;border-top-left-radius:.25rem;border-top-right-radius:.25rem}
.nav-tabs .nav-link:focus,.nav-tabs .nav-link:hover{border-color:#e9ecef #e9ecef #dee2e6}
.nav-tabs .nav-link.disabled{color:#6c757d;background-color:transparent;border-color:transparent}
.nav-tabs .nav-item.show .nav-link,.nav-tabs .nav-link.active{color:#495057;background-color:#fff;border-color:#dee2e6 #dee2e6 #fff}
.nav-tabs .dropdown-menu{margin-top:-1px;border-top-left-radius:0;border-top-right-radius:0}
.nav-pills .nav-link{border-radius:.25rem}
.nav-pills .nav-link.active,.nav-pills .show>.nav-link{color:#fff;background-color:#3182ce}
.nav-fill .nav-item{flex:1 1 auto;text-align:center}
.tab-content>.tab-pane{display:none}
.tab-content>.active{display:block}
.navbar{position:relative;padding:.5rem 1rem}
.navbar,.navbar>.container,.navbar>.container-fluid{display:flex;flex-wrap:wrap;align-items:center;justify-content:space-between}
.navbar-brand{display:inline-block;padding-top:.3359375rem;padding-bottom:.3359375rem;margin-right:1rem;font-size:1.09375rem;line-height:inherit;white-space:nowrap}
.navbar-brand:focus,.navbar-brand:hover{text-decoration:none}
.navbar-nav{display:flex;flex-direction:column;padding-left:0;margin-bottom:0;list-style:none}
.navbar-nav .nav-link{padding-right:0;padding-left:0}
.navbar-nav .dropdown-menu{position:static;float:none}
.navbar-collapse{flex-basis:100%;flex-grow:1;align-items:center}
.navbar-toggler{padding:.25rem .75rem;font-size:1.09375rem;line-height:1;background-color:transparent;border:1px solid transparent;border-radius:.25rem}
.navbar-toggler:focus,.navbar-toggler:hover{text-decoration:none}
.navbar-toggler-icon{display:inline-block;width:1.5em;height:1.5em;vertical-align:middle;content:"";background:no-repeat 50%;background-size:100% 100%}
@media (max-width:991.98px){.navbar-expand-lg>.container,.navbar-expand-lg>.container-fluid{padding-right:0;padding-left:0}}
@media (min-width:992px){.navbar-expand-lg{flex-flow:row nowrap;justify-content:flex-start}
.navbar-expand-lg .navbar-nav{flex-direction:row}
.navbar-expand-lg .navbar-nav .dropdown-menu{position:absolute}
.navbar-expand-lg .navbar-nav .nav-link{padding-right:.5rem;padding-left:.5rem}
.navbar-expand-lg>.container,.navbar-expand-lg>.container-fluid{flex-wrap:nowrap}
.navbar-expand-lg .navbar-collapse{display:flex!important;flex-basis:auto}
.navbar-expand-lg .navbar-toggler{display:none}}
.navbar-light .navbar-brand,.navbar-light .navbar-brand:focus,.navbar-light .navbar-brand:hover{color:rgba(0,0,0,.9)}
.navbar-light .navbar-nav .nav-link{color:rgba(0,0,0,.5)}
.navbar-light .navbar-nav .nav-link:focus,.navbar-light .navbar-nav .nav-link:hover{color:rgba(0,0,0,.7)}
.navbar-light .navbar-nav .nav-link.disabled{color:rgba(0,0,0,.3)}
.navbar-light .navbar-nav .active>.nav-link,.navbar-light .navbar-nav .nav-link.active,.navbar-light .navbar-nav .nav-link.show,.navbar-light .navbar-nav .show>.nav-link{color:rgba(0,0,0,.9)}
.navbar-light .navbar-toggler{color:rgba(0,0,0,.5);border-color:rgba(0,0,0,.1)}
.navbar-light .navbar-toggler-icon{background-image:url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(0, 0, 0, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E")}
.navbar-dark .navbar-brand,.navbar-dark .navbar-brand:focus,.navbar-dark .navbar-brand:hover{color:#fff}
.navbar-dark .navbar-nav .nav-link{color:hsla(0,0%,100%,.5)}
.navbar-dark .navbar-nav .nav-link:focus,.navbar-dark .navbar-nav .nav-link:hover{color:hsla(0,0%,100%,.75)}
.navbar-dark .navbar-nav .nav-link.disabled{color:hsla(0,0%,100%,.25)}
.navbar-dark .navbar-nav .active>.nav-link,.navbar-dark .navbar-nav .nav-link.active,.navbar-dark .navbar-nav .nav-link.show,.navbar-dark .navbar-nav .show>.nav-link{color:#fff}
.navbar-dark .navbar-toggler{color:hsla(0,0%,100%,.5);border-color:hsla(0,0%,100%,.1)}
.card{position:relative;display:flex;flex-direction:column;min-width:0;word-wrap:break-word;background-color:#fff;background-clip:border-box;border:1px solid rgba(0,0,0,.125);border-radius:.25rem}
.card>hr{margin-right:0;margin-left:0}
.card-body{flex:1 1 auto;padding:1.25rem}
.card-header,.card-text:last-child{margin-bottom:0}
.card-header{padding:.75rem 1.25rem;background-color:rgba(0,0,0,.03);border-bottom:1px solid rgba(0,0,0,.125)}
.card-header:first-child{border-radius:calc(.25rem - 1px) calc(.25rem - 1px) 0 0}
.card-footer{padding:.75rem 1.25rem;background-color:rgba(0,0,0,.03);border-top:1px solid rgba(0,0,0,.125)}
.card-footer:last-child{border-radius:0 0 calc(.25rem - 1px) calc(.25rem - 1px)}
.card-header-tabs{margin-right:-.625rem;margin-bottom:-.75rem;margin-left:-.625rem;border-bottom:0}
.card-img-top{width:100%;border-top-left-radius:calc(.25rem - 1px);border-top-right-radius:calc(.25rem - 1px)}
.breadcrumb{display:flex;flex-wrap:wrap;padding:.75rem 1rem;margin-bottom:1rem;list-style:none;background-color:#e9ecef;border-radius:.25rem}
.breadcrumb-item+.breadcrumb-item{padding-left:.5rem}
.breadcrumb-item+.breadcrumb-item:before{display:inline-block;padding-right:.5rem;color:#6c757d;content:"/"}
.breadcrumb-item+.breadcrumb-item:hover:before{text-decoration:underline;text-decoration:none}
.breadcrumb-item.active{color:#6c757d}
.pagination{display:flex;padding-left:0;list-style:none;border-radius:.25rem}
.page-link{position:relative;display:block;padding:.5rem .75rem;margin-left:-1px;line-height:1.25;color:#11b0ff;background-color:#fff;border:1px solid #dee2e6}
.page-link:hover{z-index:2;color:#0083c4;text-decoration:none;background-color:#e9ecef;border-color:#dee2e6}
.page-link:focus{z-index:2;outline:0;box-shadow:0 0 2px 1px rgba(49,130,206,.1)}
.page-item:first-child .page-link{margin-left:0;border-top-left-radius:.25rem;border-bottom-left-radius:.25rem}
.page-item:last-child .page-link{border-top-right-radius:.25rem;border-bottom-right-radius:.25rem}
.page-item.active .page-link{z-index:1;color:#fff;background-color:#3182ce;border-color:#3182ce}
.page-item.disabled .page-link{color:#6c757d;pointer-events:none;cursor:auto;background-color:#fff;border-color:#dee2e6}
.badge{display:inline-block;padding:.25em .4em;font-size:75%;font-weight:700;line-height:1;text-align:center;white-space:nowrap;vertical-align:baseline;border-radius:.25rem;transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out}
@media (prefers-reduced-motion:reduce){
.badge{transition:none}}a.badge:focus,a.badge:hover{text-decoration:none}
.badge:empty{display:none}
.btn .badge{position:relative;top:-1px}
.badge-primary{color:#fff;background-color:#3182ce}a.badge-primary:focus,a.badge-primary:hover{color:#fff;background-color:#2768a5}a.badge-primary.focus,a.badge-primary:focus{outline:0;box-shadow:0 0 0 1px rgba(49,130,206,.5)}
.badge-secondary{color:#fff;background-color:#6c757d}a.badge-secondary:focus,a.badge-secondary:hover{color:#fff;background-color:#545b62}a.badge-secondary.focus,a.badge-secondary:focus{outline:0;box-shadow:0 0 0 1px rgba(108,117,125,.5)}
.badge-success{color:#fff;background-color:#38a169}a.badge-success:focus,a.badge-success:hover{color:#fff;background-color:#2b7b50}a.badge-success.focus,a.badge-success:focus{outline:0;box-shadow:0 0 0 1px rgba(56,161,105,.5)}
.badge-info{color:#fff;background-color:#854a8f}a.badge-info:focus,a.badge-info:hover{color:#fff;background-color:#66396d}a.badge-info.focus,a.badge-info:focus{outline:0;box-shadow:0 0 0 1px rgba(133,74,143,.5)}
.badge-warning{color:#212529;background-color:#cd9701}a.badge-warning:focus,a.badge-warning:hover{color:#212529;background-color:#9a7201}a.badge-warning.focus,a.badge-warning:focus{outline:0;box-shadow:0 0 0 1px rgba(205,151,1,.5)}
.badge-danger{color:#fff;background-color:#e53e3e}a.badge-danger:focus,a.badge-danger:hover{color:#fff;background-color:#d41c1c}a.badge-danger.focus,a.badge-danger:focus{outline:0;box-shadow:0 0 0 1px rgba(229,62,62,.5)}
.alert{position:relative;margin-bottom:1rem;border:1px solid transparent;border-radius:.25rem}
.alert-primary{color:#19446b;background-color:#d6e6f5;border-color:#c5dcf1}
.alert-primary hr{border-top-color:#b0d0ec}
.alert-secondary{color:#383d41;background-color:#e2e3e5;border-color:#d6d8db}
.alert-secondary hr{border-top-color:#c8cbcf}
.alert-success{color:#1d5437;background-color:#d7ece1;border-color:#c7e5d5}
.alert-success hr{border-top-color:#b6ddc8}
.alert-info{color:#45264a;background-color:#e7dbe9;border-color:#ddcce0}
.alert-info hr{border-top-color:#d2bcd6}
.alert-warning{color:#6b4f01;background-color:#f5eacc;border-color:#f1e2b8}
.alert-warning hr{border-top-color:#edd9a3}
.alert-danger{color:#772020;background-color:#fad8d8;border-color:#f8c9c9}
.alert-danger hr{border-top-color:#f5b2b2}
@-webkit-keyframes progress-bar-stripes{0%{background-position:1rem 0}to{background-position:0 0}}
@keyframes progress-bar-stripes{0%{background-position:1rem 0}to{background-position:0 0}}
.progress{display:flex;height:1rem;overflow:hidden;font-size:.65625rem;background-color:#e9ecef;border-radius:.25rem}
.progress-bar{display:flex;flex-direction:column;justify-content:center;color:#fff;text-align:center;white-space:nowrap;background-color:#3182ce;transition:width .6s ease}
@media (prefers-reduced-motion:reduce){.progress-bar{transition:none}}
.progress-bar-striped{background-image:linear-gradient(45deg,hsla(0,0%,100%,.15) 25%,transparent 0,transparent 50%,hsla(0,0%,100%,.15) 0,hsla(0,0%,100%,.15) 75%,transparent 0,transparent);background-size:1rem 1rem}
.progress-bar-animated{-webkit-animation:progress-bar-stripes 1s linear infinite;animation:progress-bar-stripes 1s linear infinite}
@media (prefers-reduced-motion:reduce){.progress-bar-animated{-webkit-animation:none;animation:none}}
.media{display:flex;align-items:flex-start}
.close{float:right;font-size:1.3125rem;font-weight:700;line-height:1;color:#000;text-shadow:0 1px 0 #fff;opacity:.5}
.close:hover{color:#000;text-decoration:none}
.close:not(:disabled):not(.disabled):focus,.close:not(:disabled):not(.disabled):hover{opacity:.75}button.close{padding:0;background-color:transparent;border:0;-webkit-appearance:none;-moz-appearance:none;appearance:none}a.close.disabled{pointer-events:none}
.modal-open{overflow:hidden}
.modal-open .modal{overflow-x:hidden;overflow-y:auto}
.modal{position:fixed;top:0;left:0;z-index:1050;display:none;width:100%;height:100%;overflow:hidden;outline:0}
.modal-dialog{position:relative;width:auto;margin:.5rem;pointer-events:none}
.modal.fade .modal-dialog{transition:-webkit-transform .3s ease-out;transition:transform .3s ease-out;transition:transform .3s ease-out,-webkit-transform .3s ease-out;-webkit-transform:translateY(-50px);transform:translateY(-50px)}
@media (prefers-reduced-motion:reduce){.modal.fade .modal-dialog{transition:none}}
.modal.show .modal-dialog{-webkit-transform:none;transform:none}
.modal-dialog-centered{display:flex;align-items:center;min-height:calc(100% - 1rem)}
.modal-dialog-centered:before{display:block;height:calc(100vh - 1rem);content:""}
.modal-content{position:relative;display:flex;flex-direction:column;width:100%;pointer-events:auto;background-color:#fff;background-clip:padding-box;border:1px solid rgba(0,0,0,.2);border-radius:.3rem;outline:0}
.modal-backdrop{position:fixed;top:0;left:0;z-index:1040;width:100vw;height:100vh;background-color:#000}
.modal-backdrop.fade{opacity:0}
.modal-backdrop.show{opacity:.5}
.modal-header{display:flex;align-items:flex-start;justify-content:space-between;padding:1rem;border-bottom:1px solid #e9ecef;border-top-left-radius:.3rem;border-top-right-radius:.3rem}
.modal-header .close{padding:1rem;margin:-1rem -1rem -1rem auto}
.modal-title{margin-bottom:0;line-height:1.5}
.modal-body{position:relative;flex:1 1 auto;padding:1rem}
.modal-footer{display:flex;align-items:center;justify-content:flex-end;padding:1rem;border-top:1px solid #e9ecef;border-bottom-right-radius:.3rem;border-bottom-left-radius:.3rem}
.modal-footer>:not(:first-child){margin-left:.25rem}
.modal-footer>:not(:last-child){margin-right:.25rem}
@media (min-width:576px){.modal-dialog{max-width:500px;margin:1.75rem auto}
.modal-dialog-centered{min-height:calc(100% - 3.5rem)}
.modal-dialog-centered:before{height:calc(100vh - 3.5rem)}}
.tooltip{position:absolute;z-index:1070;display:block;margin:0;font-family:-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol;font-style:normal;font-weight:400;line-height:1.5;text-align:left;text-align:start;text-decoration:none;text-shadow:none;text-transform:none;letter-spacing:normal;word-break:normal;word-spacing:normal;white-space:normal;line-break:auto;font-size:.765625rem;word-wrap:break-word;opacity:0}
.tooltip.show{opacity:.9}
.tooltip .arrow{position:absolute;display:block;width:.8rem;height:.4rem}
.tooltip .arrow:before{position:absolute;content:"";border-color:transparent;border-style:solid}
.bs-tooltip-top{padding:.4rem 0}
.bs-tooltip-top .arrow{bottom:0}
.bs-tooltip-top .arrow:before{top:0;border-width:.4rem .4rem 0;border-top-color:#000}
.bs-tooltip-right{padding:0 .4rem}
.bs-tooltip-right .arrow{left:0;width:.4rem;height:.8rem}
.bs-tooltip-right .arrow:before{right:0;border-width:.4rem .4rem .4rem 0;border-right-color:#000}
.bs-tooltip-bottom{padding:.4rem 0}
.bs-tooltip-bottom .arrow{top:0}
.bs-tooltip-bottom .arrow:before{bottom:0;border-width:0 .4rem .4rem;border-bottom-color:#000}
.bs-tooltip-left{padding:0 .4rem}
.bs-tooltip-left .arrow{right:0;width:.4rem;height:.8rem}
.bs-tooltip-left .arrow:before{left:0;border-width:.4rem 0 .4rem .4rem;border-left-color:#000}
.tooltip-inner{max-width:200px;padding:.25rem .5rem;color:#fff;text-align:center;background-color:#000;border-radius:.25rem}
.popover{top:0;left:0;z-index:1060;max-width:276px;font-family:-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol;font-style:normal;font-weight:400;line-height:1.5;text-align:left;text-align:start;text-decoration:none;text-shadow:none;text-transform:none;letter-spacing:normal;word-break:normal;word-spacing:normal;white-space:normal;line-break:auto;font-size:.765625rem;word-wrap:break-word;background-color:#fff;background-clip:padding-box;border:1px solid rgba(0,0,0,.2);border-radius:.3rem}
.popover,.popover .arrow{position:absolute;display:block}
.popover .arrow{width:1rem;height:.5rem;margin:0 .3rem}
.popover .arrow:after,.popover .arrow:before{position:absolute;display:block;content:"";border-color:transparent;border-style:solid}
.align-top{vertical-align:top!important}
.align-middle{vertical-align:middle!important}
.bg-primary{background-color:#3182ce!important}a.bg-primary:focus,a.bg-primary:hover,button.bg-primary:focus,button.bg-primary:hover{background-color:#2768a5!important}
.bg-success{background-color:#38a169!important}a.bg-success:focus,a.bg-success:hover,button.bg-success:focus,button.bg-success:hover{background-color:#2b7b50!important}
.bg-info{background-color:#854a8f!important}a.bg-info:focus,a.bg-info:hover,button.bg-info:focus,button.bg-info:hover{background-color:#66396d!important}
.bg-danger{background-color:#e53e3e!important}a.bg-danger:focus,a.bg-danger:hover,button.bg-danger:focus,button.bg-danger:hover{background-color:#d41c1c!important}
.bg-dark{background-color:#343a40!important}a.bg-dark:focus,a.bg-dark:hover,button.bg-dark:focus,button.bg-dark:hover{background-color:#1d2124!important}
.bg-white{background-color:#fff!important}
.border{border:1px solid #dee2e6!important}
.border-0{border:0!important}
.border-right-0{border-right:0!important}
.border-left-0{border-left:0!important}
.rounded{border-radius:.25rem!important}
.clearfix:after{display:block;clear:both;content:""}
.d-none{display:none!important}
.d-inline{display:inline!important}
.d-inline-block{display:inline-block!important}
.d-block{display:block!important}
.d-flex{display:flex!important}
.d-inline-flex{display:inline-flex!important}
@media (min-width:576px){.d-sm-none{display:none!important}
.d-sm-block{display:block!important}}
@media (min-width:768px){.d-md-none{display:none!important}
.d-md-block{display:block!important}}
@media (min-width:992px){.d-lg-none{display:none!important}
.d-lg-block{display:block!important}
.d-lg-flex{display:flex!important}}
.flex-row{flex-direction:row!important}
.flex-column{flex-direction:column!important}
.flex-wrap{flex-wrap:wrap!important}
.flex-grow-1{flex-grow:1!important}
.justify-content-end{justify-content:flex-end!important}
.justify-content-center{justify-content:center!important}
.justify-content-between{justify-content:space-between!important}
.justify-content-around{justify-content:space-around!important}
.align-items-start{align-items:flex-start!important}
.align-items-center{align-items:center!important}
@media (min-width:992px){.flex-lg-column{flex-direction:column!important}}
.float-left{float:left!important}
.float-right{float:right!important}
@media (min-width:768px){.float-md-right{float:right!important}}
@media (min-width:992px){.float-lg-right{float:right!important}}
.position-absolute{position:absolute!important}
.w-75{width:75%!important}
.w-100{width:100%!important}
.h-50{height:50%!important}
.h-100{height:100%!important}
.mt-0,.my-0{margin-top:0!important}
.mr-0,.mx-0{margin-right:0!important}
.mb-0,.my-0{margin-bottom:0!important}
.ml-0,.mx-0{margin-left:0!important}
.m-1{margin:.25rem!important}
.mt-1,.my-1{margin-top:.25rem!important}
.mr-1{margin-right:.25rem!important}
.mb-1,.my-1{margin-bottom:.25rem!important}
.ml-1{margin-left:.25rem!important}
.mt-2,.my-2{margin-top:.5rem!important}
.mr-2{margin-right:.5rem!important}
.mb-2,.my-2{margin-bottom:.5rem!important}
.ml-2{margin-left:.5rem!important}
.mt-3,.my-3{margin-top:1rem!important}
.mx-3{margin-right:1rem!important}
.mb-3,.my-3{margin-bottom:1rem!important}
.mx-3{margin-left:1rem!important}
.mt-4,.my-4{margin-top:1.5rem!important}
.mb-4,.my-4{margin-bottom:1.5rem!important}
.ml-4{margin-left:1.5rem!important}
.mt-5,.my-5{margin-top:3rem!important}
.mb-5,.my-5{margin-bottom:3rem!important}
.py-0{padding-top:0!important}
.px-0{padding-right:0!important}
.pb-0,.py-0{padding-bottom:0!important}
.pl-0,.px-0{padding-left:0!important}
.p-1{padding:.25rem!important}
.pt-1,.py-1{padding-top:.25rem!important}
.pr-1,.px-1{padding-right:.25rem!important}
.py-1{padding-bottom:.25rem!important}
.pl-1,.px-1{padding-left:.25rem!important}
.py-2{padding-top:.5rem!important}
.px-2{padding-right:.5rem!important}
.py-2{padding-bottom:.5rem!important}
.pl-2,.px-2{padding-left:.5rem!important}
.p-3{padding:1rem!important}
.py-3{padding-top:1rem!important}
.pr-3,.px-3{padding-right:1rem!important}
.py-3{padding-bottom:1rem!important}
.pl-3,.px-3{padding-left:1rem!important}
.pt-4,.py-4{padding-top:1.5rem!important}
.px-4{padding-right:1.5rem!important}
.py-4{padding-bottom:1.5rem!important}
.px-4{padding-left:1.5rem!important}
.py-5{padding-top:3rem!important}
.px-5{padding-right:3rem!important}
.py-5{padding-bottom:3rem!important}
.px-5{padding-left:3rem!important}
.mr-auto{margin-right:auto!important}
.ml-auto{margin-left:auto!important}
@media (min-width:576px){.mb-sm-0{margin-bottom:0!important}
.mr-sm-2{margin-right:.5rem!important}}
@media (min-width:768px){.mb-md-5{margin-bottom:3rem!important}}
@media (min-width:992px){.my-lg-0{margin-top:0!important;margin-bottom:0!important}
.pl-lg-5{padding-left:3rem!important}}
@media (min-width:1200px){.pl-xl-2{padding-left:.5rem!important}}
.text-left{text-align:left!important}
.text-center{text-align:center!important}
@media (min-width:768px){.text-md-right{text-align:right!important}
.text-md-center{text-align:center!important}}
.font-weight-light{font-weight:300!important}
.text-white{color:#fff!important}
.text-primary{color:#3182ce!important}a.text-primary:focus,a.text-primary:hover{color:#225b90!important}
.text-success{color:#38a169!important}a.text-success:focus,a.text-success:hover{color:#246844!important}
.text-info{color:#854a8f!important}a.text-info:focus,a.text-info:hover{color:#56305d!important}
.text-warning{color:#cd9701!important}a.text-warning:focus,a.text-warning:hover{color:#815f01!important}
.text-danger{color:#e53e3e!important}a.text-danger:focus,a.text-danger:hover{color:#bd1919!important}
.text-light{color:#f8f9fa!important}a.text-light:focus,a.text-light:hover{color:#cbd3da!important}
.text-muted{color:#6c757d!important}
.visible{visibility:visible!important}
@media print{*,:after,:before{text-shadow:none!important;box-shadow:none!important}a:not(.btn){text-decoration:underline}abbr[title]:after{content:" (" attr(title) ")"}pre{white-space:pre-wrap!important}blockquote,pre{border:1px solid #adb5bd;page-break-inside:avoid}thead{display:table-header-group}img,tr{page-break-inside:avoid}h2,h3,p{orphans:3;widows:3}h2,h3{page-break-after:avoid}
@page{size:a3}
.container,body{min-width:992px!important}
.navbar{display:none}
.badge{border:1px solid #000}
.table{border-collapse:collapse!important}
.table td,.table th{background-color:#fff!important}
.table-bordered td,.table-bordered th{border:1px solid #dee2e6!important}
.table .thead-dark th{color:inherit;border-color:#dee2e6}}body,button{font-family:Source Sans Pro,Helvetica Neue,Roboto,Microsoft JhengHei,LiHei Pro,Noto Sans CJK TC,Arial,sans-serif}body,html{position:relative;min-height:100%;height:100%;width:100%}body{-webkit-font-smoothing:antialiased;}
.container{height:auto}
.footer{margin-top:20px;margin-bottom:0;width:100%;height:80px;line-height:20px}
.footer>.container{border:1px solid #444;border-radius:0;padding:20px 0 20px 20px;background:#303030;border:1px solid #e6e6e6;background:#fff}
.full-width{width:100%}
.d-block{display:block}
.no-tb-margin{margin-top:0;margin-bottom:0}
.link-active{font-weight:700}
.clearfix{clear:both}#fillIP{margin-left:8px}
.alert{border:0;border-radius:0;padding:.75rem 1.25rem}
.alert-skinny{padding:.2rem!important}
.alert-danger a,.alert-danger a:link,.alert-info a,.alert-info a:link,.alert-primary a,.alert-primary a:link,.alert-success a,.alert-success a:link,.alert-warning a,.alert-warning a:link{color:#fff;text-decoration:underline}
.alert-success{background:#38a169;color:#fff}
.alert-danger{background:#e53e3e;color:#fff}
.alert-warning{background:#cd9701;color:#fff}
.alert-info{background:#854a8f;color:#fff}
.alert-primary{background:#3182ce;color:#fff}
.dropdown-header{font-size:.875rem}
.text-white>a{color:#ececec}
.text-white>a:link{color:#ececec;text-decoration:none}
.text-white>a:hover{color:#fff;text-decoration:underline}
.navbar-light.bg-faded{background-color:#fff;border-bottom:1px solid #e6e6e6;border-radius:0}
@media (max-width:576px){.container{width:100%;max-width:100%}}
.badge{font-size:80%}
.badge.disabled{pointer-events:none;cursor:not-allowed;opacity:.65;filter:alpha(opacity=65);box-shadow:none}
@media (max-width:768px){.n-h3-small{margin-top:6px}}
@media (min-width:768px){.n-btn-games-small{display:block;width:100%;margin:4px 1px}
.n-center-small{text-align:center}}
.n-icon-center{margin:auto;top:0;left:0;bottom:0;right:0;font-size:40px;line-height:50px;width:50px;height:50px;text-align:center;vertical-align:bottom}
.n-icon-center,.n-loading-center{position:absolute;overflow:hidden}
.n-loading-center{width:100%;height:100%;min-height:190px;margin:-15px 0 -15px -15px;padding:-15px 0;clear:both}
.n-loading-bg{background-color:rgba(0,0,0,.05)}
.n-checkbox-small{margin-top:10px;margin-bottom:0}
.item-paragraph{margin:10px 0 0}
.pad{padding:10px}
.marg{margin:10px}
@media (min-width:992px){.full-height{height:100%;padding:15% 0}
.fnheight{height:49%;padding:5% 0}}
.gameleft p{margin:2px 0 0}
.push-down{padding-top:6px}
.table-responsive{display:table}
.form-inline.text-center{display:table;margin:auto}
@media (min-width:991px){.row.flex-override{display:flex;justify-content:space-around}}
.row.flex-override>.vertical-align-center{display:flex}
.row.flex-override .vertical-align-center .valign-center{align-self:center}
.n-fa-large{font-size:26px}
.navbar{font-size:14px}
.navbar-brand{padding-top:.5rem;font-size:1rem}
.blockquote{text-align:left;word-break:break-all;font-size:12px}
.navbar-brandimg{height:30px}
.invisible-overlay{display:flex;align-items:center;justify-content:center;background-color:rgba(255,37,37,.59);position:absolute;width:100%;height:100%;padding:0;z-index:2;border:1px solid rgba(0,0,0,.125);border-radius:.25rem;margin:0;color:#fff;font-size:20px}
.center{text-align:center}
.left{text-align:left}
.dropdown-notifications>.dropdown-menu{width:100%;min-width:250px;max-width:450px}
@media (min-width:768px){.b-right{border-bottom:0;border-right:1px solid #000;margin-bottom:0}}
@media (max-width:767px){.b-right{border-bottom:1px solid #000;border-right:0;margin-bottom:10px}}
.thumbnail-user-forum{width:45%;margin-bottom:16px;max-width:90px}
.notification-link.dropdown-item{white-space:normal}
.post-title{display:block;line-height:1.5}
.forum-right{text-align:right}
.forum-title{width:70%}
.greentext:before{content:">";float:left}
.greentext{color:#38a169}
.trustedText{color:#0086ff}input,select,textarea{font-family:Source Sans Pro,Microsoft JhengHei,sans-serif}
.blurb-quote-col{display:flex;flex-direction:column;justify-content:center}
.blurb-quote{max-height:100px;white-space:pre-wrap;overflow-y:auto;word-break:break-word}
.navbar-notification-list{display:block;max-height:60vh;overflow-y:auto}
.forum-post{background-color:#fcfcfc}
.forum-post:hover{background-color:#f0f0f0}
.forum-section-info{background-color:#fafafa}
.font-light{font-weight:300}
.pills-no-border>.nav-item:first-child>a{border-top-left-radius:.25rem}
.pills-no-border>.nav-item>a{border-radius:0}
.nav-scroller{position:relative;z-index:2;height:2.75rem;overflow-y:hidden;box-shadow:0 .25rem .75rem rgba(0,0,0,.06)}
.nav-scroller .nav{display:flex;flex-wrap:nowrap;padding-bottom:1rem;margin-top:-1px;width:100%;overflow-x:auto;text-align:center;white-space:nowrap;-webkit-overflow-scrolling:touch}
.nav-underline .nav-link{padding-top:.75rem;padding-bottom:.75rem;font-size:.875rem}
.nav-scroller-inner>a.nav-link{color:rgba(0,0,0,.5)}
.nav-scroller-inner>a.nav-link:hover{color:rgba(0,0,0,.7)}span.message-read{color:#6c757d}span.message-not-read{color:#000}
@media (min-width:768px){.w-md-0{width:0!important}}
.card-header{border-bottom:0}
.text-primary{color:#3182ce}
@-webkit-keyframes finobe__spinning{0%{-webkit-transform:rotate(0deg);transform:rotate(0deg)}to{-webkit-transform:rotate(1turn);transform:rotate(1turn)}}
.home-main-content{background:url(/img/xmas_small.jpg) no-repeat 50%;background:url(/img/xmas_small.jpg) no-repeat 50%,linear-gradient(to right bottom,#312a6c,#852d91);background:url(/img/xmas_small.jpg) no-repeat 50%,-moz-linear-gradient(top left,#312a6c,#852d91);background-size:cover;margin:0;padding:0;height:300px;color:hsla(0,0%,100%,.92);display:flex}
/* .home-main-content>.container{display:flex;flex-direction:column;align-self:center}h1,h2,h3,h4,h5{font-family:proxima-nova,Source Sans Pro,Helvetica Neue,Roboto,Microsoft JhengHei,LiHei Pro,Noto Sans CJK TC,Arial,sans-serif} */
.fa-play{content:"uf04b"}
.login__logo-img{max-width:150px}
.btn{text-transform:lowercase;cursor:pointer!important;font-size:14px}
.btn-sm{font-size:12px!important}
.btn-md{font-size:14px!important}
.btn-lg{font-size:16px!important}
.btn-longer{padding-left:32px;padding-right:32px}
.btn-link:active,.btn-link:focus,.btn-link:hover{text-decoration:none}
.btn-danger:focus,.btn-info:focus,.btn-outline-danger:focus,.btn-outline-primary:focus,.btn-primary:focus,.btn-success:focus,.btn-warning:focus,.btn:focus{box-shadow:none}
.btn:hover{box-shadow:0 1px 2px 0 rgba(0,0,0,.1),0 1px 4px 2px rgba(0,0,0,.1)}
.btn-primary:hover{box-shadow:0 1px 2px 0 rgba(49,130,206,.1),0 1px 4px 2px rgba(49,130,206,.3)}
.btn-success:hover{box-shadow:0 1px 2px 0 rgba(56,161,105,.1),0 1px 4px 2px rgba(56,161,105,.3)}
.btn-info:hover{box-shadow:0 1px 2px 0 rgba(133,74,143,.1),0 1px 4px 2px rgba(133,74,143,.3)}
.btn-warning:hover{box-shadow:0 1px 2px 0 rgba(205,151,1,.1),0 1px 4px 2px rgba(205,151,1,.3)}
.btn-danger:hover{box-shadow:0 1px 2px 0 rgba(229,62,62,.1),0 1px 4px 2px rgba(229,62,62,.3)}
.btn-primary:not(:disabled):not(.disabled).active:focus,.btn-primary:not(:disabled):not(.disabled):active:focus,.show>.btn-primary.dropdown-toggle:focus{box-shadow:0 1px 2px 0 rgba(49,130,206,.3),0 2px 6px 2px rgba(49,130,206,.4)}
.btn-success:not(:disabled):not(.disabled).active:focus,.btn-success:not(:disabled):not(.disabled):active:focus,.show>.btn-success.dropdown-toggle:focus{box-shadow:0 1px 2px 0 rgba(56,161,105,.3),0 2px 6px 2px rgba(56,161,105,.4)}
.btn-danger:not(:disabled):not(.disabled).active:focus,.btn-danger:not(:disabled):not(.disabled):active:focus,.show>.btn-danger.dropdown-toggle:focus{box-shadow:0 1px 2px 0 rgba(133,74,143,.3),0 2px 6px 2px rgba(133,74,143,.4)}
.btn-warning:not(:disabled):not(.disabled).active:focus,.btn-warning:not(:disabled):not(.disabled):active:focus,.show>.btn-warning.dropdown-toggle:focus{box-shadow:0 1px 2px 0 rgba(205,151,1,.3),0 2px 6px 2px rgba(205,151,1,.4)}
.btn-danger:not(:disabled):not(.disabled).active:focus,.btn-danger:not(:disabled):not(.disabled):active:focus,.show>.btn-danger.dropdown-toggle:focus{box-shadow:0 1px 2px 0 rgba(229,62,62,.3),0 2px 6px 2px rgba(229,62,62,.4)}
.btn-outline-danger:hover,.btn-outline-primary:hover{background-color:#fff;border-color:#fff}
.btn-outline-primary:hover{color:#3182ce}
.btn-outline-danger:hover{color:#e53e3e}
.navbar-nobelium-dropdown.dropdown-menu.dropdown-menu-right>a{padding-left:18px}
@media (max-width:576px){nav .container{width:100%}}
.btn{transition:all .2s linear;font-weight:400;font-size:12px}
.btn-primary:focus{color:#fff}
.btn-normal-case{text-transform:none}
.game-card-link:active,.game-card-link:hover,.game-card-link:link,.game-card-link:visited{text-decoration:none}
.game-card{width:150px;display:inline-block;background:#fff;color:#000;border-radius:3px;transition:box-shadow .2s linear;box-shadow:0 1px 4px 0 rgba(25,25,25,.1)}
.game-card:hover{box-shadow:0 1px 4px 0 rgba(25,25,25,.5)}
.game-card>.thumbnail>.card-img-top,.game-card>.thumbnail>.vue-load-image>.card-img-top{width:150px;height:84px;background-color:#999}
.game-card>.thumbnail>.card-img-top{background-repeat:no-repeat;background-size:contain;background-position:50%;background-image:url("data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTI4IiBoZWlnaHQ9IjEyOCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48c3R5bGU+LnN0MntmaWxsOiMyZjJmMmZ9PC9zdHlsZT48cGF0aCBkPSJNNjQgOC43QzcuMyA4LjcgNiA3Mi4yIDYgODQuOGMwIDEyLjYgMjYgMjIuOCA1OCAyMi44czU4LTEwLjIgNTgtMjIuOGMwLTEyLjYtMS4zLTc2LjEtNTgtNzYuMXoiIGZpbGw9IiNmY2MyMWIiLz48cGF0aCBkPSJNNDUuOSA2Ni41czIwLjEtNy43IDM0LjYgNy43IiBmaWxsPSJub25lIiBzdHJva2U9IiMyZjJmMmYiIHN0cm9rZS13aWR0aD0iNiIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbWl0ZXJsaW1pdD0iMTAiLz48cGF0aCBjbGFzcz0ic3QyIiBkPSJNNDUuOCA0NS41Yy0zLjYtLjUtNi00LjMtNS41LTguNnMzLjktNy40IDcuNS02LjkgNiA0LjMgNS41IDguNmMtLjYgNC4zLTMuOSA3LjQtNy41IDYuOXpNODcuOCA0Mi45YzAtLjYtLjEtMS4xLS4yLTEuNi0uMS0uMy0uMy0uNi0uNi0uNy0xLjktLjktNi42LTIuOC05LjMtMy42LS40LS4xLS44IDAtMSAuMy0xLjMgMS41LTIuMSAzLjYtMiA1LjkuMSA0LjMgMy4yIDcuOCA2LjggNy43IDMuNSAwIDYuNC0zLjYgNi4zLTh6Ii8+PGc+PHBhdGggZD0iTTM3LjIgMTIxYy03LjUgMC0xMi42LTIuMS0xNi43LTYuNy01LTUuOC00LjMtMTMuMS0zLjctMTkuNi4zLTMuNiAxLjMtNS43IDIuMS03LjYuOS0yIDEuNi0zLjcgMS43LTcuMiAwLS44LS4yLTIuMS0uNC0zLjQtLjYtMy42LTEuNC03LjcgMS4yLTkuNi45LS43IDIuMS0xIDMuNS0xIDIuNSAwIDUuMSAxLjIgNi40IDMuMSAyLjEgMi45IDIuOCA1LjcgMi44IDExLjggMCAyLjUuNyAzLjQgMS44IDQuMi4zLjIuNy40IDIuMS40IDEuMyAwIDIuOS0uMiA1LjMtLjQuOC0uMSAxLjYtLjIgMi41LS4yIDIuNS0uMiAxMC0xIDE0LjgtMS43IDEuMi0uMiAyLjUtLjQgMy43LS42IDIuOS0uNSA1LjgtMSA4LTEgMS4xIDAgMiAuMSAyLjcuNCAyIC43IDMuMyAyLjUgMy40IDQuOC4yIDIuNi0xLjIgNS0zLjMgNi4xLTIuMSAxLjEtMTEuMSAyLjktMTYuNCAzLjUuMS4yLjIuMy4yLjUuNyAyIC40IDQuNy0uNyA2LjUtLjIuNC0uNS43LS43LjkgMSAxLjkuMyA0LjUtLjQgNi0uMi40LS41IDEtMS4xIDEuNS4zLjguNSAxLjguMSAzLjMtLjggMy40LTYuNCA1LjMtMTYuNCA1LjktLjkuMS0xLjcuMS0yLjUuMXoiIGZpbGw9IiNmYWMwMzYiLz48cGF0aCBjbGFzcz0ic3QyIiBkPSJNMjQuOCA2Ny45YzEuOCAwIDMuOC44IDQuOCAyLjMgMS44IDIuNiAyLjQgNC45IDIuNSAxMC43IDAgMy4xIDEgNC42IDIuNyA1LjguOC41IDEuOC43IDMuMi43IDEuOCAwIDQuMy0uMyA3LjktLjcgMi44LS4zIDEwLjItMSAxNC45LTEuNyAzLjctLjUgOC41LTEuNiAxMS41LTEuNi44IDAgMS41LjEgMiAuMyAzIDEuMSAyLjYgNS45LS4xIDcuMi0xLjkuOS0xMS43IDMtMTYuOSAzLjQtMy43LjMtNC41LjYtNC41LjgtLjIuNiAxLjYuNCAzIC45IDEuOS42IDEuOSA0LjIuNyA2LjEtLjggMS4zLTEuNy45LTEuNyAxLjcgMCAuMy41LjcuNyAxIC43IDEgLjQgMy4xLS4zIDQuNC0uMy41LS41IDEtMS4xIDEuMi0uNi4yLS43LjYtLjUgMS4yLjQuNy44IDEuNC40IDIuOS0uNiAyLjMtNi40IDMuOS0xNC42IDQuNC0uOCAwLTEuNi4xLTIuMy4xLTYuOCAwLTExLjUtMS44LTE1LjItNi00LjMtNC45LTMuOS0xMS0zLjItMTguMS43LTcgMy43LTcuNiAzLjctMTUgMC0zLjEtMi40LTkuNy0uMS0xMS40LjgtLjQgMS42LS42IDIuNS0uNm0wLTRjLTEuOCAwLTMuNC41LTQuNyAxLjQtMy41IDIuNi0yLjcgNy42LTIgMTEuNS4yIDEuMS40IDIuNC40IDMgMCAzLjEtLjYgNC41LTEuNSA2LjQtLjggMS45LTEuOSA0LjMtMi4yIDguMi0uNiA2LjktMS40IDE0LjYgNC4yIDIxLjEgNC40IDUuMSAxMC4yIDcuNCAxOC4yIDcuNC44IDAgMS43IDAgMi42LS4xIDE0LjktLjggMTcuNS00LjYgMTguMi03LjQuMy0xLjMuMy0yLjQuMi0zLjMuMy0uNS42LS45LjctMS4yLjctMS40IDEuNS00LjEuOS02LjUuMS0uMS4xLS4yLjItLjMgMS4xLTEuOCAxLjYtNC4yIDEuMy02LjQgNS4zLS44IDEyLjYtMi4zIDE0LjgtMy40IDIuOC0xLjQgNC42LTQuNiA0LjQtOC0uMi0zLjEtMi01LjYtNC43LTYuNi0uOS0uMy0yLS41LTMuMy0uNS0yLjQgMC01LjQuNS04LjQgMS0xLjMuMi0yLjYuNC0zLjcuNi00LjguNy0xMi4yIDEuNC0xNC43IDEuNy0uOS4xLTEuNy4yLTIuNS4yLTIuMi4yLTMuOS40LTUuMS40LS43IDAtLjktLjEtMS0uMS0uNS0uNC0uOS0uNy0uOS0yLjUtLjEtNS44LS42LTkuMi0zLjItMTIuOS0xLjktMi4xLTUtMy43LTguMi0zLjd6Ii8+PC9nPjwvc3ZnPg==")}
.game-card>.thumbnail>.card-img-top-model{width:100px;height:100px;margin-top:12px;margin-left:25px;margin-right:25px}
.game-card>.data{display:inline-block;padding:.65rem;width:100%}
.game-card>.data>p{margin-top:0;margin-bottom:0}
.game-card>.data>p:first-child{font-size:16px}
.game-card>.data>.author{color:#a2a9ad}
.game-card-link{padding:4px;display:inline-block} 
#user-tab-places>div:last-child{margin-bottom:0!important}
.place-description{max-height:100px;overflow-y:auto;white-space:pre-wrap;word-break:break-word}
.server-list-player{position:relative;min-width:60px}
.server-list-player>.kick-btn{position:absolute;background:#000;border:1px solid #ececec;color:#ececec;font-size:10px;padding:1px 4px;border-radius:40px;vertical-align:middle;text-align:center;top:0;left:0}
.server-list-player>.kick-btn:hover{background:#ececec;border:1px solid #000;color:#000}
.place-thumbnail{width:100%;max-width:432px;max-height:250px}
.place-thumbnail-small{width:50%;max-width:200px;max-height:120px}
.place-admin-logo{position:absolute;top:0;right:0}
.finobe__blob_openmouth,.finobe__blob_opensmile,.finobe__blob_thinking{width:8rem;height:8rem;background-size:100% 100%!important;display:inline-block;vertical-align:middle}
.finobe__blob_smaller{width:2rem!important;height:2rem!important}
.finobe__blob_opensmile{background:url(/img/blobs/opensmile.svg) no-repeat}
.finobe__blob_openmouth{background:url(/img/blobs/openmouth.svg) no-repeat}
.finobe__blob_thinking{background:url(/img/blobs/thinking.svg) no-repeat}
@keyframes finobe__spinning{0%{-webkit-transform:rotate(0deg);transform:rotate(0deg)}to{-webkit-transform:rotate(1turn);transform:rotate(1turn)}}
.finobe__spinning_blob{-webkit-animation:finobe__spinning 1.2s ease-in-out infinite;animation:finobe__spinning 1.2s ease-in-out infinite}
.modal.fade{opacity:0;transition:all .2s ease}
.modal.fade.show{opacity:1;-webkit-transform:scale(1);transform:scale(1)}
.modal.fade .modal-dialog{opacity:0;-webkit-transform:scale(.9);transform:scale(.9);transition:all .2s ease}
.modal.fade.show>.modal-dialog{opacity:1;-webkit-transform:scale(1);transform:scale(1)}
.modal-content{border:none;border-radius:2px;box-shadow:0 40px 77px rgba(0,0,0,.22),0 27px 24px rgba(0,0,0,.2)}
.nav-finobe-pills>.nav-item{cursor:pointer}
.nav-finobe-pills>.nav-item>.nav-link{color:#696969;background-color:none;transition:all .2s linear}
.nav-finobe-pills>.nav-item>.nav-link.active{color:#000;cursor:default;font-weight:700;background-color:#fff}
.nav-finobe-pills>.nav-item>.nav-link:not(.active):hover{background-color:#fff}
.finobe__message-item{width:100%;display:inline-block;float:left;min-height:40px;padding:10px 16px;background:#fdfdfd;border-bottom:1px solid #ececec;cursor:pointer}
.finobe__message-item:hover{box-shadow:inset 4px 0 0 0 #039be5}
.finobe__message-checkbox{margin-top:10px}
.finobe__message-outside{float:left;width:2.2rem}
.finobe__message-inside{float:left;width:calc(100% - 2.2rem);text-decoration:none}a.finobe__message-inside:active,a.finobe__message-inside:hover,a.finobe__message-inside:link{text-decoration:none}
.finobe__message-lower-area{overflow:hidden;text-overflow:ellipsis;white-space:nowrap}
.finobe__message-preview-text:before{content:"- "}
.finobe__message-title{font-weight:700}
.voodoo-form>* .form-control[readonly]{background-color:#fff;opacity:1}
.voodoo-form>.form-group{width:100%;vertical-align:middle;background:#fff;border:1px solid rgba(0,0,0,.15);border-radius:.25rem;transition:border-color .15s ease-in-out,box-shadow .15s ease-in-out}
.voodoo-form>.form-group>.form-label{float:left;margin-right:0;line-height:2.4;margin-left:10px}
.voodoo-form>.form-group>.form-label:after{content:":"}
.voodoo-form>.form-group>.form-input{overflow:hidden}
.voodoo-form>.form-group>.form-input>.form-control{float:left;border:none;border-radius:0;transition:none;padding:.5rem .4rem;font-family:Source Sans Pro,sans-serif;font-size:14px;line-height:1}
.finobe__message-empty{display:flex;min-height:250px;flex-direction:column;justify-content:center;align-items:center}
.finobe__message-listing{display:block;width:100%;border-top:1px solid #ececec}
.catalog-card,.catalog-card:link{color:#636c72;text-decoration:none;font-size:14px}
.catalog-card>.card{border-radius:.2rem;box-shadow:none;transition:all .3s cubic-bezier(.25,.8,.25,1)}
.catalog-card>.card:active,.catalog-card>.card:hover{box-shadow:0 1px 2px 0 rgba(0,0,0,.1),0 1px 4px 2px rgba(0,0,0,.1)}
.catalog-card-name{color:#fff;font-size:16px}
.catalog-no-overflow-plz{overflow:hidden;text-overflow:ellipsis;white-space:nowrap;display:block}
.badge.finobe__card-ribbon{position:absolute;right:-1px;top:0;border:0;border-radius:0;border-top-right-radius:4px;border-bottom-left-radius:4px;font-size:12px}
.badge.card__ribbon-left{position:absolute;left:-1px;top:0;border:0;border-radius:0;border-top-left-radius:4px;border-bottom-right-radius:4px;font-size:12px}
.catalog__item-audio{width:100%;height:30px;border:1px solid #e6e6e6;padding-left:6px;padding-right:6px;margin-bottom:6px;line-height:30px;background:#313437;color:#ececec;display:flex;justify-content:space-between;transition:all .3s cubic-bezier(.25,.8,.25,1);border-radius:.2rem}
.catalog__item-audio:hover{box-shadow:0 1px 2px 0 hsla(0,0%,100%,.2),0 1px 4px 2px hsla(0,0%,100%,.2);color:#ececec;text-decoration:none}
.dropdown-menu{padding:8px}
.dropdown-item{padding:5px 10px;border-radius:4px}
.dropdown-menu>.dropdown-item:not(:last-of-type){margin-bottom:5px}
.dropdown-header{padding:5px 10px}
.navbar-nobelium-dropdown.dropdown-menu.dropdown-menu-right>a{padding-left:10px}nav.finobe-basic-nav,nav.settings-nav{width:100%;height:auto}nav.finobe-basic-nav>.header,nav.settings-nav>.header{width:100%;font-weight:700;color:#ced4da;font-size:.9rem;margin-bottom:.25rem}nav.finobe-basic-nav>.link,nav.settings-nav>.link{display:block;font-weight:500;width:100%;text-transform:none;color:#adb5bd;margin-top:.1rem;margin-bottom:.1rem}nav.finobe-basic-nav>.link.active,nav.settings-nav>.link.active{color:#8f68d7;font-weight:600}
.forum-alert{margin:0;padding:8px 12px}
.forum-alert>h5{font-size:.9rem;font-weight:700;vertical-align:middle}
.forum-alert>p{margin-bottom:0}
.forum-alert.primary{border-left:6px solid #1d4e7c;color:#1d4e7c}
.forum-alert.warning{border-left:6px solid #674c01;color:#674c01}
.forum-alert.success{border-left:6px solid #1e5538;background:rgba(56,161,105,.05);color:#1e5538}
.forum-new-main-area>.textarea-container{border-radius:.25rem;border:1px solid hsla(0,0%,96.5%,.125);width:100%;box-shadow:inset 0 1px 1px rgba(0,0,0,.075);transition:border-color .15s ease-in-out,box-shadow .15s ease-in-out}
.forum-new-main-area>.textarea-container.active{width:100%;box-shadow:0 0 2px 1px rgba(49,130,206,.1);border-color:#98c1e7}
.forum-new-main-area>.textarea-container>textarea.verse{display:block;width:100%;border:none;border-radius:0;min-height:200px;max-width:100%;margin-bottom:0;outline:none;padding:8px 10px;color:#ececec;background-color:#313437}
.forum-new-main-area>.textarea-container>textarea.verse:active,.forum-new-main-area>.textarea-container>textarea.verse:focus{background-color:#404346;box-shadow:none}
.forum-new-main-area>.textarea-container .bottom,.forum-new-main-area>.textarea-container>.top{background-color:hsla(0,0%,96.5%,.05)}
.forum-new-main-area>.textarea-container>.top{padding:8px 10px;margin:0;border-bottom:1px solid #ced4da;font-size:.75rem}
.forum-new-main-area>.textarea-container>.bottom{border-top:1px solid #ced4da;padding:6px 8px;font-size:.7rem}
.forum-new-main-area>.textarea-container>.bottom>ul{padding:0;margin-bottom:0;display:flex;justify-content:space-around}
.forum-new-main-area>.textarea-container>.bottom>ul,.forum-new-main-area>.textarea-container>.bottom li{list-style-type:none}
.forum-new-main-area>.textarea-container>.bottom>li{display:inline-flex}
.forum-vote-total{display:inline-block;padding:0 6px;margin-right:6px;min-width:30px;text-align:center;border:1px solid #e6e6e6;border-radius:4px}
.post-content{display:flex;flex-direction:column;justify-content:space-between}
.group-description{width:100%;max-height:150px;overflow-y:auto}img.emojione{display:inline-block;vertical-align:middle;width:1.25em;height:1.25em;background-repeat:no-repeat;text-indent:-9999px;background-position:50%,50%;background-size:contain;line-height:.81em;font-size:1.25em;margin:-2px 0}
@font-face{font-family:Aller;src:url(https://web.archive.org/web/20200508064902if_/https://finobe.com/fonts/Aller.eot);src:url(https://web.archive.org/web/20200508064902if_/https://finobe.com/fonts/Aller.eot?#iefix) format("embedded-opentype"),url(https://web.archive.org/web/20200508064902if_/https://finobe.com/fonts/Aller.woff2) format("woff2"),url(https://web.archive.org/web/20200508064902if_/https://finobe.com/fonts/Aller.woff) format("woff"),url(https://web.archive.org/web/20200508064902if_/https://finobe.com/fonts/Aller.ttf) format("truetype");font-weight:400;font-style:normal}
@font-face{font-family:Aller;src:url(https://web.archive.org/web/20200508064902if_/https://finobe.com/fonts/Aller-Bold.eot);src:url(https://web.archive.org/web/20200508064902if_/https://finobe.com/fonts/Aller-Bold.eot?#iefix) format("embedded-opentype"),url(https://web.archive.org/web/20200508064902if_/https://finobe.com/fonts/Aller-Bold.woff2) format("woff2"),url(https://web.archive.org/web/20200508064902if_/https://finobe.com/fonts/Aller-Bold.woff) format("woff"),url(https://web.archive.org/web/20200508064902if_/https://finobe.com/fonts/Aller-Bold.ttf) format("truetype");font-weight:700;font-style:normal}body
.card,.card-footer,.card-header{background:#313437;color:#ececec}
.card-header{border-bottom:1px solid hsla(0,0%,96.5%,.125)}
.card-footer{border-top:1px solid hsla(0,0%,96.5%,.125)}
.form-control{background:#313437;color:#ececec;border:1px solid hsla(0,0%,96.5%,.125)}
.form-control:focus{background:#404346;color:#ececec}
.footer>.container{background:#313437;color:#ececec;border:1px solid hsla(0,0%,96.5%,.125)}
.dropdown-menu{background:#212325}
.dropdown-item,.dropdown-item:focus{color:#ececec!important;background:#212325}
.dropdown-item:hover{background:#444}
.dropdown-item:active{background:#535353}
.dropdown-header{color:#ededed}body{color:#ececec!important}
.btn-outline-danger:hover,.btn-outline-primary:hover{background-color:#313437;border-color:#313437}
.btn-secondary{color:#ececec;background-color:#4e5155;border-color:#35383c}
.btn-secondary:active,.btn-secondary:focus,.btn-secondary:hover{color:#ececec;background-color:#35383c;border-color:#282b2f}
.nav-tabs .nav-item.show .nav-link,.nav-tabs .nav-link.active{color:#ececec;background-color:#5d6268}a:focus.nav-link,a:hover.nav-link{color:#039be5}
.modal-body,.modal-content,.modal-header{background:#313437}
.modal-header{border-bottom:1px solid #ecece}
.close,.close:active,.close:focus,.close:hover{color:#ececec}
.breadcrumb{background:#313437}
.breadcrumb-item.active{color:#fff}
.table-bordered td,.table-bordered th{border:1px solid hsla(0,0%,96.5%,.125)}
@media (min-width:768px){.b-right{border-bottom:0;border-right:1px solid hsla(0,0%,96.5%,.125);margin-bottom:0}}
@media (max-width:767px){.b-right{border-bottom:1px solid hsla(0,0%,96.5%,.125);border-right:0;margin-bottom:10px}}
.CodeMirror{background:#313437;color:#ececec;border:1px solid hsla(0,0%,96.5%,.125)}
.editor-toolbar{border-top:1px solid hsla(0,0%,96.5%,.125);border-left:1px solid hsla(0,0%,96.5%,.125);border-right:1px solid hsla(0,0%,96.5%,.125)}
.editor-toolbar a{color:#ececec!important}
.editor-toolbar a:hover{color:#000!important}
.table td,.table th{border-top:1px solid hsla(0,0%,96.5%,.125)}
.table thead th{border-bottom:1px solid hsla(0,0%,96.5%,.125)}
.table{border:1px solid hsla(0,0%,96.5%,.125)}
.datepicker.dropdown-menu{color:#ececec!important;background-color:#212325!important}
.datepicker .next:hover,.datepicker .prev:hover,.datepicker table tr td.day.focused,.datepicker table tr td.day:hover,.datepicker table tr td span.focused,.datepicker table tr td span:hover{background:#0b0b0c!important}
.datepicker table tr td.active,.datepicker table tr td.active.disabled,.datepicker table tr td.active.disabled:hover,.datepicker table tr td.active:hover{background-image:none;background-color:#8b8b8b!important}
.input-group-addon{color:#ececec!important;background-color:#464a4c!important}
.text-muted{color:#d6dbdd!important}hr{border-top:1px solid hsla(0,0%,96.5%,.125)}
.finobe__message-listing{border-top:0}
.finobe__message-item{background:#313437;border-bottom:1px solid #313437}
.nav-finobe-pills>.nav-item>.nav-link:not(.active):hover{background-color:#3c3c3c;color:#969696}
.nav-finobe-pills>.nav-item>.nav-link.active{color:#ececec;background-color:#6a6a6a}
.thead-default th{color:#ececec;background-color:#3e3e3e}pre{color:#ececec}
.forum-post{width:100%;padding:1rem;background-color:#313437;display:block;transition:all .2s linear}
.forum-post:hover{background-color:#222325}a.forum-post,a.forum-post:hover{text-decoration:none;color:inherit}
.forum-section-info{width:100%;background-color:#404142}
.page-link:focus,.page-link:hover{background-color:#2f2f2f;border-color:#5c5c5c}
.page-link{background-color:#313437;border:1px solid #5c5c5c}
.page-item.disabled .page-link{color:#868e96;background-color:#313437;border-color:#5c5c5c}
.popover{background-color:#212325;color:#ececec}
.game-card{background:#4e5155;color:#ececec}
.game-card>.data>.author{color:#d4d4d4}
.nav-scroller{box-shadow:0 .25rem .75rem hsla(0,0%,100%,.06)}
.nav-scroller-inner>a.nav-link{color:#ececec}
.nav-scroller-inner>a.nav-link:hover{color:#fbfbfb}
.btn-theme{color:#ececec;background-color:#4e5155;border-color:#35383c}
.btn-theme:hover{color:#ececec;background-color:#35383c;border-color:#282b2f}
.btn-theme:not(:disabled):not(.disabled).active,.btn-theme:not(:disabled):not(.disabled):active,.show>.btn-theme.dropdown-toggle{color:#fff;background-color:#545b62;border-color:#4e555b}
.form-control:disabled,.form-control[readonly]{background-color:#151515}
.btn-theme:not(:disabled).active:focus,.btn-theme:not(:disabled):not(.disabled):active:focus,.show>.btn-theme.dropdown-toggle:focus{box-shadow:0 0 0 .2rem rgba(109,118,126,.5)}span.message-not-read{color:#d0d0d0}span.message-read{color:#adadad}
.form-control {
    display: block;
    width: 100%;
    height: calc(2.0625rem + 2px);
    padding: .375rem .75rem;
    font-size: .875rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: .25rem;
    transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
}
p, h1, h2, h3, h4, h5, h6 { 
	/* just realized i could do this... */
	color: black;
}
</style>
<div id="Body">
<div id="FrameLogin" style="margin: 50px auto 150px auto; width: 500px; border: black thin solid; padding: 21px; z-index: 8; background-color: white;">
    <div id="PaneNewUser" style="height: 250px; width: 250px;">
      <h3 style="color: black;">no account?</h3>
      <h2 style="color: black;">You need an account to use emeraldnews.</p>
      <h2 style="color: black;">If you aren't an emerald student then login with your axcel account. doesnt matter if your from emerald.</p>
    </div>
    <div id="PaneLogin">
      <h3 style="color: black;">Log In</h3>
      
<div class="AspNet-Login"><div class="AspNet-Login"><div class="text-center alert alert-success alert-logged text-white" role="alert" style="z-index:1; background-color: orange">
				<div class="container success-container" style="color:white;">
					<?=$s?></div>
			</div><form method="POST" action=""><form method="POST" action="">

  <div class="form-group w-75">
    <label for="ctl00_cphRoblox_lRobloxLogin_UserName" class="TextboxLabel" style="color: black;"><em>u</em>sername:</label>
    <input type="text" id="ctl00_cphRoblox_lRobloxLogin_UserName" name="UserName" value="" class="form-control" accesskey="u">&nbsp;
  </div>
  <div class="form-group w-75">
    <label for="ctl00_cphRoblox_lRobloxLogin_Password" class="TextboxLabel" style="color: black;"><em>p</em>assword:</label>
    <input type="password" id="ctl00_cphRoblox_lRobloxLogin_Password" name="Password" value="" class="form-control" accesskey="p">&nbsp;
  </div>
	  <!-- ==========  CAPTCHA: Draw-the-Missing-Part  ========== -->
<style>
/* captcha look-and-feel – copy/paste AS-IS */
.captcha-container{font-family:'Segoe UI',Tahoma,Verdana,sans-serif;margin:1rem
0;padding:1.5rem;border-radius:12px;border:3px solid #e0e0e0;background:#f9f9f9}
.captcha-title{margin:0 0 .5rem;font-size:1.25rem;text-align:center}
.captcha-instruction{margin:.25rem 0 1rem;text-align:center}
.image-container{position:relative;display:inline-block;border:2px solid #ccc;
border-radius:8px;overflow:hidden}
.base-image{display:block;max-width:100%;pointer-events:none}
#drawCanvas{position:absolute;left:0;top:0}
.result-message{display:none;margin-top:.75rem;padding:.5rem 1rem;
border-radius:8px;font-weight:600}
.result-success{background:#d1fae5;color:#065f46}
.result-error{background:#fee2e2;color:#991b1b}
</style>

<div class="captcha-container">
  <h2 class="captcha-title">🎨 Draw the Missing Part</h2>
  <p class="captcha-instruction">
      Complete the drawing below. (Mouse / touch-screen works.)
  </p>

  <div class="image-container" id="imageContainer">
      <!-- Base picture (inline SVG so no external file) -->
      <img class="base-image" alt="captcha outline"
           src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDAwIiBoZWlnaHQ9IjI1MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KICA8IS0tIENhciBib2R5IC0tPgogIDxyZWN0IHg9IjUwIiB5PSIxMDAiIHdpZHRoPSIzMDAiIGhlaWdodD0iODAiIGZpbGw9IiM0Mjg1RjQiIHJ4PSIxMCIvPgogIDwhLS0gQ2FyIHJvb2YgLS0+CiAgPHBvbHlnb24gcG9pbnRzPSIxMDAsMTAwIDE1MCw2MCAyNTAsNjAgMzAwLDEwMCIgZmlsbD0iIzQyODVGNCIvPgogIDwhLS0gV2luZG93cyAtLT4KICA8cmVjdCB4PSIxMTAiIHk9IjcwIiB3aWR0aD0iNjAiIGhlaWdodD0iMjUiIGZpbGw9IiNFM0Y2RkYiLz4KICA8cmVjdCB4PSIxODAiIHk9IjcwIiB3aWR0aD0iNjAiIGhlaWdodD0iMjUiIGZpbGw9IiNFM0Y2RkYiLz4KICA8cmVjdCB4PSIyNTAiIHk9IjcwIiB3aWR0aD0iNDAiIGhlaWdodD0iMjUiIGZpbGw9IiNFM0Y2RkYiLz4KICA8IS0tIERvb3JzIC0tPgogIDxsaW5lIHgxPSIxNzUiIHkxPSIxMDAiIHgyPSIxNzUiIHkyPSIxODAiIHN0cm9rZT0iIzMzNzNEQyIgc3Ryb2tlLXdpZHRoPSIyIi8+CiAgPGxpbmUgeDE9IjI3NSIgeTE9IjEwMCIgeDI9IjI3NSIgeTI9IjE4MCIgc3Ryb2tlPSIjMzM3M0RDIiBzdHJva2Utd2lkdGg9IjIiLz4KICA8IS0tIEZyb250IGxpZ2h0IC0tPgogIDxjaXJjbGUgY3g9IjM0MCIgY3k9IjEyMCIgcj0iMTAiIGZpbGw9IiNGRkVCM0IiLz4KICA8IS0tIEJhY2sgbGlnaHQgLS0+CiAgPGNpcmNsZSBjeD0iNjAiIGN5PSIxMjAiIHI9IjgiIGZpbGw9IiNFRjQ0NDQiLz4KICA8IS0tIEZyb250IHdoZWVsIC0tPgogIDxjaXJjbGUgY3g9IjI5MCIgY3k9IjE5MCIgcj0iMzAiIGZpbGw9IiMzNzM3MzciLz4KICA8Y2lyY2xlIGN4PSIyOTAiIGN5PSIxOTAiIHI9IjIwIiBmaWxsPSIjNkI3Mjc5Ii8+CiAgPGNpcmNsZSBjeD0iMjkwIiBjeT0iMTkwIiByPSIxMCIgZmlsbD0iIzM3MzczNyIvPgogIDwhLS0gQmFjayB3aGVlbCBpcyBtaXNzaW5nIC0gdGhpcyBpcyB3aGF0IHRoZSB1c2VyIG5lZWRzIHRvIGRyYXcgLS0+CiAgPCEtLSBCYWNrIHdoZWVsIHNob3VsZCBiZSBhdCBjeD0iMTEwIiBjeT0iMTkwIiAtLT4KICA8IS0tIEdyb3VuZCBsaW5lIC0tPgogIDxsaW5lIHgxPSIwIiB5MT0iMjIwIiB4Mj0iNDAwIiB5Mj0iMjIwIiBzdHJva2U9IiM2Qjc0NzkiIHN0cm9rZS13aWR0aD0iMyIvPgo8L3N2Zz4=" />
      <!-- User drawing layer -->
      <canvas id="drawCanvas"></canvas>
  </div>

  <div id="resultMessage" class="result-message"></div>
</div>

<!-- hidden field we flip to “1” once the puzzle is solved -->
<input type="hidden" name="captcha_verified" id="captcha_verified" value="0">
<!-- ========== /CAPTCHA  ========== -->

  <div class="AspNet-Login-SubmitPanel">
    <input type="submit" value="Log In" id="ctl00_cphRoblox_lRobloxLogin_LoginButton" name="LoginButton" class="btn btn-success" style="color: white; height: 3em;" onclick="WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$cphRoblox$lRobloxLogin$LoginButton&quot;, &quot;&quot;, true, &quot;ctl00$cphRoblox$lRobloxLogin&quot;, &quot;&quot;, false, false))">
	<a href="/Login/google_login.php" class="btn btn-success" style="color: white;">login with google</a>
</div>
  <!-- <div class="AspNet-Login-PasswordRecoveryPanel">
    <a href="ResetPasswordRequest.aspx" title="Password recovery" style="color: black;">Forgot your password?</a>
  </div> -->
  </form>
</div>
    </div>
  </div>
</div>
<script>
/* ----------  Captcha logic (pure front-end) ---------- */
const canvas     = document.getElementById('drawCanvas');
const container  = document.getElementById('imageContainer');
const ctx        = canvas.getContext('2d');
const radius     = 6;          // brush size
let   drawing    = false;

function resizeCanvas() {
  canvas.width  = container.offsetWidth;
  canvas.height = container.offsetHeight;
}
window.addEventListener('resize', resizeCanvas);
resizeCanvas();

function startDraw(e){ drawing = true;  draw(e); }
function endDraw  (){ drawing = false; ctx.beginPath(); }
function draw(e){
  if(!drawing) return;
  const rect = canvas.getBoundingClientRect();
  const x = (e.touches?e.touches[0].clientX:e.clientX) - rect.left;
  const y = (e.touches?e.touches[0].clientY:e.clientY) - rect.top;
  ctx.fillStyle = '#000';      // draw in black
  ctx.beginPath(); ctx.arc(x,y,radius,0,Math.PI*2); ctx.fill();
}
canvas.addEventListener('mousedown', startDraw);
canvas.addEventListener('touchstart', startDraw,{passive:true});
canvas.addEventListener('mousemove', draw);
canvas.addEventListener('touchmove', draw,{passive:true});
canvas.addEventListener('mouseup',   endDraw);
canvas.addEventListener('touchend',  endDraw);

/* ---- simple “is it finished?” heuristic -------------- */
function checkDrawing(){
  // look only in the “expected” rectangle (tweak if you change the picture)
  const area = ctx.getImageData(canvas.width*0.65,
                                canvas.height*0.55,
                                canvas.width*0.25,
                                canvas.height*0.25);
  // count non-transparent pixels
  let drawn = 0;
  for(let i=3;i<area.data.length;i+=4){ if(area.data[i]!==0) drawn++; }
  return drawn > 50;             // need ~50 dots
}

/* ---- show feedback + unlock the form ---------------- */
function showResult(isValid){
  const box = document.getElementById('resultMessage');
  box.style.display = 'block';
  if(isValid){
    box.className = 'result-message result-success';
    box.textContent = '✅ Nice! captcha solved.';
    document.getElementById('captcha_verified').value = '1';
    // (optional) enable the submit button now
    const btn = document.querySelector('input[type="submit"][name="LoginButton"]');
    if(btn) btn.disabled = false;
  }else{
    box.className = 'result-message result-error';
    box.textContent = '❌ Not quite – draw in the missing spot.';
  }
}

/* Auto-check when the user stops drawing for 1s */
let lastStroke = null;
canvas.addEventListener('mouseup',   () => { lastStroke=Date.now(); });
canvas.addEventListener('touchend',  () => { lastStroke=Date.now(); });
setInterval(()=>{ 
  if(lastStroke && Date.now()-lastStroke>1000){
    showResult(checkDrawing()); lastStroke=null;
  }
}, 200);

/* ---- prevent submission if captcha not passed -------- */
document.querySelector('form').addEventListener('submit', e=>{
  if(document.getElementById('captcha_verified').value!=='1'){
    alert('Please complete the captcha first.');
    e.preventDefault();
  }
});

/* (Optional) keep the Log-in button disabled until solved */
document.querySelector('input[type="submit"][name="LoginButton"]').disabled = true;
</script>


                                <?php include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/footer.php"; ?>


