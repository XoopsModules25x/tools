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
 * @copyright       XOOPS Project (https://xoops.org)
 * @license         http://www.fsf.org/copyleft/gpl.html GNU public license
 * @package         tools
 * @since           2.00
 * @author          Susheng Yang <ezskyyoung@gmail.com>
 */

use Xmf\Module\Admin;

require_once __DIR__ . '/admin_header.php';
xoops_cp_header();

//loadModuleAdminMenu(1, '');

/** @var Admin $adminObject */
$adminObject->displayNavigation(basename(__FILE__));

$op = $_REQUEST['op'] ?? 'main';
switch ($op) {
    default:
    case 'main':
        require_once XOOPS_ROOT_PATH . '/class/xoopsformloader.php';
        $form = new \XoopsThemeForm(_AM_TOOLS_INDEX, 'updatecache', 'main.php', 'post', true);
        $form->addElement(new \XoopsFormLabel(_AM_TOOLS_TIP, _AM_TOOLS_TIPS));
        $checkbox_options = [
            'updatexoopscache'    => _AM_TOOLS_UPDATEXOOPSCACHE,
            'updatesmartycache'   => _AM_TOOLS_UPDATESMARTYCACHE,
            'updatesmartycompile' => _AM_TOOLS_UPDATESMARTYCOMPILE,
        ];
        $checkbox         = new \XoopsFormCheckBox(_AM_TOOLS_OPTIONS, 'options', array_keys($checkbox_options));
        $checkbox->addOptionArray($checkbox_options);
        $form->addElement($checkbox);
        $form->addElement(new \XoopsFormHidden('op', 'updatecache'));
        $form->addElement(new \XoopsFormHidden('step', '1'));
        $form->addElement(new \XoopsFormButton('', 'submit', _SUBMIT, 'submit'));
        $form->display();
        break;
    case 'updatecache':
        if (1 == $_REQUEST['step']) {
            $options  = implode('_', $_REQUEST['options']);
            $url      = XOOPS_URL . "/modules/tools/admin/main.php?op=updatecache&step=2&options={$options}";
            $updating = _AM_TOOLS_UPDATING;
            $msg      = <<<EOF
    <div class="loading" style="text-align:center">
    <img src="../assets/images/loader.gif">
    <p>{$updating}</P>
    </div>
    <script type="text/javascript" language="javascript">
    function redirect(url)
    {
    location.replace(url);
    }
    </script>
    <script type="text/JavaScript">setTimeout("redirect('{$url}');", 2000);</script>
EOF;

            echo $msg;
        } elseif (2 == $_REQUEST['step']) {
            $options = explode('_', $_REQUEST['options']);
            foreach ($options as $k) {
                if ('updatexoopscache' === $k) {
                    $d = XOOPS_VAR_PATH . '/caches/xoops_cache';
                    updatecache($d, 'php');
                    updatecache($d, 'html');
                    updatecache($d, 'tmp');
                }
                if ('updatesmartycache' === $k) {
                    $d = XOOPS_VAR_PATH . '/caches/smarty_cache';
                    updatecache($d, 'html');
                    updatecache($d, 'tmp');
                }
                if ('updatesmartycompile' === $k) {
                    $d = XOOPS_VAR_PATH . '/caches/smarty_compile';
                    updatecache($d, 'php');
                }
            }

            redirect_header('main.php', 3, _AM_TOOLS_UPDATECACHESUCCESS);
        }

        break;
}

function updatecache($cacheDir, $type)
{
    $d = dir($cacheDir);
    while (false !== ($entry = $d->read())) {
        if (preg_match("/.*\.{$type}$/", $entry)) {
            unlink($cacheDir . '/' . $entry);
        }
    }
    $d->close();
}

require_once __DIR__ . '/admin_footer.php';
