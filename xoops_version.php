<?php
/**
 * TDMDownload
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright   Gregory Mage (Aka Mage)
 * @license     GNU GPL 2 (http://www.gnu.org/licenses/old-licenses/gpl-2.0.html)
 * @author      Gregory Mage (Aka Mage)
 */

if (!defined('XOOPS_ROOT_PATH')) {
    die('XOOPS root path not defined');
}

$modversion['name']                = _MI_TDMDOWNLOADS_NAME;
$modversion['version']             = '1.65';
$modversion['description']         = _MI_TDMDOWNLOADS_DESC;
$modversion['credits']             = 'G. Mage';
$modversion['author']              = 'G. Mage';
$modversion['nickname']            = 'Mage';
$modversion['module_website_url']  = 'www.github.com/GregMage/TDMDownloads';
$modversion['module_website_name'] = 'Support site';
$modversion['license']             = 'GNU GPL';
$modversion['license_url']         = 'www.gnu.org/licenses/gpl-2.0.html/';
$modversion['official']            = 1;
$modversion['image']               = 'images/tdmdownloads_logo.png';
$modversion['dirname']             = 'TDMDownloads';
$modversion['module_status']       = 'RC 1';
$modversion['release_date']        = '2017/26/01';
$modversion['sqlfile']['mysql']    = 'sql/mysql.sql';
$modversion['onInstall']           = 'include/install.php';
$modversion['onUpdate']            = 'include/update.php';
$modversion['help']                = 'page=help';
$modversion['min_php']             = '5.5';
$modversion['min_xoops']           = '2.5.8';
$modversion['min_admin']='1.1';
$modversion['min_db']= array('mysql'=>'5.0.7', 'mysqli'=>'5.0.7');

// Admin menu
// Set to 1 if you want to display menu generated by system module
$modversion['system_menu'] = 1;

// Tables crée depuis le fichier sql
$modversion['tables'][0] = 'tdmdownloads_broken';
$modversion['tables'][1] = 'tdmdownloads_cat';
$modversion['tables'][2] = 'tdmdownloads_downloads';
$modversion['tables'][3] = 'tdmdownloads_mod';
$modversion['tables'][4] = 'tdmdownloads_votedata';
$modversion['tables'][5] = 'tdmdownloads_field';
$modversion['tables'][6] = 'tdmdownloads_fielddata';
$modversion['tables'][7] = 'tdmdownloads_modfielddata';
$modversion['tables'][8] = 'tdmdownloads_downlimit';

// Pour avoir une administration
$modversion['hasAdmin'] =   1;
$modversion['adminindex'] = 'admin/index.php';
$modversion['adminmenu'] =  'admin/menu.php';

// Pour les blocs
$modversion['blocks'][1]['file']        = 'tdmdownloads_top.php';
$modversion['blocks'][1]['name']        = _MI_TDMDOWNLOADS_BNAME1;
$modversion['blocks'][1]['description'] = _MI_TDMDOWNLOADS_BNAMEDSC1;
$modversion['blocks'][1]['show_func']   = 'b_tdmdownloads_top_show';
$modversion['blocks'][1]['edit_func']   = 'b_tdmdownloads_top_edit';
$modversion['blocks'][1]['options']     = 'date|10|19|1|1|1|left|90|0';
$modversion['blocks'][1]['template']    = 'tdmdownloads_block_new.html';

$modversion['blocks'][2]['file']        = 'tdmdownloads_top.php';
$modversion['blocks'][2]['name']        = _MI_TDMDOWNLOADS_BNAME2;
$modversion['blocks'][2]['description'] = _MI_TDMDOWNLOADS_BNAMEDSC2;
$modversion['blocks'][2]['show_func']   = 'b_tdmdownloads_top_show';
$modversion['blocks'][2]['edit_func']   = 'b_tdmdownloads_top_edit';
$modversion['blocks'][2]['options']     = 'hits|10|19|1|1|1|left|90|0';
$modversion['blocks'][2]['template']    = 'tdmdownloads_block_top.html';

$modversion['blocks'][3]['file']        = 'tdmdownloads_top.php';
$modversion['blocks'][3]['name']        = _MI_TDMDOWNLOADS_BNAME3;
$modversion['blocks'][3]['description'] = _MI_TDMDOWNLOADS_BNAMEDSC3;
$modversion['blocks'][3]['show_func']   = 'b_tdmdownloads_top_show';
$modversion['blocks'][3]['edit_func']   = 'b_tdmdownloads_top_edit';
$modversion['blocks'][3]['options']     = 'rating|10|19|1|1|1|left|90|0';
$modversion['blocks'][3]['template']    = 'tdmdownloads_block_rating.html';

$modversion['blocks'][4]['file']        = 'tdmdownloads_top.php';
$modversion['blocks'][4]['name']        = _MI_TDMDOWNLOADS_BNAME4;
$modversion['blocks'][4]['description'] = _MI_TDMDOWNLOADS_BNAMEDSC4;
$modversion['blocks'][4]['show_func']   = 'b_tdmdownloads_top_show';
$modversion['blocks'][4]['edit_func']   = 'b_tdmdownloads_top_edit';
$modversion['blocks'][4]['options']     = 'random|10|19|1|1|1|left|90|0';
$modversion['blocks'][4]['template']    = 'tdmdownloads_block_random.html';

