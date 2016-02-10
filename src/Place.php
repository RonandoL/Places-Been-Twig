<?php
class Place
{
    private $city;
    private $photo;
    private $landmark;
    private $date;

    function __construct($place_city, $place_photo, $place_landmark, $place_date)
    {
        $this->city = $place_city;
        $this->photo = $place_photo;
        $this->landmark = $place_landmark;
        $this->date = $place_date;
    }


    function setCity($new_city)
    {
        $this->city = (string) $new_city;
    }

    function getCity()
    {
        return $this->city;
    }

    function getPhoto()
    {
        return $this->photo;
    }

    function getLandmark()
    {
        return $this->landmark;
    }

    function getDate()
    {
        return $this->date;
    }

    function save()
    {
        array_push($_SESSION['list_of_places'], $this);
    }

    static function getAll()
    {
        return $_SESSION['list_of_places'];
    }

}

?>
