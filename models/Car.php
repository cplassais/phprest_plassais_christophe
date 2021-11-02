<?php

class Car extends Db
{
    private $id_car;
    private $seats;
    private $licencePlate;
    private $serialNumber;
    private $color;
    private $brand_in_brand;
    private $model_in_model;

    public function __construct()
    {
    }

    /**
     * @return mixed
     */
    public function getIdCar()
    {
        return $this->id_car;
    }

    /**
     * @param mixed $id_car
     */
    public function setIdCar($id_car)
    {
        $this->id_car = $id_car;
    }

    /**
     * @return mixed
     */
    public function getSeats()
    {
        return $this->seats;
    }

    /**
     * @param mixed $seats
     */
    public function setSeats($seats)
    {
        $this->seats = $seats;
    }

    /**
     * @return mixed
     */
    public function getLicencePlate()
    {
        return $this->licencePlate;
    }

    /**
     * @param mixed $licencePlate
     */
    public function setLicencePlate($licencePlate)
    {
        $this->licencePlate = $licencePlate;
    }

    /**
     * @return mixed
     */
    public function getSerialNumber()
    {
        return $this->serialNumber;
    }

    /**
     * @param mixed $serialNumber
     */
    public function setSerialNumber($serialNumber)
    {
        $this->serialNumber = $serialNumber;
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param mixed $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    /**
     * @return mixed
     */
    public function getBrandInBrand()
    {
        return $this->brand_in_brand;
    }

    /**
     * @param mixed $brand_in_brand
     */
    public function setBrandInBrand($brand_in_brand)
    {
        $this->brand_in_brand = $brand_in_brand;
    }

    /**
     * @return mixed
     */
    public function getModelInModel()
    {
        return $this->model_in_model;
    }

    /**
     * @param mixed $model_in_model
     */
    public function setModelInModel($model_in_model)
    {
        $this->model_in_model = $model_in_model;
    }

    static function getjsonListCars($dbc)
    {
        $query = ("SELECT * FROM car ORDER BY licencePlate");
        $sth = $dbc->query($query);
        $cars = $sth->fetchAll();
        $cars = json_encode($cars);
        return $cars;
    }

    /**
     * @param $dbc
     * @param $licencePlate
     * @return mixed
     */
    public static function getCarByLicence($dbc, $licencePlate)
    {
        $query = 'SELECT * FROM car WHERE licencePlate = :licencePlate';
        $aBindParam = array('licencePlate' => $licencePlate);
        $oCar = $dbc->select($query, $aBindParam);
        $oCar = json_encode($oCar);
        return $oCar;
    }

    /**
     * @param $dbc
     * @param $id_car
     * @param $seats
     * @param $licencePlate
     * @param $serialNumber
     * @param $color
     * @param $brand_in_brand
     * @param $model_in_model
     * @return mixed
     */
    public function updateCar($dbc, $id_car, $seats, $licencePlate, $serialNumber, $color, $brand_in_brand, $model_in_model)
    {
        $query = 'UPDATE car SET seats = :seats, licencePlate = :licencePlate, serialNumber = :serialNumber, brand_in_brand = :brand_in_brand, model_in_model = :model_in_model WHERE id_car = :id_car';
        $aBindParam = array('id_car' => $id_car, 'seats' => $seats, 'licencePlate' => $licencePlate, 'serialNumber' => $serialNumber, 'brand_in_brand' => $brand_in_brand, 'model_in_model' =>  $model_in_model);
        $oCar = $dbc->update($query, $aBindParam);
        $oCar = json_encode($oCar);
        return $oCar;
    }

    /**
     * @param $dbc
     * @param $id_car
     */
    public static function deleteCar($dbc, $id_car)
    {
        $query = "DELETE FROM `car` WHERE `car`.`id_car` = $id_car";
        $aBindParam = array('id_car' => $id_car);
        $oCar = $dbc->delete($query, $aBindParam);

    }


    public static function addCar($dbc, $seats, $licencePlate, $serialNumber, $color, $brand_in_brand, $model_in_model)
    {
        $query = '$INSERT INTO `car` 
                    SET 
                    seats = :seats,
                    licencePlate = :licencePlate,
                    serialNumber = :serialNumber,
                    color = :color,
                    brand_in_brand = :brand_in_brand,
                    model_in_model = :model_in_model';

        $aBindParam = array('seats' => $seats, 'licencePlate' => $licencePlate, 'serialNumber' => $serialNumber, 'color' => $color, 'brand_in_brand' => $brand_in_brand, 'model_in_model' => model_in_model );
        $oCar = $dbc->select($query, $aBindParam);
        return $oCar;
    }
}