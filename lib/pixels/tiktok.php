<!-- TikTok Pixel -->
<script>
    (function() {
        var ta = document.createElement('script'); ta.type = 'text/javascript'; ta.async = true;
        ta.src = document.location.protocol + '//' + 'analytics.tiktok.com/i18n/pixel/sdk.js?sdkid=<?= $tt_pixel ?>';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ta, s);
    })();
</script>
<!-- /TikTok Pixel -->