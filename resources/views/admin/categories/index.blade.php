@extends('layouts.app')


@section('content')
    <div class="panel panel-default">
        <div class="class panel-body">
                <table class="class table table-strip">
                        <thead>
                            <tr>
                            <th>
                                Category name
                            </th>
                
                            <th>
                                Edit
                            </th>
                
                            <th>
                                Delete
                            </th>
                
                            </tr>
                        </thead>
                
                        <tbody>
                           @foreach ($categories as $category)
                            <tr>
                            <td>
                            {{$category->name}}    
                            </td>  
                            <td>
                            <a href="{{route('category.edit',['id'=>$category->id])}}" class="class btn btn-xs btn-info">    
                        Edit  
                    </a> 
                        </td> 
                        <td>
                                <a href="{{route('category.delete',['id'=>$category->id])}}" class="class btn btn-xs btn-danger">
                                Delete
                                </a>    
                             
                            </td>   
                            </tr>               
                           @endforeach
                
                        </tbody>
                    </table>
        </div>
    </div>
@stop