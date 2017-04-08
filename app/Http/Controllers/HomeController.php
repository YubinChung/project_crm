<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('login');
    }

    public function doLogin(Request $request) {


        $credentials = [
            'user_id' => $request->user_id,
            'password' => $request->password
        ];

        // 입력값 유효성 검사
        $validator = Validator::make($credentials, [
            'user_id' => 'required',
            'password' => 'required'
        ], [
            'user_id.required' => '아이디를 입력해 주세요.',
            'password.required' => '패스워드를 입력해 주세요.',
        ]);

        if ($validator->fails()) {
            return $validator->errors();
        }

        // \Auth::check(); -> 확인만 해줌


        if (! \Auth::attempt($credentials)) { // -> 인증을 시도 후 맞으면 세션 정보를 만들어줌
            return ['login_message' => '로그인 정보를 확인해주세요'];

        }

        return ['redirect' => route('admin')];
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}