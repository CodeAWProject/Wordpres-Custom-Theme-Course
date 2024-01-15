<?php 

/*
Template Name: Car Search
*/

$brands = get_terms([
    'taxonomy' => 'brands',
    'hide_empty' => false,
]);

?>

<?php get_header();?>


<section class="page-wrap">
    <div class="container">

        <div class="card">

            <div class="card-body">
           
                <form action="<?php echo home_url('/car-search'); ?>">

                    <div class="form-group">               
                        <label for="kayword">Type a kayword</label>
                        <input type="text" name="keyword" placeholder="Type a keyword" class="form-control">
                    </div>

                    <div class="form-group">

                    <label for="">Choose a brand</label>
                        <select name="brand" id="" class="form-control">

                        <option value="">Choose a brand</option>
                            <?php foreach($brands as $brand): ?>
                                <option value="<?php echo $brand->slug; ?>"><?php echo $brand->name; ?></option>
                            <?php endforeach;?>    
                        </select>
                    </div>


                    <button type="submit" class="btn btn-success btn-lg btn-block">Search</button>

                </form>

            </div>    
        </div>

    </div>

</section>



<?php get_footer();?>    