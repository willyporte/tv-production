<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tv extends Model
{
    protected $table = 'tvs';

    protected $fillable = [
        'panel',
        'brand',
        'available',
        'panel_place',
        'main',
        'main_nr',
        'inverter',
        'inverter_nr',
        'power_supply',
        'power_supply_nr',
        'power_supply_alt',
        'power_supply_alt_nr',
        't_con',
        't_con_nr',
        'mod_tv',
        'mod_tv_nr',
        'note',
    ];

    public static function filterAndPaginate($search)
    {

        return TV::panel($search)
            ->orderBy('panel','ASC')->paginate(10);
    }

    public function scopePanel($query, $search) {
        $search = trim($search);
        if($search != '') {
            return $query
                ->where('panel','LIKE',"%$search%")
                ->orWhere('brand','LIKE',"%$search%")
                ->orWhere('main','LIKE',"%$search%")
                ->orWhere('inverter','LIKE',"%$search%")
                ->orWhere('power_supply','LIKE',"%$search%")
                ->orWhere('t_con','LIKE',"%$search%")
                ->orWhere('mod_tv','LIKE',"%$search%");
        }
    }

}
