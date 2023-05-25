@extends('layouts.main')

@section('content')
<main>
<div class="container-fluid px-4">
                        <h1 class="mt-4">User</h1>                     
                        
                        <div class="card mb-4">
                            
                            <div class="card-body">
                                <table id="datatablesSimple" class="table table-stripped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Avatar</th>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Role</th>
                                            <th>Action</th>
                                           
                                        </tr>
                                    </thead>
                                    <tfoot>
                                    </tfoot>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            <img src="https://dummyimage.com/50x50/dee2e6/6c757d.jpg" alt="">
                                        </td>
                                        <td>Syihabudin Nafi'</td>
                                        <td>syihabudinnn@gmail.com</td>
                                        <td>089504522619</td>
                                        <td>Admin</td>
                                        <td>
                                            <a href="" class="btn btn-warning">Edit</a>
                                            <a href="" class="btn btn-danger">Delete</a>

                                        </td>   
                                    </tr>                                    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
@endsection