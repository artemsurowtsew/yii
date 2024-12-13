<?php

namespace app\models;

use Yii;
use yii\base\Model;

class EntryForm extends Model
{
    public $name;
    public $email;

    public function rules()
    {
        return [
            [['name', 'email'], 'required', 'message' => 'Це поле є обов\'язковим.'],
            ['email', 'email', 'message' => 'Введіть коректну адресу електронної пошти.'],
            ['name', 'string', 'min' => 2, 'max' => 50, 'tooShort' => 'Ім\'я повинно містити не менше 2 символів.', 'tooLong' => 'Ім\'я не повинно перевищувати 50 символів.'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'name' => 'Ім\'я',
            'email' => 'Електронна пошта',
        ];
    }
}
