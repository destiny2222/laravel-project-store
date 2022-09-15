<?php



require __DIR__.'/admin.php';
require __DIR__.'/auth.php';
require __DIR__.'/Vendor.php';
require __DIR__.'/frontend.php';

// $items = array(
//     // ['id'=>1,
//     // 'price'=>234,]
//     ''
// );


// Route::get('sessions', function (Request $request){
//     /*
//      * Two major ways to create session data
//      * 1. By using the session method of the request object
//      * 2. By using the session global helper
//      */
//     /*
//      * First method
//      * The session() method has several child methods
//      * The put() method
//      */
//     $request->session()->put('username001','John Anderson');
//     //session()->put();

//     return 'I am working';
// });

// Route::get('get-data', function (Request $request){
//     $username = 'Christabel001';
// //    if ($request->session()->has('username001')){
// //        $username = $request->session()->get('username001');
// //      $username =  session('username001');
// //    }
//     if ($request->session()->has('data.msg')){
//         $username = $request->session()->get('data.msg');
//        // $username = $data['message'];
//     }
//     return $username;
// });

// Route::get('remove-data', function (Request $request){
//    if ($request->session()->has('username001')){
//        $request->session()->forget('username001');
//    }
//    return 'Session data removed';
// });

// Route::get('contact', function (){
//     $username = null;
//     if (session()->has('user_message_1')){
//         $data = session('user_message_1');
//         $username = $data['message'];
//     }
//     return view('form', compact('username'));
// });
// Route::post('contact', function (){
// //    $data = [
// //        'msg'=>[]
// //    ];
//    // dd(request('email'));
//     session()->put('data.msg',request('message'));
//     session()->flash('success','Data received successfully');
//     return back();
// });