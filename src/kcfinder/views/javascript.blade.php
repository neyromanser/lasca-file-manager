
<script src="/{{ $lascaFileConfig['route_prefix'] }}/js/index.php" type="text/javascript"></script>
<script src="/{{ $lascaFileConfig['route_prefix'] }}/js/lang/{{ $fileManagerLang }}.js" type="text/javascript"></script>

<script src="/{{ $lascaFileConfig['route_prefix'] }}/themes/{{ $lascaFileConfig['theme'] }}/js.php" type="text/javascript"></script>

<script type="text/javascript">
_.version = 1;
_.support.zip = {{ (class_exists('ZipArchive') && !$lascaFileConfig['denyZipDownload']) ? "true" : "false" }};
_.support.check4Update = false;
_.lang = "{{ Neyromanser\LascaFileManager\Kcfinder\helper_text::jsValue($fileManagerLang) }}";
_.type = "{{ Neyromanser\LascaFileManager\Kcfinder\helper_text::jsValue($fileManagerType) }}";
_.theme = "{{ Neyromanser\LascaFileManager\Kcfinder\helper_text::jsValue($lascaFileConfig['theme']) }}";
_.access = {!! json_encode($lascaFileConfig['access'])  !!};
_.dir = "{{ Neyromanser\LascaFileManager\Kcfinder\helper_text::jsValue(session('dir')) }}";
_.uploadURL = "{{ Neyromanser\LascaFileManager\Kcfinder\helper_text::jsValue($lascaFileConfig['uploadURL']) }}";
_.thumbsURL = _.uploadURL + "/{{ Neyromanser\LascaFileManager\Kcfinder\helper_text::jsValue($lascaFileConfig['thumbsDir']) }}";
_.opener = {!! json_encode($fileManagerOpener)  !!};
_.cms = "false";
$.$.kuki.domain = "{{ Neyromanser\LascaFileManager\Kcfinder\helper_text::jsValue($lascaFileConfig['cookieDomain']) }}";
$.$.kuki.path = "{{ Neyromanser\LascaFileManager\Kcfinder\helper_text::jsValue($lascaFileConfig['cookiePath']) }}";
$.$.kuki.prefix = "{{ Neyromanser\LascaFileManager\Kcfinder\helper_text::jsValue($lascaFileConfig['cookiePrefix']) }}";
$(function() { _.resize(); _.init(); });
$(window).resize(_.resize);
</script>
