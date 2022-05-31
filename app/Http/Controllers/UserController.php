<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateUserEmailRequest;
use App\Http\Requests\UpdateUserPasswordRequest;
use App\Http\Requests\UserUpdateProfileRequest;
use App\Http\Resources\AnswerResource;
use App\Http\Resources\QuestionResource;
use App\Http\Resources\UserProfileResource;
use Exception;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\URL;

class UserController extends Controller
{
    public function userProfile(): UserProfileResource
    {
        return new UserProfileResource(auth()->user());
    }
    
    /**
     * @param UserUpdateProfileRequest $request
     * @return   Response
     * @throws Exception
     */
    public function updateUserProfile(UserUpdateProfileRequest $request): Response
    {
        $data = $request->validated();
        if (isset($data['photo']) && (URL::to(auth()->user()->photo ?? null) !== $data['photo'])) {
            $relativePath = $this->saveImage($data['photo']);
            $data['photo'] = $relativePath;
            
            if (auth()->user()->photo) {
                $absolutePath = public_path(auth()->user()->photo);
                File::delete($absolutePath);
            }
        }
        auth()->user()->update($data);
        
        return response(auth()->user());
    }
    
    /**
     * @throws Exception
     */
    private function saveImage($image): string
    {
        
        // Check if image is valid base64 string
        if (preg_match('/^data:image\/(\w+);base64,/', $image, $type)) {
            // Take out the base64 encoded text without mime type
            $image = substr($image, strpos($image, ',') + 1);
            // Get file extension
            $type = strtolower($type[1]); // jpg, png, gif
            
            // Check if file is an image
            if (!in_array($type, ['jpg', 'jpeg', 'gif', 'png'])) {
                throw new \RuntimeException('invalid image type');
            }
            $image = str_replace(' ', '+', $image);
            $image = base64_decode($image);
            
            if ($image === false) {
                throw new \RuntimeException('base64_decode failed');
            }
        } else {
            throw new \RuntimeException('did not match data URI with image data');
        }
        
        $dir = 'images/';
        $file = uniqid('avatar_', true) . '.' . $type;
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
    
    public function userUpdateEmail(UpdateUserEmailRequest $request)
    {
        try {
            auth()->user()->update($request->safe()->only(['email']));
            return response(['success' => 'Epostanız başarıyla güncellenmiştir'], 201);
        } catch (\RuntimeException $exception) {
            throw new \RuntimeException('did not match data URI with image data');
        }
    }
    
    public function userUpdatePassword(UpdateUserPasswordRequest $request){
        try {
            auth()->user()->update([
                'password'=>Hash::make($request->get('new_password'))
            ]);
            return response(['success' => 'Şifirinizi başarıyla güncellenmiştir'], 201);
        } catch (\RuntimeException $exception) {
            throw new \RuntimeException('did not match data URI with image data');
        }
    }
    
    public function getAllQuestionForAuthUser(): AnonymousResourceCollection
    {
        return QuestionResource::collection(auth()->user()->questions()->latest()->paginate(5));
    }
    
    public function getAllAnswerForAuthUser(): AnonymousResourceCollection
    {
        return AnswerResource::collection(auth()->user()->answers()->latest()->paginate(5));
    }
}
