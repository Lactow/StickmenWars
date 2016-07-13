<?php


/**
 *
 */
interface vItems
{
	/**
	 * @var string
	 */
	public $sName;

	/**
	 * @var integer
	 */
	public $iPrice;

	/**
	 * @var enum{weapon; potion}
	 */
	public $eType;
}
