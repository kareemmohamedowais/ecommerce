
        @extends('dashboard.master')


        @section('title')
        {{__('main_header.edit_product')}}
        @endsection

        @section('css')

        @endsection
        @section('content')

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">{{__('main_header.edit_product')}}</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">{{trans('buttons_trans.edit')}}</li>
                        <li class="breadcrumb-item "><a href="{{route('products.index')}}">{{__('main_header.products')}}</a></li>
                        <li class="breadcrumb-item ">{{trans('main_sidbar_translate.dashboard')}}</li>
                        </ol>
                    </div><!-- /.col -->
                    </div><!-- /.row -->
                </div>

        {{-- ================================================== --}}
            <!-- Content Wrapper. Contains page content -->
            <div class="card-body">
                @if(session('error_catch'))
                <div class="bg-danger">{{session('error_catch')}}</div>
                @endif
                <form action="{{route('products.update' , $product->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <label for="cat_name_ar">{{trans('product_trans.category')}}</label>
                        <select name="category_id" id="" class="form-control">
                            <option value="">{{trans('product_trans.please_select')}}</option>
                            @foreach($categories as $category)
                                <option value="{{$category->id}}" {{($product->category_id == $category->id) ? 'selected' : ''}} >{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="name_ar">{{trans('product_trans.name_ar')}}</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control @error('name_ar') is-invalid @enderror" name="name_ar" value="{{$product->getTranslation('name','ar')}}">
                            </div>
                            @error('name_ar')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="name_en">{{trans('product_trans.name_en')}}</label>
                            <div class="input-group mb-3 col">
                                <input type="text" class="form-control @error('name_en') is-invalid @enderror" name="name_en" value="{{$product->getTranslation('name','en')}}">

                            </div>
                            @error('name_en')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label for="slug">{{trans('product_trans.slug')}}</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control  @error('slug') is-invalid @enderror" name="slug" value="{{$product->slug}}">
                            </div>
                            @error('slug')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                            <div class="row">
                                <label for="image">{{trans('product_trans.image')}}</label>
                                <div class="col">
                                    <img src="{{asset($route.'/'.$product->image)}}" alt="" class="img-thumbnail" style="max-width:100px;">
                                </div>
                                <div class="col">
                                    <input type="file" class="form-control  @error('image') is-invalid @enderror" name="image">
                                </div>
                                @error('image')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                        </div>

                    </div>

                    <div class="row">
                        <div class="col">
                            <label for="short_description_ar">{{trans('product_trans.short_description_ar')}}</label>
                            <div class="input-group mb-3">
                                <textarea name="short_description_ar" rows="3" cols="3"
                                        class="form-control @error('short_description_ar') is-invalid @enderror">{{$product->getTranslation('short_description','ar')}}</textarea>
                            </div>
                            @error('short_description_ar')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="short_description_en">{{trans('product_trans.short_description_en')}}</label>
                            <div class="input-group mb-3">
                                <textarea name="short_description_en" rows="3" cols="3"
                                        class="form-control @error('short_description_en') is-invalid @enderror">{{$product->getTranslation('short_description','en')}}</textarea>
                            </div>
                            @error('short_description_en')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label for="description_ar">{{trans('product_trans.description_ar')}}</label>
                            <div class="input-group mb-3">
                                <textarea name="description_ar" rows="3" cols="3"
                                        class="form-control @error('description_ar') is-invalid @enderror">{{$product->getTranslation('description','ar')}}</textarea>
                            </div>
                            @error('description_ar')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="description_en">{{trans('product_trans.description_en')}}</label>
                            <div class="input-group mb-3">
                                <textarea name="description_en" rows="3" cols="3"
                                        class="form-control @error('description_en') is-invalid @enderror">{{$product->getTranslation('description','en')}}</textarea>
                            </div>
                            @error('description_en')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label for="status">{{trans('product_trans.status')}}</label>
                            <div class="input-group mb-3">
                                <input type="checkbox" {{($product->status == 1 ) ? 'checked' : ''}} class="" id="status" name="status">
                            </div>

                        </div>
                        <div class="col">
                            <label for="trend">{{trans('product_trans.trend')}}</label>
                            <div class="input-group mb-3 col">
                                <input type="checkbox" {{($product->trend == 1) ? 'checked' : ''}} class="" id="trend" name="trend">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label for="price">{{trans('product_trans.price')}}</label>
                            <div class="input-group mb-3">
                                <input type="number" name="price"
                                    class="form-control @error('price') is-invalid @enderror" value="{{$product->price}}">
                            </div>
                            @error('price')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="selling_price">{{trans('product_trans.selling_price')}}</label>
                            <div class="input-group mb-3">
                                <input type="number" name="selling_price"
                                    class="form-control @error('selling_price') is-invalid @enderror" value="{{$product->selling_price}}">
                            </div>
                            @error('selling_price')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label for="qty">{{trans('product_trans.qty')}}</label>
                            <div class="input-group mb-3">
                                <input type="number" name="qty"
                                    class="form-control @error('qty') is-invalid @enderror" value="{{$product->qty}}">
                            </div>
                            @error('qty')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="tax">{{trans('product_trans.tax')}}</label>
                            <div class="input-group mb-3">
                                <input type="number" name="tax"
                                    class="form-control @error('tax') is-invalid @enderror" value="{{$product->tax}}">
                            </div>
                            @error('tax')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label for="meta_title">{{trans('product_trans.meta_title')}}</label>
                            <div class="input-group mb-3">
                            <input type="text" name="meta_title" class="form-control @error('meta_title') is-invalid @enderror" value="{{$product->meta_title}}">
                            </div>
                            @error('meta_title')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label for="meta_description_ar">{{trans('product_trans.meta_description_ar')}}</label>
                            <div class="input-group mb-3">
                            <textarea name="meta_description_ar" rows="3" cols="3"
                                    class="form-control @error('meta_description_ar') is-invalid @enderror">{{$product->getTranslation('meta_description','ar')}}</textarea>
                            </div>
                            @error('meta_description_ar')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="meta_description_en">{{trans('product_trans.meta_description_en')}}</label>
                            <div class="input-group mb-3">
                            <textarea name="meta_description_en" rows="3" cols="3"
                                    class="form-control @error('meta_description_en') is-invalid @enderror">{{$product->getTranslation('meta_description','en')}}</textarea>
                            </div>
                            @error('meta_description_en')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label for="meta_keywords">{{trans('product_trans.meta_keyword')}}</label><span
                                class="text-danger">{{trans('product_trans.meta_keyword_note')}}</span>
                            <div class="input-group mb-3">
                            <textarea name="meta_keywords" rows="3" cols="3"
                                    class="form-control @error('meta_keywords') is-invalid @enderror">{{$product->meta_keywords}}</textarea>
                            </div>
                            @error('meta_keywords')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <button type="submit" class="btn btn-outline-primary">{{trans('buttons_trans.update')}}</button>
                </form>
            </div>

        @endsection

        @section('script')

        @endsection
