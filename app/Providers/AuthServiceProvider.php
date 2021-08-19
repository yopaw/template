<?php

namespace App\Providers;

use App\Http\Controllers\ProductController;
use App\Models\Product;
use App\Models\Review;
use App\Models\Seller;
use App\Models\User;
use App\Policies\CartPolicy;
use App\Policies\RequestPolicy;
use App\Policies\ReviewPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //TODO DEFINE MANAGE PRODUCT GATE HERE


        //TODO DEFINE GATE IS ADMIN HERE


        //TODO DEFINE GATE IS SELLER HERE


        //TODO DEFINE GATE IS MEMBER HERE

        //TODO DEFINE GATE CREATE-REVIEW WITH POLICY HERE
        //TODO DEFINE GATE UPDATE-REVIEW WITH POLICY HERE

        //TODO DEFINE GATE VIEW-CART WITH POLICY HERE
        //TODO DEFINE GATE CREATE-REQUESTS WITH POLICY HERE
        //TODO DEFINE CREATE-CART WITH POLICY HERE

    }
}
