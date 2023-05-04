@extends('shop::layouts.master')

@section('page_title')
    Package HelloWorld
@stop

@section('content-wrapper')

    <div class="main">
    

        <div class="form theme-form" id="modalPage">
                    <form name="modalForm" class="needs-validation" id="myform" 
                    novalidate method="post"
                     action="{{ route('helloworld.store') }}">
                        @csrf
                        <div class="card-header">
                           
                            <div class="card-options"><a class="card-options-collapse"
                             href="#" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                             <a class="card-options-remove" href="#" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a></div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                               
                                <div class="col-sm-6 col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Name</label><span style="color:red"> * </span>
                                        <input class="form-control" id="focus" type="text" name="name" required>
                                          </div>
                                </div>
                                
                             
                                <div class="col-sm-6 col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">price</label> <span style="color:red"> * </span>
                                        <input class="form-control" type="text" name="price" placeholder="" value="{{ old('price') }}" required>
                                      
                                    </div>
                                </div>
                              
                              
                                <div class="col-sm-6 col-md-6" >
                                    <div class="mb-3">
                                        <label class="col-form-label">Description</label>
                                        <input style="border : 1px solid #aaa;" class="form-control" type="text" name="description" placeholder=" Address" value="{{ old('description') }}">
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                        <br>
                        <div class="card-footer text-end">
                            <button type="submit" class="action-btn"  onclick="setFocus()" value="submit" id="login-btn">Submit</button>
                        </div>
                    </form>
                </div>
        </div>  

    </div>

@stop