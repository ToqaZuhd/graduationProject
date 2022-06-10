package com.example.graduationproject.Model;

public class carOOB {
    private int car_number;
    private String carImage;
    private String car_type;
    private int car_price;
    private String car_provider;

    public carOOB() {
    }

    public carOOB(int car_number, String carImage, String car_type, int car_price, String car_provider) {
        this.car_number = car_number;
        this.carImage = carImage;
        this.car_type = car_type;
        this.car_price = car_price;
        this.car_provider = car_provider;
    }

    public int getCar_number() {
        return car_number;
    }

    public void setCar_number(int car_number) {
        this.car_number = car_number;
    }

    public String getCarImage() {
        return carImage;
    }

    public void setCarImage(String carImage) {
        this.carImage = carImage;
    }

    public String getCar_type() {
        return car_type;
    }

    public void setCar_type(String car_type) {
        this.car_type = car_type;
    }

    public int getCar_price() {
        return car_price;
    }

    public void setCar_price(int car_price) {
        this.car_price = car_price;
    }

    public String getCar_provider() {
        return car_provider;
    }

    public void setCar_provider(String car_provider) {
        this.car_provider = car_provider;
    }

    @Override
    public String toString() {
        return "carOOB{" +
                "car_number=" + car_number +
                ", carImage='" + carImage + '\'' +
                ", car_type='" + car_type + '\'' +
                ", car_price=" + car_price +
                ", car_provider='" + car_provider + '\'' +
                '}';
    }
}
