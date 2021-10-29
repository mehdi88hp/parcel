<?php

use Kaban\Components\Site\Home\Controllers\HomeController;
use Kaban\Components\Site\Home\Controllers\ReportController;
use Kaban\Models\Role;

Route::group( [
    'middleware' => [ 'web'],
    'namespace'  => '\Kaban\Components\Site\Home\Controllers',
    'prefix' => '/'
], function () {

    Route::get( '/', [
        'as'   => 'site.home',
        'uses' => 'HomeController@index'
    ] );

    Route::get( '/xx', function () {
        echo 'mehdi';
//        echo phpinfo();
    } )->name( 'home2' );

    Route::post( '/contact', [HomeController::class,'contact'] )->name( 'contact' );

    Route::get( '/admin/report/{type}', [ReportController::class,'report'])->name( 'admin.report' );
//    Route::get( '/', function () {
//        $user = request()->user(); //getting the current logged in customer
//    dd( $customer );
//    $customer = \Kaban\Models\User::find( 2 );
//    dd( $customer, $customer->hasRole( 'create-tasks' ) ); //will return true, if customer has role
//    $customer->givePermissionsTo( 'create-tasks' );// will return permission, if not null
//    dd( $customer->can( 'create-tasks' ) ); // will return true, if customer has permission
//    echo phpinfo();


//    $dev_role = Role::where( 'slug', 'developer' )->first();
//    $customer->roles()->attach( $dev_role );

//        return view( 'welcome' );
//    } );
} );
