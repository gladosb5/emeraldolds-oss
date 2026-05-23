<?php
if (getenv('AD_KEY_GETAD') && getenv('AD_SCRIPT_URL_GETAD')) {
    echo '<div style="text-align: center; margin: 20px 0;">
    <script type="text/javascript">
        atOptions = {
            "key" : "' . htmlspecialchars(getenv('AD_KEY_GETAD')) . '",
            "format" : "iframe",
            "height" : 60,
            "width" : 468,
            "params" : {}
        };
    </script>
    <script type="text/javascript" src="' . htmlspecialchars(getenv('AD_SCRIPT_URL_GETAD')) . '"></script>
    </div>';
}

?>
