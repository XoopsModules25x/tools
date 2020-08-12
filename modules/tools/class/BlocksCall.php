<?php

namespace XoopsModules\Tools;

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
class BlocksCall extends \XoopsObject
{
    public function __construct()
    {
        $this->initVar('bid', XOBJ_DTYPE_INT, null, true);
        $this->initVar('mid', XOBJ_DTYPE_INT);
        $this->initVar('options', XOBJ_DTYPE_TXTBOX);
        $this->initVar('name', XOBJ_DTYPE_TXTBOX);
        $this->initVar('title', XOBJ_DTYPE_TXTBOX);
        $this->initVar('desciption', XOBJ_DTYPE_TXTBOX);
        $this->initVar('dirname', XOBJ_DTYPE_TXTBOX);
        $this->initVar('func_file', XOBJ_DTYPE_TXTBOX);
        $this->initVar('show_func', XOBJ_DTYPE_TXTBOX);
        $this->initVar('edit_func', XOBJ_DTYPE_TXTBOX);
        $this->initVar('template', XOBJ_DTYPE_TXTBOX);
        $this->initVar('tpl_content', XOBJ_DTYPE_TXTBOX);
        $this->initVar('bcachetime', XOBJ_DTYPE_INT);
        $this->initVar('bcachemodel', XOBJ_DTYPE_INT);
        $this->initVar('last_modified', XOBJ_DTYPE_INT);
    }

    /**
     * gets html form for editting block options
     */
    public function getOptions()
    {
        global $xoopsConfig;
        $edit_func = $this->getVar('edit_func');
        if (!$edit_func) {
            return false;
        }
        if (is_file(XOOPS_ROOT_PATH . '/modules/' . $this->getVar('dirname') . '/blocks/' . $this->getVar('func_file'))) {
            if (is_file(XOOPS_ROOT_PATH . '/modules/' . $this->getVar('dirname') . '/language/' . $xoopsConfig['language'] . '/blocks.php')) {
                require_once XOOPS_ROOT_PATH . '/modules/' . $this->getVar('dirname') . '/language/' . $xoopsConfig['language'] . '/blocks.php';
            } elseif (is_file(XOOPS_ROOT_PATH . '/modules/' . $this->getVar('dirname') . '/language/english/blocks.php')) {
                require_once XOOPS_ROOT_PATH . '/modules/' . $this->getVar('dirname') . '/language/english/blocks.php';
            }
            require_once XOOPS_ROOT_PATH . '/modules/' . $this->getVar('dirname') . '/blocks/' . $this->getVar('func_file');
            $options   = explode('|', $this->getVar('options'));
            $edit_form = $edit_func($options);
            if (!$edit_form) {
                return false;
            }

            return $edit_form;
        }

        return false;
    }
}
