<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Request;
use Symfony\Component\Console\Input\Input;


class Recipe extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'recipe';


    /**
     * Categories
     * Récupérer la liste des recettes par catégorie
     */
    public function category()
    {
        return $this->belongsTo('App\Models\Category', 'category_id');
    }

    /**
     * Components
     */
    public function components()
    {
        return $this->hasMany('App\Models\Component', 'recipe_id');
    }

 
}
