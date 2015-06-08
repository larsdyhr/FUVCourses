<?php
namespace FIT\FUVCourses\Domain\Model;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "FIT.FUVCourses".        *
 *                                                                        *
 *                                                                        */

use TYPO3\Flow\Annotations as Flow;
use Doctrine\ORM\Mapping as ORM;

/**
 * @Flow\Entity
 */
class Theme {

	/**
	 * @var string
	 */
	protected $name;

	/**
	 * @var integer
	 */
	protected $origin;

	/**
	 * @var string
	 */
	protected $id;

	/**
	 * @var string
	 */
	protected $recordhash;

	/**
	 * @var \DateTime
	 */
	protected $changed;

	/**
	 * @var \DateTime
	 */
	protected $lastfetched;


	/**
	 * @return string
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * @param string $name
	 * @return void
	 */
	public function setName($name) {
		$this->name = $name;
	}

	/**
	 * @return integer
	 */
	public function getOrigin() {
		return $this->origin;
	}

	/**
	 * @param integer $origin
	 * @return void
	 */
	public function setOrigin($origin) {
		$this->origin = $origin;
	}

	/**
	 * @return string
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * @param string $id
	 * @return void
	 */
	public function setId($id) {
		$this->id = $id;
	}

	/**
	 * @return string
	 */
	public function getRecordhash() {
		return $this->recordhash;
	}

	/**
	 * @param string $recordhash
	 * @return void
	 */
	public function setRecordhash($recordhash) {
		$this->recordhash = $recordhash;
	}

	/**
	 * @return \DateTime
	 */
	public function getChanged() {
		return $this->changed;
	}

	/**
	 * @param \DateTime $changed
	 * @return void
	 */
	public function setChanged($changed) {
		$this->changed = $changed;
	}

	/**
	 * @return \DateTime
	 */
	public function getLastfetched() {
		return $this->lastfetched;
	}

	/**
	 * @param \DateTime $lastfetched
	 * @return void
	 */
	public function setLastfetched($lastfetched) {
		$this->lastfetched = $lastfetched;
	}

}
