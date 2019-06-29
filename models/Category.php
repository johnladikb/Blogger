<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "category".
 *
 * @property int $idCategory
 * @property int $Accounts
 * @property string $Name
 *
 * @property Blogs[] $blogs
 * @property Accounts $accounts
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Accounts', 'Name'], 'required'],
            [['Accounts'], 'integer'],
            [['Name'], 'string', 'max' => 255],
            [['Accounts'], 'exist', 'skipOnError' => true, 'targetClass' => Accounts::className(), 'targetAttribute' => ['Accounts' => 'idAccounts']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idCategory' => 'Id Category',
            'Accounts' => 'Accounts',
            'Name' => 'Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBlogs()
    {
        return $this->hasMany(Blogs::className(), ['Categories' => 'idCategory']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAccounts()
    {
        return $this->hasOne(Accounts::className(), ['idAccounts' => 'Accounts']);
    }
}
