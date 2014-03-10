@if ($options['annotation'] === 'inline')
    <div class="g-plus" data-action="share" data-href="{{{ $options['url'] }}}" {{{ $options['width'] ? 'data-width="' . $options['width'] . '"' : '' }}} data-height="{{{ $options['height'] }}}"></div>
@elseif ($options['annotation'] === 'vertical-bubble')
    <div class="g-plus" data-action="share" data-annotation="{{{ $options['annotation'] }}}" data-href="{{{ $options['url'] }}}" data-height="60"></div>
@else
    <div class="g-plus" data-action="share" data-annotation="{{{ $options['annotation'] }}}" data-href="{{{ $options['url'] }}}" data-height="{{{ $options['height'] }}}"></div>
@endif

<script type="text/javascript">
    window.___gcfg = {lang: '{{{ $options['lang'] }}}'};
    (function() {
        var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
        po.src = 'https://apis.google.com/js/platform.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
    })();
</script>