<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Database\QueryException;
use Exception;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function index(){
        // dd(session("admin"));
        if(session("admin") == NULL) return view("portal.login");
        // $this->admin_notifications();
        return redirect("/portal/dashboard");
    }

    public function login(Request $request){
        if($request->ajax()){
            $req = $request;
            // dd($req);
            $user = DB::table("admin_users")->where("email",$request->email)->where("password",DB::raw("md5('$request->password')"))->orWhere(function($query){
                // global $req;
                // dd($req);
                $query->where("username",$GLOBALS['request']->email)->where("password",DB::raw("md5('".$GLOBALS['request']->password."')"));
            })->first();
            // dd($user);
            if($user != NULL){
                // dd($user);
                $request->session()->put('admin', $user);
                echo "true";
            }
            else echo "Email / Password is wrong";
        }
        else echo "";
    }

    public function forget(Request $request){
        $user = DB::table("admin_users")->select(DB::raw("*,md5(CONCAT(name,password,'-',updated_at)) as token"))->where("email",$request->email)->orWhere("username",$request->email)->first();
        // dd($user);
        if($user != NULL) {
            if($user->email != NULL && $user->updated_at != NULL){
                // dd($user);
                $this->admin_forget_password_notification($user);
            }
            else echo "There is no active admin user.";
        }
        else echo "There is no active admin user.";
    }

    public function forgetPassword($token) {
        if(session("user") == NULL) {
            $user = DB::table("admin_users")->where(DB::raw("md5(CONCAT(name,password,'-',updated_at))"),"=",$token)->get();
            // dd($user);
            if(count($user) > 0){
                toastr()->success("Your link is verified");
                return view("auth.admin_reset_password",["user"=>$user[0],"token"=>$token,"type"=>"reset_password"]);
            }
            else {
                toastr()->warning("Your Password reset link is invalid or expired.");
                return redirect("/portal");
            }
        }
        else {
            return redirect("/portal");
        }
    }

    public function resetpassword(Request $request) {
        if($request->ajax()){
            // date_default_timezone_set('Asia/Kolkata');
            $user = DB::table("admin_users")->where(DB::raw("md5(CONCAT(name,password,'-',updated_at))"),$request->token);
            if($user != NULL){
                $up = $user->update(["password"=>md5($request->password)]);
                if($up) {
                    $request->session()->put('admin', DB::table("admin_users")->where("id",$user->id));
                    echo "true";
                }
                else echo "true";
            }
            else {
                echo "There is no active user";
            }

        }
    }

    public function usersverify($token){
        // dd($token);
        $user = DB::select(DB::raw("select * from admin_users where md5(concat(name,password,'-',updated_at))='".$token."'"));
        if(count($user) > 0 && $user[0]->email_verified_at == NULL) {
            return view("auth.admin_reset_password",["user"=>$user[0],"token"=>$token,"type"=>"reset_password"]);
        }
        else {
            toastr()->info('Invalid Password Reset Link');
            return redirect('/portal');
        }
    }

    public function dashboard(){
        // dd(session("admin"));
        if(session("admin") == NULL) return view("portal.login");
        try{
            //$count = DB::select("CALL `admin_dashboard_count`()");
            // dd($count);
            // $chats_from = WorkspaceChats::select(DB::raw("DISTINCT(wc_from),users.name,users.username,IF(employer_profile.portal_name = NULL,employer_profile.portal_name,profiles.portal_name) as portal_name,IF(employer_profile.user_image = NULL,employer_profile.user_image,profiles.user_image) as user_image"))->where("wc_to",session("admin")->username)->leftJoin("users","users.username","=","workspace_chats.wc_from")->leftJoin("employer_profile","employer_profile.created_by_user","=","workspace_chats.wc_from")->leftJoin("profiles","profiles.created_by_user","=","workspace_chats.wc_from")->get()->toArray();
            // dd($chats_from);
            // $this->admin_notifications();
            // toastr()->warning("500: Exception Occured");

            return view("portal.dashboard");
        }
        catch(Exception $e){
            // dd("Exception",$e);
            toastr()->warning("500: Exception Occured");
            return redirect("/home");
        }
    }

    public function users_list(){
        if(session("admin") == NULL) return view("portal.login");
        return view("portal.users");
    }

    public function logout(Request $request){
        $request->session()->flush();
        return redirect()->back();
    }

}
