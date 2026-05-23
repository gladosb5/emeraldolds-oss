<?php
    $dataSavingModeEnabled = isset($_COOKIE['data_saving_mode']) && $_COOKIE['data_saving_mode'] === '1';

    if ($dataSavingModeEnabled) {
?>
<div class="data-saving-footer" style="margin-top: 2rem; text-align: center; font-size: 0.95rem; color: #0c1b33;">
    <p style="margin: 0;">
        You're browsing in data saving mode. <a href="/User.aspx?toggleDataSaving=off" style="color: #0b63c5; font-weight: bold;">Turn it off</a> to restore the full experience.
    </p>
</div>
</div>
</body>
</html>
<?php
        return;
    }
?>
<div id="Footer">
    <div style="max-width: 1200px; margin: 0 auto; padding: 0 2rem;">
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 2rem; margin-bottom: 2rem;">
            <div>
                <h4 style="color: var(--emerald-primary); margin-bottom: 1rem; font-size: 1.1rem;">🌟 emeraldnews</h4>
                <p style="color: var(--gray-400); font-size: 14px; line-height: 1.6;">
                    A community platform designed for our class 6 emerald! Connect, share news, and build ships in our chaotic little corner of the internet.
                </p>
            </div>
            
            <div>
                <h4 style="color: white; margin-bottom: 1rem; font-size: 1.1rem;">Quick Links</h4>
                <div style="display: flex; flex-direction: column; gap: 0.5rem;">
                    <a href="/" style="color: var(--gray-400); text-decoration: none; font-size: 14px; transition: color 0.3s;">🏠 Home</a>
                    <a href="/News.aspx" style="color: var(--gray-400); text-decoration: none; font-size: 14px; transition: color 0.3s;">📰 Browse News</a>
                    <a href="/Forum/" style="color: var(--gray-400); text-decoration: none; font-size: 14px; transition: color 0.3s;">💬 Forums</a>
<!--                     <a href="/News.aspx" style="color: var(--gray-400); text-decoration: none; font-size: 14px; transition: color 0.3s;">🎮 Games</a> -->
                </div>
            </div>
            
            <div>
                <h4 style="color: white; margin-bottom: 1rem; font-size: 1.1rem;">Legal & Support</h4>
                <div style="display: flex; flex-direction: column; gap: 0.5rem;">
                    <a id="ctl00_rbxFooter_hlTermsOfService" href="/info/TermsOfService.aspx" style="color: var(--gray-400); text-decoration: none; font-size: 14px; transition: color 0.3s;">📋 Terms & Conditions</a>
                    <a id="ctl00_rbxFooter_hlPrivacyPolicy" href="/info/Privacy.aspx" style="color: var(--gray-400); text-decoration: none; font-size: 14px; transition: color 0.3s;">🔒 Privacy Policy</a>
                    <a id="ctl00_rbxFooter_hlAboutRoblox" href="/info/About.aspx" style="color: var(--gray-400); text-decoration: none; font-size: 14px; transition: color 0.3s;">ℹ️ About Us</a>
                </div>
            </div>
        </div>
        
        <hr style="border: none; height: 1px; background: var(--gray-600); margin: 2rem 0;">
        
        <div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 1rem;">
            <p class="Legalese" style="margin: 0; flex: 1; text-align: left;">
                <small style="color: var(--gray-500); font-size: 12px;">
                    © 2024 emeraldnews • Not affiliated with ROBLOX or axcel • Fan-site, not endorsed by axcel
                </small>
            </p>
            
            <div style="display: flex; gap: 1rem; align-items: center;">
                <span style="color: var(--gray-500); font-size: 12px;">Made with 🤬🤬🤬 for 6 emerald</span>
            </div>
        </div>
    </div>
</div>
</div>
</body>
</html>


<?php if($sitesettings['adsenabled'] == 1 && getenv('AD_KEY_FOOTER') && getenv('AD_SCRIPT_URL_FOOTER')) { ?>
        <div style="text-align: center; margin: 20px 0;">
<script type="text/javascript">
	atOptions = {
		"key" : "<?= htmlspecialchars(getenv('AD_KEY_FOOTER')) ?>",
		"format" : "iframe",
		"height" : 90,
		"width" : 728,
		"params" : {}
	};
</script>
<script type="text/javascript" src="<?= htmlspecialchars(getenv('AD_SCRIPT_URL_FOOTER')) ?>"></script>
<br>
<?php } ?>
