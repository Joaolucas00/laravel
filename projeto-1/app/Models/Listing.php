<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    public function scopeFilter () {

    }
}


/** Prefixo scope
 *  Tem a finalidade de facilitar rotinas de consultas no seu model (Eloquent), 
 * trazendo funcionalidades prévias de consultas SQL, 
 * ajudando, então, no desenvolvimento e padronização de consultas. 
 * É divido em Global Scope ou Local Scope.
 *
 *  Já no Local Scope é um filtro preparado, 
 * ou atalho, que só é executado mediante chamada do método, 
 * sendo diferente do Global Scope que é sempre chamado de forma automática e transparente. 
 * Tem as mesmas características, 
 * mas a forma de invocação é o que difere. 
 */
























    // As Models, dentro da arquitetura MVC, são classes responsáveis pela leitura, escrita e validação de qualquer dado.
    /**O Eloquent é o ORM padrão do Framework PHP Laravel. 
     * Ele implementa o padrão Active Record e possui suporte aos bancos de dados relacionais MySQL, PostgreSQL, MS SQL Server e SQLite. */
/*
     namespace App\Models;

     class Listing {
         public static function all() {
             return [
                 [
                     'id' => 1,
                     'titulo' => 'Listing One',
                     'descricao' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, rem. Doloremque voluptate eligendi, eveniet eos quia labore cum, adipisci, blanditiis porro debitis assumenda. Error soluta quaerat, corrupti aliquid qui id?'
                 ],
                 [
                     'id' => 2,
                     'titulo' => 'Listing Two',
                     'descricao' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugiat corporis, quibusdam cum mollitia tempore fuga et! Accusamus architecto dolorem aliquid nisi deleniti animi aliquam, facilis officia voluptatem, possimus ipsum inventore mollitia minus, autem laboriosam reiciendis consequatur quasi minima optio veritatis molestias saepe omnis. Eveniet qui fuga veniam numquam consectetur sed?'
                 ],
                 [
                     'id' => 3,
                     'titulo' => 'Listing Three',
                     'descricao' => 'Lorem ipsum dolor sit amet, consectetur adipisicing da. Error soluta quaerat, corrupti aliquid qui id?'
                 ]
             ];
         }
 
         public static function find($id) {
             $listings = self::all();
             
             foreach ($listings as $lis) {
                 if ($lis['id'] == $id) {
                     return $lis;
                 }
             }
             return ['id' => 0];
         }
     }
     */