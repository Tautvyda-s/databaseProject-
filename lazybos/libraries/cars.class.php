<?php
/**
 * Automobilių redagavimo klasė
 *
 * @author ISK
 */

class cars {

	private $markes_lentele = '';
	private $modeliai_lentele = '';
	private $automobiliai_lentele = '';
	private $auto_busenos_lentele = '';
	private $sutartys_lentele = '';
	private $degalu_tipai_lentele = '';
	private $kebulu_tipai_lentele = '';
	private $pavaru_dezes_lentele = '';
	private $lagaminai_lentele = '';
	
	public function __construct() {
		$this->markes_lentele = config::DB_PREFIX . 'markes';
		$this->modeliai_lentele = config::DB_PREFIX . 'modeliai';
		$this->automobiliai_lentele = config::DB_PREFIX . 'saskaitos';
		$this->auto_busenos_lentele = config::DB_PREFIX . 'auto_busenos';
		$this->sutartys_lentele = config::DB_PREFIX . 'sutartys';
		$this->degalu_tipai_lentele = config::DB_PREFIX . 'degalu_tipai';
		$this->kebulu_tipai_lentele = config::DB_PREFIX . 'kebulu_tipai';		
		$this->pavaru_dezes_lentele = config::DB_PREFIX . 'pavaru_dezes';
		$this->lagaminai_lentele = config::DB_PREFIX . 'lagaminai';
		$this->statymai_lentele = config::DB_PREFIX . 'statymai';
	}
	
	public function getStatymai() {
		$query = "  SELECT *
					FROM `{$this->statymai_lentele}`";
		$data = mysql::select($query);
		
		return $data;
	}


	/**
	 * Automobilio išrinkimas
	 * @param type $id
	 * @return type
	 */
	public function getCar($id) {
		$query = "  SELECT `{$this->automobiliai_lentele}`.`id`,
						   `{$this->automobiliai_lentele}`.`data`,
						   `{$this->automobiliai_lentele}`.`laikas`,
						   `{$this->automobiliai_lentele}`.`suma`,
						   `{$this->automobiliai_lentele}`.`fk_STATYMAS`
					FROM `{$this->automobiliai_lentele}`
					WHERE `{$this->automobiliai_lentele}`.`id`='{$id}'";
		$data = mysql::select($query);
		
		return $data[0];
	}
	
	/**
	 * Automobilio atnaujinimas
	 * @param type $data
	 */
	public function updateCar($data) {
		$query = "  UPDATE `{$this->automobiliai_lentele}`
					SET    `id`='{$data['id']}',
						   `data`='{$data['data']}',
						   `laikas`='{$data['laikas']}',
						   `suma`='{$data['suma']}',
						   `fk_STATYMAS`='{$data['fk_STATYMAS']}'
					WHERE `id`='{$data['id']}'";
		mysql::query($query);
	}

	/**
	 * Automobilio įrašymas
	 * @param type $data
	 */
	public function insertCar($data) {
		$query = "  INSERT INTO `{$this->automobiliai_lentele}` 
								(
									`id`,
									`data`,
									`laikas`,
									`suma`,
									`fk_STATYMAS`
								) 
								VALUES
								(
									'{$data['id']}',
									'{$data['data']}',
									'{$data['laikas']}',
									'{$data['suma']}',
									'{$data['fk_STATYMAS']}'
								)";
		mysql::query($query);
		
	}
	
	/**
	 * Automobilių sąrašo išrinkimas
	 * @param type $limit
	 * @param type $offset
	 * @return type
	 */
	public function getCarList($limit = null, $offset = null) {
		$limitOffsetString = "";
		if(isset($limit)) {
			$limitOffsetString .= " LIMIT {$limit}";
			
			if(isset($offset)) {
				$limitOffsetString .= " OFFSET {$offset}";
			}	
		}
		
		$query = "  SELECT *
					FROM {$this->automobiliai_lentele}{$limitOffsetString}";
		$data = mysql::select($query);
		
		return $data;
	}

	/**
	 * Automobilių kiekio radimas
	 * @return type
	 */
	
	
	public function getCarListCount() {
		$query = "  SELECT COUNT(`id`) as `kiekis`
					FROM {$this->automobiliai_lentele}";
		$data = mysql::select($query);
		
		return $data[0]['kiekis'];
	}

	/**
	 * Automobilio šalinimas
	 * @param type $id
	 */
	public function deleteCar($id) {
		$query = "  DELETE FROM `{$this->automobiliai_lentele}`
					WHERE `id`='{$id}'";
		mysql::query($query);
	}
	
	/**
	 * Sutačių, į kurias įtrauktas automobilis, kiekio radimas
	 * @param type $id
	 * @return type
	 */
	public function getContractCountOfCar($id) {
		$query = "  SELECT COUNT(`{$this->sutartys_lentele}`.`nr`) AS `kiekis`
					FROM `{$this->automobiliai_lentele}`
						INNER JOIN `{$this->sutartys_lentele}`
							ON `{$this->automobiliai_lentele}`.`id`=`{$this->sutartys_lentele}`.`fk_automobilis`
					WHERE `{$this->automobiliai_lentele}`.`id`='{$id}'";
		$data = mysql::select($query);
		
		return $data[0]['kiekis'];
	}
	
	/**
	 * Pavarų dėžių sąrašo išrinkimas
	 * @return type
	 */
	public function getGearboxList() {
		$query = "  SELECT *
					FROM `{$this->pavaru_dezes_lentele}`";
		$data = mysql::select($query);
		
		return $data;
	}
	
	/**
	 * Degalų tipo sąrašo išrinkimas
	 * @return type
	 */
	public function getFuelTypeList() {
		$query = "  SELECT *
					FROM `{$this->degalu_tipai_lentele}`";
		$data = mysql::select($query);
		
		return $data;
	}

	/**
	 * Kėbulo tipų sąrašo išrinkimas
	 * @return type
	 */
	public function getBodyTypeList() {
		$query = "  SELECT *
					FROM `{$this->kebulu_tipai_lentele}`";
		$data = mysql::select($query);
		
		return $data;
	}

	/**
	 * Bagažo tipų sąrašo išrinkimas
	 * @return type
	 */
	public function getLugageTypeList() {
		$query = "  SELECT *
					FROM `{$this->lagaminai_lentele}`";
		$data = mysql::select($query);
		
		return $data;
	}

	/**
	 * Automobilio būsenų sąrašo išrinkimas
	 * @return type
	 */
	public function getCarStateList() {
		$query = "  SELECT *
					FROM `{$this->auto_busenos_lentele}`";
		$data = mysql::select($query);
		
		return $data;
	}
	
}