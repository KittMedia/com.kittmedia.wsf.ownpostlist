<?php
namespace wbb\system\page\handler;
use wcf\system\page\handler\AbstractMenuPageHandler;
use wcf\system\WCF;

/**
 * Page handler for own posts.
 * 
 * @author	Dennis Kraffczyk
 * @copyright	2011-2020 KittMedia
 * @license	Free <https://kittmedia.com/licenses/#licenseFree>
 * @package	com.kittmedia.wsf.ownpostlist
 * @category	WoltLabSuite\Forum\System\Page\Handler
 */
class OwnPostListPageHandler extends AbstractMenuPageHandler {
	/**
	 * @inheritdoc
	 */
	public function isVisible($objectID = null) {
		return WCF::getUser()->getObjectID();
	}
}
