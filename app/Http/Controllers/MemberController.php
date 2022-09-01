<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller{

  function countData(){
   $result = Member::count();
   return $result;
  }

  function maxData(){
   $result = Member::max('id'); // must write the column name to find the max value of that column//
   return $result;
  }

  function minData(){
   $result = Member::min('id'); // must write the column name to find the minimum value of that column//
   return $result;
  }

  function avgData(){
   $result = Member::avg('id'); // must write the column name to find the avarage value of that column//
   return $result;
  }


  function sumData(){
   $result = Member::sum('id'); // must write the column name to find the total value of that column//
   return $result;
  }




}