<?php

class BaseModel
{
	public static $dbh;
	//connect to db
	public static function setDbh($pdoDbh) {
		self::$dbh = $pdoDbh;
	}
	// if we get an array set all its keys and values to var
	public function __construct(array $attributes = null) {
		// dont do anything if we dont get an parameter.
		if ($attributes === null) return;
		// loop through our array set the keys and vlaues to our class variables
		foreach ($attributes as $key => $value) {
				$this->$key = $value;
		}
	}
	// does the same as constructor func but can get called with out creating a new object
	public function attributes(array $attributes = null){
		if ($attributes === null) return;
		foreach ($attributes as $key => $value) {
				$this->$key = $value;
		}
	}
	// get all items
	public static function all() {
		// Gets the name of the class its being called from
		$class = get_called_class();
		// Get the constant table_name
		$table = $class::TABLE_NAME;
		// Prepares a mysql connection, select all from the table name of the calss it being called from.
		$statement = self::$dbh->prepare("SELECT * FROM $table");
		$statement->execute();
		/*returns an array containing all of the rows.
		Each row is an object and the columns properties of the object*/
		return $statement->fetchAll(PDO::FETCH_CLASS, $class);
	}

	// find one item
	public static function find($id) {
		$class = get_called_class();
		$table = $class::TABLE_NAME;
		$statement = self::$dbh->prepare("SELECT * FROM $table WHERE id=:id and userID = " .$_SESSION['is_authenticated']. " LIMIT 1");
		// set fetch mode so we get objects
		$statement->setFetchMode(PDO::FETCH_CLASS, $class);
		//execute and set the id to the "real" id
		$statement->execute(array('id' => $id));
		// returnes one row with objects
		return $statement->fetch(PDO::FETCH_CLASS);
	}

	// removes this object  
	public function remove(){
		$class = get_called_class();
		$table = $class::TABLE_NAME;
		$statement = self::$dbh->prepare(
				"DELETE FROM ".$table." WHERE id=:id");
		$statement->execute(array('id' => $this->id));
	}
}
?>