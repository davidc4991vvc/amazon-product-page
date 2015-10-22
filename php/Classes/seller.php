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
	 * @var mixed $sellerEmail
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
	 * @param mixed $newSellerId new value of seller id
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


}