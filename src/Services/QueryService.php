<?php
namespace App\Services;

use App\Beans\Action;
use App\Beans\ActionDefinition;
use App\Beans\Activity;
use App\Beans\ActivityType;
use App\Beans\FeatureType;
use App\Beans\Person;
use App\Beans\PersonFeature;
use App\Exception\DatabaseException;
use App\Traits\LoggerAwareTrait;
use DateTime;
use Exception;
use PDO;
use PDOException;
use stdClass;

class QueryService {
    private $dbConnection;
    private $dateFormat= 'm/d/Y';

	use LoggerAwareTrait;

    public function __construct(ConnectionService $conn) {
        // Initialize the database connection using PDO
        $this->dbConnection = $conn->getConnection();// (new \App\Services\DBConnection())->getConnection(); //PDO('mysql:host=localhost;dbname=your_database', 'username', 'password');
        //$this->dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->dateFormat = 'm/d/Y';  // Equivalent of SimpleDateFormat in Java
    }
	public function getPersons($id) : ?array {
		$list = [];
		$personStmt = "
			SELECT id, firstName, lastName, login, password, newsAdmin, userAdmin, timeAdmin, copAdmin, 
				   addressLine1, addressLine2, city, state, postal, phone, carrier, email, birthMonth, birthDay, 
				   emergencyContactName, emergencyContactPhone, joinDate, renewYear, status 
			FROM person 
			WHERE (id = :id OR :id_neg < 0)
			ORDER BY lastName";
	
		try {
			$stmt = $this->dbConnection->prepare($personStmt);
			$stmt->bindValue(':id', $id);
			$stmt->bindValue(':id_neg', $id);
			$stmt->execute();
			
			while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
				$p = new Person();
				$p->setId($row['id']);
				$p->setFirstName($row['firstName']);
				$p->setLastName($row['lastName']);
				$p->setLogin($row['login']);
				$p->setPassword($row['password']);
				$p->setNewsAdmin(boolval($row['newsAdmin']));
				$p->setUserAdmin(boolval($row['userAdmin']));
				$p->setTimeAdmin(boolval($row['timeAdmin']));
				$p->setCopAdmin($row['copAdmin']);
				$p->setAddressLine1($row['addressLine1']);
				$p->setAddressLine2($row['addressLine2']);
				$p->setCity($row['city']);
				$p->setState($row['state']);
				$p->setPostal($row['postal']);
				$p->setPhone($row['phone']);
				$p->setCarrier($row['carrier']);
				$p->setEmail($row['email']);
				$p->setBirthMonth($row['birthMonth']);
				$p->setBirthDay($row['birthDay']);
				$p->setEmergencyContact($row['emergencyContactName']);
				$p->setEmergencyContactPhone($row['emergencyContactPhone']);
				$p->setJoinDate($row['joinDate'] ? new DateTime($row['joinDate']) : null);
				$p->setRenewYear($row['renewYear']);
				$p->setStatus($row['status']);
				$p->setFeatures($this->getPersonFeatures($row['id']));
				
				$list[] = $p;  // Adding the person data to the list
				unset($p);
			}
		} catch (Exception $e) {
			throw new DatabaseException("DBError:" . __METHOD__ . " Message:" . $e->getMessage() ,previous:$e);
		}
		
