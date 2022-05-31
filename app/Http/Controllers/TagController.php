<?php

namespace App\Http\Controllers;

use App\Http\Resources\TagResource;
use App\Models\Tag;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index()
    {
        $tags = TagResource::collection(Tag::query()->orderBy('name')->get());
        return response()->json(['tags' => $tags]);
    }
    
    public function questionPerTag(Tag $tag): TagResource
    {
        return new TagResource($tag);
    }
    
    
    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request)
    {
        $data = Validator::make($request->all(), [
            'name' => 'required|string|min:3|unique:tags,name'
        ]);

        $tag = Tag::create($data->validated());

        return response()->json(['tag' => $tag]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Tag $tag
     * @return bool
     */
    public function update(Request $request, Tag $tag)
    {

        $data = Validator::make($request->all(), [
            'name' => 'required|string|min:3|unique:tags,name'
        ]);

        $tag->update($data->validated());
       return $tag->isDirty();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Tag $tag
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tag $tag)
    {
        $tag->delete();
        return  response('success');
    }
}
