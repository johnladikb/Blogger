<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "accounts".
 *
 * @property int $idAccounts
 * @property string $AuthKey
 * @property string $AccessToken
 * @property string $FirstName
 * @property string $LastName
 * @property string $Email
 * @property string $Password
 * @property bool $Registered
 * @property string $DisplayName
 *
 * @property Blogs[] $blogs
 * @property Category[] $categories
 */
class Accounts extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'accounts';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Email', 'Password', 'DisplayName'], 'required'],
            [['Registered'], 'boolean'],
            [['AuthKey', 'AccessToken', 'FirstName', 'LastName', 'Email', 'Password', 'DisplayName'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idAccounts' => 'Id Accounts',
            'AuthKey' => 'Auth Key',
            'AccessToken' => 'Access Token',
            'FirstName' => 'First Name',
            'LastName' => 'Last Name',
            'Email' => 'Email',
            'Password' => 'Password',
            'Registered' => 'Registered',
            'DisplayName' => 'Display Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBlogs()
    {
        return $this->hasMany(Blogs::className(), ['Accounts' => 'idAccounts']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategories()
    {
        return $this->hasMany(Category::className(), ['Accounts' => 'idAccounts']);
    }
}
