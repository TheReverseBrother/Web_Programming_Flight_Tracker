<?php



class Flight
{
    public function FlightArray($db)
    {
        $query = "SELECT FlightID,Company FROM flights";
        $statement = $db->prepare($query);
        $statement->execute();

        $result = $statement->fetchAll(PDO::FETCH_OBJ);

        return $result;
    }
    public function AddFlight( $db ,$FlightID, $Cname)
    {
        $query = "INSERT INTO flights (flightID, Company) VALUES(:flightID, :Company)";
        $statement = $db->prepare($query);
        $statement->bindParam(":flightID",$FlightID, PDO::PARAM_STR);
        $statement->bindParam(":Company",$Cname, PDO::PARAM_STR);
        $statement->execute();
    }

    public function getFlightIDs($db)
    {
        $query = "SELECT FlightID FROM flights";
        $statement = $db->prepare($query);
        $statement->execute();

        $result = $statement->fetchAll(PDO::FETCH_OBJ);

        return $result;
    }

    public function UpdateFlight( $db ,$PlaneID,$FlightID, $Cname)
    {

    }

    public function DeleteChildObjects($db,$flightID)
    {
        $query = "DELETE FROM passengers WHERE FlightID = :FlightID";
        $statement = $db->prepare($query);
        $statement->bindParam(":FlightID",$flightID, PDO::PARAM_STR);
        $statement->execute();
        $statement->closeCursor();
    }

    public function FindFlight( $db ,$FlightID, $Cname)
    {
        $query = "SELECT PlaneID, FlightID, Company FROM flights";
        $statement = $db->prepare($query);
        $statement->execute();

        $result = $statement->fetchAll(PDO::FETCH_OBJ);

        return $result;
    }

    public function DeleteFlight($db,$flightID)
    {
        $query = "DELETE FROM flights WHERE flightID = :flightID";
        $statement = $db->prepare($query);
        $statement->bindParam(":flightID",$flightID, PDO::PARAM_STR);
        $statement->execute();
        $statement->closeCursor();
    }
}
?>