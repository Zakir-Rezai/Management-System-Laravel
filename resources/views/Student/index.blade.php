@extends('layout.app')

@section('title', 'Students List')

<!-- Here We have the students list -->
@section('content')  
  <div class="student-table pt-3 px-4 h-100">
    <!-- Here We have the top bar -->  
    <div class="row d-flex flex-row justify-content-between pb-2 bord">
      <h5 class="title mb-0 mt-1">Students List</h5>
      <div class="">
        <a href="/Fee_table" type="button" class="btn btn-sm mr-1">Payment Table</a>
        <a href="/Students/create" type="button" class="btn btn-sm">Add New Student</a>
      </div>
    </div>

    <!-- Here We have the main part -->
    <div class="row outer-div mt-3">
     <div class="col-xl-9 col-lg-8 col-md-8 col-sm-12 p-0 pr-1">
      <div class="inner-div m-0 bg-white p-4">
        <table class="table table-bordered text-center">
          <thead>
              <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Father Name</th>
                <th>Register Date</th>
                <th>Category</th>
                <th>Gender</th> 
              </tr> 
          </thead>
          <tbody>
            @foreach ($BigTableKey as $Student)
              <tr>
                <td><a href="Students/{{ $Student->id }}" class="text-purple">{{ $Student->first_name }}</a></td>
                <td>{{ $Student->last_name }}</td>
                <td>{{ $Student->father_name }}</td>
                <td>{{ $Student->register_date }}</td>
                <td>{{ $Student->category }}</td>
                <td>{{ $Student->gender }}</td>   
              </tr>
            @endforeach
          </tbody> 
        </table>
      </div>  
     </div> 


     <div class="col-xl-3 col-lg-4 col-md-4 col-sm-12 p-0 pl-2">
      <!-- Here We have the right side search div part -->
      <div class="search-div bg-white p-4">
        <h6 class="m-0 text-purple"><span class="fa fa-search text-orchid mr-2"></span>You can search here.</h6>
        <form action="{{ route('Search') }}" method="POST">
          <div class="input-group mt-3">
            <input type="text" class="form-control" placeholder="Enter name here..." name="search" id="search">
            <div class="input-group-append">
            <button type="submit" name="submit" class="fa fa-search input-group-text bg-purple text-white"></button>
            <!--<span class="fa fa-search input-group-text bg-purple text-white"></span> -->
            </div>
          </div>
          @csrf
        </form>
      </div>

      <!-- Here We have the right side info div part -->
      <div class=" info-div bg-white p-4">
        <h6 class="m-0 mt-1 text-purple"><span class="fa fa-info-circle text-orchid mr-2"></span>More info about students.</h6>
        <table class="table table-bordered text-center mt-2 text-purple">
          <tbody>
            <tr>
              <td>Total Category</td>
              <td>{{ $Total_Categories }}</td>
            </tr>
            <tr>
              <td>Total Student</td>
              <td>{{ $Total_Student }}</td>
            </tr>
          </tbody>
        </table>

        <hr class="mt-4 bg-purple">
        <h6 class="m-0 mt-4 text-purple"><span class="fa fa-info-circle text-orchid mr-2"></span>Details about category.</h6>
        <div class="m-0 p-0 mt-4 w-100 bar">
          <span class="txt m-0 p-0 mr-2 text-orchid">Under 14</span>
          <div class="progress">
            <div class="progress-bar bg-purple" style="width: {{$Under_14}}%"><span class="amount">{{(int)$Under_14}}%</span></div>
          </div>
        </div>

        <div class="m-0 p-0 mt-3 w-100 bar">
          <span class="txt m-0 p-0 mr-2 text-orchid">Under 18</span>
          <div class="progress">
            <div class="progress-bar bg-purple" style="width: {{$Under_18}}%"><span class="amount">{{(int)$Under_18}}%</span></div>
          </div>
        </div>
        
        <div class="m-0 p-0 mt-3 w-100 bar">
          <span class="txt m-0 p-0 mr-2 text-orchid">Under 24</span>
          <div class="progress">
            <div class="progress-bar bg-purple" style="width: {{$Under_24}}%;"><span class="amount">{{(int)$Under_24}}%</span></div>
          </div>
        </div>
      </div>
     </div>
    </div>
  </div>  
@endsection