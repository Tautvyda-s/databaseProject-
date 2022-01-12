<?php
/**
 * Darbuotojų redagavimo klasė
 *
 * @author ISK
 */

class employees {
	
	private $darbuotojai_lentele = '';
	private $sutartys_lentele = '';
	
	public function __construct() {
		$this->darbuotojai_lentele = config::DB_PREFIX . 'lazybu_bendroves';
		$this->sutartys_lentele = config::DB_PREFIX . 'sutartys';
	}
	
	/**
	 * Darbuotojo išrinkimas
	 * @param type $id
	 * @return type
	 */
	public function getEmployee($id) {
		$query = "  SELECT *
					FROM `{$this->darbuotojai_lentele}`
					WHERE `id_`='{$id}'";
		$data = mysql::select($query);
		
		return $data[0];
	}
	
	/**
	 * Darbuotojų sąrašo išrinkimas
	 * @param type $limit
	 * @param type $offset
	 * @return type
	 */
	public function getEmplyeesList($limit = null, $offset = null) {
		$limitOffsetString = "";
		if(isset($limit)) {
			$limitOffsetString .= " LIMIT {$limit}";
		}
		if(isset($offset)) {
			$limitOffsetString .= " OFFSET {$offset}";
		}
		
		$query = "  SELECT *
					FROM `{$this->darbuotojai_lentele}`" . $limitOffsetString;
		$data = mysql::select($query);
		
		return $data;
	}
	
	/**
	 * Darbuotojų kiekio radimas
	 * @return type
	 */
	public function getEmplyeesListCount() {
		$query = "  SELECT COUNT(`id_`) as `kiekis`
					FROM `{$this->darbuotojai_lentele}`";
		$data = mysql::select($query);
		
		return $data[0]['kiekis'];
	}
	
	/**
	 * Darbuotojo šalinimas
	 * @param type $id
	 */
	public function deleteEmployee($id) {
		$query = "  DELETE FROM `{$this->darbuotojai_lentele}`
					WHERE `id_`='{$id}'";
		mysql::query($query);
	}
	
	/**
	 * Darbuotojo atnaujinimas
	 * @param type $data
	 */
	public function updateEmployee($data) {
		$query = "  UPDATE `{$this->darbuotojai_lentele}`
					SET    `pavadinimas`='{$data['pavadinimas']}',
							`miesto_filialas`='{$data['miesto_filialas']}',
							`adresas`='{$data['adresas']}',
							`telefonas`='{$data['telefonas']}',
							`e_pastas`='{$data['e_pastas']}',
						   	`id_`='{$data['id_']}'
					WHERE `id_`='{$data['id_']}'";
		mysql::query($query);
		//var_dump($query);
		//exit;
	}
	
	/**
	 * Darbuotojo įrašymas
	 * @param type $data
	 */
	public function insertEmployee($data) {
		$query = "  INSERT INTO `{$this->darbuotojai_lentele}`
								(
									`pavadinimas`,
									`miesto_filialas`,
									`adresas`,
									`telefonas`,
									`e_pastas`,
									`id_`
								) 
								VALUES
								(
									'{$data['pavadinimas']}',
									'{$data['miesto_filialas']}',
									'{$data['adresas']}',
									'{$data['telefonas']}',
									'{$data['e_pastas']}',
									'{$data['id_']}'
								)";
		mysql::query($query);
	}
	
	/**
	 * Sutarčių, į kurias įtrauktas darbuotojas, kiekio radimas
	 * @param type $id
	 * @return type
	 */
	public function getContractCountOfEmployee($id) {
		$query = "  SELECT COUNT(`{$this->sutartys_lentele}`.`nr`) AS `kiekis`
					FROM `{$this->darbuotojai_lentele}`
						INNER JOIN `{$this->sutartys_lentele}`
							ON `{$this->darbuotojai_lentele}`.`tabelio_nr`=`{$this->sutartys_lentele}`.`fk_darbuotojas`
					WHERE `{$this->darbuotojai_lentele}`.`tabelio_nr`='{$id}'";
		$data = mysql::select($query);
		
		return $data[0]['kiekis'];
	}
	
}