<div class="x_content">
    <form id="submit-student" method="post" action="{{url(" savest
    ")}}" >


    {{ csrf_field() }}


    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" name="first_name" for="first-name">First Name <span
                    class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="text" name="first_name" required="required" class="form-control col-md-7 col-xs-12">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Last Name <span
                    class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="text" name="last_name" required="required" value="{{ old('last_name') }}"
                   class="form-control col-md-7 col-xs-12">
        </div>
    </div>
    <div class="form-group">
        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Middle Name / Initial</label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="middle_name">
        </div>
    </div>
    <div class="form-group {{ $errors->has('st_id') ? ' has-error' : '' }}">
        <label for="st_id" class="control-label col-md-3 col-sm-3 col-xs-12">Admission number</label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input name="st_id" class="form-control col-md-7 col-xs-12" type="text">
            @if ($errors->has('st_id'))
            <span class="help-block">
                                        <strong>{{ $errors->first('st_id') }}</strong>
                                    </span>
            @endif
        </div>
    </div>
    <div class="item form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span>*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="email" id="email1" required="required" name="email1" class="form-control col-md-7 col-xs-12">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12">Gender</label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <div id="gender" class="btn-group" data-toggle="buttons">
                <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                    <input type="radio" name="male" value="male"> &nbsp; Male &nbsp;
                </label>
                <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                    <input type="radio" name="female" value="female"> Female
                </label>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12">Date Of Birth <span class="required">*</span>
        </label>
        <div class='col-sm-4'>
            <div class="form-group">
                <div class='input-group date' id='myDatepicker2'>
                    <input type='text' required="required" id='dob' name="DoB" class="form-control"/>
                    <span class="input-group-addon">
                               <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12">Address</label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <textarea name="address" class="resizable_textarea form-control"></textarea>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">City
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="text" name="city" class="form-control col-md-7 col-xs-12">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-3">Contact Number</label>
        <div class="col-md-6 col-sm-6 col-xs-9">
            <input type="text" name="contact" class="form-control" required="required"
                   data-inputmask="'mask' : '(999) 999-9999'">
            <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12">House</label>
        <div class="col-md-4 col-sm-4 col-xs-12">
            <select name="house_id" class="form-control">
                <option value="1">Rahula</option>
                <option value="2">Iqbal</option>
                <option value="3">Thagor</option>
                <option value="2">Milton</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
            <button class="btn btn-primary" type="button">Cancel</button>
            <button class="btn btn-primary btn-success" type='submit'>Save</button>
            <button type="submit" class="btn btn-success">Finish</button>
        </div>
    </div>

    </form>
</div>
/*
* To change this license header, choose License Headers in Project Properties.
* To change this template file, choose Tools | Templates
* and open the template in the editor.
*/

