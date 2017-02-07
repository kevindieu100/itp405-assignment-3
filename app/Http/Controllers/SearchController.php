<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SearchController extends Controller
{
   public function index()
   {
   		return view('dvds');
   }

   public function results()
   {
   		$dvdTitle = request('dvdTitle');

         //Commented in order to print out all dvd's when user navigates to /dvd --> displays all dvds
      		// if(!$dvdTitle){
            //        //should really just print out entire string
      		// 	return redirect('/dvds/search');
      		// }

         // SELECT title, genre_name, rating_name
         // FROM dvds
         // INNER JOIN genres
         // ON dvds.genre_id = genres.id
         // INNER JOIN ratings
         // on dvds.rating_id = ratings.id
         // WHERE title LIKE ?

   		$dvds = DB::table('dvds')
   			->select('title', 'rating_name', 'genre_name')
            ->join('ratings', 'dvds.rating_id', '=', 'ratings.id')
   			->join('genres', 'dvds.genre_id', '=', 'genres.id')
   			->where('title', 'LIKE', "%$dvdTitle%")
            ->orderby('title', 'asc')
   			->get();
   		
         // dd($dvds); 

   		return view('dvds-results', [
   			'dvds' => $dvds,
   			'search' => $dvdTitle
   		]);
   }
}
