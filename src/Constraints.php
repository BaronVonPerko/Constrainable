<?php

namespace BaronVonPerko\Constrainable;


use Illuminate\Database\Eloquent\Builder;

trait Constraints
{
    public static function bootConstraints()
    {
        static::addGlobalScope('constraints', function(Builder $builder) {
             $builder->constrain(request('constraints'));
        });
    }

    public function scopeConstrain($query, $constraints)
    {
        $constraints = (array)json_decode($constraints);

        if (isset($this->constrainables)) {

            foreach ($this->constrainables as $constrainable) {
                if (array_key_exists($constrainable, $constraints)) {
                    $value = $constraints[$constrainable];
                    $query = $query->where($constrainable, $value);
                }
            }

        }

        if (isset($this->constrainableScopes)) {
            foreach ($this->constrainableScopes as $key=>$scope) {
                if (array_key_exists($key, $constraints) && $constraints[$key] == true) {
                    call_user_func_array([$this, $scope], [$query]);
                }
            }
        }

        return $query;

    }

}
