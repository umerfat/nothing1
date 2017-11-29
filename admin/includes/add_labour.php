<?php
if (isset($_POST['create_labour'])) {
    add_labour();
}
?>
<form class="form-label-left" action="" id="add-labour-admin" method="post"
      enctype="multipart/form-data">
      <div class="item form-group">
          <div class="col-md-6 col-sm-12 col-xs-12">
              <input id="FirstName" class="form-control col-md-7 col-xs-12"
                     name="first_name" placeholder="First Name " type="text" required>
          </div>
      </div>
    <div class="item form-group">
        <div class="col-md-6 col-sm-12 col-xs-12">
            <input id="LastName" class="form-control col-md-7 col-xs-12"
                   name="last_name" placeholder="Last Name" type="text" required />
        </div>
    </div>
    <div class="item form-group">
        <div class="col-md-6 col-sm-12 col-xs-12">
            <input id="GovtId" class="form-control col-md-7 col-xs-12"
                   name="govt_id" placeholder="Adhar ID or Election ID or Passport Number" type="text" required>
        </div>
    </div>
    <div class="item form-group">
        <div class="col-md-6 col-sm-12 col-xs-12">
            <input id="PhoneNumber" class="form-control col-md-7 col-xs-12"
                   name="phone_number" placeholder="Phone Number" type="text" required>
        </div>
    </div>
    <div class="item form-group">
        <div class="col-md-6 col-sm-12 col-xs-12">
            <input type="email" id="Email" name="email" class="form-control col-md-7
            col-xs-12" placeholder="Email" required>
        </div>
    </div>
    <div class="item form-group">
        <div class="col-md-6 col-sm-12 col-xs-12">
            <input type="text" id="state" name="state" class="form-control col-md-7
            col-xs-12" placeholder="State" required>
        </div>
    </div>
    <div class="item form-group">
        <div class="col-md-6 col-sm-12 col-xs-12">
            <input type="text" id="address" name="address" class="form-control col-md-7
            col-xs-12" placeholder="Full Address" required>
        </div>
    </div>
    <div class="item form-group">
        <div class="col-md-6 col-sm-12 col-xs-12">
            <select class="form-control" name="status">
                <option value="0">Select Status</option>
                <option value="1">Active</option>
                <option value="0">Inactive</option>
            </select>
        </div>
    </div>
    <div class="item form-group">
        <div class="col-md-6 col-sm-12 col-xs-12">
            <select class="form-control" name="category" required>
                <option value="">Choose Category</option>
                <?php add_labour_category();?>
            </select>
        </div>
    </div>
    <div class="item form-group">
        <div class="col-md-6 col-sm-12 col-xs-12">
            <input type="text" id="charges" name="charges" class="form-control col-md-7 col-xs-12" placeholder="Labour Charges" required>
        </div>
    </div>
    <div class="item form-group">
        <div class="col-md-6 col-sm-12 col-xs-12">
            <input type="file" id="image" name="image" class="form-control col-md-7
            col-xs-12">
        </div>
    </div>

<!--     <div class="item form-group">
        <label class="control-label col-md-2 col-sm-12 col-xs-12" for="tags">Tags <span class="required">*</span>
        </label>
        <div class="col-md-10 col-sm-12 col-xs-12">
            <input type="text" id="tags" name="tags" class="form-control col-md-7
            col-xs-12" placeholder="Tags" required>
        </div>
    </div> -->

    <div class="item form-group">
        <div class="col-md-6 col-sm-12 col-xs-12">
            <textarea name="long_description" id="long_description" cols="30" rows="6" class="form-control col-md-7 col-xs-12" placeholder="Long Description"></textarea>
        </div>
    </div>
    <div class="item form-group">
        <div class="col-md-6 col-sm-12 col-xs-12">
            <textarea name="short_description" id="short_description" cols="30" rows="6" class="form-control col-md-7 col-xs-12" placeholder="Short Description"></textarea>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="ln_solid"></div>
    <div class="form-group">
        <div class="col-md-6">
            <button id="post-submit" name="create_labour" type="submit" class="btn
            btn-success">Submit</button>
            <button class="btn btn-primary" type="reset">Reset</button>
        </div>
    </div>
</form>

