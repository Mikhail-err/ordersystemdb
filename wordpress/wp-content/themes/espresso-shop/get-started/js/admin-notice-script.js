jQuery(document).ready(function ($) {
    // Attach click event to the dismiss button
    $(document).on('click', '.notice[data-notice="get-start"] button.notice-dismiss', function () {
        // Dismiss the notice via AJAX
        $.ajax({
            type: 'POST',
            url: ajaxurl,
            data: {
                action: 'espresso_shop_dismissed_notice',
            },
            success: function () {
                // Remove the notice on success
                $('.notice[data-notice="get-start"]').remove();
            }
        });
    });
});

// Plugin – AI Content Writer plugin activation
document.addEventListener('DOMContentLoaded', function () {
    const espresso_shop_button = document.getElementById('install-activate-button');
    const espresso_shop_config = window.installPluginData || window.pluginInstallerData;

    if (!espresso_shop_button || !espresso_shop_config) return;

    espresso_shop_button.addEventListener('click', function (e) {
        e.preventDefault();

        const espresso_shop_redirectUrl = espresso_shop_button.getAttribute('data-redirect') || espresso_shop_config.redirectUrl;

        espresso_shop_button.textContent = 'Setting up plugins & demo...';

        const espresso_shop_installData = new FormData();
        espresso_shop_installData.append('action', 'install_and_activate_wordclever_plugin');
        espresso_shop_installData.append('nonce', espresso_shop_config.nonce);

        fetch(espresso_shop_config.ajaxurl, {
            method: 'POST',
            body: espresso_shop_installData,
        })
        .then(res => res.json())
        .then(res => {
            if (res.success) {
                window.location.href = espresso_shop_redirectUrl;
            } else {
                alert('Activation error: ' + (res.data?.message || 'Unknown error'));
                espresso_shop_button.textContent = 'Try Again';
            }
        })
        .catch(error => {
            alert('Request failed: ' + error.message);
            espresso_shop_button.textContent = 'Try Again';
        });
    });
});