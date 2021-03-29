@extends('layout.app')

@section('title', 'Students List')

@section('content')

<section class="show-page p-0 m-0 pt-3 h-100">
    <!-- Here We have the top bar -->  
    <div class="row d-flex flex-row justify-content-between p-0 mx-2 pb-2 bord">
      <div class="left-side mt-1">
        <ul class="breadcrumb m-0 p-0">
          <li class="breadcrumb-item"><a href="#" class="text-orchid">Student List</a></li>
          <li class="breadcrumb-item active text-purple">{{ $student->first_name }} {{ $student->last_name }}</li>
        </ul>
      </div>
      <div class="right-side">
        <button type="button" class="btn btn-sm"><span class="fa fa-print"></span></button>
        <a href="/Students/{{ $student->id }}/edit">
          <button type="button" class="btn btn-sm"><span class="fa fa-edit mr-2">
            </span>Edit {{ $student->first_name }}
          </button>
        </a>  
      </div>
    </div>
    
    <!-- Here We have the main div -->
    <div class="student-show mt-3 px-3">
      <div class="row px-2">
        <div class="col-xl-9 p-0 m-0">
          <div class="inner-div bg-white mr-2">
            <div class="student-info p-0 m-0">
              <div class="row p-0 m-0">
                <!-- Here We have the div which contains the student profile -->
                <div class="col-xl-4 p-0 m-0 border-right text-center px-4 pb-4">
                  <div class="img-div text-center mt-4">
                    <img src="{{ asset('uploads/studentsimage/'. $student->image) }}" alt="photo" class="img-fluid rounded-circle">
                  </div>
                  <h5 class="text-orchid text-center my-2">{{$student->first_name}} {{$student->last_name}}</h5>
                  <small class="text-purple mb-2">{{$student->email}}</small>
                  <div class="row m-0 p-0 my-3">
                    <div class="col-sm-6 border-right">
                      <h5 class="m-0 p-0 text-orchid">15</h5>
                      <small class="text-purple">Post</small>
                    </div>
                    <div class="col-sm-6">
                      <h5 class="m-0 p-0 text-orchid">2</h5>
                      <small class="text-purple">Upcoming</small>
                    </div>
                  </div>
                  <form action="/Students/{{ $student->id }}" method="POST">
                      @method('DELETE')
                      @csrf  
                      <button type="submit" class="btn w-100">Delete</button>  
                  </form>
                </div>

                <!-- Here We have the info div -->
                <div class="col-xl-8 p-0 m-0 p-4">
                  <div class="row m-0 p-0 mb-4 pt-1">
                    <div class="d-inline-block mr-5 pr-5 py-2 border-bottom">
                      <h6 class="text-orchid font-weight-bold mb-1">Firstname</h6>
                      <span class="text-purple">{{$student->first_name}}</span>
                    </div>
                    <div class="d-inline-block mr-5 pr-5 py-2 border-bottom">
                      <h6 class="text-orchid font-weight-bold mb-1">Lastname</h6>
                      <span class="text-purple">{{$student->last_name}}</span>
                    </div>
                    <div class="d-inline-block pr-5 py-2 border-bottom">
                      <h6 class="text-orchid font-weight-bold mb-1">Gender</h6>
                      <span class="text-purple">{{$student->gender}}</span>
                    </div>
                  </div>
                  <div class="row m-0 p-0 mb-4">
                    <div class="d-inline-block mr-5 pr-5 py-2 border-bottom">
                      <h6 class="text-orchid font-weight-bold mb-1">Phone</h6>
                      <span class="text-purple">{{$student->phone}}</span>
                    </div>
                    <div class="d-inline-block pr-5 py-2 border-bottom">
                      <h6 class="text-orchid font-weight-bold mb-1">Address</h6>
                      <span class="text-purple">{{$student->address}}</span>
                    </div>
                  </div>
                  <div class="row m-0 p-0">
                    <div class="d-inline-block mr-5 pr-5 py-2 border-bottom">
                      <h6 class="text-orchid font-weight-bold mb-1">Category</h6>
                      <span class="text-purple">{{$student->category}}</span>
                    </div>
                    <div class="d-inline-block mr-5 pr-5 py-2 border-bottom">
                      <h6 class="text-orchid font-weight-bold mb-1">Registered Date</h6>
                      <span class="text-purple">{{$student->register_date}}</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- The bottom Date show div -->
          <div class="fee-info p-0 m-0 bg-white mr-2 py-2 px-4">
            <div class="bg-background h-100">
              <!-- The bottom Date show div top bar -->
              <div class="row m-0 p-0 d-flex flex-row justify-content-between p-2 border-bottom">
                <h6 class="text-purple mb-0 font-weight-bold mt-2">Fee Payroll</h6>
                <button type="button" class="btn btn-sm"><span class="fa fa-angle-up m-0 p-0 mr-2"></span>Show Previous Payroll</button>
              </div>
              
              <!-- The bottom Fee payroll div -->
              <div class="payroll m-0 p-0">
            <!--    @foreach($fee as $std_fee) -->
                  <div class="bill-list m-0 p-0">
                    <div class="small-circle"></div>
                    <div class="bill bg-white mx-3 mt-3 py-2">
                      <div class="d-inline-block px-4 border-right">
                        <h6 class="text-orchid mb-0 font-weight-bold">26 Nov '20</h6>
                        <small class="text-purple">Payment Date</small>
                      </div>
                      <div class="d-inline-block px-4 mx-3 border-right">
                        <small class="text-purple">Treatment</small>
                        <h6 class="text-orchid mb-0 font-weight-bold">Open Access</h6>
                      </div>
                      <div class="d-inline-block px-4 mx-3 border-right">
                        <small class="text-purple">Trainer</small>
                        <h6 class="text-orchid mb-0 font-weight-bold">Saberi</h6>
                      </div>
                      <div class="d-inline-block px-4 mx-3 border-right">
                        <small class="text-purple">Fee</small>
                        <h6 class="text-orchid mb-0 font-weight-bold">300</h6>
                      </div>
                      <div class="d-inline-block px-3 ml-3">
                        <span class="fa fa-file-text-o text-orchid mr-1"></span>
                        <span class="text-orchid font-weight-bold">Note</span>
                      </div>
                    </div>
                  </div>
               <!-- @endforeach -->

                <div class="bill-list m-0 p-0">
                  <div class="small-circle"></div>
                  <div class="bill bg-white mx-3 mt-2 py-2">
                  <div class="d-inline-block px-4 border-right">
                      <h6 class="text-orchid mb-0 font-weight-bold">26 Nov '20</h6>
                      <small class="text-purple">06:00 - 07:00</small>
                    </div>
                    <div class="d-inline-block px-4 mx-3 border-right">
                      <small class="text-purple">Treatment</small>
                      <h6 class="text-orchid mb-0 font-weight-bold">Open Access</h6>
                    </div>
                    <div class="d-inline-block px-4 mx-3 border-right">
                      <small class="text-purple">Trainer</small>
                      <h6 class="text-orchid mb-0 font-weight-bold">Mr. Saberi</h6>
                    </div>
                    <div class="d-inline-block px-4 mx-3 border-right">
                      <small class="text-purple">Fee</small>
                      <h6 class="text-orchid mb-0 font-weight-bold">300</h6>
                    </div>
                    <div class="d-inline-block px-3 ml-3">
                      <span class="fa fa-file-text-o text-orchid mr-1"></span>
                      <span class="text-orchid font-weight-bold">Note</span>
                    </div>
                  </div>
                </div> 

                <div class="bill-list m-0 p-0">
                  <div class="small-circle"></div>
                  <div class="bill bg-white mx-3 mt-2 mb-3 py-2">
                  <div class="d-inline-block px-4 border-right">
                      <h6 class="text-orchid mb-0 font-weight-bold">26 Nov '20</h6>
                      <small class="text-purple">06:00 - 07:00</small>
                    </div>
                    <div class="d-inline-block px-4 mx-3 border-right">
                      <small class="text-purple">Treatment</small>
                      <h6 class="text-orchid mb-0 font-weight-bold">Open Access</h6>
                    </div>
                    <div class="d-inline-block px-4 mx-3 border-right">
                      <small class="text-purple">Trainer</small>
                      <h6 class="text-orchid mb-0 font-weight-bold">Mr. Saberi</h6>
                    </div>
                    <div class="d-inline-block px-4 mx-3 border-right">
                      <small class="text-purple">Fee</small>
                      <h6 class="text-orchid mb-0 font-weight-bold">300</h6>
                    </div>
                    <div class="d-inline-block px-3 ml-3">
                      <span class="fa fa-file-text-o text-orchid mr-1"></span>
                      <span class="text-orchid font-weight-bold">Note</span>
                    </div>
                  </div>
                </div> 
              </div>
            </div>
          </div>
        </div>


        <!-- right side top div -->
        <div class="col-xl-3 p-0 m-0 right-side">
          <div class="inner-div bg-white ml-1">
            <div class="Notes p-0 m-0 py-3">
              <div class="row d-flex flex-row justify-content-between m-0 p-0 px-3">
                <h6 class="text-orchid font-weight-bold">Notes</h6>
                <a href="#" class="text-purple">See all</a>
              </div>
              <div class="bg-background p-3 mx-2">
                <div class="m-0 p-0 mb-1">
                  <span class="fa fa-minus text-orchid m-0 p-0 mr-1"></span>
                  <span class="m-0 p-0">Lorem ipsum dolor sit amet.</span>
                </div>
                <div class="m-0 p-0 mb-1">
                  <span class="fa fa-minus text-orchid m-0 p-0 mr-1"></span>
                  <span class="m-0 p-0">Lorem ipsum dolor.</span>
                </div>
                <div class="m-0 p-0 mb-5">
                  <span class="fa fa-minus text-orchid m-0 p-0 mr-1"></span>
                  <span class="m-0 p-0">Lorem ipsum dolor sit.</span>
                </div>
                <div class="row m-0 p-0 d-flex flex-row justify-content-end">
                  <button type="button" class="btn btn-sm">Save Note</button>
                </div>
              </div>
              <div class="row m-0 p-0 d-flex flex-row justify-content-between px-3 mt-3">
                <div class="m-0 p-0">
                  <h6 class="text-orchid m-0 mb-1">Lorem ipsum dolor amet</h6>
                  <span class="fa fa-user text-orchid mr-2"></span>
                  <span class="text-purple">Mr. Saberi</span>
                </div>
                <div class="m-0 p-0 pt-4">
                  <small class="text-purple">5 Nov 20</small>
                </div>
              </div>
            </div>
          </div>

          <!-- the right side bottom div -->
          <div class="note-bottom-div p-0 m-0">
            <div class="inner-div bg-white m-0 p-3 w-100 h-100">
              <div class="row m-0 p-0 d-flex flex-row justify-content-between">
                <h6 class="text-orchid font-weight-bold m-0 mt-2 pr-3 border-right">Skills Level</h6>
                <button type="button" class="btn btn-sm m-0" onClick="window.location.reload();">Refresh</button>
              </div>

              <div class="circular">
                <div class="inner bg-white rounded-circle"></div>
                <div class="numb text-purple">{{$student->skill_level}}%</div>
                <div class="circle">
                  <div class="probar left bg-background rounded-circle">
                    <div class="progres rounded-circle"></div>
                  </div>
                  <div class="probar right bg-background rounded-circle">
                    <div class="progres rounded-circle"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>

<style>
  @keyframes left {
    100% {
      transform: rotate({{$left}}deg);
    }
  }


  @keyframes right {
    100% {
      transform: rotate({{$right}}deg);
    }
  }
</style>
@endsection