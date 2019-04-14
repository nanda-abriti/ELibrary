<main class="app-content" style="background-color:white;margin-top:0">
    <div class="row" style="padding:40px">
      <div class="col-md-12"> 
      <h4 class="text-center">Add Short News</h4>
      <form action="<?php echo base_url('Adminpanel/shortNewsInsert');?>" method="post">
        <div class="form-group">
            <label for="" class="label-control col-md-4">News By<p style="color:red;display:inline">*</p></label>
            <div class="col-md-8">
                <input type="text" name="name" class="form-control" placeholder="Enter Name Of News Author" required="required">
             </div>
           </div>
           <div class="form-group">
            <label for="" class="label-control col-md-4">Title<p style="color:red;display:inline">*</p></label>
            <div class="col-md-8">
                <input type="text" name="title" class="form-control" placeholder="Enter News Title" required="required">
             </div>
           </div>
           <div class="form-group">
            <label for="" class="label-control col-md-4">Delete Date<p style="color:red;display:inline">*</p></label>
            <div class="col-md-8">
                <input type="datetime-local" name="time" class="form-control" placeholder="" required="required">                
             </div>
           </div>
           <div class="form-group">
            <label for="" class="label-control col-md-4">Link</label>
            <div class="col-md-8">
                <input type="text" name="link" class="form-control" placeholder="Optional" >
             </div>
           </div>
           <div>
              <input type="submit" name="submit" value="Submit" class="btn btn-primary">
           </div>
        </form>
      </div>
    </div>
</main>  