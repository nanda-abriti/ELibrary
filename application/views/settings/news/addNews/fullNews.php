<main class="app-content" style="background-color:white;margin-top:0">
    <div class="row" style="padding:40px">
      <div class="col-md-2"></div>
      <div class="col-md-8"> 
        <h4 class="text-center">Add Full News</h4>
        <form id="fullnews" action="<?php echo base_url('Adminpanel/fullNewsInsert');?>" method="post">
        <div class="form-group">
            <label for="" class="label-control col-md-4">News By<p style="color:red;display:inline">*</p></label>
            <div class="col-md-8">
                <input type="text" name="name" class="form-control" placeholder="Enter Name of News Author" required="required">
             </div>
           </div>
           <div class="form-group">
            <label for="" class="label-control col-md-4">Title<p style="color:red;display:inline">*</p></label>
            <div class="col-md-8">
                <input type="text" name="title" class="form-control" placeholder="Enter News Title" required="required">
             </div>
           </div>
           <div class="form-group">
            <label for="" class="label-control col-md-4">Link</label>
            <div class="col-md-8">
                <input type="text" name="link" class="form-control" placeholder="Optional" >                
             </div>
           </div>
           <div class="form-group">
            <label for="" class="label-control col-md-4">Delete Date<p style="color:red;display:inline">*</p></label>
            <div class="col-md-8">
                <input type="datetime-local" name="time" class="form-control" placeholder="" required="required">                
             </div>
           </div>
           <div class="form-group">
            <label for="" class="label-control col-md-4">News<p style="color:red;display:inline">*</p></label>
            <div class="col-md-8">
                 <textarea id="textbox" class="form-control" name="news" rows="4" placeholder="Add your News Here" required="required"></textarea>
                <!-- <input id="textbox" type="text" name="news" class="form-control" placeholder="Add your News Here" style="height:100px" required="required"> -->
             </div>
           </div>
           <div class="form-group">
              <input type="submit" name="submit" value="Submit" class="btn btn-primary">
           </div>
        </form>
      </div>
      <div class="col-sm-1"></div>
    </div>
</main>  
<script>
    $(document).delegate('#textbox', 'keydown', function(e) 
    {
      var keyCode = e.keyCode || e.which;

      if (keyCode == 13) 
      {
        e.preventDefault();
        var start = this.selectionStart;
        var end = this.selectionEnd;

        // set textarea value to: text before caret + tab + text after caret
        $(this).val($(this).val().substring(0, start)
                + "<br/>"
                + $(this).val().substring(end));

        // put caret at right position again
        // this.selectionStart =
        // this.selectionEnd = start + 1;
      }
    });

    $("#fullnews").bind("keypress", function (e) 
    {
      if (e.keyCode == 13) 
      {
        return false;
      }
    });

    

</script>