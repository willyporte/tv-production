<?php

namespace App\Http\Controllers;

use App\Tv;
use App\Http\Requests;
use Excel;

class TvExcelController extends Controller
{
    public function index()
    {

        Excel::create('TV in Excel', function($excel) {

            $excel->sheet('Tvs', function($sheet) {

                $tvs = Tv::select([
                    'brand as Marca',
                    'mod_tv as Modello',
                    'panel as Pannello',
                    'panel_place as Posto',
                    'main as Main',
                    'main_nr as Box',
                    'inverter as Inverter',
                    'inverter_nr as Box',
                    'power_supply as Alimentatore',
                    'power_supply_nr as Box',
                    'power_supply_alt as Alim_Alt',
                    'power_supply_alt_nr as Box',
                    't_con as T_Con',
                    't_con_nr as Box',
                    'note as Nota'
                ])->get();

                $sheet->fromArray($tvs);

            });
        })->export('xls');

    }
}
