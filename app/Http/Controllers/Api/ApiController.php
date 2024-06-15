<?php

namespace App\Http\Controllers\Api;

use App\Events\MyEvent;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ApiController extends Controller
{
    public function verifyProfile(Request $request)
    {
        $username = $request->username;
        $password = $request->password;
        $validator = Validator::make(
            $request->all(),
            [
                'username' => 'required|string',
                'password' => 'required',
            ],
            [
                'username.required' => 'Username Field is required',
                'password.required' => "Password Field is required",
            ]
        );
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'error' => 1,
                'message' => $validator->errors()->first(),

            ]);
        }

        $user = User::where('username', $username)->where('isDeleted', false)->first();

        if (!$user) {
            return response()->json([
                'status' => 'error',
                'error' => 1,
                'message' => 'User not found',
            ]);
        }

        if (!Hash::check($password, $user->password)) {
            return response()->json([
                'status' => 'error',
                'error' => 1,
                'message' => 'Incorrect password',
            ]);
        }

        return response()->json([
            'status' => 'success',
            'error' => 0,
            'user' => $user,
        ]);
    }

    public function sendNotifications(Request $request)
    {
        $user = User::find(4);
        event(new MyEvent($user, 4));
        return response()->json([
            'status' => 'success',
            'error' => 0
        ]);
    }

    public function invitationAction(Request $request)
    {
        $toUserId = $request->toUserId;
        $toUser = $request->user;
        $action = $request->action;
        event((new MyEvent($toUser, $toUserId, $action)));
        return response()->json([
            'status' => 'success',
            'error' => 0,
            'result' => [
                'toUserId' => $toUserId,
                'action' => $action,
            ]
        ]);
    }

    public function joinMeeting(Request $request)
    {
        $userId = $request->userId;
        $user = User::find($userId);
        event(new MyEvent($user, 0, 'ADD_USER_INVITATION'));
        return response()->json([
            'status' => 'success',
            'error' => 0,
        ]);
    }

    public function clearInvitation(Request $request)
    {
        $userId = $request->userId;
        $user = User::find($userId);
        event(new MyEvent($user, 0, 'CLEAR_INVITATION'));
        return response()->json([
            'status' => 'success',
            'error' => 0,
        ]);
    }
    public function qrData(Request $request){
        $qrUser = ;
        return response()->json(['status'=>$request->city]);
    }
}
