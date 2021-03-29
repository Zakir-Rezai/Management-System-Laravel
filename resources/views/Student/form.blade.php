    <div class="row m-0 p-0">
      <!-- here we have the inputs div -->
      <div class="col-xl-9 col-lg-9 col-md-12 bg-white p-0 m-0 p-4 form-group box mb-2">
        <div class="row p-0 m-0">
          <div class="col-xl-6 col-lg-6 col-md-6 m-0">
            <div class="form-div p-0 m-0 py-2 px-2">
              <div class="m-0 p-0 d-flex flex-row justify-content-start m-0 p-0">
                <label for="id" class="text-orchid mr-3 mt-2">ID:</label>
                <input type="number" class="form-control mb-4" id="id" value="{{ old('id') ?? $std->id }}" name="id" disabled>
                @error('id')
                  <span class="fa fa-info-circle text-danger mt-3 ml-4" data-toggle="tooltip" data-placement="top" title="{{ $errors->first('id') }}"></span>
                @enderror 
              </div>
              <div class="d-flex flex-row justify-content-start m-0 p-0 mt-3">
                <label for="firstname" class="text-orchid mr-3 mt-2">Firstname:</label>
                <input type="text" class="form-control mb-4" id="firstname" value="{{ old('first_name') ?? $std->first_name }}" name="first_name" required>
                @error('first_name')
                  <span class="fa fa-info-circle text-danger mt-3 ml-4" data-toggle="tooltip" data-placement="top" title="{{ $errors->first('first_name') }}"></span>
                @enderror 
              </div>
              <div class="d-flex flex-row justify-content-start m-0 p-0 mt-3">
                <label for="lastname" class="text-orchid mr-3 mt-2">Lastname:</label>
                <input type="text" class="form-control mb-4" id="lastname" value="{{ old('last_name') ?? $std->last_name }}" name="last_name" required>
                @error('last_name')
                  <span class="fa fa-info-circle text-danger mt-3 ml-4" data-toggle="tooltip" data-placement="top" title="{{ $errors->first('last_name') }}"></span>
                @enderror 
              </div>
              <div class="d-flex flex-row justify-content-start m-0 p-0 mt-3">
                <label for="fathername" class="text-orchid mr-3 mt-2">F/Name:</label>
                <input type="text" class="form-control mb-4" id="fathername" value="{{ old('father_name') ?? $std->father_name }}" name="father_name" required>
                @error('father_name')
                  <span class="fa fa-info-circle text-danger mt-3 ml-4" data-toggle="tooltip" data-placement="top" title="{{ $errors->first('father_name') }}"></span>
                @enderror 
              </div>
              <div class="d-flex flex-row justify-content-start m-0 p-0 mt-3">
                <label for="email" class="text-orchid mr-3 mt-2">Email:</label>
                <input type="email" class="form-control mb-4" id="email" value="{{ old('email') ?? $std->email }}" name="email" required>
                @error('email')
                  <span class="fa fa-info-circle text-danger mt-3 ml-4" data-toggle="tooltip" data-placement="top" title="{{ $errors->first('email') }}"></span>
                @enderror 
              </div>
              <div class="d-flex flex-row justify-content-start m-0 p-0 mt-3">
                <label for="skill" class="text-orchid mr-3 mt-2">Skill/Level:</label>
                <input type="number" class="form-control" id="skill" value="{{ old('skill_level') ?? $std->skill_level }}" name="skill_level" required>
                @error('skill_level')
                  <span class="fa fa-info-circle text-danger mt-3 ml-4" data-toggle="tooltip" data-placement="top" title="{{ $errors->first('skill_level') }}"></span>
                @enderror 
              </div>
            </div>
          </div>

          <div class="col-xl-6 col-lg-6 col-md-6 m-0">
            <div class="form-div second-form-div m-0 p-0 py-2 px-2">
              <div class="d-flex flex-row justify-content-start m-0 p-0">
                <label for="phone" class="text-orchid mr-3 mt-2">Phone:</label>
                <input type="number" class="form-control mb-4" id="phone" value="{{ old('phone') ?? $std->phone }}" name="phone" required>
                @error('phone')
                  <span class="fa fa-info-circle text-danger mt-3 ml-4" data-toggle="tooltip" data-placement="top" title="{{ $errors->first('phone') }}"></span>
                @enderror 
              </div>
              <div class="d-flex flex-row justify-content-start m-0 p-0 mt-3">
                <label for="address" class="text-orchid mr-3 mt-2">Address:</label>
                <input type="text" class="form-control mb-4" id="address" value="{{ old('address') ?? $std->address }}" name="address" required>
                @error('address')
                  <span class="fa fa-info-circle text-danger mt-3 ml-4" data-toggle="tooltip" data-placement="top" title="{{ $errors->first('address') }}"></span>
                @enderror 
              </div>
              <div class="d-flex flex-row justify-content-start m-0 p-0 mt-3">
                <label for="registerdate" class="text-orchid mr-3 mt-2">R/Date:</label>
                <input type="date" class="form-control mb-4 text-purple" id="registerdate" value="{{ old('register_date') ?? $std->register_date }}" name="register_date" required>
                @error('register_date')
                  <span class="fa fa-info-circle text-danger mt-3 ml-4" data-toggle="tooltip" data-placement="top" title="{{ $errors->first('register-date') }}"></span>
                @enderror 
              </div>
              <div class="d-flex flex-row justify-content-start m-0 p-0 mt-3">
                <label for="category" class="text-orchid mr-3 mt-2">Category:</label>
                <select id="category" class="form-control text-purple mb-4" name="category" required>
                @error('category')
                  <span class="fa fa-info-circle text-danger mt-3 ml-4" data-toggle="tooltip" data-placement="top" title="{{ $errors->first('category') }}"></span>
                @enderror 
                  <option selected class="text-muted" value="" disabled>Select age category</option>
                  <option {{ $std->category == 'under 14' ? 'selected' : '' }} value="under 14">Under 14</option>
                  <option {{ $std->category == 'under 18' ? 'selected' : '' }} value="under 18">under 18</option>
                  <option {{ $std->category == 'under 24' ? 'selected' : '' }} value="under 24">Under 24</option>
                </select>
              </div>
              <div class="d-flex flex-row justify-content-start m-0 p-0 mt-3 mb-5">
                <label for="gender" class="text-orchid mr-3 mt-2">Gender:</label>
                <select id="gender" class="form-control text-purple" name="gender" required>
                @error('gender')
                  <span class="fa fa-info-circle text-danger mt-3 ml-4" data-toggle="tooltip" data-placement="top" title="{{ $errors->first('gender') }}"></span>
                @enderror 
                  <option selected class="text-muted" value="" disabled>Select gender</option>
                  <option {{ $std->gender == 'male' ? 'selected' : '' }} value="male">male</option>
                  <option {{ $std->gender == 'female' ? 'selected' : '' }} value="female">female</option>
                </select>
              </div>
            </div>
          </div>
          <div class="btn-div m-0 p-0 d-flex flex-row justify-content-end">
            <input type="submit" class="btn btn-sm box-shad mr-3" value="Cancel">
            <input type="submit" class="btn btn-sm box-shad" value="Submit">
          </div>          
        </div>
      </div>
        
      <div class="col-xl-3 col-lg-3 col-md-12 p-0 m-0">
        <!-- here we have the image selection div -->
        <div class="inner-div ml-2 mb-2 p-4 bg-white">
          <div class="image-div text-center p-0">
            <input type="file" accept="image/*" class="form-control" name="image" id="file" onchange="loadFile(event)">
            <img id="output" class="img-fluid h-100">
            <label for="file" id="label" style="cursor: pointer">
              <span class="fa fa-camera title text-white"></span>
            </label>
          </div>
          @error('image')
            <span class="fa fa-info-circle error text-danger m-0 p-0" data-toggle="tooltip" data-placement="top" title="{{ $errors->first('image') }}"></span>
          @enderror 
        </div>
        
        <!-- here we have the bottom note div -->
        <div class="note-div p-0 m-0 ml-2 my-2 px-3 py-4 bg-white">
          <div class="d-flex flex-row justify-content-start p-0 m-0 my-3">
            <span class="fa fa-info-circle mr-2 text-orchid icon"></span><h6 class="text-purple">Make sure your image is 4x4.</h6>
          </div>
          <div class="d-flex flex-row justify-content-start p-0 m-0 mb-3">
            <span class="fa fa-info-circle mr-2 text-orchid icon"></span><h6 class="text-purple">ID is autocomplete you don't need to enter.</h6>
          </div>
          <div class="d-flex flex-row justify-content-start p-0 m-0 mb-3">
            <span class="fa fa-info-circle mr-2 text-orchid icon"></span><h6 class="text-purple">Skill level is the percentage of your skills. you have to put a number between 1 to 100.</h6>
          </div>
          <div class="d-flex flex-row justify-content-start p-0 m-0 mb-3">
            <span class="fa fa-info-circle mr-2 text-orchid icon"></span><h6 class="text-purple">Make sure your inserted data is correct.</h6>
          </div>
          <div class="d-flex flex-row justify-content-start p-0 m-0">
            <span class="fa fa-info-circle mr-2 text-orchid icon"></span><h6 class="text-purple">After submiting data you will recieve a message.</h6>
          </div>
        </div>
      </div>
    </div>

    @csrf

    