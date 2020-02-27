{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
@stop

@section('content')

<form method="POST" action="/admin/realestate" enctype="multipart/form-data">
@csrf


  <h3 class="subheadline">Basic Details</h3>
  <div class="form-group">
    <label for="property_name">Property Title</label>
    <input
      type="text"
      name="property_name"
      class="form-control form-control-lg"
      value="property_name"

      id="property_name"
      autofocus
    />
  </div>
  <div class="form-group">
    <label>For Sale/Rent?</label>
    <div>
      <div class="radio radio-inline">
        <input type="radio" name="property_status" id="rent" value="rent" />
        <label for="rent">Rent</label>
      </div>
      <div class="radio radio-inline">
        <input type="radio" name="property_status" id="sale" value="sale" />
        <label for="sale">Sale</label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <label>Price</label>
    <input
      type="text"
      value="1000"
      name="property_price"
      class="form-control form-control-lg"
    />
  </div>
  <div class="form-group">
    <label>Is  Price Fixed/Negotiable?</label>
    <div>
      <div class="radio radio-inline">
        <input type="radio" name="price_status" id="fixed" value="fixed" />
        <label for="fixed">Fixed</label>
      </div>
      <div class="radio radio-inline">
        <input type="radio" name="price_status" id="negotiable" value="negotiable" />
        <label for="negotiable">Negotiable</label>
      </div>
    </div>
  </div>
  <h3 class="subheadline">Location</h3>
  <div class="row">
      
    <div class="col-lg-6">
      <div class="form-group">
        <label>Address</label>
        <input
          type="text"
          class="form-control form-control-lg"
          id="address"
          name="address"
          value="address"
        />
      </div>
    </div>
    <div class="col-lg-6">
      <div class="form-group">
        <label>City</label>
        <input
          type="text"
          class="form-control form-control-lg"
          id="city"
          name="city"
          value="city"
        />
      </div>
    </div>
   
  </div>
  <div class="row">
  <div class="col-lg-6">
      <div class="form-group">
        <label>District</label>
        <input
          type="text"
          class="form-control form-control-lg"
          id="district"
          name="district"
          value="district"
        />
      </div>
    </div>
    <div class="col-lg-6">
      <div class="form-group">
        <label>Country</label>
        <input
          type="text"
          class="form-control form-control-lg"
          placeholder=""
          id="country"
          name="country"
          value="country"
        />
      </div>
    </div>
    
  </div>
  <div class="row">
  <div class="col-lg-6">
      <div class="form-group">
        <label>Province</label>
        <input
          type="number"
          class="form-control form-control-lg"
          placeholder=""
          id="province"
          name="province"
          value="2"
        />
      </div>
    </div>
    <div class="col-lg-6">
      <div class="form-group">
        <label>Ward No</label>
        <input
          type="number"
          class="form-control form-control-lg"
          placeholder=""
          id="ward_number"
          name="ward_number"
          value="23"
        />
      </div>
    </div>
   
  </div>
  <div class="row">
  <div class="col-lg-6">
      <div class="form-group">
        <label>House Number</label>
        <input
          type="number"
          class="form-control form-control-lg"
          placeholder=""
          id="house_number"
          name="house_number"
          value="101"
        />
      </div>
    </div>
   
    <div class="col-lg-6">
      <div class="form-group">
        <label>Zipcode</label>
        <input
          type="number"
          class="form-control form-control-lg"
          placeholder=""
          id="zip_code"
          name="zip_code"
          value="44600"
        />
      </div>
    </div>
    <div class="col-lg-6">
      <div class="form-group">
        <label>Area Sq/ft</label>
        <input
          type="number"
          class="form-control form-control-lg"
          placeholder=""
          id="property_area"
          name="property_area"
          value="23121"
        />
      </div>
    </div>
  </div>
  <h3 class="subheadline">Features</h3>


  <div class="row">
    <div class="col-sm-6">
      <div class="form-group">
        <label for="bedrooms">Bedrooms</label>
        <select
          name="number_of_bedrooms"
          id="number_of_bedrooms"
          class="form-control form-control-lg ui-select"
        >
          <option value="0">0</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7+">7+</option>
        </select>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="form-group">
        <label for="number_of_bathrooms">Bathrooms</label>
        <select
          name="number_of_bathrooms"
          id="number_of_bathrooms"
          class="form-control form-control-lg ui-select"
        >
          <option value="0">0</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5+">5+</option>
        </select>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-6">
      <div class="form-group">
        <label for="bathrooms">Floors</label>
        <select
          name="number_of_floors"
          id="number_of_floors"
          value="number_of_floors"
          class="form-control form-control-lg ui-select"
        >
          <option value="0">0</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5+">5+</option>
        </select>
      </div>
    </div>
  </div>
  <div class="row">
    
    <div class="col-md-6">
      <div class="form-group">
        <label>Building Age</label>
        <input
          type="number"
          class="form-control form-control-lg"
          value="2"
          id="building_age"
          name="building_age" />
      </div>
    </div>
  </div>
 
  <div class="form-group">
    <h3 class="subheadline">Additional Features</h3>
    <div class="feature-list three_cols">
      <div class="checkbox">
        <input type="checkbox" id="garden" name="garden" value="yes" />
        <label for="Garden">Garden</label>
      </div>
      <div class="checkbox">
        <input type="checkbox" id="gym" name="gym" value="yes"/>
        <label for="Gym">Gym</label>
      </div>
      <div class="checkbox">
        <input type="checkbox" id="internet" name="internet" value="yes"/>
        <label for="Internet">Internet</label>
      </div>
      <div class="checkbox">
        <input type="checkbox" id="swimming_pool" name="swimming_pool" value="yes"/>
        <label for="Pool">Swimming Pool</label>
      </div>
      <div class="checkbox">
        <input type="checkbox" id="water" name="water" value="yes"/>
        <label for="water">Water</label>
      </div>
      <div class="checkbox">
        <input type="checkbox" id="parking" name="parking" value="yes"/>
        <label for="Parking">Parking</label>
      </div>
      <div class="checkbox">
        <input type="checkbox" id="school_college_nearby" name="school_college_nearby" value="yes"/>
        <label for="school_college_nearby">School/College Nearby</label>
      </div>
      <div class="checkbox">
        <input type="checkbox" id="shopping_nearby" name="shopping_nearby" value="yes"/>
        <label for="shopping_nearby">Shopping/GroceryNearby</label>
      </div>
      <div class="checkbox">
        <input type="checkbox" id="bank_nearby" name="bank_nearby" value="yes"/>
        <label for="bank_nearby">Bank</label>
      </div>
      <div class="checkbox">
        <input type="checkbox" id="pitched_road" name="pitched_road" value="yes"/>
        <label for="pitched_road">Pitched Road</label>
      </div>
      <div class="checkbox">
        <input type="checkbox" id="airport_nearby" name="airport_nearby" value="yes"/>
        <label for="airport_nearby">Airport</label>
      </div>
      <div class="checkbox">
        <input type="checkbox" id="sewage" name="sewage" value="yes"/>
        <label for="sewage">Sewage</label>
      </div>
      <div class="checkbox">
        <input type="checkbox" id="alarm" name="alarm" value="yes"/>
        <label for="alarm">Alarm</label>
      </div>
      <div class="checkbox">
        <input type="checkbox" id="cctv" name="cctv" value="yes" />
        <label for="cctv">CCTV Camera</label>
      </div>
      <div class="checkbox">
        <input type="checkbox" id="ac" name="ac" value="yes"/>
        <label for="ac">Air Conditioning</label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <label>Property Description</label>
    <textarea
      class="form-control form-control-lg text-editor"
      name="description"
      id="description"
    ></textarea>
  </div>
  <div class="form-group">
    <h3 class="subheadline">Upload Photos</h3>
    <div class="ui-dropzone">
      <div class="icon"></div>
      <div>Drag and drop images or click to upload</div>
      <input
        type="file"
        class="form-control form-control-lg"
        id="property_image"
        name="property_image[]"
        multiple
      />
    </div>
  </div>
  <div class="form-group">
    <div class="checkbox">
      <input type="checkbox" id="featured" name="featured"/>
      <label for="featured">Yes ‚ feature this listing. </label>
    </div>
  </div>
  <hr />
  <div class="form-group">
    <button type="submit" class="btn btn-lg btn-primary">
      Submit Property
    </button>
  </div>
</form>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/css/fileinput.css" media="all" rel="stylesheet" type="text/css"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" media="all" rel="stylesheet" type="text/css"/>
@stop

@section('js')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/js/fileinput.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/themes/fa/theme.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" type="text/javascript"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" type="text/javascript"></script>
<script type="text/javascript">
        $("#property_image").fileinput({
            theme: 'fa',
            uploadUrl: "/image-view",
            uploadExtraData: function() {
                return {
                    _token: $("input[name='_token']").val(),
                };
            },
            allowedFileExtensions: ['jpg', 'png', 'gif'],
            overwriteInitial: false,
            maxFileSize:2000,
            maxFilesNum: 10,
            slugCallback: function (filename) {
                return filename.replace('(', '_').replace(']', '_');
            }
        });
    </script>
@stop