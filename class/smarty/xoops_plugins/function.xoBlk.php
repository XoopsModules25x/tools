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

<{xoBlk 
    module="ilog" 
    file="ilog_block_tag.php" 
    show_func="ilog_tag_block_cloud_show" 
    options="100|0|150|80" 
    template="ilog_tag_block_cloud.html" 
    cachetime=10 
    user=admin
}>
*/
function smarty_function_xoBlk( $params, $smarty )
{
    /** @var Smarty $smarty */
    $old_caching = $smarty->caching;
    $old_cache_lifetime = $smarty->cache_lifetime;
    if (isset($params['cachetime'])) {
        $smarty->caching = 2;
        $smarty->cache_lifetime = (int)$params['cachetime'];
    } else {
        $smarty->caching = 0;
    }
    $tplName = 'db:' . $params['template'];
    $params['cacheid'] = $params['cacheid'] ?? ('xoBlk_' . md5(var_export($params, true)));
    if (!isset($params['cachetime']) || !$smarty->is_cached($tplName, $params['cacheid'])) {
        $myBlock = [
            'dirname' => $params['module'],
            'func_file' => $params['file'],
            'show_func' => $params['show_func'],
            'options' => $params['options'],
        ];
        $xoBlk = new XoopsBlock($myBlock);
        $var = $xoBlk->buildBlock();
        $old_block = $smarty->get_template_vars('block');
        $smarty->assign('block', $var);
        $smarty->display($tplName, $params['cacheid']);
        $smarty->assign('block', $old_block);
    } else {
        $smarty->display($tplName, $params['cacheid']);
    }
    $smarty->caching = $old_caching;
    $smarty->cache_lifetime = $old_cache_lifetime;
}
