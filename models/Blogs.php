<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "blogs".
 *
 * @property int $idBlogs
 * @property int $Accounts
 * @property int $Categories
 * @property bool $Published
 * @property string $DatePublished
 * @property string $Title
 * @property string $Body
 *
 * @property Accounts $accounts
 * @property Category $categories
 */
class Blogs extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'blogs';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Accounts', 'Categories', 'DatePublished', 'Title', 'Body'], 'required'],
            [['Accounts', 'Categories'], 'integer'],
            [['Published'], 'boolean'],
            [['DatePublished'], 'safe'],
            [['Body'], 'string'],
            [['Title'], 'string', 'max' => 255],
            [['Accounts'], 'exist', 'skipOnError' => true, 'targetClass' => Accounts::className(), 'targetAttribute' => ['Accounts' => 'idAccounts']],
            [['Categories'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['Categories' => 'idCategory']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idBlogs' => 'Id Blogs',
            'Accounts' => 'Accounts',
            'Categories' => 'Categories',
            'Published' => 'Published',
            'DatePublished' => 'Date Published',
            'Title' => 'Title',
            'Body' => 'Body',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAccounts()
    {
        return $this->hasOne(Accounts::className(), ['idAccounts' => 'Accounts']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategories()
    {
        return $this->hasOne(Category::className(), ['idCategory' => 'Categories']);
    }
}
