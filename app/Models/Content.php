<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Content extends Model
{
    use HasFactory;

    protected $fillable = ['key', 'value', 'updated_by'];

    protected $casts = [
        'updated_by' => 'integer',
    ];

    public function editor()
    {
        return $this->belongsTo(\App\Models\User::class, 'updated_by');
    }

    // Alternative method to get editor name
    public function getEditorNameAttribute()
    {
        if ($this->editor) {
            return $this->editor->name;
        }

        if ($this->updated_by) {
            $user = \App\Models\User::find($this->updated_by);
            return $user ? $user->name : 'User #' . $this->updated_by;
        }

        return 'N/A';
    }
}