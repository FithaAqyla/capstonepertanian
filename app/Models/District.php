<?php


namespace App\Models;

use AzisHapidin\IndoRegion\Traits\DistrictTrait;
use Illuminate\Database\Eloquent\Model;
use App\Models\Regency;
use App\Models\Village;


class District extends Model
{
    use DistrictTrait;

    protected $table = 'districts';
    protected $primarykey='id';

    public function citie()
    {
        return $this->belongsTo(Citie::class);
    }

    public function costumer()
    {
        return $this->hasMany(Customer::class);
    }

}
