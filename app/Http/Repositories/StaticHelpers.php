<?php

namespace App\Http\Repositories;

use App\Blogger;
use App\User;

class StaticHelpers
{
    const REF_POINTS = 10;

    public static function findRefereeByCode($request)
    {
        if ($request['referer_code'] != null) {

            $member = User::where('code', '=', $request['referer_code'])->first();

            if (!empty($member)) {

                $member->points = $member->points + self::REF_POINTS;
                $member->save();

                return $member;

            }

            $blogger = Blogger::where('code', '=', $request['referer_code'])->first();

            if (!empty($blogger)) {

                $blogger->points = $blogger->points + self::REF_POINTS;
                $blogger->save();

                return $blogger;

            }

        }
    }
}