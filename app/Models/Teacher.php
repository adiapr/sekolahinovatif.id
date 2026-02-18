<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Teacher extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'subject',
        'nip',
        'whatsapp_number',
        'school_id',
        'role',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    /**
     * Boot method to set default role
     */
    protected static function boot()
    {
        parent::boot();
        
        static::creating(function ($model) {
            $model->role = 'guru';
        });
    }

    /**
     * Scope untuk hanya mengambil data guru
     */
    public function scopeGuru($query)
    {
        return $query->where('role', 'guru');
    }

    /**
     * Relasi dengan students melalui class rooms
     */
    public function classRooms()
    {
        return $this->hasMany(ClassRoom::class, 'teacher_id');
    }

    /**
     * Relasi dengan sekolah (school)
     */
    public function school()
    {
        return $this->belongsTo(User::class, 'school_id');
    }
}
