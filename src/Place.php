<?php
class Place
{
    private $city;

    function __construct($place_city)
    {
        $this->city = $place_city;
    }


    function setCity($new_city)
    {
        $this->city = (string) $new_city;
    }

    function getCity()
    {
        return $this->city;
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
