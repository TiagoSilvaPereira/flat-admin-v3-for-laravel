# flat-admin-v3-for-laravel
Flat Admin v.3 theme adaptation for *Laravel Framework 5.3*

## About

This is a adptation of the [Flat Admin V.3 Theme](https://github.com/tui2tone/flat-admin-bootstrap-templates), a very nice and beautiful theme, for the Laravel 5.3 Framework.

## How to use it

First, create a Laravel 5.3 Project, with the command:

```
laravel new project_name
```

After the project is created, make the Auth (because this theme adaptation is for the Dashboard, and it needs Auth). Run the command inside the project folder:

```
php artisan make:auth
```

And, finally, download this repositorie (ZIP or clone), and copy the *public* and *resources* folder inside your project folder. Confirm the file overwrites.

Clear the compiled views:

```
php artisan view:clear
```

Now you can run your project with:

```
php artisan serve
```

# Usage Example

A simple listing view that uses the theme:

```
@extends('layouts.app')

@section('title', 'Products List')

<!-- As you can see, the search bar can be replaced for each view -->
@section('search')
<li class="navbar-search hidden-sm">
  <input id="search" type="text" placeholder="Pesquisar Produtos...">
  <button class="btn-search"><i class="fa fa-search"></i></button>
</li>
@endsection

@section('content')

<div class="row">
            <div class="col-xs-12">
                <div class="card">
            <div class="card-header">
                <a href="{{ route('home.product.create') }}">New Product</a>
            </div>
            <div class="card-body no-padding">
                <div class="table-responsive">
                    <table class="table table-hover card-table">
                        <thead>
                            <tr>
                                <th align="left">#</th>
                                <th align="left">Name</th>
                                <th align="left">Price</th>
                                <th align="left">Type</th>
                                <th align="center"></th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse($products as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->price }}</td>
                                <td>
                                    @if($product->type == 'product')
                                    <span class="badge badge-info badge-icon">
                                        <i class="fa fa-gift" aria-hidden="true"></i><span>Product</span>
                                    </span>
                                    @else
                                    <span class="badge badge-success badge-icon">
                                        <i class="fa fa-sticky-note-o" aria-hidden="true"></i><span>Service</span>
                                    </span>
                                    @endif
                                </td>
                                <td>
                                    <a href="" title="Editar">
                                        <button class="btn btn-success btn-xs">
                                            <i class="fa fa-pencil" aria-hidden="true"></i>
                                        </button>
                                    </a>
                                    <a href="" title="Excluir">
                                        <button class="btn btn-danger btn-xs">
                                            <i class="fa fa-times-circle-o" aria-hidden="true"></i>
                                        </button>
                                    </a>
                                </td>
                            </tr>
                            @empty
                                <tr><td colspan="5">No results matching the search...</td></tr>
                            @endforelse
                            
                            <!-- Make the pagination -->
                            <tr>
                                <td colspan="5">{{ $products->links() }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
```

Enjoy the theme!!!

# Contributing

You can send issues, PR's and other improvements for this repo. 

# License

MIT License