$modversion['blocks'][5]['file']        = 'tdmdownloads_search.php';
$modversion['blocks'][5]['name']        = _MI_TDMDOWNLOADS_BNAME5;
$modversion['blocks'][5]['description'] = _MI_TDMDOWNLOADS_BNAMEDSC5;
$modversion['blocks'][5]['show_func']   = 'b_tdmdownloads_search_show';
$modversion['blocks'][5]['edit_func']   = '';
$modversion['blocks'][5]['options']     = '';
$modversion['blocks'][5]['template']    = 'tdmdownloads_block_search.html';

// Menu
$modversion['hasMain'] = 1;
$modversion['sub'][1]['name'] = _MI_TDMDOWNLOADS_SMNAME1;
$modversion['sub'][1]['url']  = 'submit.php';
$modversion['sub'][2]['name'] = _MI_TDMDOWNLOADS_SMNAME2;
$modversion['sub'][2]['url']  = 'search.php';

// Recherche
$modversion['hasSearch'] = 1;
$modversion['search']['file'] = 'include/search.inc.php';
$modversion['search']['func'] = 'tdmdownloads_search';

// Commentaires
$modversion['hasComments'] = 1;
$modversion['comments']['itemName']            = 'lid';
$modversion['comments']['pageName']            = 'singlefile.php';
$modversion['comments']['extraParams']         = array('cid');
$modversion['comments']['callbackFile']        = 'include/comment_functions.php';
$modversion['comments']['callback']['approve'] = 'tdmdownloads_com_approve';
$modversion['comments']['callback']['update']  = 'tdmdownloads_com_update';

// Templates
$modversion['templates'][1]['file'] = 'tdmdownloads_brokenfile.html';
$modversion['templates'][1]['description'] = '';
$modversion['templates'][2]['file'] = 'tdmdownloads_download.html';
$modversion['templates'][2]['description'] = '';
$modversion['templates'][3]['file'] = 'tdmdownloads_index.html';
$modversion['templates'][3]['description'] = '';
$modversion['templates'][4]['file'] = 'tdmdownloads_modfile.html';
$modversion['templates'][4]['description'] = '';
$modversion['templates'][5]['file'] = 'tdmdownloads_ratefile.html';
$modversion['templates'][5]['description'] = '';
$modversion['templates'][6]['file'] = 'tdmdownloads_singlefile.html';
$modversion['templates'][6]['description'] = '';
$modversion['templates'][7]['file'] = 'tdmdownloads_submit.html';
$modversion['templates'][7]['description'] = '';
$modversion['templates'][8]['file'] = 'tdmdownloads_viewcat.html';
$modversion['templates'][8]['description'] = '';
$modversion['templates'][9]['file'] = 'tdmdownloads_liste.html';
$modversion['templates'][9]['description'] = '';
$modversion['templates'][10]['file'] = 'tdmdownloads_rss.html';
$modversion['templates'][10]['description'] = '';

// Préférences
$i = 1;
$modversion['config'][$i]['name']        = 'break' . $i;
$modversion['config'][$i]['title']       = '_MI_TDMDOWNLOADS_PREFERENCE_BREAK_GENERAL';
$modversion['config'][$i]['description'] = '';
$modversion['config'][$i]['formtype']    = 'line_break';
$modversion['config'][$i]['valuetype']   = 'textbox';
$modversion['config'][$i]['default']     = 'head';
$i++;
$modversion['config'][$i]['name']        = 'popular';
$modversion['config'][$i]['title']       = '_MI_TDMDOWNLOADS_POPULAR';
$modversion['config'][$i]['description'] = '';
$modversion['config'][$i]['formtype']    = 'textbox';
$modversion['config'][$i]['valuetype']   = 'int';
$modversion['config'][$i]['default']     = 100;
$i++;
$modversion['config'][$i]['name']        = 'autosummary';
$modversion['config'][$i]['title']       = '_MI_TDMDOWNLOADS_AUTO_SUMMARY';
$modversion['config'][$i]['description'] = '';
$modversion['config'][$i]['formtype']    = 'yesno';
$modversion['config'][$i]['valuetype']   = 'int';
$modversion['config'][$i]['default']     = 0;
$i++;
$modversion['config'][$i]['name']        = 'showupdated';
$modversion['config'][$i]['title']       = '_MI_TDMDOWNLOADS_SHOW_UPDATED';
$modversion['config'][$i]['description'] = '';
$modversion['config'][$i]['formtype']    = 'yesno';
$modversion['config'][$i]['valuetype']   = 'int';
$modversion['config'][$i]['default']     = 1;
$i++;
$modversion['config'][$i]['name']        = 'useshots';
$modversion['config'][$i]['title']       = '_MI_TDMDOWNLOADS_USESHOTS';
$modversion['config'][$i]['description'] = '';
$modversion['config'][$i]['formtype']    = 'yesno';
$modversion['config'][$i]['valuetype']   = 'int';
$modversion['config'][$i]['default']     = 1;
$i++;
$modversion['config'][$i]['name']        = 'shotwidth';
$modversion['config'][$i]['title']       = '_MI_TDMDOWNLOADS_SHOTWIDTH';
$modversion['config'][$i]['description'] = '';
$modversion['config'][$i]['formtype']    = 'textbox';
$modversion['config'][$i]['valuetype']   = 'int';
$modversion['config'][$i]['default']     = 90;
$i++;
$modversion['config'][$i]['name']        = 'img_float';
$modversion['config'][$i]['title']       = '_MI_TDMDOWNLOADS_IMGFLOAT';
$modversion['config'][$i]['description'] = '';
$modversion['config'][$i]['formtype']    = 'select';
$modversion['config'][$i]['valuetype']   = 'text';
$modversion['config'][$i]['default']     = 'left';
$modversion['config'][$i]['options']     = array(_MI_TDMDOWNLOADS_IMGFLOAT_LEFT => 'left', _MI_TDMDOWNLOADS_IMGFLOAT_RIGHT => 'Aaright');
$i++;
$modversion['config'][$i]['name']        = 'platform';
$modversion['config'][$i]['title']       = '_MI_TDMDOWNLOADS_PLATEFORM';
$modversion['config'][$i]['description'] = '_MI_TDMDOWNLOADS_PLATEFORM_DSC';
$modversion['config'][$i]['formtype']    = 'textarea';
$modversion['config'][$i]['valuetype']   = 'text';
$modversion['config'][$i]['default']     = 'None|XOOPS 2.0.x|XOOPS 2.2.x|XOOPS 2.3.x|XOOPS 2.4.x|XOOPS 2.5.x|XOOPS 2.6.x|Other';
$i++;
$modversion['config'][$i]['name']        = 'usetellafriend';
$modversion['config'][$i]['title']       = '_MI_TDMDOWNLOADS_USETELLAFRIEND';
$modversion['config'][$i]['description'] = '_MI_TDMDOWNLOADS_USETELLAFRIENDDSC';
$modversion['config'][$i]['formtype']    = 'yesno';
$modversion['config'][$i]['valuetype']   = 'int';
$modversion['config'][$i]['default']     = 0;
$i++;
$modversion['config'][$i]['name']        = 'usetag';
$modversion['config'][$i]['title']       = '_MI_TDMDOWNLOADS_USETAG';
$modversion['config'][$i]['description'] = '_MI_TDMDOWNLOADS_USETAGDSC';
$modversion['config'][$i]['formtype']    = 'yesno';
$modversion['config'][$i]['valuetype']   = 'int';
$modversion['config'][$i]['default']     = 0;
$i++;

