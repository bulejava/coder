<?php defined('SYSPATH') OR die('No direct script access.');
/**
 * A list of mime types. Our list is generally more complete and accurate than
 * the operating system MIME list.
 *
 * If there are any missing options, please create a ticket on our issue tracker,
 * http://kohanaphp.com/trac/newticket. Be sure to give the filename and
 * expected MIME type, as well as any additional information you can provide.
 */
return array(
	'323'      => array('text/h323'),
	'7z'       => array('app/x-7z-compressed'),
	'abw'      => array('app/x-abiword'),
	'acx'      => array('app/internet-property-stream'),
	'ai'       => array('app/postscript'),
	'aif'      => array('audio/x-aiff'),
	'aifc'     => array('audio/x-aiff'),
	'aiff'     => array('audio/x-aiff'),
	'amf'      => array('app/x-amf'),
	'asf'      => array('video/x-ms-asf'),
	'asr'      => array('video/x-ms-asf'),
	'asx'      => array('video/x-ms-asf'),
	'atom'     => array('app/atom+xml'),
	'avi'      => array('video/avi', 'video/msvideo', 'video/x-msvideo'),
	'bin'      => array('app/octet-stream','app/macbinary'),
	'bmp'      => array('image/bmp'),
	'c'        => array('text/x-csrc'),
	'c++'      => array('text/x-c++src'),
	'cab'      => array('app/x-cab'),
	'cc'       => array('text/x-c++src'),
	'cda'      => array('app/x-cdf'),
	'class'    => array('app/octet-stream'),
	'cpp'      => array('text/x-c++src'),
	'cpt'      => array('app/mac-compactpro'),
	'csh'      => array('text/x-csh'),
	'css'      => array('text/css'),
	'csv'      => array('text/x-comma-separated-values', 'app/vnd.ms-excel', 'text/comma-separated-values', 'text/csv'),
	'dbk'      => array('app/docbook+xml'),
	'dcr'      => array('app/x-director'),
	'deb'      => array('app/x-debian-package'),
	'diff'     => array('text/x-diff'),
	'dir'      => array('app/x-director'),
	'divx'     => array('video/divx'),
	'dll'      => array('app/octet-stream', 'app/x-msdos-program'),
	'dmg'      => array('app/x-apple-diskimage'),
	'dms'      => array('app/octet-stream'),
	'doc'      => array('app/msword'),
	'docx'     => array('app/vnd.openxmlformats-officedocument.wordprocessingml.document'),
	'dvi'      => array('app/x-dvi'),
	'dxr'      => array('app/x-director'),
	'eml'      => array('message/rfc822'),
	'eps'      => array('app/postscript'),
	'evy'      => array('app/envoy'),
	'exe'      => array('app/x-msdos-program', 'app/octet-stream'),
	'fla'      => array('app/octet-stream'),
	'flac'     => array('app/x-flac'),
	'flc'      => array('video/flc'),
	'fli'      => array('video/fli'),
	'flv'      => array('video/x-flv'),
	'gif'      => array('image/gif'),
	'gtar'     => array('app/x-gtar'),
	'gz'       => array('app/x-gzip'),
	'h'        => array('text/x-chdr'),
	'h++'      => array('text/x-c++hdr'),
	'hh'       => array('text/x-c++hdr'),
	'hpp'      => array('text/x-c++hdr'),
	'hqx'      => array('app/mac-binhex40'),
	'hs'       => array('text/x-haskell'),
	'htm'      => array('text/html'),
	'html'     => array('text/html'),
	'ico'      => array('image/x-icon'),
	'ics'      => array('text/calendar'),
	'iii'      => array('app/x-iphone'),
	'ins'      => array('app/x-internet-signup'),
	'iso'      => array('app/x-iso9660-image'),
	'isp'      => array('app/x-internet-signup'),
	'jar'      => array('app/java-archive'),
	'java'     => array('app/x-java-applet'),
	'jpe'      => array('image/jpeg', 'image/pjpeg'),
	'jpeg'     => array('image/jpeg', 'image/pjpeg'),
	'jpg'      => array('image/jpeg', 'image/pjpeg'),
	'js'       => array('app/javascript'),
	'json'     => array('app/json'),
	'latex'    => array('app/x-latex'),
	'lha'      => array('app/octet-stream'),
	'log'      => array('text/plain', 'text/x-log'),
	'lzh'      => array('app/octet-stream'),
	'm4a'      => array('audio/mpeg'),
	'm4p'      => array('video/mp4v-es'),
	'm4v'      => array('video/mp4'),
	'man'      => array('app/x-troff-man'),
	'mdb'      => array('app/x-msaccess'),
	'midi'     => array('audio/midi'),
	'mid'      => array('audio/midi'),
	'mif'      => array('app/vnd.mif'),
	'mka'      => array('audio/x-matroska'),
	'mkv'      => array('video/x-matroska'),
	'mov'      => array('video/quicktime'),
	'movie'    => array('video/x-sgi-movie'),
	'mp2'      => array('audio/mpeg'),
	'mp3'      => array('audio/mpeg'),
	'mp4'      => array('app/mp4','audio/mp4','video/mp4'),
	'mpa'      => array('video/mpeg'),
	'mpe'      => array('video/mpeg'),
	'mpeg'     => array('video/mpeg'),
	'mpg'      => array('video/mpeg'),
	'mpg4'     => array('video/mp4'),
	'mpga'     => array('audio/mpeg'),
	'mpp'      => array('app/vnd.ms-project'),
	'mpv'      => array('video/x-matroska'),
	'mpv2'     => array('video/mpeg'),
	'ms'       => array('app/x-troff-ms'),
	'msg'      => array('app/msoutlook','app/x-msg'),
	'msi'      => array('app/x-msi'),
	'nws'      => array('message/rfc822'),
	'oda'      => array('app/oda'),
	'odb'      => array('app/vnd.oasis.opendocument.database'),
	'odc'      => array('app/vnd.oasis.opendocument.chart'),
	'odf'      => array('app/vnd.oasis.opendocument.forumla'),
	'odg'      => array('app/vnd.oasis.opendocument.graphics'),
	'odi'      => array('app/vnd.oasis.opendocument.image'),
	'odm'      => array('app/vnd.oasis.opendocument.text-master'),
	'odp'      => array('app/vnd.oasis.opendocument.presentation'),
	'ods'      => array('app/vnd.oasis.opendocument.spreadsheet'),
	'odt'      => array('app/vnd.oasis.opendocument.text'),
	'oga'      => array('audio/ogg'),
	'ogg'      => array('app/ogg'),
	'ogv'      => array('video/ogg'),
	'otg'      => array('app/vnd.oasis.opendocument.graphics-template'),
	'oth'      => array('app/vnd.oasis.opendocument.web'),
	'otp'      => array('app/vnd.oasis.opendocument.presentation-template'),
	'ots'      => array('app/vnd.oasis.opendocument.spreadsheet-template'),
	'ott'      => array('app/vnd.oasis.opendocument.template'),
	'p'        => array('text/x-pascal'),
	'pas'      => array('text/x-pascal'),
	'patch'    => array('text/x-diff'),
	'pbm'      => array('image/x-portable-bitmap'),
	'pdf'      => array('app/pdf', 'app/x-download'),
	'php'      => array('app/x-httpd-php'),
	'php3'     => array('app/x-httpd-php'),
	'php4'     => array('app/x-httpd-php'),
	'php5'     => array('app/x-httpd-php'),
	'phps'     => array('app/x-httpd-php-source'),
	'phtml'    => array('app/x-httpd-php'),
	'pl'       => array('text/x-perl'),
	'pm'       => array('text/x-perl'),
	'png'      => array('image/png', 'image/x-png'),
	'po'       => array('text/x-gettext-translation'),
	'pot'      => array('app/vnd.ms-powerpoint'),
	'pps'      => array('app/vnd.ms-powerpoint'),
	'ppt'      => array('app/powerpoint'),
	'pptx'     => array('app/vnd.openxmlformats-officedocument.presentationml.presentation'),
	'ps'       => array('app/postscript'),
	'psd'      => array('app/x-photoshop', 'image/x-photoshop'),
	'pub'      => array('app/x-mspublisher'),
	'py'       => array('text/x-python'),
	'qt'       => array('video/quicktime'),
	'ra'       => array('audio/x-realaudio'),
	'ram'      => array('audio/x-realaudio', 'audio/x-pn-realaudio'),
	'rar'      => array('app/rar'),
	'rgb'      => array('image/x-rgb'),
	'rm'       => array('audio/x-pn-realaudio'),
	'rpm'      => array('audio/x-pn-realaudio-plugin', 'app/x-redhat-package-manager'),
	'rss'      => array('app/rss+xml'),
	'rtf'      => array('text/rtf'),
	'rtx'      => array('text/richtext'),
	'rv'       => array('video/vnd.rn-realvideo'),
	'sea'      => array('app/octet-stream'),
	'sh'       => array('text/x-sh'),
	'shtml'    => array('text/html'),
	'sit'      => array('app/x-stuffit'),
	'smi'      => array('app/smil'),
	'smil'     => array('app/smil'),
	'so'       => array('app/octet-stream'),
	'src'      => array('app/x-wais-source'),
	'svg'      => array('image/svg+xml'),
	'swf'      => array('app/x-shockwave-flash'),
	't'        => array('app/x-troff'),
	'tar'      => array('app/x-tar'),
	'tcl'      => array('text/x-tcl'),
	'tex'      => array('app/x-tex'),
	'text'     => array('text/plain'),
	'texti'    => array('app/x-texinfo'),
	'textinfo' => array('app/x-texinfo'),
	'tgz'      => array('app/x-tar'),
	'tif'      => array('image/tiff'),
	'tiff'     => array('image/tiff'),
	'torrent'  => array('app/x-bittorrent'),
	'tr'       => array('app/x-troff'),
	'tsv'      => array('text/tab-separated-values'),
	'txt'      => array('text/plain'),
	'wav'      => array('audio/x-wav'),
	'wax'      => array('audio/x-ms-wax'),
	'wbxml'    => array('app/wbxml'),
	'webm'     => array('video/webm'),
	'wm'       => array('video/x-ms-wm'),
	'wma'      => array('audio/x-ms-wma'),
	'wmd'      => array('app/x-ms-wmd'),
	'wmlc'     => array('app/wmlc'),
	'wmv'      => array('video/x-ms-wmv', 'app/octet-stream'),
	'wmx'      => array('video/x-ms-wmx'),
	'wmz'      => array('app/x-ms-wmz'),
	'word'     => array('app/msword', 'app/octet-stream'),
	'wp5'      => array('app/wordperfect5.1'),
	'wpd'      => array('app/vnd.wordperfect'),
	'wvx'      => array('video/x-ms-wvx'),
	'xbm'      => array('image/x-xbitmap'),
	'xcf'      => array('image/xcf'),
	'xhtml'    => array('app/xhtml+xml'),
	'xht'      => array('app/xhtml+xml'),
	'xl'       => array('app/excel', 'app/vnd.ms-excel'),
	'xla'      => array('app/excel', 'app/vnd.ms-excel'),
	'xlc'      => array('app/excel', 'app/vnd.ms-excel'),
	'xlm'      => array('app/excel', 'app/vnd.ms-excel'),
	'xls'      => array('app/excel', 'app/vnd.ms-excel'),
	'xlsx'     => array('app/vnd.openxmlformats-officedocument.spreadsheetml.sheet'),
	'xlt'      => array('app/excel', 'app/vnd.ms-excel'),
	'xml'      => array('text/xml', 'app/xml'),
	'xof'      => array('x-world/x-vrml'),
	'xpm'      => array('image/x-xpixmap'),
	'xsl'      => array('text/xml'),
	'xvid'     => array('video/x-xvid'),
	'xwd'      => array('image/x-xwindowdump'),
	'z'        => array('app/x-compress'),
	'zip'      => array('app/x-zip', 'app/zip', 'app/x-zip-compressed')
);
