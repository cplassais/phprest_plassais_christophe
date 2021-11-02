<?php

class Brand extends Car
{
    private $id_brand;
    private $name;

    public function __construct()
    {
    }

    /**
     * @return mixed
     */
    public function getIdBrand()
    {
        return $this->id_brand;
    }

    /**
     * @param mixed $id_brand
     */
    public function setIdBrand($id_brand)
    {
        $this->id_brand = $id_brand;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
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

}
