<?php get_header();

while(have_posts()) {
    the_post(); ?>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php the_content(); ?>
    <hr>
  <?php }

  get_footer();

?>



<!-- <?php 
    $namelist = array('Gopal','Hari','Sagar','Ram');

    $count = 0;

    //here we could use for each loop as in other programming language

    //but in WP  to work with pages and posts its more convinient to use 
    //while loop instead of for each otherwise using for each loop is very ;
    //convinient as well as easy approach .

    // while($count<count($namelist)){
    while($count<50){


        // echo "$namelist[$count]";

        // echo "<li>$namelist[$count]</li>";

        echo "<li>$count</li>";

        $count++;
    }
?> -->






<!-- <?php 
    function displayFullName($name,$sername){

        echo "<h2> your name is $name  and your lastname is definately <b>$sername</b> </h2>";
    }

    // displayName('Rabindra');


    // displayFullName('Rabindra',3);
    displayFullName('Rabindra','Dahal');
    // displayName();
?>

<h2> <?php  bloginfo('name');?> </h2>
<p> <?php  bloginfo('description');?></p> -->
