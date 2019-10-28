<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
require  '../vendor/autoload.php'; 
use AfricasTalking\SDK\AfricasTalking;
use App\User;
use Auth;
class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $username   = "sandbox";
      $apikey     = "be9690d072dc648aab16da4f2ac5afcf76dcfeab147ce11f4e77e695be41c1f3";

            // Initialize the SDK
      $AT         = new AfricasTalking($username, $apikey);

      // Get the payments service
      $payments   = $AT->payments();

      // Set the name of your Africa's Talking payment product
      $productName  = "Kwanza Tukule";

      // Set the phone number you want to send to in international format
      $user = User::find(Auth::user()->id);
      $phoneNumber  = "$user->number";

      // Set The 3-Letter ISO currency code and the checkout amount
      $currencyCode = "KES";
      $amount       = 100.50;

      // Set any metadata that you would like to send along with this request.
      // This metadata will be included when we send back the final payment notification
      $metadata = [
          "agentId"   => "654",
          "productId" => "321"
      ];

      // Thats it, hit send and we'll take care of the rest.
      try {
          $result = $payments->mobileCheckout([
              "productName"  => $productName,
              "phoneNumber"  => $phoneNumber,
              "currencyCode" => $currencyCode,
              "amount"       => $amount,
              "metadata"     => $metadata
          ]);

          return redirect('/')->with('success', 'Payment has Been Sent!');
      } catch(Exception $e) {
          echo "Error: ".$e->getMessage();
          return redirect('/')->with('danger', '$e->getMessage()');
      }
      
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
