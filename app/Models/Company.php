<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class Company extends Model
{
    use HasFactory;

    public function inviteUserByEmail($email) {
        $user = User::where('email', $email)->first();
        if (!$user) {
            $user = User::create([
                'name' => $email,
                'email' => $email,
                'password' => Hash::make(Str::random(16)),
                'invitation_status' => 'pending',
                'invitation_key' => Str::random(16),
            ]);
        }
        $this->users()->attach($user->id);
    }

    public function acceptInvitation($invitation_key) {

        $user = User::where('invitation_key', $invitation_key)->first();
        if (!$user) {
            return false;
        }

        $user->invitation_status = 'accepted';
        $user->invitation_key = null;
        $user->save();

        $this->users()->attach($user->id);

        return true;

    }

    public function users() {
        return $this->belongsToMany(User::class);
    }

    public function owner() {
        return $this->belongsTo(User::class, 'owner_user_id');
    }

    public function isOwner($user) {
        return $this->owner_user_id == $user->id;
    }

    public function isMember($user) {
        return $this->users->contains($user);
    }

    public function isInvited($user) {
        return $user->invitation_status == 'pending' && $this->users->contains($user);
    }
    
}
