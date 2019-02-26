<?php
class Passenger
{
    public function PassengerArray($db)
    {
        $query = "SELECT * FROM passengers";
        $statement = $db->prepare($query);
        $statement->execute();

        $result = $statement->fetchAll(PDO::FETCH_OBJ);

        return $result;
    }
    public function AddPassenger( $db ,$FlightID, $Passengername)
    {
        $query = "INSERT INTO passengers (flightID, name) VALUES(:flightID, :name)";
        $statement = $db->prepare($query);
        $statement->bindParam(":flightID",$FlightID, PDO::PARAM_STR);
        $statement->bindParam(":name",$Passengername, PDO::PARAM_STR);
        $statement->execute();
    }

    public function getFlightIDS($db)
    {
        $query = "SELECT FlightID FROM flights";
        $statement = $db->prepare($query);
        $statement->execute();

        $result = $statement->fetchAll(PDO::FETCH_OBJ);

        return $result;
    }

    public function UpdatePassenger( $db ,$PassengerID,$Name,$flightID)
    {
        $query = "UPDATE passengers
                    SET  FlightID     = :flightID,
                         Name         = :name
                  WHERE PassengerID = :PassengerID";

        $statement = $db->prepare($query);
        $statement->bindParam(":PassengerID", $PassengerID, PDO::PARAM_INT);
        $statement->bindParam(":flightID", $flightID, PDO::PARAM_STR);
        $statement->bindParam(":name", $Name, PDO::PARAM_STR);
        $statement->execute();
    }

    /**
     * @var $db PDO
     * @param $passengerID
     */
    public function DeletePassenger($db,$passengerID)
    {
        $query = "DELETE FROM passengers WHERE PassengerID = :PassengerID";
        $statement = $db->prepare($query);
        $statement->bindParam(":PassengerID",$passengerID, PDO::PARAM_INT);
        $statement->execute();
        $statement->closeCursor();
    }
}
?>