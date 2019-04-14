<main class="app-content" style="background-color:white;margin-top:0">
    <div class="row" style="padding:40px">
      <div class="col-md-12">
      <h4 class="text-center"> User Type  </h4>
        <div class="table-responsive">
            <table class="table table-bordered" id="myTable">
                <thead>
                    <tr>
                        <th>S.No</th>
                        <th>Name</th>
                        <th>Head</th>
                        <th>Change</th>
                    </tr>
                </thead>
                <tbody>
                   
                    
                      <tr>
                      
                        <td>1</td>
                        <td>Bandar </td>
                        <td>Area</td>
                        <td>
                        <form action="#" method="post">
                        <div class="input-group"> 
                                 <input type="hidden" name="" value="#">                           
                                <select class="form-control btn btn-flat" name="">
                                    <option value="">state</option>
                                </select>

                                <span class="input-group-btn">
                                        <button type="submit" name=""  class="btn btn-info btn-flat"><i class="fa fa-send-o"></i>
                                        </button>
                                    </span>
                            </div>
                        </form>
                        </td>
                        
                     </tr>
                    
                </tbody>
            </table>
        </div>
      </div>
    </div>
</main>   
<script>
     $(document).ready(function()
  {
    $('#myTable').DataTable();
  });
</script>