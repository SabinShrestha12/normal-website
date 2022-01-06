<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class feedbackData extends Model
{
    use HasFactory;
    public $timestamps = false;
    public $table = "feedback_form";
}
