  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <!------ Include the above in your HEAD tag ---------->


  <div class="container">
      <div class="row">


          <link href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css" rel="stylesheet" media="screen">
          <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" type="text/css" rel="stylesheet">
          <!-- FORM  -->
          <div class="col-md-12">
              <form class="form-horizontal" id="form-edit-client">
                  <fieldset>
                      <!-- Form Name -->
                      <legend>Admin</legend>
              </form>
          </div>
          <!-- LIST -->
          <div class=col-md-12>
              <form id="form-list-client" action="{{ route('deleteall') }} " method="POST">
                  @csrf
                  @method('delete')
                  <div class="pull-right">
                      <a class="btn btn-default-btn-xs btn-primary" href="{{ route('logout') }}"></i>
                          Đăng xuất</a>
                      <button class="btn btn-default-btn-xs btn-success" href="{{ route('deleteall') }}"><i
                              class="glyphicon glyphicon-trash text-danger" style="color: #fff"></i> Xóa tất cả</button>
                  </div>

                  <table class="table table-bordered table-condensed table-hover">
                      <thead>
                          <tr>
                              <td>Name</td>
                              <th>Email</th>
                              <th>Status</th>
                              <th>Actions</th>
                          </tr>
                      </thead>
                      <tbody id="form-list-client-body">
                          @foreach ($users as $user)
                              <tr>
                                  <td>{{ $user->id }}</td>
                                  <td>{{ $user->email }}</td>
                                  <td>{{ $user->password }}</td>
                                  <td>
                                      <a title="edit this user" href="{{ route('edit', ['id' => $user->id]) }}"
                                          class="btn btn-default btn-sm "> <i
                                              class="glyphicon glyphicon-edit text-primary"></i> </a>
                                      <button title="delete this user" href="{{ route('delete', ['id' => $user->id]) }}"
                                          class="btn btn-default btn-sm "> <i
                                              class="glyphicon glyphicon-trash text-danger"></i> </button>
                                  </td>
                              </tr>
                          @endforeach
                      </tbody>
                  </table>
              </form>
          </div>
          <br> 
      </div>
  </div>