$modversion['config'][$i]['name'] = 'editor';
$modversion['config'][$i]['title'] = '_MI_TDMDOWNLOADS_FORM_OPTIONS';
$modversion['config'][$i]['description'] = '';
$modversion['config'][$i]['formtype'] = 'select';
$modversion['config'][$i]['valuetype'] = 'text';
$modversion['config'][$i]['default'] = 'dhtmltextarea';
xoops_load('xoopseditorhandler');
$editor_handler = XoopsEditorHandler::getInstance();
$modversion['config'][$i]['options'] = array_flip($editor_handler->getList());

$i++;
$modversion['config'][$i]['name']        = 'break' . $i;
$modversion['config'][$i]['title']       = '_MI_TDMDOWNLOADS_PREFERENCE_BREAK_USER';
$modversion['config'][$i]['description'] = '';
$modversion['config'][$i]['formtype']    = 'line_break';
$modversion['config'][$i]['valuetype']   = 'textbox';
$modversion['config'][$i]['default']     = 'head';
$i++;
$modversion['config'][$i]['name']        = 'perpage';
$modversion['config'][$i]['title']       = '_MI_TDMDOWNLOADS_PERPAGE';
$modversion['config'][$i]['description'] = '';
$modversion['config'][$i]['formtype']    = 'textbox';
$modversion['config'][$i]['valuetype']   = 'int';
$modversion['config'][$i]['default']     = 10;
$i++;
$modversion['config'][$i]['name']        = 'nb_dowcol';
$modversion['config'][$i]['title']       = '_MI_TDMDOWNLOADS_NBDOWCOL';
$modversion['config'][$i]['description'] = '';
$modversion['config'][$i]['formtype']    = 'select';
$modversion['config'][$i]['valuetype']   = 'int';
$modversion['config'][$i]['default']     = 1;
$modversion['config'][$i]['options']     = array('1' => 1, '2' => 2, '3' => 3, '4' => 4, '5' => 5);
$i++;
$modversion['config'][$i]['name']        = 'newdownloads';
$modversion['config'][$i]['title']       = '_MI_TDMDOWNLOADS_NEWDLS';
$modversion['config'][$i]['description'] = '';
$modversion['config'][$i]['formtype']    = 'textbox';
$modversion['config'][$i]['valuetype']   = 'int';
$modversion['config'][$i]['default']     = 10;
$i++;
$modversion['config'][$i]['name']        = 'toporder';
$modversion['config'][$i]['title']       = '_MI_TDMDOWNLOADS_TOPORDER';
$modversion['config'][$i]['description'] = '';
$modversion['config'][$i]['formtype']    = 'select';
$modversion['config'][$i]['valuetype']   = 'int';
$modversion['config'][$i]['default']     = 1;
$modversion['config'][$i]['options']     = array('_MI_TDMDOWNLOADS_TOPORDER1' => 1, '_MI_TDMDOWNLOADS_TOPORDER2' => 2, '_MI_TDMDOWNLOADS_TOPORDER3' => 3,
                                                 '_MI_TDMDOWNLOADS_TOPORDER4' => 4, '_MI_TDMDOWNLOADS_TOPORDER5' => 5, '_MI_TDMDOWNLOADS_TOPORDER6' => 6,
                                                 '_MI_TDMDOWNLOADS_TOPORDER7' => 7, '_MI_TDMDOWNLOADS_TOPORDER8' => 8);
