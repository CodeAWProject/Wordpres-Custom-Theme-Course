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
                        <input type="text" 
                        name="keyword" 
                        placeholder="Type a keyword" 
                        class="form-control"
                        value="<?php echo isset($_GET['keyword']) ? $_GET['keyword'] : '';?>"
                        >
                    </div>

                    <div class="form-group">

                    <label for="">Choose a brand</label>
                        <select name="brand" id="" class="form-control">

                        <option value="">Choose a brand</option>
                            <?php foreach($brands as $brand): ?>
                                <!-- If the brand name was found in url and the brand name equals the slug in this loop then selected-->
                                <option      
                                
                                <?php if(  isset($_GET['brand']) && ($_GET['brand'] == $brand->slug) ):?>
                                    selected
                                <?php endif; ?>    
                                
                                value="<?php echo $brand->slug; ?>"><?php echo $brand->name; ?></option>
                            <?php endforeach;?>    
                        </select>
                    </div>


                    <button type="submit" class="btn btn-success btn-lg btn-block">Search</button>

                </form>


                <?php 

                $args = [
                    'post_type' => 'cars',
                    'post_per_page' => 0,
                    'tax_query' => [],
                    'meta_query' => [
                        'relation' => 'AND',
                    ],

                ];

                if( isset($_GET['keyword']))
                {
                    if(!empty($_GET['keyword']))
                    {

                        // Search the content of that specific post
                        $args['s'] = $_GET['keyword'];
                    }
                }

                $query = new WP_Query($args);

                ?>
                

                <!-- If there are results -->
                <?php if( $query->have_posts() ) :?>

                    <?php while( $query->have_posts() ) : $query->the_post();?>

                        <img src="<?php the_post_thumbnail_url('blog-large'); ?>" alt="<?php the_title(); ?>" class="img-fluid mb-3 img-thumbnail">

                        <h3><?php the_title(); ?></h3>

                    <?php endwhile;?>    

                <?php else:?>

                    <div class="clearfix mb-3"></div>

                <div class="alert alert-danger">There are no results  </div>    
                  

                <?php endif; ?>    
            </div>    
        </div>

    </div>

</section>



<?php get_footer();?>    