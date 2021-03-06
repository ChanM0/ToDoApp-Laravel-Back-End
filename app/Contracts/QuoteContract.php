<?php 
namespace App\Contracts;

use Illuminate\Http\Request;

interface QuoteContract
{

  public function postQuote(Request $request, $user);

  public function getQuotes();

  public function putQuote(Request $request, $id);

  public function deleteQuote($id);

}
