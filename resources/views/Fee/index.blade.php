@extends('layout.app')

@section('title', 'Students List')

<!-- Here We have the students list -->
@section('content')  
  <div class="student-table pt-3 px-4 h-100">
    <!-- Here We have the top bar -->  
    <div class="row d-flex flex-row justify-content-between pb-2 bord">
      <h5 class="title mb-0 mt-1">Payment List</h5>
      <div class="">
        <a href="/student_table" type="button" class="btn btn-sm mr-1">Students Table</a>
        <a href="#" type="button" class="btn btn-sm" id="button">Pay</a>
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
                <th>Father Name</th>
                <th>Trainer</th>
                <th>Payment Date</th>
                <th>Fee Amount</th> 
              </tr> 
          </thead>
          <tbody>
            @foreach ($BigTableKey as $Student)
              <tr>
                <td><a href="Students/{{ $Student->id }}" class="text-purple">{{ $Student->first_name }}</a></td>
                <td>{{ $Student->father_name }}</td>
                <td>{{ $Student->trainer }}</td>
                <td>{{ $Student->pay_date }}</td>
                <td>{{ $Student->fee_amount }}</td>   
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
        <form action="{{ route('FeeTableSearch') }}" method="POST">
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
  
  <div class="bg-modal">
    <div class="modal-content p-3 animated bounceInDown">
      <!-- Here We have the top bar -->  
      <div class="row d-flex flex-row justify-content-between m-0 p-0 pb-1 bord">
        <h6 class="title mb-0 mt-1">Payment Form</h6>
        <div class="">
          <a href="#" type="button" class="btn btn-sm fa fa-close p-0 m-0" id="close"></a>
        </div>
      </div>

      <form action="{{ route('Students_Fee') }}" method="post">
        <div class="form-group px-5 pt-5">
          <div class="d-flex flex-row justify-content-start m-0 p-0">
            <input type="text" class="form-control mb-4" placeholder="Name" id="firstname" value="{{ old('first_name') ?? $fee->first_name }}" name="first_name" required>
            @error('first_name')
                <span class="fa fa-info-circle text-danger mt-2 ml-2" data-toggle="tooltip" data-placement="top" title="{{ $errors->first('first_name') }}"></span>
            @enderror 
          </div>
          <div class="d-flex flex-row justify-content-start m-0 p-0">
            <input type="text" class="form-control mb-4" placeholder="Father Name" id="fathername" value="{{ old('father_name') ?? $fee->father_name }}" name="father_name" required>
            @error('father_name')
                <span class="fa fa-info-circle text-danger mt-2 ml-2" data-toggle="tooltip" data-placement="top" title="{{ $errors->first('father_name') }}"></span>
            @enderror 
          </div>
          <div class="d-flex flex-row justify-content-start m-0 p-0">
            <input type="text" class="form-control mb-4" placeholder="Trainer Name" id="trainer" value="{{ old('trainer') ?? $fee->trainer }}" name="trainer" required>
            @error('trainer')
                <span class="fa fa-info-circle text-danger mt-2 ml-2" data-toggle="tooltip" data-placement="top" title="{{ $errors->first('trainer') }}"></span>
            @enderror 
          </div>
          <div class="d-flex flex-row justify-content-start m-0 p-0">
            <input type="date" class="form-control mb-4 text-purple" id="pay_date" value="{{ old('pay_date') ?? $fee->pay_date }}" name="pay_date" required>
            @error('pay_date')
                <span class="fa fa-info-circle text-danger mt-2 ml-2" data-toggle="tooltip" data-placement="top" title="{{ $errors->first('pay_date') }}"></span>
            @enderror 
          </div>
          <div class="d-flex flex-row justify-content-start m-0 p-0">
            <input type="text" class="form-control mb-4" placeholder="Pay Amount" id="fee_amount" value="{{ old('fee_amount') ?? $fee->fee_amount }}" name="fee_amount" required>
            @error('fee_amount')
                <span class="fa fa-info-circle text-danger mt-2 ml-2" data-toggle="tooltip" data-placement="top" title="{{ $errors->first('fee_amount') }}"></span>
            @enderror 
          </div>
        </div>
        <div class="btn-div m-0 p-0 d-flex flex-row justify-content-end">
            <input type="submit" class="btn btn-sm box-shad mr-3" value="Cancel">
            <input type="submit" class="btn btn-sm box-shad" value="Submit">
        </div>  
        @csrf
      </form>
    </div>
  </div> 
@endsection