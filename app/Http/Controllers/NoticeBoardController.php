<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\QueryException;
use Exception;

class NoticeBoardController extends Controller
{
    public function index()
    {
        if (session("admin") == NULL) return view("portal.login");
        return view("portal.home.noticeboard");
    }

    public function getDtdata()
    {
        if (session("admin") == NULL) return "sessionOut";
        $cats = DB::table("notice")->get()->toArray();
        $data["data"] = $cats;
        return json_encode($data);
    }

    public function store(Request $request)
    {
        if (session("admin") == NULL) return "sessionOut";
        if ($request->ajax()) {
            // dd(session("admin")->username);
            try {
                if(isset($request->notice_id)) {
                    $valid = Validator::make($request->all(), [
                        "notice_name" => 'required',
                        "active" => 'required'
                    ], [
                        "notice_name" => "Enter the Banner's Title",
                        "active" => 'Select the active status'
                    ]);
                }
                else {
                    $valid = Validator::make($request->all(), [
                        "notice_name" => 'required',
                        "active" => 'required'
                    ], [
                        "notice_name" => "Enter the Banner's Title",
                        "active" => 'Select the active status'
                    ]);
                }
                if ($valid->fails()) {
                    $error = [];
                    $error["errors"] = $valid->errors();
                    return response($error, 422);
                }

                $data = DB::table("notice");
                $req = $request->input();
                foreach ($request->file() as $name => $file) {
                    $filepath = $file->store("public/banners");
                    $filepath = str_replace("public", "storage", $filepath);
                    $req[$name] = $filepath;
                }
                $req["created_by_admin"] = session("admin")->username;
                if (isset($req["notice_id"])) {
                    $res = $data->where("notice_id", $req["notice_id"]);
                    unset($req["notice_id"]);
                    // dd($req);
                    $res = $data->update($req);
                    // dd($res);
                } else $res = $data->insert($req);
                echo "true";
            } catch (QueryException $e) {
                if($e->getCode() == 23000){
                    return "Duplicate Order no found. Change the previous order.";
                }
                // echo $e->getMessage();
                return "500: Q Exception Occured";
            } catch (Exception $e) {
                // echo $e->getMessage();
                return "Exception Occured";
            }
        }
    }
}
