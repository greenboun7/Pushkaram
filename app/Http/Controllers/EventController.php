<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
        if(session("admin") == NULL) return view("portal.login");
        return view("portal.categories");
    }

    public function getDtdata(){
        if(session("admin") == NULL) return "sessionOut";
        $cats = DB::table("categories")->get()->toArray();
        $data["data"] = $cats;
        return json_encode($data);
    }

    public function getDDdata(){
        if(session("admin") == NULL) return "sessionOut";
        $cats = DB::table("categories")->select(DB::raw("category_id as id,category_name as name"))->where("active",1)->get()->toArray();
        return json_encode($cats);
    }

    public function store(Request $request){
        if(session("admin") == NULL) return "sessionOut";
        if($request->ajax()){
            // dd(session("admin")->username);
            try{
                    $valid = Validator::make($request->all(), [
                        'category_name'=>'required',
                        'category_type'=>'required',
                        'active'=>'required|integer'
                    ],[
                        'category_name.required'=>'"Category name" field is required',
                        'category_type.required'=>'Select the "Category Type"',
                        'active.required'=>'Update the active "Status"'
                    ]);
                    if($valid->fails()){
                        $error = [];
                        $error["errors"] = $valid->errors();
                        return response($error,422);
                    }

                $data = DB::table("categories");
                $req = $request->input();
                foreach($request->file() as $name => $file){
                    $filepath = $file->store("public/categories");
                    $filepath = str_replace("public","storage",$filepath);
                    $req[$name] = $filepath;
                }
                $req["created_by_admin"]=session("admin")->username;
                if(isset($req["category_id"])) {
                    $res = $data->where("category_id",$req["category_id"]);
                    unset($req["category_id"]);
                    // dd($req);
                    $res = $data->update($req);
                    // dd($res);
                }
                else $res = $data->insert($req);
                echo "true";
            }
            catch(QueryException $e){
                echo $e->getMessage();
                return "500: Q Exception Occured";
            }
            catch(Exception $e){
                echo $e->getMessage();
                return "Exception Occured";
            }
        }
    }
}
