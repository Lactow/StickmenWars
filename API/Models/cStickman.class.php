<?php


/**
 * class Stickman
 */
class cStickman
{
	/**
	 *
	 */
	public function __construct(){
            
	}

	/**
	 * @var Array of virtual items
	 */
	public $aovItems;

	/**
	 * @var Array of virtual attributes
	 */
	public $aovAttributes;

	/**
	 * @var integer
	 */
	public $iActionPoint;

	/**
	 * @var integer
	 */
	public $iMovePoint;

	/**
	 * @var integer
	 */
	public $iPoints;

	/**
	 * @var string
	 */
	public $sName;

	/**
	 * @var integer
	 */
	public $iVictories;

	/**
	 * @var integer
	 */
	public $iDefeats;

	/**
	 * @param void $int x; int y
	 */
	public function move($x,$y,$direction)
	{
		// TODO: implement here
            switch($direction){
                case "left" :
                    $move['position'][$x.','.$y--];
                    break;
                case "right" :
                    $move['position'][$x.','.$y++];
                    break;
                case "up" :
                    $move['position'][$x++.','.$y];
                    break;
                case "down" :
                    $move['position'][$x--.','.$y];
                    break;
                default : 
                    $move['position'][$x.','.$y];
                    break;
            }
            return $move;
            
	}

	/**
	 *
	 */
	public function look($x,$y)
	{
            
            
	}

	/**
	 *
	 */
	public function protect($value = true)
	{
            if($value == true){
                return $protect['Defended'] = "true"; 
            } else {
                return $protect['Defended'] = "false";
            }
	}

	/**
	 * @param void $int idStickman
	 */
	public function attack($stickmenE,$useWeapon = false)
	{
            $target = $stickmanE->getLife();
            if($useWeapon == true){
                
            } else {
                
            }
	}

	/**
	 * @param void $int idItem
	 */
	public function grab($idItem)
	{
		// TODO: implement here
	}

	/**
	 * @param void $int idItem
	 */
	public function useItems($idItem)
	{
		// TODO: implement here
	}

	/**
	 *
	 */
	public function leave()
	{
		// TODO: implement here
	}

	/**
	 *
	 */
	private function imDying()
	{
		// TODO: implement here
	}

	/**
	 *
	 */
	public function getPos()
	{
		// TODO: implement here : know x and y from cell from arena
	}
}