		return $list;
	}
	public function getActivityTypes() : ?array{
		$activityTypes = [];
		$activityStmt = "
			SELECT id, name, stat 
			FROM activityType";
	
		try {
			$stmt = $this->dbConnection->prepare($activityStmt);
			$stmt->execute();
	
			while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
				$activityType = new ActivityType();
				$activityType->setId($row['id']);
				$activityType->setName($row['name']);
				$activityType->setStat($row['stat']);
				$activityTypes[] = $row;  // Add activity type to the array
			}
		} catch (PDOException $e) {
			throw new DatabaseException("DBError:" . __METHOD__ . " Message:" . $e->getMessage() ,previous:$e);
		}
	
		return $activityTypes;
	}
	public function getDocumentCategories() {
		$documentCategories = [];
		$documentCategoryStmt = "
			SELECT id, name 
			FROM document_category";
	
		try {
			$stmt = $this->dbConnection->prepare($documentCategoryStmt);
			$stmt->execute();
	
			while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
				$documentCategories[] = $row;  // Add document category to the array
			}
		} catch (PDOException $e) {
			throw new DatabaseException("DBError:" . __METHOD__ . " Message:" . $e->getMessage() ,previous:$e);
		}
		return $documentCategories;
	}
	public function getDocuments() {
		$documents = [];
		$documentStmt = "
			SELECT id, title, content 
			FROM document";
	
		try {
			$stmt = $this->dbConnection->prepare($documentStmt);
			$stmt->execute();
	
			while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
				$documents[] = $row;  // Add document to the array
			}
		} catch (PDOException $e) {
			throw new DatabaseException("DBError:" . __METHOD__ . " Message:" . $e->getMessage() ,previous:$e);
		}
	
		return $documents;
	}
	public function getFeatureTypes() : ?array {
		$featureTypes = [];
		$featureTypeStmt = "
			SELECT id, name 
			FROM featureTypes";
	
		try {
			$stmt = $this->dbConnection->prepare($featureTypeStmt);
			$stmt->execute();
	
			while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
				$featureType = new FeatureType();
				$featureType->setId($row['id']);
				$featureType->setName($row['name']);
				$featureTypes[] = $featureType;  // Add feature type to the array
				$featureType = null;
			}
		} catch (PDOException $e) {
			throw new DatabaseException("DBError:" . __METHOD__ . " Message:" . $e->getMessage() ,previous:$e);
		}
	
		return $featureTypes;
	}
	public function updatePerson(Person $person) {
		$updateStmt = "
			UPDATE person 
			SET firstName = :firstName, lastName = :lastName, login = :login, password = :password, newsAdmin = :newsAdmin, 
				userAdmin = :userAdmin, timeAdmin = :timeAdmin, copAdmin = :copAdmin, addressLine1 = :addressLine1, 
				addressLine2 = :addressLine2, city = :city, state = :state, postal = :postal, phone = :phone, carrier = :carrier, 
				email = :email, birthMonth = :birthMonth, birthDay = :birthDay, emergencyContactName = :emergencyContactName, 
				emergencyContactPhone = :emergencyContactPhone, joinDate = :joinDate, renewYear = :renewYear, status = :status 
			WHERE id = :id";
	
		try {
			$stmt = $this->dbConnection->prepare($updateStmt);
	
			// Binding parameters
			$stmt->bindValue(':firstName', $person->getFirstName(), PDO::PARAM_STR);
			$stmt->bindValue(':lastName', $person->getLastName(), PDO::PARAM_STR);
			$stmt->bindValue(':login', $person->getLogin(), PDO::PARAM_STR);
			$stmt->bindValue(':password', $person->getPassword(), PDO::PARAM_STR);
			$stmt->bindValue(':newsAdmin', $person->isNewsAdmin(), PDO::PARAM_BOOL);
			$stmt->bindValue(':userAdmin', $person->isUserAdmin(), PDO::PARAM_BOOL);
			$stmt->bindValue(':timeAdmin', $person->isTimeAdmin(), PDO::PARAM_BOOL);
			$stmt->bindValue(':copAdmin', $person->isCopAdmin(), PDO::PARAM_BOOL);
			$stmt->bindValue(':addressLine1', $person->getAddressLine1(), PDO::PARAM_STR);
			$stmt->bindValue(':addressLine2', $person->getAddressLine2(), PDO::PARAM_STR);
			$stmt->bindValue(':city', $person->getCity(), PDO::PARAM_STR);
			$stmt->bindValue(':state', $person->getState(), PDO::PARAM_STR);
			$stmt->bindValue(':postal', $person->getPostal(), PDO::PARAM_STR);
			$stmt->bindValue(':phone', $person->getPhone(), PDO::PARAM_STR);
			$stmt->bindValue(':carrier', $person->getCarrier(), PDO::PARAM_STR);
			$stmt->bindValue(':email', $person->getEmail(), PDO::PARAM_STR);
			$stmt->bindValue(':birthMonth', $person->getBirthMonth(), PDO::PARAM_STR);
			$stmt->bindValue(':birthDay', $person->getBirthDay(), PDO::PARAM_INT);
			$stmt->bindValue(':emergencyContactName', $person->getEmergencyContact(), PDO::PARAM_STR);
			$stmt->bindValue(':emergencyContactPhone', $person->getEmergencyContactPhone(), PDO::PARAM_STR);
			$stmt->bindValue(':joinDate', $person->getJoinDate()->format(\App\Entity\Constants::DATE_FORMAT), PDO::PARAM_STR);  // Assuming date is passed as a string
			$stmt->bindValue(':renewYear', $person->getRenewYear(), PDO::PARAM_INT);
			$stmt->bindValue(':status', $person->getStatus(), PDO::PARAM_STR);
			$stmt->bindValue(':id', $person->getId(), PDO::PARAM_INT);
	
			$rows = $stmt->execute();
			return $rows > 0;  // Return true if any rows were updated
		} catch (PDOException $e) {
			throw new DatabaseException("DBError:" . __METHOD__ . " Message:" . $e->getMessage() ,previous:$e);
		}
	}
	public function deletePerson($id) {
		$deleteStmt = "
			DELETE FROM person 
			WHERE id = :id";
	
		try {
			$stmt = $this->dbConnection->prepare($deleteStmt);
			$stmt->bindValue(':id', $id, PDO::PARAM_INT);
	
			$rows = $stmt->execute();
			return $rows > 0;  // Return true if any rows were deleted
		} catch (PDOException $e) {
			throw new DatabaseException("DBError:" . __METHOD__ . " Message:" . $e->getMessage() ,previous:$e);
		}
	}
	public function getPersonFeatures($personId): array {
		$sql = "
			SELECT personFeature.id, featureId, featureTypes.name as featureName, featureDate, featureLabel
			FROM personFeature
			JOIN featureTypes ON personFeature.featureId = featureTypes.id
			WHERE personFeature.personId = :personId";

		$stmt = $this->dbConnection->prepare($sql);
		$stmt->bindValue('personId', $personId);
		$stmt->execute();

		$features = [];
		while ($row = $stmt->fetch()) {
			$feature = new PersonFeature();
			$feature->setId((int)$row['id']);
			$feature->setFeatureId($row['featureId']);
			$feature->setFeatureName($row['featureName']);
			$feature->setFeatureDate(new DateTime($row['featureDate'] ? $row['featureDate'] : '0000-01-01'));
			$feature->setFeatureLabel($row['featureLabel']);
			$features[] = $feature;
		}

		return $features;
	}
	public function updatePersonAdmin(Person $person) {
		$updateStmt = "
			UPDATE person 
			SET joinDate = :joinDate, renewYear = :renewYear, newsAdmin = :newsAdmin, userAdmin = :userAdmin, 
				timeAdmin = :timeAdmin, copAdmin = :copAdmin, status = :status 
			WHERE id = :id";
	
		try {
			$stmt = $this->dbConnection->prepare($updateStmt);
	
			// Binding parameters
			$stmt->bindValue(':joinDate', $person->getJoinDate()->format(\App\Entity\Constants::DATE_FORMAT), PDO::PARAM_STR);  // Assuming date is passed as a string
			$stmt->bindValue(':renewYear', $person->getRenewYear(), PDO::PARAM_INT);
			$stmt->bindValue(':newsAdmin', $person->isNewsAdmin(), PDO::PARAM_BOOL);
			$stmt->bindValue(':userAdmin', $person->isUserAdmin(), PDO::PARAM_BOOL);
			$stmt->bindValue(':timeAdmin', $person->isTimeAdmin(), PDO::PARAM_BOOL);
			$stmt->bindValue(':copAdmin', $person->isCopAdmin(), PDO::PARAM_BOOL);
			$stmt->bindValue(':status', $person->getStatus(), PDO::PARAM_STR);
			$stmt->bindValue(':id', $person->getId(), PDO::PARAM_INT);
	
			$rows = $stmt->execute();
			return $rows > 0;  // Return true if any rows were updated
		} catch (PDOException $e) {
			throw new DatabaseException("DBError:" . __METHOD__ . " Message:" . $e->getMessage() ,previous:$e);
		}
	}
	public function updatePersonAccess(Person $person) {
		$updateStmt = "
			UPDATE person 
			SET password = :password 
			WHERE id = :id";
	
		try {
			$stmt = $this->dbConnection->prepare($updateStmt);
	
			// Binding parameters
			$stmt->bindValue(':password', $person->getPassword(), PDO::PARAM_STR);
			$stmt->bindValue(':id', $person->getId(), PDO::PARAM_INT);
	
			$rows = $stmt->execute();
			return $rows > 0;  // Return true if any rows were updated
		} catch (PDOException $e) {
			throw new DatabaseException("DBError:" . __METHOD__ . " Message:" . $e->getMessage() ,previous:$e);
		}
	}
	public function insertPerson(Person $person) {
		$id = -1;
		$insertStmt = "
			INSERT INTO person 
			(firstName, lastName, login, addressLine1, addressLine2, city, state, postal, phone, carrier, email, birthMonth, birthDay, emergencyContactName, emergencyContactPhone, joinDate, renewYear, status) 
			VALUES (:firstName, :lastName, :login, :addressLine1, :addressLine2, :city, :state, :postal, :phone, :carrier, :email, :birthMonth, :birthDay, :emergencyContactName, :emergencyContactPhone, :joinDate, :renewYear, :status)";
	
		try {
			$stmt = $this->dbConnection->prepare($insertStmt);
	
			// Binding parameters
			$stmt->bindValue(':firstName', $person->getFirstName(), PDO::PARAM_STR);
			$stmt->bindValue(':lastName', $person->getLastName(), PDO::PARAM_STR);
			$stmt->bindValue(':login', $person->getLogin(), PDO::PARAM_STR);
			$stmt->bindValue(':addressLine1', $person->getAddressLine1(), PDO::PARAM_STR);
			$stmt->bindValue(':addressLine2', $person->getAddressLine2(), PDO::PARAM_STR);
			$stmt->bindValue(':city', $person->getCity(), PDO::PARAM_STR);
			$stmt->bindValue(':state', $person->getState(), PDO::PARAM_STR);
			$stmt->bindValue(':postal', $person->getPostal(), PDO::PARAM_STR);
			$stmt->bindValue(':phone', $person->getPhone(), PDO::PARAM_STR);
			$stmt->bindValue(':carrier', $person->getCarrier(), PDO::PARAM_STR);
			$stmt->bindValue(':email', $person->getEmail(), PDO::PARAM_STR);
			$stmt->bindValue(':birthMonth', $person->getBirthMonth(), PDO::PARAM_STR);
			$stmt->bindValue(':birthDay', $person->getBirthDay(), PDO::PARAM_INT);
			$stmt->bindValue(':emergencyContactName', $person->getEmergencyContact(), PDO::PARAM_STR);
			$stmt->bindValue(':emergencyContactPhone', $person->getEmergencyContactPhone(), PDO::PARAM_STR);
			$stmt->bindValue(':joinDate', $person->getJoinDate()->format(\App\Entity\Constants::DATE_FORMAT), PDO::PARAM_STR);  // Assuming date is passed as a string
			$stmt->bindValue(':renewYear', $person->getRenewYear(), PDO::PARAM_INT);
			$stmt->bindValue(':status', $person->getStatus(), PDO::PARAM_STR);
	
			$stmt->execute();
	
			// Fetching the last inserted ID
			$id = $this->dbConnection->lastInsertId();
		} catch (PDOException $e) {
			throw new DatabaseException("DBError:" . __METHOD__ . " Message:" . $e->getMessage() ,previous:$e);
		}
	
		return $id;  // Returning the new person's ID
	}
	public function insertPersonFeature($personId, $feature) {
		$insertStmt = "
			INSERT INTO personFeature (personId, featureId, featureDate, featureLabel) 
			VALUES (:personId, :featureId, :featureDate, :featureLabel)";
	
		try {
			$stmt = $this->dbConnection->prepare($insertStmt);
	
			// Binding parameters
			$stmt->bindValue(':personId', $personId, PDO::PARAM_INT);
			$stmt->bindValue(':featureId', $feature['featureId'], PDO::PARAM_INT);
			$stmt->bindValue(':featureDate', $feature['featureDate'], PDO::PARAM_STR);  // Assuming date as a string
			$stmt->bindValue(':featureLabel', $feature['featureLabel'], PDO::PARAM_STR);
	
			$rows = $stmt->execute();
			return $rows > 0;  // Return true if the insert was successful
		} catch (PDOException $e) {
			throw new DatabaseException("DBError:" . __METHOD__ . " Message:" . $e->getMessage() ,previous:$e);
		}
	}
	public function updatePersonFeature($feature) {
		$updateStmt = "
			UPDATE personFeature 
			SET featureDate = :featureDate, featureLabel = :featureLabel 
			WHERE featureId = :featureId";
	
		try {
			$stmt = $this->dbConnection->prepare($updateStmt);
	
			// Binding parameters
			$stmt->bindValue(':featureDate', $feature['featureDate'], PDO::PARAM_STR);  // Assuming date as a string
			$stmt->bindValue(':featureLabel', $feature['featureLabel'], PDO::PARAM_STR);
			$stmt->bindValue(':featureId', $feature['featureId'], PDO::PARAM_INT);
	
			$rows = $stmt->execute();
			return $rows > 0;  // Return true if any rows were updated
		} catch (PDOException $e) {
			throw new DatabaseException("DBError:" . __METHOD__ . " Message:" . $e->getMessage() ,previous:$e);
		}
	}
	public function deletePersonFeature($id) {
		$deleteStmt = "
			DELETE FROM personFeature 
			WHERE id = :id";
	
		try {
			$stmt = $this->dbConnection->prepare($deleteStmt);
			$stmt->bindValue(':id', $id, PDO::PARAM_INT);
	
			$result = $stmt->execute();
			return $result;  // Return true if deleted successfully
		} catch (PDOException $e) {
			throw new DatabaseException("DBError:" . __METHOD__ . " Message:" . $e->getMessage() ,previous:$e);
		}
	}
	public function getActivities($personId, DateTime $since) :?array{
		$list = [];
		$activityStmt = "
			SELECT activity.id as id, activity.activityTypeId as activityTypeId, activityType.name name, note, personId, 
			person.firstName as firstName, person.lastName as lastName, day, YEAR(day) year, MONTH(day) month, hours 
			FROM activity, activityType, person 
			WHERE day > :since 
			AND activity.activityTypeId = activityType.id 
			AND activity.personId = person.id 
			AND (:personId = 0 OR :personId = person.id) 
			ORDER BY day DESC";
	
		try {
			$stmt = $this->dbConnection->prepare($activityStmt);
			$stmt->bindValue(':since', $since->format(\App\Entity\Constants::DATE_FORMAT), PDO::PARAM_STR);  // Assuming $since is a date in string format
			$stmt->bindValue(':personId', $personId, PDO::PARAM_INT);
			$stmt->execute();
	
			while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
				$activity = new Activity();
				$activity->setId($row['id']);
				$activity->setNote($row['note']);
				$activity->setActivityName($row['name']);
				$activity->setPersonName($row['lastName'] . ", " . $row['firstName']);
				$activity->setActivityId($row['activityTypeId']);
				$activity->setPersonId($row['personId']);
				$activity->setYear($row['year']);
				$activity->setMonth($row['month']);
				$activity->setDay($row['day'] ? new DateTime($row['day']): new DateTime('0000-01-01'));
				$activity->setHours($row['hours'] ? $row['hours'] : 0);
				
				$list[] = $activity;  // Add activity to the array
			}
		} catch (PDOException $e) {
			throw new DatabaseException("DBError:" . __METHOD__ . " Message:" . $e->getMessage() ,previous:$e);
		}
	
		return $list;
	}
	public function getActivityTotals(DateTime $start, DateTime $end) {
		$list = [];
		$activityStmt = "
			SELECT activity.id, activity.activityTypeId, activityType.name, YEAR(day) as Year, MONTH(day) as Month, SUM(hours) as Hours
			FROM activity, activityType 
			WHERE activity.activityTypeId = activityType.id 
			AND day BETWEEN :start AND :end 
			GROUP BY activity.id, activity.activityTypeId, activityType.name
			ORDER BY activity.activityTypeId, YEAR(day), MONTH(day)";
	
		try {
			$stmt = $this->dbConnection->prepare($activityStmt);
			$stmt->bindValue(':start', $start->format(\App\Entity\Constants::DATE_FORMAT), PDO::PARAM_STR);  // Assuming date passed as a string
			$stmt->bindValue(':end', $end->format(\App\Entity\Constants::DATE_FORMAT), PDO::PARAM_STR);  // Assuming date passed as a string
			$stmt->execute();
	
			while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
				$list[] = $row;  // Add activity total to the array
			}
		} catch (PDOException $e) {
			throw new DatabaseException("DBError:" . __METHOD__ . " Message:" . $e->getMessage() ,previous:$e);
		}
	
		return $list;
	}
	public function getPersonTotals($person, $start, $end) {
		$list = [];
		$activityStmt = "
			SELECT 
				person.id as id, person.firstName, person.lastName, 
				activity.activityTypeId as activityTypeId, activityType.name as activityName, 
				YEAR(day) as year, MONTH(day) as month, SUM(hours) as hours
			FROM activity, activityType, person 
			WHERE activity.personId = person.id 
			AND activity.activityTypeId = activityType.id 
			AND (:person = 0 OR :person = person.id) 
			AND activity.day > :start AND activity.day <= :end 
			GROUP BY person.id, person.firstName, person.lastName, activity.activityTypeId,activityType.name, YEAR(day), MONTH(day) 
			ORDER BY person.lastName, person.firstName, activity.activityTypeId";
	
		try {
			$stmt = $this->dbConnection->prepare($activityStmt);
			$stmt->bindValue(':person', $person, PDO::PARAM_INT);
			$stmt->bindValue(':start', $start->format(\App\Entity\Constants::DATE_FORMAT), PDO::PARAM_STR);  // Assuming date is passed as a string
			$stmt->bindValue(':end', $end->format(\App\Entity\Constants::DATE_FORMAT), PDO::PARAM_STR);  // Assuming date is passed as a string
			$stmt->execute();
	
			while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
				$row['personName'] = $row['lastName'] . ", " . $row['firstName'];
				$list[] = $row;  // Add activity total to the array
			}
		} catch (PDOException $e) {
			throw new DatabaseException("DBError:" . __METHOD__ . " Message:" . $e->getMessage() ,previous:$e);
		}
	
		return $list;
	}
	public function getPersonStatus($from) {
		$list = [];
		$activityStmt = "
			SELECT person.firstName, person.lastName, SUM(hours) as hours
			FROM person 
			LEFT OUTER JOIN activity ON (activity.personId = person.id AND activity.day > :from) 
			WHERE person.status = 'M' 
			GROUP BY person.firstName, person.lastName 
			ORDER BY person.lastName, person.firstName";
	
		try {
			$stmt = $this->dbConnection->prepare($activityStmt);
			$stmt->bindValue(':from', $from->format(\App\Entity\Constants::DATE_FORMAT), PDO::PARAM_STR);  // Assuming date is passed as a string
			$stmt->execute();
	
			while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
				$row['personName'] = $row['lastName'] . ", " . $row['firstName'];
				$list[] = $row;  // Add activity status to the array
			}
		} catch (PDOException $e) {
			throw new DatabaseException("DBError:" . __METHOD__ . " Message:" . $e->getMessage() ,previous:$e);
		}
	
		return $list;
	}
	public function getEvents() {
		$list = [];
		$eventStmt = "
			SELECT id, title, description, eventDate 
			FROM event 
			ORDER BY eventDate DESC";
	
		try {
			$stmt = $this->dbConnection->prepare($eventStmt);
			$stmt->execute();
	
			while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
				$list[] = $row;  // Add event to the array
			}
		} catch (PDOException $e) {
			throw new DatabaseException("DBError:" . __METHOD__ . " Message:" . $e->getMessage() ,previous:$e);
		}
	
		return $list;
	}
	public function getEventsByDateRange($start, $end) {
		$list = [];
		$eventStmt = "
			SELECT id, title, description, day, url 
			FROM events 
			WHERE day >= :start AND day < :end 
			ORDER BY day";
	
		try {
			$stmt = $this->dbConnection->prepare($eventStmt);
			$stmt->bindValue(':start', $start, PDO::PARAM_STR);  // Assuming date is passed as a string
			$stmt->bindValue(':end', $end, PDO::PARAM_STR);  // Assuming date is passed as a string
			$stmt->execute();
	
			while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
				$list[] = $row;  // Add event to the array
			}
		} catch (PDOException $e) {
			throw new DatabaseException("DBError:" . __METHOD__ . " Message:" . $e->getMessage() ,previous:$e);
		}
	
		return $list;
	}
	public function updateEvent($event) {
		$updateStmt = "
			UPDATE events 
			SET title = :title, description = :description, day = :day, url = :url 
			WHERE id = :id";
	
		try {
			$stmt = $this->dbConnection->prepare($updateStmt);
	
			// Binding parameters
			$stmt->bindValue(':title', $event['title'], PDO::PARAM_STR);
			$stmt->bindValue(':description', $event['description'], PDO::PARAM_STR);
			$stmt->bindValue(':day', $event['day'], PDO::PARAM_STR);  // Assuming date is passed as a string
			$stmt->bindValue(':url', $event['url'], PDO::PARAM_STR);
			$stmt->bindValue(':id', $event['id'], PDO::PARAM_INT);
	
			$rows = $stmt->execute();
			return $rows > 0;  // Return true if any rows were updated
		} catch (PDOException $e) {
			throw new DatabaseException("DBError:" . __METHOD__ . " Message:" . $e->getMessage() ,previous:$e);
		}
	}
	public function insertEvent($event) {
		$insertStmt = "
			INSERT INTO events (title, description, day, url) 
			VALUES (:title, :description, :day, :url)";
	
		try {
			$stmt = $this->dbConnection->prepare($insertStmt);
	
			// Binding parameters
			$stmt->bindValue(':title', $event['title'], PDO::PARAM_STR);
			$stmt->bindValue(':description', $event['description'], PDO::PARAM_STR);
			$stmt->bindValue(':day', $event['day'], PDO::PARAM_STR);  // Assuming date is passed as a string
			$stmt->bindValue(':url', $event['url'], PDO::PARAM_STR);
	
			$rows = $stmt->execute();
			return $rows > 0;  // Return true if the insert was successful
		} catch (PDOException $e) {
			throw new DatabaseException("DBError:" . __METHOD__ . " Message:" . $e->getMessage() ,previous:$e);
		}
	}
	public function deleteEvent($eventId) {
		$deleteStmt = "
			DELETE FROM events 
			WHERE id = :id";
	
		try {
			$stmt = $this->dbConnection->prepare($deleteStmt);
			$stmt->bindValue(':id', $eventId, PDO::PARAM_INT);
	
			$result = $stmt->execute();
			return $result;  // Return true if the delete was successful
		} catch (PDOException $e) {
			throw new DatabaseException("DBError:" . __METHOD__ . " Message:" . $e->getMessage() ,previous:$e);
		}
	}
	public function deleteActivity($activityId) {
		$deleteStmt = "
			DELETE FROM activity 
			WHERE id = :id";
	
		try {
			$stmt = $this->dbConnection->prepare($deleteStmt);
			$stmt->bindValue(':id', $activityId, PDO::PARAM_INT);
	
			$result = $stmt->execute();
			return $result;  // Return true if the delete was successful
		} catch (PDOException $e) {
			throw new DatabaseException("DBError:" . __METHOD__ . " Message:" . $e->getMessage() ,previous:$e);
		}
	}
	public function insertActivity(Activity $activity) {
		$insertStmt = "
			INSERT INTO activity (personId, activityTypeId, day, hours, note) 
			VALUES (:personId, :activityTypeId, :day, :hours, :note)";
	
		try {
			$stmt = $this->dbConnection->prepare($insertStmt);
	
			// Binding parameters
			$stmt->bindValue(':personId', $activity->getPersonId(), PDO::PARAM_INT);
			$stmt->bindValue(':activityTypeId', $activity->getActivityId(), PDO::PARAM_INT);
			$stmt->bindValue(':day', $activity->getDay()->format(\App\Entity\Constants::DATE_FORMAT), PDO::PARAM_STR);  // Assuming date is passed as a string
			$stmt->bindValue(':hours', $activity->getHours(), PDO::PARAM_STR);
			$stmt->bindValue(':note', $activity->getNote(), PDO::PARAM_STR);
	
			$rows = $stmt->execute();
			return $rows > 0;  // Return true if the insert was successful
		} catch (PDOException $e) {
			throw new DatabaseException("DBError:" . __METHOD__ . " Message:" . $e->getMessage() ,previous:$e);
		}
	}
	public function updateActivity(Activity $activity) {
		$updateStmt = "
			UPDATE activity 
			SET personId = :personId, activityTypeId = :activityTypeId, day = :day, hours = :hours, note = :note 
			WHERE id = :id";
	
		try {
			$stmt = $this->dbConnection->prepare($updateStmt);
	
			// Binding parameters
			$stmt->bindValue(':personId', $activity->getPersonId(), PDO::PARAM_INT);
			$stmt->bindValue(':activityTypeId', $activity->getActivityId(), PDO::PARAM_INT);
			$stmt->bindValue(':day', $activity->getDay()->format(\App\Entity\Constants::DATE_FORMAT), PDO::PARAM_STR);  // Assuming date is passed as a string
			$stmt->bindValue(':hours', $activity->getHours(), PDO::PARAM_STR);
			$stmt->bindValue(':note', $activity->getNote(), PDO::PARAM_STR);
			$stmt->bindValue(':id', $activity->getId(), PDO::PARAM_INT);
	
			$rows = $stmt->execute();
			return $rows > 0;  // Return true if any rows were updated
		} catch (PDOException $e) {
			throw new DatabaseException("DBError:" . __METHOD__ . " Message:" . $e->getMessage() ,previous:$e);
		}
	}
	
	public function insertDocument($document) {
		$insertStmt = "
			INSERT INTO documents (fileName, documentCategory, lastUpdated, lastUpdatedBy) 
			VALUES (:fileName, :documentCategory, :lastUpdated, :lastUpdatedBy)";
	
		try {
			// Clear cache (optional, can implement caching mechanisms if needed)
			//$this->documents = [];
	
			// Prepare and execute statement
			$stmt = $this->dbConnection->prepare($insertStmt);
	
			// Binding parameters
			$stmt->bindValue(':fileName', $document['fileName'], PDO::PARAM_STR);
			$stmt->bindValue(':documentCategory', $document['documentCategory'], PDO::PARAM_INT);
			$stmt->bindValue(':lastUpdated', $document['lastUpdated'], PDO::PARAM_STR);  // Assuming date as a string
			$stmt->bindValue(':lastUpdatedBy', $document['lastUpdatedBy'], PDO::PARAM_INT);
	
			$rows = $stmt->execute();
			return $rows > 0;  // Return true if the insert was successful
		} catch (PDOException $e) {
			throw new DatabaseException("DBError:" . __METHOD__ . " Message:" . $e->getMessage() ,previous:$e);
		}
	}
	public function deleteDocument($docId) {
		$deleteStmt = "
			DELETE FROM documents 
			WHERE id = :id";
	
		try {
			// Clear cache (optional, can implement caching mechanisms if needed)
			//$this->documents = [];
	
			$stmt = $this->dbConnection->prepare($deleteStmt);
			$stmt->bindValue(':id', $docId, PDO::PARAM_INT);
	
			$result = $stmt->execute();
			return $result;  // Return true if the delete was successful
		} catch (PDOException $e) {
			throw new DatabaseException("DBError:" . __METHOD__ . " Message:" . $e->getMessage() ,previous:$e);
		}
	}
	public function getConfig() {
		$config = [];
		$configStmt = "
			SELECT name, value 
			FROM config";
	
		try {
			$stmt = $this->dbConnection->prepare($configStmt);
			$stmt->execute();
	
			while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
				$config[$row['name']] = $row['value'];  // Add config to the array
			}
		} catch (PDOException $e) {
			throw new DatabaseException("DBError:" . __METHOD__ . " Message:" . $e->getMessage() ,previous:$e);
		}
	
		return $config;
	}
	
	public function getActionDefinitions() {
		$list = [];
		$actionDefStmt = "
			SELECT id, name, description, restrictionType, restrictionValue, restrictionDate 
			FROM actionDefinition";
	
		try {
			$stmt = $this->dbConnection->prepare($actionDefStmt);
			$stmt->execute();
	
			while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
				$actionDef = new ActionDefinition();
				$actionDef->setId($row['id']);
				$actionDef->setName($row['name']);
				$actionDef->setDescription($row['description']);
				$actionDef->setRestrictionType($row['restrictionType']);
				$actionDef->setRestrictionValue($row['restrictionValue']);
				$actionDef->setRestrictionDate($row['restrictionDate'] ? new DateTime($row['restrictionDate']) : new DateTime('0000-01-01') );
				$list[] = $actionDef;  // Add action definition to the list
			}
		} catch (PDOException $e) {
			throw new DatabaseException("DBError:" . __METHOD__ . " Message:" . $e->getMessage() ,previous:$e);
		}
		// $this->logInfo("Action def count :" . count($list));
		return $list;
	}
	public function insertActionDefinition(ActionDefinition $actionDefinition) {
		$insertStmt = "
			INSERT INTO actionDefinition (name, description, restrictionType, restrictionValue, restrictionDate) 
			VALUES (:name, :description, :restrictionType, :restrictionValue, :restrictionDate)";
	
		try {
			$stmt = $this->dbConnection->prepare($insertStmt);
	
			// Binding parameters
			$stmt->bindValue(':name', $actionDefinition->getName(), PDO::PARAM_STR);
			$stmt->bindValue(':description', $actionDefinition->getDescription(), PDO::PARAM_STR);
			$stmt->bindValue(':restrictionType', $actionDefinition->getRestrictionType(), PDO::PARAM_INT);
			$stmt->bindValue(':restrictionValue', $actionDefinition->getRestrictionValue(), PDO::PARAM_STR);
			$stmt->bindValue(':restrictionDate', $actionDefinition->getRestrictionDate(), PDO::PARAM_STR);  // Assuming date is passed as a string
	
			$rows = $stmt->execute();
			return $rows > 0;  // Return true if the insert was successful
		} catch (PDOException $e) {
			$this->logError("Error: " . $e->getMessage());
			return false;
		}
	}
	
	public function updateActionDefinition(ActionDefinition $actionDefinition) {
		$updateStmt = "
			UPDATE actionDefinition 
			SET name = :name, description = :description, restrictionType = :restrictionType, 
				restrictionValue = :restrictionValue, restrictionDate = :restrictionDate 
			WHERE id = :id";
	
		try {
			$stmt = $this->dbConnection->prepare($updateStmt);
	
			// Binding parameters
			$stmt->bindValue(':name', $actionDefinition->getName(), PDO::PARAM_STR);
			$stmt->bindValue(':description', $actionDefinition->getDescription(), PDO::PARAM_STR);
			$stmt->bindValue(':restrictionType', $actionDefinition->getRestrictionType(), PDO::PARAM_INT);
			$stmt->bindValue(':restrictionValue', $actionDefinition->getRestrictionValue(), PDO::PARAM_STR);
			if($actionDefinition->getRestrictionDate())
				$stmt->bindValue(':restrictionDate', $actionDefinition->getRestrictionDate()->format(\App\Entity\Constants::DATE_FORMAT), PDO::PARAM_STR);  // Assuming date is passed as a string
			else 
				$stmt->bindValue(':restrictionDate', null, PDO::PARAM_STR); 
			$stmt->bindValue(':id', $actionDefinition->getId(), PDO::PARAM_INT);
	
			$rows = $stmt->execute();
			return $rows > 0;  // Return true if the update was successful
		} catch (PDOException $e) {
			throw new DatabaseException("DBError:" . __METHOD__ . " Message:" . $e->getMessage() ,previous:$e);
		}
	}
	public function getActions($start, $end) {
		$list = [];
		$actionStmt = "
			SELECT action.id, action.actionDefId, actionDefinition.name, day, note, 
				   action_person.personId, person.lastName, person.firstName 
			FROM action 
			LEFT OUTER JOIN (action_person, person) 
			ON (action.id = action_person.actionId AND action_person.personId = person.id), actionDefinition 
			WHERE action.actionDefId = actionDefinition.id 
			AND action.day BETWEEN :start AND :end 
			ORDER BY action.day, action.id";
	
		try {
			// $this->logAlert($start);
			// $this->logAlert($end);
			$stmt = $this->dbConnection->prepare($actionStmt);
			$stmt->bindValue(':start', $start, PDO::PARAM_STR);  // Assuming date is passed as a string
			$stmt->bindValue(':end', $end, PDO::PARAM_STR);  // Assuming date is passed as a string
			$stmt->execute();
	
			$lastAction = -1;
			$action = new Action();
			$persons =[];
			while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
				$currentAction = $row['id'];
				if ($lastAction != $currentAction) {
					if ($lastAction != -1) {
						$action->setPersons($persons);
						$persons=[];
						$list[] = $action;
					}
					$action = new Action();
					$action->setId($row['id']);
					$action->setActionDefinition($row['actionDefId']);
					$action->setActionName($row['name']);
					$action->setDay(new DateTime($row['day']));
					$action->setNote($row['note']);
					$action->setPersons([]);
					$lastAction = $currentAction;
				}
				$person = new stdClass();
				$person->lastName = $row['lastName'];
				$person->firstName = $row['firstName'];	
				$person->id = $row['personId'];
				$persons[] = $person;
			}
			$action->setPersons($persons);
			$list[] = $action;
			
		} catch (PDOException $e) {
			throw new DatabaseException("DBError:" . __METHOD__ . " Message:" . $e->getMessage() ,previous:$e);
		}
	
		return $list;
	}
	public function getAction($actionId) : ?Action {
		$list = [];
		$actionStmt = "
						SELECT action.id, action.actionDefId, actionDefinition.name, day, note, 
							action_person.personId, person.lastName, person.firstName, person.email
						FROM action , actionDefinition , person, action_person
						where action.id = action_person.actionId AND action_person.personId = person.id and action.actionDefId = actionDefinition.id
						and action.id = :id";
	
		try {
			$this->logInfo($actionId);
		
			$stmt = $this->dbConnection->prepare($actionStmt);
			$stmt->bindValue(':id', $actionId, PDO::PARAM_STR);  // Assuming date is passed as a string
		
			$stmt->execute();
	
			$lastAction = -1;
			$action = new Action();
			$persons=[];
			while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
				$currentAction = $row['id'];
				if ($lastAction != $currentAction) {
					if ($lastAction != -1) {
						$action->setPersons($persons);
						$persons=[];
						$list[] = $action;
					}
					$action = new Action();
					$action->setId($row['id']);
					$action->setActionDefinition($row['actionDefId']);
					$action->setActionName($row['name']);
					$action->setDay(new DateTime($row['day']));
					$action->setNote($row['note']);
					$action->setPersons([]);
					$lastAction = $currentAction;
				}
				$person = new Person();
				$person->setLastName($row['lastName']);
				$person->setFirstName($row['firstName']);	
				$person->setEmail($row['email']);	
				$person->setId($row['personId']);
				$persons[] = $person;
			}
			$action->setPersons($persons);
			$list[] = $action;
			
		} catch (PDOException $e) {
			throw new DatabaseException("DBError:" . __METHOD__ . " Message:" . $e->getMessage() ,previous:$e);
		}
	
		return $list[0];
	}
	public function updateAction(Action $action) {
		$updateActionStmt = "
			UPDATE action 
			SET note = :note 
			WHERE id = :id";
		
		$deleteActionPersonStmt = "
			DELETE FROM action_person 
			WHERE actionid = :actionId";
		
		$insertActionPersonStmt = "
			INSERT INTO action_person (actionId, personId) 
			VALUES (:actionId, :personId)";
	
		try {
			$this->dbConnection->beginTransaction();
			$stmt1 = $this->dbConnection->prepare($updateActionStmt);
			$stmt2 = $this->dbConnection->prepare($deleteActionPersonStmt);
			$stmt3 = $this->dbConnection->prepare($insertActionPersonStmt);
	
			// Update the action note
			$stmt1->bindValue(':note', $action->getNote(), PDO::PARAM_STR);
			$stmt1->bindValue(':id', $action->getId(), PDO::PARAM_INT);
			$stmt1->execute();
	
			// Delete existing action_person entries
			$stmt2->bindValue(':actionId', $action->getId(), PDO::PARAM_INT);
			$stmt2->execute();
	
			// Insert new action_person entries
			foreach ($action->getPersons() as $person) {
				$stmt3->bindValue(':actionId', $action->getId(), PDO::PARAM_INT);
				$stmt3->bindValue(':personId', $person->getId(), PDO::PARAM_INT);
				$stmt3->execute();
			}
			$this->dbConnection->commit();
			
			return true;  // Indicating success
		} catch (PDOException $e) {
			$this->dbConnection->rollBack();
			throw new DatabaseException("DBError:" . __METHOD__ . " Message:" . $e->getMessage() ,previous:$e);
		}
	}
	public function insertAction(Action $action) {
		$insertActionStmt = "
			INSERT INTO action (actionDefId, day, note) 
			VALUES (:actionDefId, :day, :note)";
		
		$insertActionPersonStmt = "
			INSERT INTO action_person (actionId, personId) 
			VALUES (:actionId, :personId)";
	
		try {
			$this->dbConnection->beginTransaction();
			$stmt1 = $this->dbConnection->prepare($insertActionStmt);
			//Insert action
			$stmt1->bindValue(':actionDefId', intval($action->getActionDefinition()), PDO::PARAM_INT);
			$stmt1->bindValue(':day', $action->getDay()->format(\App\Entity\Constants::DATE_FORMAT), PDO::PARAM_STR);  // Assuming date is passed as a string
			$stmt1->bindValue(':note', $action->getNote(), PDO::PARAM_STR);
			$stmt1->execute();

			// Get the last inserted action ID
			$actionId = $this->dbConnection->lastInsertId();
			$action->setId($actionId);

			$stmt2 = $this->dbConnection->prepare($insertActionPersonStmt);
			// Insert associated persons
			foreach ($action->getPersons() as $person) {
				$stmt2->bindValue(':actionId', $actionId, PDO::PARAM_INT);
				$stmt2->bindValue(':personId', $person->getId(), PDO::PARAM_INT);
				$stmt2->execute();
			}
			$this->dbConnection->commit();
			return true;  // Indicating success
		} catch (PDOException $e) {
			$this->dbConnection->rollBack();
			throw new DatabaseException("DBError:" . __METHOD__ . " Message:" . $e->getMessage() ,previous:$e);
		}
	}
	public function deleteAction($actionId) {
		$deleteActionPersonStmt = "
			DELETE FROM action_person 
			WHERE actionId = :actionId";
		
		$deleteActionStmt = "
			DELETE FROM action 
			WHERE id = :id";
	
		try {
			$this->dbConnection->beginTransaction();
			$stmt1 = $this->dbConnection->prepare($deleteActionPersonStmt);
			$stmt2 = $this->dbConnection->prepare($deleteActionStmt);
	
			// Delete associated persons
			$stmt1->bindValue(':actionId', $actionId, PDO::PARAM_INT);
			$stmt1->execute();
	
			// Delete action
			$stmt2->bindValue(':id', $actionId, PDO::PARAM_INT);
			$stmt2->execute();
			$this->dbConnection->commit();
			return true;  // Indicating success
		} catch (PDOException $e) {
			$this->dbConnection->rollBack();
			throw new DatabaseException("DBError:" . __METHOD__ . " Message:" . $e->getMessage() ,previous:$e);
		}
	}
	public function getPatrols() {
		$list = [];
		$patrolStmt = "
			SELECT patrol.id, patrol.status, patrol.note, day, person1Id, p1.lastName, p1.firstName, 
				   person2Id, p2.lastName, p2.firstName 
			FROM patrol 
			LEFT OUTER JOIN person AS p1 ON (patrol.person1Id = p1.id) 
			LEFT OUTER JOIN person AS p2 ON (patrol.person2Id = p2.id)";
	
		try {
			$stmt = $this->dbConnection->prepare($patrolStmt);
			$stmt->execute();
	
			while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
				$row['person1Name'] = ($row['lastName'] !== null) ? $row['lastName'] . ", " . $row['firstName'] : "Open";
				$row['person2Name'] = ($row['p2_lastName'] !== null) ? $row['p2_lastName'] . ", " . $row['p2_firstName'] : "Open";
				$list[] = $row;  // Add patrol to the list
			}
		} catch (PDOException $e) {
			throw new DatabaseException("DBError:" . __METHOD__ . " Message:" . $e->getMessage() ,previous:$e);
		}
	
		return $list;
	}
	public function getPatrolsByDateRange($start, $end) {
		$list = [];
		$patrolStmt = "
			SELECT patrol.id, patrol.status, patrol.note, day, person1Id, p1.lastName, p1.firstName, 
				   person2Id, p2.lastName, p2.firstName 
			FROM patrol 
			LEFT OUTER JOIN person AS p1 ON (patrol.person1Id = p1.id) 
			LEFT OUTER JOIN person AS p2 ON (patrol.person2Id = p2.id) 
			WHERE day BETWEEN :start AND :end";
	
		try {
			$stmt = $this->dbConnection->prepare($patrolStmt);
			$stmt->bindValue(':start', $start, PDO::PARAM_STR);  // Assuming date is passed as a string
			$stmt->bindValue(':end', $end, PDO::PARAM_STR);  // Assuming date is passed as a string
			$stmt->execute();
	
			while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
				$row['person1Name'] = ($row['lastName'] !== null) ? $row['lastName'] . ", " . $row['firstName'] : "Open";
				$row['person2Name'] = ($row['p2_lastName'] !== null) ? $row['p2_lastName'] . ", " . $row['p2_firstName'] : "Open";
				$list[] = $row;  // Add patrol to the list
			}
		} catch (PDOException $e) {
			throw new DatabaseException("DBError:" . __METHOD__ . " Message:" . $e->getMessage() ,previous:$e);
		}
	
		return $list;
	}
	public function deletePatrol($id) {
		$deleteStmt = "
			DELETE FROM patrol 
			WHERE id = :id";
	
		try {
			$stmt = $this->dbConnection->prepare($deleteStmt);
			$stmt->bindValue(':id', $id, PDO::PARAM_INT);
	
			$result = $stmt->execute();
			return $result;  // Return true if the delete was successful
		} catch (PDOException $e) {
			throw new DatabaseException("DBError:" . __METHOD__ . " Message:" . $e->getMessage() ,previous:$e);
		}
	}
	public function insertPatrol($patrol) {
		$insertStmt = "
			INSERT INTO patrol (status, person1Id, person2Id, day, note) 
			VALUES (:status, :person1Id, :person2Id, :day, :note)";
	
		try {
			$stmt = $this->dbConnection->prepare($insertStmt);
	
			// Binding parameters
			$stmt->bindValue(':status', $patrol['status'], PDO::PARAM_STR);
			$stmt->bindValue(':person1Id', $patrol['person1Id'], PDO::PARAM_INT);
			$stmt->bindValue(':person2Id', $patrol['person2Id'], PDO::PARAM_INT);
			$stmt->bindValue(':day', $patrol['day'], PDO::PARAM_STR);  // Assuming date is passed as a string
			$stmt->bindValue(':note', $patrol['note'], PDO::PARAM_STR);
	
			$rows = $stmt->execute();
			return $rows > 0;  // Return true if the insert was successful
		} catch (PDOException $e) {
			throw new DatabaseException("DBError:" . __METHOD__ . " Message:" . $e->getMessage() ,previous:$e);
		}
	}
	public function updatePatrol($patrol) {
		$updateStmt = "
			UPDATE patrol 
			SET status = :status, person1Id = :person1Id, person2Id = :person2Id, day = :day, note = :note 
			WHERE id = :id";
	
		try {
			$stmt = $this->dbConnection->prepare($updateStmt);
	
			// Binding parameters
			$stmt->bindValue(':status', $patrol['status'], PDO::PARAM_STR);
			$stmt->bindValue(':person1Id', $patrol['person1Id'], PDO::PARAM_INT);
			$stmt->bindValue(':person2Id', $patrol['person2Id'], PDO::PARAM_INT);
			$stmt->bindValue(':day', $patrol['day'], PDO::PARAM_STR);  // Assuming date is passed as a string
			$stmt->bindValue(':note', $patrol['note'], PDO::PARAM_STR);
			$stmt->bindValue(':id', $patrol['id'], PDO::PARAM_INT);
	
			$rows = $stmt->execute();
			return $rows > 0;  // Return true if the update was successful
		} catch (PDOException $e) {
			throw new DatabaseException("DBError:" . __METHOD__ . " Message:" . $e->getMessage() ,previous:$e);
		}
	}
	public function getLastId() {
		$id = -1;
		$sql = "SELECT LAST_INSERT_ID()";
	
		try {
			$stmt = $this->dbConnection->prepare($sql);
			$stmt->execute();
	
			if ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
				$id = $row['LAST_INSERT_ID()'];  // Fetching the last inserted ID
			}
		} catch (PDOException $e) {
			throw new DatabaseException("DBError:" . __METHOD__ . " Message:" . $e->getMessage() ,previous:$e);
		}
	
		return $id;
	}
	
	
}

?>
