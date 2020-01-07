<?php
/**
 * uhchat - Main page view template. Lists both categories and items with parent_id = 0 and category_id = 0 
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
if (!defined('SCHLIX_VERSION')) die('No Access');
?>
<?php if ($uhchat_id): ?>
    <script src="https://uhchat.net/code.php?f=<?= ___h($uhchat_id) ?>"></script>
<?php else: ?>
    <!-- NOTE - Uhchat ID was not set up correctly - please add Uhchat ID -->
    <script>console.error("Uhchat ID has not been set from configuration");</script>
<?php endif ?>