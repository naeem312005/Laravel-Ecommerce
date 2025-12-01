@extends('backend.app')
@section('title', 'Products')

@section('content')
<div class="main-content-wrap">

    <div class="flex items-center flex-wrap justify-between gap20 mb-27">
        <h3>Add Product</h3>
        <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
            <li>
                <a href="{{ route('dashboard') }}">
                    <div class="text-tiny">Dashboard</div>
                </a>
            </li>
            <li><i class="icon-chevron-right"></i></li>
            <li>
                <a href="{{ route('product') }}">
                    <div class="text-tiny">Products</div>
                </a>
            </li>
            <li><i class="icon-chevron-right"></i></li>
            <li><div class="text-tiny">Add product</div></li>
        </ul>
    </div>

    <!-- form-add-product -->
    <form class="tf-section-2 form-add-product" method="POST" enctype="multipart/form-data"
          action="{{ route('product.store') }}">

        @csrf

        <div class="wg-box">

            <!-- Product Name -->
            <fieldset class="name">
                <div class="body-title mb-10">Product name <span class="tf-color-1">*</span></div>
                <input class="mb-10" type="text" placeholder="Enter product name" name="name" required>
            </fieldset>

            <!-- Category -->
            <div class="gap22 cols">
                <fieldset class="category">
                    <div class="body-title mb-10">Category <span class="tf-color-1">*</span></div>
                    <div class="select">
                        <select name="category_id" required>
                            <option value="">Choose category</option>


                            @foreach ($categories as $categorie)
                            <option value="{{  $categorie->id }}">{{ $categorie->name }}</option>
                            @endforeach
                            
                            
                        </select>
                    </div>
                </fieldset>
            </div>

            <!-- Short Description -->
            <fieldset class="shortdescription">
                <div class="body-title mb-10">Short Description <span class="tf-color-1">*</span></div>
                <textarea class="mb-10 ht-150" name="short_description" required></textarea>
            </fieldset>

            <!-- Description -->
            <fieldset class="description">
                <div class="body-title mb-10">Description <span class="tf-color-1">*</span></div>
                <textarea class="mb-10" name="description" required></textarea>
            </fieldset>

        </div>

        <div class="wg-box">

            <!-- Image Upload -->
            <fieldset>
                <div class="body-title">Upload image <span class="tf-color-1">*</span></div>
                <div class="upload-image flex-grow">
                    <div id="upload-file" class="item up-load">
                        <label class="uploadfile" for="myFile">
                            <span class="icon"><i class="icon-upload-cloud"></i></span>
                            <span class="body-text">Click to browse image</span>
                            <input type="file" id="myFile" name="image" accept="image/*" required>
                        </label>
                    </div>
                </div>
            </fieldset>

            <div class="cols gap22">
                <!-- Price -->
                <fieldset class="name">
                    <div class="body-title mb-10">Price <span class="tf-color-1">*</span></div>
                    <input class="mb-10" type="number" step="0.01" name="price" required>
                </fieldset>

                <!-- Quantity -->
                <fieldset class="name">
                    <div class="body-title mb-10">Quantity <span class="tf-color-1">*</span></div>
                    <input class="mb-10" type="number" name="quantity" required>
                </fieldset>
            </div>

            <div class="cols gap22">
                <!-- Stock -->
                <fieldset class="name">
                    <div class="body-title mb-10">Stock</div>
                    <div class="select mb-10">
                        <select name="stock">
                            <option value="1">In Stock</option>
                            <option value="0">Out of Stock</option>
                        </select>
                    </div>
                </fieldset>

                <!-- Featured -->
                <fieldset class="name">
                    <div class="body-title mb-10">Featured</div>
                    <div class="select mb-10">
                        <select name="featured">
                            <option value="0">No</option>
                            <option value="1">Yes</option>
                        </select>
                    </div>
                </fieldset>
            </div>

            <div class="cols gap10">
                <button class="tf-button w-full" type="submit">Add product</button>
            </div>

        </div>
    </form>
    <!-- /form-add-product -->

</div>
@endsection
