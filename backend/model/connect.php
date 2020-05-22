<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use DB;

class connect extends Model
{
    public static function signin(array $data){
    	 $email=$data['email'];
        $password=$data['password'];
        $firstname=$data['firstname'];
        $lastname=$data['lastname'];
        $DOB=$data['DOB'];
        $gender=$data['gender'];
        $mobile=$data['mobile'];
        $country=$data['country'];
        $res=DB::insert("insert into users(email,password,firstname,lastname,DOB,gender,mobile,country) values('$email','$password','$firstname','$lastname','$DOB','$gender','$mobile','$country')");
        return $res;
    }
    public static function check(array $data){
    	$email=$data['email'];
    	$ret=DB::table("users")->where('email','=',$email)->get();
    	return $ret;
    }
    public static function userlogin(array $data){
    	$ret=DB::table("users")->where($data)->get();
    	return $ret;
    }

}