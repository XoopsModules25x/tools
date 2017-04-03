<?php
/**
 * tools Module for XOOPS
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code 
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright       The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license         http://www.fsf.org/copyleft/gpl.html GNU public license
 * @package         tools
 * @since           2.00
 * @author          Susheng Yang <ezskyyoung@gmail.com>
 * @version         $Id$
 */
 
include 'header.php';
xoops_cp_header();

loadModuleAdminMenu(1, "");

$op = isset($_REQUEST['op']) ? $_REQUEST['op'] : 'index';
switch($op) {
default:
case "index":
	include_once XOOPS_ROOT_PATH."/class/xoopsformloader.php";
	$form = new XoopsThemeForm(_MI_TOOLS_INDEX,"updatecache","index.php","post",true);
	$form->addElement(new XoopsFormLabel(_AM_TOOLS_TIP,_AM_TOOLS_TIPS));
	$checkbox_options = array(
	"updatexoopscache"=>_AM_TOOLS_UPDATEXOOPSCACHE,
	"updatesmartycache"=>_AM_TOOLS_UPDATESMARTYCACHE,
	"updatesmartycompile"=>_AM_TOOLS_UPDATESMARTYCOMPILE
	);
	$checkbox = new XoopsFormCheckBox(_AM_TOOLS_OPTIONS,"options",array_keys($checkbox_options));
	$checkbox->addOptionArray($checkbox_options);
	$form->addElement($checkbox);
	$form->addElement(new XoopsFormHidden("op","updatecache"));
	$form->addElement(new XoopsFormHidden("step","1"));
	$form->addElement(new XoopsFormButton("","submit",_SUBMIT,"submit"));
	$form->display();
	break;
case "updatecache":
	if($_REQUEST['step'] == 1){
	$options = implode('_', $_REQUEST['options']);
	$url = XOOPS_URL."/modules/tools/admin/index.php?op=updatecache&step=2&options={$options}";
	$updating = _AM_TOOLS_UPDATING;
	$msg = <<<EOF
	<div class="loading" style="text-align:center">
    <img src="../images/loader.gif" />
    <p>{$updating}</P>
    </div>
    <script type="text/javascript" language="javascript">
	function redirect(url){
	location.replace(url);
	}
	</script>
    <script type="text/JavaScript">setTimeout("redirect('{$url}');", 2000);</script>
EOF;

    echo $msg;
	}elseif ($_REQUEST['step'] == 2) {
	$options = explode("_",$_REQUEST['options']);
	foreach ($options as $k){
			if ($k === 'updatexoopscache'){
			$d = XOOPS_VAR_PATH . '/caches/xoops_cache';
			updatecache($d,"php");
			updatecache($d,"html");
			updatecache($d,"tmp");
			}
			if ($k === 'updatesmartycache'){
			$d = XOOPS_VAR_PATH . '/caches/smarty_cache';
			updatecache($d,"html");
			updatecache($d,"tmp");
			}
			if ($k === 'updatesmartycompile'){
			$d = XOOPS_VAR_PATH . '/caches/smarty_compile';
			updatecache($d,"php");
			}
	}

	redirect_header('index.php', 3, _AM_TOOLS_UPDATECACHESUCCESS);
	}

	break;

}

function updatecache($cacheDir,$type){
	$d = dir($cacheDir);
	while (false !== ($entry = $d->read())) {
		if(preg_match("/.*\.{$type}$/", $entry)) {
			unlink($cacheDir .'/'.$entry);
		}
	}
	$d->close();
}
include 'footer.php';
?>