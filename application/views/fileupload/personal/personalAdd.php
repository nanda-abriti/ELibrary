<main class="app-content" style="background-color:white;margin-top:0">
    <div class="row" style="padding:40px">
      <div class="col-md-12"> 
      <h4 class="text-center">Add your Personal Content</h4>
      <form action="<?php echo base_url('');?>" method="post">
        <div class="form-group">
            <label for="" class="label-control col-md-4">Title<p style="color:red;display:inline">*</p></label>
            <div class="col-md-8">
                <input type="text" name="name" class="form-control" placeholder="Enter Title" required="required">
             </div>
           </div>
           <div class="form-group">
            <label for="" class="label-control col-md-4">Link</label>
            <div class="col-md-8">
                <input type="text" name="link" class="form-control" placeholder="Optional" >
             </div>
           </div>
           <div class="form-group">
            <label for="" class="label-control col-md-4">Description<p style="color:red;display:inline">*</p></label>
            <div class="col-md-8">
                 <textarea id="textbox" class="form-control" name="body" rows="4" placeholder="Describe your title" required="required"></textarea>
             </div>
           </div>
           <div>
              <input type="submit" name="submit" value="Submit" class="btn btn-primary">
           </div>
        </form>
      </div>
    </div>
</main>  