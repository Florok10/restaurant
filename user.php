<?php

require_once 'dao.php';

class User {
    private $_firstName;
    private $_lastName;
    private $_email;
    private $_passwordUser;
    private $_reservation;

    public function __construct($firstName, $lastName, $email, $passwordUser, $reservation) {
        SetFirstName($firstName);
        SetLastName($lastName);
        SetEmail($email);
        SetPasswordUser($passwordUser);
        SetReservation($reservation);
    }
    public function SetFirstName($firstName) {
        $this->_firstName = $firstName;
    }
    public function SetLastName($lastName) {
        $this->_lastName = $lastName;
    }
    public function SetEmail($email) {
        $this->_email = $email;
    }
    public function SetPasswordUser($passwordUser) {
        $this->_passwordUser = $passwordUser;
    }
    public function SetReservation($reservation) {
        $this->_reservation = $reservation;
    }

    public function GetFirstName(){
        return $this->_firstName;
    }
    public function GetLastName(){
        return $this->_lastName;
    }
    public function GetEmail(){
        return $this->_email;
    }
    public function GetPasswordUser(){
        return $this->_passwordUser;
    }
    public function GetReservation(){
        return $this->_reservation;
    }
}