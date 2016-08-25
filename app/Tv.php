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
        'status',
        'image_name',
        'image_path',
        'image_thumbnail',
        'image_thumbnail_path',
        'y_sus',
        'y_sus_nr',
        'z_sus',
        'z_sus_nr',
        'buffer_board',
        'buffer_board_nr',
        'sgnl',
        'sgnl_nr'
    ];

    public static function filterAndPaginate($search)
    {

        return TV::panel($search)
            ->orderBy('available','DESC')->paginate(10);
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
                ->orWhere('mod_tv','LIKE',"%$search%")
                ->orWhere('y_sus','LIKE',"%$search%")
                ->orWhere('z_sus','LIKE',"%$search%")
                ->orWhere('buffer_board','LIKE',"%$search%")
                ->orWhere('sgnl','LIKE',"%$search%");
        }
    }

}
