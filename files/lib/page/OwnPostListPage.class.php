<?php
namespace wbb\page;
use wcf\system\exception\PermissionDeniedException;
use wcf\system\WCF;

/**
 * Represents the own post list page.
 * 
 * @author	Dennis Kraffczyk
 * @copyright	2011-2018 KittMedia
 * @license	Free <https://kittmedia.com/licenses/#licenseFree>
 * @package	com.kittmedia.wsf.ownpostlist
 * @category	WoltLabSuite\Forum\Page
 */
class OwnPostListPage extends UserPostListPage {
	/**
	 * @inheritdoc
	 */
	public $loginRequired = true;
	
	/**
	 * @inheritdoc
	 */
	public function readParameters() {
		if (!($this->userID = WCF::getUser()->getObjectID())) {
			throw new PermissionDeniedException();
		}
		
		parent::readParameters();
	}
}
