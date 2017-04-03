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
 * @param module string module dirname
 * @param file  string block funciton file
 * @param show_func string show block function
 * @param options= string show block function's option
 * @param template string show block function's template
 * @param cachetime int  cachetime Unit for seconds 
 * @param user mix Generate cache solution

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
function smarty_function_xoBlk( $params, &$smarty ) 
{
    $old_caching = $smarty->caching;
    $old_cache_lifetime = $smarty->cache_lifetime;
    if (isset($params['cachetime'])) {
        $smarty->caching = 2;
        $smarty->cache_lifetime = intval($params['cachetime']);
    } else {
        $smarty->caching = 0;
    }
    $tplName = "db:".$params['template'];
    $params['cacheid'] = isset($params['cacheid']) ? $params['cacheid'] : 'xoBlk_'.md5(var_export($params, true));
    if (!isset($params['cachetime']) || !$smarty->is_cached($tplName, $params['cacheid'])) {
        $myBlock = array(
            'dirname' => $params['module'],
            'func_file' => $params['file'],
            'show_func' => $params['show_func'],
            'options' => $params['options'],
        );
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
?>