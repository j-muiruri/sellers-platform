<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoriesController extends Controller
{

    public function __construct()
    {
        // $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Categories::all()->toArray();
        return $data;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'name' => 'bail|required|max:255'
        ]);

        if ($validation->fails()) {

            $errors = $validation->errors()->all();
            return response([
                'status' => false,
                'error' => $errors
            ]);
        } else {
            $request->data->type = 'goods';

            $create =  Categories::create($request->data);

            if ($create) {
                return response([
                    'status' => true
                ]);
            } else {
                return response([
                    'status' => false,
                    'data' => 'An error occurred while adding goods'
                ]);
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function show(Categories $categories)
    {
        $data = Categories::find($categories);

        if(!empty($data)) {
            return response([
                'status' => true,
                'data' =>  $data
            ]);
        } else {
            return response([
                'status' => false,
                'data' =>  'Error! Category not found'
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categories $categories)
    {
        $validation = Validator::make($request->all(), [
            'name' => 'bail|required|max:255'
        ]);

        if ($validation->fails()) {

            $errors = $validation->errors()->all();
            return response([
                'status' => false,
                'error' => $errors
            ]);
        } else {
            $data = Categories::where('id', $request->input('id'))
            ->update([
                'name' => $categories
            ]);
            if(!$data) {
                return response([
                    'status' => false,
                    'error' => 'An error occured while updating category'
                ]);
            }

            return response([
                'status' => true,
                'error' => 'Category updated succesfully'
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categories $categories)
    {
        $data = Categories::where('id', $categories)
        ->delete();
        if(!$data) {
            return response([
                'status' => false,
                'error' => 'An error occured while deleting category'
            ]);
        }

        return response([
            'status' => true,
            'error' => 'Category deleted succesfully'
        ]);
    }
}
