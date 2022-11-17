<?php

declare(strict_types=1);

namespace App\Models;

use App\Notifications\ResetPassword;
use Carbon\Carbon;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'image',
        'imageUpdate',
        'document_number',
        'rg',
        'gender',
        'birth',
        'phone1',
        'phone2',
        'is_dealer',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'is_dev' => 'boolean',
    ];


    protected $dates = [
        'birth',
    ];

    // JWT Implementation
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [
            'user' => [
                'id' => $this->id,
                'name' => $this->name,
                'email' => $this->email,
                'image' => $this->image,
            ]
        ];
    }

    function types()
    {
        return $this->belongsToMany(Type::class, 'user_types', 'user_id', 'type_id');
    }

    function user()
    {
        return $this->hasOne(User::class);
    }




    public function canAuthInPanel(): bool
    {
        $user = Auth::user();
        return $user->is_dev || $user->types()
                ->whereIn('types.id', [Type::ADMIN, Type::CLIENTE])
                ->count();
    }

    public function getFirstNameAttribute()
    {
        $names = explode(' ', $this->name);

        if (is_array($names)) {

            return $names[0];
        } else {
            return $this->name;
        }
    }

    public function getNameWithDocumentNumberAttribute()
    {
        return $this->name . ' (' . $this->document_number . ')';
    }


    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPassword($token));
    }

    public function userTypes()
    {
        return $this->hasMany(UserType::class, 'user_id');
    }

    function isAdmin()
    {
        return $this->types()->whereTypeId(\App\Models\Type::ADMIN)->count();
    }


}
