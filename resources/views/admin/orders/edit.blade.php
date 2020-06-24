@extends('admin.layouts.app')


@section('dash-title','Post Edit')
@section('user','Asraful Haque')
@section('user-location','Dhaka')

@section('dash-page-content')
    
    <div class="col-sm-12">
        <section class="panel panel-default">
            <header class="panel-heading font-bold">Edit Post</header>
            <div class="panel-body">
                <form class="bs-example form-horizontal">

                    <div class="form-group">
                        <label class="col-lg-2 control-label">Title</label>
                        <div class="col-lg-10">
                            <input type="email" class="form-control" placeholder="Email">  
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Category</label>
                        <div class="col-sm-10">
                            <div class="checkbox i-checks">
                                <label>
                                    <input type="checkbox" value=""> <i></i> Option one </label>
                            </div>

                            <div class="checkbox i-checks">
                                <label>
                                    <input type="checkbox" value=""> <i></i> Option one </label>
                            </div>

                             <div class="checkbox i-checks">
                                <label>
                                    <input type="checkbox" value=""> <i></i> Option one </label>
                            </div>

                             <div class="checkbox i-checks">
                                <label>
                                    <input type="checkbox" value=""> <i></i> Option one </label>
                            </div>
                            
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Content</label>
                        <div class="col-lg-10">
                            <textarea name="" id="text_editor" cols="30" rows="10"></textarea> 
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            <div class="checkbox i-checks">
                                <label>
                                    <input type="checkbox" checked=""><i></i> Published
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            <button type="submit" class="btn btn-sm btn-default">Add post</button>
                            <a class="btn btn-sm btn-default" href="">Back</a>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>

@endsection