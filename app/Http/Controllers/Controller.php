<?php

namespace App\Http\Controllers;


abstract class Controller
{
  public function responseSuccess($data,$message){
    return response()->json([
        'success'=>true,
        'data'=> $data,
        'message'=>$message
    ]);
  }

  public function responseFailed($message){
    return response()->json([
        'success'=>true,
        'data'=>null,
        'message'=>$message
    ]);
  }
}

