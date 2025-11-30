@extends('backend.app')
@section('title','Slider Add')


@section('content')
    <div class="main-content-inner">
                            <!-- main-content-wrap -->
                            <div class="main-content-wrap">
                                <div class="flex items-center flex-wrap justify-between gap20 mb-27">
                                    <h3>Slide</h3>
                                    <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
                                        <li>
                                            <a href="{{ route('dashboard') }}">
                                                <div class="text-tiny">Dashboard</div>
                                            </a>
                                        </li>
                                        <li>
                                            <i class="icon-chevron-right"></i>
                                        </li>
                                        <li>
                                            <a href="{{ route('slider') }}">
                                                <div class="text-tiny">Slider</div>
                                            </a>
                                        </li>
                                        <li>
                                            <i class="icon-chevron-right"></i>
                                        </li>
                                        <li>
                                            <div class="text-tiny">Edit Slide</div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- new-category -->
                                <div class="wg-box">
                                    <form class="form-new-product form-style-1" action="{{ route('slider.update',$Slider->id) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <fieldset class="name">
                                            <div class="body-title">Tagline <span class="tf-color-1">*</span></div>
                                            <input class="flex-grow" type="text" placeholder="tagline" name="tagline" tabindex="0" value="{{ $Slider->tagline }}" aria-required="true" required="">
                                        </fieldset>
                                        <fieldset class="name">
                                            <div class="body-title">Title <span class="tf-color-1">*</span></div>
                                            <input class="flex-grow" type="text" placeholder="title" name="title" tabindex="0" value="{{ $Slider->title }}" aria-required="true" required="">
                                        </fieldset>
                                        <fieldset class="name">
                                            <div class="body-title">Subtitle <span class="tf-color-1">*</span></div>
                                            <input class="flex-grow" type="text" placeholder="subtitle " name="subtitle" tabindex="0" value="{{ $Slider->subtitle }}" aria-required="true" required="">
                                        </fieldset>
                                        <fieldset>
                                            <div class="body-title">Upload images <span class="tf-color-1">*</span>
                                            </div>
                                                @if($Slider->image)
                                                     <img src="{{ asset('uplods/slider/'.$Slider->image) }}" width="150" class="mb-3">
                                                @endif

                                            <div class="upload-image flex-grow">
                                                <div class="item up-load">
                                                    <label class="uploadfile" for="myFile">
                                                        <span class="icon">
                                                            <i class="icon-upload-cloud"></i>
                                                        </span>
                                                        <span class="body-text">Drop your images here or select <span class="tf-color">click to browse</span></span>
                                                        <input type="file" id="myFile" name="image">
                                                    </label>
                                                </div>
                                            </div>
                                        </fieldset>
                                        
                                        <div class="bot">
                                            <div></div>
                                            <button class="tf-button w208" type="submit">Save</button>
                                        </div>
                                    </form>
                                </div>
                                <!-- /new-category -->
                            </div>
                            <!-- /main-content-wrap -->
                        </div>
@endsection