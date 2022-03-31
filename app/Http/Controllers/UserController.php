<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserUpdateProfileRequest;
use Exception;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class UserController extends Controller
{
    /**
     * @param UserUpdateProfileRequest $request
     * @return   Response
     * @throws Exception
     */
    public function updateUserProfile(UserUpdateProfileRequest $request)
    {


        $data = $request->validated();
        if (isset($data['photo'])) {
            $relativePath = $this->saveImage($data['photo']->getClientOriginalExtension());
            $data['photo'] = $relativePath;
        }
        auth()->user()->update($data);

        return response(auth()->user());
    }

    /**
     * @throws Exception
     */
    private function saveImage($image): string
    {

        $dir = 'images/';
        $file = uniqid('avatar_') . '.' . $image;
        $absolutePath = public_path($dir);
        $relativePath = $dir . $file;
        if (!File::exists($absolutePath)) {
            File::makeDirectory($absolutePath, 0755, true);
        }
        file_put_contents($relativePath, $image);
        return $relativePath;
    }

    public function destroyUser(): Response
    {
        $user = auth()->user();
        $user->delete();
        if ($user->image) {
            $absolutePath = public_path($user->photo);
            File::delete($absolutePath);
        }
        return response('', 204);
    }
}
