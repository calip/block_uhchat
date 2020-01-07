<?php
/**
 * uhchat - Config
 * 
 * Chatbox in your website helps visitors can chat with you directly without login
 *
 * Chatbox in your website helps visitors can chat with you directly without login
 *
 * @copyright 2019 calip
 *
 * @license MIT
 *
 * @package uhchat
 * @version 1.0
 * @author  Alip <asalip.putra@gmail.com>
 * @link    https://github.com/calip/block_uhchat
 */
if (!defined('SCHLIX_VERSION'))
    die('No Access');
?>
<h4><?= ___('Uhchat Settings') ?></h4>
<p><?= ___('Configure your Uhchat here. <a href="https://uhchat.net/admin/" target="_blank">Uhchat</a>') ?></p>
<schlix-config:textbox config-key='str_uhchat_id' label='<?= ___('Uhchat ID') ?>' class='form-control' required='required'/>
