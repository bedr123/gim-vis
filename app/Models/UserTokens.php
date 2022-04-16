<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Tymon\JWTAuth\Exceptions\JWTException;
Use \Carbon\Carbon;
use JWTAuth;

class UserTokens extends Model
{
    use HasFactory;

    public static function createToken($user_id, $token){
        if ($user_id && $token) {
            $objToken = new UserTokens();
            $objToken->user_id = $user_id;
            $objToken->token = $token;
            $objToken->Save();
            return true;
        }
        return false;
    }

    public static function invalidateTokens($user_id){
        $tokens = UserTokens::where([
            'user_id' => $user_id,
            'time_disabled' => null
        ])->get();
        foreach($tokens as $token){
            try{
                JWTAuth::setToken($token->token)->invalidate();
            }catch(\Exception $e){
                         
            }
            $token->time_disabled = Carbon::now();
            $token->update();
        }
    }
}
