@extends('student.mottaki')
@section('Title')
Delete &mdash;Student
@endsection
@section('UserName')
<div class="site-logo mr-auto w-25"><a href="/admin">My Admin</a></div>
@endsection
@section('nav.user')
<div class="mx-auto text-center">
  <nav class="site-navigation position-relative text-right" role="navigation">
    <ul class="site-menu main-menu js-clone-nav mx-auto d-none d-lg-block  m-0 p-0">
      <li><a href="/admin" class="nav-link">Profile</a></li>
      <li><a href="/admin/notes" class="nav-link">Notes</a></li>
      <li><a href="/admin/courses" class="nav-link">Courses</a></li>
      <li><a href="/admin/timetable" class="nav-link">Timetable</a></li>
    </ul>
  </nav>
</div>
@endsection
@section('content')
<style>
  .divider:after,
.divider:before {
  content: "";
  flex: 1;
  height: 1px;
  background: #eee;
}
</style>
<!-- Delete Modal HTML -->
<div id="deleteEmployeeModal" >
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{ Route('admin.delete2',['id'=>$id])}}" method="POST">
                @csrf
                @method('DELETE')
                <div class="modal-header">
                    <h4 class="modal-title">Delete Student</h4>
                    <a href="{{Route('admin.index')}}" type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</a>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to delete these Records?</p>
                    <p class="text-warning"><small>This action cannot be undone.</small></p>
                </div>
                <div class="modal-footer">
                    <a href="{{Route('admin.index')}}" ><input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel"></a>
                    <input type="submit" class="btn btn-danger" value="Delete">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
