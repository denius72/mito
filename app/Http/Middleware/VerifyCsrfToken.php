<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        '/admin/products/create',
        '/admin/products/createcategory',
        '/admin/products/editconfirm',
        '/admin/products/deleteconfirm',
        '/admin/products/getname',
        '/admin/products/getvalue'
    ];
}
