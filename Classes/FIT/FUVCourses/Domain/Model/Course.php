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
class Course {

	/**
	 * @var string
	 */
	protected $title;

	/**
	 * @var string
	 */
	protected $subtitle;

	/**
	 * @var string
	 */
	protected $shortDescription;

	/**
	 * @var string
	 */
	protected $description;

	/**
	 * @var string
	 */
	protected $courseLeader;

	/**
	 * @var string
	 */
	protected $location;

	/**
	 * @var string
	 */
	protected $agenda;

	/**
	 * @var integer
	 */
	protected $price;

	/**
	 * @var integer
	 */
	protected $totalPrice;

	/**
	 * @var string
	 */
	protected $priceComment;

	/**
	 * @var \DateTime
	 */
	protected $startdate;

	/**
	 * @var \DateTime
	 */
	protected $enddate;

	/**
	 * @var \DateTime
	 */
	protected $submissionDeadline;

	/**
	 * @var boolean
	 */
	protected $cancelled;

	/**
	 * @var boolean
	 */
	protected $remoteDeleted;

	/**
	 * @var string
	 */
	protected $participants;

	/**
	 * @var \FIT\FUVCourses\Domain\Model\Theme|null
	 * @ORM\OneToOne
	 */
	protected $theme;

	/**
	 * @var string
	 */
	protected $submissionLink;

	/**
	 * @var integer
	 */
	protected $origin;

	/**
	 * @var integer
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
	 * @var \Datetime
	 */
	protected $lastfetched;


	/**
	 * @return string
	 */
	public function getTitle() {
		return $this->title;
	}

	/**
	 * @param string $title
	 * @return void
	 */
	public function setTitle($title) {
		$this->title = $title;
	}

	/**
	 * @return string
	 */
	public function getSubtitle() {
		return $this->subtitle;
	}

	/**
	 * @param string $subtitle
	 * @return void
	 */
	public function setSubtitle($subtitle) {
		$this->subtitle = $subtitle;
	}

	/**
	 * @return string
	 */
	public function getShortDescription() {
		return $this->shortDescription;
	}

	/**
	 * @param string $shortDescription
	 * @return void
	 */
	public function setShortDescription($shortDescription) {
		$this->shortDescription = $shortDescription;
	}

	/**
	 * @return string
	 */
	public function getDescription() {
		return $this->description;
	}

	/**
	 * @param string $description
	 * @return void
	 */
	public function setDescription($description) {
		$this->description = $description;
	}

	/**
	 * @return string
	 */
	public function getCourseLeader() {
		return $this->courseLeader;
	}

	/**
	 * @param string $courseLeader
	 * @return void
	 */
	public function setCourseLeader($courseLeader) {
		$this->courseLeader = $courseLeader;
	}

	/**
	 * @return string
	 */
	public function getLocation() {
		return $this->location;
	}

	/**
	 * @param string $location
	 * @return void
	 */
	public function setLocation($location) {
		$this->location = $location;
	}

	/**
	 * @return string
	 */
	public function getAgenda() {
		return $this->agenda;
	}

	/**
	 * @param string $agenda
	 * @return void
	 */
	public function setAgenda($agenda) {
		$this->agenda = $agenda;
	}

	/**
	 * @return integer
	 */
	public function getPrice() {
		return $this->price;
	}

	/**
	 * @param integer $price
	 * @return void
	 */
	public function setPrice($price) {
		$this->price = $price;
	}

	/**
	 * @return integer
	 */
	public function getTotalPrice() {
		return $this->totalPrice;
	}

	/**
	 * @param integer $totalPrice
	 * @return void
	 */
	public function setTotalPrice($totalPrice) {
		$this->totalPrice = $totalPrice;
	}

	/**
	 * @return string
	 */
	public function getPriceComment() {
		return $this->priceComment;
	}

	/**
	 * @param string $priceComment
	 * @return void
	 */
	public function setPriceComment($priceComment) {
		$this->priceComment = $priceComment;
	}

	/**
	 * @return \DateTime
	 */
	public function getStartdate() {
		return $this->startdate;
	}

	/**
	 * @param \DateTime $startdate
	 * @return void
	 */
	public function setStartdate($startdate) {
		$this->startdate = $startdate;
	}

	/**
	 * @return \DateTime
	 */
	public function getEnddate() {
		return $this->enddate;
	}

	/**
	 * @param \DateTime $enddate
	 * @return void
	 */
	public function setEnddate($enddate) {
		$this->enddate = $enddate;
	}

	/**
	 * @return \DateTime
	 */
	public function getSubmissionDeadline() {
		return $this->submissionDeadline;
	}

	/**
	 * @param \DateTime $submissionDeadline
	 * @return void
	 */
	public function setSubmissionDeadline($submissionDeadline) {
		$this->submissionDeadline = $submissionDeadline;
	}

	/**
	 * @return boolean
	 */
	public function getCancelled() {
		return $this->cancelled;
	}

	/**
	 * @param boolean $cancelled
	 * @return void
	 */
	public function setCancelled($cancelled) {
		$this->cancelled = $cancelled;
	}

	/**
	 * @return boolean
	 */
	public function getRemoteDeleted() {
		return $this->remoteDeleted;
	}

	/**
	 * @param boolean $remoteDeleted
	 * @return void
	 */
	public function setRemoteDeleted($remoteDeleted) {
		$this->remoteDeleted = $remoteDeleted;
	}

	/**
	 * @return string
	 */
	public function getParticipants() {
		return $this->participants;
	}

	/**
	 * @param string $participants
	 * @return void
	 */
	public function setParticipants($participants) {
		$this->participants = $participants;
	}

	/**
	 * @return \FIT\FUVCourses\Domain\Model\Theme
	 */
	public function getTheme() {
		return $this->theme;
	}

	/**
	 * @param \FIT\FUVCourses\Domain\Model\Theme $theme
	 * @return void
	 */
	public function setTheme($theme) {
		$this->theme = $theme;
	}

	/**
	 * @return string
	 */
	public function getSubmissionLink() {
		return $this->submissionLink;
	}

	/**
	 * @param string $submissionLink
	 * @return void
	 */
	public function setSubmissionLink($submissionLink) {
		$this->submissionLink = $submissionLink;
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
	 * @return integer
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * @param integer $id
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
