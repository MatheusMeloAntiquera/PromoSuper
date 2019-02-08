<?php

namespace App\Http\Controllers;

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

    $produtos = [
        ['nome' => 'Morango', 'supermercado' => 'Confiança', 'imagem' => 'images/morango.jpg', 'preco' => 4.00],
        ['nome' => 'Manga', 'supermercado' => 'Panelão' ,'imagem' => 'images/manga.jpg', 'preco' => 6.00],
        ['nome' => 'Kiwi', 'supermercado' => 'Barracão', 'imagem' => 'images/kiwi.jpg','preco' => 5.00 ],
        ['nome' => 'Kiwi', 'supermercado' => 'Pão de Açúcar', 'imagem' => 'images/kiwi.jpg', 'preco' => 6.99],
    ];

    return view('home/index', compact('produtos'));
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
