<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\QueryException;
use Exception;

class EventPartnerController extends Controller
{
    public function index()
    {
        if (session("admin") == NULL) return view("portal.login");
        return view("portal.home.eventpartner");
    }

    public function getDtdata()
    {
        if (session("admin") == NULL) return "sessionOut";
        $cats = DB::table("event_partners")->get()->toArray();
        $data["data"] = $cats;
        return json_encode($data);
    }

    public function store(Request $request)
    {
        if (session("admin") == NULL) return "sessionOut";
        if ($request->ajax()) {
            // dd(session("admin")->username);
            try {
                if(isset($request->team_id)) {
                    $valid = Validator::make($request->all(), [
                        "team_name" => 'required',
                        "team_designation" => 'required',
                        "active" => 'required'
                    ], [
                        "team_name" => "Enter the Team member's name",
                        "team_designation" => "Enter the Team member's designation",
                        "active" => 'Select the active status'
                    ]);
                }
                else {
                    $valid = Validator::make($request->all(), [
                        "team_name" => 'required',
                        "team_designation" => 'required',
                        "active" => 'required'
                    ], [
                        "team_name" => "Enter the Team member's name",
                        "team_designation" => "Enter the Team member's designation",
                        "active" => 'Select the active status'
                    ]);
                }
                if ($valid->fails()) {
                    $error = [];
                    $error["errors"] = $valid->errors();
                    return response($error, 422);
                }

                $data = DB::table("team_member");
                $req = $request->input();
                foreach ($request->file() as $name => $file) {
                    $filepath = $file->store("public/team");
                    $filepath = str_replace("public", "storage", $filepath);
                    $req[$name] = $filepath;
                }
                $req["created_by_admin"] = session("admin")->username;
                if (isset($req["team_id"])) {
                    $res = $data->where("team_id", $req["notice_id"]);
                    unset($req["team_id"]);
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
