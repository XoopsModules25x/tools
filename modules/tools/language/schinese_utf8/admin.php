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
 
//menu
define("_MI_TOOLS_INDEX","更新缓存");
define("_MI_TOOLS_BLOCKS","区块调用");

//update cache
define("_AM_TOOLS_UPDATING","更新缓存中请稍后!");
define("_AM_TOOLS_TIP","提示:");
define("_AM_TOOLS_TIPS","<ul><li>xoops cache:此目录下包括系统参数缓存,模块参数缓存,一些内容缓存.如果对系统或模块进行参数设置后不能正常显示则需要清理;</li><li>smarty cache:内容缓存.如果网站内容较多且大面积使用缓存,更新缓存时间会较长,服务器的负荷会增大;</li><li>smarty compile:模版编译后的文件.如果修改模版后不能正常显示,则需要更新.</li></ul>");
define("_AM_TOOLS_OPTIONS","选项");
define("_AM_TOOLS_UPDATECACHESUCCESS","缓存更新成功.");
define("_AM_TOOLS_UPDATEXOOPSCACHE","xoops cache");
define("_AM_TOOLS_UPDATESMARTYCACHE","smarty cache");
define("_AM_TOOLS_UPDATESMARTYCOMPILE","smarty compile");

//blocks call

define("_AM_TOOLS_BC_MANAGE","管理区块");
define("_AM_TOOLS_BC_ADDBLOCK","添加区块");
define("_AM_TOOLS_BC_EDITBLOCK","编辑区块参数");

define("_AM_TOOLS_BC_GLOBAL","常规");
define("_AM_TOOLS_BC_GROUP","用户群组");
define("_AM_TOOLS_BC_USER","用户");

define("_AM_TOOLS_BC_ALLTYPES","全部");

define("_AM_TOOLS_BC_SAVEDSUCCESS", "%s 保存成功");
define("_AM_TOOLS_BC_DELETEDSUCCESS", "删除成功");
define("_AM_TOOLS_BC_RUSUREDEL", "确定要删除 %s");
define("_AM_TOOLS_BC_CREATESUCCESS", "区块 %s 添加成功");
define("_AM_TOOLS_BC_NOBLOCKS","没有可用区块");
define("_AM_TOOLS_BC_NOBLOCKS","没有可用区块");

define("_AM_TOOLS_BC_EDITTPL","编辑模板");
define("_AM_TOOLS_BC_BLOCK","区块");
define("_AM_TOOLS_BC_TPLSOURCES","模板");
define("_AM_TOOLS_BC_NAME","名称");
define("_AM_TOOLS_BC_DESCRIPTION","调用说明");
define("_AM_TOOLS_BC_CONTENT","内容");
define("_AM_TOOLS_BC_OPTIONS","选项");
define("_AM_TOOLS_BC_BCACHETIME","缓存时间");
define("_AM_TOOLS_BC_BCACHEMODEL","缓存方式");
define("_AM_TOOLS_BC_MODULE","所属模块");
define("_AM_TOOLS_BC_DATE","修改时间");
define("_AM_TOOLS_BC_ACTION","操作");
define("_AM_TOOLS_BC_CREATE","创建");
define("_AM_TOOLS_BC_TITLE","描述");
define("_AM_TOOLS_BC_ENABLEBLOCKS","可用区块");
define("_AM_TOOLS_BC_SELECTMODULE","选择模块:");
define("_AM_TOOLS_BC_QUICKCALL","直接调用");
define("_AM_TOOLS_BC_TPLCALL","模板化调用");
?>