<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Epc Data</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo e(asset('custom_css/main.css')); ?>">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
        <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand" href="#">
              EPC
            </a>
          </nav>
        <?php echo $__env->yieldContent('content'); ?>

        <div>
            <div class="container">
            <form>
                <div class="row">
                    <form action="<?php echo e(route('epc.index')); ?>" method="GET">
                        <?php echo csrf_field(); ?>
                        <label for="address">Address</label>
                        <input type="text" id="address" name="address" placeholder="Enter an address">
                    
                        <label for="pcode">Postcode</label>
                        <input type="text" id="pcode" name="postcode" placeholder="Enter a postal code">
                      
                        <input type="submit" value="Search">
                      </form>

                      <label for="lresult">Results</label>
                        <select id="lresult" name="result">
                          <option value="">Api Listing</option>
                          <option value="">Api Listing</option>
                          <option value="">Api Listing</option>
                        </select>
                </div>
              </form>
            </div>
          </div>
    </body>

    <script>
    /*-- jQuery(document).ready( function() {
        getAjaxData('epc-data').then(function(data) {
            var epcAddressData = '';
            
        });
    });--*/
    </script>
<?php /**PATH /Users/pantwiboasiako/Api-app/resources/views/layouts/main.blade.php ENDPATH**/ ?>