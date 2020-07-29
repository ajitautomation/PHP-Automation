<html>
    
    <head>
        <title>Demo</title>
        	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    </head>
    
    <body>
        
        <div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                    <div class="col-md-6"><br>
                        <div class="card">
                          <div class="card-body">
                            <h5 class="card-title"></h5>
                            <form>
                              
                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">From</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="inputPassword" value="ajit.dalimbkar@gmail.com">
                                </div>
                              </div>

                              <?php   
$optradio=$_POST['optradio'];

                                if($optradio=="Source"  )
{ ?>

                       <div class="form-group row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">To</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="inputPassword" value="<?php echo $optradio?>">
                                </div>
                              </div>

                              <div class="form-group row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">CC</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="inputPassword" value="<?php echo "Target Email ID" ?>">
                                </div>
                              </div>

<?php  
}else if($optradio=="Target"  ){ ?>

<div class="form-group row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">To</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="inputPassword" value="<?php echo $optradio ?>">
                                </div>
                              </div>



                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">CC</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="inputPassword" value="<?php echo "Source Email ID" ?>">
                                </div>
                              </div>

<?php 
}
?>
                              
                          
                              
                              <div class="form-group row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Subject</label>
                                <div class="col-sm-10">
                                  
				<select name="subject" class="form-control" id="issues">
 				   <option value="1">Incomplete File Received</option>
  				   <option value="2">Invalid File Pattern</option>
  			           <option value="3">Sftp issue</option>
 				   <option value="4">Connect Direct issue</option>
				</select>
                                </div>
                              </div>
                            
                           <div class="form-group">
                            
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="6"></textarea>
                          </div>
                          <button type="submit" class="btn btn-primary">Send</button>
                        </form>
                        </div>
                        </div>
                    </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </body>
</html>
