<?php
class Passenger
{
    public function PassengerArray($db)
    {
        $query = "SELECT FlightID, Name FROM passengers";
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

    public function UpdateFlight( $db ,$PlaneID,$FlightID, $Cname)
    {

    }

    public function FindFlight( $db ,$FlightID, $Cname)
    {
        $query = "SELECT PlaneID, FlightID, Company FROM flights";
        $statement = $db->prepare($query);
        $statement->execute();

        $result = $statement->fetchAll(PDO::FETCH_OBJ);

        return $result;
    }

    public function DeleteFlight($PlaneID)
    {
        $query = "DELETE FROM flights WHERE planeID = :planeID)";
        $statement = $db->prepare($query);
        $statement->bindParam(":planeID",$PlaneID, PDO::PARAM_INT);
        $statement->execute();
    }
}
?>