@extends('layouts.adminlayout.master')
@section('content')
<!-- 
<input class="form-control form-control-lg" type="text" placeholder=".form-control-lg">
<input class="form-control" type="text" placeholder="Default input">
<input class="form-control form-control-sm" type="text" placeholder=".form-control-sm">
 -->
 <div class="row-fluid">
    <div class="span6">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h4>Add new Event</h4>
        </div>
        <div class="widget-content nopadding">
          <form action="{{url('submit')}}" method="post" class="form-horizontal" enctype="multipart/form-deta">{{csrf_field()}}
            <div class="control-group">
              <label class="control-label">Title</label>
              <div class="controls">
                <input type="text" class="span11" name="title" placeholder="Enter title here" />
              </div>
            </div>

        <div class="control-group">
						<div class="agileits_w3layouts_grid">
							<select class="category2" name="time_from" required="">
								<option value="">Select Course Time</option>
								<option value="">Hours: 8am - 10am</option>
								<option value="">Hours: 10am - 12pm</option>
								<option value="">Hours: 12pm - 4pm</option>
								<option value="">Hours: 4pm - 7pm</option>
								<option value="">Hours: 7pm - 9pm</option>
							</select>
						</div>
					</div><br>
                    <div class="control-group">
						<div class="agileits_w3layouts_grid">
							<select class="category2" name="time_upto" required="">
								<option value="">Select Course Date</option>
								<option value="">Hours: 8am - 10am</option>
								<option value="">Hours: 10am - 12pm</option>
								<option value="">Hours: 12pm - 4pm</option>
								<option value="">Hours: 4pm - 7pm</option>
								<option value="">Hours: 7pm - 9pm</option>
							</select>
						</div>
					</div>
                    <div class="controls">
                <input type="text" class="span11" name="date" placeholder="Enter title here" />
              </div>
            </div>
            <div class="controls">
                <input type="text" class="span11" name="location" placeholder="Enter title here" />
              </div>
            </div>

            <div class="form-actions">
              <button type="submit" class="btn btn-success " >Post</button>
            </div>
          </form>
        </div>
      </div>

@endsection