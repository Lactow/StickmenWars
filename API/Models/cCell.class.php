<?php
/**
 *
 */
class cCell
{
	/**
	 * class Cell : 
         * to detect cells, what is on,
         * items
         * stickman
         * 
	 */
	public function __construct()
	{
	}

	/**
	 * @var integer
	 */
	public $iPosX;

	/**
	 * @var integer
	 */
	public $iPosY;

	/**
	 * @var Array of virtual
	 */
	public $aovItems;

	/**
	 * @var Array object
	 */
	public $aoStickmen;
        
        public function getY(){
            return $this->iPosY;
        }
        
        public function getX() {
            return $this->iPosX;
        }

}