$i++;
$modversion['config'][$i]['name']        = 'perpageliste';
$modversion['config'][$i]['title']       = '_MI_TDMDOWNLOADS_PERPAGELISTE';
$modversion['config'][$i]['description'] = '';
$modversion['config'][$i]['formtype']    = 'textbox';
$modversion['config'][$i]['valuetype']   = 'int';
$modversion['config'][$i]['default']     = 15;
$i++;
$modversion['config'][$i]['name']        = 'searchorder';
$modversion['config'][$i]['title']       = '_MI_TDMDOWNLOADS_SEARCHORDER';
$modversion['config'][$i]['description'] = '';
$modversion['config'][$i]['formtype']    = 'select';
$modversion['config'][$i]['valuetype']   = 'int';
$modversion['config'][$i]['default']     = 8;
$modversion['config'][$i]['options']     = array('_MI_TDMDOWNLOADS_TOPORDER1' => 1, '_MI_TDMDOWNLOADS_TOPORDER2' => 2, '_MI_TDMDOWNLOADS_TOPORDER3' => 3,
                                                 '_MI_TDMDOWNLOADS_TOPORDER4' => 4, '_MI_TDMDOWNLOADS_TOPORDER5' => 5, '_MI_TDMDOWNLOADS_TOPORDER6' => 6,
                                                 '_MI_TDMDOWNLOADS_TOPORDER7' => 7, '_MI_TDMDOWNLOADS_TOPORDER8' => 8);
