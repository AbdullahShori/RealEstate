<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Auth\DefaultPasswordHasher;

/**
 * User Entity
 *
 * @property int $id
 * @property string $Email
 * @property string $Password
 */
class User extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'Email' => true,
        'Password' => true,
    ];

    protected $_hidden = [
        'password',
    ];

    // protected function _setPassword(string $password) : ?string
    // {
    //     if (strlen($password) > 0) {
    //         $hasher = new DefaultPasswordHasher();
    //         return $hasher->hash($password);
    //         // return (new DefaultPasswordHasher())->hash($password);
    //     }

    // }
    protected function _setPassword($value)
    {
        if (strlen($value)) {
            $hasher = new DefaultPasswordHasher();
            return $hasher->hash($value);
            // return (new DefaultPasswordHasher())->hash($password);
        }

    }
}
