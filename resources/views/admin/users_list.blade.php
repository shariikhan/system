@extends('admin.master')

@section('content');
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Users list
            
            </h1>
            
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{asset('admin')}}">Home</a></li>
              <li class="breadcrumb-item active">Users list</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <!-- /.card -->

      <div class="card">
              <div class="card-header">
                <h3 class="card-title">Manage Users list</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Sr</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Created</th>
                    <th>Actions</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($users_list as $users_lists)
                  <tr>
                    <td><?php echo $users_lists['id'];?></td>
                    <td><?php echo $users_lists['email'];?></td>
                    <td><?php echo $users_lists['display_name'];?></td>
                    <td><?php echo $users_lists['created_at'];?></td>
                    <td><i class="fas fa-edit" data-toggle="modal" data-target="#modal-default_<?php echo $users_lists['id'];?>"></i>&nbsp;&nbsp;</td>
                  </tr>

                   <!-- /.update modal-started -->
                   <div class="modal fade" id="modal-default_<?php echo $users_lists['id'];?>">
                    <div class="modal-dialog modal-lg">

                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title">Update User Role</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">

                        <div class="row">
                          <div class="form-group col-md-6">
                            <label for="exampleInputEmail1">Email:</label>
                            <input type="text" disabled value="<?php echo $users_lists['email'];?>" class="form-control" id="exampleInputEmail1" >
                          </div>
                          <div class="form-group col-md-6">
                            <label for="exampleInputEmail1">Role:</label>
                            <select class="form-control">
                                        <option value="1" <?php if($users_lists['display_name'] == 'Superadministrator'){ echo 'Selected';}?>>Superadministrator</option>
                                        <option value="1" <?php if($users_lists['display_name'] == 'Administrator'){ echo 'Selected';}?>>Administrator</option>
                                        <option value="1" <?php if($users_lists['display_name'] == 'User'){ echo 'Selected';}?>>User</option>
                            </select>
                          </div>
                        </div>

                        </div>
                        <div class="modal-footer justify-content-between">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                      </div>


                      <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                   </div>
                  <!-- /.update modal-ended -->





                  @endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Sr</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Created</th>
                    <th>Actions</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  @endsection