$i++;
$modversion['config'][$i]['name']        = 'nbsouscat';
$modversion['config'][$i]['title']       = '_MI_TDMDOWNLOADS_SUBCATPARENT';
$modversion['config'][$i]['description'] = '';
$modversion['config'][$i]['formtype']    = 'textbox';
$modversion['config'][$i]['valuetype']   = 'int';
$modversion['config'][$i]['default']     = 5;
$i++;
$modversion['config'][$i]['name']        = 'nb_catcol';
$modversion['config'][$i]['title']       = '_MI_TDMDOWNLOADS_NBCATCOL';
$modversion['config'][$i]['description'] = '';
$modversion['config'][$i]['formtype']    = 'select';
$modversion['config'][$i]['valuetype']   = 'int';
$modversion['config'][$i]['default']     = 3;
$modversion['config'][$i]['options']     = array('1' => 1, '2' => 2, '3' => 3, '4' => 4, '5' => 5);
$i++;
$modversion['config'][$i]['name']        = 'bldate';
$modversion['config'][$i]['title']       = '_MI_TDMDOWNLOADS_BLDATE';
$modversion['config'][$i]['description'] = '';
$modversion['config'][$i]['formtype']    = 'yesno';
$modversion['config'][$i]['valuetype']   = 'int';
$modversion['config'][$i]['default']     = 1;
$i++;
$modversion['config'][$i]['name']        = 'blpop';
$modversion['config'][$i]['title']       = '_MI_TDMDOWNLOADS_BLPOP';
$modversion['config'][$i]['description'] = '';
$modversion['config'][$i]['formtype']    = 'yesno';
$modversion['config'][$i]['valuetype']   = 'int';
$modversion['config'][$i]['default']     = 1;
$i++;
$modversion['config'][$i]['name']        = 'blrating';
$modversion['config'][$i]['title']       = '_MI_TDMDOWNLOADS_BLRATING';
$modversion['config'][$i]['description'] = '';
$modversion['config'][$i]['formtype']    = 'yesno';
$modversion['config'][$i]['valuetype']   = 'int';
$modversion['config'][$i]['default']     = 1;
$i++;
$modversion['config'][$i]['name']        = 'nbbl';
$modversion['config'][$i]['title']       = '_MI_TDMDOWNLOADS_NBBL';
$modversion['config'][$i]['description'] = '';
$modversion['config'][$i]['formtype']    = 'textbox';
$modversion['config'][$i]['valuetype']   = 'int';
$modversion['config'][$i]['default']     = 5;
$i++;
$modversion['config'][$i]['name']        = 'longbl';
$modversion['config'][$i]['title']       = '_MI_TDMDOWNLOADS_LONGBL';
$modversion['config'][$i]['description'] = '';
$modversion['config'][$i]['formtype']    = 'textbox';
$modversion['config'][$i]['valuetype']   = 'int';
$modversion['config'][$i]['default']     = 20;
$i++;
$modversion['config'][$i]['name'] = 'show_bookmark';
$modversion['config'][$i]['title'] = "_MI_TDMDOWNLOADS_BOOKMARK";
$modversion['config'][$i]['description'] = "_MI_TDMDOWNLOADS_BOOKMARK_DSC";
$modversion['config'][$i]['formtype'] = 'yesno';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = 1;
$i++;
$modversion['config'][$i]['name'] = 'show_social';
$modversion['config'][$i]['title'] = "_MI_TDMDOWNLOADS_SOCIAL";
$modversion['config'][$i]['description'] = "_MI_TDMDOWNLOADS_SOCIAL_DSC";
$modversion['config'][$i]['formtype'] = 'yesno';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = 1;
$i++;
$modversion['config'][$i]['name']        = 'download_float';
$modversion['config'][$i]['title']       = '_MI_TDMDOWNLOADS_DOWNLOADFLOAT';
$modversion['config'][$i]['description'] = '_MI_TDMDOWNLOADS_DOWNLOADFLOAT_DSC';
$modversion['config'][$i]['formtype']    = 'select';
$modversion['config'][$i]['valuetype']   = 'text';
$modversion['config'][$i]['default']     = 'ltr';
$modversion['config'][$i]['options']     = array(_MI_TDMDOWNLOADS_DOWNLOADFLOAT_LTR => 'ltr', _MI_TDMDOWNLOADS_DOWNLOADFLOAT_RTL => 'rtl');
$i++;
$modversion['config'][$i]['name'] = 'show_latest_files';
$modversion['config'][$i]['title'] = "_MI_TDMDOWNLOADS_SHOW_LATEST_FILES";
$modversion['config'][$i]['description'] = "_MI_TDMDOWNLOADS_SHOW_LATEST_FILES_DSC";
$modversion['config'][$i]['formtype'] = 'yesno';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = 1;
$i++;
$modversion['config'][$i]['name']        = 'break' . $i;
$modversion['config'][$i]['title']       = '_MI_TDMDOWNLOADS_PREFERENCE_BREAK_ADMIN';
$modversion['config'][$i]['description'] = '';
$modversion['config'][$i]['formtype']    = 'line_break';
$modversion['config'][$i]['valuetype']   = 'textbox';
$modversion['config'][$i]['default']     = 'head';
$i++;
$modversion['config'][$i]['name']        = 'perpageadmin';
$modversion['config'][$i]['title']       = '_MI_TDMDOWNLOADS_PERPAGEADMIN';
$modversion['config'][$i]['description'] = '';
$modversion['config'][$i]['formtype']    = 'textbox';
$modversion['config'][$i]['valuetype']   = 'int';
$modversion['config'][$i]['default']     = 15;
$i++;
$modversion['config'][$i]['name']        = 'break' . $i;
$modversion['config'][$i]['title']       = '_MI_TDMDOWNLOADS_PREFERENCE_BREAK_DOWNLOADS';
$modversion['config'][$i]['description'] = '';
$modversion['config'][$i]['formtype']    = 'line_break';
$modversion['config'][$i]['valuetype']   = 'textbox';
$modversion['config'][$i]['default']     = 'head';
$i++;
$modversion['config'][$i]['name']        = 'permission_download';
$modversion['config'][$i]['title']       = '_MI_TDMDOWNLOADS_PERMISSIONDOWNLOAD';
$modversion['config'][$i]['description'] = '';
$modversion['config'][$i]['formtype']    = 'select';
$modversion['config'][$i]['valuetype']   = 'int';
$modversion['config'][$i]['default']     = 1;
$modversion['config'][$i]['options']     = array('_MI_TDMDOWNLOADS_PERMISSIONDOWNLOAD1' => 1, '_MI_TDMDOWNLOADS_PERMISSIONDOWNLOAD2' => 2);
$i++;
$modversion['config'][$i]['name']        = 'newnamedownload';
$modversion['config'][$i]['title']       = '_MI_TDMDOWNLOADS_DOWNLOAD_NAME';
$modversion['config'][$i]['description'] = '_MI_TDMDOWNLOADS_DOWNLOAD_NAMEDSC';
$modversion['config'][$i]['formtype']    = 'yesno';
$modversion['config'][$i]['valuetype']   = 'int';
$modversion['config'][$i]['default']     = 1;
$i++;
$modversion['config'][$i]['name']        = 'prefixdownloads';
$modversion['config'][$i]['title']       = '_MI_TDMDOWNLOADS_DOWNLOAD_PREFIX';
$modversion['config'][$i]['description'] = '_MI_TDMDOWNLOADS_DOWNLOAD_PREFIXDSC';
$modversion['config'][$i]['formtype']    = 'textbox';
$modversion['config'][$i]['valuetype']   = 'text';
$modversion['config'][$i]['default']     = 'downloads_';
$i++;
$modversion['config'][$i]['name']        = 'maxuploadsize';
$modversion['config'][$i]['title']       = '_MI_TDMDOWNLOADS_MAXUPLOAD_SIZE';
$modversion['config'][$i]['description'] = '';
$modversion['config'][$i]['formtype']    = 'textbox';
$modversion['config'][$i]['valuetype']   = 'int';
$modversion['config'][$i]['default']     = 1048576;
$i++;
$modversion['config'][$i]['name']        = 'mimetype';
$modversion['config'][$i]['title']       = '_MI_TDMDOWNLOADS_MIMETYPE';
$modversion['config'][$i]['description'] = '_MI_TDMDOWNLOADS_MIMETYPE_DSC';
$modversion['config'][$i]['formtype']    = 'textarea';
$modversion['config'][$i]['valuetype']   = 'text';
$modversion['config'][$i]['default']     = 'image/gif|image/jpeg|image/pjpeg|image/x-png|image/png|application/x-zip-compressed|application/zip|application/rar|application/pdf|
                                            application/x-gtar|application/x-tar|application/msword|application/vnd.ms-excel|application/vnd.oasis.opendocument.text|
                                            application/vnd.oasis.opendocument.spreadsheet|application/vnd.oasis.opendocument.presentation|
                                            application/vnd.oasis.opendocument.graphics|application/vnd.oasis.opendocument.chart|application/vnd.oasis.opendocument.formula|
                                            application/vnd.oasis.opendocument.database|application/vnd.oasis.opendocument.image|application/vnd.oasis.opendocument.text-master';
