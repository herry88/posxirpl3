@extends('layouts.master')

@section('title')
    <title>Category Page</title>
@endsection

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h1 class="m-0 text-dark">Category</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Home</li>
                  </ol>
                </div><!-- /.col -->
              </div><!-- /.row -->
            </div><!-- /.container-fluid -->
          </div>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                  <div class="card card-info">
                    <div class="card-header">
                      <h3 class="card-title">Category Form</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form class="form-horizontal">
                      <div class="card-body ">
                        <div class="form-group row">
                          <label for="inputEmail3" class="col-sm-5 col-form-label">Name</label>
                          <div class="col-sm-10">
                            <input type="text" name="name" class="form-control" id="inputEmail3" placeholder="Email">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputPassword3" class="col-sm-5 col-form-label">Description</label>
                          <div class="col-sm-10">
                            <input type="text" name="description" class="form-control" id="inputPassword3" placeholder="Password">
                          </div>
                        </div>
                        
                      </div>
                      <!-- /.card-body -->
                      <div class="card-footer">
                        <button type="submit" class="btn btn-info">Save</button>
                        <button type="submit" class="btn btn-default float-right">Cancel</button>
                      </div>
                      <!-- /.card-footer -->
                    </form>
                  </div>

                  <div class="col-md-6">
                    <div class="card">
                      <div class="card-header">
                        <h3 class="card-title">Data Category</h3>
        
                        <div class="card-tools">
                          <ul class="pagination pagination-sm float-right">
                            <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                          </ul>
                        </div>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body p-0">
                        <table class="table">
                          <thead>
                            <tr>
                              <th style="width: 10px">#</th>
                              <th>Name</th>
                              <th>Description</th>
                              <th style="width: 40px">Tools</th>
                            </tr>
                          </thead>
                          <tbody>
                            @php
                             $no = 1;   
                            @endphp
                            @forelse ($categories as $c)
                                <tr>
                                   <td>{{ $no++ }}</td>
                                   <td>{{ $c->name }}</td>
                                   <td>{{ $c->description }}</td>
                                   <td>&nbsp;</td>
                                </tr>
                            @empty
                                <tr>
                                  <td colspan="4" class="text-center">Tidak Ada Data</td>
                                </tr>
                            @endforelse
                          </tbody>
                        </table>
                      </div>
                      <!-- /.card-body -->
                    </div>
                  </div>
                </div>
            </div>
        </section>
    </div>
@endsection