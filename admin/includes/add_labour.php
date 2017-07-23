<?php add_labour();  ?>
<form class="form-horizontal form-label-left" action="" id="add-post-admin" method="post"
      enctype="multipart/form-data">
      <div class="item form-group">
          <label class="control-label col-md-2 col-sm-12 col-xs-12" for="FirstName">First Name <span class="required">*</span>
          </label>
          <div class="col-md-10 col-sm-12 col-xs-12">
              <input id="FirstName" class="form-control col-md-7 col-xs-12"
                     name="first_name" placeholder="e.g Umer " type="text" required>
          </div>
      </div>
    <div class="item form-group">
        <label class="control-label col-md-2 col-sm-12 col-xs-12" for="LastName">Last Name <span class="required">*</span>
        </label>
        <div class="col-md-10 col-sm-12 col-xs-12">
            <input id="LastName" class="form-control col-md-7 col-xs-12"
                   name="last_name" placeholder="e.g Hurrah" type="text" required>
        </div>
    </div>
    <div class="item form-group">
        <label class="control-label col-md-2 col-sm-12 col-xs-12" for="GovtId">Govt. ID Proof<span class="required">*</span>
        </label>
        <div class="col-md-10 col-sm-12 col-xs-12">
            <input id="GovtId" class="form-control col-md-7 col-xs-12"
                   name="govt_id" placeholder="e.g Adhar ID or Election ID or Passport Number" type="text" required>
        </div>
    </div>
    <div class="item form-group">
        <label class="control-label col-md-2 col-sm-12 col-xs-12" for="PhoneNumber">Phone Number<span class="required">*</span>
        </label>
        <div class="col-md-10 col-sm-12 col-xs-12">
            <input id="PhoneNumber" class="form-control col-md-7 col-xs-12"
                   name="phone_number" placeholder="e.g 9902369852" type="text" required>
        </div>
    </div>
    <div class="item form-group">
        <label class="control-label col-md-2 col-sm-12 col-xs-12" for="address">Address <span class="required">*</span>
        </label>
        <div class="col-md-10 col-sm-12 col-xs-12">
            <input type="text" id="address" name="address" class="form-control col-md-7
            col-xs-12" placeholder="e.g Lal Chowk Srinagar" required>
        </div>
    </div>
    <div class="item form-group">
        <label class="control-label col-md-2 col-sm-12 col-xs-12" for="Email">Email
        </label>
        <div class="col-md-10 col-sm-12 col-xs-12">
            <input type="email" id="Email" name="user_email" class="form-control col-md-7
            col-xs-12" placeholder="e.g vakadu10@gmail.com" required>
        </div>
    </div>
    <div class="item form-group">
        <label class="control-label col-md-2 col-sm-12 col-xs-12" for="category">Category <span class="required">*</span>
        </label>
        <div class="col-md-10 col-sm-12 col-xs-12">
            <select class="form-control" name="category" required>
                <option value="">Choose Category</option>
                <?php add_labour_category()?>
            </select>
        </div>
    </div>

  <!--   <div class="item form-group">
        <label class="control-label col-md-2 col-sm-12 col-xs-12" for="author">Author <span class="required">*</span>
        </label>
        <div class="col-md-10 col-sm-12 col-xs-12">
            <input type="text" id="author" name="author" class="form-control col-md-7
            col-xs-12" placeholder="Author Name" required>
        </div>
    </div> -->

    <div class="item form-group">
        <label class="control-label col-md-2 col-sm-12 col-xs-12" for="status">Status
        </label>
        <div class="col-md-10 col-sm-12 col-xs-12">
            <select class="form-control" name="status">
                <option value="draft">Select Status</option>
                <option value="publish">Publish</option>
                <option value="draft">Draft</option>
            </select>
        </div>
    </div>

    <div class="item form-group">
        <label class="control-label col-md-2 col-sm-12 col-xs-12" for="image">Image
        </label>
        <div class="col-md-10 col-sm-12 col-xs-12">
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

   <!--  <div class="item form-group">
        <label class="control-label col-md-2 col-sm-12 col-xs-12" for="content">Content <span class="required">*</span>
        </label>
        <div class="col-md-10 col-sm-12 col-xs-12">
            <textarea name="content" id="content" cols="30" rows="6" class="form-control col-md-7 col-xs-12" placeholder="Content" required></textarea>
        </div>
    </div> -->

    <div class="ln_solid"></div>
    <div class="form-group">
        <div class="col-md-6 col-md-offset-2">
            <button id="post-submit" name="create_labour" type="submit" class="btn
            btn-success">Submit</button>
            <button class="btn btn-primary" type="reset">Reset</button>
        </div>
    </div>
</form>