$i++;
$modversion['config'][$i]['name']        = 'check_host';
$modversion['config'][$i]['title']       = '_MI_TDMDOWNLOADS_CHECKHOST';
$modversion['config'][$i]['description'] = '';
$modversion['config'][$i]['formtype']    = 'yesno';
$modversion['config'][$i]['valuetype']   = 'int';
$modversion['config'][$i]['default']     = 0;
$i++;
$xoops_url = parse_url(XOOPS_URL);
$modversion['config'][$i]['name']        = 'referers';
$modversion['config'][$i]['title']       = '_MI_TDMDOWNLOADS_REFERERS';
$modversion['config'][$i]['description'] = '';
$modversion['config'][$i]['formtype']    = 'textarea';
$modversion['config'][$i]['valuetype']   = 'array';
$modversion['config'][$i]['default']     = array($xoops_url['host']);
$i++;
$modversion['config'][$i]['name']        = 'downlimit';
$modversion['config'][$i]['title']       = '_MI_TDMDOWNLOADS_DOWNLIMIT';
$modversion['config'][$i]['description'] = '_MI_TDMDOWNLOADS_DOWNLIMITDSC';
$modversion['config'][$i]['formtype']    = 'yesno';
$modversion['config'][$i]['valuetype']   = 'int';
$modversion['config'][$i]['default']     = 0;
$i++;
$modversion['config'][$i]['name']        = 'limitglobal';
$modversion['config'][$i]['title']       = '_MI_TDMDOWNLOADS_LIMITGLOBAL';
$modversion['config'][$i]['description'] = '_MI_TDMDOWNLOADS_LIMITGLOBALDSC';
$modversion['config'][$i]['formtype']    = 'textbox';
$modversion['config'][$i]['valuetype']   = 'int';
$modversion['config'][$i]['default']     = 10;
$i++;
$modversion['config'][$i]['name']        = 'limitlid';
$modversion['config'][$i]['title']       = '_MI_TDMDOWNLOADS_LIMITLID';
$modversion['config'][$i]['description'] = '_MI_TDMDOWNLOADS_LIMITLIDDSC';
$modversion['config'][$i]['formtype']    = 'textbox';
$modversion['config'][$i]['valuetype']   = 'int';
$modversion['config'][$i]['default']     = 2;
$i++;
$modversion['config'][$i]['name']        = 'break' . $i;
$modversion['config'][$i]['title']       = '_MI_TDMDOWNLOADS_PREFERENCE_BREAK_PAYPAL';
$modversion['config'][$i]['description'] = '';
$modversion['config'][$i]['formtype']    = 'line_break';
$modversion['config'][$i]['valuetype']   = 'textbox';
$modversion['config'][$i]['default']     = 'head';
$i++;
$modversion['config'][$i]['name']        = 'use_paypal';
$modversion['config'][$i]['title']       = '_MI_TDMDOWNLOADS_USEPAYPAL';
$modversion['config'][$i]['description'] = '';
$modversion['config'][$i]['formtype']    = 'yesno';
$modversion['config'][$i]['valuetype']   = 'int';
$modversion['config'][$i]['default']     = 0;
$i++;
$modversion['config'][$i]['name']        = 'currency_paypal';
$modversion['config'][$i]['title']       = '_MI_TDMDOWNLOADS_CURRENCYPAYPAL';
$modversion['config'][$i]['description'] = '';
$modversion['config'][$i]['formtype']    = 'select';
$modversion['config'][$i]['valuetype']   = 'text';
$modversion['config'][$i]['default']     = 'EUR';
$modversion['config'][$i]['options']     = array('AUD' => 'AUD', 'BRL' => 'BRL', 'CAD' => 'CAD', 'CHF' => 'CHF', 'CZK' => 'CZK', 'DKK' => 'DKK', 'EUR' => 'EUR', 'GBP' => 'GBP',
                                                 'HKD' => 'HKD', 'HUF' => 'HUF', 'ILS' => 'ILS', 'JPY' => 'JPY', 'MXN' => 'MXN', 'NOK' => 'NOK', 'NZD' => 'NZD', 'PHP' => 'PHP',
                                                 'PLN' => 'PLN', 'SEK' => 'SEK', 'SGD' => 'SGD', 'THB' => 'THB', 'TWD' => 'TWD', 'USD' => 'USD');
