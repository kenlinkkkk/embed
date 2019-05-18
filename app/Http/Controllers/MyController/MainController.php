<?php

namespace App\Http\Controllers\MyController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

use App\User;
use App\Lichhoc;
use App\Monhoc;
use App\Giohoc;

class MainController extends Controller
{
    public function getSinhvienByUID($uid){
        $sinhvien = User::where('uid' , $uid)->get();

        return $sinhvien;
    }

    public function getLichhocById($id) {
        $lichhoc = Lichhoc::findorFail($id)->first();

        return $lichhoc;
    }

    public function getGiohocByid($id){
        $giohoc = Giohoc::findorFail($id)->first();

        return $giohoc;
    }

    public function diemdanh(Request $request){
        date_default_timezone_set("Asia/Ho_Chi_Minh");

        $sinhvien = $this->getSinhvienByUID($request->uid);

        $lichhoc = $this->getLichhocById($request->idPhong);

        $giohoc = $this->getGiohocByid($lichhoc['idGiohoc']);

        $DOW = [
            'T2' => 'Mon',
            'T3' => 'Tus',
            'T4' => 'Wes',
            'T5' => 'Thu',
            'T6' => 'Fri',
            'T7' => 'Sat',
            'CN' => 'Sun',
        ];

        if ($DOW[$giohoc['day']] == date('D')) {
            $starttime = date('H:i', strtotime($giohoc['time']));
            $passtime = date('H:i', strtotime('+30 minutes', strtotime($giohoc['time'])));
            $endtime = date('H:i', strtotime('+2 hours +15 minutes', strtotime($giohoc['time'])));
            if (date('H:i') <= $passtime){
                $sinhvien[0]->lichhocs()->attach($lichhoc['id'], ['state' => 0]);

                return Response()->json([
                   $sinhvien[0]['name'],
                   $sinhvien[0]['MASV'],

                ]);
            } elseif (date('H:i') <= $endtime) {
                $sinhvien[0]->lichhocs()->updateExistingPivot($lichhoc['id'], ['state' => 1]);

                return Response()->json([
                    $sinhvien[0]['name'],
                    $sinhvien[0]['MASV'],
                ]);
            } else {
                return Response()->json([
                    'Khong Thanh Cong',
                ]);
            }
        }
    }
}
