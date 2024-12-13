<?php

namespace tests\unit\models;

use app\models\EntryForm;

class EntryFormTest extends \PHPUnit\Framework\TestCase
{
    /**
     * Тест перевірки валідних даних.
     */
    public function testValidData()
    {
        $model = new EntryForm([
            'name' => 'Іван Іванов',
            'email' => 'ivan@example.com',
        ]);

        $this->assertTrue($model->validate(), 'Дані повинні бути валідними');
    }

    /**
     * Тест перевірки некоректної email адреси.
     */
    public function testInvalidEmail()
    {
        $model = new EntryForm([
            'name' => 'Іван Іванов',
            'email' => 'invalid-email',
        ]);

        $this->assertFalse($model->validate(), 'Дані не повинні бути валідними через некоректну email');
        $this->assertArrayHasKey('email', $model->errors, 'Повинна бути помилка у полі email');
    }

    /**
     * Тест перевірки порожніх полів.
     */
    public function testEmptyFields()
    {
        $model = new EntryForm();

        $this->assertFalse($model->validate(), 'Дані не повинні бути валідними, бо поля порожні');
        $this->assertArrayHasKey('name', $model->errors, 'Повинна бути помилка у полі name');
        $this->assertArrayHasKey('email', $model->errors, 'Повинна бути помилка у полі email');
    }

    /**
     * Тест перевірки довжини імені.
     */
    public function testNameLength()
    {
        $model = new EntryForm([
            'name' => 'A',
            'email' => 'a@example.com',
        ]);

        $this->assertFalse($model->validate(), 'Дані не повинні бути валідними через занадто коротке ім\'я');
        $this->assertArrayHasKey('name', $model->errors, 'Повинна бути помилка у полі name');
    }
}