$i++;
$modversion['config'][$i]['name']        = 'image_paypal';
$modversion['config'][$i]['title']       = '_MI_TDMDOWNLOADS_IMAGEPAYPAL';
$modversion['config'][$i]['description'] = '_MI_TDMDOWNLOADS_IMAGEPAYPALDSC';
$modversion['config'][$i]['formtype']    = 'textbox';
$modversion['config'][$i]['valuetype']   = 'text';
$modversion['config'][$i]['default']     = 'https://www.paypal.com/fr_FR/FR/i/btn/btn_donateCC_LG.gif';
$i++;
$modversion['config'][$i]['name']        = 'break' . $i;
$modversion['config'][$i]['title']       = '_MI_TDMDOWNLOADS_PREFERENCE_BREAK_RSS';
$modversion['config'][$i]['description'] = '';
$modversion['config'][$i]['formtype']    = 'line_break';
$modversion['config'][$i]['valuetype']   = 'textbox';
$modversion['config'][$i]['default']     = 'head';
$i++;
$modversion['config'][$i]['name']        = 'perpagerss';
$modversion['config'][$i]['title']       = '_MI_TDMDOWNLOADS_PERPAGERSS';
$modversion['config'][$i]['description'] = '_MI_TDMDOWNLOADS_PERPAGERSSDSC';
$modversion['config'][$i]['formtype']    = 'textbox';
$modversion['config'][$i]['valuetype']   = 'int';
$modversion['config'][$i]['default']     = 10;
$i++;
$modversion['config'][$i]['name']        = 'timecacherss';
$modversion['config'][$i]['title']       = '_MI_TDMDOWNLOADS_TIMECACHERSS';
$modversion['config'][$i]['description'] = '_MI_TDMDOWNLOADS_TIMECACHERSSDSC';
$modversion['config'][$i]['formtype']    = 'textbox';
$modversion['config'][$i]['valuetype']   = 'int';
$modversion['config'][$i]['default']     = 60;
$i++;
$modversion['config'][$i]['name']        = 'logorss';
$modversion['config'][$i]['title']       = '_MI_TDMDOWNLOADS_LOGORSS';
$modversion['config'][$i]['description'] = '';
$modversion['config'][$i]['formtype']    = 'textbox';
$modversion['config'][$i]['valuetype']   = 'text';
$modversion['config'][$i]['default']     = '/modules/TDMDownloads/images/mydl_slogo.png';
$i++;
$modversion['config'][$i]['name']        = 'break' . $i;
$modversion['config'][$i]['title']       = '_MI_TDMDOWNLOADS_PREFERENCE_BREAK_COMNOTI';
$modversion['config'][$i]['description'] = '';
$modversion['config'][$i]['formtype']    = 'line_break';
$modversion['config'][$i]['valuetype']   = 'textbox';
$modversion['config'][$i]['default']     = 'head';

// Notifications
$modversion['hasNotification'] = 1;
$modversion['notification']['lookup_file'] = 'include/notification.inc.php';
$modversion['notification']['lookup_func'] = 'tdmdownloads_notify_iteminfo';

$modversion['notification']['category'][1]['name'] = 'global';
$modversion['notification']['category'][1]['title'] = _MI_TDMDOWNLOADS_GLOBAL_NOTIFY;
$modversion['notification']['category'][1]['description'] = _MI_TDMDOWNLOADS_GLOBAL_NOTIFYDSC;
$modversion['notification']['category'][1]['subscribe_from'] = array('index.php','viewcat.php','singlefile.php');

$modversion['notification']['category'][2]['name'] = 'category';
$modversion['notification']['category'][2]['title'] = _MI_TDMDOWNLOADS_CATEGORY_NOTIFY;
$modversion['notification']['category'][2]['description'] = _MI_TDMDOWNLOADS_CATEGORY_NOTIFYDSC;
$modversion['notification']['category'][2]['subscribe_from'] = array('viewcat.php', 'singlefile.php');
$modversion['notification']['category'][2]['item_name'] = 'cid';
$modversion['notification']['category'][2]['allow_bookmark'] = 1;

$modversion['notification']['category'][3]['name'] = 'file';
$modversion['notification']['category'][3]['title'] = _MI_TDMDOWNLOADS_FILE_NOTIFY;
$modversion['notification']['category'][3]['description'] = _MI_TDMDOWNLOADS_FILE_NOTIFYDSC;
$modversion['notification']['category'][3]['subscribe_from'] = 'singlefile.php';
$modversion['notification']['category'][3]['item_name'] = 'lid';
$modversion['notification']['category'][3]['allow_bookmark'] = 1;

$modversion['notification']['event'][1]['name'] = 'new_category';
$modversion['notification']['event'][1]['category'] = 'global';
$modversion['notification']['event'][1]['title'] = _MI_TDMDOWNLOADS_GLOBAL_NEWCATEGORY_NOTIFY;
$modversion['notification']['event'][1]['caption'] = _MI_TDMDOWNLOADS_GLOBAL_NEWCATEGORY_NOTIFYCAP;
$modversion['notification']['event'][1]['description'] = _MI_TDMDOWNLOADS_GLOBAL_NEWCATEGORY_NOTIFYDSC;
$modversion['notification']['event'][1]['mail_template'] = 'global_newcategory_notify';
$modversion['notification']['event'][1]['mail_subject'] = _MI_TDMDOWNLOADS_GLOBAL_NEWCATEGORY_NOTIFYSBJ;

$modversion['notification']['event'][2]['name'] = 'file_modify';
$modversion['notification']['event'][2]['category'] = 'global';
$modversion['notification']['event'][2]['admin_only'] = 1;
$modversion['notification']['event'][2]['title'] = _MI_TDMDOWNLOADS_GLOBAL_FILEMODIFY_NOTIFY;
$modversion['notification']['event'][2]['caption'] = _MI_TDMDOWNLOADS_GLOBAL_FILEMODIFY_NOTIFYCAP;
$modversion['notification']['event'][2]['description'] = _MI_TDMDOWNLOADS_GLOBAL_FILEMODIFY_NOTIFYDSC;
$modversion['notification']['event'][2]['mail_template'] = 'global_filemodify_notify';
$modversion['notification']['event'][2]['mail_subject'] = _MI_TDMDOWNLOADS_GLOBAL_FILEMODIFY_NOTIFYSBJ;

