<?php
/**
 * Automobilių markių redagavimo klasė
 *
 * @author ISK
 */

class brands {
	
	private $markes_lentele = '';
	private $modeliai_lentele = '';
	
	public function __construct() {
		$this->markes_lentele = config::DB_PREFIX . 'darbuotojai';
		$this->modeliai_lentele = config::DB_PREFIX . 'modeliai';
		$this->lazybu_bendroves_lentele = config::DB_PREFIX . 'lazybu_bendroves';
	}
	
	/**
	 * Markės išrinkimas
	 * @param type $id
	 * @return type
	 */
	public function getBrand($id) {
		$query = "  SELECT *
					FROM {$this->markes_lentele}
					WHERE `id`='{$id}'";
		$data = mysql::select($query);
		
		return $data[0];
	}

	public function getLazybuBendroves() {
		$query = "  SELECT *
					FROM `{$this->lazybu_bendroves_lentele}`";
		$data = mysql::select($query);
		
		return $data;
	}
	
	/**
	 * Markių sąrašo išrinkimas
	 * @param type $limit
	 * @param type $offset
	 * @return type
	 */
	public function getBrandList($limit = null, $offset = null) {
		$limitOffsetString = "";
		if(isset($limit)) {
			$limitOffsetString .= " LIMIT {$limit}";
			
			if(isset($offset)) {
				$limitOffsetString .= " OFFSET {$offset}";
			}	
		}
		
		$query = "  SELECT *
					FROM {$this->markes_lentele}{$limitOffsetString}";
		$data = mysql::select($query);
		
		return $data;
	}

	/**
	 * Markių kiekio radimas
	 * @return type
	 */
	public function getBrandListCount() {
		$query = "  SELECT COUNT(`id`) as `kiekis`
					FROM {$this->markes_lentele}";
		$data = mysql::select($query);
		
		return $data[0]['kiekis'];
	}
	
	/**
	 * Markės įrašymas
	 * @param type $data
	 */
	public function insertBrand($data) {
		$query = "  INSERT INTO {$this->markes_lentele}
								(
									`id`,
									`vardas`,
									`pavarde`,
									`telefonas`,
									`e_pastas`,
									`fk_LAZYBU_BENDROVE`
								)
								VALUES
								(
									'{$data['id']}',
									'{$data['vardas']}',
									'{$data['pavarde']}',
									'{$data['telefonas']}',
									'{$data['e_pastas']}',
									'{$data['fk_LAZYBU_BENDROVE']}'
								)";
		mysql::query($query);
	}
	
	/**
	 * Markės atnaujinimas
	 * @param type $data
	 */
	public function updateBrand($data) {
		$query = "  UPDATE {$this->markes_lentele}
					SET    `id`='{$data['id']}',
					`vardas`='{$data['vardas']}',
					`pavarde`='{$data['pavarde']}',
					`telefonas`='{$data['telefonas']}',
					`e_pastas`='{$data['e_pastas']}',
					`fk_LAZYBU_BENDROVE`='{$data['fk_LAZYBU_BENDROVE']}'
					WHERE `id`='{$data['id']}'";
		mysql::query($query);
	}
	
	/**
	 * Markės šalinimas
	 * @param type $id
	 */
	public function deleteBrand($id) {
		$query = "  DELETE FROM {$this->markes_lentele}
					WHERE `id`='{$id}'";
		mysql::query($query);
	}
	
	/**
	 * Markės modelių kiekio radimas
	 * @param type $id
	 * @return type
	 */
	public function getModelCountOfBrand($id) {
		$query = "  SELECT COUNT({$this->modeliai_lentele}.`id`) AS `kiekis`
					FROM {$this->markes_lentele}
						INNER JOIN {$this->modeliai_lentele}
							ON {$this->markes_lentele}.`id`={$this->modeliai_lentele}.`fk_marke`
					WHERE {$this->markes_lentele}.`id`='{$id}'";
		$data = mysql::select($query);
		
		return $data[0]['kiekis'];
	}

	
}