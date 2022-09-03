<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'active_company_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function companies () {
        return $this->belongsToMany(Company::class, 'users_companies');
    }

    public function invoices () {
        return $this->hasMany(Invoice::class);
    }

    public function company() {
        return $this->belongsTo(Company::class, 'active_company_id');
    }

    public function isOwner($company) {
        return $this->company->id == $company->id;
    }

    public function isMember($company) {
        return $this->companies->contains($company);
    }

    public function isOwnerOrMember($company) {
        return $this->isOwner($company) || $this->isMember($company);
    }

    
}
