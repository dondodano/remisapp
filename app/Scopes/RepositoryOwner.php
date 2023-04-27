<?php
namespace App\Scopes;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class RepositoryOwner implements Scope
{

    public function apply(Builder $builder, Model $model)
    {
        if(!in_array(strtolower(sessionGet('role')), ['super', 'admin']))
        {
            $builder->where('owner', sessionGet('id'))
                ->where('quarter', getCurrentQuarter()['value'])
                ->where('year', getCurrentYear()['value']);
        }else{
            $builder->where('quarter', getCurrentQuarter()['value'])
            ->where('year', getCurrentYear()['value']);
        }
    }
}
