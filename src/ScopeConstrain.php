<?php
/**
 * Created by PhpStorm.
 * User: chris
 * Date: 8/25/2018
 * Time: 3:53 PM
 */

namespace BaronVonPerko\Constrainable;


use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class ScopeConstrain implements Scope
{

    /**
     * Apply the scope to a given Eloquent query builder.
     *
     * @param  \Illuminate\Database\Eloquent\Builder $builder
     * @param  \Illuminate\Database\Eloquent\Model $model
     *
     * @return void
     */
    public function apply(Builder $builder, Model $model)
    {
        //
    }
}
