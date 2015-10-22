<?php

/**
 * small cross section of who the seller is
 *
 * this information is an example of what online vendors have to do to sell their product
 *
 * @author gerald fongwe <gfongwe@cnm.edu>
 **/
class Seller {
	/**
	 * id of the seller; this is the primary key
	 * @var int $sellerId
	 **/
	private $sellerId;

	/**
	 * email address of the seller
	 * @var string $sellerEmail
	 **/
	private $sellerEmail;

	/**
	 * name of the seller
	 * @var string $sellerName
	 **/
	private $sellerName;

	/**
	 * accessor method for seller id
	 *
	 * @return int value of seller id
 **/

	public function getSellerId() {
		return ($this->sellerId);
	}
	/**
	 * mutation method for seller id
	 * @param int $newSellerId new value of seller id
	 * @throws InvalidArgumentException if $newSellerId is not an integer
	 * @throws RangeException if $newSellerId is not positive
	 **/

	public function setSellerId($newSellerId) {
		// base case: if the seller id is null, this is a new seller with a mySQL not assigned id (yet)
		if($newSellerId === null) {
			$this->sellerId = null;
		}

		// verify the seller id is valid
		$newSellerId = filter_var($newSellerId, FILTER_VALIDATE_INT);
		if($newSellerId === false) {
			throw(new InvalidArgumentException("seller id is not a valid integer"));
		}
		// verify the seller id is positive
		if($newSellerId <= 0) {
			throw(new RangeException("seller id is not positive"));
		}
		// convert and store the seller id
		$this->sellerId = intval($newSellerId);
	}
	/**
	 * accessor method for seller email
	 *
	 * @return int value of seller email
	 **/
	public function getSellerEmail() {
		return ($this->sellerEmail);
	}
	/**
	 * mutation method for seller email
	 * @param string $newSellerEmail new value of seller email
	 * @throws InvalidArgumentException if $newSellerEmail is not a string
	 * @throws RangeException if $newSellerEmail is not positive
	 **/
	public function setSellerEmail($newSellerEmail) {
		//$newSellerEmail = ($newSellerEmail);
		$newSellerEmail = filter_var($newSellerEmail, FILTER_SANITIZE_STRING);
		if(empty($newEmailContent) === true) {
			throw(new InvalidArgumentException("email account is empty or insecure"));
		}
		// verify the seller email is valid
		$newSellerEmail = filter_var($newSellerEmail, FILTER_SANITIZE_STRING);
		if($newSellerEmail === false) {
			throw(new InvalidArgumentException("seller email is not a valid string"));
		}
		// verify the seller email is positive
		if($newSellerEmail <= 0) {
			throw(new RangeException("seller email is not positive"));
		}
		// convert and store the seller email
		$this->sellerEmail = intval($newSellerEmail);
	}
	/**
	 * accessor method for seller name
	 *
	 * @return int value of seller name
	 **/
	public function getSellerName() {
		return ($this->sellerName);
	}
	/**
 * mutation method for seller name
 * @param string $newSellerName new value of seller name
 * @throws InvalidArgumentException if $newSellerName is not an integer
 * @throws RangeException if $newSellerName is not positive
 **/
	public function setSellerName($newSellerName) {
		// public function setSellerName($newSellerName)
		 $newSellerName = ($newSellerName);
		 $newSellerName = filter_var($newSellerName, FILTER_SANITIZE_STRING);
		if(empty($newSellerName) === true) {
			throw(new InvalidArgumentException("name account is empty or insecure"));
		}
		// verify the seller name is valid
		$newSellerName = filter_var($newSellerName, FILTER_SANITIZE_STRING);
		if($newSellerName === false) {
			throw(new InvalidArgumentException("seller name is not a valid string"));
		}
		// verify the seller id is positive
		if($newSellerName <= 0) {
			throw(new RangeException("seller name is not positive"));
		}
		// convert and store the seller name
		$this->sellerName = intval($newSellerName);
	}
}