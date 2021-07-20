<?php

namespace App\Http\Controllers;

use App\Models\Commodities;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GoodsController extends Controller
{
    private $db;
    public function __construct()
    {
        $this->db = new Commodities;
        // $this->middleware('auth');
    }

    public function index()
    {
        $data = $this->db->get();

        if(!empty($data)) {
            $data->toArray();
        }
        // return view('');
    }

    /**
     * View goods by id
     */
    public function view(Request $request)
    {
        $data = $this->db->find($request->id);

        if (!empty($data)) {
            $data->toArray();
            return response([
                'status' => true,
                'data' => $data
            ]);
        }
        return response([
            'status' => false,
            'data' => 'An error occured, goods not found!'
        ]);
    }
    /**
     * Create goods
     */
    public function create(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'name' => 'bail|required|max:255',
            'description' => 'required|max:255',
            'seller_id' => 'required|integer',
            'category_id' => 'required|integer',
            'price' => 'required|integer|min:500',
            'minimum_amount' => 'required|integer|min:500',
            'exchange_for' => 'array|min:1',
        ]);

        // save as type goods

        if ($validation->fails()) {

            $errors = $validation->errors()->all();
            return response([
                'status' => false,
                'error' => $errors
            ], 404);
        } else {
            $request->data->type = 'goods';

            $create = $this->db->create($request->data);

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
     * Update Goods
     */
    public function update(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'name' => 'bail|required|max:255',
            'description' => 'required|max:255',
            'seller_id' => 'required|integer',
            'category_id' => 'required|integer',
            'price' => 'required|integer|min:500',
            'minimum_amount' => 'required|integer|min:500',
            'exchange_for' => 'array|min:1',
        ]);

        // save as type goods

        if ($validation->fails()) {

            $errors = $validation->errors()->all();
            return response([
                'status' => false,
                'error' => $errors
            ], 404);
        } else {
            $request->data->type = 'goods';

            $update = $this->db->where('id', $request->data->id)
                ->update($request->data);

            if ($update) {
                return response([
                    'status' => true
                ]);
            } else {
                return response([
                    'status' => false,
                    'data' => 'An error occurred while updating details'
                ]);
            }
        }
    }

    /**
     * Delete Goods
     */
    public function delete(Request $request)
    {
        $exists = $this->db->find($request->id);

        if (!empty($exists)) {
            $this->db->where('id', $request->id)->delete();
            return response([
                'status' => true
            ]);
        } else {
            return response([
                'status' => false,
                'data' => 'An error occurred! Goods not found!'
            ]);
        }
    }
}
