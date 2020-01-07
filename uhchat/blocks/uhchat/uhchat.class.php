<?php
namespace Block;
/**
 * uhchat - Main Class
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
class uhchat extends \SCHLIX\cmsBlock
{
	public function Run()
	{
    global $__uhchat_loaded;
		if ($__uhchat_loaded !== 'loaded') // prevent the built-in duplicate blocks feature 
		{
      $uhchat_id = $this->config['str_uhchat_id'];
      
			$__uhchat_loaded = 'loaded';
			$this->loadTemplateFile('view.block',compact(array_keys(get_defined_vars())));
		}
  }
}
