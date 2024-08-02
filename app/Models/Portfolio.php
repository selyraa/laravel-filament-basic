<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Portfolio extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'portfolios';
    protected $fillable =
    [
        'title',
        'description',
        'image',
        'portfolio_category_id'
    ];
    protected $dates = ['deleted_at'];

    // create a one to many relationship with the portfolio category
    public function portfolioCategory()
    {
        return $this->belongsTo(PortfolioCategory::class);
    }
}
