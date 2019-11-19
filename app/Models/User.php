<?php


namespace App\Models;


use Jenssegers\Date\Date;

/**
 * Interface User
 * @package App\Models
 *
 * Public fields:
 *
 * @property Date $created_at
 * @property string $first_name
 * @property string $last_name
 * @property string $gender   # Possible values: 'male' | 'female'
 * @property Date $birthday   # Not older than 1900
 */
interface User extends Printable
{
    public function getCreatedDate();
    public function setCreatedDate(Date $created_at);


    public function getFirstName();
    public function setFirstName(string $firstName);

    public function getLastName();
    public function setLastName(string $lastName);

    public function getGender();
    public function setGender(string $gender);

    public function getBirthday();
    public function setBirthday(Date $birthday);

}