$modversion['notification']['event'][3]['name'] = 'file_broken';
$modversion['notification']['event'][3]['category'] = 'global';
$modversion['notification']['event'][3]['admin_only'] = 1;
$modversion['notification']['event'][3]['title'] = _MI_TDMDOWNLOADS_GLOBAL_FILEBROKEN_NOTIFY;
$modversion['notification']['event'][3]['caption'] = _MI_TDMDOWNLOADS_GLOBAL_FILEBROKEN_NOTIFYCAP;
$modversion['notification']['event'][3]['description'] = _MI_TDMDOWNLOADS_GLOBAL_FILEBROKEN_NOTIFYDSC;
$modversion['notification']['event'][3]['mail_template'] = 'global_filebroken_notify';
$modversion['notification']['event'][3]['mail_subject'] = _MI_TDMDOWNLOADS_GLOBAL_FILEBROKEN_NOTIFYSBJ;

$modversion['notification']['event'][4]['name'] = 'file_submit';
$modversion['notification']['event'][4]['category'] = 'global';
$modversion['notification']['event'][4]['admin_only'] = 1;
$modversion['notification']['event'][4]['title'] = _MI_TDMDOWNLOADS_GLOBAL_FILESUBMIT_NOTIFY;
$modversion['notification']['event'][4]['caption'] = _MI_TDMDOWNLOADS_GLOBAL_FILESUBMIT_NOTIFYCAP;
$modversion['notification']['event'][4]['description'] = _MI_TDMDOWNLOADS_GLOBAL_FILESUBMIT_NOTIFYDSC;
$modversion['notification']['event'][4]['mail_template'] = 'global_filesubmit_notify';
$modversion['notification']['event'][4]['mail_subject'] = _MI_TDMDOWNLOADS_GLOBAL_FILESUBMIT_NOTIFYSBJ;

$modversion['notification']['event'][5]['name'] = 'new_file';
$modversion['notification']['event'][5]['category'] = 'global';
$modversion['notification']['event'][5]['title'] = _MI_TDMDOWNLOADS_GLOBAL_NEWFILE_NOTIFY;
$modversion['notification']['event'][5]['caption'] = _MI_TDMDOWNLOADS_GLOBAL_NEWFILE_NOTIFYCAP;
$modversion['notification']['event'][5]['description'] = _MI_TDMDOWNLOADS_GLOBAL_NEWFILE_NOTIFYDSC;
$modversion['notification']['event'][5]['mail_template'] = 'global_newfile_notify';
$modversion['notification']['event'][5]['mail_subject'] = _MI_TDMDOWNLOADS_GLOBAL_NEWFILE_NOTIFYSBJ;

$modversion['notification']['event'][6]['name'] = 'file_submit';
$modversion['notification']['event'][6]['category'] = 'category';
$modversion['notification']['event'][6]['admin_only'] = 1;
$modversion['notification']['event'][6]['title'] = _MI_TDMDOWNLOADS_CATEGORY_FILESUBMIT_NOTIFY;
$modversion['notification']['event'][6]['caption'] = _MI_TDMDOWNLOADS_CATEGORY_FILESUBMIT_NOTIFYCAP;
$modversion['notification']['event'][6]['description'] = _MI_TDMDOWNLOADS_CATEGORY_FILESUBMIT_NOTIFYDSC;
$modversion['notification']['event'][6]['mail_template'] = 'category_filesubmit_notify';
$modversion['notification']['event'][6]['mail_subject'] = _MI_TDMDOWNLOADS_CATEGORY_FILESUBMIT_NOTIFYSBJ;

$modversion['notification']['event'][7]['name'] = 'new_file';
$modversion['notification']['event'][7]['category'] = 'category';
$modversion['notification']['event'][7]['title'] = _MI_TDMDOWNLOADS_CATEGORY_NEWFILE_NOTIFY;
$modversion['notification']['event'][7]['caption'] = _MI_TDMDOWNLOADS_CATEGORY_NEWFILE_NOTIFYCAP;
$modversion['notification']['event'][7]['description'] = _MI_TDMDOWNLOADS_CATEGORY_NEWFILE_NOTIFYDSC;
$modversion['notification']['event'][7]['mail_template'] = 'category_newfile_notify';
$modversion['notification']['event'][7]['mail_subject'] = _MI_TDMDOWNLOADS_CATEGORY_NEWFILE_NOTIFYSBJ;

$modversion['notification']['event'][8]['name'] = 'approve';
$modversion['notification']['event'][8]['category'] = 'file';
$modversion['notification']['event'][8]['invisible'] = 1;
$modversion['notification']['event'][8]['title'] = _MI_TDMDOWNLOADS_FILE_APPROVE_NOTIFY;
$modversion['notification']['event'][8]['caption'] = _MI_TDMDOWNLOADS_FILE_APPROVE_NOTIFYCAP;
$modversion['notification']['event'][8]['description'] = _MI_TDMDOWNLOADS_FILE_APPROVE_NOTIFYDSC;
$modversion['notification']['event'][8]['mail_template'] = 'file_approve_notify';
$modversion['notification']['event'][8]['mail_subject'] = _MI_TDMDOWNLOADS_FILE_APPROVE_NOTIFYSBJ;
