<?php
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use Symfony\Component\HttpFoundation\Response;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome'); //starting page
// });
Route::get('/', function() {
    // $client = new GuzzleHttp\Client();
    // $res = $client->request('GET', 'localhost/eapi/public/test');//'https://api.github.com/repos/ruhi16/pqrs');//'https://google.com/');

    // dd($res);



    // $httpClient = new GuzzleHttp\Client(); // version 6.x
    // $headers = ['X-API-KEY' => '123456'];
    // $request = $httpClient->request('GET', 'http://localhost:8000/api/products',  $headers);//["timeout" => 3000],
                    // $response = $httpClient->send($request, ['timeout' => 2]);

                    // echo $request->getStatusCode();
                    // print_r($request->getHeader('content-type'));
                    // echo $request->getHeader('content-type');
    // echo $request->getBody();
    // die();




    // $client = new \GuzzleHttp\Client([
    //     'base_uri' => 'http://localhost:8000',
    //     'timeout'  => '3000',
    //     'defaults' => [
    //         'exceptions' => false
    //       ]
    //     ]);
    //
    //     $response = $client->get('/api/products/1');
    //     echo $response->getBody();











    // $client = new \GuzzleHttp\Client([
    //     'base_uri' => 'http://localhost:8000',
    //     'timeout'  => '3000',
    //     'defaults' => [
    //         'exceptions' => false
    //       ]
    //     ]);    
    
    // $email = 'hndas15@gmail.com';
    // $password = 'secret';

    // $response = $client->post('http://localhost:8000/oauth/token/', [
    //       'form_params' => [
    //             'username' => $email,
    //             'password' => $password,
    //             'grant_type' => 'password',
    //             'client_id' => env('API_CLIENT_ID'),                //2
    //             'client_secret' => env('API_CLIENT_SECRET'),        //lJqtFWv9GvgLRqtYVedPGnFRKWluOsk9B7VZF2wP
    //             'scope' => '*'],
    //         ]);


    // dd(json_decode((string) $response->getBody(), true));
    // echo $response->getBody();





    $httpClient = new GuzzleHttp\Client(); // version 6.x
    $headers = [
            'Accept'=>'application/json', 
            'Content-Type'=>'application/json', 
            'Authorization'=>'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjY1ZDc3YmZkNDBkYjFhOWU5YjBiYTYzMzE5YWM4NzA3YjBhOGI5YmJhYmYzNGYzNGQxZWFhZmI4Mjg4YzgzMDYxYWI1ZjNiYjg0OWRkZTdkIn0.eyJhdWQiOiIyIiwianRpIjoiNjVkNzdiZmQ0MGRiMWE5ZTliMGJhNjMzMTlhYzg3MDdiMGE4YjliYmFiZjM0ZjM0ZDFlYWFmYjgyODhjODMwNjFhYjVmM2JiODQ5ZGRlN2QiLCJpYXQiOjE1NDYzNjU5NjUsIm5iZiI6MTU0NjM2NTk2NSwiZXhwIjoxNTc3OTAxOTY1LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.bBkvdZIUBV22BOACWbyQofiOQLIBTUWauuMQLVF4u-f4J1X9SS3LPs-oxV2C00iuhkeoDzyjVvcR02t6WSEKQVpm4NzF3Tee5cgpMewg9zHs0G7pc9pbCf_leFBuQHCicN8oWFdnAuQler58f9KyrbM7wVX9H6rfXbetivZd-ewN2i14yvEAFjS73h7NNFDmSTNcuZmG3eWdAJIVyLorRxSandCL5Gj2nxQ0JgZmlbO11SLAMTE8MSiif57HdtpFg1v5TQpcru4l-2NLLjAuJmpqJre8OimHE2a_SovHp6ksiDYhSS63gVe3lzN9i3xrCKXa5-t1uZPuv6DRDCSPnWaUkixfobALLOdC9ampY6kRuqq0Yq2twUfR7waDoFlp_MIvLOMOxdxLlMxuqHokcXUP6Juy1N82Q9DtnGSaXZuU_05EtTTDQ2PrvVzH_VrNde6tF4N9QvBFTtLCoZEGlVPYfOvuHrHzVbC95vEiYnVhs2pnHqiZbhmUx8TxE-gZ4sRpeYjvabyarLFORDxP0RhsdcaopA0S53ohh2NAsOMNw853zYcNi0wkQhrtZcuUlb4Kfs7O6PWnmCDePtCsTPieTqQqr-_NU45pDrj2R5xkwnwUtKpvsgEvmVXBSqpoOTQkKIRg_U4e80a_X10JYTWp_R5xG8u4Xz8x9rPRA2k'
        ];//['X-API-KEY' => '123456'];
    $body =  [
                "grant_type"	=> "password",
                "client_id"		=> "2",
                "client_secret" => "lJqtFWv9GvgLRqtYVedPGnFRKWluOsk9B7VZF2wP",
                "username"		=> "hndas15@gmail.com",
                "password"		=> "secret"
        ];//required only for POST request

        
    $request = $httpClient->request('GET', 'http://localhost:8000/api/user', ['headers'=> $headers]);//["timeout" => 3000],
                    // $response = $httpClient->send($request, ['timeout' => 2000]);

                    // print_r($request->getHeader('content-type'));
                    // echo implode(', ',$request->getHeader('content-type'));
                    // echo '<br>';
    dd(json_decode( (String)$request->getBody(), true ) );
    // echo $request->getStatusCode();
    // dd($request->getBody());
    
    die();






});

Auth::routes();

Route::group(['middleware'=>'auth'], function(){
    Route::get('/home', 'HomeController@index')->name('home');

    Route::group(['middleware'=>'user'], function(){
        Route::get('/users',  'UserController@users');
        Route::get('/users/{id}', 'UserController@usersDetils')->middleware('checkUser');


    });



    Route::group(['middleware'=> 'admin'], function(){
        Route::get('/admins', 'AdminController@admins');

    });

});

// Route::get('/test', function(){
//     return response([
//         'data' => 'test data'
//     ], 200);
// });
// Route::get('/test', function(){
//     $user = App\User::find(3);
//     echo "<b>User: ".$user->name. "</b><br>";
//     foreach($user->roles as $role){
//         echo "Role: ". $role->name ."<br>";
//     }
//     echo "<Br>";
//     $role = App\Role::find(2);
//     echo "<b>Role: ".$role->name. "</b><br>";
//     foreach($role->users as $user){
//         echo "Role: ". $user->name ."<br>";
//     }
//     echo "<br>".session('key');
// });
