<?php
/**
 * Automobilių modelių redagavimo klasė
 *
 * @author ISK
 */

class models {
	
	private $markes_lentele = '';
	private $modeliai_lentele = '';
	private $automobiliai_lentele = '';
	
	public function __construct() {
	//	$this->markes_lentele = config::DB_PREFIX . 'markes';
		$this->modeliai_lentele = config::DB_PREFIX . 'klientai';
	//	$this->automobiliai_lentele = config::DB_PREFIX . 'automobiliai';
		$this->darbuotoju_lentele = config::DB_PREFIX . 'darbuotojai';

	}
	
	public function getDarbuotojai() {
		$query = "  SELECT *
					FROM `{$this->darbuotoju_lentele}`";
		$data = mysql::select($query);
		
		return $data;
	}

	/**
	 * Modelio išrinkimas
	 * @param type $id
	 * @return type
	 */
	public function getModel($asmens_kodas) {
		$query = "  SELECT *
					FROM `{$this->modeliai_lentele}`
					WHERE `asmens_kodas`='{$asmens_kodas}'";
		$data = mysql::select($query);
		
		return $data[0];
	}
	
	/**
	 * Modelių sąrašo išrinkimas
	 * @param type $limit
	 * @param type $offset
	 * @return type
	 */
	public function getModelList($limit = null, $offset = null) {
		$limitOffsetString = "";
		if(isset($limit)) {
			$limitOffsetString .= " LIMIT {$limit}";
			
			if(isset($offset)) {
				$limitOffsetString .= " OFFSET {$offset}";
			}	
		}
		
		$query = "  SELECT *
					FROM {$this->modeliai_lentele}{$limitOffsetString}";
		$data = mysql::select($query);
		
		//debug_to_console($data);
		return $data;
		
		//var_dump($data);
		//exit;
	}

	/**
	 * Modelių kiekio radimas
	 * @return type
	 */
	public function getModelListCount() {
		$query = "  SELECT COUNT(`asmens_kodas`) as `kiekis`
					FROM {$this->modeliai_lentele}";
		$data = mysql::select($query);
		
		return $data[0]['kiekis'];
	}
	
	/**
	 * Modelių išrinkimas pagal markę
	 * @param type $brandId
	 * @return type
	 */
	
	
	/**
	 * Modelio atnaujinimas
	 * @param type $data
	 */
	public function updateModel($data) {
		$query = "  UPDATE `{$this->modeliai_lentele}`
					SET    `asmens_kodas`='{$data['asmens_kodas']}',
						   `vardas`='{$data['vardas']}',
						   `pavarde`='{$data['pavarde']}',
						   `lytis`='{$data['lytis']}',
						   `gimimo_metai`='{$data['gimimo_metai']}',
						   `adresas`='{$data['adresas']}',
						   `telefonas`='{$data['telefonas']}',
						   `e_pastas`='{$data['e_pastas']}',
						   `fk_DARBUOTOJAS`='{$data['fk_DARBUOTOJAS']}'
						   
					WHERE `asmens_kodas`='{$data['asmens_kodas']}'";
		mysql::query($query);
		//var_dump($query);
		//exit;
	}
	
	/**
	 * Modelio įrašymas
	 * @param type $data
	 */
	public function insertModel($data) {
		$query = "  INSERT INTO `{$this->modeliai_lentele}`
								(
									`asmens_kodas`,
									`vardas`,
									`pavarde`,
									`lytis`,
									`gimimo_metai`,
									`adresas`,
									`telefonas`,
									`e_pastas`,
									`fk_DARBUOTOJAS`
								)
								VALUES
								(
									'{$data['asmens_kodas']}',
									'{$data['vardas']}',
									'{$data['pavarde']}',
									'{$data['lytis']}',
									'{$data['gimimo_metai']}',
									'{$data['adresas']}',
									'{$data['telefonas']}',
									'{$data['e_pastas']}',
									'{$data['fk_DARBUOTOJAS']}'
								)";
		mysql::query($query);
	
	}
	
	/**
	 * Modelio šalinimas
	 * @param type $id
	 */
	public function deleteModel($asmens_kodas) {
		$query = "  DELETE FROM `{$this->modeliai_lentele}`
					WHERE `asmens_kodas`='{$asmens_kodas}'";
		mysql::query($query);
	}
	
	public function getCarCountOfModel($id) {
		$query = "  SELECT COUNT(`{$this->automobiliai_lentele}`.`id`) AS `kiekis`
					FROM `{$this->modeliai_lentele}`
						INNER JOIN `{$this->automobiliai_lentele}`
							ON `{$this->modeliai_lentele}`.`id`=`{$this->automobiliai_lentele}`.`fk_modelis`
					WHERE `{$this->modeliai_lentele}`.`id`='{$id}'";
		$data = mysql::select($query);
		
		return $data[0]['kiekis'];
	}
	
	
}