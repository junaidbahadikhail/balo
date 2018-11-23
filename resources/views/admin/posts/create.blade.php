@extends('layouts.app')


@section('content')
    <div class="panel panel-default">
           <div class="panel-heading">
                  Create a new post.
           </div>
           <div class="panel-body">
               <form action="/posts/store" method="POST">
               {{ csrf_field() }}
               
               <div class="form-group">   
                   <label for="title">Title</label>
                   <input type="text" name="title" class="form-control">
               </div>
             
               <div class="form-group">   
                    <label for="featured">Featured image</label>
                    <input type="file" name="featured" class="form-control">
                </div>
               
                <div class="form-group">   
                        <label for="Content">Content</label>
                   <textarea name="content" id="content" cols="5" rows="10" class="form-control"></textarea>
                   
                </div>
                    <div class="class form-group">
                        <div class="class text-center">
                            <button class="btn btn-success" type="submit">
                                Store post
                            </button>
                        </div>
                    </div>

            </form>
           </div>
    </div>

@endsection