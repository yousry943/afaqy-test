<?php

namespace App\GraphQL\Queries;
use App\vehicles;
class VehiclesSearch
{
    /**
     * @param  null  $_
     * @param  array<string, mixed>  $args
     */
    public function __invoke($_, array $args)
    {

        // TODO implement the resolver


        // return vehicles::where($args['column'], $args['search'])->where($args['filter_attribute'], $args['filter_data'])
        //   ->orderBy('DESC')
        // ->get();
        //desc
        //asc
        return vehicles::where($args['column'], $args['search'])
           ->orderBy('id',$args['sortby'])
        ->get();


     }
}
