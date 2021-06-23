<?php
/**
 * 
 * 
 * @package     smarty xoopsplugin
 * 
 * @author	    Hu Zhenghui <huzhengh@gmail.com>
 *  
 * how to use
 * The following code inserted in the template
 *  
 * @param string $module module dirname
 * @param string $file  block function file
 * @param string $show_func show block function
 * @param string $options show block function's option
 * @param int $cachetime cachetime Unit for seconds
 * @param mixed $user Generate cache solution

<{xoBlkTpl module="ilog" file="ilog_block_tag.php" show_func="ilog_tag_block_cloud_show" options="100|0|100|80" cachetime=5 userid=$xoops_userid}>
    <link rel="stylesheet" href="<{$xoops_url}>/modules/tag/templates/style.css" />
    <div class="tag-cloud" style="line-height: 150%; padding: 5px;">
    <{foreach item=tag from=$block.tags}>
    	<span class="tag-level-<{$tag.level}>" style="font-size: <{$tag.font}>%; display: inline; padding-right: 5px;">
    		<a href="<{$xoops_url}>/modules/<{$block.tag_dirname}>/view.tag.php<{$smarty.const.URL_DELIMITER}><{$tag.id}>/" title="<{$tag.term}>"><{$tag.term}></a>
    	</span>
    <{/foreach}>
    </div>
<{/xoBlkTpl}>
*/
function smarty_block_xoBlkTpl ($params, $content, $smarty, &$repeat) {
    static $old_block;
    /** @var Smarty $smarty */
    if (empty($content)) {
        xoops_load('xoopscache');
        $cache_key = 'xoBlkTpl_'.md5(var_export($params, true));
        if (!isset($params['cachetime']) || (!$var = XoopsCache::read($cache_key))) {
            $myBlock = [
                'dirname' => $params['module'],
                'func_file' => $params['file'],
                'show_func' => $params['show_func'],
                'options' => $params['options'],
            ];
            $xoBlk = new XoopsBlock($myBlock);
            $var = $xoBlk->buildBlock();
        }
        if (isset($params['cachetime'])) {
            XoopsCache::write($cache_key, $var, (int)$params['cachetime']);
        }
        $old_block = $smarty->get_template_vars('block');
        $smarty->assign('block', $var);
    } else {
        echo $content;
        $smarty->assign('block', $old_block);
    }
}

